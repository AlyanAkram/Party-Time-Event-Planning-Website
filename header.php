<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Time</title>
    <link rel="stylesheet" href="header.css"> <!-- Header Styles -->
    <link rel="stylesheet" href="styles.css"> <!-- Global Styles -->
</head>
<body>
<header class="header">
    <nav class="nav-container">
            <a href="index.php" class="nav-link">Home</a>
            <a href="about.php" class="nav-link">About</a>
            <a href="services.php" class="nav-link">Services</a>
            <a href="contact.php" class="nav-link">Contact</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="booking.php" class="nav-link">Bookings</a>
            <div class="auth-links">    
                <a href="logout.php" class="nav-link">Logout</a>
            </div>    
                <?php else: ?>
            <div class="auth-links">
                <a href="login.php" class="nav-link">Login</a>
                <a href="signup.php" class="nav-link">Sign Up</a>
            </div>
            <?php endif; ?>
    </nav>
    <button class="hamburger" onclick="toggleNav()">☰</button>
</header>
<script>
function toggleNav() {
    document.querySelector('.nav').classList.toggle('active');
}
</script>
