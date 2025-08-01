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
        .strategy-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/strategy-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 130px 0;
        }

        .strategy-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .strategy-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .strategy-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .strategy-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="strategy-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Custom Digital Strategy</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Custom Digital Strategy</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Custom Digital Strategy Overview -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/strategy/1.jpg"
                        alt="Custom Digital Strategy Overview" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Custom Digital Strategy</h3>
                    <p>Every business is unique, so your digital marketing strategy should be too. We craft custom
                        digital strategies that align with your goals, industry, and target audience to maximize your
                        online success.</p>
                    <ul>
                        <li class="list-group-item">Tailored approach based on business needs</li>
                        <li class="list-group-item">Multi-channel integration for better reach</li>
                        <li class="list-group-item">Performance-based planning</li>
                        <li class="list-group-item">Constant optimization for best ROI</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Business Analysis & Goal Setting -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/strategy/2.jpg"
                        alt="Business Analysis & Goal Setting" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Business Analysis & Goal Setting</h3>
                    <p>We start by analyzing your business model, competitors, and existing digital presence. This helps
                        us set realistic and measurable goals for your marketing campaign.</p>
                    <ul>
                        <li class="list-group-item">Deep dive into business objectives</li>
                        <li class="list-group-item">Competitor research & benchmarking</li>
                        <li class="list-group-item">Audience segmentation and targeting</li>
                        <li class="list-group-item">Clear KPIs and milestones</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Channel Selection & Strategy Mapping -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/strategy/3.jpg"
                        alt="Channel Selection & Strategy Mapping" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Channel Selection & Strategy Mapping</h3>
                    <p>Based on your goals and audience, we choose the right digital channels and map out a campaign
                        strategy that ensures maximum impact across platforms.</p>
                    <ul>
                        <li class="list-group-item">Selection of platforms like SEO, PPC, social media, email, etc.</li>
                        <li class="list-group-item">Budget distribution and media planning</li>
                        <li class="list-group-item">Tactical campaign planning per channel</li>
                        <li class="list-group-item">Content and ad strategy alignment</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Implementation & Execution -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/strategy/4.jpg"
                        alt="Implementation & Execution" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Implementation & Execution</h3>
                    <p>Once the strategy is finalized, we implement campaigns using the latest tools and best practices.
                        Timely execution and flawless delivery are our priorities.</p>
                    <ul>
                        <li class="list-group-item">Setup of marketing assets and campaigns</li>
                        <li class="list-group-item">Creative and content development</li>
                        <li class="list-group-item">Cross-channel coordination</li>
                        <li class="list-group-item">Dedicated team for execution</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 5: Monitoring & Reporting -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/strategy/5.jpg"
                        alt="Monitoring & Reporting" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Monitoring & Reporting</h3>
                    <p>We track campaign performance in real-time, analyze key metrics, and share detailed reports so
                        you're always aware of what's working and what's not.</p>
                    <ul>
                        <li class="list-group-item">Real-time performance tracking</li>
                        <li class="list-group-item">Weekly/monthly reporting</li>
                        <li class="list-group-item">Insights and recommendations</li>
                        <li class="list-group-item">Strategy adjustments based on data</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>