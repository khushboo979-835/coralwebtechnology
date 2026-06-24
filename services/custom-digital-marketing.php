<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'custom-digital-marketing'; ?>
    <!-- ======================================== -->
    <style>
        .custom-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/custom-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .custom-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .custom-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .custom-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .custom-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="custom-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Custom Digital Marketing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Custom Digital Marketing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Product Marketing -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/custom/1.jpg" alt="Product Marketing"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Product Marketing</h3>
                    <p>We help businesses launch, promote, and scale their products with data-driven marketing
                        strategies that highlight value and boost conversions.</p>
                    <ul>
                        <li class="list-group-item">Go-to-market strategies</li>
                        <li class="list-group-item">Product positioning & branding</li>
                        <li class="list-group-item">Campaigns for new launches</li>
                        <li class="list-group-item">Cross-channel promotions</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Faceless Digital Marketing -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/custom/2.jpg" alt="Faceless Digital Marketing"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Faceless Digital Marketing</h3>
                    <p>We create content and campaigns that promote your business without personal branding, ideal for
                        brands that want to focus only on products and services.</p>
                    <ul>
                        <li class="list-group-item">Anonymous brand promotion</li>
                        <li class="list-group-item">Faceless video content creation</li>
                        <li class="list-group-item">Automation-driven campaigns</li>
                        <li class="list-group-item">Content repurposing for reach</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Shopify Digital Marketing -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/custom/3.jpg" alt="Shopify Digital Marketing"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Shopify Digital Marketing</h3>
                    <p>Our Shopify marketing experts optimize your store for conversions, drive traffic, and improve
                        online sales performance.</p>
                    <ul>
                        <li class="list-group-item">Shopify SEO optimization</li>
                        <li class="list-group-item">Conversion-focused ads</li>
                        <li class="list-group-item">Email & remarketing campaigns</li>
                        <li class="list-group-item">App integration & CRO</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Franchise Digital Marketing -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/custom/4.jpg" alt="Franchise Digital Marketing"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Franchise Digital Marketing</h3>
                    <p>We provide tailored marketing solutions for franchises to ensure brand consistency while helping
                        individual locations grow.</p>
                    <ul>
                        <li class="list-group-item">Local SEO & visibility</li>
                        <li class="list-group-item">Geo-targeted ad campaigns</li>
                        <li class="list-group-item">Brand consistency management</li>
                        <li class="list-group-item">Franchisee lead generation</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 5: Reputation Management -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/custom/5.jpg" alt="Reputation Management Services"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Reputation Management Services</h3>
                    <p>We protect and enhance your brand’s online image by managing reviews, customer feedback, and
                        overall reputation across platforms.</p>
                    <ul>
                        <li class="list-group-item">Online review management</li>
                        <li class="list-group-item">Crisis communication support</li>
                        <li class="list-group-item">Positive brand building</li>
                        <li class="list-group-item">Social & search reputation monitoring</li>
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
