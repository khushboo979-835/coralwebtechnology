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
        .social-media-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/social-media-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 130px 0;
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
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Social Media Marketing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Social Media Marketing Overview -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/social-media/1.avif" alt="Social Media Marketing Overview"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Social Media Marketing</h3>
                    <p>We help you build a strong and engaging social media presence that drives brand awareness,
                        customer loyalty, and lead generation across all major platforms.</p>
                    <ul>
                        <li class="list-group-item">Platform-specific strategies</li>
                        <li class="list-group-item">Content planning & calendar management</li>
                        <li class="list-group-item">Organic & paid social campaigns</li>
                        <li class="list-group-item">Performance-driven engagement tactics</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Platform Strategy & Setup -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/social-media/2.jpg" alt="Platform Strategy & Setup"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Platform Strategy & Setup</h3>
                    <p>We identify the best platforms for your brand—Facebook, Instagram, LinkedIn, Twitter, TikTok—and
                        ensure they’re set up for success from the start.</p>
                    <ul>
                        <li class="list-group-item">Business profile optimization</li>
                        <li class="list-group-item">Channel-specific content plans</li>
                        <li class="list-group-item">Brand consistency across platforms</li>
                        <li class="list-group-item">Follower growth strategy</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Content Creation & Scheduling -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/social-media/3.jpg" alt="Content Creation & Scheduling"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Content Creation & Scheduling</h3>
                    <p>Our team designs visually appealing and engaging content tailored to each platform, scheduled
                        strategically for maximum reach and engagement.</p>
                    <ul>
                        <li class="list-group-item">Graphic design & post creation</li>
                        <li class="list-group-item">Video content & reels</li>
                        <li class="list-group-item">Hashtag strategy & trends</li>
                        <li class="list-group-item">Content calendar management</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Social Media Advertising -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/social-media/4.jpg" alt="Social Media Advertising"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Social Media Advertising</h3>
                    <p>We create data-backed paid ad campaigns that drive clicks, conversions, and ROI on Facebook,
                        Instagram, LinkedIn, and other platforms.</p>
                    <ul>
                        <li class="list-group-item">Audience targeting & segmentation</li>
                        <li class="list-group-item">A/B testing & ad optimization</li>
                        <li class="list-group-item">Lead generation & retargeting</li>
                        <li class="list-group-item">Campaign budget optimization</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 5: Analytics & Optimization -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/social-media/5.jpg" alt="Analytics & Optimization"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Analytics & Optimization</h3>
                    <p>We monitor campaign performance, generate detailed insights, and refine your social strategy for
                        better engagement and results.</p>
                    <ul>
                        <li class="list-group-item">Post & ad performance tracking</li>
                        <li class="list-group-item">Platform-specific insights</li>
                        <li class="list-group-item">Engagement & follower analytics</li>
                        <li class="list-group-item">Monthly performance reports</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <!-- ======================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>