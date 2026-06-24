<?php include 'common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- SEO Meta Tags -->
    <title>Website Design Company in India | Web Development Company in Patna & All Major Cities</title>
    <meta name="description" content="Affordable website design company in India providing professional web development services in Patna, Delhi, Mumbai, Bangalore, Chennai, Hyderabad, Pune, Kolkata, Ahmedabad, Jaipur, Noida, Gurgaon, Chandigarh and Kerala. Get SEO-friendly business websites." />
    <meta name="keywords" content="website design company in india, web development company india, web design company in patna, web development company in patna, website development companies in delhi, website design companies in pune, website designing companies in bangalore, website developers in chennai, website developer hyderabad, web design agency india, website design companies in india, web development companies in noida, web designer in mumbai, website development in jaipur, web designer in ahmedabad, web designer in delhi ncr, website builder in kolkata, website design in gurgaon, web design kerala, web development in chandigarh" />
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #2563eb;
            --secondary-blue: #3b82f6;
            --dark-navy: #0b1120;
            --cta-orange: #f97316;
            --cta-orange-hover: #ea580c;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--white);
            color: var(--dark-navy);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }

        /* Navbar - Logo, WhatsApp, Call in ONE LINE */
        .navbar-custom {
            background: white;
            border-bottom: 1px solid #e2e8f0;
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: nowrap;
        }
        .logo img {
            height: 50px;
            width: auto;
        }
        .nav-buttons {
            display: flex;
            gap: 12px;
            align-items: center;
            flex-shrink: 0;
        }
        .btn-wa {
            background: #25d366;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
            white-space: nowrap;
        }
        .btn-wa:hover {
            background: #128c7e;
            color: white;
            transform: translateY(-2px);
        }
        .btn-call {
            background: var(--primary-blue);
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
            white-space: nowrap;
        }
        .btn-call:hover {
            background: #1d4ed8;
            color: white;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .btn-wa, .btn-call {
                padding: 8px 14px;
                font-size: 14px;
            }
            .logo img {
                height: 40px;
            }
        }

        /* Hero Section */
        .hero-section {
            background: radial-gradient(circle at top right, #1e3a8a, #0b1120), 
                        linear-gradient(135deg, #0b1120 0%, #1e40af 100%);
            padding: 40px 0 60px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 30px 30px;
            opacity: 0.3;
        }
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.2;
            letter-spacing: -1px;
        }
        .hero-cities {
            font-size: 1.1rem;
            opacity: 0.75;
            line-height: 1.4;
            max-width: 900px;
            margin: 0 auto 20px;
            font-weight: 500;
        }
        .hero-subtitle {
            font-size: 1.1rem;
            opacity: 0.85;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        .container-custom {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .text-center { text-align: center; }
        .row { display: flex; flex-wrap: wrap; margin: 0 -15px; }
        .col-12 { width: 100%; padding: 0 15px; }
        .col-lg-8 { width: 66.666%; padding: 0 15px; }
        .mx-auto { margin-left: auto; margin-right: auto; }

        /* Portfolio Browser */
        .portfolio-browser {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 20px;
            overflow: hidden;
        }
        .browser-header {
            background: rgba(255,255,255,0.1);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .browser-dot { width: 10px; height: 10px; border-radius: 50%; }
        .dot-red { background: #ff5f56; }
        .dot-yellow { background: #ffbd2e; }
        .dot-green { background: #27c93f; }
        .browser-title {
            font-size: 14px;
            font-weight: 600;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.7;
        }
        .browser-footer {
            background: rgba(255,255,255,0.05);
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        .trust-check {
            width: 20px; height: 20px;
            background: var(--primary-blue);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        /* Swiper */
        .swiper-portfolio { padding: 40px 0 60px; width: 100%; }
        .swiper-slide {
            width: 300px;
            height: 200px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            border: 1px solid rgba(255,255,255,0.1);
            background: #1e293b;
        }
        .slide-inner { position: relative; width: 100%; height: 100%; overflow: hidden; }
        .slide-inner img { width: 100%; height: 100%; object-fit: cover; transition: 0.8s; }
        .slide-inner:hover img { transform: scale(1.1); }
        .slide-caption {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            padding: 30px 20px 20px;
            background: linear-gradient(transparent, rgba(0,0,0,0.9) 80%);
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            transition: 0.4s;
        }
        .swiper-slide-active .slide-caption {
            opacity: 1;
            transform: translateY(0);
        }
        .btn-view-live {
            background: white;
            color: var(--dark-navy);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-view-live:hover { background: var(--cta-orange); color: white; }
        .swiper-button-next, .swiper-button-prev {
            color: white;
            background: rgba(255,255,255,0.1);
            width: 40px; height: 40px;
            border-radius: 50%;
        }
        @media (min-width: 768px) {
            .swiper-slide { width: 450px; height: 300px; }
        }

        /* Form Styling - WORKING */
        .form-container-premium {
            background: white;
            border-radius: 28px;
            padding: 32px 28px;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15);
            margin-top: 30px;
        }
        .form-container-premium h3 { 
            font-size: 1.8rem; 
            margin-bottom: 8px; 
            color: #0f172a;
            font-weight: 800;
        }
        .input-box {
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            border-radius: 14px;
            color: #1e293b;
            padding: 14px 18px;
            width: 100%;
            margin-bottom: 16px;
            font-size: 0.95rem;
        }
        .input-box:focus { 
            border-color: var(--primary-blue); 
            outline: none;
            box-shadow: 0 0 0 4px rgba(37,99,235,0.1);
        }
        select.input-box {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2364748b'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 18px center;
            background-size: 20px;
            cursor: pointer;
        }
        .btn-send-inquiry {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
            border: none;
            padding: 16px 24px;
            border-radius: 14px;
            font-weight: 800;
            font-size: 1rem;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s;
        }
        .btn-send-inquiry:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 8px 25px rgba(37,99,235,0.4);
        }

        /* Rating Section */
        .rating-section {
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
            border-radius: 20px;
            padding: 30px 20px;
            margin: 40px 0;
        }
        .rating-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 700;
            font-size: 1.1rem;
        }
        .rating-item i { font-size: 1.6rem; color: #fbbf24; }

        /* Sections */
        .section-padding { padding: 80px 0; }
        .section-title { text-align: center; margin-bottom: 50px; }
        .section-title h2 { font-size: 2.5rem; margin-bottom: 15px; }
        .section-title p { color: #64748b; }

        .service-box {
            background: white; border-radius: 20px; padding: 40px 30px;
            border: 1px solid #f1f5f9; text-align: center;
            transition: all 0.3s;
        }
        .service-box:hover { transform: translateY(-10px); border-color: var(--primary-blue); }
        .service-icon-wrap {
            width: 70px; height: 70px; background: #eff6ff; color: var(--primary-blue);
            display: flex; align-items: center; justify-content: center;
            font-size: 30px; border-radius: 20px; margin: 0 auto 25px;
        }

        .price-card {
            background: white; border-radius: 24px; padding: 40px;
            border: 1px solid #e2e8f0; transition: 0.3s;
        }
        .price-card.popular { border-color: var(--cta-orange); transform: scale(1.05); }
        .price-amount { font-size: 2.5rem; font-weight: 800; color: var(--primary-blue); }

        .industry-card {
            background: #f8fafc; border-radius: 12px; padding: 20px;
            text-align: center; font-weight: 700; border: 1px solid #e2e8f0;
        }
        .industry-card:hover { background: white; border-color: var(--primary-blue); }

        .why-item { display: flex; align-items: center; gap: 10px; margin-bottom: 15px; font-weight: 600; }
        .why-item i { color: var(--primary-blue); }

        .btn-cta { display: inline-flex; align-items: center; padding: 12px 30px; border-radius: 50px; font-weight: 700; text-decoration: none; gap: 10px; }
        .btn-orange { background: var(--cta-orange); color: white; }
        .btn-outline-white { border: 2px solid white; background: transparent; color: white; }

        .problem-section {
            background: #fefce8;
            border-left: 6px solid #eab308;
            border-radius: 16px;
        }
        .problem-point {
            display: flex;
            align-items: center;
            gap: 10px;
            background: white;
            padding: 12px 20px;
            border-radius: 50px;
        }
        .problem-point i { color: #dc2626; }

        /* Grid System */
        .row { display: flex; flex-wrap: wrap; margin: -15px; }
        .col-md-4, .col-md-6, .col-lg-4, .col-lg-6 { padding: 15px; }
        .col-md-4 { width: 33.333%; }
        .col-md-6 { width: 50%; }
        .col-lg-4 { width: 33.333%; }
        .col-lg-6 { width: 50%; }
        .col-6 { width: 50%; padding: 15px; }
        .col-md-3 { width: 25%; padding: 15px; }
        .g-4 { gap: 16px; }
        .bg-light { background: #f8fafc; }
        .bg-primary { background: var(--primary-blue); }
        .text-white { color: white; }
        .shadow-sm { box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .rounded-4 { border-radius: 16px; }
        .mb-4 { margin-bottom: 20px; }
        .mb-5 { margin-bottom: 30px; }
        .mt-4 { margin-top: 20px; }
        .p-4 { padding: 20px; }
        .fw-bold { font-weight: 700; }
        .text-primary { color: var(--primary-blue); }

        @media (max-width: 768px) {
            .hero-title { font-size: 2rem; }
            .col-md-4, .col-lg-4, .col-md-6, .col-lg-6 { width: 100%; }
            .col-md-3 { width: 50%; }
            .section-padding { padding: 50px 0; }
            .price-card.popular { transform: none; margin: 15px 0; }
        }

        /* Popup Styles */
        #leadPopupOverlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.85); backdrop-filter: blur(8px);
            z-index: 10000; display: none; opacity: 0;
            transition: opacity 0.4s ease;
        }
        #leadPopupOverlay.show { opacity: 1; }
        #leadPopup {
            position: fixed; top: 50%; left: 50%;
            transform: translate(-50%, -50%) scale(0.9);
            width: 90%; max-width: 500px;
            background: white; border-radius: 32px;
            z-index: 10001; display: none; opacity: 0;
            transition: all 0.4s; overflow: hidden;
        }
        #leadPopup.show { opacity: 1; transform: translate(-50%, -50%) scale(1); }
        .popup-header {
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
            padding: 30px 24px 22px; text-align: center; position: relative;
        }
        .popup-badge {
            background: rgba(255,255,255,0.2); color: #fef3c7;
            padding: 5px 14px; border-radius: 50px; font-size: 11px;
            font-weight: 800; display: inline-block; margin-bottom: 12px;
        }
        .popup-header h3 { font-size: 1.8rem; color: white; margin-bottom: 8px; }
        .popup-close {
            position: absolute; top: 16px; right: 16px;
            width: 34px; height: 34px; background: rgba(255,255,255,0.2);
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-size: 20px; cursor: pointer; color: white;
        }
        .popup-close:hover { background: #ef4444; transform: rotate(90deg); }
        .popup-body { padding: 28px 24px 32px; }
        .popup-form .form-group { margin-bottom: 18px; }
        .popup-form label {
            display: block; margin-bottom: 6px; font-weight: 700;
            font-size: 12px; color: #475569; text-transform: uppercase;
        }
        .popup-input {
            border-radius: 14px; padding: 12px 16px;
            border: 1.5px solid #e2e8f0; font-size: 14px;
            width: 100%;
        }
        .popup-input:focus { border-color: #2563eb; outline: none; }
        .popup-btn-submit {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white; border: none; width: 100%; padding: 14px;
            border-radius: 14px; font-weight: 800; cursor: pointer;
        }
        @media (max-width: 576px) {
            #leadPopup { width: 92%; }
            .popup-header h3 { font-size: 1.4rem; }
        }
    </style>
</head>
<body>

    <!-- Navbar - Logo, WhatsApp, Call in ONE LINE -->
    <div class="navbar-custom">
        <div class="nav-container">
            <a href="/" class="logo">
                <img src="<?= $base_url ?>assets/images/logo/logo.png" alt="Coral Web Technology - Website Design Company in India">
            </a>
            <div class="nav-buttons">
                <a href="https://wa.me/919117741984" class="btn-wa" target="_blank">
                    <i class="bi bi-whatsapp"></i> WhatsApp
                </a>
                <a href="tel:+919117741984" class="btn-call">
                    <i class="bi bi-telephone-fill"></i> 91177 41984
                </a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container-custom">
            <div class="text-center">
                <h1 class="hero-title">Website Design Company in India</h1>
                <div class="hero-cities">
                    Patna, Delhi, Mumbai, Bangalore, Chennai, Hyderabad, Pune, Kolkata, Ahmedabad, Jaipur, Noida, Gurgaon, Chandigarh, Kerala
                </div>
                <p class="hero-subtitle">We are a professional website design company in India offering affordable, fast, and SEO-friendly websites that help your business generate more leads and customers.</p>
            </div>
            
            <!-- Portfolio Section FIRST -->
            <div class="portfolio-browser mx-auto" style="max-width: 1000px;">
                <div class="browser-header">
                    <div class="browser-dot dot-red"></div>
                    <div class="browser-dot dot-yellow"></div>
                    <div class="browser-dot dot-green"></div>
                    <div class="browser-title">Live Project Showcase</div>
                </div>
                <div class="swiper swiper-portfolio">
                    <div class="swiper-wrapper">
                        <?php 
                        $projects = [
                            ['url' => 'https://www.lifecarecenter.in/', 'img' => 'lifecarecenter.jpg', 'title' => 'Life Care Center'],
                            ['url' => 'https://swetankfoundation.in/', 'img' => 'swetankfoundation.jpg', 'title' => 'Swetank Foundation'],
                            ['url' => 'https://samajkalyanfoundation.life/', 'img' => 'samajkalyanfoundation.jpg', 'title' => 'Samaj Kalyan Foundation'],
                            ['url' => 'http://theskincentre.in/', 'img' => 'theskincentre.jpg', 'title' => 'The Skin Centre'],
                            ['url' => 'http://gensafe.in/', 'img' => 'gensafe.jpg', 'title' => 'Gensafe Medical'],
                            ['url' => 'https://www.bhagyatech.com/', 'img' => 'bhagyatech.jpg', 'title' => 'Bhagya Tech'],
                            ['url' => 'https://rarefrigeration.in/', 'img' => 'rarefrigeration.jpg', 'title' => 'RA Refrigeration'],
                            ['url' => 'https://annapurnahometuition.in/', 'img' => 'annapurnahometuition.jpg', 'title' => 'Annapurna Tuition'],
                            ['url' => 'https://muskannashamuktikendra.life/', 'img' => 'muskannashamuktikendra.jpg', 'title' => 'Muskan Rehab'],
                            ['url' => 'https://coralwebtechnology.com/', 'img' => 'coralwebtechnology.jpg', 'title' => 'Coral Web Tech'],
                            ['url' => 'https://hansrajenterprises.com/', 'img' => 'hansrajenterprises.jpg', 'title' => 'Hansraj Enterprises'],
                            ['url' => 'https://jansamajsevasansthan.in/', 'img' => 'jansamajsevasansthan.jpg', 'title' => 'Jan Samaj Seva'],
                            ['url' => 'https://sudhaarnashamuktikendra.in/', 'img' => 'sudhaarnashamuktikendra.jpg', 'title' => 'Sudhaar Rehab'],
                            ['url' => 'https://mysterymassage.in/', 'img' => 'mysterymassage.jpg', 'title' => 'Mystery Massage'],
                            ['url' => 'https://attensiletechworks.in/', 'img' => 'attensiletechworks.jpg', 'title' => 'Attensile Tech'],
                            ['url' => 'https://rdelectronics.co/', 'img' => 'rdelectronics.jpg', 'title' => 'RD Electronics']
                        ];
                        foreach($projects as $p): 
                            $local_img = "assets/portfolio/" . $p['img'];
                            $screenshot = "https://s.wordpress.com/mshots/v1/" . urlencode($p['url']) . "?w=600";
                        ?>
                        <div class="swiper-slide">
                            <div class="slide-inner">
                                <img src="<?= $local_img ?>" alt="<?= $p['title'] ?>" loading="lazy" onerror="this.src='<?= $screenshot ?>'">
                                <div class="slide-caption">
                                    <h6 class="text-white mb-2"><?= $p['title'] ?></h6>
                                    <a href="<?= $p['url'] ?>" target="_blank" class="btn-view-live">Explore Live Link <i class="bi bi-box-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="browser-footer">
                    <div class="trust-check"><i class="bi bi-check-lg"></i></div>
                    <span class="trust-text-main">Trusted by 100+ businesses across India</span>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Industries We Serve Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="section-title">
                <h2>Industries We Serve</h2>
                <p>Specialized web design for various business sectors across India</p>
            </div>
            <div class="row">
                <?php $inds = ['Doctors & Clinics', 'Schools & Coaching', 'Builders & Real Estate', 'Restaurants & Hotels', 'Traders / Wholesalers', 'Manufacturers', 'Startups', 'Repair Services']; foreach($inds as $ind): ?>
                <div class="col-6 col-md-3"><div class="industry-card"><?= $ind ?></div></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Trust Bar -->
    <div class="trust-bar" style="background:#f8fafc; padding:20px 0;">
        <div class="container-custom"><div class="trust-text" style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap; font-weight:600;">100+ Projects Delivered | Affordable Packages | Business Focused | India Wide Service</div></div>
    </div>

    <!-- WORKING FORM SECTION - Below Industries -->
    <div class="container-custom" id="quote-form">
        <div class="form-container-premium">
            <div class="text-center mb-4">
                <h3 class="mb-1">Request a Free Quote</h3>
                <p class="text-muted">Get a custom proposal within 24 hours</p>
            </div>
            <form id="mainContactForm">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" id="main_name" class="input-box" placeholder="Full Name *" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" id="main_email" class="input-box" placeholder="Email Address *" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="main_business" class="input-box" placeholder="Business Name">
                    </div>
                    <div class="col-md-6">
                        <select id="main_requirement" class="input-box" required>
                            <option value="" disabled selected>Select Requirement *</option>
                            <option value="Business Website">Business Website</option>
                            <option value="E-commerce Website">E-commerce Website</option>
                            <option value="Doctor/Clinic Website">Doctor/Clinic Website</option>
                            <option value="Coaching/Education Website">Coaching/Education Website</option>
                            <option value="School Website">School Website</option>
                            <option value="Real Estate Website">Real Estate Website</option>
                            <option value="Restaurant/Hotel Website">Restaurant/Hotel Website</option>
                            <option value="Portfolio Website">Portfolio Website</option>
                            <option value="Landing Page">Landing Page</option>
                            <option value="NGO/Trust Website">NGO/Trust Website</option>
                            <option value="Startup Website">Startup Website</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn-send-inquiry">Send Inquiry & Get Quote →</button>
                    </div>
                </div>
                <p class="text-center mt-3 mb-0 text-muted" style="font-size: 11px;">✓ 100% confidential | ✓ Response within 24 hours</p>
            </form>
        </div>
    </div>

    <!-- Problem Section -->
    <section class="section-padding pb-0">
        <div class="container-custom">
            <div class="problem-section p-4 p-md-5 shadow-sm mb-4">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <h2 class="fw-bold mb-3" style="color: #854d0e;">Is Your Business Missing Customers Without a Website?</h2>
                        <p class="text-muted">In today's digital era, a website is your 24/7 representative.</p>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-sm-6"><div class="problem-point"><i class="bi bi-eye-slash-fill"></i> <span>Not visible on Google</span></div></div>
                            <div class="col-sm-6"><div class="problem-point"><i class="bi bi-bar-chart-steps"></i> <span>Competitors get more leads</span></div></div>
                            <div class="col-sm-6"><div class="problem-point"><i class="bi bi-shield-slash-fill"></i> <span>No trust without website</span></div></div>
                            <div class="col-sm-6"><div class="problem-point"><i class="bi bi-chat-left-dots-fill"></i> <span>Missing online enquiries</span></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- About Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="row align-items-center">
                <div class="col-lg-6"><img src="assets/images/banner/web-design.jpg" alt="About Coral Web Technology" class="img-fluid rounded-4 shadow" style="width:100%; border-radius:16px;"></div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <span class="text-primary fw-bold text-uppercase">Welcome to Coral Web Technology</span>
                        <h2 class="mt-2">Professional Web Solutions in India</h2>
                    </div>
                    <p>We are a professional <strong>website design company in India</strong> helping businesses build a strong online presence. As a trusted <strong>web design agency India</strong>, we serve clients across all major cities including <strong>Patna, Delhi, Mumbai, Bangalore, Chennai, Hyderabad, Pune, Kolkata, Ahmedabad, Jaipur, Noida, Gurgaon, Chandigarh and Kerala</strong>.</p>
                    <p class="fw-bold mb-4"><i class="bi bi-geo-alt-fill text-primary"></i> Office: Boring Road, Patna, Bihar, India</p>
                    <div class="row">
                        <div class="col-6"><div class="p-3 border rounded-3 bg-light text-center"><h4 class="mb-0">100+</h4><small>Live Projects</small></div></div>
                        <div class="col-6"><div class="p-3 border rounded-3 bg-light text-center"><h4 class="mb-0">5+</h4><small>Years Exp.</small></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="section-padding bg-light">
        <div class="container-custom">
            <div class="section-title"><h2>Our Professional Services</h2><p>Tailored web design solutions to meet your specific business goals.</p></div>
            <div class="row">
                <div class="col-md-4"><div class="service-box"><div class="service-icon-wrap"><i class="bi bi-briefcase"></i></div><h4>Business Website Design</h4><p>Perfect for doctors, clinics, schools, consultants, restaurants.</p></div></div>
                <div class="col-md-4"><div class="service-box"><div class="service-icon-wrap"><i class="bi bi-cart3"></i></div><h4>E-commerce Website Development</h4><p>Sell products online with payment gateway.</p></div></div>
                <div class="col-md-4"><div class="service-box"><div class="service-icon-wrap"><i class="bi bi-megaphone"></i></div><h4>Coaching / Institute Website</h4><p>For educational institutes and coaching centers.</p></div></div>
                <div class="col-md-4"><div class="service-box"><div class="service-icon-wrap"><i class="bi bi-heart-pulse"></i></div><h4>Doctor / Clinic Website</h4><p>Professional websites for healthcare professionals.</p></div></div>
                <div class="col-md-4"><div class="service-box"><div class="service-icon-wrap"><i class="bi bi-shield-heart"></i></div><h4>Nasha Mukti Kendra Website</h4><p>Trust-building websites for rehab centers.</p></div></div>
                <div class="col-md-4"><div class="service-box"><div class="service-icon-wrap"><i class="bi bi-layout-text-window"></i></div><h4>Landing Page Design</h4><p>High-converting pages for ad campaigns.</p></div></div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Why Coral Web Technology?</h2>
                    <div class="row">
                        <div class="col-sm-6"><div class="why-item"><i class="bi bi-check-circle-fill"></i> Professional Design</div></div>
                        <div class="col-sm-6"><div class="why-item"><i class="bi bi-check-circle-fill"></i> Fast Support</div></div>
                        <div class="col-sm-6"><div class="why-item"><i class="bi bi-check-circle-fill"></i> Mobile Responsive</div></div>
                        <div class="col-sm-6"><div class="why-item"><i class="bi bi-check-circle-fill"></i> WhatsApp Integration</div></div>
                        <div class="col-sm-6"><div class="why-item"><i class="bi bi-check-circle-fill"></i> Inquiry Form Setup</div></div>
                        <div class="col-sm-6"><div class="why-item"><i class="bi bi-check-circle-fill"></i> Google Map Integration</div></div>
                        <div class="col-sm-6"><div class="why-item"><i class="bi bi-check-circle-fill"></i> Affordable Pricing</div></div>
                        <div class="col-sm-6"><div class="why-item"><i class="bi bi-check-circle-fill"></i> Timely Delivery</div></div>
                    </div>
                    <div class="mt-4 p-4 border-start border-4 border-primary bg-light"><p class="mb-0 fw-bold">"We build business growth engines, not just websites."</p></div>
                </div>
                <div class="col-lg-6"><img src="assets/images/banner/website-banner.jpg" alt="Why Choose Us" class="img-fluid rounded-4" style="width:100%; border-radius:16px;"></div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="section-padding bg-light">
        <div class="container-custom">
            <div class="section-title"><h2>Pricing Plans</h2><p>Transparent pricing for every budget. No hidden fees.</p></div>
            <div class="row">
                <div class="col-md-4"><div class="price-card"><div class="price-name" style="font-size:1.2rem; color:#64748b;">Basic</div><div class="price-amount">₹4,999</div><ul class="price-features" style="list-style:none; padding:0;"><li style="padding:8px 0;">✓ 5 Page Website</li><li>✓ Mobile Friendly</li><li>✓ Contact Form</li><li>✓ WhatsApp Button</li></ul><a href="#quote-form" class="btn-cta btn-outline-primary w-100 justify-content-center" style="display:inline-flex; justify-content:center; text-decoration:none; border:2px solid var(--primary-blue); color:var(--primary-blue); border-radius:50px; padding:10px;">Get Started</a></div></div>
                <div class="col-md-4"><div class="price-card popular" style="border:2px solid var(--cta-orange);"><div class="price-name">Standard</div><div class="price-amount">₹9,999</div><ul class="price-features"><li>✓ 10 Page Website</li><li>✓ Premium Design</li><li>✓ Basic SEO Setup</li><li>✓ Speed Optimization</li></ul><a href="#quote-form" class="btn-cta btn-orange w-100 justify-content-center" style="display:inline-flex; justify-content:center; background:var(--cta-orange); color:white; border-radius:50px; padding:10px; text-decoration:none;">Get Started</a></div></div>
                <div class="col-md-4"><div class="price-card"><div class="price-name">Premium</div><div class="price-amount">₹14,999</div><ul class="price-features"><li>✓ Advanced Website</li><li>✓ Lead Generation Setup</li><li>✓ Custom Features</li><li>✓ Priority Support</li></ul><a href="#quote-form" class="btn-cta btn-outline-primary w-100 justify-content-center" style="display:inline-flex; justify-content:center; text-decoration:none; border:2px solid var(--primary-blue); color:var(--primary-blue); border-radius:50px; padding:10px;">Get Started</a></div></div>
            </div>
        </div>
    </section>
     <!-- Rating Section -->
    <div class="container-custom">
        <div class="rating-section">
            <div class="row text-center">
                <div class="col-md-4"><div class="rating-item"><i class="bi bi-star-fill"></i><span>50+ Websites Delivered</span></div></div>
                <div class="col-md-4"><div class="rating-item"><i class="bi bi-calendar-check-fill"></i><span>5+ Years Experience</span></div></div>
                <div class="col-md-4"><div class="rating-item"><i class="bi bi-emoji-smile-fill"></i><span>100% Client Satisfaction</span></div></div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <section class="section-padding">
        <div class="container-custom text-center">
            <h2 class="mb-5">What Our Clients Say</h2>
            <div class="row">
                <div class="col-md-4"><div class="p-4 border rounded-4"><div class="text-warning mb-2">⭐⭐⭐⭐⭐</div><p>"Fast service and good support. Highly recommended."</p></div></div>
                <div class="col-md-4"><div class="p-4 border rounded-4"><div class="text-warning mb-2">⭐⭐⭐⭐⭐</div><p>"Affordable and professional team. Understood our requirements perfectly."</p></div></div>
                <div class="col-md-4"><div class="p-4 border rounded-4"><div class="text-warning mb-2">⭐⭐⭐⭐⭐</div><p>"Started getting inquiries immediately after launch."</p></div></div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-padding bg-primary text-white text-center">
        <div class="container-custom">
            <h2 class="display-5 mb-4">Need a Website for Your Business?</h2>
            <p class="fs-5 mb-5 opacity-75">Get a professional website that helps your business grow and generate inquiries.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="tel:+919117741984" class="btn-cta btn-orange" style="background:var(--cta-orange); color:white; border-radius:50px; padding:12px 30px; text-decoration:none;"><i class="bi bi-telephone-fill"></i> Call: +91 91177 41984</a>
                <a href="https://wa.me/919117741984?text=Hi%2C%20I%20want%20a%20quote%20for%20my%20business%20website." class="btn-cta btn-outline-white" style="border:2px solid white; color:white; border-radius:50px; padding:12px 30px; text-decoration:none;"><i class="bi bi-whatsapp"></i> WhatsApp for Instant Quote</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="section-title"><h2>Frequently Asked Questions</h2></div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAcc">
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden"><h2 class="accordion-header"><button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#f1">How much does a website cost?</button></h2><div id="f1" class="accordion-collapse collapse show"><div class="accordion-body">Packages start from ₹4,999 depending on features and complexity.</div></div></div>
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden"><h2 class="accordion-header"><button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#f2">How many days to complete?</button></h2><div id="f2" class="accordion-collapse collapse"><div class="accordion-body">Usually it takes 5 to 15 working days.</div></div></div>
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden"><h2 class="accordion-header"><button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#f3">Do you provide SEO?</button></h2><div id="f3" class="accordion-collapse collapse"><div class="accordion-body">Yes, we provide SEO-ready websites and advanced SEO setup.</div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- POPUP - Opens on page load -->
    <div id="leadPopupOverlay"></div>
    <div id="leadPopup">
        <div class="popup-header">
            <span class="popup-close" onclick="closeLeadPopup()">&times;</span>
            <div class="popup-badge">✨ Limited Time Offer ✨</div>
            <h3>Get Professional Website</h3>
            <p>Grow your business with a high-converting website</p>
        </div>
        <div class="popup-body">
            <form class="popup-form" id="leadFormPopup">
                <div class="form-group">
                    <label>Full Name *</label>
                    <input type="text" id="p_name" class="popup-input" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label>Phone Number *</label>
                    <input type="tel" id="p_phone" class="popup-input" placeholder="Enter your mobile number" required>
                </div>
                <div class="form-group">
                    <label>Business Name</label>
                    <input type="text" id="p_business" class="popup-input" placeholder="Your business name">
                </div>
                <div class="form-group">
                    <label>Service Required *</label>
                    <select id="p_service" class="popup-input" required>
                                                    <option value="" disabled selected>Select Requirement *</option>
                            <option value="Business Website">Business Website</option>
                            <option value="E-commerce Website">E-commerce Website</option>
                            <option value="Doctor/Clinic Website">Doctor/Clinic Website</option>
                            <option value="Coaching/Education Website">Coaching/Education Website</option>
                            <option value="School Website">School Website</option>
                            <option value="Real Estate Website">Real Estate Website</option>
                            <option value="Restaurant/Hotel Website">Restaurant/Hotel Website</option>
                            <option value="Portfolio Website">Portfolio Website</option>
                            <option value="Landing Page">Landing Page</option>
                            <option value="NGO/Trust Website">NGO/Trust Website</option>
                            <option value="Startup Website">Startup Website</option>

                    </select>
                </div>
                <button type="submit" class="popup-btn-submit">Get Free Consultation →</button>
                <div class="popup-footer-note" style="text-align:center; font-size:11px; color:#94a3b8; margin-top:16px;">No spam. Response within 10 minutes.</div>
            </form>
        </div>
    </div>

    <!-- Dynamic We Serve Across India Section -->
    <?php $service_key = 'website-development'; if (function_exists('renderServiceLocationsSection')) { renderServiceLocationsSection($service_key, $base_url); } ?>
    <?php include 'common/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Initialize Swiper
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-portfolio', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                loop: true,
                autoplay: { delay: 3500, disableOnInteraction: false },
                coverflowEffect: { rotate: 20, stretch: 0, depth: 100, modifier: 1, slideShadows: false },
                navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
            });
        });

        // WhatsApp Number
        const WA_NUMBER = '919117741984';

        // Function to send data to WhatsApp
        function sendToWhatsApp(name, phone, email, business, requirement, source) {
            let msg = `*New Website Inquiry from ${source}*%0A%0A`;
            msg += `*Name:* ${name}%0A`;
            msg += `*Phone:* ${phone}%0A`;
            msg += `*Email:* ${email || 'Not provided'}%0A`;
            msg += `*Business:* ${business || 'Not provided'}%0A`;
            msg += `*Requirement:* ${requirement}%0A%0A`;
            msg += `Hello, I am interested in your website services. Please contact me.`;
            return `https://wa.me/${WA_NUMBER}?text=${msg}`;
        }

        // MAIN FORM SUBMISSION - Working perfectly
        const mainForm = document.getElementById('mainContactForm');
        if (mainForm) {
            mainForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const name = document.getElementById('main_name').value;
                const email = document.getElementById('main_email').value;
                const business = document.getElementById('main_business').value;
                const requirement = document.getElementById('main_requirement').value;
                
                if (!name || !email || !requirement) {
                    alert('Please fill all required fields.');
                    return;
                }
                
                const waUrl = sendToWhatsApp(name, document.getElementById('main_phone')?.value || 'Not provided', email, business, requirement, 'Main Form');
                window.open(waUrl, '_blank');
                alert('Thank you! You will be redirected to WhatsApp to complete your inquiry.');
                this.reset();
            });
        }

        // POPUP FORM SUBMISSION
        const popupForm = document.getElementById('leadFormPopup');
        if (popupForm) {
            popupForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const name = document.getElementById('p_name').value;
                const phone = document.getElementById('p_phone').value;
                const business = document.getElementById('p_business').value;
                const service = document.getElementById('p_service').value;
                
                if (!name || !phone) {
                    alert('Please fill Name and Phone Number.');
                    return;
                }
                
                let msg = `*New Website Inquiry from Popup*%0A%0A`;
                msg += `*Name:* ${name}%0A`;
                msg += `*Phone:* ${phone}%0A`;
                msg += `*Business:* ${business || 'Not provided'}%0A`;
                msg += `*Service:* ${service}%0A%0A`;
                msg += `Hello, I am interested in your website services. Please contact me.`;
                
                const waUrl = `https://wa.me/${WA_NUMBER}?text=${msg}`;
                window.open(waUrl, '_blank');
                closeLeadPopup();
                this.reset();
            });
        }

        // POPUP LOGIC - Opens immediately on page load
        function openLeadPopup() {
            const overlay = document.getElementById('leadPopupOverlay');
            const popup = document.getElementById('leadPopup');
            if(!overlay || !popup) return;
            overlay.style.display = 'block';
            popup.style.display = 'block';
            setTimeout(() => {
                overlay.classList.add('show');
                popup.classList.add('show');
            }, 50);
        }

        function closeLeadPopup() {
            const overlay = document.getElementById('leadPopupOverlay');
            const popup = document.getElementById('leadPopup');
            overlay.classList.remove('show');
            popup.classList.remove('show');
            setTimeout(() => {
                overlay.style.display = 'none';
                popup.style.display = 'none';
            }, 200);
        }

        // Open popup immediately when page loads
        window.addEventListener('load', function() {
            setTimeout(function() {
                openLeadPopup();
            }, 1000);
        });

        // Close popup when clicking outside
        const overlay = document.getElementById('leadPopupOverlay');
        if (overlay) {
            overlay.addEventListener('click', closeLeadPopup);
        }
    </script>
    
    <div style="display: none;" aria-hidden="true">
        We provide website design services across India including Patna, Delhi, Mumbai, Bangalore, Chennai, Hyderabad, Pune, Kolkata, Ahmedabad, Jaipur, Noida, Gurgaon, Chandigarh and Kerala. As a leading web development company in Patna and web design agency India, we deliver quality websites nationwide.
    </div>
</body>
</html>
