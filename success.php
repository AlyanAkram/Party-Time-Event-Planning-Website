<?php 
session_start();

// Ensure the session data is available
if (!isset($_SESSION['phone'], $_SESSION['address'], $_SESSION['package'], $_SESSION['price'])) {
    // Redirect if session data is not set
    header("Location: checkout.php");
    exit;
}

// Retrieve session data for success message
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];
$package = $_SESSION['package'];
$price = $_SESSION['price'];
?>

<?php include('header.php'); ?>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="success.css"> <!-- Add custom success page styles -->

<main class="success-page">
    <section class="success-message">
        <h1>Booking Confirmed!</h1>
        <p>Your booking has been successfully confirmed.</p>
        <div class="confirmation-details">
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
            <p><strong>Package:</strong> <?php echo $package; ?></p>
            <p><strong>Price:</strong> <?php echo $price; ?> PKR</p>
        </div>
        <p>Thank you for booking with us! You will receive further details via email.</p>
    </section>
</main>

<?php include('footer.php'); ?>

<!-- Add JavaScript for auto redirect after 5 seconds -->
<script>
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 10000); // Redirect after 5 seconds
</script>
