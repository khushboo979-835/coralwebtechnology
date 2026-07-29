<?php include '../common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Best Web Design Company in India | Custom Web Design Services';
    $page_description = 'Build a high-performance website with Coral Web Technology. We deliver modern, SEO friendly and conversion-focused web design services.';
    $page_keywords = 'web design company in india, custom web design services, responsive website design, ecommerce website development';
    $page_canonical = $base_url . 'website-design-company-in-india/';
    ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Roboto:wght@400;500;700;900&display=swap');
        
        :root {
            --primary: #ea5f23; /* WebHopers Orange */
            --secondary: #2760ca; /* WebHopers Royal Blue */
            --dark: #101010;
            --light-bg: #ffffff;
            --soft-bg: #fdfdfd;
            --border-color: #eef1f6;
            --text-main: #2b2b2b;
            --text-muted: #5e6670;
            --accent-glow: rgba(234, 95, 35, 0.1);
            --call-glow: 234, 95, 35;
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

        /* Custom Conversion-Optimized Header (No distraction navigation) */
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

        /* Animated Call Button in Header */
        .btn-call-animated {
            background: var(--primary);
            color: #ffffff !important;
            border: 2px solid var(--primary);
            border-radius: 50px;
            padding: 10px 24px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(var(--call-glow), 0.2);
            transition: all 0.3s ease;
            animation: pulse-border 2s infinite;
            font-size: 15px;
        }
        
        .btn-call-animated i {
            animation: phone-wiggle 1.5s infinite;
            display: inline-block;
        }

        .btn-call-animated:hover {
            filter: brightness(0.9);
            transform: translateY(-2px);
            box-shadow: 0 10px 24px rgba(var(--call-glow), 0.35);
        }

        @keyframes pulse-border {
            0% {
                box-shadow: 0 0 0 0 rgba(var(--call-glow), 0.4), 0 8px 20px rgba(var(--call-glow), 0.2);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(var(--call-glow), 0), 0 8px 20px rgba(var(--call-glow), 0.2);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(var(--call-glow), 0), 0 8px 20px rgba(var(--call-glow), 0.2);
            }
        }

        @keyframes phone-wiggle {
            0%, 100% { transform: rotate(0deg); }
            10% { transform: rotate(-15deg); }
            20% { transform: rotate(15deg); }
            30% { transform: rotate(-10deg); }
            40% { transform: rotate(10deg); }
            50% { transform: rotate(0deg); }
        }

        @media (max-width: 576px) {
            .btn-call-animated {
                font-size: 13px;
                padding: 8px 14px;
                gap: 6px;
            }
        }

        /* Hero Layout */
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

        /* Minimal Bottom-Border Form (WebHopers Style) */
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

        /* Grid Services Accent Cards */
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

        /* Short Clean Footer */
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

        /* Floating actions */
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
        .niche-card {
            transition: all 0.3s ease;
        }
        .niche-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important;
            border-color: var(--primary) !important;
        }
    </style>
</head>
<body>

    <div class="floating-cta d-md-none">
        <a class="call" href="tel:+918102549601"><i class="bi bi-telephone-fill"></i>Call Now</a>
        <a class="wa" href="https://wa.me/919117741984?text=Hi%20I%20want%20to%20discuss%20web%20design" target="_blank"><i class="bi bi-whatsapp"></i>WhatsApp</a>
    </div>

    <!-- Custom Navigation Header -->
    <header class="landing-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="<?= $base_url; ?>" class="header-logo">
                    <img src="<?= $base_url; ?>assets/images/logo/logo.png" alt="Coral Web Technology" style="height: 48px; width: auto; object-fit: contain;">
                </a>
                <div class="d-flex align-items-center gap-3">
                    <a href="tel:+918102549601" class="btn-theme-outline d-none d-md-inline-flex">
                        <i class="bi bi-telephone-fill"></i> +91 8102549601
                    </a>
                    <a href="#lead-form" class="btn-theme-primary d-none d-md-inline-flex">
                        Get Free Quote
                    </a>
                    <a href="tel:+918102549601" class="btn-call-animated d-inline-flex d-md-none">
                        <i class="bi bi-telephone-fill"></i> +91 81025 49601
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
                        Expert <span class="text-gradient">Web Design Company</span> in India
                    </h1>
                    <p class="hero-subtitle">
                        We build custom, conversion-focused websites that look stunning, load within milliseconds, and convert visitors into customers. Upgrade your business with modern, SEO-friendly web design.
                    </p>
                    <ul class="list-unstyled hero-bullets mb-4">
                        <li><i class="bi bi-check-circle-fill"></i> Custom Mobile-First Layouts</li>
                        <li><i class="bi bi-check-circle-fill"></i> Fast Loading Speed Optimization</li>
                        <li><i class="bi bi-check-circle-fill"></i> SEO Friendly Architecture</li>
                        <li><i class="bi bi-check-circle-fill"></i> 100% Client Satisfaction</li>
                    </ul>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="tel:+918102549601" class="btn-theme-primary">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                        <a href="https://wa.me/919117741984?text=Hi%20Coral%20Web%20Technology,%20I%20need%20a%20website" class="btn-theme-outline" target="_blank">
                            <i class="bi bi-whatsapp" style="color: #25d366;"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="minimal-form-card" id="lead-form">
                        <h3 class="fw-bold mb-2">Get Free Consultation</h3>
                        <p class="text-muted small mb-4">Leave your details below, and our web experts will connect with you.</p>
                        <form action="../send-mail.php" method="post">
                            <input type="hidden" name="services" value="Website Design (Google Ads Enquiry)">
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
                                <textarea name="requirement" rows="2" placeholder="Tell us about your project requirements" required></textarea>
                            </div>
                            <button type="submit" class="btn-theme-primary w-100 justify-content-center mt-2">Submit Enquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid (Types of Web Design Services) -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2">Types of Web Design Services We Offer</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">Explore our comprehensive range of web design solutions tailored to match different industry demands.</p>
            </div>
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-phone"></i></div>
                        <h5 class="fw-bold mb-2">Responsive Web Design</h5>
                        <p class="text-muted small mb-0">Custom mobile-friendly website layouts that adjust beautifully on iPhones, Android devices, tablets, and large screens.</p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card primary-top">
                        <div class="service-icon"><i class="bi bi-code-slash"></i></div>
                        <h5 class="fw-bold mb-2">Static Website Design</h5>
                        <p class="text-muted small mb-0">Cost-effective, highly secure, and ultra-fast loading websites. Built with HTML5, CSS3, and modern framework styling.</p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card dark-top">
                        <div class="service-icon"><i class="bi bi-database"></i></div>
                        <h5 class="fw-bold mb-2">Dynamic Website Design</h5>
                        <p class="text-muted small mb-0">Database-driven web portals, interactive components, user logins, and customized administrative control systems.</p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card dark-top">
                        <div class="service-icon"><i class="bi bi-cart"></i></div>
                        <h5 class="fw-bold mb-2">E-commerce Web Design</h5>
                        <p class="text-muted small mb-0">Online shopping systems built on WooCommerce, Shopify, or Custom PHP. Complete with shopping carts and payment gateway setup.</p>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-wordpress"></i></div>
                        <h5 class="fw-bold mb-2">Custom CMS Web Design</h5>
                        <p class="text-muted small mb-0">WordPress and custom CMS configurations allowing you to edit text, upload news, and manage blog posts without coding.</p>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card primary-top">
                        <div class="service-icon"><i class="bi bi-window-sidebar"></i></div>
                        <h5 class="fw-bold mb-2">Landing Page Design</h5>
                        <p class="text-muted small mb-0">Highly conversion-optimized, single-page landing layouts engineered to maximize Google Ads and Facebook campaigns.</p>
                    </div>
                </div>
                <!-- Service 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card primary-top">
                        <div class="service-icon"><i class="bi bi-building"></i></div>
                        <h5 class="fw-bold mb-2">Corporate Web Design</h5>
                        <p class="text-muted small mb-0">High-end layouts for corporate branding, SaaS startups, and consultancy firms looking for a professional representation.</p>
                    </div>
                </div>
                <!-- Service 8 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-icon"><i class="bi bi-palette"></i></div>
                        <h5 class="fw-bold mb-2">UI/UX & Web Redesign</h5>
                        <p class="text-muted small mb-0">Upgrade your old, slow website with modern wireframe styling, interactive layouts, and high-performance codes.</p>
                    </div>
                </div>
                <!-- Service 9 -->
                <div class="col-md-6 col-lg-4">
                    <div class="service-card dark-top">
                        <div class="service-icon"><i class="bi bi-speedometer"></i></div>
                        <h5 class="fw-bold mb-2">Page Speed Optimization</h5>
                        <p class="text-muted small mb-0">Minifying stylesheets, optimizing script files, and compressing layout assets to achieve 90+ Google PageSpeed ratings.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve Section -->
    <section class="section-padding bg-light">
        <div class="container text-center">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <span class="premium-badge">Industries We Serve</span>
                    <h2 class="fw-bold mt-2">We Serve All Industries</h2>
                    <p class="text-muted">We stay on top of our industry by being experts in yours. Empowering diverse sectors with custom web, software, and app solutions.</p>
                </div>
            </div>


            <!-- Industries & Niches We Serve -->
            <div class="row g-4 mt-5 text-start">
                <!-- Healthcare & Wellness -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <h5 class="fw-bold mb-3 d-flex align-items-center gap-2" style="color: var(--primary);">
                            <i class="bi bi-heart-pulse-fill"></i> Healthcare & Wellness
                        </h5>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Healthcare & Hospitals</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Dental Clinics</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>IVF Centres</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Nasha Mukti Kendra</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Beauty Salon & Spa</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Gym & Fitness Centres</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Yoga Centres</li>
                        </ul>
                    </div>
                </div>

                <!-- Education & Society -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <h5 class="fw-bold mb-3 d-flex align-items-center gap-2" style="color: var(--primary);">
                            <i class="bi bi-book-half"></i> Education & Society
                        </h5>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Education & Schools</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Colleges & Universities</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Coaching Institutes</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>School Institutions</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>NGOs & Trusts</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Political Campaigns</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Society & Communities</li>
                        </ul>
                    </div>
                </div>

                <!-- Real Estate & Construction -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <h5 class="fw-bold mb-3 d-flex align-items-center gap-2" style="color: var(--primary);">
                            <i class="bi bi-building"></i> Real Estate & Infra
                        </h5>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Real Estate</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Construction Companies</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Interior Designers</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Architects</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Home Services</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Electronics & Electrical</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Security Services</li>
                        </ul>
                    </div>
                </div>

                <!-- Hospitality & Logistics -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <h5 class="fw-bold mb-3 d-flex align-items-center gap-2" style="color: var(--primary);">
                            <i class="bi bi-truck"></i> Travel & Logistics
                        </h5>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Hotels & Resorts</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Restaurants & Cafes</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Travel & Tourism</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Packers & Movers</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Logistics & Transport</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Automobile & Car Dealers</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Bike Showrooms</li>
                        </ul>
                    </div>
                </div>

                <!-- Trade & Commerce -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <h5 class="fw-bold mb-3 d-flex align-items-center gap-2" style="color: var(--primary);">
                            <i class="bi bi-cart3"></i> Trade & Commerce
                        </h5>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>E-commerce Businesses</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Retail & Wholesale</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Manufacturing Industries</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Textile & Garments</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Jewellery Stores</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Export & Import Businesses</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Agriculture & Farming</li>
                        </ul>
                    </div>
                </div>

                <!-- Professional & Corporate -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 bg-white rounded-3 shadow-sm h-100 border">
                        <h5 class="fw-bold mb-3 d-flex align-items-center gap-2" style="color: var(--primary);">
                            <i class="bi bi-briefcase-fill"></i> Professional & Corporate
                        </h5>
                        <ul class="list-unstyled small text-muted mb-0">
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Finance & Insurance</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>CA & Tax Consultants</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Law Firms & Advocates</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Startups & Tech</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>IT Companies</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Corporate Businesses</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Event Management</li>
                            <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Photography & Videography</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Work Section (Real Portfolio Items) -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2">Our Work</h2>
                <p class="text-muted">Explore some of the successful websites we have designed and launched for our clients.</p>
            </div>
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">NGO & Foundation</span>
                        <h5 class="fw-bold mb-1">Shanti Foundation</h5>
                        <p class="text-muted small mb-3">Custom built NGO portal facilitating registrations and fundraising metrics.</p>
                        <a href="https://shanti-foundation.co.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">Services & Logistics</span>
                        <h5 class="fw-bold mb-1">Patna AC Repair</h5>
                        <p class="text-muted small mb-3">Service booking application with real-time customer registration flows.</p>
                        <a href="https://patnaacrepairappliancecare.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">NGO & Foundation</span>
                        <h5 class="fw-bold mb-1">Swetank Foundation</h5>
                        <p class="text-muted small mb-3">Clean information portal tracking community support campaigns.</p>
                        <a href="https://swetankfoundation.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">Healthcare & Rehab</span>
                        <h5 class="fw-bold mb-1">Lawanya Derma Hair Transplant</h5>
                        <p class="text-muted small mb-3">Conversion-focused healthcare catalog for cosmetic bookings.</p>
                        <a href="https://lawanyadermahairtransplant.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Project 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">Business & Tech</span>
                        <h5 class="fw-bold mb-1">Shreeji Gems Vastu Vigyan</h5>
                        <p class="text-muted small mb-3">Premium astrological consultation platform with integrated checkouts.</p>
                        <a href="https://shreejigemsvastuvigyan.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Project 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="work-card">
                        <span class="work-cat">Services & Logistics</span>
                        <h5 class="fw-bold mb-1">Rao Refrigeration</h5>
                        <p class="text-muted small mb-3">Clean service catalog website for HVAC client acquisitions.</p>
                        <a href="https://raorefrigeration.in" target="_blank" class="work-visit">
                            Visit Website <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us & Form -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">Why Partner With Coral Web Technology?</h2>
                    <p class="text-muted mb-4">We don't just design code; we create online platforms optimized to capture calls, form submissions, and customer conversions.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-check-circle-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Strategic CTA Placements</h6>
                                <p class="text-muted mb-0 small">Every layout and call button is designed to keep Google Ads traffic engaged and convert them into sales.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-check-circle-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Highly Optimized Loading Speeds</h6>
                                <p class="text-muted mb-0 small">Ultra-fast loading times reduce bounce rates, leading to higher Quality Scores in Google Ads.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Post-Launch Code Support</h6>
                                <p class="text-muted mb-0 small">We stand by our clients, providing complete support, server setups, and technical monitoring.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="minimal-form-card">
                        <h3 class="fw-bold mb-2">Request Custom Proposal</h3>
                        <p class="text-muted small mb-4">Send us your project specifications, and we will get back to you within 24 hours.</p>
                        <form action="../send-mail.php" method="post">
                            <input type="hidden" name="services" value="Website Design (Detailed Enquiry)">
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
                                <textarea name="requirement" rows="3" placeholder="Describe the software/website layout you want to build" required></textarea>
                            </div>
                            <button type="submit" class="btn-theme-primary w-100 justify-content-center mt-2">Get Free Proposal</button>
                        </form>
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
                                    How much does custom website design cost?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The cost depends entirely on the features (static vs dynamic, pages, custom integrations, e-commerce). Leave your requirement, and we will send a tailored budget proposal.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Will my website be mobile friendly and responsive?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, every website we design is fully mobile responsive and tested thoroughly on iOS, Android, and tablets before launch.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you provide support and code ownership?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, once the website is completed, you get 100% source code ownership. We also provide ongoing support for servers, backup configurations, and code maintenance.
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

    <!-- Targeted Keywords Tag Cloud -->
    <section class="section-padding bg-light border-top">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 text-center">
                    <span class="premium-badge">Target Search Tags</span>
                    <h3 class="fw-bold mt-2">Popular Search Queries We Cover</h3>
                    <p class="text-muted small">We target these high-search volume keywords to maintain our premium visibility on search engines and Google Ads campaigns.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="d-flex flex-wrap justify-content-center gap-2">
                        <?php
                        $tags = [
                            "best education marketing agency in india",
                            "best education marketing company in india",
                            "website development companies in delhi",
                            "website design companies in pune",
                            "web designing companies in pune",
                            "web development in pune",
                            "website designing companies in bangalore",
                            "website development bangalore",
                            "website developers in chennai",
                            "website developer hyderabad",
                            "website developer bangalore",
                            "website design bangalore",
                            "website design agency india",
                            "website design in hyderabad",
                            "website design companies in india",
                            "web development agency india",
                            "website designer bangalore",
                            "web designer in delhi",
                            "web development companies in noida",
                            "web design agency india",
                            "top website development companies in india",
                            "web developers in chennai",
                            "website designer hyderabad",
                            "web designer in mumbai",
                            "web development companies in delhi",
                            "web design in chennai",
                            "website development in jaipur",
                            "web designer in ahmedabad",
                            "website development agency in india",
                            "web development companies in mumbai",
                            "website development in ahmedabad",
                            "website design agency in mumbai",
                            "website designing companies in mumbai",
                            "website development services in bangalore",
                            "web designer in delhi ncr",
                            "corporate website design india",
                            "website developer mumbai",
                            "website developer in delhi",
                            "website developer in kolkata",
                            "website development companies in india",
                            "india web development companies",
                            "website developer in ahmedabad",
                            "website designer delhi",
                            "top web development companies in india",
                            "website developer in jaipur",
                            "website developer in patna",
                            "website designer mumbai",
                            "website development agency india",
                            "website creator in chennai",
                            "web development companies in hyderabad",
                            "website development in mumbai",
                            "website developer in delhi ncr",
                            "website designer chennai",
                            "website developers in coimbatore",
                            "website design in ahmedabad",
                            "website development in hyderabad",
                            "web developer delhi",
                            "web developers in mumbai",
                            "hyderabad website development companies",
                            "web designer in hyderabad",
                            "web design bangalore",
                            "website design kerala",
                            "website development price in india",
                            "website development companies in mumbai",
                            "website builder in kolkata",
                            "website design in gurgaon",
                            "best website development companies in india",
                            "website design companies in delhi",
                            "website designer in delhi ncr",
                            "web development companies in ahmedabad",
                            "web design kerala",
                            "web development in chandigarh",
                            "Web Designing Company",
                            "Web Designing Company in India",
                            "Web Designing Company in Delhi",
                            "Web Designing Company in South Delhi",
                            "Laravel Web Development Company",
                            "Laravel Web Development Company in India",
                            "Laravel Web Development Company in Delhi",
                            "Laravel Web Development Company in South Delhi",
                            "Ecommerce Development",
                            "Ecommerce Website Design in India",
                            "Ecommerce Website Design in Delhi",
                            "Ecommerce Website Design"
                        ];
                        foreach ($tags as $tag) {
                            echo '<span class="badge bg-white text-dark border px-3 py-2 rounded-pill fw-normal" style="font-size: 0.85rem; color: #555 !important;">' . htmlspecialchars($tag) . '</span>';
                        }
                        ?>
                    </div>
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
                    <p class="small text-muted mb-3" style="color:#bbbbbb !important;">We are a premier digital marketing and web design company delivering modern and conversion-focused digital products for businesses globally.</p>
                    <p class="small mb-1"><i class="bi bi-geo-alt-fill text-primary me-2"></i> Boring Road Chauraha, Opposite Harihar Chamber, Patna - 801503</p>
                    <p class="small"><i class="bi bi-envelope-fill text-primary me-2"></i> coralwebtechnology@gmail.com</p>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h5>Services</h5>
                    <ul class="list-unstyled small mb-0">
                        <li class="mb-2"><a href="#">Responsive Web Design</a></li>
                        <li class="mb-2"><a href="#">Static & Dynamic Sites</a></li>
                        <li class="mb-2"><a href="#">Ecommerce Development</a></li>
                        <li class="mb-2"><a href="#">WordPress CMS Configs</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Connect With Us</h5>
                    <ul class="list-unstyled small mb-3">
                        <li class="mb-2"><a href="tel:+918102549601"><i class="bi bi-telephone-fill text-primary me-2"></i> +91 8102549601</a></li>
                        <li class="mb-2"><a href="tel:+919117741984"><i class="bi bi-telephone-fill text-primary me-2"></i> +91 9117741984</a></li>
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
