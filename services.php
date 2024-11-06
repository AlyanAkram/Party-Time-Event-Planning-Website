<?php 
include 'db.php';
session_start(); // Start the session
?>
<?php include('header.php'); ?>
<link rel="stylesheet" href="styles.css">  <!-- Global Styles -->
<link rel="stylesheet" href="services.css">  <!-- Services Styles -->

<main>
    <!-- Navigation List for Services in Notebook Style -->
    <section class="notebook-style">
        <h2>Our Services</h2>
        <div class="services-list">
            <ul>
                <li><a href="#themed-events">Themed Events</a></li>
                <li><a href="#marquee-parties">Marquee Parties</a></li>
                <li><a href="#special-celebrations">Special Celebrations</a></li>
                <li><a href="#entertainment">Entertainment</a></li>
                <li><a href="#other-services">Other Services</a></li>
            </ul>
        </div>
    </section>

    <!-- Services Overview Section -->
    <section class="services-overview">
        <h2>Offered Services</h2>
    
    <!-- Standalone Service Sections -->
    <section id="themed-events" class="service-item">
        <a href="booking.php"> 
            <img src="images/themed-events.jpg" alt="Themed Events">
            <h3>Themed Events</h3>
            <p>From elegant galas to whimsical celebrations, we bring your theme to life with style.</p>
        </a>
    </section>
    
    <section id="marquee-parties" class="service-item">
        <a href="booking.php">    
            <img src="images/marquee-parties.jpg" alt="Marquee Parties">
            <h3>Marquee Parties</h3>
            <p>Exclusive marquee setups for unforgettable outdoor experiences.</p>
        </a>
    </section>
    
    <section id="special-celebrations" class="service-item">
        <a href="booking.php"> 
            <img src="images/special-celebrations.jpg" alt="Special Celebrations">
            <h3>Special Celebrations</h3>
            <p>Mark your milestones with our tailored celebration services.</p>
        </a>
    </section>
    
    <section id="entertainment" class="service-item">
        <a href="booking.php"> 
            <img src="images/entertainment.jpg" alt="Entertainment">
            <h3>Entertainment</h3>
            <p>Top-notch entertainers, live bands, and DJs to keep your guests entertained.</p>
        </a>
    </section>
    
    <section id="other-services" class="service-item">
        <a href="booking.php"> 
            <img src="images/other-services.jpg" alt="Other Services">
            <h3>Other Services</h3>
            <ul>
                <li>Fundraisers</li>
                <li>Bespoke Catering</li>
                <li>Themes and Props</li>
                <li>Invitations and Printworks</li>
                <li>Sound and Lighting</li>
            </ul>
        </a>
    </section>
</section>


    <!-- Packages Section -->
    <section class="packages">
        <h2>Our Packages</h2>
        <!-- Packages with Clickable Links -->
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
                <img src="images/gold-package.jpg" alt="Gold Package Image">
            </div>
        </div>

        <div class="package custom-package" onclick="location.href='contact.php'">
            <h3>Custom Packages</h3>
            <p>Custom packages are available for specific parties, additional decorations, and additional staff. Please <a href="contact.php">contact us</a> to arrange any custom packages tailored to your needs.</p>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>
