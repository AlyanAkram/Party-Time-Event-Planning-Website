<?php 
include 'db.php';
session_start(); // Start the session
?>
<?php include('header.php'); ?>
<link rel="stylesheet" href="styles.css">  <!-- Global Styles -->
<link rel="stylesheet" href="booking.css"> <!-- Booking Page Styles -->


<?php
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
?>

<main>
    <section class="booking-form">
        <h2>Booking Form</h2>
        
        <?php
        // Retrieve the selected package from the URL
        $selectedPackage = isset($_GET['package']) ? $_GET['package'] : '';
        ?>

        <form action="functions.php" method="post">
            <label for="package">Select Package:</label>
            <select name="package" id="package">
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
