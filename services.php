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
    <h2 class="services-heading">Offered Services</h2> <!-- Moved outside of the flex container -->

    <!-- Flex container for service items only -->
    <div class="service-items">
        <!-- Themed Events Section -->
        <section id="themed-events" class="service-item" onclick="location.href='booking.php?package=themed_events'">
            <img src="images/themed-events.jpg" alt="Themed Events">
            <h3>Themed Events</h3>
            <p>From elegant galas to whimsical celebrations, we bring your theme to life with style. Our team works closely with you to develop a custom concept that reflects your vision and personality. Choose from popular themes or let us create a unique concept tailored specifically for your event.</p>
            <ul>
                <li>Personalized decorations, props, and settings</li>
                <li>Custom invitation and print design</li>
                <li>Comprehensive theme consultation and planning</li>
                <li>On-site setup and theme coordination</li>
            </ul>
        </section>

        <!-- Marquee Parties Section -->
        <section id="marquee-parties" class="service-item" onclick="location.href='booking.php?package=marquee_parties'">  
            <img src="images/marquee-parties.jpg" alt="Marquee Parties">
            <h3>Marquee Parties</h3>
            <p>Our exclusive marquee setups provide an unforgettable outdoor experience. Ideal for weddings, garden parties, and corporate events, our marquees can be customized with different styles and configurations to suit your preferences.</p>
            <ul>
                <li>Flexible marquee sizes and configurations</li>
                <li>Elegant lighting and decor options</li>
                <li>Climate control options (fans or heaters)</li>
                <li>Seating arrangements and dance floors available</li>
            </ul>
        </section>

        <!-- Special Celebrations Section -->
        <section id="special-celebrations" class="service-item" onclick="location.href='booking.php?package=special_celebrations'"> 
            <img src="images/special-celebrations.jpg" alt="Special Celebrations">
            <h3>Special Celebrations</h3>
            <p>Celebrate life’s biggest moments with our special celebrations package. Perfect for birthdays, anniversaries, or any milestone, we make sure your event is as memorable as possible with tailored services and dedicated planning.</p>
            <ul>
                <li>Custom cake and dessert options</li>
                <li>Special decor tailored to your occasion</li>
                <li>Professional photography and videography services</li>
                <li>Unique entertainment options for all ages</li>
            </ul>
        </section>

        <!-- Entertainment Section -->
        <section id="entertainment" class="service-item" onclick="location.href='booking.php?package=entertainment'"> 
            <img src="images/entertainment.jpg" alt="Entertainment">
            <h3>Entertainment</h3>
            <p>Keep your guests engaged and entertained with top-notch performers, musicians, and DJs. Our entertainment options cater to various event types and themes, ensuring your guests enjoy every moment.</p>
            <ul>
                <li>Live music bands and solo performances</li>
                <li>Professional DJs and sound setup</li>
                <li>Interactive activities and games</li>
                <li>Children’s entertainment options</li>
            </ul>
        </section>

        <!-- Other Services Section -->
        <section id="other-services" class="service-item" onclick="location.href='booking.php?package=other_services'">
            <img src="images/other-services.jpg" alt="Other Services">
            <h3>Other Services</h3>
            <ul>
                <li>Fundraisers: Full service planning and coordination</li>
                <li>Bespoke Catering: Custom menu design with dietary options</li>
                <li>Themes and Props: Exclusive access to a variety of props</li>
                <li>Invitations and Printworks: High-quality, themed print materials</li>
                <li>Sound and Lighting: State-of-the-art audio and visual equipment</li>
            </ul>
            <p>Our additional services cover everything you need to elevate your event, from catering to technical support, ensuring a seamless and enjoyable experience for your guests.</p>
        </section>
    </div>
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
