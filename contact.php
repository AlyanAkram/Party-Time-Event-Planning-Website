<?php 
include 'db.php';
session_start(); // Start the session
?>
<?php include('header.php'); ?>
<link rel="stylesheet" href="styles.css">  <!-- Global Styles -->
<link rel="stylesheet" href="contact.css">  <!-- Global Styles -->
<main>
    <section class="contact-form">
        <h2>Contact Us</h2>
        <form action="functions.php" method="post">
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
