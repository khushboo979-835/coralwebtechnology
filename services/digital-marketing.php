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
        .digital-marketing-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/digital-marketing.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 130px 0;
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
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                        <h2 class="fw-bold mb-3 ">Search Engine Optimization (SEO)</h2>
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

            <!-- SECTION 3: Google Ads / PPC -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6">
                    <img src="<?= $base_url ?>assets/images/services/digital-marketing/3.jpg" alt="PPC Management"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="head-title">
                        <h2 class="fw-bold mb-3">Google Ads & PPC Management</h2>
                    </div>
                    <p>Maximize ROI with strategic pay-per-click (PPC) advertising. Our certified experts craft targeted
                        ad campaigns that generate qualified leads and measurable results.</p>
                    <ul>
                        <li class="list-group-item">Search & Display Ads</li>
                        <li class="list-group-item">Retargeting Campaigns</li>
                        <li class="list-group-item">Landing Page Optimization</li>
                        <li class="list-group-item">Conversion Tracking & Reporting</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Content Marketing -->
            <div class="row align-items-center mb-5 flex-md-row-reverse bg-white p-3">
                <div class="col-md-6">
                    <img src="<?= $base_url ?>assets/images/services/digital-marketing/4.jpg" alt="Content Marketing"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="head-title">
                        <h2 class="fw-bold mb-3">Content Marketing</h2`>
                    </div>
                    <p>Tell your story the right way. From blogs to branded content, we create valuable, SEO-optimized
                        content that connects with your audience and enhances your digital presence.</p>
                    <ul>
                        <li class="list-group-item">Blog Writing & Copywriting</li>
                        <li class="list-group-item">Infographics & Visual Content</li>
                        <li class="list-group-item">Video Scripts & Reels</li>
                        <li class="list-group-item">Content Planning & Strategy</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 5: Email Marketing -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6">
                    <img src="<?= $base_url ?>assets/images/services/digital-marketing/5.jpg" alt="Email Marketing"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="head-title">
                        <h2 class="fw-bold mb-3">Email Marketing</h2>
                    </div>
                    <p>Stay top-of-mind with targeted email campaigns. We help you nurture leads, retain customers, and
                        increase conversions with personalized, automated emails that get results.</p>
                    <ul>
                        <li class="list-group-item">Email Campaign Design</li>
                        <li class="list-group-item">Marketing Automation</li>
                        <li class="list-group-item">Subscriber Segmentation</li>
                        <li class="list-group-item">Performance Analytics</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 6: Online Reputation Management -->
            <div class="row align-items-center mb-5 flex-md-row-reverse bg-white p-3">
                <div class="col-md-6">
                    <img src="<?= $base_url ?>assets/images/services/digital-marketing/6.jpg"
                        alt="Online Reputation Management" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <div class="head-title">
                        <h2 class="fw-bold mb-3">Online Reputation Management (ORM)</h2>
                    </div>
                    <p>Protect and enhance your brand's image. Our ORM experts monitor, manage, and respond to online
                        mentions to build trust and maintain a positive public perception.</p>
                    <ul>
                        <li class="list-group-item">Review Monitoring</li>
                        <li class="list-group-item">Response & Recovery Strategy</li>
                        <li class="list-group-item">Brand Sentiment Analysis</li>
                        <li class="list-group-item">PR & Crisis Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>