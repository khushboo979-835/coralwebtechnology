<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'paid-marketing'; ?>
    <!-- ======================================== -->
    <style>
        .paid-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/paid-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .paid-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .paid-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .paid-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .paid-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="paid-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Paid Marketing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Paid Marketing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">
            <!-- SECTION 1: PPC Services Overview -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/paid/1.jpg" alt="PPC Services Overview"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">PPC Services</h3>
                    <p>Our Pay-Per-Click advertising services help you reach the right audience instantly, drive
                        qualified traffic, and generate leads with measurable ROI.</p>
                    <ul>
                        <li class="list-group-item">Custom PPC strategy & planning</li>
                        <li class="list-group-item">Keyword research & targeting</li>
                        <li class="list-group-item">Ad copywriting & creative design</li>
                        <li class="list-group-item">Landing page optimization</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Google Ads Campaigns -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/paid/2.jpg" alt="Google Ads Campaigns"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Google Ads</h3>
                    <p>We manage Google Ads campaigns across Search, Display, Shopping, and YouTube to maximize
                        conversions and reduce wasted ad spend.</p>
                    <ul>
                        <li class="list-group-item">Search & Display ads</li>
                        <li class="list-group-item">Google Shopping campaigns</li>
                        <li class="list-group-item">YouTube video advertising</li>
                        <li class="list-group-item">Smart bidding strategies</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Social Media Ads -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/paid/3.jpg" alt="Social Media Ads"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Social Media Ads</h3>
                    <p>We create highly targeted ad campaigns on platforms like Facebook, Instagram, and LinkedIn to
                        build awareness, drive traffic, and generate sales.</p>
                    <ul>
                        <li class="list-group-item">Facebook & Instagram ads</li>
                        <li class="list-group-item">LinkedIn lead generation ads</li>
                        <li class="list-group-item">A/B testing for creatives</li>
                        <li class="list-group-item">Audience segmentation</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Amazon PPC Marketing -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/paid/4.avif" alt="Amazon PPC Marketing"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Amazon PPC Marketing</h3>
                    <p>Our Amazon PPC experts run Sponsored Product and Sponsored Brand campaigns to boost product
                        visibility, sales, and ranking on Amazon.</p>
                    <ul>
                        <li class="list-group-item">Amazon Sponsored Products</li>
                        <li class="list-group-item">Sponsored Brand ads</li>
                        <li class="list-group-item">Product display campaigns</li>
                        <li class="list-group-item">Sales & ranking optimization</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 5: Performance Tracking -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/paid/5.jpg" alt="Performance Tracking"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Performance Tracking & Optimization</h3>
                    <p>We continuously monitor and optimize your ad campaigns to lower CPC, increase conversions, and
                        ensure maximum ROI.</p>
                    <ul>
                        <li class="list-group-item">Real-time campaign monitoring</li>
                        <li class="list-group-item">Conversion tracking setup</li>
                        <li class="list-group-item">Data-driven optimization</li>
                        <li class="list-group-item">Transparent reporting</li>
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
