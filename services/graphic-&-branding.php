<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'graphic-branding'; ?>
    <!-- ======================================== -->
    <style>
        .graphic-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/graphic-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .graphic-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .graphic-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .graphic-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .graphic-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="graphic-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Graphic & Branding</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Graphic & Branding</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Logo Design -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/graphic/1.jpg" alt="Logo Design"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Logo Design</h3>
                    <p>We create unique and memorable logo designs that define your brand identity and leave a lasting
                        impression on your audience.</p>
                    <ul>
                        <li class="list-group-item">Custom and creative logo concepts</li>
                        <li class="list-group-item">Modern and timeless designs</li>
                        <li class="list-group-item">Brand-focused color and typography</li>
                        <li class="list-group-item">Multiple revisions for perfection</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Social Media Creatives -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/graphic/2.avif"
                        alt="Social Media Creatives" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Social Media Creatives</h3>
                    <p>Stand out on social platforms with engaging and visually appealing designs tailored for your
                        brand’s campaigns and promotions.</p>
                    <ul>
                        <li class="list-group-item">Post & story designs</li>
                        <li class="list-group-item">Ad banners & campaign creatives</li>
                        <li class="list-group-item">Branded templates for consistency</li>
                        <li class="list-group-item">High-quality, shareable graphics</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Business Card & Brochure Design -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/graphic/3.jpg"
                        alt="Business Card & Brochure Design" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Business Card & Brochure Design</h3>
                    <p>From professional business cards to detailed brochures, we design print-ready materials that
                        enhance your offline branding.</p>
                    <ul>
                        <li class="list-group-item">Creative business card designs</li>
                        <li class="list-group-item">Company profile & brochure layouts</li>
                        <li class="list-group-item">High-resolution print-ready files</li>
                        <li class="list-group-item">Professional and brand-consistent look</li>
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
