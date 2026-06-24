<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'website-development'; ?>
    <!-- ======================================== -->
    <style>
        .website-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/website-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .website-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .website-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .website-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .website-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="website-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Website Development</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Website Development</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Static/Business Website -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/website-development/1.jpg"
                        alt="Static/Business Website" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Static / Business Website</h3>
                    <p>We design clean, professional, and responsive static websites that are perfect for small
                        businesses and startups to showcase their services and brand identity.</p>
                    <ul>
                        <li class="list-group-item">Fast and secure websites</li>
                        <li class="list-group-item">Responsive and SEO-friendly design</li>
                        <li class="list-group-item">Cost-effective for small businesses</li>
                        <li class="list-group-item">Professional and modern layout</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: E-commerce Website -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/website-development/2.jpg"
                        alt="E-commerce Website" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">E-commerce Website</h3>
                    <p>We build scalable and secure e-commerce platforms that help businesses sell online
                        with smooth shopping experiences and powerful management tools.</p>
                    <ul>
                        <li class="list-group-item">User-friendly product catalog</li>
                        <li class="list-group-item">Secure payment gateway integration</li>
                        <li class="list-group-item">Order & inventory management</li>
                        <li class="list-group-item">Reports & analytics</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: WordPress/Custom Development -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/website-development/3.avif"
                        alt="WordPress/Custom Development" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">WordPress / Custom Development</h3>
                    <p>From WordPress-powered sites to fully custom-built solutions, we develop flexible
                        and scalable websites tailored to your business goals.</p>
                    <ul>
                        <li class="list-group-item">Custom WordPress themes & plugins</li>
                        <li class="list-group-item">CMS for easy content management</li>
                        <li class="list-group-item">Custom-built web applications</li>
                        <li class="list-group-item">Scalable & business-oriented solutions</li>
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
