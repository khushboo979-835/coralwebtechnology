<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <main>
        <?php include 'common/header.php'; ?>
        <!-- ========================================= -->
        <section class="hero position-relative py-5">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center order-md-1 order-lg-2">
                                    <img src="<?= $base_url ?>assets/images/banner/1.png" alt="SEO Growth Illustration"
                                        class="img-fluid">
                                </div>
                                <div class="col-md-6 text-center text-md-start mb-4 mb-md-0 order-md-2 order-lg-1">
                                    <h1 class="display-5 fw-bold">Boost Your Online Presence</h1>
                                    <p class="lead">Professional SEO & Digital Marketing Services tailored for your
                                        business growth.</p>
                                    <a href="<?= $base_url ?>contact-us.php" class="btn btn-primary px-4 py-2">Get
                                        Started</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center order-md-1 order-lg-2">
                                    <img src="<?= $base_url ?>assets/images/banner/2.png"
                                        alt="Web Development Illustration" class="img-fluid">
                                </div>
                                <div class="col-md-6 text-center text-md-start mb-4 mb-md-0 order-md-2 order-lg-1">
                                    <h1 class="display-5 fw-bold">Creative Web Development</h1>
                                    <p class="lead">Get custom websites built with modern UI/UX and powerful backend
                                        solutions.</p>
                                    <a href="<?= $base_url ?>contact-us.php" class="btn btn-primary px-4 py-2">Explore
                                        Now</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center order-md-1 order-lg-2">
                                    <img src="<?= $base_url ?>assets/images/banner/3.png"
                                        alt="Graphic Design Illustration" class="img-fluid">
                                </div>
                                <div class="col-md-6 text-center text-md-start mb-4 mb-md-0 order-md-2 order-lg-1">
                                    <h1 class="display-5 fw-bold">Stunning Graphic Design</h1>
                                    <p class="lead">From logos to social media creatives — make your brand
                                        unforgettable.</p>
                                    <a href="<?= $base_url ?>contact-us.php" class="btn btn-primary px-4 py-2">Let’s
                                        Talk</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>

        <!-- ========================================================================================= -->
        <section class="counter-section py-3 border-top">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center" id="counter-area">
                    <div class="col-md-3 ">
                        <h2 class="counter fw-bold display-5" data-target="150">0+</h2>
                        <p>Projects Completed</p>
                    </div>
                    <div class="col-md-3 ">
                        <h2 class="counter fw-bold display-5" data-target="100">0+</h2>
                        <p>Happy Clients</p>
                    </div>
                    <div class="col-md-3 ">
                        <h2 class="counter fw-bold display-5" data-target="50">0+</h2>
                        <p>Brands Served</p>
                    </div>
                    <div class="col-md-3 ">
                        <h2 class="counter fw-bold display-5" data-target="10">0+</h2>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =============================================================================================== -->
        <section class="choose-crevix py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="head-title mb-4">
                            <h2 class="fw-bold">
                                Why Choose <span class="">Corevix</span> for Your Business?
                            </h2>
                        </div>
                        <p class="section-desc text-muted mb-4">
                            Crevix is not just a service provider — we’re your digital growth partner.
                            We combine innovation, strategy, and technology to deliver solutions that actually make a
                            difference.
                        </p>
                        <ul class="crevix-features list-unstyled">
                            <li class=" list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Result-Driven Digital
                                Marketing</li>
                            <li class=" list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i> SEO
                                That Actually Ranks</li>
                            <li class=" list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Custom & Scalable Web
                                Development</li>
                            <li class=" list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Creative & Impactful Designs
                            </li>
                        </ul>
                    </div>

                    <!-- Right Cards -->
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="feature-card shadow-sm border-start border-4 border-primary">
                                    <h5 class="fw-semibold mb-2"><i
                                            class="bi bi-bar-chart-line-fill text-primary me-2"></i>Tailored Strategies
                                    </h5>
                                    <p class="text-muted mb-0">We understand every business is unique, so we craft
                                        personalized plans that bring results.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="feature-card shadow-sm border-start border-4 border-primary">
                                    <h5 class="fw-semibold mb-2"><i
                                            class="bi bi-people-fill text-primary me-2"></i>Expert Team</h5>
                                    <p class="text-muted mb-0">From marketers to developers, our in-house experts ensure
                                        top-notch service at every stage.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="feature-card shadow-sm border-start border-4 border-primary">
                                    <h5 class="fw-semibold mb-2"><i
                                            class="bi bi-clock-history text-primary me-2"></i>On-Time Delivery</h5>
                                    <p class="text-muted mb-0">We respect deadlines. Always. Your project will be
                                        delivered efficiently, without compromising quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====================================================================================== -->
        <section class="our-services py-5">
            <div class="container">
                <div class=" head-title mb-5">
                    <h2 class="text-white">Our <span>Services</span></h2>
                    <p class="text-white">We offer a wide range of digital services to elevate your brand presence and
                        drive real
                        business growth.</p>
                </div>

                <!-- Digital Marketing -->
                <div class="row justify-content-center rounded align-items-center mb-5 bg-light p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">Digital Marketing</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Digital Marketing</h3>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3 border-start  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/digital-marketing.jpg"
                                alt="Digital Marketing" class="img-fluid rounded shadow">
                        </div>

                    </div>
                    <div class="col-md-4 ">
                        <p>We provide customized digital strategies including SEO, PPC, email marketing, and lead
                            generation to ensure your business stands out and gets measurable results.</p>
                    </div>
                </div>

                <!-- SEO -->
                <div class="row justify-content-center rounded align-items-center  mb-5 bg-white p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">SEO</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Search Engine Optimization (SEO)</h3>
                        </a>
                    </div>

                    <div class="col-md-4 mb-3 ">
                        <p>Improve your website’s visibility and organic ranking on Google through our result-oriented
                            SEO practices tailored to your niche.</p>
                    </div>

                    <div class="col-md-4 border-end  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/seo.jpg" alt="SEO Services"
                                class="img-fluid rounded shadow">
                        </div>

                    </div>
                </div>

                <!-- Paid Marketing -->
                <div class="row justify-content-center rounded align-items-center mb-5 bg-light p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">Paid Marketing</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Paid Advertising</h3>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3 border-start  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/paid-advertising.jpg"
                                alt="Paid Advertising" class="img-fluid rounded shadow">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <p>Maximize your reach instantly with Google Ads, Facebook Ads, and targeted campaigns that are
                            ROI-driven and conversion-focused.</p>
                    </div>
                </div>

                <!-- Custom Digital Strategy -->
                <div class="row justify-content-center rounded align-items-center  mb-5 bg-white p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">Strategy</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Custom Digital Strategy</h3>
                        </a>
                    </div>

                    <div class="col-md-4 mb-3">
                        <p>We analyze your business goals to create personalized digital marketing strategies aligned
                            with your audience and brand objectives.</p>
                    </div>
                    <div class="col-md-4 border-end  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/custom-strategy.avif" alt="Custom Strategy"
                                class="img-fluid rounded shadow">
                        </div>

                    </div>
                </div>

                <!-- Social Media Marketing -->
                <div class="row justify-content-center rounded align-items-center mb-5 bg-light p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">SMM</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Social Media Marketing</h3>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3 border-start  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/smm.jpg" alt="Social Media Marketing"
                                class="img-fluid rounded shadow">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <p>Boost your brand engagement and customer loyalty through targeted content and ad strategies
                            on platforms like Instagram, Facebook, LinkedIn, and more.</p>
                    </div>
                </div>

                <!-- Design & Development -->
                <div class="row justify-content-center rounded align-items-center  mb-5 bg-white p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">Web</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Design & Development</h3>
                        </a>
                    </div>

                    <div class="col-md-4 mb-3">
                        <p>From sleek business websites to dynamic eCommerce platforms, we build high-performing digital
                            solutions optimized for UX and speed.</p>
                    </div>
                    <div class="col-md-4 border-end  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/design-development.jpg"
                                alt="Design & Development" class="img-fluid rounded shadow">
                        </div>

                    </div>
                </div>

                <!-- Content Marketing -->
                <div class="row justify-content-center rounded align-items-center mb-5 bg-light p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">Content</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Content Marketing</h3>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3 border-start  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/content-writing.jpg"
                                alt="Content Marketing" class="img-fluid rounded shadow">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <p>Engage and educate your audience through compelling blogs, videos, infographics, and branded
                            storytelling that boosts trust and conversions.</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- =================================================================================== -->
        <section class="py-5 bg-dark text-white">
            <div class="container">
                <div class="head-title text-center">
                    <h2 class=" fw-bold text-white mb-4">Our <span class="text-white">Performance Marketing
                            Services</span>
                    </h2>
                </div>
                <div class="row g-4">

                    <!-- Service Item -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"
                                class="icon-img me-3" />
                            <span>Facebook and Instagram Ads</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google"
                                class="icon-img me-3" />
                            <span>Google & YouTube Ads</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1048/1048953.png" alt="Influencer"
                                class="icon-img me-3" />
                            <span>Influencer Marketing</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/888/888879.png" alt="Poster"
                                class="icon-img me-3" />
                            <span>Creative and Poster Design</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" alt="Web Dev"
                                class="icon-img me-3" />
                            <span>Web Development & Landing Page</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/889/889140.png" alt="Social Media"
                                class="icon-img me-3" />
                            <span>Social Media Management</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/2965/2965567.png" alt="Press"
                                class="icon-img me-3" />
                            <span>Press Release</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1087/1087815.png" alt="Video Editing"
                                class="icon-img me-3" />
                            <span>Video Editing</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Consultation"
                                class="icon-img me-3" />
                            <span>Business Growth Consultation</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================================================================================== -->
        <section class="py-5 projects bg-white">
            <div class="container">
                <div class="head-title mb-5 text-center">
                    <h2>Meet the <span>Client</span> Who Love Our Work</h2>
                    <p>We are a team of passionate professionals dedicated to delivering exceptional results.</p>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                        <div class="client-logo">
                            <img src="<?= $base_url ?>assets/images/client/gensafe.webp" alt="project"
                                class="img-fluid">
                        </div>
                    </div>
                    <!-- Repeat logo blocks as needed -->
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                        <div class="client-logo">
                            <img src="<?= $base_url ?>assets/images/client/skincentre.png" alt="project"
                                class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ================================================================================================ -->
        <section class="py-5 meeting text-center ">
            <div class="container">
                <div class="head-title mb-4">
                    <h2 class="text-white">Book a 1-to-1 Meeting with <span class="text-white">Our Experts</span></h2>
                    <p class="text-white mt-3 mb-4">
                        Get personalized guidance tailored to your business goals. Let’s discuss how our services can
                        bring growth to your brand.
                    </p>
                    <a href="#contact" class="btn btn-light px-4 py-2">
                        Book a Schedule
                    </a>
                </div>
            </div>
        </section>
        <!-- ================================================================================================  -->
        <?php include 'testimonial.php'; ?>
        <!-- =============================================================================================== -->
        <section class="py-5 world bg-dark">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <!-- Left Column -->
                    <div class="col-lg-6 col-md-10 mb-4 mb-lg-0">
                        <div class="head-title">
                            <h2 class="mb-3 fw-bold text-white">Satisfied <span>Clients</span> Around the World</h2>
                            <p class="lead text-white">We’ve proudly served clients in <strong>5+ countries</strong>,
                                delivering quality results across global borders with trust and transparency.</p>
                        </div>
                    </div>

                    <!-- Right Column (Blank for now) -->
                    <div class="col-lg-6 col-md-10">
                        <img src="assets/images/background/map.png" alt="" class="img-fluid">
                    </div>

                </div>
            </div>
        </section>
        <!-- =================================================================================== -->
        <?php include 'faq.php'; ?>
        <!-- ====================================================================================== -->
        <style>
            .latest-blogs .card img {
                height: 250px;
                width: 100%;
                width: 100%;
                object-fit: contain;
                background-color: var(--primary-color);
            }
        </style>
        <section class="py-5 latest-blogs bg-light">
            <div class="container">
                <div class="row">
                    <div class="head-title mb-2">
                        <div class="head-title mb-3">
                            <p>Our Blogs</p>
                            <h2>Latest Blogs</h2>
                        </div>
                        <?php
                        include 'admin/common/config.php';

                        $stmt = $conn->prepare("SELECT slug, cover_title, cover_desc, cover_image, cover_alt, created_at FROM blogs ORDER BY created_at DESC LIMIT 3");
                        $stmt->execute();
                        $result = $stmt->get_result();

                        while ($row = $result->fetch_assoc()) {
                            $slug = urlencode($row['slug']);
                            $coverTitle = htmlspecialchars($row['cover_title']);
                            $coverDesc = $row['cover_desc'];
                            $coverAlt = htmlspecialchars($row['cover_alt']);
                            $coverImage = "admin/uploads/blogs/" . htmlspecialchars($row['cover_image']);
                            $createdAt = date("d M Y", strtotime($row['created_at']));
                            ?>
                            <div class="col-md-4 mb-4">
                                <a href="blogs/<?= $slug; ?>" class="text-decoration-none text-dark">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="<?= $coverImage; ?>" class="card-img-top" alt="<?= $coverAlt; ?>"
                                            title="<?= $coverTitle; ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $coverTitle; ?></h5>
                                            <p class="card-text">
                                                <?= mb_strimwidth($coverDesc, 0, 160, '...'); ?>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-white border-0">
                                            <small class="text-muted">Published on <?= $createdAt; ?></small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- =============================================================================== -->
        <?php include 'contact.php'; ?>
        <!-- =============================================================================== -->
        <?php include 'common/footer.php'; ?>
        <!-- ============================================================================= -->
    </main>
</body>
<!-- Script -->
<script>
    let counterStarted = false;

    function animateCounter(counterElement) {
        const target = +counterElement.getAttribute('data-target');
        const speed = 200; // lower = faster

        const updateCount = () => {
            const current = +counterElement.innerText.replace('+', '');
            const increment = Math.ceil(target / speed);

            if (current < target) {
                counterElement.innerText = `${current + increment}+`;
                setTimeout(updateCount, 20);
            } else {
                counterElement.innerText = `${target}+`;
            }
        };

        updateCount();
    }

    function startCounters() {
        if (counterStarted) return;
        const section = document.getElementById('counter-area');
        const rect = section.getBoundingClientRect();

        if (rect.top <= window.innerHeight - 100) {
            document.querySelectorAll('.counter').forEach(counter => {
                animateCounter(counter);
            });
            counterStarted = true;
        }
    }

    window.addEventListener('scroll', startCounters);
</script>


</html>