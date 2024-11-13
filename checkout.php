<?php
include 'db.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Ensure booking details are set in session
if (!isset($_SESSION['booking_details'])) {
    echo "Booking details not found.";
    exit;
}

// Retrieve booking details from session
$bookingDetails = $_SESSION['booking_details'];
$totalPrice = isset($_SESSION['total_price']) ? $_SESSION['total_price'] : 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from the checkout form
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];
    $cardholder = $_POST['cardholder'];
    $cardnumber = $_POST['cardnumber'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];

    // Insert booking data into the database
    $user_id = $_SESSION['user_id'];
    $package = $bookingDetails['package'];
    $event_date = $bookingDetails['event_date'];
    $time_slot = $bookingDetails['time_slot'];
    $guests = $bookingDetails['guests'];
    $message = isset($bookingDetails['message']) ? $bookingDetails['message'] : '';

    $query = "INSERT INTO bookings (user_id, package, event_date, time_slot, guests, message, total_price, status)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    $status = 'Pending'; // Set initial status to 'Pending'
    $stmt->bind_param("isssisss", $user_id, $package, $event_date, $time_slot, $guests, $message, $totalPrice, $status);

    if ($stmt->execute()) {
        // Booking successful, get the booking ID and update status
        $booking_id = $stmt->insert_id;

        // Update status to 'Paid'
        $updateStatusQuery = "UPDATE bookings SET status = 'Paid' WHERE booking_id = ?";
        $updateStmt = $conn->prepare($updateStatusQuery);
        $updateStmt->bind_param("i", $booking_id);
        if ($updateStmt->execute()) {
            $_SESSION['booking_id'] = $booking_id; // Save booking_id in session if needed later
            unset($_SESSION['booking_details']); // Clear the session data after booking
            unset($_SESSION['total_price']);
            
            // Redirect to success page
            header("Location: success.php");
            exit;
        } else {
            echo "Error updating status: " . $updateStmt->error;
        }
    } else {
        // Error during booking
        echo "Error: " . $stmt->error;
    }
}
?>

<?php include('header.php'); ?>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="checkout.css">

<main>
    <section class="checkout-form">
        <h2>Checkout</h2>
        
        <div class="order-summary">
            <h3>Your Booking Summary</h3>
            <p><strong>Package: </strong><?php echo ucfirst($bookingDetails['package']); ?> Package</p>
            <p><strong>Event Date: </strong><?php echo $bookingDetails['event_date']; ?></p>
            <p><strong>Time Slot: </strong><?php echo ucfirst($bookingDetails['time_slot']); ?></p>
            <p><strong>Guests: </strong><?php echo $bookingDetails['guests']; ?></p>
            <p><strong>Message: </strong><?php echo $bookingDetails['message'] ?? 'N/A'; ?></p>
            <p><strong>Total Price: </strong><?php echo number_format($totalPrice, 2); ?> PKR</p>
        </div>
        
        <form action="checkout.php" method="post">
            <h3>Shipping Information</h3>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>

            <label for="city">City:</label>
            <input type="text" name="city" id="city" required>

            <label for="zip">ZIP Code:</label>
            <input type="text" name="zip" id="zip" required>

            <label for="phone">Phone Number (XXXX-XXXXXXX):</label>
            <input type="text" name="phone" id="phone" required oninput="formatPhoneNumber(this);" placeholder="XXXX-XXXXXXX">

            <h3>Payment Information</h3>
            <label for="cardholder">Cardholder Name:</label>
            <input type="text" name="cardholder" id="cardholder" required>

            <label for="cardnumber">Card Number:</label>
            <input type="text" name="cardnumber" id="cardnumber" required maxlength="19" oninput="formatCardNumber(this)" placeholder="XXXX-XXXX-XXXX-XXXX">

            <label for="expiry">Expiration Date (MM/YY):</label>
            <input type="text" name="expiry" id="expiry" required maxlength="5" placeholder="MM/YY" oninput="formatExpiry(this)">

            <label for="cvv">CVV:</label>
            <input type="text" name="cvv" id="cvv" required>

            <button type="submit" class="btn checkout-btn">Complete Booking</button>
        </form>
    </section>
</main>

<script>
// Your formatting functions remain the same
</script>

<?php include('footer.php'); ?>
