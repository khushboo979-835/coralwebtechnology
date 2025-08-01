<style>
    /* Base Header Styling */

    .navbar {
        padding: 1rem 0;
        background-color: transparent;
        transition: all 0.4s ease;
        z-index: 999;
        backdrop-filter: blur(10px);
        position: absolute;
        top: 40px;
        left: 0;
        width: 100%;
    }

    .navbar-shrink {
        position: fixed !important;
        top: 0 !important;
        padding: 0.5rem 0 !important;
        background-color: #fff !important;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
    }

    .navbar,
    .navbar-shrink {
        transition: all 0.4s ease-in-out;
    }


    .navbar .nav-link {
        padding: 0.8rem 1rem;
        color: #fff;
        /* white initially */
        font-weight: 500;
        position: relative;
        transition: color 0.3s ease;
    }

    .navbar-shrink .nav-link {
        color: #333 !important;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link.active {
        color: var(--tertiary-color);
    }

    /* Nav Item Hover Effect */
    /* Nav Item Hover Effect, Excluding Dropdown Toggle */
    .navbar .nav-link:not(.dropdown-toggle) {
        position: relative;
        overflow: hidden;
    }

    .navbar .nav-link:not(.dropdown-toggle)::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0%;
        height: 2px;
        background-color: var(--primary-color);
        /* Tumhara primary-color */
        transition: width 0.3s ease;
    }

    .navbar .nav-link:not(.dropdown-toggle):hover::after,
    .navbar .nav-link:not(.dropdown-toggle).active::after {
        width: 100%;
    }

    .navbar-brand img {
        max-height: 60px;
        transition: all 0.3s ease;
    }

    /* Dropdown Styling */
    .navbar .dropdown-menu {
        background-color: var(--primary-color);
        border-radius: 0px;
        border-top: 2px solid var(--secondary-color);
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        margin-top: 0.5rem;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
    }

    .navbar .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        display: block;
        position: absolute;
        top: 40px;
        left: 0;
    }

    .navbar .dropdown-item {
        padding: 0.6rem 1.2rem;
        color: #333;
        font-size: 1rem;
    }

    .navbar .dropdown-item:hover {
        background-color: var(--tertiary-color);
        color: var(--primary-color);
    }

    /* Offcanvas Styling */
    .offcanvas {
        background-color: #fff;
    }

    .offcanvas .nav-link {
        font-size: 1.1rem;
        padding: 0.6rem 0;
        color: #333;
        font-weight: 500;
    }

    .offcanvas .nav-link:hover {
        color: var(--tertiary-color);
    }

    .offcanvas .collapse .nav-link {
        padding-left: 1.5rem;
    }

    /* Smooth Transition */
    .transition {
        transition: all 0.3s ease;
    }

    .offcanvas .nav-link.toggle::after {
        content: '\25BC';
        /* Down Arrow */
        float: right;
        transition: transform 0.3s ease;
        font-size: 0.8rem;
    }

    .offcanvas .nav-link[aria-expanded="true"]::after {
        transform: rotate(180deg);
        /* Rotate Arrow Up when open */
    }
</style>

<style>
    .top-header {
        font-size: 0.95rem;
        background: var(--secondary-color);
        color: var(--tertiary-color);
    }

    .marquee {
        white-space: nowrap;
        display: inline-block;
        animation: scroll-left 15s linear infinite;
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .offcanvas {
        background: var(--primary-color);
        color: var(--tertiary-color);
    }

    .offcanvas .nav-link {
        color: var(--tertiary-color) !important;
        font-weight: 400;
    }

    .offcanvas .dropdown-item {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 10px 20px;
        margin: 0px 10px;
        font-weight: 400px;
    }

    .offcanvas .dropdown-item:hover {
        background: var(--secondary-color);
        color: var(--primary-color);
    }
</style>
<style>
    .dropdown-menu .dropdown-item {
        color: var(--tertiary-color);
        background-color: var(--primary-color);
        /* padding: 10px 20px; */
        font-size: 15px;
        transition: all 0.3s ease;
        border: none;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        font-weight: 400;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: var(--tertiary-color);
        color: var(--primary-color);
    }

    /* Optional: Remove default Bootstrap border radius if needed */
    .dropdown-menu {
        border-radius: 0;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0px !important;
        left: 189px !important;
        margin-top: 0;
        display: none !important;
        border: none;
        border-top: 2px solid var(--primary-color);
    }

    .dropdown-submenu>.dropdown-menu .dropdown-item {
        color: var(--tertiary-color) !important;
        background-color: var(--primary-color);
        border: none;
        border-top: 2px solid var(--primary-color);
        font-size: 15px;
        transition: all 0.6s ease;
        font-weight: 400;
    }

    .dropdown-submenu>.dropdown-menu .dropdown-item:hover {
        background-color: var(--secondary-color) !important;
        color: var(--primary-color) !important;
    }

    /* webkit scrollbar */
    ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
        background-color: var(--primary-color);
    }

    ::-webkit-scrollbar-thumb {
        background-color: var(--tertiary-color);
        border-radius: 10px;
    }

    /* For hover on desktop */
    @media (min-width: 992px) {
        .dropdown-submenu>.dropdown-menu {
            display: none;
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block !important;
            position: absolute;
        }
    }

    .btn-close {
        background: none;
        font-size: 1.5rem;
    }
    .navbar-toggler{
        border:none;
        transition: all 0.6s ease;
    }
    .navbar-toggler:hover{
        transform: matrix(1.1, 0, 0, 1.1, 0, 0);
        rotate: 360deg;
        transition: all 0.6s ease;
    }
</style>



<div class="top-header py-2 border-bottom">
    <div class="container">
        <div class="row align-items-center justify-content-between text-center ">

            <!-- Center: Scrolling Notification -->
            <div class="col-md-12 position-relative overflow-hidden">
                <div class="marquee  fw-medium">
                    <i class="bi bi-geo-alt text-white"></i> Boring Road Chauraha | <a href="tel:+91987654321"
                        class="text-white text-decoration-none"><i class="bi bi-telephone"></i> +91 987654321</a> | <a
                        href="mail:" class="text-white text-decoration-none"><i class="bi bi-envelope"></i>
                        bablu@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-lg transition" id="mainNavbar">
        <div class="container navbars">
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo $base_url; ?>">
                <img src="<?= $base_url; ?>assets/images/logo/logo.png" alt="skin centre" class="img-fluid"
                    width="80px">
            </a>

            <!-- Toggle for Mobile Offcanvas -->
            <span class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                <span class="bi bi-three-dots"></span>
            </span>

            <!-- Desktop Navbar -->
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?php echo $base_url; ?>">Home</a>
                    </li>

                    <!-- Discover Dropdown -->
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Who We Are
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us.php">
                                    About </a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>client-reviews.php">
                                    Client Reviews</a></li>
                    </li>
                </ul>


                <!-- Services Dropdown -->
                <!-- Services Dropdown with Sub Dropdown -->
                <li class="nav-item dropdown me-4">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                                href="<?php echo $base_url; ?>services/digital-marketing.php">Digital Marketing</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo $base_url; ?>services/seo.php">Seo</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo $base_url; ?>services/paid-adevrtising.php">Paid
                                Advertising</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo $base_url; ?>services/digital-strategy.php">
                                Custom Digital Strategy</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="<?php echo $base_url; ?>services/social-media-marketing.php">Social Media
                                Marketing</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="<?php echo $base_url; ?>services/design-and-development.php">Design &
                                Development</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="<?php echo $base_url; ?>services/content-marketing.php">Content Marketing</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>careers.php">Careers</a>
                </li>

                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>blogs/">Blogs</a>
                </li>

                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>gallery.php">Gallery</a>
                </li>


                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>contact-us.php">Contact</a>
                </li>


                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Mobile Menu -->
    <!-- Offcanvas Mobile Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">
                Corevix Technology
            </h5>
            <span type="button" class="btn-close bi bi-x text-white fs-1" data-bs-dismiss="offcanvas"></span>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>">Home</a>
                </li>

                <!-- Services with Arrow -->
                <li class="nav-item">
                    <a class="nav-link toggle" data-bs-toggle="collapse" href="#aboutCollapse" role="button"
                        aria-expanded="false">
                        Who We Are
                    </a>
                    <div class="collapse" id="aboutCollapse">
                        <ul class="list-unstyled ">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us.php">
                                    About </a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>client-reviews.php">
                                    Client Reviews</a></li>
                        </ul>
                    </div>
                </li>
                <!-- Services in Offcanvas -->
                <li class="nav-item">
                    <a class="nav-link toggle" data-bs-toggle="collapse" href="#servicesCollapse" role="button"
                        aria-expanded="false">
                        Services
                    </a>
                    <div class="collapse" id="servicesCollapse">
                        <ul class="list-unstyled ">

                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/digital-marketing.php">Digital Marketing</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>services/seo.php">Seo</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/paid-adevrtising.php">Paid
                                    Advertising</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?php echo $base_url; ?>services/digital-strategy.php">
                                    Custom Digital Strategy</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/social-media-marketing.php">Social Media
                                    Marketing</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/design-and-development.php">Design &
                                    Development</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/content-marketing.php">Content Marketing</a>
                            </li>



                        </ul>
                    </div>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>careers.php">Careers</a>
                </li>

                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>blogs/">Blogs</a>
                </li>

                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>gallery.php">Gallery</a>
                </li>


                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>contact-us.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<?php include __DIR__ . '/scroll-to-top.php'; ?>
<?php include __DIR__ . '/enquiry.php'; ?>
<?php include __DIR__ . '/chat-bot.php'; ?>



<!-- ================================================================ -->
<script>
    let prevScrollPos = window.pageYOffset;
    const navbar = document.getElementById('mainNavbar');

    window.addEventListener('scroll', () => {
        const currentScrollPos = window.pageYOffset;

        // Shrink and stick to top
        if (currentScrollPos > 50) {
            navbar.classList.add('navbar-shrink');
        } else {
            navbar.classList.remove('navbar-shrink');
        }

        // Optional: Hide on scroll down, show on scroll up
        if (currentScrollPos > prevScrollPos && currentScrollPos > 100) {
            navbar.classList.add('navbar-hidden');
        } else {
            navbar.classList.remove('navbar-hidden');
        }

        prevScrollPos = currentScrollPos;
    });
</script>