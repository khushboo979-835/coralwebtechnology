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
        .seo-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/seo-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 130px 0;
        }

        .seo-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .seo-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .seo-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .seo-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="seo-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">SEO</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">SEO</li>
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
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/seo/1.jpg" alt="SEO Services"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <div class="head-title">
                        <h2 class="fw-bold mb-3">Search Engine Optimization (SEO)</h2>
                    </div>
                    <p>
                        SEO is the backbone of any successful online presence. At [Your Company Name], we help
                        businesses rank higher in search results, drive quality traffic, and convert visitors into
                        leads.
                        Our holistic SEO strategies are tailored to meet your goals and target audience.
                    </p>
                    <p>
                        Whether you’re a startup, small business, or enterprise, our SEO experts will optimize every
                        technical and content aspect of your website to ensure long-term visibility.
                    </p>
                </div>
            </div>

            <!-- SECTION 2: Keyword Research -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/seo/2.jpg"
                        alt="Keyword Research" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Keyword Research & SEO Strategy</h3>
                    <p>
                        Our team identifies the most valuable keywords for your business through data-driven research.
                        We analyze your audience, competition, and industry to create a winning keyword strategy.
                    </p>
                    <ul>
                        <li class="list-group-item">Long-tail & short-tail keyword targeting</li>
                        <li class="list-group-item">Competitor keyword gap analysis</li>
                        <li class="list-group-item">Search intent mapping</li>
                        <li class="list-group-item">Location-based keywords for local SEO</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: On-Page SEO -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/seo/3.jpg" alt="On-Page SEO"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">On-Page SEO</h3>
                    <p>
                        We fine-tune every page on your website for maximum search engine compatibility and user
                        experience.
                    </p>
                    <ul>
                        <li class="list-group-item">Optimized meta titles & descriptions</li>
                        <li class="list-group-item">Header structure (H1, H2, H3) adjustments</li>
                        <li class="list-group-item">Internal linking strategies</li>
                        <li class="list-group-item">Keyword placement in content</li>
                        <li class="list-group-item">Image ALT tags and schema markup</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Technical SEO -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/seo/4.jpg"
                        alt="Technical SEO" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Technical SEO</h3>
                    <p>
                        We ensure your website is crawlable, fast, secure, and mobile-friendly — all key factors that
                        search engines consider for ranking.
                    </p>
                    <ul>
                        <li class="list-group-item">Site speed & performance optimization</li>
                        <li class="list-group-item">Mobile responsiveness</li>
                        <li class="list-group-item">Secure HTTPS implementation</li>
                        <li class="list-group-item">XML sitemaps and robots.txt setup</li>
                        <li class="list-group-item">Fix crawl errors and indexing issues</li>
                    </ul>
                </div>
            </div>

           
            <!-- SECTION 6: Local SEO -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/seo/6.jpg" alt="Local SEO"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Local SEO</h3>
                    <p>
                        Dominate your local market and drive foot traffic with our proven local SEO strategies.
                    </p>
                    <ul>
                        <li class="list-group-item">Google Business Profile setup & optimization</li>
                        <li class="list-group-item">NAP consistency across directories</li>
                        <li class="list-group-item">Location-based keywords & content</li>
                        <li class="list-group-item">Local citations & map optimization</li>
                        <li class="list-group-item">Local review generation strategy</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 7: SEO Reporting -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/seo/7.avif"
                        alt="SEO Reporting" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">SEO Reporting & Analysis</h3>
                    <p>
                        Stay informed with transparent, detailed reports that help you track growth and ROI from SEO
                        efforts.
                    </p>
                    <ul>
                        <li class="list-group-item">Monthly ranking reports</li>
                        <li class="list-group-item">Google Analytics and Search Console insights</li>
                        <li class="list-group-item">Traffic source breakdown</li>
                        <li class="list-group-item">Keyword performance analysis</li>
                        <li class="list-group-item">Strategic suggestions based on data</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- ======================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>