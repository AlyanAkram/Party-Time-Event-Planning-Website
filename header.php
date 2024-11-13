<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Time</title>
    <link rel="stylesheet" href="header.css"> <!-- Header Styles -->
    <link rel="stylesheet" href="styles.css"> <!-- Global Styles -->
</head>
<header class="header">
    <!-- Logo on the left side -->
    <img src="images/logo.png" alt="Party Time Logo" class="logo">

    <nav class="nav-container">
        <!-- This will be the container for the central menu links -->
        <div class="nav">
            <!-- Home and Services should always be visible -->
            <a href="index.php" class="nav-link nav-home">Home</a>
            <a href="services.php" class="nav-link nav-services">Services</a>

            <!-- These links will go inside the hamburger menu on small screens -->
            <div class="nav-links">
                <a href="about.php" class="nav-link nav-about">About</a>
                <a href="contact.php" class="nav-link nav-contact">Contact</a>

                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="booking.php" class="nav-link nav-bookings">Bookings</a>
                    <div class="auth-links">
                        <a href="logout.php" class="nav-link nav-logout">Logout</a>
                    </div>
                <?php else: ?>
                    <div class="auth-links">
                        <a href="login.php" class="nav-link nav-login">Login</a>
                        <a href="signup.php" class="nav-link nav-signup">Sign Up</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Hamburger button -->
    <button class="hamburger" onclick="toggleNav()">☰</button>
</header>

<script>
function toggleNav() {
    document.querySelector('.nav-links').classList.toggle('active');
}
</script>


