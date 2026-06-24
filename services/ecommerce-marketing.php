<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'ecommerce-marketing'; ?>
    <!-- ======================================== -->
    <style>
        .ecommerce-marketing-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/ecommerce-marketing-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .ecommerce-marketing-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .ecommerce-marketing-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .ecommerce-marketing-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .ecommerce-marketing-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="ecommerce-marketing-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">E-commerce Marketing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-commerce Marketing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">
            <!-- SECTION 1: Google Shopping Ads -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/marketing/1.jpg"
                        alt="Google Shopping Ads" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Google Shopping Ads</h3>
                    <p>Boost your sales with targeted Google Shopping Ads that showcase your products directly to
                        customers searching online.</p>
                    <ul>
                        <li class="list-group-item">Product feed setup & optimization</li>
                        <li class="list-group-item">Targeted ad campaigns</li>
                        <li class="list-group-item">Performance tracking & analytics</li>
                        <li class="list-group-item">Higher visibility in Google search</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Facebook/Instagram Product Catalog Ads -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/marketing/2.jpg"
                        alt="Facebook Instagram Catalog Ads" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Facebook / Instagram Product Catalog Ads</h3>
                    <p>Reach your audience on social media with dynamic product catalog ads that display your items to
                        potential buyers.</p>
                    <ul>
                        <li class="list-group-item">Facebook & Instagram shop setup</li>
                        <li class="list-group-item">Dynamic retargeting campaigns</li>
                        <li class="list-group-item">Creative ad designs</li>
                        <li class="list-group-item">Advanced audience targeting</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: SEO for E-commerce -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/marketing/3.avif" alt="SEO for E-commerce"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">SEO for E-commerce (Product Pages Optimization)</h3>
                    <p>Optimize your e-commerce store for better rankings on search engines and attract more organic
                        traffic to your product pages.</p>
                    <ul>
                        <li class="list-group-item">Keyword optimization for products</li>
                        <li class="list-group-item">Technical SEO & speed improvements</li>
                        <li class="list-group-item">On-page & meta tag optimization</li>
                        <li class="list-group-item">Improved search visibility & sales</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Email Marketing Automation -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/marketing/4.jpg"
                        alt="Email Marketing Automation" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Email Marketing Automation</h3>
                    <p>Engage your customers with automated email campaigns that recover lost sales and promote your
                        offers effectively.</p>
                    <ul>
                        <li class="list-group-item">Cart abandonment emails</li>
                        <li class="list-group-item">Personalized product recommendations</li>
                        <li class="list-group-item">Discount & promotional campaigns</li>
                        <li class="list-group-item">Automated workflows for retention</li>
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
