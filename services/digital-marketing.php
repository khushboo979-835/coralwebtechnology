<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'digital-marketing'; ?>
    <!-- ======================================== -->
    <style>
        .digital-marketing-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/digital-marketing.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .digital-marketing-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .digital-marketing-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .digital-marketing-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .digital-marketing-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="digital-marketing-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Digital Marketing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Digital Marketing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">
            <!-- SECTION 1: SEO -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6">
                    <img src="<?= $base_url ?>assets/images/services/digital-marketing/1.jpg" alt="SEO Services"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="head-title">
                        <h2 class="fw-bold mb-3">Search Engine Optimization (SEO)</h2>
                    </div>
                    <p>Boost your online visibility with our result-driven SEO strategies. From on-page optimization to
                        high-quality backlinks, we ensure your website ranks higher on Google and drives organic
                        traffic.</p>
                    <ul>
                        <li class="list-group-item">Keyword Research & Planning</li>
                        <li class="list-group-item">Technical & On-Page SEO</li>
                        <li class="list-group-item">Backlink Building</li>
                        <li class="list-group-item">SEO Audits & Reporting</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Social Media Marketing -->
            <div class="row align-items-center mb-5 flex-md-row-reverse bg-white p-3">
                <div class="col-md-6">
                    <img src="<?= $base_url ?>assets/images/services/digital-marketing/social.avif"
                        alt="Social Media Marketing" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="head-title">
                        <h2 class="fw-bold mb-3">Social Media Marketing (SMM)</h2>
                    </div>
                    <p>Engage your audience where they spend most of their time. We create impactful social media
                        campaigns that build brand loyalty, increase engagement, and drive conversions.</p>
                    <ul>
                        <li class="list-group-item">Facebook, Instagram, LinkedIn, Twitter Campaigns</li>
                        <li class="list-group-item">Content Creation & Scheduling</li>
                        <li class="list-group-item">Social Media Ads</li>
                        <li class="list-group-item">Analytics & Performance Monitoring</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Local SEO & GMB Ranking -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6">
                    <img src="<?= $base_url ?>assets/images/services/digital-marketing/3.jpg"
                        alt="Local SEO & GMB Ranking" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="head-title">
                        <h2 class="fw-bold mb-3">Local SEO & GMB Ranking</h2>
                    </div>
                    <p>Increase your local visibility and attract nearby customers with our specialized Local SEO and
                        Google
                        My Business optimization services.</p>
                    <ul>
                        <li class="list-group-item">Google My Business Optimization</li>
                        <li class="list-group-item">Local Citations & Directory Listings</li>
                        <li class="list-group-item">Location-Based Keywords</li>
                        <li class="list-group-item">Reviews & Reputation Management</li>
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
