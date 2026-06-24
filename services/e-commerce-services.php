<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'e-commerce-services'; ?>
    <!-- ======================================== -->
    <style>
        .ecommerce-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/ecommerce-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .ecommerce-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .ecommerce-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .ecommerce-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .ecommerce-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="ecommerce-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">E-Commerce Services </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Commerce Services </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: E-commerce Website Development -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/ecommerce/1.jpg"
                        alt="E-commerce Website Development" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">E-commerce Website Development</h3>
                    <p>We design and build scalable e-commerce websites that deliver seamless shopping experiences with
                        secure checkout and modern UI/UX.</p>
                    <ul>
                        <li class="list-group-item">Custom e-commerce design & development</li>
                        <li class="list-group-item">Responsive and mobile-friendly layout</li>
                        <li class="list-group-item">Secure payment gateway integration</li>
                        <li class="list-group-item">Order & inventory management</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: WooCommerce (WordPress) -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/ecommerce/2.jpg" alt="WooCommerce Development"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">WooCommerce (WordPress)</h3>
                    <p>We create powerful WooCommerce-based online stores with easy management, customization, and
                        scalability for businesses of all sizes.</p>
                    <ul>
                        <li class="list-group-item">Custom WooCommerce themes & plugins</li>
                        <li class="list-group-item">Product catalog & inventory management</li>
                        <li class="list-group-item">Secure checkout & payment integration</li>
                        <li class="list-group-item">SEO-friendly store setup</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Shopify Store Setup -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/ecommerce/4.jpg" alt="Shopify Store Setup"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Shopify Store Setup</h3>
                    <p>Launch your online store quickly with our Shopify setup and customization services, designed for
                        ease of use and smooth shopping experiences.</p>
                    <ul>
                        <li class="list-group-item">Custom Shopify theme design</li>
                        <li class="list-group-item">Third-party app integrations</li>
                        <li class="list-group-item">Payment & shipping configuration</li>
                        <li class="list-group-item">Product upload & store management</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Custom PHP/Laravel Based E-commerce -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/ecommerce/3.jpg"
                        alt="Custom PHP Laravel E-commerce" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Custom PHP / Laravel Based E-commerce</h3>
                    <p>For businesses needing fully tailored solutions, we develop robust e-commerce platforms using PHP
                        and Laravel with advanced features and integrations.</p>
                    <ul>
                        <li class="list-group-item">Scalable custom-built solutions</li>
                        <li class="list-group-item">Advanced reporting & analytics</li>
                        <li class="list-group-item">Custom APIs & integrations</li>
                        <li class="list-group-item">Secure, high-performance platforms</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 5: Multi-vendor Marketplace Development -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/ecommerce/5.jpg"
                        alt="Multi-vendor Marketplace Development" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Multi-vendor Marketplace Development</h3>
                    <p>We develop large-scale multi-vendor platforms like Amazon or Flipkart, with vendor dashboards,
                        commission management, and scalable architecture.</p>
                    <ul>
                        <li class="list-group-item">Vendor registration & management</li>
                        <li class="list-group-item">Commission & payment tracking</li>
                        <li class="list-group-item">Product approval workflows</li>
                        <li class="list-group-item">High scalability & performance</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <!-- ======================================== -->
    <!-- Dynamic We Serve Across India Section -->
    <?php if (function_exists('renderServiceLocationsSection') && isset($service_key)) { renderServiceLocationsSection($service_key, $base_url); } ?>
    <?php include '../common/footer.php'; ?>
</body>

</html>
