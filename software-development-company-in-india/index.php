<?php include '../common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PTH47K2Q');</script>
    <!-- End Google Tag Manager -->
    <?php
    $page_title = 'Custom Software Development Company | ERP CRM Billing School Management';
    $page_description = 'Get custom ERP, CRM, billing and school management software tailored to your business needs.';
    $page_keywords = 'custom software development company, ERP software, CRM software, billing software, school management software';
    $page_canonical = $base_url . 'software-development-company-in-india/';
    ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
    <style>
        :root {
            --primary: #ff2b58; /* Appslure Pink-Red */
            --secondary: #277cea; /* Appslure Blue */
            --dark: #2b2c36; /* Appslure Dark Grey */
            --light-bg: #ffffff;
            --soft-bg: #f8f9fb;
            --border-color: #e5e5e5;
            --text-main: #333333;
            --text-muted: #555555;
            --primary-glow: rgba(255, 43, 88, 0.1);
            --call-glow: 255, 43, 88;
        }
        
        body { 
            font-family: 'Poppins', sans-serif; 
            color: var(--text-main); 
            background: var(--light-bg); 
            overflow-x: hidden;
        }

        .section-padding { padding: 50px 0; }
        .bg-soft { background: var(--soft-bg); }

        /* Typography Gradients */
        .text-gradient {
            background: linear-gradient(to right, #ff2b58 0%, #8e2de2 50%, #277cea 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        /* Modern Premium Badge */
        .premium-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            border-radius: 99px;
            background: rgba(255, 43, 88, 0.05);
            border: 1px solid rgba(255, 43, 88, 0.15);
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 20px;
        }

        /* Hero */
        .hero-section {
            position: relative;
            padding: 100px 0 70px;
            background: linear-gradient(135deg, #f8f9fb 0%, #eef2f7 100%);
            border-bottom: 1px solid var(--border-color);
        }
        .hero-title {
            font-size: clamp(2.2rem, 4.5vw, 3.4rem);
            font-weight: 800;
            line-height: 1.2;
            color: var(--dark);
            margin-bottom: 15px;
        }
        .hero-subtitle {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 650px;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        /* Top-Border Accent Cards */
        .accent-card {
            background: var(--light-bg);
            border-radius: 12px;
            padding: 28px;
            height: 100%;
            border: 1px solid var(--border-color);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
            position: relative;
        }
        .accent-card::before {
            content: "";
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            height: 5px;
            border-radius: 12px 12px 0 0;
            background: var(--dark);
        }
        .accent-card.pink-top::before { background: var(--primary); }
        .accent-card.blue-top::before { background: var(--secondary); }

        .accent-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            border-color: rgba(255, 43, 88, 0.2);
        }
        
        .card-icon {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: rgba(255, 43, 88, 0.08);
            color: var(--primary);
            font-size: 1.4rem;
            margin-bottom: 18px;
            transition: all 0.3s ease;
        }
        .accent-card:hover .card-icon {
            background: var(--primary);
            color: #fff;
        }

        /* Buttons */
        .btn-gradient-cta {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px 28px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(255, 43, 88, 0.2);
            transition: all 0.3s ease;
        }
        .btn-gradient-cta:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(255, 43, 88, 0.3);
            color: #fff;
        }

        .btn-outline-cta {
            background: transparent;
            color: var(--dark);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 12px 28px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .btn-outline-cta:hover {
            background: rgba(0, 0, 0, 0.02);
            border-color: var(--dark);
            color: var(--dark);
        }

        /* Form Card */
        .clean-form-card {
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
        .clean-form-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--secondary) 0%, var(--primary) 100%);
        }
        .clean-form-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 60px rgba(234, 95, 35, 0.12);
            border-color: rgba(234, 95, 35, 0.2);
        }
        .clean-form-card .form-group {
            margin-bottom: 28px;
        }
        .clean-form-card input, .clean-form-card textarea {
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
        .clean-form-card input:focus, .clean-form-card textarea:focus {
            border-bottom: 1.5px solid var(--primary) !important;
            background: transparent !important;
        }

        /* Testimonial Cards */
        .testimonial-card {
            background: var(--light-bg);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 24px;
            height: 100%;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
        }
        .testimonial-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        /* Industries served */
        .industry-card {
            background: var(--soft-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 20px;
            transition: all 0.3s ease;
            text-align: center;
        }
        .industry-card:hover {
            border-color: var(--primary);
            background: #fff;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }

        /* Map and Accordion Styling */
        .map-frame {
            border: 0;
            width: 100%;
            min-height: 350px;
            border-radius: 16px;
            border: 1px solid var(--border-color);
        }
        .faq-item {
            background: var(--soft-bg);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 12px;
            transition: all 0.3s ease;
        }
        .faq-item:hover {
            border-color: var(--primary);
        }

        /* Floating CTA bar */
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
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .floating-cta .call { background: var(--secondary); }
        .floating-cta .wa { background: #25d366; }

        @media (max-width: 768px) {
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
            .clean-form-card {
                padding: 25px 20px !important;
                margin-top: 15px !important;
                animation: none !important;
                border-radius: 16px !important;
            }
        }

        /* Shine sweep button effect */
        .btn-gradient-cta {
            position: relative;
            overflow: hidden;
        }
        .btn-gradient-cta::before {
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
            font-family: 'Poppins', sans-serif !important;
            color: var(--dark);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .header-logo span {
            color: var(--primary);
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

        .btn-theme-outline-header {
            background: transparent;
            color: var(--dark) !important;
            border: 2px solid var(--dark);
            border-radius: 50px;
            padding: 8px 24px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .btn-theme-outline-header:hover {
            background: var(--dark);
            color: #ffffff !important;
            transform: translateY(-2px);
        }
        
        .btn-theme-primary-header {
            background: var(--primary);
            color: #ffffff !important;
            border: 2px solid var(--primary);
            border-radius: 50px;
            padding: 8px 24px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px var(--primary-glow);
        }
        .btn-theme-primary-header:hover {
            background: #d84e15;
            border-color: #d84e15;
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

        /* Client Logo Marquee Styles */
        .marquee-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
            display: flex;
        }
        .marquee-wrapper::before,
        .marquee-wrapper::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100px;
            z-index: 2;
            pointer-events: none;
        }
        .marquee-wrapper::before {
            left: 0;
            background: linear-gradient(to right, #f8f9fa, transparent);
        }
        .marquee-wrapper::after {
            right: 0;
            background: linear-gradient(to left, #f8f9fa, transparent);
        }
        .marquee-track {
            display: flex;
            gap: 30px;
            padding: 10px 0;
            width: max-content;
        }
        .marquee-left {
            animation: scrollLeft 40s linear infinite;
        }
        .marquee-right {
            animation: scrollRight 35s linear infinite;
        }
        .marquee-wrapper:hover .marquee-track {
            animation-play-state: paused;
        }
        .client-logo-item {
            flex-shrink: 0;
        }
        .client-logo-box {
            width: 200px;
            height: 110px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
            transition: all 0.3s ease;
            border: 1px solid #eee;
        }
        .client-logo-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border-color: #ddd;
        }
        .client-logo-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: 0.3s ease;
        }
        @keyframes scrollLeft {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }
        @keyframes scrollRight {
            from { transform: translateX(-50%); }
            to { transform: translateX(0); }
        }
        @media (max-width: 768px) {
            .client-logo-box {
                width: 150px;
                height: 90px;
            }
        }

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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTH47K2Q"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Custom Navigation Header -->
    <header class="landing-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="<?= $base_url; ?>" class="header-logo">
                    <img src="<?= $base_url; ?>assets/images/logo/logo.png" alt="Coral Web Technology" style="height: 48px; width: auto; object-fit: contain;">
                </a>
                <div class="d-flex align-items-center gap-3">
                    <a href="tel:+918102549601" class="btn-theme-outline-header d-none d-md-inline-flex">
                        <i class="bi bi-telephone-fill"></i> 8102549601
                    </a>
                    <a href="#lead-form" class="btn-theme-primary-header d-none d-md-inline-flex">
                        Get Free Quote
                    </a>
                    <a href="tel:+918102549601" class="btn-call-animated d-inline-flex d-md-none">
                        <i class="bi bi-telephone-fill"></i> 81025 49601
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="floating-cta d-md-none">
        <a class="call" href="tel:+918102549601"><i class="bi bi-telephone-fill"></i>Call Now</a>
        <a class="wa" href="https://wa.me/919117741984?text=Hi%20I%20want%20to%20discuss%20custom%20software" target="_blank"><i class="bi bi-whatsapp"></i>WhatsApp</a>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="premium-badge">
                        <i class="bi bi-cpu-fill"></i> Custom Software Solutions ERP | CRM
                    </span>
                    <h1 class="hero-title">
                        Custom <span class="text-gradient">Software Development</span> Company
                    </h1>
                    <p class="hero-subtitle">
                        Build secure, enterprise-grade business management panels, billing structures, client CRM systems, and unified school dashboards tailored to your daily workflow operations.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#lead-form" class="btn-gradient-cta">
                            <i class="bi bi-chat-left-dots-fill"></i> Connect With Experts
                        </a>
                        <a href="https://wa.me/919117741984?text=Hi%20I%20need%20custom%20software%20for%20my%20business" class="btn-outline-cta" target="_blank">
                            <i class="bi bi-whatsapp" style="color: #25d366;"></i> WhatsApp Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <div class="accent-card pink-top">
                        <h4 class="fw-bold mb-4 text-gradient">Why Choose Us</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> Custom Dashboards & Reports
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> Highly Secure API Integrations
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> Robust Scalable Frameworks
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> Post-launch Maintenance Support
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet the Client Marquee Slider -->
    <section class="py-5 projects bg-light overflow-hidden">
        <div class="container-fluid px-0">
            <div class="head-title mb-5 text-center">
                <h2 class="fw-bold">Meet the <span style="color: var(--primary);">Client</span> Who Love Our Work</h2>
                <p class="text-muted">We are a team of passionate professionals dedicated to delivering exceptional results.</p>
            </div>
            
            <?php
            $client_logos = [
                ['url' => 'https://gensafe.in/', 'img' => 'gensafe.avif'],
                ['url' => 'https://theskincentre.in/', 'img' => 'skincentre.avif'],
                ['url' => '', 'img' => '2.avif'],
                ['url' => 'https://bsleyecare.com', 'img' => '3.avif'],
                ['url' => '', 'img' => '4.avif'],
                ['url' => 'https://jansamajsevasansthan.in/', 'img' => '5.avif'],
                ['url' => '', 'img' => '6.avif'],
                ['url' => 'https://hansrajenterprises.com/', 'img' => '7.avif'],
                ['url' => 'https://samajkalyanfoundation.life/', 'img' => '8.avif'],
                ['url' => 'https://patnanashamuktikendra.co.in/', 'img' => '9.avif'],
                ['url' => '', 'img' => '10.avif'],
                ['url' => '', 'img' => '11.avif'],
                ['url' => 'https://muskannashamuktikendra.life/', 'img' => '12.avif'],
                ['url' => 'https://patliputranashamuktikendra.com/', 'img' => '13.avif'],
                ['url' => 'https://netravedam.com/', 'img' => '14.avif'],
                ['url' => 'http://ehsaasnashamuktikendra.com/', 'img' => '15.avif'],
                ['url' => 'https://bhagyatech.com/', 'img' => '16.avif'],
                ['url' => 'https://rarefrigeration.in/', 'img' => '17.avif'],
                ['url' => 'https://www.annapurnahometuition.in/', 'img' => '18.avif'],
                ['url' => 'http://digitalwebseoadsagency.online/', 'img' => '19.avif'],
                ['url' => 'https://sudhaarnashamuktikendra.in/', 'img' => '20.avif'],
                ['url' => 'https://www.shreejigemsvastuvigyan.in/', 'img' => '21.png'],
                ['url' => 'https://ioclks.com/', 'img' => '22.jpg'],
                ['url' => 'https://mysterymassage.in/', 'img' => '23.png'],
                ['url' => 'https://laserhairremoval.skinhealer.in/', 'img' => '24.png'],
                ['url' => 'https://swetanknashamuktikendrafoundation.in/', 'img' => '25.jpg'],
                ['url' => 'https://deepnashamuktikendra.in/', 'img' => '26.jpg'],
                ['url' => 'http://zfdreams.in/', 'img' => '27.jpg'],
                ['url' => 'https://interiordesignerhansraj.info/', 'img' => '28.png'],
                ['url' => 'https://washmartkankarbagh.in/', 'img' => 'logo.jpg']
            ];
            
            $row1 = array_slice($client_logos, 0, 15);
            $row2 = array_slice($client_logos, 15);
            ?>
            
            <div class="marquee-wrapper">
                <div class="marquee-track marquee-left">
                    <?php for($i=0; $i<2; $i++): ?>
                        <?php foreach($row1 as $client): ?>
                            <div class="client-logo-item">
                                <a href="<?= !empty($client['url']) ? $client['url'] : 'javascript:void(0)' ?>" target="<?= !empty($client['url']) ? '_blank' : '_self' ?>">
                                    <div class="client-logo-box">
                                        <img src="<?= $base_url ?>assets/images/client/<?= $client['img'] ?>" alt="project" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                </div>
            </div>
            
            <div class="marquee-wrapper mt-4">
                <div class="marquee-track marquee-right">
                    <?php for($i=0; $i<2; $i++): ?>
                        <?php foreach($row2 as $client): ?>
                            <div class="client-logo-item">
                                <a href="<?= !empty($client['url']) ? $client['url'] : 'javascript:void(0)' ?>" target="<?= !empty($client['url']) ? '_blank' : '_self' ?>">
                                    <div class="client-logo-box">
                                        <img src="<?= $base_url ?>assets/images/client/<?= $client['img'] ?>" alt="project" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Solutions Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Our Software Solutions</h2>
                <p class="text-muted mx-auto" style="max-width:700px;">Bespoke workflow engineering designed to optimize internal communication, client billing, and logistics data.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="accent-card">
                        <div class="card-icon"><i class="bi bi-diagram-3"></i></div>
                        <h5 class="fw-bold mb-2">ERP Development</h5>
                        <p class="text-muted mb-0 small">Unified operations dashboard integrating inventory management, staff tracking, and HR data.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="accent-card pink-top">
                        <div class="card-icon"><i class="bi bi-people-fill"></i></div>
                        <h5 class="fw-bold mb-2">CRM Development</h5>
                        <p class="text-muted mb-0 small">Lead tracking, contact histories, pipeline visualization, and marketing campaign automation.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="accent-card blue-top">
                        <div class="card-icon"><i class="bi bi-receipt-cutoff"></i></div>
                        <h5 class="fw-bold mb-2">Billing Software</h5>
                        <p class="text-muted mb-0 small">Automated invoice compilation, tax calculations, dynamic PDFs, and online checkout setups.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="accent-card">
                        <div class="card-icon"><i class="bi bi-mortarboard-fill"></i></div>
                        <h5 class="fw-bold mb-2">School Management</h5>
                        <p class="text-muted mb-0 small">Comprehensive portal for registrations, fee collection, attendance metrics, and online exams.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Industries We Serve</h2>
                <p class="text-muted">Proven technology layouts customized for global vertical sectors.</p>
            </div>
            <div class="row g-3">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="industry-card">
                        <i class="bi bi-cart-fill text-primary fs-3 mb-2 d-block"></i>
                        <span class="fw-bold small text-dark">Retail & E-comm</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="industry-card">
                        <i class="bi bi-book-half text-danger fs-3 mb-2 d-block"></i>
                        <span class="fw-bold small text-dark">Education</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="industry-card">
                        <i class="bi bi-heart-pulse-fill text-primary fs-3 mb-2 d-block"></i>
                        <span class="fw-bold small text-dark">Healthcare</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="industry-card">
                        <i class="bi bi-truck text-danger fs-3 mb-2 d-block"></i>
                        <span class="fw-bold small text-dark">Logistics</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="industry-card">
                        <i class="bi bi-building-fill text-primary fs-3 mb-2 d-block"></i>
                        <span class="fw-bold small text-dark">Real Estate</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="industry-card">
                        <i class="bi bi-currency-exchange text-danger fs-3 mb-2 d-block"></i>
                        <span class="fw-bold small text-dark">FinTech</span>
                    </div>
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

    <!-- Case Studies Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Deployment Highlights</h2>
                <p class="text-muted">Explore how our custom builds solved actual company bottlenecks.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="accent-card">
                        <h5 class="fw-bold text-gradient mb-2">Automated Billing System</h5>
                        <p class="text-muted mb-0 small"><strong>Problem:</strong> A logistics group spent hours compiling manual invoices.<br><strong>Solution:</strong> We deployed a custom billing system that reduced report prep time by 90% and synchronized with their bank APIs.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accent-card pink-top">
                        <h5 class="fw-bold text-gradient mb-2">Unified School Portal</h5>
                        <p class="text-muted mb-0 small"><strong>Problem:</strong> Fragmented management of fees, class reports, and teacher attendance.<br><strong>Solution:</strong> Designed an integrated management dashboard that allowed parents, staff, and admins to communicate and process fees securely.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Reviews Section -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Client Reviews</h2>
                <p class="text-muted">Real feedback from clients who simplified their businesses using our software.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“Their customized CRM layout completely transformed our client follow-ups. Conversion tracking is now clear and easy to read.”</p>
                        <strong class="text-gradient">Vikram P.</strong>
                        <p class="text-muted small mb-0">Director, SalesForce NCR</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“The billing system they integrated was secure and flawless. It saved us valuable admin hours every month.”</p>
                        <strong class="text-gradient">Neha K.</strong>
                        <p class="text-muted small mb-0">Finance Manager, SwiftCargo</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“Reliable engineering, transparent communications, and expert support after deployment. Highly recommended.”</p>
                        <strong class="text-gradient">Abhishek S.</strong>
                        <p class="text-muted small mb-0">Principal, GD Goenka Academy</p>
                    </div>
                </div>
            </div>
        </div>


    <!-- Why Choose Us & Form -->
    <section class="section-padding" id="lead-form">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h2 class="fw-bold text-gradient mb-3">Partnering for Software Success</h2>
                    <p class="text-muted mb-4">We merge clean database structures with responsive frontend layouts to ensure your internal team handles operations efficiently.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-check-circle-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Tailor-Made Dashboards</h6>
                                <p class="text-muted mb-0 small">Every layout and reporting column matches your corporate operation steps.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-check-circle-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Database Performance Optimization</h6>
                                <p class="text-muted mb-0 small">Efficient queries, index setups, and fast API responses mean lag-free operations.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Expert Training & Support</h6>
                                <p class="text-muted mb-0 small">We guide your staff through interface walkthroughs and provide complete documentation.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="clean-form-card">
                        <h3 class="fw-bold text-gradient mb-2">Book Expert Consultation</h3>
                        <p class="text-muted mb-4">Get a customized proposal and database layout plan for your business within 48 hours.</p>
                        <form action="../send-mail.php" method="post">
                            <input type="hidden" name="redirect_to" value="software-development-company-in-india/thank-you/">
                            <input type="hidden" name="services" value="Software Development">
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
                                <textarea class="form-control" name="requirement" rows="3" placeholder="Describe your software requirement specifications"></textarea>
                            </div>
                            <button type="submit" class="btn-gradient-cta w-100 justify-content-center">Send Requirement</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ & Map -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h3 class="fw-bold text-gradient mb-3">Frequently Asked Questions</h3>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">Can we integrate custom APIs into the CRM/ERP?</h6>
                        <p class="text-muted mb-0 small">Yes, we regularly integrate WhatsApp API, payment links, SMS servers, and biometric devices.</p>
                    </div>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">How secure is our database storage?</h6>
                        <p class="text-muted mb-0 small">We configure advanced database controls, input verification safeguards, SSL certificates, and periodic backups.</p>
                    </div>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">Do you provide maintenance after launching the ERP/CRM?</h6>
                        <p class="text-muted mb-0 small">Yes, we offer monthly maintenance packages covering cloud updates, debug sessions, and security checks.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold text-gradient mb-3">Corporate Location</h3>
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
                            "software company in patna",
                            "software company in ahmedabad",
                            "software company in jaipur",
                            "software company in delhi",
                            "best software company in india",
                            "top software companies in india",
                            "software companies in india",
                            "software development company in india",
                            "software development firms in india",
                            "it software company in delhi",
                            "software company in nagpur"
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
                    <p class="small text-muted mb-3" style="color:#bbbbbb !important;">We are a premier digital marketing and custom software development company delivering modern and conversion-focused digital products for businesses globally.</p>
                    <p class="small mb-1"><i class="bi bi-geo-alt-fill text-primary me-2"></i> Boring Road Chauraha, Opposite Harihar Chamber, Patna - 801503</p>
                    <p class="small"><i class="bi bi-envelope-fill text-primary me-2"></i> coralwebtechnology@gmail.com</p>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h5>Services</h5>
                    <ul class="list-unstyled small mb-0">
                        <li class="mb-2"><a href="#">Custom ERP Software</a></li>
                        <li class="mb-2"><a href="#">CRM Software Development</a></li>
                        <li class="mb-2"><a href="#">Billing & Invoicing Software</a></li>
                        <li class="mb-2"><a href="#">School Management Systems</a></li>
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
    <script>
    document.querySelectorAll('form').forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            var nameVal = form.querySelector('input[name="name"]') ? form.querySelector('input[name="name"]').value : '';
            var emailVal = form.querySelector('input[name="email"]') ? form.querySelector('input[name="email"]').value : '';
            var numVal = form.querySelector('input[name="number"]') ? form.querySelector('input[name="number"]').value : '';
            var reqVal = form.querySelector('textarea[name="requirement"]') ? form.querySelector('textarea[name="requirement"]').value : '';
            var serviceType = form.querySelector('input[name="services"]') ? form.querySelector('input[name="services"]').value : 'Enquiry';
            
            // Construct WhatsApp message
            var message = "Hi Coral Web Technology, I would like to make an enquiry for *" + serviceType + "*.\n\n" +
                          "*Name:* " + nameVal + "\n" +
                          "*Email:* " + emailVal + "\n" +
                          "*Mobile:* " + numVal + "\n" +
                          "*Requirement:* " + (reqVal ? reqVal : "N/A");
                          
            var encodedMsg = encodeURIComponent(message);
            var whatsappUrl = "https://wa.me/919117741984?text=" + encodedMsg;
            
            // Open WhatsApp in a new window/tab
            window.open(whatsappUrl, '_blank');
        });
    });
    </script>
</body>
</html>
