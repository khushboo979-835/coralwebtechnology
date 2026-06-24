<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'social-media-marketing'; ?>
    <!-- ======================================== -->
    <style>
        .social-media-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/social-media-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .social-media-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .social-media-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .social-media-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .social-media-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="social-media-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Social Media Marketing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Social Media Marketing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Social Media Services -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/social-media/1.avif" alt="Social Media Services"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Social Media Services</h3>
                    <p>We help you build and manage a strong social media presence that increases brand awareness,
                        engages your audience, and drives results across platforms.</p>
                    <ul>
                        <li class="list-group-item">Platform setup & optimization</li>
                        <li class="list-group-item">Content creation & scheduling</li>
                        <li class="list-group-item">Community management</li>
                        <li class="list-group-item">Paid advertising campaigns</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Influencer Marketing -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/social-media/2.jpg" alt="Influencer Marketing"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Influencer Marketing</h3>
                    <p>We connect your brand with the right influencers to create authentic collaborations
                        that boost visibility, credibility, and conversions.</p>
                    <ul>
                        <li class="list-group-item">Influencer research & outreach</li>
                        <li class="list-group-item">Collaboration & content strategy</li>
                        <li class="list-group-item">Campaign management</li>
                        <li class="list-group-item">Performance tracking & reporting</li>
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
