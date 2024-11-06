<?php 
include 'db.php';
session_start(); // Start the session
?>
<?php include('header.php'); ?>
<link rel="stylesheet" href="styles.css">  <!-- Global Styles -->
<link rel="stylesheet" href="about.css">   <!-- About Us Specific Styles -->

<main>
    <section class="about-us">
        <div class="about-banner">
            <img src="images/event-planning.jpg" alt="Event Planning" class="about-image">
            <div class="text-overlay">
                <h2>About Party Time</h2>
                <p>Welcome to <strong>Party Time</strong>, where your celebrations come to life with style, flair, and flawless execution. As a premier event planning company, Party Time is dedicated to creating unforgettable experiences for every occasion. Recently, we’ve experienced a surge in demand, thanks to our unique approach to personalized event planning and our broad range of services. To better serve our clients, we’re enhancing our digital presence to make planning your dream event even easier.</p>
            </div>
        </div>

        <h3>Our Services</h3>
        <p>At Party Time, we offer a diverse array of services to suit any type of event:</p>
        <ul>
            <li><strong>Themed Events</strong>: Bring your vision to life with unique themes that set the perfect tone.</li>
            <li><strong>Marquee Parties</strong>: Enjoy our stunning marquee setups that add an elegant touch to any outdoor event.</li>
            <li><strong>Special Celebrations</strong>: From birthdays to anniversaries, we make your special moments truly memorable.</li>
            <li><strong>Entertainment Packages</strong>: Elevate your event with options like DJs, live bands, magicians, and more.</li>
        </ul>
        
        <div class="about-banner">
            <img src="images/marquee-party.jpg" alt="Marquee Party" class="about-image">
            <div class="text-overlay">
                <h3>Our Additional Services</h3>
                <p>Fundraisers, bespoke catering, themes and props, invitations and printworks, and sound & lighting services tailored to your needs.</p>
            </div>
        </div>

        <h3>Event Packages</h3>
        <p>Our tiered packages make it easy to find the right fit for your celebration, with customizable options available for specific needs:</p>

        <h4>Bronze Package</h4>
        <ul>
            <li>Room and table decorations, including balloons, banners, and centerpieces.</li>
            <li>DJ entertainment and a cold buffet.</li>
        </ul>

        <h4>Silver Package</h4>
        <p>Includes everything in the Bronze package, plus:</p>
        <ul>
            <li>Invitation design and handling.</li>
            <li>Post-party cleanup.</li>
            <li>Live band entertainment.</li>
            <li>Cold buffet and soft drinks.</li>
        </ul>

        <h4>Gold Package</h4>
        <p>Includes everything in the Silver package, plus:</p>
        <ul>
            <li>Attentive staff on-site to ensure event perfection.</li>
            <li>Guest accommodations and transport arrangements.</li>
            <li>Live band entertainment, magician, and a full hot and cold buffet with drinks.</li>
        </ul>

        <p>For unique needs, Party Time also offers <strong>Custom Packages</strong>, tailored specifically to your requests. Whether you need extra decorations, more staff, or additional entertainment options, our team is ready to bring your vision to life. Please contact us to discuss your custom package ideas.</p>

        <div class="about-banner">
            <img src="images/Commitment-event.jpg" alt="Our Commitment" class="about-image">
            <div class="text-overlay">
                <h3>Our Commitment</h3>
                <p>Our new website is designed with you in mind. It offers a modern, user-friendly interface that adapts seamlessly for mobile and desktop users...</p>
            </div>
        </div>

        <p>At Party Time, every detail is crafted with precision to create a memorable event that exceeds expectations. Let us help you make your next event one to remember!</p>
    </section>
</main>

<?php include('footer.php'); ?>
