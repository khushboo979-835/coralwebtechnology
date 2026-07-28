<?php include 'common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Mobile App Development Company | Best Mobile App Development Services';
    $page_description = 'Coral Web Technology is the best mobile app development company. We create user-friendly, creative, and custom apps for businesses. Trust our expert team to turn your ideas into reality.';
    $page_keywords = 'mobile app development company, best mobile app development services, custom mobile apps, android app development, ios app development';
    $page_canonical = $base_url . 'mobile-app-development.php';
    ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Roboto:wght@400;500;700;900&display=swap');
        
        :root {
            --primary: #ea5f23; /* Coral Orange */
            --secondary: #2760ca; /* Royal Blue */
            --dark: #101010;
            --light-bg: #ffffff;
            --soft-bg: #fdfdfd;
            --border-color: #eef1f6;
            --text-main: #2b2b2b;
            --text-muted: #5e6670;
            --accent-glow: rgba(234, 95, 35, 0.1);
        }
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif !important; 
            color: var(--text-main); 
            background: var(--light-bg); 
            overflow-x: hidden;
            font-size: 16px;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto', sans-serif !important;
            font-weight: 700;
            color: var(--dark);
        }

        .section-padding { padding: 60px 0; }
        .bg-soft { background: var(--soft-bg); }
        .bg-dark-section {
            background: #111111;
            color: #ffffff;
        }
        .bg-dark-section h2, .bg-dark-section h3, .bg-dark-section h4 {
            color: #ffffff !important;
        }

        /* Typography Highlights */
        .text-gradient {
            background: linear-gradient(90deg, var(--secondary) 0%, var(--primary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        /* Custom Header */
        .landing-header {
            background: #ffffff;
            border-bottom: 1px solid var(--border-color);
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        }
        .header-logo {
            font-size: 1.5rem;
            font-weight: 900;
            font-family: 'Roboto', sans-serif !important;
            color: var(--dark);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .header-logo span {
            color: var(--primary);
        }

        /* Buttons */
        .btn-theme-primary {
            background: var(--primary);
            color: #ffffff !important;
            border: 2px solid var(--primary);
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(234, 95, 35, 0.15);
        }
        .btn-theme-primary:hover {
            background: #d84e15;
            border-color: #d84e15;
            transform: translateY(-2px);
        }
        
        .btn-theme-outline {
            background: transparent;
            color: var(--dark) !important;
            border: 2px solid var(--dark);
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .btn-theme-outline:hover {
            background: var(--dark);
            color: #ffffff !important;
            transform: translateY(-2px);
        }

        /* Hero */
        .hero-section {
            padding: 70px 0 50px;
            background: linear-gradient(135deg, #f7f9fc 0%, #ffffff 100%);
            border-bottom: 1px solid var(--border-color);
        }
        .hero-title {
            font-size: clamp(2.3rem, 5vw, 3.6rem);
            font-weight: 900;
            line-height: 1.15;
            margin-bottom: 20px;
        }
        .hero-subtitle {
            font-size: 1.15rem;
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 30px;
        }

        /* Minimal Bottom-Border Form */
        .minimal-form-card {
            background: #ffffff;
            border-radius: 24px;
            padding: 45px 40px;
            border: 1px solid var(--border-color);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.06);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            animation: floatForm 6s ease-in-out infinite;
        }
        .minimal-form-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--secondary) 0%, var(--primary) 100%);
        }
        .minimal-form-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 60px rgba(234, 95, 35, 0.12);
            border-color: rgba(234, 95, 35, 0.2);
        }
        .minimal-form-card .form-group {
            margin-bottom: 28px;
        }
        .minimal-form-card input, .minimal-form-card textarea {
            width: 100%;
            border: 0 !important;
            border-bottom: 1.5px solid #cfcfcf !important;
            background: transparent !important;
            box-shadow: none !important;
            padding: 12px 0 !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 16px !important;
            font-weight: 500 !important;
            color: #000 !important;
            transition: all 0.3s ease !important;
            border-radius: 0 !important;
        }
        .minimal-form-card input:focus, .minimal-form-card textarea:focus {
            border-bottom: 1.5px solid var(--primary) !important;
        }
        .minimal-form-card input::placeholder, .minimal-form-card textarea::placeholder {
            color: #7a7a7a !important;
            font-weight: 500;
        }

        /* Accolade Boxes */
        .accolade-box {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            height: 100%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.01);
            transition: transform 0.3s ease;
        }
        .accolade-box:hover {
            transform: translateY(-5px);
        }
        .accolade-icon {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        /* Services Grid Accent Cards */
        .service-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            box-shadow: 0 5px 15px rgba(0,0,0,0.01);
        }
        .service-card::before {
            content: "";
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            height: 5px;
            border-radius: 16px 16px 0 0;
            background: var(--secondary);
            opacity: 0.8;
        }
        .service-card.primary-top::before { background: var(--primary); }
        .service-card.dark-top::before { background: var(--dark); }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(39, 96, 202, 0.08);
            border-color: rgba(234, 95, 35, 0.2);
        }
        .service-icon {
            width: 55px;
            height: 55px;
            border-radius: 12px;
            background: rgba(234, 95, 35, 0.06);
            color: var(--primary);
            display: grid;
            place-items: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .service-card:hover .service-icon {
            background: var(--primary);
            color: #ffffff;
        }

        /* Trend Card */
        .trend-card {
            background: #222222;
            border: 1px solid #333333;
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
        }
        .trend-card:hover {
            border-color: var(--primary);
            transform: translateY(-4px);
        }
        .trend-icon {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        /* Value Step Card */
        .value-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
        }
        .value-card:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.05);
            border-color: rgba(234, 95, 35, 0.2);
        }
        .value-number {
            font-size: 3rem;
            font-weight: 900;
            color: var(--secondary);
            opacity: 0.15;
            line-height: 1;
            margin-bottom: 15px;
        }

        /* Challenge Card */
        .challenge-card {
            background: #1a1a1a;
            border: 1px solid #2d2d2d;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .challenge-card:hover {
            border-color: var(--primary);
        }

        /* Portfolio Work Cards */
        .work-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 24px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.01);
        }
        .work-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background-color: var(--primary);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .work-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.06);
            border-color: transparent;
        }
        .work-card:hover::before {
            opacity: 1;
        }
        .work-cat {
            font-size: 0.75rem;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: 0.5px;
            background: rgba(234, 95, 35, 0.06);
            padding: 4px 10px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 12px;
        }
        .work-visit {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--secondary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 15px;
        }
        .work-visit i {
            transition: transform 0.2s ease;
        }
        .work-card:hover .work-visit i {
            transform: translateX(4px);
        }

        /* FAQ Accordion */
        .accordion-item {
            border: 1px solid var(--border-color);
            border-radius: 12px !important;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .accordion-button {
            font-family: 'Roboto', sans-serif !important;
            font-weight: 600;
            color: var(--dark);
            padding: 18px 24px;
        }
        .accordion-button:not(.collapsed) {
            background-color: rgba(39, 96, 202, 0.02) !important;
            color: var(--secondary) !important;
            box-shadow: none;
        }
        .accordion-body {
            padding: 20px 24px;
            color: var(--text-muted);
            background: #ffffff;
        }

        /* Short Footer */
        .landing-footer {
            background: #111111;
            color: #dddddd;
            padding: 40px 0;
            border-top: 5px solid var(--primary);
        }
        .landing-footer h5 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .landing-footer a {
            color: #bbbbbb;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .landing-footer a:hover {
            color: var(--primary);
        }
        .footer-bottom {
            border-top: 1px solid #222222;
            padding-top: 20px;
            margin-top: 25px;
            font-size: 0.9rem;
            color: #888888;
        }

        /* Floating CTA */
        .floating-cta {
            position: fixed;
            right: 16px;
            bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 999;
        }
        .floating-cta a {
            border-radius: 999px;
            padding: 12px 18px;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .floating-cta .call { background: var(--secondary); }
        .floating-cta .wa { background: #25d366; }

        @media (max-width: 768px) {
            .floating-cta {
                right: 10px;
                left: 10px;
                bottom: 12px;
                flex-direction: row;
            }
            .floating-cta a {
                flex: 1;
                justify-content: center;
            }
            .hero-section {
                padding: 25px 0 35px !important;
            }
            .hero-title {
                font-size: 2.1rem !important;
                line-height: 1.2 !important;
                margin-bottom: 12px !important;
            }
            .hero-subtitle {
                font-size: 1rem !important;
                margin-bottom: 20px !important;
            }
            .minimal-form-card {
                padding: 25px 20px !important;
                margin-top: 15px !important;
                animation: none !important;
                border-radius: 16px !important;
            }
        }

        /* Shine sweep button effect */
        .btn-theme-primary {
            position: relative;
            overflow: hidden;
        }
        .btn-theme-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: none;
            animation: shineSweep 3s infinite;
        }

        @keyframes shineSweep {
            0% { left: -100%; }
            50% { left: 150%; }
            100% { left: 150%; }
        }

        @keyframes floatForm {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-6px); }
            100% { transform: translateY(0px); }
        }
        .map-frame {
            border: 0;
            width: 100%;
            min-height: 350px;
            border-radius: 16px;
            border: 1px solid var(--border-color);
        }
    </style>
</head>
<body>

    <div class="floating-cta d-md-none">
        <a class="call" href="tel:+919117741984"><i class="bi bi-telephone-fill"></i>Call Now</a>
        <a class="wa" href="https://wa.me/919117741984?text=Hi%20Coral%20Web%20Technology,%20I%20have%20an%20app%20requirement" target="_blank"><i class="bi bi-whatsapp"></i>WhatsApp</a>
    </div>

    <!-- Custom Navigation Header -->
    <header class="landing-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="<?= $base_url; ?>" class="header-logo">
                    <img src="<?= $base_url; ?>assets/images/logo/logo.png" alt="Coral Web Technology" style="height: 48px; width: auto; object-fit: contain;">
                </a>
                <div class="d-flex align-items-center gap-3">
                    <a href="tel:+919117741984" class="btn-theme-outline d-none d-md-inline-flex">
                        <i class="bi bi-telephone-fill"></i> +91 9117741984
                    </a>
                    <a href="#lead-form" class="btn-theme-primary">
                        Get Free Quote
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <h1 class="hero-title">
                        Mobile App Development Company
                    </h1>
                    <p class="hero-subtitle">
                        Your Trusted Partner in Mobile App Development – <strong>500+ Successful Projects Delivered</strong>. Our team of experts has crafted over 500 mobile apps, helping businesses achieve their digital goals with robust, high-performance native iOS, Android, and cross-platform apps.
                    </p>
                    
                    <!-- Appslure Counters -->
                    <div class="row g-3 mb-4 text-center">
                        <div class="col-4">
                            <div class="p-3 border rounded bg-white">
                                <h3 class="fw-bold text-gradient mb-0">500+</h3>
                                <span class="small text-muted">Projects</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 border rounded bg-white">
                                <h3 class="fw-bold text-gradient mb-0">300+</h3>
                                <span class="small text-muted">Clients</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 border rounded bg-white">
                                <h3 class="fw-bold text-gradient mb-0">50+</h3>
                                <span class="small text-muted">Team Size</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="tel:+919117741984" class="btn-theme-primary">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                        <a href="https://wa.me/919117741984?text=Hi%20Coral%20Web%20Technology,%20I%20have%20an%20app%20requirement" class="btn-theme-outline" target="_blank">
                            <i class="bi bi-whatsapp" style="color: #25d366;"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="minimal-form-card" id="lead-form">
                        <h3 class="fw-bold mb-2">Connect With Our Experts</h3>
                        <p class="text-muted small mb-4">Let's discuss your mobile application project today.</p>
                        <form action="send-mail.php" method="post">
                            <input type="hidden" name="services" value="Mobile App (Google Ads Enquiry)">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="number" placeholder="Mobile Number" required>
                            </div>
                            <div class="form-group">
                                <textarea name="requirement" rows="2" placeholder="Let us know a bit more about the project you have in mind..." required></textarea>
                            </div>
                            <button type="submit" class="btn-theme-primary w-100 justify-content-center mt-2">Let's start a conversation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Growth Section -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <h2 class="fw-bold mb-3">Best Mobile App Development Company for Your Business Growth</h2>
                    <p class="text-muted">
                        Since 2013, Coral Web Technology has been active in providing expertise in mobile app development and designing services across the world. We are proud to have more than 50-plus top-notch full-stack mobile app developers, mobile app designers, and functional consultants who have enabled us to become one of the most preferred mobile application development companies. 
                    </p>
                    <p class="text-muted">
                        However complex your needs are, we have the expertise to provide you with a great mobile app solution. Our confidence in our mobile app developers enables us to give you a 100% guarantee for smooth delivery. We have a high customer retention score of above 90% among those who have taken mobile app development services from us.
                    </p>
                    <p class="text-muted">
                        Ranking as a top mobile app development agency, we have expertise in providing custom app development services on various app development frameworks and languages like Java, React, Objective C, and Ruby.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="accolade-box">
                                <div class="accolade-icon"><i class="bi bi-award-fill"></i></div>
                                <h6 class="fw-bold mb-1">Award Winning</h6>
                                <p class="text-muted small mb-0">Best Mobile App Development Company awards.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="accolade-box">
                                <div class="accolade-icon"><i class="bi bi-hand-thumbs-up-fill"></i></div>
                                <h6 class="fw-bold mb-1">96% Delivery</h6>
                                <p class="text-muted small mb-0">Success rate in Mobile App Development category.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="accolade-box">
                                <div class="accolade-icon"><i class="bi bi-star-fill"></i></div>
                                <h6 class="fw-bold mb-1">4.5+ Rating</h6>
                                <p class="text-muted small mb-0">Highly rated by businesses on Google reviews.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="accolade-box">
                                <div class="accolade-icon"><i class="bi bi-phone-fill"></i></div>
                                <h6 class="fw-bold mb-1">500+ Apps</h6>
                                <p class="text-muted small mb-0">Around 500+ Mobile apps and websites developed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid (Types of Mobile App Services) -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2">Our Mobile App Development Services</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">End-to-end mobile engineering capabilities to launch secure, performant apps on any store.</p>
            </div>
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-apple"></i></div>
                        <h5 class="fw-bold mb-2">iOS App Development</h5>
                        <p class="text-muted small mb-0">We have more than 100 live Apps of our clients on the App Store in different categories like lifestyle, games, shopping, etc. We help ideas grow into apps with millions of downloads.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card primary-top">
                        <div class="service-icon"><i class="bi bi-tablet-landscape"></i></div>
                        <h5 class="fw-bold mb-2">iPad App Development</h5>
                        <p class="text-muted small mb-0">Not just limiting to iPhones, we have delivered many apps which solely run on iPad or on both iPhone/iPads. We have good knowledge in custom iPad app development.</p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card dark-top">
                        <div class="service-icon"><i class="bi bi-android2"></i></div>
                        <h5 class="fw-bold mb-2">Android App Development</h5>
                        <p class="text-muted small mb-0">We have successfully delivered Android apps in food delivery, e-commerce, live broadcasting, maps, and dating categories. Many of our apps are featured on trending lists.</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card dark-top">
                        <div class="service-icon"><i class="bi bi-window"></i></div>
                        <h5 class="fw-bold mb-2">Web App Service</h5>
                        <p class="text-muted small mb-0">We have a special squad of designers and web app development experts who are responsible for delivering seamless, browser-specific fully responsive web apps.</p>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-palette"></i></div>
                        <h5 class="fw-bold mb-2">Mobile App Designing</h5>
                        <p class="text-muted small mb-0">Look, feel, and touch are of paramount importance in a mobile app. Our designers always try to add something new to give your product that added edge.</p>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card primary-top">
                        <div class="service-icon"><i class="bi bi-grid-fill"></i></div>
                        <h5 class="fw-bold mb-2">Multi-Platform Mobile Apps</h5>
                        <p class="text-muted small mb-0">React Native, Flutter, and Xamarin are our recommended cross-platforms. Benefits include lower development costs and lesser retention/support cost.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Trends Section -->
    <section class="section-padding bg-dark-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2">Top Trends in Mobile App Development</h2>
                <p class="text-muted mx-auto" style="max-width: 700px; color:#bbbbbb !important;">Over every passing time, all gadgets transform to being more characteristic in the users' ease. These trends are deployed to ensure flow and ease during development.</p>
            </div>
            <div class="row g-4">
                <!-- Trend 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="trend-card">
                        <div class="trend-icon"><i class="bi bi-cpu-fill"></i></div>
                        <h5 class="fw-bold mb-2">AI Integration</h5>
                        <p class="small mb-0" style="color: #cccccc;">Make your mobile app intelligent to display variant features and provide useful tips to the users of the app. This makes user experience enjoyable.</p>
                    </div>
                </div>
                <!-- Trend 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="trend-card">
                        <div class="trend-icon"><i class="bi bi-eye-fill"></i></div>
                        <h5 class="fw-bold mb-2">Augmented Reality (AR)</h5>
                        <p class="small mb-0" style="color: #cccccc;">AR helps you visualize the world by wrapping digital content into it. Think of the possibility of putting different furniture in your hall before buying it.</p>
                    </div>
                </div>
                <!-- Trend 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="trend-card">
                        <div class="trend-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5 class="fw-bold mb-2">5G Technology</h5>
                        <p class="small mb-0" style="color: #cccccc;">Valuing user time, we optimize apps for 5G to lower latency, eliminate lag, and bring in high application speed, especially in real-time interfaces.</p>
                    </div>
                </div>
                <!-- Trend 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="trend-card">
                        <div class="trend-icon"><i class="bi bi-shield-lock-fill"></i></div>
                        <h5 class="fw-bold mb-2">App Security</h5>
                        <p class="small mb-0" style="color: #cccccc;">The first step of attaining loyal users is to provide them with technological measures that ensure their private and sensitive information is secured from hackers.</p>
                    </div>
                </div>
                <!-- Trend 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="trend-card">
                        <div class="trend-icon"><i class="bi bi-smartwatch"></i></div>
                        <h5 class="fw-bold mb-2">Wearable Apps</h5>
                        <p class="small mb-0" style="color: #cccccc;">There is an increasing trend regarding smart wearables. We specialize in making your app compatible with wearable devices like the Apple Watch and smartwatches.</p>
                    </div>
                </div>
                <!-- Trend 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="trend-card">
                        <div class="trend-icon"><i class="bi bi-phone-flip"></i></div>
                        <h5 class="fw-bold mb-2">Cross-Platform Development</h5>
                        <p class="small mb-0" style="color: #cccccc;">An effective mobile app should be compatible with both OS. To capture a large consumer base, we build apps that run flawlessly on both Android and iOS.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Business Needs App Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2">Why Does Your Business Need a Mobile App?</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">Today's people have a fast-paced life, and they need to do things quickly. A mobile app plays a crucial role in your company's development.</p>
            </div>
            <div class="row g-4">
                <!-- Value 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <div class="value-number">01</div>
                        <h5 class="fw-bold mb-2">Customer Convenience</h5>
                        <p class="text-muted small mb-0">With mobile applications, your business is readily available to consumers. Interactions can be scheduled via chatbots or in-app messaging.</p>
                    </div>
                </div>
                <!-- Value 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <div class="value-number">02</div>
                        <h5 class="fw-bold mb-2">Faster Communication</h5>
                        <p class="text-muted small mb-0">Stronger, faster communication helps establish trust by informing clients about new offers and responding to queries immediately.</p>
                    </div>
                </div>
                <!-- Value 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <div class="value-number">03</div>
                        <h5 class="fw-bold mb-2">Brand Visibility</h5>
                        <p class="text-muted small mb-0">A customer using their mobile device will frequently see your logo or push notifications, creating constant brand recall and awareness.</p>
                    </div>
                </div>
                <!-- Value 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <div class="value-number">04</div>
                        <h5 class="fw-bold mb-2">Customer Loyalty</h5>
                        <p class="text-muted small mb-0">Offer additional discounts, vouchers, and loyalty programs that keep customers returning to your app repeatedly.</p>
                    </div>
                </div>
                <!-- Value 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <div class="value-number">05</div>
                        <h5 class="fw-bold mb-2">Easy Access to Data</h5>
                        <p class="text-muted small mb-0">A mobile app allows you to gather valuable user insights and search preferences to align your services target-specifically.</p>
                    </div>
                </div>
                <!-- Value 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <div class="value-number">06</div>
                        <h5 class="fw-bold mb-2">Competitive Advantage</h5>
                        <p class="text-muted small mb-0">Deploying modern app solutions distinguishes your business, allowing you to reach broader demographics ahead of your competitors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenges Section -->
    <section class="section-padding bg-dark-section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <h2 class="fw-bold mb-3">Challenges Faced by Businesses in Mobile App Development</h2>
                    <p class="small text-muted mb-4" style="color: #cccccc !important;">Having a mobile app for your business can be highly profitable, but a minor glitch can cause you to lose customers. Here are critical points to keep in mind.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="challenge-card">
                                <h6 class="fw-bold mb-2">Choosing the Right Platform</h6>
                                <p class="small mb-0" style="color: #cccccc;">Deciding target audiences device: Android, iOS, or both require different codes & graphic structures.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="challenge-card">
                                <h6 class="fw-bold mb-2">Managing Development Costs</h6>
                                <p class="small mb-0" style="color: #cccccc;">Maintaining a balanced budget is essential to not compromise on user features and delivery quality.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="challenge-card">
                                <h6 class="fw-bold mb-2">Ensuring App Performance</h6>
                                <p class="small mb-0" style="color: #cccccc;">Eliminating screen freezing, slow rendering, or lags that cause negative store reviews.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="challenge-card">
                                <h6 class="fw-bold mb-2">User Experience (UX) Design</h6>
                                <p class="small mb-0" style="color: #cccccc;">Keeping layouts clean and navigation intuitive so that users retain interest over time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cost Factors Section -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2">Cost Factors for Mobile App Development</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">The cost of creating an app depends on multiple key attributes. Planning accurately helps avoid unexpected overheads.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <h5 class="fw-bold mb-2">App Complexity</h5>
                        <p class="text-muted small mb-0">Feature integrations like real-time mapping, payment wallets, or social feeds cost more than static profile apps.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <h5 class="fw-bold mb-2">Design Needs</h5>
                        <p class="text-muted small mb-0">Fancy custom animations and complicated wireframe transitions will increase design tool usage and resources.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <h5 class="fw-bold mb-2">Development Team</h5>
                        <p class="text-muted small mb-0">Hiring experienced agency squads guarantees security and architecture, affecting total upfront cost variables.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <h5 class="fw-bold mb-2">Platforms Used</h5>
                        <p class="text-muted small mb-0">Building natively for both Android and iOS doubles coding efforts compared to a single hybrid web portal.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <h5 class="fw-bold mb-2">Testing Requirements</h5>
                        <p class="text-muted small mb-0">Rigorous quality audits on physical device labs reduce post-launch crash risks and verify API speeds.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="value-card">
                        <h5 class="fw-bold mb-2">Maintenance Costs</h5>
                        <p class="text-muted small mb-0">Long-term investments including version upgrades, bug fixes, server database scaling, and API additions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Work Section (Real App Portfolio) -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2">Our App Success Stories</h2>
                <p class="text-muted">Take a look at the real on-demand applications we designed and deployed for our clients.</p>
            </div>
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">Services & Logistics</span>
                        <h5 class="fw-bold mb-1">Patna AC Repair App</h5>
                        <p class="text-muted small mb-3">Service booking application with real-time customer registration and booking dispatch.</p>
                        <a href="https://patnaacrepairappliancecare.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">Services & Logistics</span>
                        <h5 class="fw-bold mb-1">Home Care Service App</h5>
                        <p class="text-muted small mb-3">On-demand domestic services portal with integrated booking systems.</p>
                        <a href="https://homecareservicenter.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">Services & Logistics</span>
                        <h5 class="fw-bold mb-1">The Expert Driver</h5>
                        <p class="text-muted small mb-3">Logistics and on-demand professional driver booking app with active booking metrics.</p>
                        <a href="https://theexpertdriver.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">Healthcare & Rehab</span>
                        <h5 class="fw-bold mb-1">Life Care Doctor Booking</h5>
                        <p class="text-muted small mb-3">Patient portal for real-time doctor appointments and medical checkup dispatch.</p>
                        <a href="https://lifecarecenter.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Project 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">Business & Tech</span>
                        <h5 class="fw-bold mb-1">Shreeji gems portal</h5>
                        <p class="text-muted small mb-3">Astro consulting and gems booking portal with secure mobile transaction checkout.</p>
                        <a href="https://shreejigemsvastuvigyan.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Project 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">Services & Logistics</span>
                        <h5 class="fw-bold mb-1">Rao Service Dispatch</h5>
                        <p class="text-muted small mb-3">HVAC technician tracking and client service booking pipeline.</p>
                        <a href="https://raorefrigeration.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ & Location -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h3 class="fw-bold mb-4">Frequently Asked Questions</h3>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Where are your office locations?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We welcome you to visit us and discuss your concepts at our corporate offices in Patna, Delhi, and Mumbai.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What services does Coral Web Technology generally do?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We are primarily known for custom mobile app development services. However, we are also highly expert in custom website development, software integrations, and CRM software setups.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Who works in your development team?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our core team comprises over 50+ full-stack mobile developers, UX UI wireframe experts, database engineers, and launch consultants.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do we get complete ownership of the source code?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, 100% intellectual property rights, database schema files, assets, and source codes are handed over to you upon project sign-off.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What about Patents and NDAs?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We execute complete NDA agreements before discussing project specs. Your ideas, data assets, and copyrights are fully protected by law.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold mb-4">Our Corporate Location</h3>
                    <iframe class="map-frame" src="https://www.google.com/maps?q=Patna%20Boring%20Road%20Chauraha&z=14&output=embed" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Short Footer -->
    <footer class="landing-footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-5">
                    <h5>Coral Web Technology</h5>
                    <p class="small text-muted mb-3" style="color:#bbbbbb !important;">We are a premier digital marketing and mobile app development company delivering modern and conversion-focused digital products for businesses globally.</p>
                    <p class="small mb-1"><i class="bi bi-geo-alt-fill text-primary me-2"></i> Boring Road Chauraha, Opposite Harihar Chamber, Patna - 801503</p>
                    <p class="small"><i class="bi bi-envelope-fill text-primary me-2"></i> coralwebtechnology@gmail.com</p>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h5>Services</h5>
                    <ul class="list-unstyled small mb-0">
                        <li class="mb-2"><a href="#">Android App Development</a></li>
                        <li class="mb-2"><a href="#">iOS App Development</a></li>
                        <li class="mb-2"><a href="#">React Native & Flutter</a></li>
                        <li class="mb-2"><a href="#">On-Demand App Services</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Connect With Us</h5>
                    <ul class="list-unstyled small mb-3">
                        <li class="mb-2"><a href="tel:+919117741984"><i class="bi bi-telephone-fill text-primary me-2"></i> +91 9117741984</a></li>
                        <li class="mb-2"><a href="tel:+918102549601"><i class="bi bi-telephone-fill text-primary me-2"></i> +91 8102549601</a></li>
                    </ul>
                    <a href="https://wa.me/919117741984" class="btn btn-sm btn-success px-3 py-2 rounded-pill fw-bold" target="_blank">
                        <i class="bi bi-whatsapp me-1"></i> WhatsApp Now
                    </a>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <p class="mb-0">&copy; <?= date('Y') ?> Coral Web Technology. All Rights Reserved. Designed for Ads conversion performance.</p>
            </div>
        </div>
    </footer>

</body>
</html>
