<?php include 'common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Best Mobile App Development Company in India | Custom Android & iOS Apps';
    $page_description = 'Build custom mobile apps with Coral Web Technology. We design and develop native Android, iOS, React Native, and Flutter applications.';
    $page_keywords = 'mobile app development company, android app development, ios app development, react native apps, flutter app development';
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
        .hero-bullets li {
            font-size: 1.05rem;
            font-weight: 600;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .hero-bullets i {
            color: var(--primary);
            font-size: 1.25rem;
        }

        /* Minimal Bottom-Border Form */
        .minimal-form-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px;
            border: 1px solid var(--border-color);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
        }
        .minimal-form-card .form-group {
            margin-bottom: 25px;
        }
        .minimal-form-card input, .minimal-form-card textarea {
            width: 100%;
            border: 0 !important;
            border-bottom: 1.5px solid #cfcfcf !important;
            background: transparent !important;
            box-shadow: none !important;
            padding: 10px 0 !important;
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

        /* Dotted Process Timeline */
        .step-timeline {
            position: relative;
            padding-left: 45px;
            list-style: none;
        }
        .step-timeline::before {
            content: "";
            position: absolute;
            left: 17px;
            top: 10px;
            bottom: 10px;
            width: 2px;
            border-left: 2px dashed #cfcfcf;
        }
        .step-item {
            position: relative;
            margin-bottom: 30px;
        }
        .step-item:last-child {
            margin-bottom: 0;
        }
        .step-number {
            position: absolute;
            left: -45px;
            top: 2px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--secondary);
            color: #ffffff;
            display: grid;
            place-items: center;
            font-weight: 800;
            font-size: 0.95rem;
            box-shadow: 0 4px 10px rgba(39, 96, 202, 0.2);
            z-index: 1;
        }
        .step-item:nth-child(even) .step-number {
            background: var(--primary);
            box-shadow: 0 4px 10px rgba(234, 95, 35, 0.2);
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
                <a href="#" class="header-logo">
                    Coral Web <span>Technology</span>
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
                        Expert <span class="text-gradient">Mobile App Development</span> Company
                    </h1>
                    <p class="hero-subtitle">
                        We design and develop custom Android & iOS mobile applications that are secure, scale effortlessly, and engage your customers. Our team has delivered over 500+ mobile apps globally.
                    </p>
                    <ul class="list-unstyled hero-bullets mb-4">
                        <li><i class="bi bi-check-circle-fill"></i> Native Android & iOS Apps</li>
                        <li><i class="bi bi-check-circle-fill"></i> Flutter & React Native Cross-Platform</li>
                        <li><i class="bi bi-check-circle-fill"></i> Intuitive UI/UX wireframes</li>
                        <li><i class="bi bi-check-circle-fill"></i> 100% App Store Approval Guarantee</li>
                    </ul>
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
                        <h3 class="fw-bold mb-2">Get Free Consultation</h3>
                        <p class="text-muted small mb-4">Discuss your application concept under full NDA protection.</p>
                        <form action="send-mail.php" method="post">
                            <input type="hidden" name="services" value="Mobile App (Google Ads Enquiry)">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="number" placeholder="Mobile Number" required>
                            </div>
                            <div class="form-group">
                                <textarea name="requirement" rows="2" placeholder="Tell us about your app requirements" required></textarea>
                            </div>
                            <button type="submit" class="btn-theme-primary w-100 justify-content-center mt-2">Submit Enquiry</button>
                        </form>
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
                        <div class="service-icon"><i class="bi bi-android2"></i></div>
                        <h5 class="fw-bold mb-2">Android App Development</h5>
                        <p class="text-muted small mb-0">Custom native apps built with Kotlin or Java, optimized for Google Play Store rules, security protocols, and device fragmentation.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card primary-top">
                        <div class="service-icon"><i class="bi bi-apple"></i></div>
                        <h5 class="fw-bold mb-2">iOS App Development</h5>
                        <p class="text-muted small mb-0">High-performance iPhone & iPad apps built with Swift and Xcode, designed to match Apple's strict UI and App Store guidelines.</p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card dark-top">
                        <div class="service-icon"><i class="bi bi-phone-flip"></i></div>
                        <h5 class="fw-bold mb-2">React Native Apps</h5>
                        <p class="text-muted small mb-0">Cross-platform mobile apps with native UI performance, sharing a single codebase to cut down development time by 40%.</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card dark-top">
                        <div class="service-icon"><i class="bi bi-lightning-charge"></i></div>
                        <h5 class="fw-bold mb-2">Flutter App Development</h5>
                        <p class="text-muted small mb-0">Stunning UI applications compiled natively from Dart code. Ideal for rapid MVPs and smooth, hardware-accelerated rendering.</p>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-palette"></i></div>
                        <h5 class="fw-bold mb-2">UI/UX Wireframing</h5>
                        <p class="text-muted small mb-0">Interactive Figma wireframes and visual blueprints. We build interfaces focused on ease of navigation and conversion rate.</p>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card primary-top">
                        <div class="service-icon"><i class="bi bi-cloud-arrow-up"></i></div>
                        <h5 class="fw-bold mb-2">App Store Launch & Support</h5>
                        <p class="text-muted small mb-0">We handle the entire setup: provisioning profiles, App Store compliance, developer console accounts, and final approvals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Mobile Products Portfolio</h2>
                <p class="text-muted">Explore some of the recent apps launched by our team.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="accent-card p-0 overflow-hidden">
                        <div class="p-4">
                            <h5 class="fw-bold mb-2">On-Demand Cab System</h5>
                            <p class="text-muted mb-0 small">Real-time driver location tracking, instant Stripe checkout, and push alerts built on Flutter.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="accent-card p-0 overflow-hidden pink-top">
                        <div class="p-4">
                            <h5 class="fw-bold mb-2">E-commerce Mobile Hub</h5>
                            <p class="text-muted mb-0 small">Sleek multi-vendor shopping application with localized payment getways and biometric auth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="accent-card p-0 overflow-hidden blue-top">
                        <div class="p-4">
                            <h5 class="fw-bold mb-2">Astrology Devvaani Portal</h5>
                            <p class="text-muted mb-0 small">High-speed chat and call system matching customers to astrologers with active wallet payment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Reviews Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Client Reviews</h2>
                <p class="text-muted">Read feedback from business owners who scaled their operations through our apps.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“The React Native app they developed has helped us onboard over 10,000 customers smoothly. Post launch support has been absolute gold.”</p>
                        <strong class="text-gradient">Vikram R.</strong>
                        <p class="text-muted small mb-0">CEO, E-Grocer</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“Delivered both Android and iOS apps on time. The offline capability and fast sync work flawlessly. Highly recommended team.”</p>
                        <strong class="text-gradient">Sneha P.</strong>
                        <p class="text-muted small mb-0">Co-founder, FitTrack</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“Superb communications during development phases. Their help with App Store policy setups saved us months of delay.”</p>
                        <strong class="text-gradient">Karan J.</strong>
                        <p class="text-muted small mb-0">Product Manager, LogiShip</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Process & Lead Form -->
    <section class="section-padding bg-soft" id="lead-form">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h2 class="fw-bold text-gradient mb-4">Our App Engineering Process</h2>
                    <div class="step-timeline">
                        <div class="step-node">
                            <span class="step-number">1</span>
                            <h5 class="fw-bold mb-1">Discovery & Blueprinting</h5>
                            <p class="text-muted mb-0 small">We outline features, user personas, API flows, and construct clickable interactive wireframes.</p>
                        </div>
                        <div class="step-node">
                            <span class="step-number">2</span>
                            <h5 class="fw-bold mb-1">UI/UX Screen Design</h5>
                            <p class="text-muted mb-0 small">Crafting modern dark-themed mobile app interfaces with smooth transistions and intuitive controls.</p>
                        </div>
                        <div class="step-node">
                            <span class="step-number">3</span>
                            <h5 class="fw-bold mb-1">Agile Development & QA</h5>
                            <p class="text-muted mb-0 small">Writing modular clean code with continuous integration testing across different physical devices.</p>
                        </div>
                        <div class="step-node">
                            <span class="step-number">4</span>
                            <h5 class="fw-bold mb-1">App Store Launch & Sync</h5>
                            <p class="text-muted mb-0 small">Publishing onto Google Play & Apple App Store. Providing post-launch monitoring and API maintenance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="clean-form-card">
                        <h3 class="fw-bold text-gradient mb-2">Book App Consultation</h3>
                        <p class="text-muted mb-4">Request a free NDA-protected requirement blueprint for your app concept.</p>
                        <form action="send-mail.php" method="post">
                            <input type="hidden" name="services" value="Mobile App Development">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" name="number" placeholder="Mobile Number" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="requirement" rows="3" placeholder="Describe your mobile app requirements" required></textarea>
                            </div>
                            <button type="submit" class="btn-gradient-cta w-100 justify-content-center">Send Requirement</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ & Map -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h3 class="fw-bold text-gradient mb-3">Frequently Asked Questions</h3>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">Do you provide full source code ownership?</h6>
                        <p class="text-muted mb-0 small">Yes, 100% intellectual property and raw code ownership is transferred to you upon completion.</p>
                    </div>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">How much does custom mobile app development cost?</h6>
                        <p class="text-muted mb-0 small">The pricing varies based on features, native platforms vs hybrid structures, and backend complications. Request a free quote for custom estimation.</p>
                    </div>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">Can you handle App Store policies and approvals?</h6>
                        <p class="text-muted mb-0 small">Absolutely. We manage the entire submission pipeline, including privacy guidelines compliance and developer console setup.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold text-gradient mb-3">Our Corporate Location</h3>
                    <iframe class="map-frame" src="https://www.google.com/maps?q=Patna%20Boring%20Road%20Chauraha&z=14&output=embed" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Short Footer (No default menus/bloat) -->
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
