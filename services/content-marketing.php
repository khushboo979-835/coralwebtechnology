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
        .content-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/content-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 130px 0;
        }

        .content-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .content-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .content-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .content-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="content-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Content Marketing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Content Marketing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Content Marketing Overview -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/content/1.avif"
                        alt="Content Marketing Overview" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Content Marketing</h3>
                    <p>We craft compelling content that not only attracts your audience but also educates, nurtures, and
                        converts them into loyal customers. Our strategy is tailored to align with your brand voice and
                        marketing goals.</p>
                    <ul>
                        <li class="list-group-item">Content strategy & planning</li>
                        <li class="list-group-item">SEO-driven blog writing</li>
                        <li class="list-group-item">Audience targeting & persona mapping</li>
                        <li class="list-group-item">Brand storytelling techniques</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Blog Writing & Articles -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/content/2.jpg"
                        alt="Blog Writing & Articles" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Blog Writing & Articles</h3>
                    <p>We write engaging, informative blog posts and long-form articles optimized for search engines to
                        build authority and drive organic traffic.</p>
                    <ul>
                        <li class="list-group-item">Industry-focused blog posts</li>
                        <li class="list-group-item">SEO keyword integration</li>
                        <li class="list-group-item">Thought leadership content</li>
                        <li class="list-group-item">Topic clustering for ranking</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Visual Content Creation -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/content/3.jpg"
                        alt="Visual Content Creation" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Visual Content Creation</h3>
                    <p>We design impactful visual content including infographics, social posts, and branded graphics to
                        improve engagement and information retention.</p>
                    <ul>
                        <li class="list-group-item">Infographics & data visuals</li>
                        <li class="list-group-item">Branded social media graphics</li>
                        <li class="list-group-item">Custom illustrations</li>
                        <li class="list-group-item">Slide decks & presentations</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Video Content Production -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/content/4.jpg"
                        alt="Video Content Production" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Video Content Production</h3>
                    <p>We help brands tell their story through short-form videos, explainer animations, and testimonials
                        that capture attention and deliver messages clearly.</p>
                    <ul>
                        <li class="list-group-item">Reels, shorts & animations</li>
                        <li class="list-group-item">Product demo & how-to videos</li>
                        <li class="list-group-item">Customer testimonial videos</li>
                        <li class="list-group-item">Scriptwriting & editing</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 5: Content Distribution & Promotion -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/content/5.jpg"
                        alt="Content Distribution & Promotion" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Content Distribution & Promotion</h3>
                    <p>We ensure your content reaches the right people at the right time through effective promotion
                        strategies across digital platforms.</p>
                    <ul>
                        <li class="list-group-item">Multi-platform content syndication</li>
                        <li class="list-group-item">Email marketing campaigns</li>
                        <li class="list-group-item">Influencer content outreach</li>
                        <li class="list-group-item">Paid content promotion</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- ======================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>