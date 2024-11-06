<?php
include 'db.php'; // Include the database connection
session_start(); // Start the session

// Handle form submission
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message); // "sss" indicates three string parameters

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Message sent successfully');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    // Close the statement
    $stmt->close();
}
?>
<?php include('header.php'); ?>
<link rel="stylesheet" href="styles.css">  <!-- Global Styles -->
<link rel="stylesheet" href="contact.css">  <!-- Contact Styles -->
<main>
    <section class="contact-form">
        <h2>Contact Us</h2>
        <form action="contact.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" required>
            
            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="message">Message</label>
            <textarea name="message" required></textarea>

            <button type="submit" name="submit">Send Message</button>
        </form>
    </section>
</main>
<?php include('footer.php'); ?>
