<?php
include '../../common/config.php';

$page_title = "Top Mobile App Development Company Patna & India | iOS & Android App Developers";
$page_description = "Leading Mobile App Development Company. We engineer custom Android & iOS mobile applications using Flutter, React Native, Swift, and Kotlin. 100% Source Code Ownership & NDA protection guaranteed.";
$page_keywords = "mobile app development company patna, app development services india, flutter app developers, react native agency, native android app development, custom ios app development, mobile app design company";
$page_canonical = $base_url . "services/mobile-app-development/";
$service_key = 'mobile-app-development';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../../common/head.php'; ?>
    <?php include '../../common/plugins.php'; ?>
    
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "Mobile App Development Services",
        "operatingSystem": "iOS, Android",
        "applicationCategory": "BusinessApplication",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "ratingCount": "120"
        },
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "15000"
        },
        "provider": {
            "@type": "LocalBusiness",
            "name": "Coral Web Technology",
            "image": "<?= $base_url ?>assets/images/logo/logo.png",
            "telephone": "+919117741984",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Boring Road",
                "addressLocality": "Patna",
                "addressRegion": "Bihar",
                "postalCode": "801503",
                "addressCountry": "IN"
            }
        }
    }
    </script>

    <style>
        /* ==========================================================
           ULTRA-PREMIUM ATTRACTIVE DESIGN & RESPONSIVE STYLING
           Inspired by top global app agencies (appslure style)
           ========================================================== */
        :root {
            --app-bg: #030712;
            --app-card-bg: rgba(17, 24, 39, 0.75);
            --app-card-border: rgba(255, 255, 255, 0.08);
            --app-gradient-primary: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
            --app-gradient-glow: linear-gradient(135deg, #38bdf8 0%, #818cf8 50%, #c084fc 100%);
            --app-cyan: #38bdf8;
            --app-purple: #a855f7;
            --app-pink: #ec4899;
        }

        body {
            background-color: var(--app-bg);
            color: #f1f5f9;
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }

        /* --- Glow Mesh BG Animations --- */
        .glow-mesh {
            position: absolute;
            width: 500px; height: 500px;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.25;
            pointer-events: none;
            z-index: 0;
        }
        .glow-1 { top: -100px; left: -100px; background: #2563eb; }
        .glow-2 { top: 40%; right: -150px; background: #7c3aed; }
        .glow-3 { bottom: 10%; left: 20%; background: #06b6d4; }

        /* --- Hero Section --- */
        .app-hero-section {
            position: relative;
            padding: 25px 0 80px;
            background: radial-gradient(circle at 50% 0%, rgba(37, 99, 235, 0.2) 0%, transparent 60%), #030712;
            overflow: hidden;
        }

        .hero-pill-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 22px;
            background: rgba(37, 99, 235, 0.15);
            border: 1px solid rgba(56, 189, 248, 0.3);
            border-radius: 50px;
            color: var(--app-cyan);
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 25px;
            backdrop-filter: blur(12px);
            box-shadow: 0 0 20px rgba(56, 189, 248, 0.2);
        }

        .app-hero-title {
            font-size: 3.4rem;
            font-weight: 800;
            line-height: 1.2;
            color: #ffffff;
            margin-bottom: 22px;
            letter-spacing: -0.5px;
        }

        .app-hero-title span {
            background: var(--app-gradient-glow);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .app-hero-sub {
            font-size: 1.12rem;
            color: #94a3b8;
            line-height: 1.85;
            margin-bottom: 35px;
            max-width: 680px;
        }

        .hero-feature-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 40px;
        }

        .feature-tag {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 8px 16px;
            border-radius: 12px;
            font-size: 0.88rem;
            font-weight: 600;
            color: #cbd5e1;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .feature-tag i {
            color: var(--app-cyan);
        }

        /* --- Buttons --- */
        .btn-glow-primary {
            background: var(--app-gradient-primary);
            color: #ffffff !important;
            font-weight: 700;
            padding: 16px 36px;
            border-radius: 50px;
            font-size: 0.98rem;
            text-transform: capitalize;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.4);
            transition: all 0.3s ease;
        }

        .btn-glow-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 40px rgba(124, 58, 237, 0.6);
            color: #ffffff !important;
        }

        .btn-glow-secondary {
            background: rgba(255, 255, 255, 0.06);
            color: #ffffff !important;
            font-weight: 700;
            padding: 16px 32px;
            border-radius: 50px;
            font-size: 0.98rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .btn-glow-secondary:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--app-cyan);
            transform: translateY(-3px);
            color: #ffffff !important;
        }

        /* --- Hero Mockup & Floating Stat Cards --- */
        .hero-mockup-container {
            position: relative;
            text-align: center;
        }

        .hero-mockup-img {
            width: 100%;
            max-width: 520px;
            height: auto;
            border-radius: 28px;
            box-shadow: 0 30px 80px -20px rgba(37, 99, 235, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.15);
            transition: all 0.5s ease;
        }

        .hero-mockup-img:hover {
            transform: scale(1.02) rotate(-1deg);
        }

        .floating-badge-box {
            position: absolute;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 14px 22px;
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            gap: 14px;
            z-index: 5;
            animation: pulseFloat 4s ease-in-out infinite;
        }

        .floating-badge-box.pos-top { top: 8%; left: -25px; }
        .floating-badge-box.pos-bottom { bottom: 8%; right: -20px; animation-delay: 2s; }

        @keyframes pulseFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .floating-badge-icon {
            width: 44px; height: 44px;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.35rem; color: #fff;
        }

        .floating-badge-info h6 { margin: 0; font-weight: 700; font-size: 0.95rem; color: #fff; }
        .floating-badge-info p { margin: 0; font-size: 0.78rem; color: #94a3b8; }

        /* --- Section Titles --- */
        .app-section-header {
            text-align: center;
            max-width: 780px;
            margin: 0 auto 60px;
        }

        .app-badge-subtitle {
            display: inline-block;
            color: var(--app-cyan);
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.8px;
            margin-bottom: 14px;
        }

        .app-section-header h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }

        .app-section-header h2 span {
            background: var(--app-gradient-glow);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .app-section-header p {
            color: #94a3b8;
            font-size: 1.05rem;
            line-height: 1.75;
        }

        /* --- Glassmorphism Service Cards --- */
        .app-service-glass-card {
            background: var(--app-card-bg);
            backdrop-filter: blur(16px);
            border: 1px solid var(--app-card-border);
            border-radius: 24px;
            padding: 38px 30px;
            height: 100%;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .app-service-glass-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 3px;
            background: var(--app-gradient-primary);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .app-service-glass-card:hover {
            transform: translateY(-8px);
            border-color: rgba(56, 189, 248, 0.4);
            box-shadow: 0 20px 45px -10px rgba(37, 99, 235, 0.3);
            background: rgba(17, 24, 39, 0.95);
        }

        .app-service-glass-card:hover::before { opacity: 1; }

        .card-icon-wrapper {
            width: 64px; height: 64px;
            border-radius: 18px;
            background: rgba(37, 99, 235, 0.15);
            border: 1px solid rgba(56, 189, 248, 0.3);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.85rem; color: var(--app-cyan);
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .app-service-glass-card:hover .card-icon-wrapper {
            background: var(--app-gradient-primary);
            color: #ffffff;
            transform: scale(1.1) rotate(4deg);
        }

        .app-service-glass-card h3 {
            font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 14px;
        }

        .app-service-glass-card p {
            color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 22px; flex-grow: 1;
        }

        .card-feature-list {
            list-style: none; padding: 0; margin: 0;
        }

        .card-feature-list li {
            font-size: 0.88rem; color: #cbd5e1; margin-bottom: 10px; display: flex; align-items: center; gap: 8px;
        }

        .card-feature-list li i { color: var(--app-cyan); }

        /* --- Tech Stack Tabs --- */
        .tech-tab-nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 40px;
        }

        .tech-nav-link {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #94a3b8;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.92rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tech-nav-link.active, .tech-nav-link:hover {
            background: var(--app-gradient-primary);
            color: #ffffff;
            border-color: transparent;
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
        }

        .tech-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
            gap: 20px;
        }

        .tech-grid-item {
            background: rgba(17, 24, 39, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 25px 15px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .tech-grid-item:hover {
            border-color: var(--app-cyan);
            transform: translateY(-5px);
            background: rgba(30, 41, 59, 0.9);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }

        .tech-grid-item i {
            font-size: 2.8rem;
            margin-bottom: 12px;
            display: inline-block;
        }

        .tech-grid-item h5 {
            font-size: 1rem; font-weight: 700; color: #ffffff; margin: 0;
        }

        /* --- Comparison Table --- */
        .comp-table-card {
            background: rgba(17, 24, 39, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        }

        .comp-table {
            width: 100%; margin: 0; border-collapse: collapse; color: #cbd5e1;
        }

        .comp-table th {
            background: rgba(30, 41, 59, 0.9);
            color: #ffffff;
            padding: 20px 25px;
            font-size: 1rem;
            font-weight: 700;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .comp-table td {
            padding: 18px 25px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            font-size: 0.94rem;
        }

        .comp-table tr:hover td {
            background: rgba(255, 255, 255, 0.03);
        }

        /* --- Industry Verticals Cards --- */
        .ind-box-card {
            background: rgba(17, 24, 39, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 22px;
            padding: 32px 25px;
            transition: all 0.3s ease;
            height: 100%;
        }

        .ind-box-card:hover {
            border-color: var(--app-cyan);
            transform: translateY(-6px);
            background: rgba(17, 24, 39, 0.95);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }

        .ind-box-icon {
            font-size: 2.4rem; color: var(--app-cyan); margin-bottom: 18px;
        }

        .ind-box-card h4 {
            font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;
        }

        .ind-box-card p {
            font-size: 0.92rem; color: #94a3b8; line-height: 1.65; margin: 0;
        }

        /* --- Process Workflow Step Box --- */
        .workflow-step-card {
            background: rgba(15, 23, 42, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 22px;
            padding: 35px 26px;
            height: 100%;
            position: relative;
            transition: all 0.3s ease;
        }

        .workflow-step-card:hover {
            border-color: var(--app-cyan);
            background: rgba(15, 23, 42, 0.95);
            transform: translateY(-6px);
        }

        .workflow-number {
            width: 50px; height: 50px;
            background: var(--app-gradient-primary);
            border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            font-weight: 800; font-size: 1.2rem; color: #fff;
            margin-bottom: 22px;
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.4);
        }

        .workflow-step-card h4 {
            font-size: 1.25rem; font-weight: 700; color: #fff; margin-bottom: 12px;
        }

        .workflow-step-card p {
            font-size: 0.92rem; color: #94a3b8; line-height: 1.65; margin: 0;
        }

        /* --- Differentiators --- */
        .diff-feature-row {
            background: rgba(17, 24, 39, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 18px;
            padding: 26px;
            margin-bottom: 18px;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            transition: all 0.3s ease;
        }

        .diff-feature-row:hover {
            border-color: var(--app-cyan);
            background: rgba(17, 24, 39, 0.9);
            transform: translateX(8px);
        }

        .diff-feature-icon {
            width: 52px; height: 52px;
            border-radius: 14px;
            background: rgba(56, 189, 248, 0.12);
            border: 1px solid rgba(56, 189, 248, 0.3);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.5rem; color: var(--app-cyan);
            flex-shrink: 0;
        }

        .diff-feature-text h5 {
            font-size: 1.12rem; font-weight: 700; color: #fff; margin-bottom: 6px;
        }

        .diff-feature-text p {
            font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;
        }

        /* --- SEO Article Box --- */
        .seo-article-card {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 28px;
            padding: 55px;
            color: #cbd5e1;
            line-height: 1.85;
        }

        .seo-article-card h2 {
            color: #ffffff; font-weight: 800; font-size: 2.1rem; margin-bottom: 22px;
        }

        .seo-article-card h3 {
            color: var(--app-cyan); font-weight: 700; font-size: 1.45rem; margin: 32px 0 16px;
        }

        .seo-article-card p {
            margin-bottom: 20px; font-size: 1.02rem;
        }

        /* --- Accordion FAQ --- */
        .app-accordion .accordion-item {
            background: rgba(17, 24, 39, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px !important;
            margin-bottom: 16px;
            overflow: hidden;
        }

        .app-accordion .accordion-button {
            background: transparent;
            color: #ffffff;
            font-weight: 700;
            font-size: 1.08rem;
            padding: 22px 28px;
            box-shadow: none !important;
        }

        .app-accordion .accordion-button:not(.collapsed) {
            color: var(--app-cyan);
            background: rgba(37, 99, 235, 0.12);
        }

        .app-accordion .accordion-button::after {
            filter: invert(1);
        }

        .app-accordion .accordion-body {
            color: #94a3b8;
            font-size: 0.96rem;
            line-height: 1.75;
            padding: 0 28px 24px;
        }

        /* --- High Converting CTA Banner --- */
        .app-cta-card {
            background: linear-gradient(135deg, #1e3a8a 0%, #312e81 50%, #581c87 100%);
            border-radius: 32px;
            padding: 75px 45px;
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.6);
        }

        .app-cta-card h2 {
            font-size: 2.9rem; font-weight: 800; color: #fff; margin-bottom: 18px;
        }

        .app-cta-card p {
            font-size: 1.15rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 38px;
        }

        /* --- Responsiveness & Media Queries --- */
        @media (max-width: 991px) {
            .app-hero-section { padding: 15px 0 50px; }
            .app-hero-title { font-size: 2.2rem; }
            .app-section-header h2 { font-size: 2rem; }
            .floating-badge-box { display: none; }
            .seo-article-card { padding: 35px 25px; }
            .app-cta-card { padding: 50px 25px; }
            .app-cta-card h2 { font-size: 2.1rem; }
        }

        @media (max-width: 576px) {
            .app-hero-section { padding: 10px 0 40px; }
            .app-hero-title { font-size: 1.85rem; }
            .hero-pill-badge { font-size: 0.78rem; padding: 6px 16px; margin-bottom: 15px; }
            .btn-glow-primary, .btn-glow-secondary { width: 100%; justify-content: center; }
            .comp-table th, .comp-table td { padding: 12px 14px; font-size: 0.82rem; }
            .diff-feature-row { flex-direction: column; text-align: center; align-items: center; }
        }
    </style>
</head>
<body>
    <?php include '../../common/header.php'; ?>

    <div class="glow-mesh glow-1"></div>
    <div class="glow-mesh glow-2"></div>
    <div class="glow-mesh glow-3"></div>

    <!-- 1. HERO SECTION -->
    <section class="app-hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="hero-pill-badge">
                        <i class="bi bi-patch-check-fill"></i> Premier Mobile App Development Company
                    </div>
                    
                    <h1 class="app-hero-title">Custom <span>Mobile App Development</span> Services for iOS & Android</h1>
                    
                    <p class="app-hero-sub">
                        Transform your innovative app idea into a high-performing digital product. We engineer custom, feature-rich, and scalable mobile applications for iOS & Android using Flutter, React Native, Native Swift, and Kotlin. Designed for intuitive UX, maximum engagement, and 100% crash-free stability.
                    </p>

                    <div class="hero-feature-tags">
                        <div class="feature-tag"><i class="bi bi-shield-check"></i> 100% Source Code Ownership</div>
                        <div class="feature-tag"><i class="bi bi-file-earmark-lock"></i> Strict NDA Confidentiality</div>
                        <div class="feature-tag"><i class="bi bi-shop"></i> App Store & Play Store Approved</div>
                        <div class="feature-tag"><i class="bi bi-lightning-charge-fill"></i> 60 FPS Native Speed</div>
                    </div>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="https://wa.me/919117741984?text=Hi%20Coral%20Web%20Technology,%20I%20want%20a%20free%20consultation%20for%20a%20Mobile%20App%20Development%20Project." target="_blank" class="btn-glow-primary">
                            <i class="bi bi-whatsapp fs-5"></i> Get Free App Consultation
                        </a>
                        <a href="tel:+919117741984" class="btn-glow-secondary">
                            <i class="bi bi-telephone-fill"></i> Call Specialist (+91 91177 41984)
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 mt-5 mt-lg-0 hero-mockup-container" data-aos="fade-left">
                    <img src="<?= $base_url ?>assets/images/servicess/mobile-app-development.webp" alt="Mobile App Development Company Patna" class="hero-mockup-img" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=800&auto=format&fit=crop';">

                    <div class="floating-badge-box pos-top">
                        <div class="floating-badge-icon" style="background: #2563eb;">
                            <i class="bi bi-phone-fill"></i>
                        </div>
                        <div class="floating-badge-info text-start">
                            <h6>100+ Mobile Apps Built</h6>
                            <p>Live on App Store & Play Store</p>
                        </div>
                    </div>

                    <div class="floating-badge-box pos-bottom">
                        <div class="floating-badge-icon" style="background: #10b981;">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="floating-badge-info text-start">
                            <h6>4.9 / 5.0 Star Rating</h6>
                            <p>Top Rated Development Agency</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. STATS COUNTER BAR -->
    <section class="py-4" style="background: rgba(15, 23, 42, 0.7); border-y: 1px solid rgba(255,255,255,0.08); backdrop-filter: blur(10px);">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-6 col-md-3">
                    <div style="font-size: 2.5rem; font-weight: 800; color: #38bdf8;">100+</div>
                    <div style="color: #94a3b8; font-size: 0.9rem; font-weight: 600; text-transform: uppercase;">Apps Delivered</div>
                </div>
                <div class="col-6 col-md-3">
                    <div style="font-size: 2.5rem; font-weight: 800; color: #818cf8;">99.8%</div>
                    <div style="color: #94a3b8; font-size: 0.9rem; font-weight: 600; text-transform: uppercase;">Crash-Free Stability</div>
                </div>
                <div class="col-6 col-md-3">
                    <div style="font-size: 2.5rem; font-weight: 800; color: #c084fc;">100%</div>
                    <div style="color: #94a3b8; font-size: 0.9rem; font-weight: 600; text-transform: uppercase;">IP & Source Code Rights</div>
                </div>
                <div class="col-6 col-md-3">
                    <div style="font-size: 2.5rem; font-weight: 800; color: #f472b6;">5+ Yrs</div>
                    <div style="color: #94a3b8; font-size: 0.9rem; font-weight: 600; text-transform: uppercase;">Engineering Expertise</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. COMPREHENSIVE SERVICES GRID -->
    <section class="py-5" style="padding: 100px 0 !important;">
        <div class="container">
            <div class="app-section-header">
                <span class="app-badge-subtitle">Full-Cycle App Engineering</span>
                <h2>End-to-End <span>Mobile App Development</span> Services</h2>
                <p>From initial Figma wireframes and native coding to cloud server API integrations and Store publishing, we manage the entire mobile app lifecycle.</p>
            </div>

            <div class="row g-4">
                <!-- Service 1: Custom iOS App Development -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="app-service-glass-card">
                        <div class="card-icon-wrapper"><i class="bi bi-apple"></i></div>
                        <h3>iOS App Development</h3>
                        <p>High-security, fluid native iOS applications built using Swift and SwiftUI, fully aligned with Apple’s Human Interface Guidelines for iPhone, iPad, and Apple Watch.</p>
                        <ul class="card-feature-list">
                            <li><i class="bi bi-check2-circle"></i> Swift & SwiftUI Native Architecture</li>
                            <li><i class="bi bi-check2-circle"></i> Apple Pay & iCloud Synchronization</li>
                            <li><i class="bi bi-check2-circle"></i> App Store Approval Guarantee</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 2: Native Android App Development -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="app-service-glass-card">
                        <div class="card-icon-wrapper"><i class="bi bi-android2"></i></div>
                        <h3>Android App Development</h3>
                        <p>Robust, feature-packed Android mobile applications built using Kotlin & Java, optimized for thousands of device screen sizes, tablets, and Android TV systems.</p>
                        <ul class="card-feature-list">
                            <li><i class="bi bi-check2-circle"></i> Kotlin & Jetpack Compose Framework</li>
                            <li><i class="bi bi-check2-circle"></i> Google Play Billing & Maps APIs</li>
                            <li><i class="bi bi-check2-circle"></i> Multi-device Hardware Compatibility</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 3: Cross-Platform (Flutter & React Native) -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="app-service-glass-card">
                        <div class="card-icon-wrapper"><i class="bi bi-layers-half"></i></div>
                        <h3>Cross-Platform App Coding</h3>
                        <p>Reduce development costs by up to 40% using Flutter and React Native. Deploy native-feeling applications to both iOS and Android from a single codebase.</p>
                        <ul class="card-feature-list">
                            <li><i class="bi bi-check2-circle"></i> Single Codebase for iOS & Android</li>
                            <li><i class="bi bi-check2-circle"></i> 60 FPS Native Performance</li>
                            <li><i class="bi bi-check2-circle"></i> Rapid Time-to-Market Deployment</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 4: UI/UX App Design & Wireframing -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="app-service-glass-card">
                        <div class="card-icon-wrapper"><i class="bi bi-palette"></i></div>
                        <h3>Mobile UI/UX App Design</h3>
                        <p>Engaging, modern app interfaces designed in Figma. We create interactive wireframes, user flow journey maps, and smooth micro-animations.</p>
                        <ul class="card-feature-list">
                            <li><i class="bi bi-check2-circle"></i> Clickable Figma Prototypes</li>
                            <li><i class="bi bi-check2-circle"></i> User-Centric Interface Design</li>
                            <li><i class="bi bi-check2-circle"></i> Custom Iconography & Design System</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 5: Cloud Backend & API Architecture -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="app-service-glass-card">
                        <div class="card-icon-wrapper"><i class="bi bi-cloud-arrow-up"></i></div>
                        <h3>Backend & RESTful API Coding</h3>
                        <p>Scalable cloud server backends engineered with Node.js, Python, Laravel, and Firebase. Secure RESTful and GraphQL APIs connecting your app seamlessly.</p>
                        <ul class="card-feature-list">
                            <li><i class="bi bi-check2-circle"></i> Secure Encryption & Token Auth</li>
                            <li><i class="bi bi-check2-circle"></i> Real-time Database Sync</li>
                            <li><i class="bi bi-check2-circle"></i> AWS & Firebase Infrastructure</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 6: Maintenance, Support & Upgrades -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="app-service-glass-card">
                        <div class="card-icon-wrapper"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3>App Maintenance & Upgrades</h3>
                        <p>Continuous monitoring, OS version compatibility updates, security vulnerability patching, performance optimization, and new feature additions for live apps.</p>
                        <ul class="card-feature-list">
                            <li><i class="bi bi-check2-circle"></i> 24/7 Server & App Health Monitoring</li>
                            <li><i class="bi bi-check2-circle"></i> iOS & Android OS Version Updates</li>
                            <li><i class="bi bi-check2-circle"></i> Code Refactoring & Security Patches</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. NATIVE VS CROSS-PLATFORM COMPARISON TABLE -->
    <section class="py-5" style="background: rgba(15, 23, 42, 0.4); padding: 90px 0 !important;">
        <div class="container">
            <div class="app-section-header">
                <span class="app-badge-subtitle">Smart Technology Selection</span>
                <h2>Native vs. Cross-Platform <span>App Comparison</span></h2>
                <p>Choose the exact tech stack that aligns with your business budget, launch timeline, and performance expectations.</p>
            </div>

            <div class="comp-table-card table-responsive" data-aos="zoom-in">
                <table class="comp-table">
                    <thead>
                        <tr>
                            <th>Feature Comparison</th>
                            <th>Native Development (Swift / Kotlin)</th>
                            <th>Cross-Platform (Flutter / React Native)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Target Platforms</strong></td>
                            <td>Separate Codebases for iOS & Android</td>
                            <td><span style="color:#38bdf8; font-weight:700;">Single Codebase for Both Platforms</span></td>
                        </tr>
                        <tr>
                            <td><strong>Development Cost</strong></td>
                            <td>Standard / Higher (2 Dev Teams)</td>
                            <td><span style="color:#10b981; font-weight:700;">Saves up to 40% in Budget</span></td>
                        </tr>
                        <tr>
                            <td><strong>Time to Market</strong></td>
                            <td>6 - 12 Weeks</td>
                            <td><span style="color:#10b981; font-weight:700;">3 - 6 Weeks (Faster Launch)</span></td>
                        </tr>
                        <tr>
                            <td><strong>App Performance</strong></td>
                            <td><span style="color:#38bdf8; font-weight:700;">100% Maximum Hardware Speed</span></td>
                            <td>95%+ Native-like Performance (60 FPS)</td>
                        </tr>
                        <tr>
                            <td><strong>Best Suited For</strong></td>
                            <td>Complex Games, Hardware Apps, Heavy 3D</td>
                            <td>Startups, E-Commerce, Social, On-Demand</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 5. INDUSTRY SOLUTIONS WE BUILD -->
    <section class="py-5" style="padding: 100px 0 !important;">
        <div class="container">
            <div class="app-section-header">
                <span class="app-badge-subtitle">Tailored Industry Solutions</span>
                <h2>Custom Mobile Apps <span>Built for Every Sector</span></h2>
                <p>We deliver custom-built mobile app solutions tailored to solve unique business challenges across diverse industries.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="ind-box-card">
                        <div class="ind-box-icon"><i class="bi bi-bag-check-fill"></i></div>
                        <h4>E-Commerce & Shopping Apps</h4>
                        <p>Multi-vendor marketplaces, instant checkout, push alerts for discounts, order tracking, and integrated payment gateways.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="ind-box-card">
                        <div class="ind-box-icon"><i class="bi bi-heart-pulse-fill"></i></div>
                        <h4>Healthcare & Telemedicine Apps</h4>
                        <p>Doctor appointment booking, video consultations, digital prescription downloads, and HIPAA-compliant patient record privacy.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="ind-box-card">
                        <div class="ind-box-icon"><i class="bi bi-bank2"></i></div>
                        <h4>FinTech & Digital Wallets</h4>
                        <p>Biometric authentication, UPI payment integrations, peer-to-peer transfers, transaction history, and encrypted security layers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="ind-box-card">
                        <div class="ind-box-icon"><i class="bi bi-building"></i></div>
                        <h4>Real Estate & Property Portals</h4>
                        <p>Interactive map search, 360-degree virtual property tours, agent chat messaging, and instant lead submission forms.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
                    <div class="ind-box-card">
                        <div class="ind-box-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
                        <h4>EdTech & E-Learning Apps</h4>
                        <p>Live video streaming classes, interactive online quizzes, offline course video downloads, and student progress analytics.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                    <div class="ind-box-card">
                        <div class="ind-box-icon"><i class="bi bi-truck"></i></div>
                        <h4>On-Demand Booking & Logistics</h4>
                        <p>Live GPS driver tracking, automated fare calculations, instant booking requests, and real-time delivery notifications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TECH STACK SHOWCASE -->
    <section class="py-5" style="background: rgba(15, 23, 42, 0.4); padding: 90px 0 !important;">
        <div class="container text-center">
            <div class="app-section-header">
                <span class="app-badge-subtitle">Cutting-Edge Tech Stack</span>
                <h2>Technologies & Frameworks <span>We Power Apps With</span></h2>
                <p>We leverage modern, scalable, and battle-tested mobile development frameworks to ensure optimal performance and security.</p>
            </div>

            <div class="tech-tab-nav">
                <button class="tech-nav-link active" onclick="filterTech('all', this)">All Technologies</button>
                <button class="tech-nav-link" onclick="filterTech('mobile', this)">Mobile Frameworks</button>
                <button class="tech-nav-link" onclick="filterTech('backend', this)">Backend & Cloud</button>
                <button class="tech-nav-link" onclick="filterTech('database', this)">Databases</button>
            </div>

            <div class="tech-card-grid mt-4">
                <div class="tech-grid-item tech-cat-mobile" data-aos="fade-up">
                    <i class="bi bi-filetype-jsx" style="color: #02569B;"></i>
                    <h5>Flutter</h5>
                </div>
                <div class="tech-grid-item tech-cat-mobile" data-aos="fade-up" data-aos-delay="50">
                    <i class="bi bi-code-square" style="color: #61DAFB;"></i>
                    <h5>React Native</h5>
                </div>
                <div class="tech-grid-item tech-cat-mobile" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-apple" style="color: #FA7323;"></i>
                    <h5>Swift</h5>
                </div>
                <div class="tech-grid-item tech-cat-mobile" data-aos="fade-up" data-aos-delay="150">
                    <i class="bi bi-android2" style="color: #7F52FF;"></i>
                    <h5>Kotlin</h5>
                </div>
                <div class="tech-grid-item tech-cat-backend" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-node-plus-fill" style="color: #339933;"></i>
                    <h5>Node.js</h5>
                </div>
                <div class="tech-grid-item tech-cat-backend" data-aos="fade-up" data-aos-delay="250">
                    <i class="bi bi-fire" style="color: #FFCA28;"></i>
                    <h5>Firebase</h5>
                </div>
                <div class="tech-grid-item tech-cat-backend" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-cloud-check-fill" style="color: #FF9900;"></i>
                    <h5>AWS Cloud</h5>
                </div>
                <div class="tech-grid-item tech-cat-database" data-aos="fade-up" data-aos-delay="350">
                    <i class="bi bi-database-fill-gear" style="color: #47A248;"></i>
                    <h5>MongoDB</h5>
                </div>
                <div class="tech-grid-item tech-cat-database" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-database-fill-check" style="color: #336791;"></i>
                    <h5>PostgreSQL</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. AGILE WORKFLOW TIMELINE -->
    <section class="py-5" style="padding: 100px 0 !important;">
        <div class="container">
            <div class="app-section-header">
                <span class="app-badge-subtitle">Structured Agile Methodology</span>
                <h2>Our Proven <span>Mobile App Development</span> Lifecycle</h2>
                <p>We follow a transparent, step-by-step agile development workflow to turn your initial app idea into a high-converting store product.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="workflow-step-card">
                        <div class="workflow-number">01</div>
                        <h4>Discovery & Scope Blueprint</h4>
                        <p>We analyze your business goals, target user personas, competitor apps, and technical specifications to build a clear project roadmap.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="workflow-step-card">
                        <div class="workflow-number">02</div>
                        <h4>UI/UX Wireframing & Design</h4>
                        <p>Our designers craft intuitive user flows, screen wireframes, and interactive Figma prototypes ensuring smooth micro-interactions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="workflow-step-card">
                        <div class="workflow-number">03</div>
                        <h4>Agile App Coding & APIs</h4>
                        <p>Our app developers write clean, modular code for frontend mobile screens and integrate secure cloud backend RESTful APIs.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="workflow-step-card">
                        <div class="workflow-number">04</div>
                        <h4>QA & Penetration Testing</h4>
                        <p>We perform rigorous multi-device testing, checking performance, security encryption, UI responsiveness, and memory leak issues.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="workflow-step-card">
                        <div class="workflow-number">05</div>
                        <h4>App Store Publishing & ASO</h4>
                        <p>We package your app builds, optimize store metadata, screenshots, descriptions, and manage official submission for approval.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="workflow-step-card">
                        <div class="workflow-number">06</div>
                        <h4>Ongoing Scaling & Maintenance</h4>
                        <p>After deployment, we provide continuous monitoring, OS compatibility updates, performance tuning, and new feature rollouts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. DIFFERENTIATORS & INQUIRY FORM -->
    <section class="py-5" style="background: rgba(15, 23, 42, 0.4); padding: 90px 0 !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="app-section-header text-start m-0 mb-4">
                        <span class="app-badge-subtitle">Why Partner With Us</span>
                        <h2>Why We Are The Preferred <span>Mobile App Development</span> Agency</h2>
                        <p>At Coral Web Technology, we combine engineering excellence with business strategy to build apps that generate measurable ROI for startups and enterprises alike.</p>
                    </div>

                    <div class="diff-feature-row">
                        <div class="diff-feature-icon"><i class="bi bi-shield-lock-fill"></i></div>
                        <div class="diff-feature-text">
                            <h5>100% Source Code & IP Ownership</h5>
                            <p>You retain complete intellectual property rights and full source code ownership upon project completion.</p>
                        </div>
                    </div>

                    <div class="diff-feature-row">
                        <div class="diff-feature-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                        <div class="diff-feature-text">
                            <h5>Strict NDA Confidentiality</h5>
                            <p>We sign a non-disclosure agreement (NDA) before starting to keep your application concept 100% secure.</p>
                        </div>
                    </div>

                    <div class="diff-feature-row">
                        <div class="diff-feature-icon"><i class="bi bi-cpu-fill"></i></div>
                        <div class="diff-feature-text">
                            <h5>Zero Lock-in Scalable Architecture</h5>
                            <p>Built with modular, clean code standards that allow easy future feature additions and database scaling.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                    <div class="p-4 p-md-5 rounded-4" style="background: linear-gradient(135deg, rgba(37, 99, 235, 0.15), rgba(124, 58, 237, 0.15)); border: 1px solid rgba(255, 255, 255, 0.15);">
                        <h3 class="fw-bold text-white mb-2">Build Your Custom Mobile App</h3>
                        <p class="text-muted mb-4 small">Fill out the quick form below to get a technical estimate and consultation within 24 hours.</p>

                        <form id="appInquiryFormQuick">
                            <div class="mb-3">
                                <input type="text" class="form-control bg-dark border-secondary text-white py-3" placeholder="Your Full Name *" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control bg-dark border-secondary text-white py-3" placeholder="Mobile Number *" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-select bg-dark border-secondary text-white py-3" required>
                                    <option value="" disabled selected>Select App Category *</option>
                                    <option value="iOS App Development">Native iOS App (Swift)</option>
                                    <option value="Android App Development">Native Android App (Kotlin)</option>
                                    <option value="Cross-Platform App">Cross-Platform App (Flutter/React Native)</option>
                                    <option value="E-Commerce App">E-Commerce & Delivery App</option>
                                    <option value="Custom Enterprise App">Custom Business Application</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-3 fw-bold rounded-pill text-uppercase" style="background: var(--app-gradient-primary); border: none;">
                                Submit Request <i class="bi bi-send-fill ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. SEO ARTICLE BOX -->
    <section class="py-5" style="padding: 100px 0 !important;">
        <div class="container">
            <div class="seo-article-card" data-aos="fade-up">
                <h2>Premier Mobile App Development Company in Patna & India</h2>
                <p>
                    In today's mobile-first digital economy, having a dedicated smartphone application is no longer optional—it is a critical growth driver. At <strong>Coral Web Technology</strong>, we provide end-to-end <strong>mobile app development services</strong> tailored to startups, small businesses, and enterprise organizations across India and globally.
                </p>

                <h3>Why Invest in Custom Mobile App Development?</h3>
                <p>
                    Mobile applications provide a direct, personalized communication channel between your business and customers. Unlike mobile websites, smartphone apps store data locally, offering ultra-fast loading times, offline accessibility, push notification alerts, and seamless integration with hardware features like camera, GPS, and biometric authentication.
                </p>

                <h3>Native vs. Cross-Platform App Development: Which Should You Choose?</h3>
                <p>
                    When starting a mobile app project, choosing the right framework depends on your budget, timeline, and performance needs:
                </p>
                <ul>
                    <li><strong>Native iOS & Android App Development:</strong> Built using Swift (for Apple iOS) and Kotlin (for Android), native apps deliver maximum device speed, smooth 60 FPS animations, and hardware access. Recommended for complex gaming, high-security fintech, or intensive graphics applications.</li>
                    <li><strong>Cross-Platform Development (Flutter & React Native):</strong> Allows developers to write a single codebase and deploy native-feeling apps to both Google Play Store and Apple App Store simultaneously. This reduces development costs by up to 40% while accelerating time-to-market.</li>
                </ul>

                <h3>Why Coral Web Technology is Your Ideal App Development Partner</h3>
                <p>
                    We combine creative UI/UX app design with rock-solid server backends to deliver 100% crash-free applications. Our team handles every stage of product engineering—from initial business analysis and Figma prototyping to RESTful API coding, security testing, and official App Store deployment.
                </p>
            </div>
        </div>
    </section>

    <!-- 10. ACCORDION FAQ -->
    <section class="py-5" style="background: rgba(15, 23, 42, 0.4); padding: 90px 0 !important;">
        <div class="container">
            <div class="app-section-header">
                <span class="app-badge-subtitle">Got Questions?</span>
                <h2>Frequently Asked <span>Questions</span></h2>
                <p>Here are clear answers to common questions about our mobile app development timelines, pricing models, source code ownership, and store publishing.</p>
            </div>

            <div class="accordion app-accordion max-w-800 mx-auto" id="appFaqAccordion">
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            How much does it cost to build a custom mobile application?
                        </button>
                    </h3>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#appFaqAccordion">
                        <div class="accordion-body">
                            The cost of mobile app development depends on factors like platform choice (Android, iOS, or Cross-Platform), number of screens, custom API requirements, backend complexity, and third-party integrations. Simple business apps start at highly affordable rates, while complex multi-vendor or database-heavy platforms require custom quotes. Contact us for a detailed breakdown.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Will I own the source code and intellectual property of the app?
                        </button>
                    </h3>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#appFaqAccordion">
                        <div class="accordion-body">
                            Yes, absolutely! Upon final project delivery and payment completion, you retain 100% ownership of the mobile app source code, backend database code, wireframe design files, and intellectual property.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Do you sign a Non-Disclosure Agreement (NDA) before project discussion?
                        </button>
                    </h3>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#appFaqAccordion">
                        <div class="accordion-body">
                            Yes. We respect intellectual property and data confidentiality. We execute a legally binding NDA prior to reviewing your business concepts, wireframes, or custom logic to ensure 100% security.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            Will you publish my mobile app on Google Play Store and Apple App Store?
                        </button>
                    </h3>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#appFaqAccordion">
                        <div class="accordion-body">
                            Yes! We handle the end-to-end publishing process on both the Google Play Console and Apple Developer Account. We prepare store graphics, screenshots, privacy policy documentation, metadata, and resolve any guidelines feedback to guarantee live publication.
                        </div>
                    </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            How long does it take to develop a mobile app?
                        </button>
                    </h3>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#appFaqAccordion">
                        <div class="accordion-body">
                            A basic cross-platform MVP app usually takes 3 to 5 weeks. Medium complexity apps with custom API backends take 6 to 10 weeks, while large enterprise platforms may require 3+ months. We provide exact sprint timelines during our project blueprint phase.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. HIGH-CONVERTING CTA BANNER -->
    <section class="py-5" style="padding-bottom: 90px !important;">
        <div class="container">
            <div class="app-cta-card" data-aos="zoom-in">
                <h2>Have a Mobile App Idea? <br>Let's Turn It Into Reality!</h2>
                <p>Speak to our lead mobile app engineers today. Get a free consultation, wireframe concept review, and detailed project cost proposal.</p>
                
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="https://wa.me/919117741984?text=Hi%20Coral%20Web%20Technology,%20I%20want%20to%20start%20my%20mobile%20app%20project." target="_blank" class="btn-glow-primary" style="background: #ffffff; color: #0f172a !important;">
                        <i class="bi bi-whatsapp text-success fs-5"></i> Chat on WhatsApp
                    </a>
                    <a href="tel:+919117741984" class="btn-glow-secondary">
                        <i class="bi bi-telephone-fill"></i> Call +91 91177 41984
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include '../../common/footer.php'; ?>

    <script>
    function filterTech(category, btnElement) {
        document.querySelectorAll('.tech-nav-link').forEach(btn => btn.classList.remove('active'));
        btnElement.classList.add('active');

        const items = document.querySelectorAll('.tech-grid-item');
        items.forEach(item => {
            if (category === 'all') {
                item.style.display = 'block';
            } else if (item.classList.contains('tech-cat-' + category)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    document.getElementById('appInquiryFormQuick')?.addEventListener('submit', function(e) {
        e.preventDefault();
        const inputs = this.querySelectorAll('input, select');
        const name = inputs[0].value;
        const phone = inputs[1].value;
        const category = inputs[2].value;

        const message = `*New Mobile App Project Inquiry*\n\n` +
                        `*Name:* ${name}\n` +
                        `*Phone:* ${phone}\n` +
                        `*App Category:* ${category}\n\n` +
                        `Hello, I would like to get a quote and consultation for my mobile app project.`;

        const encoded = encodeURIComponent(message);
        window.open(`https://wa.me/919117741984?text=${encoded}`, '_blank');
    });
    </script>
</body>
</html>
