<?php 
include 'db.php';
session_start(); // Start the session
?>

<link rel="stylesheet" href="styles.css">  <!-- Global Styles -->
<link rel="stylesheet" href="index.css">   <!-- Specific styles for the index page -->
<?php include('header.php'); ?>

<!-- Hero Section -->
<div class="hero-banner">
    <div class="hero-image"></div> <!-- Div for background image -->
    <div class="hero-overlay"> <!-- Dark overlay -->
        <a href="booking.php" class='slogan'>
            Elevate Your Experience with Our Themed Events and Celebrations
        </a>
        <p>
        Our expert team is dedicated to creating unforgettable moments tailored to your vision. From stunning weddings to vibrant corporate galas, we handle every detail to ensure a seamless event. Let us bring your dream occasion to life with our comprehensive event planning services!
        </p>
        <a href="booking.php" class='cta-button'>Start Planning Your Event Today</a>
    </div>
</div>


<main>
    <!-- Services Overview Section -->
    <section class="services-overview">
        <h2>Our Services</h2>
        <div class="service-list">
            <!-- Themed Events -->
            <div class="service-item" onclick="location.href='booking.php?package=themed_events'"> <!-- Make the entire banner clickable -->
                <img src="images/themed-events.jpg" alt="Themed Events">
                <h3>Themed Events</h3>
                <p>From elegant galas to whimsical celebrations, we bring your theme to life with style.</p>
            </div>

            <!-- Marquee Parties -->
            <div class="service-item" onclick="location.href='booking.php?package=marquee_parties'"> <!-- Make the entire banner clickable -->    
                <img src="images/marquee-parties.jpg" alt="Marquee Parties">
                <h3>Marquee Parties</h3>
                <p>Exclusive marquee setups for unforgettable outdoor experiences.</p>
            </div>

            <!-- Special Celebrations -->
            <div class="service-item" onclick="location.href='booking.php?package=special_celebrations'"> <!-- Make the entire banner clickable -->
                <img src="images/special-celebrations.jpg" alt="Special Celebrations">
                <h3>Special Celebrations</h3>
                <p>Mark your milestones with our tailored celebration services.</p>
            </div>

            <!-- Entertainment -->
            <div class="service-item" onclick="location.href='booking.php?package=entertainment'">
                <!-- Make the entire banner clickable -->
                <img src="images/entertainment.jpg" alt="Entertainment">
                <h3>Entertainment</h3>
                <p>Top-notch entertainers, live bands, and DJs to keep your guests entertained.</p>
            </div>
            <!-- Other Services -->
            <div class="service-item" onclick="location.href='booking.php?package=other_services'">
                <!-- Make the entire banner clickable -->
                <img src="images/other-services.jpg" alt="Other Services">
                <h3>Other Services</h3>
                <ul>
                    <li>Fundraisers</li>
                    <li>Bespoke Catering</li>
                    <li>Themes and Props</li>
                    <li>Invitations and Printworks</li>
                    <li>Sound and Lighting</li>
                </ul>
            </div>
        </div>
    
    </section>
</main>
    <!-- Hero Section -->
<div class="hero-banner2">
    <a href="services.php"> <!-- Make the entire banner clickable -->
        <div class="hero-image2"></div> <!-- Div for background image -->
        <div class="hero-overlay2"> <!-- Dark overlay -->
            <h2 class='slogan'>Need More Information?</h2>
            <p classname>Transform your vision into reality with our tailored event planning services. We specialize in crafting personalized experiences, ensuring every detail reflects your unique style. Let’s make your next event unforgettable!</p>
            <p>Contact us to plan your perfect event.</p>
        </div>
    </a>
</div>


<main>
        <!-- Updated Packages Section -->
    <section class="packages">
    <h2>Our Packages</h2>
    
    <!-- Bronze Package -->
    <div class="package bronze-package" onclick="location.href='booking.php?package=bronze'">
        <h3>Bronze Package</h3>
        <ul>
            <li>Room decorations – balloons, banners</li>
            <li>Table decorations – centerpieces, gifts</li>
            <li>DJ entertainment</li>
            <li>Cold buffet</li>
        </ul>
        <div class="package-image">
        <img src="images/bronze-package.jpg" alt="Bronze Package Image">
    </div>
    </div>
    
    <!-- Silver Package -->
    <div class="package silver-package" onclick="location.href='booking.php?package=silver'">
        <h3>Silver Package</h3>
        <p><strong>Includes all from Bronze package plus:</strong></p>
        <ul>
            <li>Invitation design and handling</li>
            <li>Party cost clear up</li>
            <li>Live band entertainment</li>
            <li>Cold buffet and soft drinks</li>
        </ul>
        <div class="package-image">
        <img src="images/silver-package.jpg" alt="Silver Package Image">
    </div>
    </div>
    
    <!-- Gold Package -->
    <div class="package gold-package" onclick="location.href='booking.php?package=gold'">
        <h3>Gold Package</h3>
        <p><strong>Includes all from Silver package plus:</strong></p>
        <ul>
            <li>Staff in attendance to ensure complete perfection</li>
            <li>Finding guest accommodation, booking transport</li>
            <li>Live band entertainment and magician</li>
            <li>Hot and cold buffet and soft drinks</li>
        </ul>
        <div class="package-image">
        <img src="images/gold-package.jpg" alt="Bronze Package Image">
    </div>
    </div>
    
    <!-- Custom Packages -->
    <div class="package custom-package" onclick="location.href='contact.php'">
        <h3>Custom Packages</h3>
        <p>Custom packages are available for specific parties, additional decorations, and additional staff. Please <a href="contact.php">contact us</a> to arrange any custom packages tailored to your needs.</p>
    </div>
    </section>
</main>

<?php include('footer.php'); ?>
