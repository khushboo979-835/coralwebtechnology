<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <!-- ======================================== -->
    <style>
        .development-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/development-banner.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 130px 0;
        }

        .development-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .development-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .development-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .development-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="development-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Website Design & Development</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Website Design & Development</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Website Design & Development Overview -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/design-development/1.avif"
                        alt="Website Design & Development Overview" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Website Design & Development</h3>
                    <p>We design and develop high-performing, user-friendly websites that not only look stunning but
                        also drive real business results. Whether you need a portfolio, corporate site, or an eCommerce
                        platform, we’ve got you covered.</p>
                    <ul>
                        <li class="list-group-item">Custom UI/UX design</li>
                        <li class="list-group-item">Responsive and mobile-friendly layouts</li>
                        <li class="list-group-item">Fast-loading and SEO-ready code</li>
                        <li class="list-group-item">Conversion-focused design elements</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: UI/UX Design -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/design-development/2.jpg" alt="UI/UX Design"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">UI/UX Design</h3>
                    <p>We create intuitive, visually appealing interfaces that enhance user engagement and ensure
                        seamless navigation across all devices.</p>
                    <ul>
                        <li class="list-group-item">Wireframing & prototyping</li>
                        <li class="list-group-item">Mobile-first design approach</li>
                        <li class="list-group-item">Interactive user journeys</li>
                        <li class="list-group-item">Brand-consistent visuals</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Website Development -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/design-development/3.jpg" alt="Website Development"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Website Development</h3>
                    <p>From clean front-end builds to scalable back-end solutions, we develop websites that perform
                        flawlessly and support your business growth.</p>
                    <ul>
                        <li class="list-group-item">HTML5, CSS3, JavaScript, PHP, etc.</li>
                        <li class="list-group-item">CMS integration (WordPress, Shopify, etc.)</li>
                        <li class="list-group-item">eCommerce development</li>
                        <li class="list-group-item">Custom feature implementation</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Optimization & Performance -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/design-development/4.jpg"
                        alt="Website Optimization" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Optimization & Performance</h3>
                    <p>We ensure your site loads quickly, performs well across all browsers and devices, and is
                        optimized for search engines and conversions.</p>
                    <ul>
                        <li class="list-group-item">Page speed optimization</li>
                        <li class="list-group-item">SEO best practices</li>
                        <li class="list-group-item">Security hardening</li>
                        <li class="list-group-item">Cross-browser compatibility</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 5: Maintenance & Support -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/design-development/5.jpg"
                        alt="Maintenance & Support" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Maintenance & Support</h3>
                    <p>We provide ongoing website maintenance and support services to ensure your site remains secure,
                        up-to-date, and fully functional.</p>
                    <ul>
                        <li class="list-group-item">Regular backups & updates</li>
                        <li class="list-group-item">Bug fixes & performance checks</li>
                        <li class="list-group-item">Content updates as needed</li>
                        <li class="list-group-item">Dedicated technical support</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <!-- ======================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>