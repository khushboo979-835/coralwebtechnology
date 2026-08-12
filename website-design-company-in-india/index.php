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

        .btn-book-mobile {
            background: #25d366;
            color: #ffffff !important;
            border: 2px solid #25d366;
            border-radius: 50px;
            padding: 8px 12px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(37, 211, 102, 0.2);
            white-space: nowrap;
        }
        .btn-book-mobile:hover {
            filter: brightness(0.95);
            transform: translateY(-1px);
        }
        .btn-book-mobile i {
            font-size: 14px;
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
            background-color: rgba(234, 95, 35, 0.03) !important;
            color: var(--primary) !important;
            box-shadow: none;
        }
        .accordion-body {
            padding: 20px 24px;
            color: var(--text-muted);
            background: #ffffff;
        }

        /* Map Container & Frame */
        .map-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0,0,0,0.06);
            background: #fff;
            padding: 10px;
            transition: all 0.3s ease;
        }
        .map-container:hover {
            box-shadow: 0 15px 35px rgba(234, 95, 35, 0.06);
            border-color: rgba(234, 95, 35, 0.15);
        }
        .map-frame {
            width: 100%;
            height: 350px;
            border: 0;
            border-radius: 12px;
        }

        /* Niche Grid & Badge Styles */
        .niche-card {
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            border-radius: 20px !important;
            border: 1px solid rgba(0,0,0,0.06) !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.02) !important;
            background: #fff;
        }
        .niche-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(234, 95, 35, 0.08) !important;
            border-color: rgba(234, 95, 35, 0.2) !important;
        }
        .niche-tag {
            display: inline-block;
            padding: 6px 14px;
            margin: 4px;
            font-size: 0.8rem;
            font-weight: 500;
            color: #555;
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 30px;
            transition: all 0.2s ease-in-out;
            cursor: default;
        }
        .niche-card:hover .niche-tag {
            background: #fff;
        }
        .niche-tag:hover {
            background: rgba(234, 95, 35, 0.1) !important;
            color: var(--primary) !important;
            border-color: rgba(234, 95, 35, 0.3) !important;
            transform: translateY(-2px);
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
        }
        
        /* New Premium Service Card Styles */
        .service-card-new {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(234, 95, 35, 0.1);
            border-radius: 24px !important;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            position: relative;
            overflow: hidden;
        }
        .service-card-new:hover {
            transform: translateY(-8px) scale(1.01);
            box-shadow: 0 20px 40px rgba(234, 95, 35, 0.08) !important;
            border-color: var(--primary) !important;
            background: #fff;
        }
        .service-card-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 18px;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .service-card-new:hover .service-card-img {
            transform: scale(1.04);
        }

        /* Tools & Languages Expertise Styles */
        .tool-card {
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            border-radius: 20px !important;
        }
        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08) !important;
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

        /* Dynamic Typewriter Title styling */
        .dynamic-typed {
            border-bottom: 3px solid var(--primary);
            padding-bottom: 2px;
            display: inline-block;
        }
        .dynamic-typed:empty {
            border-bottom: none;
        }
        .typing-cursor {
            font-weight: 300;
            color: var(--primary);
            animation: blink-cursor 0.7s infinite;
            display: inline-block;
            margin-left: 2px;
        }
        @keyframes blink-cursor {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
        @media (max-width: 768px) {
            .dynamic-typed {
                border-bottom-width: 2px;
                padding-bottom: 1px;
            }
        }
    </style>
</head>
<body>

    <div class="floating-cta d-md-none">
        <a class="call" href="tel:8102549601"><i class="bi bi-telephone-fill"></i>Call Now</a>
        <a class="wa" href="https://wa.me/919117741984?text=Hi%20I%20want%20to%20discuss%20web%20design" target="_blank"><i class="bi bi-whatsapp"></i>WhatsApp</a>
    </div>

    <!-- Custom Navigation Header -->
    <header class="landing-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="<?= $base_url; ?>" class="header-logo">
                    <img src="<?= $base_url; ?>assets/images/logo/logo.png" alt="Coral Web Technology" style="height: 48px; width: auto; object-fit: contain;">
                </a>
                <div class="d-flex align-items-center gap-2 gap-sm-3">
                    <a href="tel:8102549601" class="btn-theme-outline d-none d-md-inline-flex">
                        <i class="bi bi-telephone-fill"></i> 8102549601
                    </a>
                    <a href="#lead-form" class="btn-theme-primary d-none d-md-inline-flex">
                        Get Free Quote
                    </a>
                    <a href="https://wa.me/919117741984?text=Hi%20Coral%20Web%20Technology,%20I%20want%20to%20book%20a%20meeting%20for%20Website%20Design" class="btn-book-mobile d-inline-flex d-md-none" target="_blank">
                        <i class="bi bi-whatsapp"></i> Book Now
                    </a>
                    <a href="tel:8102549601" class="btn-call-animated d-inline-flex d-md-none">
                        <i class="bi bi-telephone-fill"></i> 8102549601
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
                        <span id="changing-text" class="text-gradient dynamic-typed">Custom</span><span class="typing-cursor">|</span> Website Design & Development Company in India
                    </h1>
                    <p class="hero-subtitle">
                        Your Trusted Partner in Website Design & Development – <strong>500+ Successful Projects Delivered</strong>. Our team of experts has crafted over 500 custom, SEO-friendly, and high-performance websites, helping businesses grow digitally.
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
                        <a href="tel:8102549601" class="btn-theme-primary">
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
                            <input type="hidden" name="redirect_to" value="website-design-company-in-india/thank-you/?wa=1">
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
                                <textarea name="requirement" rows="2" placeholder="Tell us about your project requirements"></textarea>
                            </div>
                            <button type="submit" class="btn-theme-primary w-100 justify-content-center mt-2">Submit Enquiry</button>
                        </form>
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

    <!-- Services Grid (Types of Web Design Services) -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <span class="premium-badge">Our Core Services</span>
                <h2 class="fw-bold mt-2">Website Designing Services</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">Explore our comprehensive range of web design solutions tailored to match different industry demands.</p>
            </div>
            <div class="row g-4">
                <!-- Service 1: Doctor/Clinic Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=600&auto=format&fit=crop&q=80" alt="Doctor/Clinic Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Doctor/Clinic Website</h5>
                        <p class="text-muted small mb-0">A comprehensive doctor/clinic website offers vital medical information, practitioner details, appointment booking, and patient resources. Seamlessly connecting patients with professional care for informed health decisions.</p>
                    </div>
                </div>
                <!-- Service 2: Education Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=600&auto=format&fit=crop&q=80" alt="Education Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Education Website</h5>
                        <p class="text-muted small mb-0">An education website is an online platform offering diverse learning resources, courses, and information. It facilitates interactive learning, skill development, and academic exploration.</p>
                    </div>
                </div>
                <!-- Service 3: Construction Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&auto=format&fit=crop&q=80" alt="Construction Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Construction Website</h5>
                        <p class="text-muted small mb-0">A construction website showcases project portfolios, services, and company information. It provides updates, resources, and contact details for potential clients and stakeholders.</p>
                    </div>
                </div>
                <!-- Service 4: Real Estate Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=600&auto=format&fit=crop&q=80" alt="Real Estate Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Real Estate Website</h5>
                        <p class="text-muted small mb-0">A real estate website is an online platform that showcases property listings, offering a user-friendly interface for buyers, sellers, and renters to explore properties.</p>
                    </div>
                </div>
                <!-- Service 5: Clothing Ecommerce Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600&auto=format&fit=crop&q=80" alt="Clothing Ecommerce Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Clothing Ecommerce Website</h5>
                        <p class="text-muted small mb-0">A premium clothing ecommerce website showcasing the latest fashion trends, featuring seamless shopping cart, secure payment gateways, size guides, product zoom, and order tracking.</p>
                    </div>
                </div>
                <!-- Service 6: Food Product Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=600&auto=format&fit=crop&q=80" alt="Food Product Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Food Product Website</h5>
                        <p class="text-muted small mb-0">A dynamic food product website showcases a delectable array of culinary delights, featuring detailed product profiles, recipes, and ordering options.</p>
                    </div>
                </div>
                <!-- Service 7: Trader Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?w=600&auto=format&fit=crop&q=80" alt="Trader Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Trader Website</h5>
                        <p class="text-muted small mb-0">A trader website is an online platform providing financial market information, trading tools, and resources for traders. It facilitates market analysis and portfolio management.</p>
                    </div>
                </div>
                <!-- Service 8: Service Provider Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&auto=format&fit=crop&q=80" alt="Service Provider Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Service Provider Website</h5>
                        <p class="text-muted small mb-0">A service provider website offers information, resources, and access to services, catering to customer needs and facilitating transactions, communication, and support.</p>
                    </div>
                </div>
                <!-- Service 9: Interior Designer Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=600&auto=format&fit=crop&q=80" alt="Interior Designer Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Interior Designer Website</h5>
                        <p class="text-muted small mb-0">An interior designer website showcases curated designs, services, and portfolios, connecting clients with creative design solutions for modern living spaces.</p>
                    </div>
                </div>
                <!-- Service 10: Event Management Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=600&auto=format&fit=crop&q=80" alt="Event Management Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Event Management Website</h5>
                        <p class="text-muted small mb-0">An event management website efficiently coordinates and promotes gatherings by offering features like registration, scheduling, and attendee interaction. It simplifies planning and engagement.</p>
                    </div>
                </div>
                <!-- Service 11: Sports & Fitness Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?w=600&auto=format&fit=crop&q=80" alt="Sports & Fitness Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Sports & Fitness Website</h5>
                        <p class="text-muted small mb-0">A dynamic sports and fitness website offering a diverse range of articles, training tips, live updates, and expert insights. Elevate your performance and well-being with our comprehensive content.</p>
                    </div>
                </div>
                <!-- Service 12: Photography Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&auto=format&fit=crop&q=80" alt="Photography Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Photography Website</h5>
                        <p class="text-muted small mb-0">A photography website showcases captivating visuals, blending artistic prowess with technical finesse. Galleries exhibit diverse subjects, styles, and moments, providing a digital canvas for photographers.</p>
                    </div>
                </div>
                <!-- Service 13: Laundry Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?w=600&auto=format&fit=crop&q=80" alt="Laundry Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Laundry Website</h5>
                        <p class="text-muted small mb-0">A laundry website is an online platform that offers laundry services, allowing users to schedule pickups, select cleaning preferences, and receive clean clothes conveniently.</p>
                    </div>
                </div>
                <!-- Service 14: Customize Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?w=600&auto=format&fit=crop&q=80" alt="Customize Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Customize Website</h5>
                        <p class="text-muted small mb-0">Craft a unique digital space with website customization. From design elements to functionality, personalization transforms a template into a distinctive online identity.</p>
                    </div>
                </div>
                <!-- Service 15: Manufacturing Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&auto=format&fit=crop&q=80" alt="Manufacturing Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Manufacturing Website</h5>
                        <p class="text-muted small mb-0">Manufacturing website creation involves designing, developing, and optimizing online platforms to showcase products, services, and industrial capabilities.</p>
                    </div>
                </div>
                <!-- Service 16: Cosmetic Website -->
                <div class="col-md-6 col-lg-3">
                    <div class="service-card-new p-3 bg-white h-100 border">
                        <div class="overflow-hidden rounded-4 mb-3">
                            <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?w=600&auto=format&fit=crop&q=80" alt="Cosmetic Website" class="service-card-img">
                        </div>
                        <h5 class="fw-bold mb-2 text-dark">Cosmetic Website</h5>
                        <p class="text-muted small mb-0">A captivating cosmetic website showcases a diverse range of beauty products. Elegantly designed interface, detailed product information, and user-friendly navigation make it a one-stop destination for beauty enthusiasts worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools & Languages Expertise Section -->
    <section class="section-padding bg-soft border-top">
        <div class="container text-center">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <span class="premium-badge">Our Technology Stack</span>
                    <h2 class="fw-bold mt-2">Our Expertise In Website Designing Tools and Web Development Languages</h2>
                    <p class="text-muted">We can design your website in different stack like LAMP (CMS based or customized) Core PHP, CodeIgniter, Laravel, MERN Stack (Mongodb, Express, React & Node)</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Shopify -->
                <div class="col-md-6 col-lg-4">
                    <div class="tool-card p-4 rounded-4 shadow-sm h-100 text-start" style="background: rgba(149, 191, 71, 0.08); border: 1px solid rgba(149, 191, 71, 0.2);">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <span class="fw-bold" style="color: #95bf47; font-size: 1.25rem;"><i class="bi bi-bag-check-fill me-2"></i> Shopify</span>
                            <span class="badge" style="background: #95bf47; color: white;">CMS</span>
                        </div>
                        <p class="text-muted small mb-0">Shopify is a popular e-commerce platform that allows businesses to create and manage online stores with integrated hosting, inventory tracking, and payment gateways.</p>
                    </div>
                </div>
                <!-- WooCommerce -->
                <div class="col-md-6 col-lg-4">
                    <div class="tool-card p-4 rounded-4 shadow-sm h-100 text-start" style="background: rgba(150, 93, 143, 0.08); border: 1px solid rgba(150, 93, 143, 0.2);">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <span class="fw-bold" style="color: #965d8f; font-size: 1.25rem;"><i class="bi bi-wordpress me-2"></i> Woo Commerce</span>
                            <span class="badge" style="background: #965d8f; color: white;">WordPress</span>
                        </div>
                        <p class="text-muted small mb-0">WooCommerce is a popular open-source e-commerce plugin for WordPress, enabling businesses of all sizes to build highly customizable and flexible web shops.</p>
                    </div>
                </div>
                <!-- Laravel -->
                <div class="col-md-6 col-lg-4">
                    <div class="tool-card p-4 rounded-4 shadow-sm h-100 text-start" style="background: rgba(255, 45, 32, 0.08); border: 1px solid rgba(255, 45, 32, 0.2);">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <span class="fw-bold" style="color: #ff2d20; font-size: 1.25rem;"><i class="bi bi-code-square me-2"></i> Laravel</span>
                            <span class="badge" style="background: #ff2d20; color: white;">Framework</span>
                        </div>
                        <p class="text-muted small mb-0">Laravel is a robust PHP framework renowned for its elegant syntax, secure database engines, MVC architecture, and powerful features ideal for custom enterprise applications.</p>
                    </div>
                </div>
                <!-- OpenCart -->
                <div class="col-md-6 col-lg-4">
                    <div class="tool-card p-4 rounded-4 shadow-sm h-100 text-start" style="background: rgba(38, 172, 234, 0.08); border: 1px solid rgba(38, 172, 234, 0.2);">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <span class="fw-bold" style="color: #26acea; font-size: 1.25rem;"><i class="bi bi-cart-fill me-2"></i> Open Cart</span>
                            <span class="badge" style="background: #26acea; color: white;">E-commerce</span>
                        </div>
                        <p class="text-muted small mb-0">OpenCart is a feature-rich, open-source e-commerce portal that offers a highly user-friendly interface to manage products, categories, orders, and sales reports easily.</p>
                    </div>
                </div>
                <!-- Wix -->
                <div class="col-md-6 col-lg-4">
                    <div class="tool-card p-4 rounded-4 shadow-sm h-100 text-start" style="background: rgba(16, 16, 16, 0.08); border: 1px solid rgba(16, 16, 16, 0.2);">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <span class="fw-bold" style="color: #101010; font-size: 1.25rem;"><i class="bi bi-layout-text-window me-2"></i> WIX</span>
                            <span class="badge" style="background: #101010; color: white;">No-Code</span>
                        </div>
                        <p class="text-muted small mb-0">Wix is a popular cloud-based web builder that allows startups and small businesses to quickly design clean, responsive portfolio websites using drag-and-drop mechanics.</p>
                    </div>
                </div>
                <!-- Magento -->
                <div class="col-md-6 col-lg-4">
                    <div class="tool-card p-4 rounded-4 shadow-sm h-100 text-start" style="background: rgba(244, 112, 33, 0.08); border: 1px solid rgba(244, 112, 33, 0.2);">
                        <div class="mb-3 d-flex align-items-center justify-content-between">
                            <span class="fw-bold" style="color: #f47021; font-size: 1.25rem;"><i class="bi bi-boxes me-2"></i> Magento</span>
                            <span class="badge" style="background: #f47021; color: white;">Enterprise</span>
                        </div>
                        <p class="text-muted small mb-0">Magento is an enterprise-grade e-commerce engine offering massive product catalog handling, multi-currency support, custom API structures, and deep scalability features.</p>
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
            <div class="row g-4 mt-4 text-start">
                <!-- Healthcare & Wellness -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 h-100 border">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center justify-content-center rounded-3" style="background: rgba(234, 95, 35, 0.1); color: var(--primary); width: 48px; height: 48px;">
                                <i class="bi bi-heart-pulse-fill fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Healthcare & Wellness</h5>
                        </div>
                        <div class="d-flex flex-wrap mt-2">
                            <span class="niche-tag">Healthcare & Hospitals</span>
                            <span class="niche-tag">Dental Clinics</span>
                            <span class="niche-tag">IVF Centres</span>
                            <span class="niche-tag">Nasha Mukti Kendra</span>
                            <span class="niche-tag">Beauty Salon & Spa</span>
                            <span class="niche-tag">Gym & Fitness</span>
                            <span class="niche-tag">Yoga Centres</span>
                        </div>
                    </div>
                </div>

                <!-- Education & Society -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 h-100 border">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center justify-content-center rounded-3" style="background: rgba(234, 95, 35, 0.1); color: var(--primary); width: 48px; height: 48px;">
                                <i class="bi bi-book-half fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Education & Society</h5>
                        </div>
                        <div class="d-flex flex-wrap mt-2">
                            <span class="niche-tag">Education & Schools</span>
                            <span class="niche-tag">Colleges & Universities</span>
                            <span class="niche-tag">Coaching Institutes</span>
                            <span class="niche-tag">School Institutions</span>
                            <span class="niche-tag">NGOs & Trusts</span>
                            <span class="niche-tag">Political Campaigns</span>
                            <span class="niche-tag">Society & Communities</span>
                        </div>
                    </div>
                </div>

                <!-- Real Estate & Construction -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 h-100 border">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center justify-content-center rounded-3" style="background: rgba(234, 95, 35, 0.1); color: var(--primary); width: 48px; height: 48px;">
                                <i class="bi bi-building fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Real Estate & Infra</h5>
                        </div>
                        <div class="d-flex flex-wrap mt-2">
                            <span class="niche-tag">Real Estate</span>
                            <span class="niche-tag">Construction Companies</span>
                            <span class="niche-tag">Interior Designers</span>
                            <span class="niche-tag">Architects</span>
                            <span class="niche-tag">Home Services</span>
                            <span class="niche-tag">Electronics & Electrical</span>
                            <span class="niche-tag">Security Services</span>
                        </div>
                    </div>
                </div>

                <!-- Hospitality & Logistics -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 h-100 border">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center justify-content-center rounded-3" style="background: rgba(234, 95, 35, 0.1); color: var(--primary); width: 48px; height: 48px;">
                                <i class="bi bi-truck fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Travel & Logistics</h5>
                        </div>
                        <div class="d-flex flex-wrap mt-2">
                            <span class="niche-tag">Hotels & Resorts</span>
                            <span class="niche-tag">Restaurants & Cafes</span>
                            <span class="niche-tag">Travel & Tourism</span>
                            <span class="niche-tag">Packers & Movers</span>
                            <span class="niche-tag">Logistics & Transport</span>
                            <span class="niche-tag">Automobile Dealers</span>
                            <span class="niche-tag">Bike Showrooms</span>
                        </div>
                    </div>
                </div>

                <!-- Trade & Commerce -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 h-100 border">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center justify-content-center rounded-3" style="background: rgba(234, 95, 35, 0.1); color: var(--primary); width: 48px; height: 48px;">
                                <i class="bi bi-cart3 fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Trade & Commerce</h5>
                        </div>
                        <div class="d-flex flex-wrap mt-2">
                            <span class="niche-tag">E-commerce Businesses</span>
                            <span class="niche-tag">Retail & Wholesale</span>
                            <span class="niche-tag">Manufacturing Industries</span>
                            <span class="niche-tag">Textile & Garments</span>
                            <span class="niche-tag">Jewellery Stores</span>
                            <span class="niche-tag">Export & Import</span>
                            <span class="niche-tag">Agriculture & Farming</span>
                        </div>
                    </div>
                </div>

                <!-- Professional & Corporate -->
                <div class="col-md-6 col-lg-4">
                    <div class="niche-card p-4 h-100 border">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center justify-content-center rounded-3" style="background: rgba(234, 95, 35, 0.1); color: var(--primary); width: 48px; height: 48px;">
                                <i class="bi bi-briefcase-fill fs-4"></i>
                            </div>
                            <h5 class="fw-bold mb-0 text-dark">Professional & Corporate</h5>
                        </div>
                        <div class="d-flex flex-wrap mt-2">
                            <span class="niche-tag">Finance & Insurance</span>
                            <span class="niche-tag">CA & Tax Consultants</span>
                            <span class="niche-tag">Law Firms & Advocates</span>
                            <span class="niche-tag">Startups & Tech</span>
                            <span class="niche-tag">IT Companies</span>
                            <span class="niche-tag">Corporate Businesses</span>
                            <span class="niche-tag">Event Management</span>
                            <span class="niche-tag">Photography & Video</span>
                        </div>
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
                            <input type="hidden" name="redirect_to" value="website-design-company-in-india/thank-you/?wa=1">
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
                                <textarea name="requirement" rows="3" placeholder="Describe the software/website layout you want to build"></textarea>
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
                    <div class="map-container">
                        <iframe class="map-frame" src="https://www.google.com/maps?q=Patna%20Boring%20Road%20Chauraha&z=14&output=embed" allowfullscreen></iframe>
                    </div>
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
                        <li class="mb-2"><a href="tel:8102549601"><i class="bi bi-telephone-fill text-primary me-2"></i> 8102549601</a></li>
                        <li class="mb-2"><a href="tel:9117741984"><i class="bi bi-telephone-fill text-primary me-2"></i> 9117741984</a></li>
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
        document.addEventListener("DOMContentLoaded", function() {
            const words = [
                "Custom",
                "Responsive",
                "E-commerce",
                "WordPress",
                "Corporate"
            ];
            let wordIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            const changingText = document.getElementById("changing-text");
            const typingSpeed = 150;
            const erasingSpeed = 100;
            const delayBetweenWords = 2000;
            
            function type() {
                if (!changingText) return;
                
                const currentWord = words[wordIndex];
                
                if (isDeleting) {
                    changingText.textContent = currentWord.substring(0, charIndex - 1);
                    charIndex--;
                } else {
                    changingText.textContent = currentWord.substring(0, charIndex + 1);
                    charIndex++;
                }
                
                let currentSpeed = isDeleting ? erasingSpeed : typingSpeed;
                
                if (!isDeleting && charIndex === currentWord.length) {
                    currentSpeed = delayBetweenWords;
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                    currentSpeed = 500;
                }
                
                setTimeout(type, currentSpeed);
            }
            
            setTimeout(type, 1000);
        });
    </script>

</body>
</html>
