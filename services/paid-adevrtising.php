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
        .paid-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/paid-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 130px 0;
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
                <h1 class="mb-2 fw-bold">Paid Advertising</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Paid Advertising</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Paid Advertising Overview -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/paid/1.jpg" alt="Paid Advertising"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <div class="head-title">
                        <h2 class="fw-bold mb-3">Paid Advertising</h2>
                    </div>
                    <p>
                        Paid advertising offers instant visibility to your ideal audience. Our targeted ad campaigns
                        across Google,
                        social media, and other platforms drive traffic, leads, and sales efficiently and effectively.
                    </p>
                    <p>
                        Whether you're launching a new product or scaling your business, our ROI-focused paid media
                        strategies
                        ensure you achieve your goals with precision.
                    </p>
                </div>
            </div>

            <!-- SECTION 2: Search Ads -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/paid/2.avif" alt="Search Ads"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Google Search Ads</h3>
                    <p>
                        Capture high-intent customers who are actively searching for your products or services using
                        Google's search
                        ad network.
                    </p>
                    <ul>
                        <li class="list-group-item">Keyword-targeted campaigns</li>
                        <li class="list-group-item">Ad copywriting & A/B testing</li>
                        <li class="list-group-item">Conversion tracking setup</li>
                        <li class="list-group-item">Landing page alignment</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Display Ads -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/paid/3.jpg" alt="Display Ads"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Display Advertising</h3>
                    <p>
                        Visually engage potential customers through banner ads across Google Display Network and other
                        publisher sites.
                    </p>
                    <ul>
                        <li class="list-group-item">Custom creatives for different screen sizes</li>
                        <li class="list-group-item">Audience & topic targeting</li>
                        <li class="list-group-item">Remarketing strategies</li>
                        <li class="list-group-item">Brand awareness campaigns</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Social Media Ads -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/paid/4.jpg" alt="Social Ads"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Social Media Advertising</h3>
                    <p>
                        Target users on platforms like Facebook, Instagram, LinkedIn, and Twitter with engaging ads
                        designed for awareness
                        and conversion.
                    </p>
                    <ul>
                        <li class="list-group-item">Custom audience targeting</li>
                        <li class="list-group-item">Lead generation campaigns</li>
                        <li class="list-group-item">Retargeting & lookalike audiences</li>
                        <li class="list-group-item">Ad creative design & testing</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 5: YouTube Ads -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/paid/5.jpg" alt="YouTube Ads"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">YouTube Video Ads</h3>
                    <p>
                        Reach audiences through compelling video content before or during YouTube videos and across the
                        Google Video Network.
                    </p>
                    <ul>
                        <li class="list-group-item">Skippable & non-skippable ad formats</li>
                        <li class="list-group-item">Video script & production support</li>
                        <li class="list-group-item">Channel & interest targeting</li>
                        <li class="list-group-item">Video view tracking & optimization</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 6: Remarketing Ads -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/paid/6.jpg" alt="Remarketing Ads"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Remarketing Campaigns</h3>
                    <p>
                        Re-engage visitors who left your site without converting by showing them personalized ads across
                        the web.
                    </p>
                    <ul>
                        <li class="list-group-item">Dynamic product remarketing</li>
                        <li class="list-group-item">Custom audiences & time-window segmentation</li>
                        <li class="list-group-item">Cross-device targeting</li>
                        <li class="list-group-item">Cart abandonment recovery</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 7: Campaign Reporting -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/paid/7.jpg" alt="Ad Reporting"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Ad Campaign Reporting & Optimization</h3>
                    <p>
                        We deliver transparent performance reports and continuously optimize your ads for better ROI.
                    </p>
                    <ul>
                        <li class="list-group-item">CTR, CPC, CPA, ROAS reports</li>
                        <li class="list-group-item">Heatmap & funnel insights</li>
                        <li class="list-group-item">Ad split testing</li>
                        <li class="list-group-item">Campaign goal tracking</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- ======================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>