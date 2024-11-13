<?php
include 'db.php';
session_start(); // Start the session

if (!isset($_SESSION['user_id'])) {
    echo '
    <style>
        /* Center the h1 message */
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
    
    <h1>You need to Login Before. Redirecting...</h1>';
    echo '<meta http-equiv="refresh" content="2;url=login.php">';
    exit;
}

if (isset($_POST['book'])) {
    $package = $_POST['package'];
    $event_date = $_POST['event_date'];
    $time_slot = $_POST['time_slot'];
    $guests = $_POST['guests'];
    $message = $_POST['message'];
    $user_id = $_SESSION['user_id'];

    // Check if there's already a booking for the same date and time
    $stmt = $conn->prepare("SELECT id FROM bookings WHERE event_date = ? AND time_slot = ?");
    $stmt->bind_param("ss", $event_date, $time_slot);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('This time slot is already booked. Please choose a different time slot.');</script>";
    } else {
        // Insert booking into the database
        $stmt = $conn->prepare("INSERT INTO bookings (user_id, package, event_date, time_slot, guests, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssis", $user_id, $package, $event_date, $time_slot, $guests, $message);

        if ($stmt->execute()) {
            echo "<script>alert('Booking successful!');</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
    }
    $stmt->close();
}
?>

<?php include('header.php'); ?>
<link rel="stylesheet" href="styles.css">  <!-- Global Styles -->
<link rel="stylesheet" href="booking.css"> <!-- Booking Page Styles -->

<main>
    <section class="booking-form">
        <h2>Booking Form</h2>
        
        <?php
        // Retrieve the selected package from the URL
        $selectedPackage = isset($_GET['package']) ? $_GET['package'] : '';
        ?>

<form action="booking.php" method="post">

    <label for="service">Select Service:</label>
    <select name="service" id="service" required>
        <option value="themed_events" <?php if ($selectedPackage === 'themed_events') echo 'selected'; ?>>Themed Events</option>
        <option value="marquee_parties" <?php if ($selectedPackage === 'marquee_parties') echo 'selected'; ?>>Marquee Parties</option>
        <option value="special_celebrations" <?php if ($selectedPackage === 'special_celebrations') echo 'selected'; ?>>Special Celebrations</option>
        <option value="entertainment" <?php if ($selectedPackage === 'entertainment') echo 'selected'; ?>>Entertainment</option>
        <option value="other_services" <?php if ($selectedPackage === 'other_services') echo 'selected'; ?>>Other Services</option>
    </select>

    <label for="package">Select Package:</label>
    <select name="package" id="package" required>
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
    <input type="number" name="guests" min="1" required>

    <label for="message">Additional Requests:</label>
    <textarea name="message"></textarea>

    <input type="submit" name="book" value="Submit Booking">
</form>


    </section>
</main>
<?php include('footer.php'); ?>
