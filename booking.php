<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo '
    <style>
        body, html {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        h1 {
            font-size: 2em;
            text-align: center;
        }
    </style>
    <h1>You need to login first. Redirecting...</h1>';
    echo '<meta http-equiv="refresh" content="2;url=login.php">';
    exit;
}

if (isset($_POST['book'])) {
    // Gather data from the booking form
    $package = $_POST['package'];
    $event_date = $_POST['event_date'];
    $time_slot = $_POST['time_slot'];
    $guests = $_POST['guests'];
    $message = !empty($_POST['message']) ? $_POST['message'] : NULL;  // Check if message is empty
    $user_id = $_SESSION['user_id'];

    // Base prices for each package
    $prices = [
        'bronze' => 50000,    // Base price for Bronze package
        'silver' => 70000,    // Base price for Silver package
        'gold' => 100000      // Base price for Gold package
    ];

    // Get the base price for the selected package
    $basePrice = $prices[$package];

    // Calculate the number of extra guests (if any) above the 30 limit
    $extraGuests = max(0, $guests - 30);

    // Additional cost for each extra guest
    $extraCost = $extraGuests * 1000;

    // Calculate the total price: base price + extra cost
    $totalPrice = $basePrice + $extraCost;

    // Store the booking details in session
    $_SESSION['booking_details'] = [
        'package' => $package,
        'event_date' => $event_date,
        'time_slot' => $time_slot,
        'guests' => $guests,
        'message' => $message
    ];
    $_SESSION['total_price'] = $totalPrice;

    // Redirect to checkout page
    header("Location: checkout.php");
    exit;
}


// Handle booking cancellation or deletion
if (isset($_GET['cancel_booking'])) {
    $booking_id = $_GET['cancel_booking'];

    // Delete the booking from the database
    $deleteBookingSql = "DELETE FROM bookings WHERE booking_id = '$booking_id' AND user_id = '{$_SESSION['user_id']}'";

    if (mysqli_query($conn, $deleteBookingSql)) {
        echo '<script>alert("Booking cancelled and deleted successfully."); window.location.href = "booking.php";</script>';
    } else {
        echo "Error: " . $deleteBookingSql . "<br>" . mysqli_error($conn);
    }
}

?>

<?php include('header.php'); ?>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="booking.css">

<main>
    <section class="booking-form">
        <h2>Booking Form</h2>

        <?php
        $selectedPackage = isset($_GET['package']) ? $_GET['package'] : '';
        ?>

        <form action="booking.php" method="post" id="bookingForm">
            <label for="service">Select Service:</label>
            <select name="service" id="service" required>
                <option value="themed_events" <?php if ($selectedPackage === 'themed_events') echo 'selected'; ?>>Themed Events</option>
                <option value="marquee_parties" <?php if ($selectedPackage === 'marquee_parties') echo 'selected'; ?>>Marquee Parties</option>
                <option value="special_celebrations" <?php if ($selectedPackage === 'special_celebrations') echo 'selected'; ?>>Special Celebrations</option>
                <option value="entertainment" <?php if ($selectedPackage === 'entertainment') echo 'selected'; ?>>Entertainment</option>
                <option value="other_services" <?php if ($selectedPackage === 'other_services') echo 'selected'; ?>>Other Services</option>
            </select>

            <label for="package">Select Package:</label>
            <select name="package" id="package" required onchange="updateEstimate()">
                <option value="bronze" <?php if ($selectedPackage === 'bronze') echo 'selected'; ?>>Bronze Package</option>
                <option value="silver" <?php if ($selectedPackage === 'silver') echo 'selected'; ?>>Silver Package</option>
                <option value="gold" <?php if ($selectedPackage === 'gold') echo 'selected'; ?>>Gold Package</option>
            </select>

            <label for="event_date">Event Date:</label>
            <input type="date" name="event_date" required>

            <label for="time_slot">Select Time Slot:</label>
            <select name="time_slot" id="time_slot" required>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
            </select>

            <label for="guests">Number of Guests:</label>
            <input type="number" name="guests" id="guests" min="1" required oninput="updateEstimate()">

            <label for="message">Additional Requests:</label>
            <textarea name="message"></textarea>

            <!-- Estimated Price Display -->
            <div id="estimatedPrice">
                <strong>Estimated Price: </strong><span id="priceDisplay">0</span> PKR
            </div>

            <input type="submit" name="book" value="Proceed to Checkout">
        </form>
    </section>

    <section class="my-bookings">
        <h2>Your Bookings</h2>
        <?php
        $user_id = $_SESSION['user_id'];
        $result = mysqli_query($conn, "SELECT * FROM bookings WHERE user_id = '$user_id'");

        if (mysqli_num_rows($result) > 0) {
            echo '<table><tr><th>Package</th><th>Event Date</th><th>Guests</th><th>Total Price</th><th>Status</th><th>Cancel Booking</th></tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                        <td>' . $row['package'] . '</td>
                        <td>' . $row['event_date'] . '</td>
                        <td>' . $row['guests'] . '</td>
                        <td>' . $row['total_price'] . ' PKR</td>
                        <td>' . ucfirst($row['status']) . '</td>
                        <td><a href="booking.php?cancel_booking=' . $row['booking_id'] . '" onclick="return confirm(\'Are you sure you want to cancel this booking?\');">Cancel</a></td>
                      </tr>';
            }
            echo '</table>';
        } else {
            echo '<p>No bookings found.</p>';
        }
        ?>
    </section>
</main>

<script>
// Package base prices
const prices = {
    'bronze': 50000,
    'silver': 70000,
    'gold': 100000
};

// Function to calculate and update estimated price
function updateEstimate() {
    const package = document.getElementById('package').value;
    const guests = parseInt(document.getElementById('guests').value) || 0;
    const basePrice = prices[package] || 0;

    // Additional cost per guest if guest count exceeds 30
    const extraGuests = Math.max(0, guests - 30);
    const extraCost = extraGuests * 1000;
    const totalPrice = basePrice + extraCost;

    document.getElementById('priceDisplay').textContent = totalPrice.toLocaleString();
}
</script>

<?php include('footer.php'); ?>
