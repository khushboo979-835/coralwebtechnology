<?php
// Avoid duplicate noscript tag on the main homepage where it is already hardcoded immediately after body
$is_main_index = false;
if (isset($_SERVER['SCRIPT_NAME'])) {
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
    if (preg_match('/\/index\.php$/', $script)) {
        $script_dir = dirname($script);
        $base_path_parsed = isset($base_url) ? parse_url($base_url, PHP_URL_PATH) : '/';
        if (empty($base_path_parsed)) {
            $base_path_parsed = '/';
        }
        if (rtrim($script_dir, '/') === rtrim($base_path_parsed, '/')) {
            $is_main_index = true;
        }
    }
}
if (!$is_main_index):
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBMSZ2NP"
height="0" width="0" style="display:none;visibility:hidden" title="Google Tag Manager"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
    :root {
        --primary-coral: #ff4d4d;
        --dark-shade: #1a1a1a;
        --light-gray: #f8f9fa;
        --text-color: #333;
        --font-main: 'Montserrat', sans-serif;
    }
    body { font-family: var(--font-main); }
    /* Classy Header */
    .navbar {
        background: #ffffff !important;
        padding: 15px 0;
        transition: all 0.4s ease;
        border-bottom: 1px solid rgba(0,0,0,0.06);
        box-shadow: 0 2px 15px rgba(0,0,0,0.04);
        z-index: 1050;
    }
    .navbar-shrink {
        padding: 10px 0 !important;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        background: rgba(255, 255, 255, 0.98) !important;
    }
    /* Elegant Nav Links */
    .navbar .nav-link {
        color: var(--dark-shade) !important;
        font-weight: 600;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 10px 15px !important;
        transition: all 0.3s ease;
        position: relative;
    }
    .navbar .nav-link:hover { color: var(--primary-coral) !important; }
    /* Standard Dropdown Styling */
    .dropdown-menu {
        border: none;
        border-radius: 10px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        padding: 15px 0;
        margin-top: 10px !important;
        opacity: 0;
        transform: translateY(15px);
        display: block !important;
        visibility: hidden;
        transition: all 0.3s ease;
        border-top: 3px solid var(--primary-coral);
    }
    .nav-item.dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .dropdown-item {
        padding: 8px 25px;
        font-weight: 500;
        color: #555;
        font-size: 14px;
        transition: all 0.2s ease;
    }
    .dropdown-item:hover {
        background: #fff5f5;
        color: var(--primary-coral);
        padding-left: 30px;
    }
    /* Professional Mega Menu for Courses */
    .courses-mega {
        min-width: 380px !important;
        max-height: 500px;
        overflow-y: auto;
        padding: 10px 0;
    }
    /* Custom Scrollbar for Mega Menu */
    .courses-mega::-webkit-scrollbar {
        width: 6px;
    }
    .courses-mega::-webkit-scrollbar-track {
        background: #f1f1f1; 
        border-radius: 10px;
    }
    .courses-mega::-webkit-scrollbar-thumb {
        background: #ccc; 
        border-radius: 10px;
    }
    .courses-mega::-webkit-scrollbar-thumb:hover {
        background: #aaa; 
    }
    .mega-menu-item {
        display: flex;
        align-items: flex-start;
        padding: 12px 25px;
        gap: 15px;
        text-decoration: none;
        transition: all 0.2s ease;
        border-bottom: 1px solid #f8f9fa;
        background: transparent;
    }
    .mega-menu-item:last-child {
        border-bottom: none;
    }
    .mega-menu-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }
    .mega-menu-content {
        flex-grow: 1;
    }
    .mega-menu-content strong {
        display: block;
        color: var(--dark-shade);
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 3px;
        transition: color 0.2s ease;
    }
    .mega-menu-content small {
        color: #777;
        font-size: 12px;
        line-height: 1.3;
        display: block;
        transition: color 0.2s ease;
    }
    .mega-menu-item:hover {
        background: #fff5f5;
        padding-left: 32px;
    }
    .mega-menu-item:hover .mega-menu-content strong {
        color: var(--primary-coral);
    }
    .mega-menu-item:hover .mega-menu-icon {
        transform: scale(1.1);
    }
    /* Submenu for Digital Marketing */
    .dropdown-submenu { position: relative; }
    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    .dropdown-submenu:hover > .dropdown-menu {
        visibility: visible;
        opacity: 1;
        display: block !important;
    }
    /* ANIMATED GLOWING BUTTONS */
    .btn-pro {
        padding: 12px 25px;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
        border-radius: 4px;
        letter-spacing: 1px;
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
        border: none;
        display: inline-block;
        text-align: center;
        z-index: 1;
        text-decoration: none;
    }
    /* Call Now Button - Outline Style with Glow */
    .btn-call-pro {
        background: transparent;
        color: var(--primary-coral) !important;
        border: 2px solid var(--primary-coral) !important;
        margin-right: 15px;
    }
    .btn-call-pro:hover {
        background: var(--primary-coral);
        color: #fff !important;
        box-shadow: 0 0 20px rgba(255, 77, 77, 0.6);
    }
    /* Book Slot Button - Solid Style with Glow */
    .btn-book-pro {
        background: var(--primary-coral);
        color: #fff !important;
        box-shadow: 0 4px 15px rgba(255, 77, 77, 0.3);
    }
    .btn-book-pro:hover {
        box-shadow: 0 0 25px rgba(255, 77, 77, 0.8);
        transform: translateY(-2px);
    }
    /* Shimmer Effect Animation */
    .btn-pro::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -100%;
        width: 50%;
        height: 200%;
        background: linear-gradient(to right, transparent, rgba(255,255,255,0.3), transparent);
        transform: rotate(30deg);
        transition: none;
    }
    .btn-pro:hover::after {
        left: 150%;
        transition: all 0.7s ease;
    }
    /* Top Bar */
    .top-bar {
        background: #111;
        color: #ddd;
        padding: 8px 0;
        font-size: 13px;
    }
    .top-bar i { color: var(--primary-coral); }
    /* --- MOBILE SPECIFIC STYLES FOR CLINIC DESIGN --- */
    .mobile-action-bar { display: none; }
    .nav-center-cta { display: none; }
    @media (max-width: 991px) {
        /* Hide regular desktop logo if using mobile layout */
        .desktop-logo { display: none !important; }
        .navbar-container {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
        }
        .nav-center-cta {
            display: block;
            flex-grow: 1;
            text-align: center;
        }
        .btn-book-mobile {
            padding: 8px 20px;
            font-size: 13px;
            border-radius: 50px;
            background: var(--primary-coral);
            color: #fff !important;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(255, 77, 77, 0.3);
            display: inline-block;
        }
        /* Full width action bar for WhatsApp and Call Now */
        .mobile-action-bar {
            background: #fff;
            padding: 10px 15px;
            display: flex;
            gap: 10px;
            border-bottom: 2px solid #eee;
            width: 100%;
        }
        .mobile-action-btn {
            flex: 1;
            padding: 12px 0;
            text-align: center;
            border-radius: 50px;
            font-weight: 700;
            font-size: 15px;
            color: #fff !important;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .btn-whatsapp-mob { background: linear-gradient(45deg, #25D366, #128C7E); }
        .btn-call-mob { background: linear-gradient(45deg, #007bff, #0056b3); }
        
        .btn-pro {
            width: 100%;
            text-align: center;
            margin-right: 0 !important;
            margin-bottom: 10px;
        }
    }
    /* Professional Hamburger Toggle */
    .custom-toggler {
        width: 32px;
        height: 24px;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background: transparent;
        border: none;
        padding: 0;
        cursor: pointer;
    }
    .custom-toggler:focus { outline: none; }
    .custom-toggler span {
        display: block;
        width: 100%;
        height: 3px;
        background: var(--dark-shade);
        border-radius: 4px;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }
    .custom-toggler span:nth-child(2) { width: 75%; align-self: flex-end; }
    .custom-toggler:active span, .custom-toggler:hover span { width: 100%; background: var(--primary-coral); }
    /* Stunning 3D Glossy Base Button */
    .btn-glass-3d {
        border: none !important;
        border-radius: 50px !important;
        color: #fff !important;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        position: relative;
        overflow: hidden;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        z-index: 1;
        text-decoration: none;
    }
    .btn-glass-3d .btn-text-content {
        position: relative;
        z-index: 5;
    }
    /* Proper Glowing Light Shimmer Sweeping Across */
    .btn-glass-3d::before {
        content: '';
        position: absolute;
        top: 0; left: -100%; width: 50%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.8), transparent);
        transform: skewX(-20deg);
        z-index: 2;
        animation: glassShimmer 2.5s infinite;
    }
    @keyframes glassShimmer {
        0% { left: -100%; }
        20% { left: 200%; }
        100% { left: 200%; }
    }
    /* Theme: Book (Purple) */
    .btn-glossy-purple {
        background: linear-gradient(135deg, #a73cff, #5e00b8) !important;
        box-shadow: 0 8px 15px -3px rgba(94, 0, 184, 0.6), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4) !important;
        animation: purplePulse 2s infinite ease-in-out;
        padding: 8px 24px;
    }
    @keyframes purplePulse {
        0% { box-shadow: 0 8px 15px -3px rgba(94, 0, 184, 0.6), 0 0 0 0 rgba(167, 60, 255, 0.6), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4); }
        70% { box-shadow: 0 8px 15px -3px rgba(94, 0, 184, 0.6), 0 0 0 12px rgba(167, 60, 255, 0), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4); }
        100% { box-shadow: 0 8px 15px -3px rgba(94, 0, 184, 0.6), 0 0 0 0 rgba(167, 60, 255, 0), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4); }
    }
    /* Theme: WhatsApp (Green) */
    .btn-glossy-green {
        background: linear-gradient(135deg, #2ecc71, #1e8449) !important;
        box-shadow: 0 8px 15px -3px rgba(30, 132, 73, 0.6), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4) !important;
        animation: greenPulse 2s infinite ease-in-out;
        animation-delay: 0.3s;
    }
    @keyframes greenPulse {
        0% { box-shadow: 0 8px 15px -3px rgba(30, 132, 73, 0.6), 0 0 0 0 rgba(46, 204, 113, 0.6), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4); }
        70% { box-shadow: 0 8px 15px -3px rgba(30, 132, 73, 0.6), 0 0 0 12px rgba(46, 204, 113, 0), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4); }
        100% { box-shadow: 0 8px 15px -3px rgba(30, 132, 73, 0.6), 0 0 0 0 rgba(46, 204, 113, 0), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4); }
    }
    /* Theme: Call (Blue) */
    .btn-glossy-blue {
        background: linear-gradient(135deg, #3498db, #1f618d) !important;
        box-shadow: 0 8px 15px -3px rgba(31, 97, 141, 0.6), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4) !important;
        animation: bluePulse 2s infinite ease-in-out;
        animation-delay: 0.6s;
    }
    @keyframes bluePulse {
        0% { box-shadow: 0 8px 15px -3px rgba(31, 97, 141, 0.6), 0 0 0 0 rgba(52, 152, 219, 0.6), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4); }
        70% { box-shadow: 0 8px 15px -3px rgba(31, 97, 141, 0.6), 0 0 0 12px rgba(52, 152, 219, 0), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4); }
        100% { box-shadow: 0 8px 15px -3px rgba(31, 97, 141, 0.6), 0 0 0 0 rgba(52, 152, 219, 0), inset 0 4px 5px -2px rgba(255, 255, 255, 0.8), inset 0 -4px 5px -2px rgba(0, 0, 0, 0.4); }
    }
    /* Floating Static WhatsApp Button */
    .floating-whatsapp {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #25D366, #128C7E);
        color: #fff !important;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
        z-index: 9999;
        text-decoration: none;
        animation: floatPulseBtn 2s infinite ease-in-out;
    }
    .floating-whatsapp i {
        /* Vibrate Animation */
        animation: vibrateRinging 2s infinite ease-in-out;
    }
    @keyframes floatPulseBtn {
        0% { box-shadow: 0 4px 15px rgba(37, 211, 102, 0.6), 0 0 0 0 rgba(37, 211, 102, 0.5); }
        70% { box-shadow: 0 4px 15px rgba(37, 211, 102, 0.6), 0 0 0 15px rgba(37, 211, 102, 0); }
        100% { box-shadow: 0 4px 15px rgba(37, 211, 102, 0.6), 0 0 0 0 rgba(37, 211, 102, 0); }
    }
    @keyframes vibrateRinging {
        0%, 10% { transform: rotate(0) scale(1); }
        15% { transform: rotate(15deg) scale(1.1); }
        20% { transform: rotate(-15deg) scale(1.1); }
        25% { transform: rotate(15deg) scale(1.1); }
        30% { transform: rotate(-15deg) scale(1.1); }
        35% { transform: rotate(0) scale(1); }
        100% { transform: rotate(0) scale(1); }
    }
    /* Offcanvas */
    .offcanvas { background: #fff; }
    .offcanvas-header { border-bottom: 1px solid #eee; }
    .offcanvas .nav-link {
        font-size: 16px;
        color: var(--dark-shade) !important;
        padding: 12px 0 !important;
        border-bottom: 1px solid #f5f5f5;
        font-weight: 600;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<header style="position: sticky; top: 0; z-index: 1050; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
    <!-- Top Bar Information -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center text-md-start">
                    <span class="me-4"><i class="bi bi-geo-alt me-2"></i> Boring Road, Patna, Bihar - 801503</span>
                    <span class="me-4"><i class="bi bi-telephone me-2"></i> +91 9117741984</span>
                    <span><i class="bi bi-envelope me-2"></i> coralwebtechnology@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg" id="mainNavbar">
        <div class="container-fluid">
            
            <!-- Mobile Flex Container for 3-Column Layout -->
            <div class="d-flex w-100 justify-content-between align-items-center d-lg-none">
                <!-- Left: Logo -->
                <a class="navbar-brand m-0" href="<?php echo $base_url; ?>">
                    <img src="<?= $base_url; ?>assets/images/logo/logo.png" alt="Coral" width="60">
                </a>
                <!-- Center: Book Slot Button -->
                <div class="nav-center-cta">
                    <a href="<?= $base_url ?>schedule-meeting.php" class="btn-glass-3d btn-glossy-purple">
                        <span class="btn-text-content"><i class="bi bi-calendar-check"></i> Book NOW</span>
                    </a>
                </div>
                <!-- Right: Hamburger Menu Toggle -->
                <button class="custom-toggler shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <!-- Desktop Logo -->
            <a class="navbar-brand desktop-logo" href="<?php echo $base_url; ?>">
                <img src="<?= $base_url; ?>assets/images/logo/logo.png" alt="Coral" width="70">
            </a>
            <!-- Desktop Menu -->
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>">Home</a></li>
                    
                    <!-- ABOUT (Restored Content) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us.php">About Us</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>client-reviews.php">Client Reviews</a></li>
                        </ul>
                    </li>
                    <!-- SERVICES (Updated Menu) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/software-development.php">Software Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/mobile-app-development/">Mobile App Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/android-app-development/">Android App Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/ios-app-development/">iOS App Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/website-designing/">Website Designing</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/website-development/">Website Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/wordpress-development/">WordPress Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/ecommerce-development/">E-Commerce Website Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/shopify-development/">Shopify Website Development</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/digital-marketing/">Digital Marketing</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/seo-service/">SEO Service</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/social-media-marketing/">Social Media Marketing</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/ppc-marketing/">PPC Marketing</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/google-ads/">Google Ads</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/facebook-instagram-ads/">Facebook & Instagram Ads</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/youtube-ads/">YouTube Ads</a></li>
                        </ul>
                    </li>
                    <!-- COURSES (Upgraded to Professional Mega Menu) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">Courses</a>
                        <!-- The Professional Mega Menu Structure -->
                        <div class="dropdown-menu courses-mega p-0">
                            <a class="mega-menu-item" href="<?php echo $base_url; ?>ppc-google-ads-course.php">
                                <div class="mega-menu-icon" style="background:#fff0f0; color:#e02424;"><i class="bi bi-google"></i></div>
                                <div class="mega-menu-content">
                                    <strong>PPC (Google Ads)</strong>
                                    <small>Master search and display ad campaigns</small>
                                </div>
                            </a>
                            <a class="mega-menu-item" href="<?php echo $base_url; ?>meta-ads-facebook-ads-course.php">
                                <div class="mega-menu-icon" style="background:#eaf2ff; color:#1877F2;"><i class="bi bi-facebook"></i></div>
                                <div class="mega-menu-content">
                                    <strong>Meta Ads (Facebook Ads)</strong>
                                    <small>Expert social media advertising strategies</small>
                                </div>
                            </a>
                            <a class="mega-menu-item" href="<?php echo $base_url; ?>digital-marketing-with-ai-course.php">
                                <div class="mega-menu-icon" style="background:#f0eafa; color:#8e44ad;"><i class="bi bi-robot"></i></div>
                                <div class="mega-menu-content">
                                    <strong>Digital Marketing with AI</strong>
                                    <small>Future-proof your skills using AI tools</small>
                                </div>
                            </a>
                            <a class="mega-menu-item" href="<?php echo $base_url; ?>data-analytics-course.php">
                                <div class="mega-menu-icon" style="background:#fff6e5; color:#f39c12;"><i class="bi bi-bar-chart-fill"></i></div>
                                <div class="mega-menu-content">
                                    <strong>Data Analytics</strong>
                                    <small>Learn actionable insights and reporting</small>
                                </div>
                            </a>
                            <a class="mega-menu-item" href="<?php echo $base_url; ?>website-development-course.php">
                                <div class="mega-menu-icon" style="background:#eafaf1; color:#2ecc71;"><i class="bi bi-code-slash"></i></div>
                                <div class="mega-menu-content">
                                    <strong>Website Development</strong>
                                    <small>Full-stack web development basics</small>
                                </div>
                            </a>
                            <a class="mega-menu-item" href="<?php echo $base_url; ?>wordpress-website-design-course.php">
                                <div class="mega-menu-icon" style="background:#eef6fc; color:#2980b9;"><i class="bi bi-wordpress"></i></div>
                                <div class="mega-menu-content">
                                    <strong>WordPress Website Design</strong>
                                    <small>Build professional CMS sites efficiently</small>
                                </div>
                            </a>
                            <a class="mega-menu-item" href="<?php echo $base_url; ?>data-science-course.php">
                                <div class="mega-menu-icon" style="background:#f9ebea; color:#c0392b;"><i class="bi bi-cpu"></i></div>
                                <div class="mega-menu-content">
                                    <strong>Data Science</strong>
                                    <small>Advanced machine learning and statistics</small>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>portfolio.php">Our Work</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>careers.php">Careers</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>blogs/">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>contact-us.php">Contact</a></li>
                    <!-- ACTION BUTTONS WITH GLOW -->
                    <li class="nav-item ms-lg-3 d-flex align-items-center gap-2">
                        <a href="tel:+919117741984" class="btn-pro btn-call-pro" id="call-now-btn">Call Now</a>
                        <a href="<?= $base_url ?>schedule-meeting.php" class="btn-pro btn-book-pro" id="book-btn-header">Book Slot</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Important Section Below Header: Mobile Action Bar -->
    <div class="mobile-action-bar">
        <a href="https://wa.me/919117741984" class="mobile-action-btn btn-glass-3d btn-glossy-green" id="whatsapp-btn-mobile-bar">
            <span class="btn-text-content"><i class="bi bi-whatsapp"></i> WhatsApp</span>
        </a>
        <a href="tel:+91 8102549601" class="mobile-action-btn btn-glass-3d btn-glossy-blue" id="call-btn-mobile-bar">
            <span class="btn-text-content"><i class="bi bi-telephone"></i> 8102549601</span>
        </a>
    </div>
    <!-- Mobile Offcanvas (Restored) -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">
        <div class="offcanvas-header bg-light">
            <h5 class="fw-bold m-0">CORAL WEB TECHNOLOGY</h5>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>">Home</a></li>
                
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" href="#mobAbout">About <i class="bi bi-chevron-down mt-1 fs-6"></i></a>
                    <div class="collapse" id="mobAbout">
                        <ul class="list-unstyled ps-3 pb-2">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us.php">About Us</a></li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>client-reviews.php">Client Reviews</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" href="#mobSer">Services <i class="bi bi-chevron-down mt-1 fs-6"></i></a>
                    <div class="collapse" id="mobSer">
                        <ul class="list-unstyled ps-3 pb-2">
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/software-development.php">Software Development</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/mobile-app-development/">Mobile App Development</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/android-app-development/">Android App Development</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/ios-app-development/">iOS App Development</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/website-designing/">Website Designing</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/website-development/">Website Development</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/wordpress-development/">WordPress Development</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/ecommerce-development/">E-Commerce Website Development</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/shopify-development/">Shopify Website Development</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/digital-marketing/">Digital Marketing</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/seo-service/">SEO Service</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/social-media-marketing/">Social Media Marketing</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/ppc-marketing/">PPC Marketing</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/google-ads/">Google Ads</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/facebook-instagram-ads/">Facebook & Instagram Ads</a></li>
                            <li><a class="dropdown-item py-2" href="<?php echo $base_url; ?>services/youtube-ads/">YouTube Ads</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-toggle="collapse" href="#mobCourse">Courses <i class="bi bi-chevron-down mt-1 fs-6"></i></a>
                    <div class="collapse" id="mobCourse">
                        <div class="pb-2">
                            <a class="mega-menu-item px-3 py-2" href="<?php echo $base_url; ?>ppc-google-ads-course.php">
                                <div class="mega-menu-icon" style="background:#fff0f0; color:#e02424; width: 32px; height: 32px; font-size: 16px;"><i class="bi bi-google"></i></div>
                                <div class="mega-menu-content d-flex align-items-center">
                                    <strong style="font-size: 13px; margin: 0;">PPC (Google Ads)</strong>
                                </div>
                            </a>
                            <a class="mega-menu-item px-3 py-2" href="<?php echo $base_url; ?>meta-ads-facebook-ads-course.php">
                                <div class="mega-menu-icon" style="background:#eaf2ff; color:#1877F2; width: 32px; height: 32px; font-size: 16px;"><i class="bi bi-facebook"></i></div>
                                <div class="mega-menu-content d-flex align-items-center">
                                    <strong style="font-size: 13px; margin: 0;">Meta Ads (Facebook Ads)</strong>
                                </div>
                            </a>
                            <a class="mega-menu-item px-3 py-2" href="<?php echo $base_url; ?>digital-marketing-with-ai-course.php">
                                <div class="mega-menu-icon" style="background:#f0eafa; color:#8e44ad; width: 32px; height: 32px; font-size: 16px;"><i class="bi bi-robot"></i></div>
                                <div class="mega-menu-content d-flex align-items-center">
                                    <strong style="font-size: 13px; margin: 0;">Digital Marketing with AI</strong>
                                </div>
                            </a>
                            <a class="mega-menu-item px-3 py-2" href="<?php echo $base_url; ?>data-analytics-course.php">
                                <div class="mega-menu-icon" style="background:#fff6e5; color:#f39c12; width: 32px; height: 32px; font-size: 16px;"><i class="bi bi-bar-chart-fill"></i></div>
                                <div class="mega-menu-content d-flex align-items-center">
                                    <strong style="font-size: 13px; margin: 0;">Data Analytics</strong>
                                </div>
                            </a>
                            <a class="mega-menu-item px-3 py-2" href="<?php echo $base_url; ?>website-development-course.php">
                                <div class="mega-menu-icon" style="background:#eafaf1; color:#2ecc71; width: 32px; height: 32px; font-size: 16px;"><i class="bi bi-code-slash"></i></div>
                                <div class="mega-menu-content d-flex align-items-center">
                                    <strong style="font-size: 13px; margin: 0;">Website Development</strong>
                                </div>
                            </a>
                            <a class="mega-menu-item px-3 py-2" href="<?php echo $base_url; ?>wordpress-website-design-course.php">
                                <div class="mega-menu-icon" style="background:#eef6fc; color:#2980b9; width: 32px; height: 32px; font-size: 16px;"><i class="bi bi-wordpress"></i></div>
                                <div class="mega-menu-content d-flex align-items-center">
                                    <strong style="font-size: 13px; margin: 0;">WordPress Website Design</strong>
                                </div>
                            </a>
                            <a class="mega-menu-item px-3 py-2" href="<?php echo $base_url; ?>data-science-course.php">
                                <div class="mega-menu-icon" style="background:#f9ebea; color:#c0392b; width: 32px; height: 32px; font-size: 16px;"><i class="bi bi-cpu"></i></div>
                                <div class="mega-menu-content d-flex align-items-center">
                                    <strong style="font-size: 13px; margin: 0;">Data Science</strong>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>portfolio.php">Our Work</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>careers.php">Careers</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>blogs/">Blogs</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>contact-us.php">Contact</a></li>
                <!-- Mobile Offcanvas Action Buttons -->
                <li class="mt-5 text-center">
                    <a href="tel:+919117741984" class="btn btn-pro btn-call-pro w-100 mb-3" id="call-btn-mobile-menu">CALL NOW</a>
                    <a href="<?= $base_url ?>schedule-meeting.php" class="btn btn-pro btn-book-pro w-100" id="book-btn-mobile-menu">BOOK SLOT</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Floating Static WhatsApp Button -->
    <a href="https://wa.me/919117741984" class="floating-whatsapp" target="_blank" id="whatsapp-btn" aria-label="Chat on WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>
</header>
<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('mainNavbar');
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-shrink');
        } else {
            navbar.classList.remove('navbar-shrink');
        }
    });
</script>