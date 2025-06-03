<!DOCTYPE html>
<!-- saved from url=(0125)https://kalanidhithemes.com/live-preview/landing-page/appiq/all-demo/multipage/02-food-delivery-static-centre-hero/index.html -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>GenMove - Your Premium Ride Service</title>

    <!-- Existing CSS links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/Genmove-assets/ride-home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/Genmove-assets/style-copy.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-assets/Genmove-assets/ride-home2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('front-assets/css/slick.css')}}">
    <!-- icofont-css-link -->
    <link rel="stylesheet" href="{{asset('khanakhazana-assets/icofont.min.css') }}">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="{{asset('khanakhazana-assets/owl.carousel.min.css') }}">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="{{asset('khanakhazana-assets/bootstrap.min.css') }}">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="{{asset('khanakhazana-assets/aos.css') }}">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="{{asset('khanakhazana-assets/style.css') }}">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="{{asset('khanakhazana-assets/responsive.css') }}">
    <!-- Favicon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/dr8c9t2zv/image/upload/v1747648011/Genmove-logo_1_ktannc.jpg"
        type="image/x-icon">
    <!-- font 1 -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{asset('khanakhazana-assets/css2') }}" rel="stylesheet">
    <!-- font 2 -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="{{asset('khanakhazana-assets/css2(1)') }}" rel="stylesheet">
    @section('css')
    @endsection
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="{{ asset('front-assets/Genmove-assets/styles.css') }}">
</head>
<style>
    /* Base Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Container */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    /* Header Styling */
    .genmove-header {
        background: linear-gradient(145deg, #ddd, #261515);
        color: #fff;
        padding: 0.8rem 0;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Logo */
    .header-logo img {
        height: 50px;
        width: auto;
        transition: transform 0.3s ease;
    }

    .header-logo img:hover {
        transform: scale(1.05);
    }

    /* Nav Menu */
    .header-nav {
        display: flex;
        align-items: center;
    }

    .nav-links {
        list-style: none;
        display: flex;
        gap: 2rem;
        margin: 0;
        padding: 0;
    }

    .nav-links li a {
        text-decoration: none;
        color: #f4f4f4;
        font-weight: 500;
        font-size: 1.1rem;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-links li a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: #ffd700;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-links li a:hover {
        color: #ffd700;
    }

    .nav-links li a:hover::after {
        width: 80%;
    }

    .hamburger:hover {
        color: #ffd700;
    }

    /* Responsive Navigation */
    @media (max-width: 991px) {
        .hamburger {
            /* display: block; */
            display: flex;
            justify-content: end;
        }

        .header-nav {
            position: fixed;
            top: 66px;
            left: -100%;
            width: 100%;
            /* height: calc(100vh - 370px); */
            height: auto;
            background: rgba(38, 21, 21, 0.95);
            backdrop-filter: blur(10px);
            transition: left 0.3s ease;
            padding: 2rem;
        }

        .header-nav.active {
            left: 0;
        }

        .nav-links {
            flex-direction: column;
            gap: 1.5rem;
            align-items: center;
        }

        .nav-links li a {
            font-size: 1.2rem;
            padding: 0.8rem 1.5rem;
            display: block;
            width: 100%;
            text-align: center;
        }

        .nav-links li a::after {
            display: none;
        }

        .nav-links li a:hover {
            background: rgba(255, 215, 0, 0.1);
        }
    }

    @media (max-width: 576px) {
        .header-logo img {
            height: 40px;
        }

        .nav-links li a {
            font-size: 1.1rem;
            padding: 0.6rem 1rem;
        }
    }
</style>
<!-- Header Start -->
<header class="genmove-header">
    <div class="container">
        <div class="header-content">
            <a href="/" class="header-logo">
                <img src="https://res.cloudinary.com/dr8c9t2zv/image/upload/v1748342409/Genmove-logo_1_2_jvk25b.jpg"
                    alt="GenMove Logo">
            </a>
            <button class="hamburger" id="hamburgerBtn">
                <i class="fas fa-bars"></i>
            </button>
            <nav class="header-nav" id="headerNav">
                <ul class="nav-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ url('/page/vendor-registration') }}" target="_blank">Merchants</a></li>
                    <li><a href="{{ url('/page/driver-registration') }}" target="_blank">Riders</a></li>
                    <li><a href="#about">About Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main>
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container hero-overlay">
            <div class="hero-content" data-aos="fade-right">
                <h1 class="animate-fade-in">Quick & Reliable <span>Taxi Service</span></h1>
                <p class="animate-fade-in">Your comfortable journey is our priority. Book a taxi in seconds.</p>
                <div class="hero-buttons animate-fade-in">
                    <a href="{{ route('userHome') }}" class="primary-button">Book a Ride</a>
                    <a href="#services" class="secondary-button">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Our Taxi Services</h2>
                <p>Choose from our variety of premium taxi services tailored to your needs</p>
            </div>
            <div class="service-cards">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>City Travel</h3>
                    <p>Quick and reliable transport within the city at affordable rates.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3>Airport Transfers</h3>
                    <p>Scheduled pickups and drop-offs to ensure you never miss your flight.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Corporate Services</h3>
                    <p>Professional transport solutions for businesses and executives.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- New Section: GenMove App Features -->
    <section id="app-features" class="app-features-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Experience the Power of GenMove</h2>
                <p>Discover the features that make GenMove the best choice for your transportation needs.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon" style="background-color: #ff6b6b;">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h3>Quick Onboarding</h3>
                    <p>Sign up easily using your preferred method - email, social media, or phone number - and start
                        booking rides in minutes.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon" style="background-color: #4ecdc4;">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Customizable Solutions</h3>
                    <p>Our reliable and user-friendly taxi software provides a fantastic ride experience tailored to
                        your location and needs.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon" style="background-color: #45b7d1;">
                        <i class="fas fa-taxi"></i>
                    </div>
                    <h3>Effortless Ride Management</h3>
                    <p>View and manage all your current and upcoming ride requests from one simple interface. Make
                        changes or track your ride with just a few taps.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon" style="background-color: #f7e9a6;">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <h3>Secure Payment Integrations</h3>
                    <p>GenMove supports popular and secure payment gateways, ensuring smooth transactions and regular
                        updates for convenience.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon" style="background-color: #b8a9c9;">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3>Real-time Updates & Notifications</h3>
                    <p>Receive instant alerts via SMS, email, and push notifications for ETAs, fare estimates,
                        promotions, and important ride updates.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon" style="background-color: #ff8a5c;">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3>Intelligent Driver Matching</h3>
                    <p>Our smart algorithm quickly matches you with the nearest available driver, ensuring minimal
                        waiting times and efficient pickups.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>How It Works</h2>
                <p>Experience hassle-free taxi booking in four simple steps</p>
            </div>
            <div class="steps">
                <div class="step" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Book Your Ride</h3>
                    <p>Enter your pickup and destination locations in our easy-to-use app. Choose from economy, comfort,
                        or luxury vehicle options based on your needs.</p>
                </div>
                <div class="step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>Get Picked Up</h3>
                    <p>We'll instantly connect you with the nearest available driver. View driver details, ratings, and
                        estimated arrival time before they arrive.</p>
                </div>
                <div class="step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Enjoy Your Ride</h3>
                    <p>Sit back, relax, and enjoy a comfortable ride to your destination. Pay seamlessly through the app
                        with multiple payment options.</p>
                </div>
                <div class="step" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">4</div>
                    <div class="step-icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <h3>Rate Your Experience</h3>
                    <p>After your ride, rate your driver and provide feedback. Your input helps us improve our service
                        and maintain high standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Section -->
    <section id="fleet" class="fleet">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Our Fleet</h2>
                <p>Choose from our range of comfortable and luxurious vehicles</p>
            </div>
            <div class="fleet-cards">
                <div class="fleet-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="fleet-image">
                        <img src="https://placehold.co/400x250/olive/white?text=Economy" alt="Economy Car">
                    </div>
                    <div class="fleet-details">
                        <h3>Economy</h3>
                        <p>Affordable and comfortable for city travel, up to 4 passengers.</p>
                        <ul class="fleet-features">
                            <li><i class="fas fa-users"></i> 4 Passengers</li>
                            <li><i class="fas fa-suitcase"></i> 2 Luggage</li>
                            <li><i class="fas fa-snowflake"></i> Air Conditioning</li>
                        </ul>
                    </div>
                </div>
                <div class="fleet-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="fleet-image">
                        <img src="https://placehold.co/400x250/olive/white?text=Business" alt="Business Car">
                    </div>
                    <div class="fleet-details">
                        <h3>Business</h3>
                        <p>Premium comfort with extra amenities, perfect for professionals.</p>
                        <ul class="fleet-features">
                            <li><i class="fas fa-users"></i> 4 Passengers</li>
                            <li><i class="fas fa-suitcase"></i> 3 Luggage</li>
                            <li><i class="fas fa-wifi"></i> Free Wi-Fi</li>
                        </ul>
                    </div>
                </div>
                <div class="fleet-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="fleet-image">
                        <img src="https://placehold.co/400x250/olive/white?text=SUV" alt="SUV">
                    </div>
                    <div class="fleet-details">
                        <h3>SUV</h3>
                        <p>Spacious vehicle for groups and families with extra luggage.</p>
                        <ul class="fleet-features">
                            <li><i class="fas fa-users"></i> 6 Passengers</li>
                            <li><i class="fas fa-suitcase"></i> 4 Luggage</li>
                            <li><i class="fas fa-baby"></i> Child Seat Available</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Our Pricing</h2>
                <p>Transparent fares with no hidden charges</p>
            </div>
            <div class="pricing-cards">
                <div class="pricing-card animate-fade-in">
                    <div class="pricing-header">
                        <h3>City Travel</h3>
                        <div class="price"><span>$</span>2.50<span>/km</span></div>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Base fare: $5.00</li>
                            <li><i class="fas fa-check"></i> Per kilometer: $2.50</li>
                            <li><i class="fas fa-check"></i> Waiting time: $0.50/min</li>
                            <li><i class="fas fa-check"></i> No surge pricing</li>
                            <li><i class="fas fa-check"></i> 24/7 availability</li>
                        </ul>
                    </div>
                    <a href="#" class="primary-button">Book Now</a>
                </div>
                <div class="pricing-card featured animate-fade-in">
                    <div class="pricing-badge">Popular</div>
                    <div class="pricing-header">
                        <h3>Airport Transfer</h3>
                        <div class="price"><span>$</span>60<span>/trip</span></div>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Fixed price</li>
                            <li><i class="fas fa-check"></i> Free waiting time (60 min)</li>
                            <li><i class="fas fa-check"></i> Flight tracking</li>
                            <li><i class="fas fa-check"></i> Meet & greet service</li>
                            <li><i class="fas fa-check"></i> Help with luggage</li>
                        </ul>
                    </div>
                    <a href="#" class="primary-button">Book Now</a>
                </div>
                <div class="pricing-card animate-fade-in">
                    <div class="pricing-header">
                        <h3>Hourly Hire</h3>
                        <div class="price"><span>$</span>45<span>/hr</span></div>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Minimum 3 hours</li>
                            <li><i class="fas fa-check"></i> Dedicated driver</li>
                            <li><i class="fas fa-check"></i> Multiple stops</li>
                            <li><i class="fas fa-check"></i> No kilometer limit</li>
                            <li><i class="fas fa-check"></i> Ideal for tourism</li>
                        </ul>
                    </div>
                    <a href="#" class="primary-button">Book Now</a>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ Section -->
    <section id="faq" class="faq">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our taxi service</p>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do I book a taxi?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>You can book a taxi through our website, mobile app, or by calling our dispatch center at
                            (555) 123-4567. We recommend booking in advance to ensure availability, especially during
                            peak hours.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What payment methods do you accept?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>We accept cash, credit/debit cards, and mobile payments including Apple Pay and Google Pay.
                            All vehicles are equipped with secure payment terminals for your convenience.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can I pre-book a taxi for the airport?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we recommend pre-booking airport transfers at least 24 hours in advance. We monitor your
                            flight information and adjust pickup times accordingly if there are delays.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Are your drivers licensed and insured?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>All our drivers are fully licensed, insured, and have undergone rigorous background checks.
                            They receive regular training to ensure the highest standards of professionalism and safety.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you offer child seats?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide child seats upon request. Please notify us when booking your taxi if you
                            require a child seat, and specify the age of the child so we can provide the appropriate
                            type.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What is your cancellation policy?</h3>
                        <span class="faq-toggle"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-answer">
                        <p>Cancellations made more than 1 hour before the scheduled pickup time are free of charge.
                            Cancellations made less than 1 hour before may incur a cancellation fee of $10.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>What Our Customers Say</h2>
                <p>Don't just take our word for it - hear from our satisfied customers</p>
            </div>
            <div class="testimonial-container">
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="customer">
                        <img src="https://placehold.co/100/gray/white?text=SJ" alt="Sarah Johnson">
                        <h4>Sarah Johnson</h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p>"The driver arrived exactly on time and got me to the airport with plenty of time to spare. Will
                        definitely use this service again!"</p>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="customer">
                        <img src="https://placehold.co/100/gray/white?text=MC" alt="Michael Chen">
                        <h4>Michael Chen</h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p>"Very clean car and professional driver. The booking process was super easy. Highly recommend!"
                    </p>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="customer">
                        <img src="https://placehold.co/100/gray/white?text=PS" alt="Priya Sharma">
                        <h4>Priya Sharma</h4>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                    <p>"Excellent service at a fair price. The driver was friendly and took the fastest route despite
                        heavy traffic."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta" data-aos="fade-up">
        <div class="container">
            <h2>Ready to book your ride?</h2>
            <p>Get in touch with us now and enjoy a comfortable journey!</p>
            <div class="cta-buttons">
                <a href="#" class="primary-button"><i class="fas fa-phone"></i> Book Now</a>
                <a href="#" class="secondary-button">Learn More</a>
            </div>
        </div>
    </section>

    <section class="feature-highlight-section">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <h2>Why Genmove</h2>
                <h5>Discover the key advantages of choosing our platform</h5>
            </div>
            <div class="feature-grid">
                <!-- Left Features -->
                <div class="feature-column">
                    <div class="feature-box" data-aos="fade-right" data-aos-delay="200">
                        <i class="fas fa-paint-brush icon"></i>
                        <h4>Customizable</h4>
                        <p>Easily customize our app as per your brand needs: logo, color, name, and more.</p>
                    </div>
                    <div class="feature-box" data-aos="fade-right" data-aos-delay="300">
                        <i class="fas fa-sliders-h icon"></i>
                        <h4>Highly Configurable</h4>
                        <p>Set your own rules for dispatching such as pricing, vehicle type, and more.</p>
                    </div>
                    <div class="feature-box" data-aos="fade-right" data-aos-delay="400">
                        <i class="fas fa-shield-alt icon"></i>
                        <h4>Secure</h4>
                        <p>Iron-shield security to protect your sensitive data. It's security-compliant.</p>
                    </div>
                </div>

                <!-- Center Image -->
                <div class="mockup-image" data-aos="fade-up" data-aos-delay="500">
                    <img src="{{ asset('front-assets/Genmove-assets/feature.png') }}" alt="Mobile App UI" />
                </div>

                <!-- Right Features -->
                <div class="feature-column">
                    <div class="feature-box" data-aos="fade-left" data-aos-delay="200">
                        <i class="fas fa-plug icon"></i>
                        <h4>Faster Time to Market</h4>
                        <p>Launch your branded app in days with our ready-made white-label solution.</p>
                    </div>
                    <div class="feature-box" data-aos="fade-left" data-aos-delay="300">
                        <i class="fas fa-clock icon"></i>
                        <h4>Integration</h4>
                        <p>You can integrate payment gateways and other 3rd party software easily.</p>
                    </div>
                    <div class="feature-box" data-aos="fade-left" data-aos-delay="400">
                        <i class="fas fa-chart-line icon"></i>
                        <h4>Scalability</h4>
                        <p>Tailored to address more bookings and grow with your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- New Section: Seamless Booking -->
    <section id="seamless-booking" class="feature-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1" data-aos="fade-right">
                    <div class="feature-image-container">
                        <img src="{{ asset('front-assets/Genmove-assets/main.png') }}" alt="Seamless Booking"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 order-md-2" data-aos="fade-left">
                    <div class="feature-content">
                        <h2>Seamless Booking Experience</h2>
                        <p>Easily find and select your pickup and drop-off locations with our intuitive interface. Save
                            your favorite places for even faster future bookings.</p>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle text-primary"></i> Quick location search</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Save frequently visited addresses</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Real-time location detection</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Section: Route Display and Ride Options -->
    <section id="ride-options" class="feature-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1" data-aos="fade-right">
                    <div class="feature-image-container">
                        <img src="{{ asset('front-assets/Genmove-assets/route.png') }}"
                            alt="Route Display and Ride Options" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 order-md-2" data-aos="fade-left">
                    <div class="feature-content">
                        <h2>Clear Route Display & Flexible Ride Options</h2>
                        <p>See your journey mapped out clearly and choose from various ride options like instant
                            booking, pooling, or bidding for your ride.</p>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle text-primary"></i> Real-time route mapping</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Multiple ride choices</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Transparent pricing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Section: Merchant Benefits -->
    <section id="merchant-benefits" class="feature-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Driving Success for Riders & Drivers</h2>
                <p>Connecting passengers with reliable drivers, delivering safe, convenient, and efficient rides that
                    move people and communities forward!</p>
            </div>
        </div>
    </section>

    <!-- Section: Benefits for Riders -->
    <section id="rider-benefits" class="feature-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-left">
                    <div class="feature-image-container">
                        <img src="{{ asset('front-assets/Genmove-assets/rider-benefits.png') }}" alt="Rider Benefits"
                            class="img-fluid" style="max-height: 500px;">
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="feature-content">
                        <h3>Rider Benefits</h3>
                        <p>Book your ride quickly, enjoy comfortable journeys, and reach your destination safely and
                            efficiently with GenMove.</p>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle text-primary"></i> Effortless Booking</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Reliable and Safe Transportation</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Affordable and Transparent Fares</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Real-time Ride Tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="passenger-benefits" class="feature-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Benefits for Passengers</h2>
                <p>With GenMove, passengers enjoy a fast, safe, and convenient way to get around town—anytime, anywhere.
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="feature-content">
                        <h3>Why Ride with GenMove?</h3>
                        <p>GenMove puts you in control of your travel experience, offering reliable service, real-time
                            tracking, and transparent pricing at your fingertips.</p>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle text-primary"></i> Quick & Easy Booking</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Safe & Reliable Rides</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Real-Time Ride Tracking</li>
                            <li><i class="fas fa-check-circle text-primary"></i> Transparent & Affordable Pricing</li>
                            <li><i class="fas fa-check-circle text-primary"></i> 24/7 Customer Support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="feature-image-container">
                        <img src="{{ asset('front-assets/Genmove-assets/passenger-benefits.png') }}"
                            alt="Passenger Benefits" class="img-fluid" style="max-height: 500px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>



<!-- Initialize AOS -->
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });


    // FAQ Toggle Animation
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const icon = question.querySelector('.faq-toggle i');

            // Toggle answer visibility with animation
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            }
        });
    });
</script>

<!-- Enhanced Footer -->
<footer class="footer" style="background: var(--secondary-color); color: white; padding: 60px 0 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                            <a href="/" class="header-logo">
                <img src="https://res.cloudinary.com/dr8c9t2zv/image/upload/v1748342409/Genmove-logo_1_2_jvk25b.jpg"
                    alt="GenMove Logo">
            </a>
                <p>Your trusted partner for comfortable and reliable transportation services.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#fleet">Our Fleet</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <h3>Contact Us</h3>
                <ul class="contact-info">
                    <li><i class="fas fa-phone"></i> +1 234 567 890</li>
                    <li><i class="fas fa-envelope"></i> info@genmove.com</li>
                    <li><i class="fas fa-map-marker-alt"></i> 123 Street, City, Country</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom"
            style="margin-top: 40px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1);">
            <p>&copy; 2024 GenMove. All rights reserved.</p>
        </div>
    </div>
</footer>

<style>
    /* Feature Highlight Section Styles */
    .feature-highlight-section {
        padding: 5rem 0;
        background-color: white;
    }

    .section-title {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-title h2 {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 1rem;
    }

    .section-title h5 {
        font-size: 1.2rem;
        color: #666;
        font-weight: normal;
    }

    .feature-grid {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 3rem;
        align-items: center;
    }

    .feature-column {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .feature-box {
        background: white;
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .feature-box:hover {
        transform: translateY(-5px);
    }

    .feature-box .icon {
        font-size: 2rem;
        color: #fb5b29;
        margin-bottom: 1rem;
    }

    .feature-box h4 {
        font-size: 1.3rem;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .feature-box p {
        color: #666;
        line-height: 1.6;
        margin: 0;
    }

    .mockup-image {
        max-width: 100%;
        height: auto;
    }

    .mockup-image img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .feature-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .feature-column {
            order: 2;
        }

        .mockup-image {
            order: 1;
            margin: 2rem 0;
            text-align: center;
        }

        .feature-box {
            text-align: center;
        }

        .feature-box .icon {
            margin: 0 auto 1rem;
        }
    }

    @media (max-width: 768px) {
        .feature-highlight-section {
            padding: 3rem 0;
        }

        .section-title h2 {
            font-size: 2rem;
        }

        .section-title h5 {
            font-size: 1.1rem;
        }

        .feature-box {
            padding: 1.2rem;
        }

        .feature-box h4 {
            font-size: 1.2rem;
        }
    }

    /* Fleet Section Styles */
    .fleet {
        padding: 5rem 0;
        background-color: #f8f9fa;
    }

    .fleet-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .fleet-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .fleet-card:hover {
        transform: translateY(-5px);
    }

    .fleet-image {
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .fleet-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .fleet-card:hover .fleet-image img {
        transform: scale(1.05);
    }

    .fleet-details {
        padding: 1.5rem;
    }

    .fleet-details h3 {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .fleet-details p {
        color: #666;
        margin-bottom: 1rem;
        line-height: 1.6;
    }

    .fleet-features {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 1rem;
    }

    .fleet-features li {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #666;
    }

    .fleet-features li i {
        color: #fb5b29;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .fleet {
            padding: 3rem 0;
        }

        .fleet-cards {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .fleet-image {
            height: 180px;
        }

        .fleet-details {
            padding: 1.2rem;
        }

        .fleet-details h3 {
            font-size: 1.3rem;
        }

        .fleet-features {
            grid-template-columns: 1fr;
        }
    }

    /* Pricing Section Styles */
    .pricing {
        padding: 5rem 0;
        background-color: white;
    }

    .pricing-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .pricing-card {
        background: white;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        position: relative;
        border: 1px solid #eee;
    }

    .pricing-card:hover {
        transform: translateY(-5px);
    }

    .pricing-card.featured {
        border: 2px solid #fb5b29;
        transform: scale(1.05);
    }

    .pricing-card.featured:hover {
        transform: scale(1.05) translateY(-5px);
    }

    .pricing-badge {
        position: absolute;
        top: -12px;
        right: 20px;
        background: #fb5b29;
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .pricing-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .pricing-header h3 {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 1rem;
    }

    .price {
        font-size: 2.5rem;
        color: #fb5b29;
        font-weight: 700;
    }

    .price span:first-child {
        font-size: 1.5rem;
        vertical-align: super;
    }

    .price span:last-child {
        font-size: 1rem;
        color: #666;
    }

    .pricing-features {
        margin-bottom: 2rem;
    }

    .pricing-features ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .pricing-features li {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-bottom: 0.8rem;
        color: #666;
    }

    .pricing-features li i {
        color: #fb5b29;
    }

    .pricing-card .primary-button {
        width: 100%;
        text-align: center;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .pricing {
            padding: 3rem 0;
        }

        .pricing-cards {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .pricing-card {
            padding: 1.5rem;
        }

        .pricing-card.featured {
            transform: none;
        }

        .pricing-card.featured:hover {
            transform: translateY(-5px);
        }

        .pricing-header h3 {
            font-size: 1.3rem;
        }

        .price {
            font-size: 2rem;
        }
    }

    /* Testimonials Section Styles */
    .testimonials {
        padding: 5rem 0;
        background-color: white;
    }

    .testimonial-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .testimonial-card {
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
    }

    .customer {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .customer img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-bottom: 1rem;
        object-fit: cover;
    }

    .customer h4 {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .rating {
        color: #ffc107;
        font-size: 1.1rem;
    }

    .testimonial-card p {
        color: #666;
        line-height: 1.6;
        text-align: center;
        font-style: italic;
        margin: 0;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .testimonials {
            padding: 3rem 0;
        }

        .testimonial-container {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .testimonial-card {
            padding: 1.5rem;
        }

        .customer img {
            width: 60px;
            height: 60px;
        }

        .customer h4 {
            font-size: 1.1rem;
        }
    }

    /* Call to Action Section Styles */
    .cta {
        padding: 5rem 0;
        background: black;
        background-size: cover;
        background-position: center;
        text-align: center;
        color: white;
    }

    .cta h2 {
        font-size: 2.5rem;
        margin-bottom: 1rem;
    }

    .cta p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        opacity: 0.9;
    }

    .cta-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
    }

    .cta .primary-button {
        background-color: #fb5b29;
        color: white;
        padding: 1rem 2rem;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .cta .primary-button:hover {
        background-color: #e54a1a;
        transform: translateY(-2px);
        color: white;
        text-decoration: none;
    }

    .cta .secondary-button {
        background-color: transparent;
        color: white;
        padding: 1rem 2rem;
        border: 2px solid white;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .cta .secondary-button:hover {
        background-color: white;
        color: #333;
        transform: translateY(-2px);
        text-decoration: none;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .cta {
            padding: 3rem 0;
        }

        .cta h2 {
            font-size: 2rem;
        }

        .cta p {
            font-size: 1.1rem;
        }

        .cta-buttons {
            flex-direction: column;
            gap: 1rem;
        }

        .cta .primary-button,
        .cta .secondary-button {
            width: 100%;
            text-align: center;
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        .cta h2 {
            font-size: 1.8rem;
        }

        .cta p {
            font-size: 1rem;
        }
    }



    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .feature-section .row {
            flex-direction: column;
        }

        .feature-section .col-md-6 {
            width: 100%;
            margin-bottom: 2rem;
        }

        .feature-section .feature-content {
            text-align: center;
            padding: 1rem;
        }

        .feature-section .feature-list {
            display: inline-block;
            text-align: left;
        }

        .feature-section .feature-image-container {
            margin-bottom: 2rem;
        }

        .feature-section .feature-image-container img {
            max-height: 400px;
        }
    }

    @media (max-width: 768px) {

        .feature-section .feature-content h2,
        .feature-section .feature-content h3 {
            font-size: 1.8rem;
        }

        .feature-section .feature-content p {
            font-size: 1rem;
        }

        .feature-section .feature-image-container img {
            max-height: 300px;
        }
    }

    /* How It Works Section Enhanced Styles */
    .how-it-works {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    }

    .how-it-works .section-header {
        margin-bottom: 60px;
    }

    .how-it-works .section-header h2 {
        font-size: 2.5rem;
        color: #2c3e50;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .how-it-works .section-header h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(45deg, #FF6B6B, #FF8E53);
    }

    .how-it-works .section-header p {
        color: #6b7280;
        font-size: 1.1rem;
    }

    .how-it-works .steps {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 2rem;
        position: relative;
        padding: 0 1rem;
    }

    .how-it-works .step {
        flex: 1;
        min-width: 250px;
        text-align: center;
        position: relative;
        z-index: 2;
        background: white;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        overflow: hidden;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .how-it-works .steps {
            gap: 1.5rem;
        }

        .how-it-works .step {
            min-width: calc(50% - 1.5rem);
            flex: 0 0 calc(50% - 1.5rem);
        }
    }

    @media (max-width: 992px) {
        .how-it-works .steps {
            gap: 1.5rem;
        }

        .how-it-works .step {
            min-width: calc(50% - 1.5rem);
            flex: 0 0 calc(50% - 1.5rem);
        }

        .how-it-works .steps::before {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .how-it-works .section-header h2 {
            font-size: 2rem;
        }

        .how-it-works .step {
            min-width: 100%;
            flex: 0 0 100%;
            padding: 20px;
        }

        .how-it-works .step-icon {
            width: 80px;
            height: 80px;
        }

        .how-it-works .step-icon i {
            font-size: 2rem;
        }
    }
</style>
<script>
    const toggle = document.getElementById('menuToggle');
    const menu = document.getElementById('navMenu');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('active');
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.querySelector('.hamburger');
        const headerNav = document.querySelector('.header-nav');
        const navLinks = document.querySelectorAll('.nav-links li a');

        // Toggle mobile menu
        hamburger.addEventListener('click', function() {
            headerNav.classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-bars');
            this.querySelector('i').classList.toggle('fa-times');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!headerNav.contains(event.target) && !hamburger.contains(event.target)) {
                headerNav.classList.remove('active');
                hamburger.querySelector('i').classList.add('fa-bars');
                hamburger.querySelector('i').classList.remove('fa-times');
            }
        });

        // Close menu when clicking a link
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                headerNav.classList.remove('active');
                hamburger.querySelector('i').classList.add('fa-bars');
                hamburger.querySelector('i').classList.remove('fa-times');
            });
        });
    });
</script>

</body>

</html>