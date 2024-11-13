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
            <div class="service-item" onclick="location.href='booking.php?package=themed_events'">
                <img src="images/themed-events.jpg" alt="Themed Events">
                <h3>Themed Events</h3>
                <p>From elegant galas to whimsical celebrations, we bring your theme to life with style.</p>
            </div>
            <div class="service-item" onclick="location.href='booking.php?package=marquee_parties'">    
                <img src="images/marquee-parties.jpg" alt="Marquee Parties">
                <h3>Marquee Parties</h3>
                <p>Exclusive marquee setups for unforgettable outdoor experiences.</p>
            </div>
            <div class="service-item" onclick="location.href='booking.php?package=special_celebrations'">
                <img src="images/special-celebrations.jpg" alt="Special Celebrations">
                <h3>Special Celebrations</h3>
                <p>Mark your milestones with our tailored celebration services.</p>
            </div>
            <div class="service-item" onclick="location.href='booking.php?package=entertainment'">
                <img src="images/entertainment.jpg" alt="Entertainment">
                <h3>Entertainment</h3>
                <p>Top-notch entertainers, live bands, and DJs to keep your guests entertained.</p>
            </div>
            <div class="service-item" onclick="location.href='booking.php?package=other_services'">
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

<div class="hero-banner2">
    <a href="services.php">
        <div class="hero-image2"></div>
        <div class="hero-overlay2">
            <h2 class='slogan'>Need More Information?</h2>
            <p>Transform your vision into reality with our tailored event planning services. We specialize in crafting personalized experiences, ensuring every detail reflects your unique style. Let’s make your next event unforgettable!</p>
            <p>Contact us to plan your perfect event.</p>
        </div>
    </a>
</div>

<main>
<section class="packages">
    <h2>Our Packages</h2>
    <div class="package bronze-package" onclick="location.href='booking.php?package=bronze'">
        <h3>Bronze Package</h3>
        <p><strong>Price:</strong> 50,000 PKR</p>
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
        <p><strong>Price:</strong> 70,000 PKR</p>
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
        <p><strong>Price:</strong> 100,000 PKR</p>
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


    <!-- Testimonial Section -->
    <section class="testimonials">
      <h2>What Our Clients Say</h2>
      <div class="testimonials-container">
        <!-- Testimonial 1 -->
        <div class="testimonial-item active">
          <p>"Party Time made our wedding unforgettable! The attention to detail and personal touch made everything perfect. Highly recommend!"</p>
          <h4>Sarah & John</h4>
        </div>
        <!-- Testimonial 2 -->
        <div class="testimonial-item">
          <p>"The themed event we booked was amazing. Our guests were blown away by the creativity and execution. Definitely booking again!"</p>
          <h4>Emily & Tom</h4>
        </div>
        <!-- Testimonial 3 -->
        <div class="testimonial-item">
          <p>"Exceptional service! The marquee setup was just what we needed for our outdoor gala. Couldn't have asked for a better event." </p>
          <h4>Mark & Lisa</h4>
        </div>
        <!-- Testimonial 4 -->
        <div class="testimonial-item">
          <p>"Party Time's team brought our vision to life! Every detail was managed so smoothly. We couldn't have asked for a better event." </p>
          <h4>Rebecca & David</h4>
        </div>
        <!-- Testimonial 5 -->
        <div class="testimonial-item">
          <p>"Amazing service, and the entertainment package was fantastic. Our guests had a blast! Will definitely return." </p>
          <h4>Charlie & Mia</h4>
        </div>
        <!-- Testimonial 6 -->
        <div class="testimonial-item">
          <p>"Absolutely loved the Gold Package! It exceeded our expectations, and everything was executed perfectly. Worth every penny." </p>
          <h4>Olivia & Jake</h4>
        </div>
      </div>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </section>

    <script>
        // JavaScript for Testimonial Slider
        let currentIndex = 0;
        const testimonials = document.querySelectorAll('.testimonial-item');
        const totalTestimonials = testimonials.length;

        const showTestimonial = (index) => {
            // Remove active class from all testimonials
            testimonials.forEach((testimonial, idx) => {
                testimonial.classList.remove('active');
            });
            // Add active class to the current testimonial
            testimonials[index].classList.add('active');
        };

        const nextTestimonial = () => {
            currentIndex = (currentIndex + 1) % totalTestimonials;
            showTestimonial(currentIndex);
        };

        const prevTestimonial = () => {
            currentIndex = (currentIndex - 1 + totalTestimonials) % totalTestimonials;
            showTestimonial(currentIndex);
        };

        // Automatic slider change every 4 seconds
        setInterval(nextTestimonial, 4000);

        // Event listeners for the next and previous buttons
        document.querySelector('.next').addEventListener('click', nextTestimonial);
        document.querySelector('.prev').addEventListener('click', prevTestimonial);

        // Initialize the first testimonial
        showTestimonial(currentIndex);
    </script>

</main>

<?php include('footer.php'); ?>
