<?php
include 'common/config.php';

$slug = trim($_GET['slug'] ?? '', '/');
$pageData = getServicePageDataBySlug($slug);

if (!$pageData) {
    header('HTTP/1.0 404 Not Found');
    $page_title = 'Page Not Found | Coral Web Technology';
    $page_description = 'The requested page could not be found. Explore Coral Web Technology services and location landing pages.';
    $page_keywords = 'page not found, Coral Web Technology, services';
    include 'common/head.php';
    include 'common/header.php';
    echo '<section class="py-5"><div class="container text-center"><h1>404 - Page Not Found</h1><p>The requested service location page does not exist. Please visit our <a href="' . $base_url . '">home page</a> to continue.</p></div></section>';
    include 'common/footer.php';
    exit;
}

$meta = getLocationPageMeta($pageData);
$page_title = $meta['meta_title'];
$page_description = $meta['meta_description'];
$page_keywords = $meta['meta_keywords'];
$page_og_title = $meta['og_title'];
$page_og_description = $meta['og_description'];
$page_og_url = $base_url . ltrim($meta['canonical_url'], '/');
$page_canonical = $page_og_url;

$service_name = $pageData['service_name'];
$city = $pageData['city'];
$keyword = ucwords(strtolower($pageData['keyword']));

$dynContent = getDynamicServiceContent($pageData['service_key'], $city, $service_name);

include 'common/head.php';
include 'common/plugins.php';
?>
<!-- FontAwesome 6 for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<style>
    /* Premium Aesthetic Styles */
    :root {
        --primary-color: #ff4d4d;
        --secondary-color: #000000;
        --bg-light: #f9f9fc;
        --text-dark: #2d3748;
        --text-muted: #718096;
    }
    
    body { font-family: 'Poppins', sans-serif; color: var(--text-dark); overflow-x: hidden; }

    /* Hero Banner */
    .hero-banner {
        background: linear-gradient(135deg, rgba(0,0,0,0.85), rgba(0,0,0,0.7)), url('<?= $base_url ?>assets/images/banner/digital-marketing.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding: 160px 0 100px;
        color: #fff;
        position: relative;
    }
    .hero-banner h1 { font-size: 3.2rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; }
    .hero-banner .lead { font-size: 1.25rem; max-width: 800px; margin: 0 auto; color: #e2e8f0; line-height: 1.6; }
    .hero-banner .tagline { font-size: 1.4rem; font-weight: 600; color: var(--primary-color); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 15px; }
    .hero-banner .breadcrumb { background: rgba(255,255,255,0.1); display: inline-flex; padding: 10px 20px; border-radius: 30px; backdrop-filter: blur(5px); }
    .hero-banner .breadcrumb a { color: #fff; text-decoration: none; font-weight: 500; transition: color 0.3s; }
    .hero-banner .breadcrumb a:hover { color: var(--primary-color); }
    .hero-banner .breadcrumb-item.active { color: var(--primary-color); }
    .hero-banner .breadcrumb-item + .breadcrumb-item::before { color: #fff; }

    /* Section Headings */
    .section-title { font-size: 2.3rem; font-weight: 700; margin-bottom: 20px; color: var(--secondary-color); position: relative; padding-bottom: 15px; }
    .section-title::after { content: ''; position: absolute; left: 0; bottom: 0; width: 60px; height: 4px; background: var(--primary-color); border-radius: 2px; }
    .text-center .section-title::after { left: 50%; transform: translateX(-50%); }

    /* About Section */
    .about-section { padding: 80px 0; background: #fff; }
    .about-content p { font-size: 1.1rem; line-height: 1.8; color: var(--text-muted); margin-bottom: 20px; }
    .about-image { border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); transition: transform 0.4s; }
    .about-image:hover { transform: translateY(-10px); }

    /* Services / Why Choose Us */
    .services-section { padding: 80px 0; background: var(--bg-light); }
    .service-card { background: #fff; padding: 40px 30px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.03); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); border-bottom: 4px solid transparent; height: 100%; border-top: 1px solid rgba(0,0,0,0.02); }
    .service-card:hover { transform: translateY(-12px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); border-color: var(--primary-color); }
    .service-card .icon-box { width: 70px; height: 70px; background: rgba(255, 77, 77, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: var(--primary-color); font-size: 28px; transition: all 0.3s; }
    .service-card:hover .icon-box { background: var(--primary-color); color: #fff; transform: scale(1.1) rotate(10deg); }
    .service-card h3 { font-size: 1.35rem; font-weight: 600; margin-bottom: 15px; color: var(--secondary-color); }
    .service-card p { color: var(--text-muted); line-height: 1.7; margin: 0; font-size: 0.98rem; }

    /* Features Section */
    .features-section { padding: 80px 0; background: #fff; }
    .features-card { background: #f9f9fc; padding: 50px 40px; border-radius: 24px; box-shadow: 0 10px 35px rgba(0,0,0,0.02); border: 1px solid rgba(0,0,0,0.04); }
    .feature-list-item { display: flex; align-items: flex-start; margin-bottom: 20px; font-size: 1.05rem; }
    .feature-list-item i { color: var(--primary-color); font-size: 1.25rem; margin-right: 15px; margin-top: 4px; }

    /* Process Section */
    .process-section { padding: 80px 0; background: var(--bg-light); }
    .process-step { position: relative; text-align: center; padding: 30px; }
    .process-step .step-num { width: 80px; height: 80px; background: #fff; border: 2px dashed var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: 700; color: var(--primary-color); margin: 0 auto 20px; transition: all 0.4s; }
    .process-step:hover .step-num { background: var(--primary-color); color: #fff; border-style: solid; transform: scale(1.1); box-shadow: 0 10px 20px rgba(255,77,77,0.3); }
    .process-step h4 { font-weight: 600; font-size: 1.3rem; margin-bottom: 10px; }
    .process-step p { color: var(--text-muted); font-size: 0.95rem; }

    /* FAQ Section */
    .faq-section { padding: 80px 0; background: #fff; }
    .accordion-item { border: none; background: #fff; border-radius: 12px !important; margin-bottom: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); overflow: hidden; border: 1px solid rgba(0,0,0,0.04); }
    .accordion-button { padding: 20px 25px; font-weight: 600; font-size: 1.1rem; color: var(--text-dark); background: transparent; box-shadow: none !important; }
    .accordion-button:not(.collapsed) { color: var(--primary-color); background: rgba(255, 77, 77, 0.02); }
    .accordion-button::after { background-size: 1.2rem; transition: transform 0.3s; }
    .accordion-body { padding: 0 25px 25px; color: var(--text-muted); line-height: 1.7; }

    /* Contact CTA Section */
    .cta-section { padding: 80px 0; background: linear-gradient(135deg, var(--secondary-color), #2d3748); color: #fff; text-align: center; }
    .cta-section h2 { font-size: 2.8rem; font-weight: 700; margin-bottom: 20px; }
    .cta-section p { font-size: 1.2rem; margin-bottom: 40px; color: #cbd5e0; }
    .btn-premium { background: var(--primary-color); color: #fff; padding: 15px 40px; border-radius: 50px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s; border: none; text-transform: uppercase; letter-spacing: 1px; box-shadow: 0 10px 20px rgba(255,77,77,0.3); text-decoration: none; display: inline-block; }
    .btn-premium:hover { background: #e63939; color: #fff; transform: translateY(-3px); box-shadow: 0 15px 25px rgba(255,77,77,0.4); }

    /* We Serve Across India */
    .serve-across-india { padding: 80px 0; background: #fff; border-top: 1px solid #edf2f7; }
    .serve-across-india .location-card { background: #fff; border: 1px solid #edf2f7; border-radius: 12px; padding: 15px 20px; transition: all 0.3s ease; text-align: center; }
    .serve-across-india .location-card:hover { border-color: var(--primary-color); box-shadow: 0 10px 20px rgba(0,0,0,0.05); transform: translateY(-3px); }
    .serve-across-india .location-link { color: var(--text-dark); text-decoration: none; font-weight: 500; display: block; font-size: 0.95rem; }
    .serve-across-india .location-card:hover .location-link { color: var(--primary-color); }
</style>

<body>
    <?php include 'common/header.php'; ?>

    <!-- Hero Banner -->
    <section class="hero-banner text-center">
        <div class="container">
            <nav aria-label="breadcrumb" data-aos="fade-down" data-aos-duration="800">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($keyword) ?></li>
                </ol>
            </nav>
            <div class="tagline" data-aos="fade-up" data-aos-duration="800"><?= htmlspecialchars($dynContent['tagline']) ?></div>
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"><?= htmlspecialchars($keyword) ?></h1>
            <p class="lead" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <?= htmlspecialchars($dynContent['intro']) ?>
            </p>
            <div class="mt-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <a href="<?= $base_url ?>contact-us.php" class="btn btn-premium">Get a Free Consultation</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="section-title">Leading <?= htmlspecialchars($service_name) ?> in <?= htmlspecialchars($city) ?></h2>
                    <div class="about-content mt-4">
                        <p>At Coral Web Technology, we specialize in delivering state-of-the-art <strong><?= htmlspecialchars($service_name) ?></strong> solutions for businesses across <strong><?= htmlspecialchars($city) ?></strong>. Our team of experts combines innovative strategies with industry best practices to help you stand out in a competitive digital landscape.</p>
                        <p>Whether you're a startup looking to establish your brand or an enterprise aiming to scale, our customized approach ensures that your goals are met with precision and excellence. We don't just deliver services; we build long-term partnerships focused on your success.</p>
                        <ul class="list-unstyled mt-4" style="line-height: 2.2;">
                            <li><i class="fa fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i> Result-driven strategies tailored for <?= htmlspecialchars($city) ?> markets</li>
                            <li><i class="fa fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i> Experienced and dedicated team of professionals</li>
                            <li><i class="fa fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i> Transparent communication and reporting</li>
                            <li><i class="fa fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i> 100% satisfaction and quality guarantee</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="position-relative">
                        <img src="<?= $base_url ?>assets/images/about/about-2.jpg" alt="<?= htmlspecialchars($keyword) ?>" class="img-fluid about-image w-100" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80'">
                        <div class="position-absolute" style="bottom: -30px; left: -30px; background: #fff; padding: 20px; border-radius: 15px; box-shadow: 0 15px 30px rgba(0,0,0,0.1); z-index: 2;">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0" style="color: var(--primary-color); font-weight: 800; font-size: 2.5rem; margin-right: 15px;">5+</h3>
                                <p class="mb-0" style="font-weight: 600; line-height: 1.2;">Years of<br>Excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="services-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title"><?= htmlspecialchars($dynContent['why_choose_title']) ?></h2>
                <p class="text-muted mt-3"><?= htmlspecialchars($dynContent['why_choose_intro']) ?></p>
            </div>
            <div class="row g-4">
                <?php foreach ($dynContent['why_choose_cards'] as $index => $card): ?>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
                        <div class="service-card">
                            <div class="icon-box">
                                <i class="fa <?= htmlspecialchars($card['icon']) ?>"></i>
                            </div>
                            <h3><?= htmlspecialchars($card['title']) ?></h3>
                            <p><?= htmlspecialchars($card['text']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Sub-Services Section -->
    <section class="features-section" style="background: #fff;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title"><?= htmlspecialchars($dynContent['sub_services_title']) ?></h2>
                <p class="text-muted mt-3">Choose from our comprehensive suite of professional solutions.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($dynContent['sub_services'] as $index => $ss): 
                    $icon_class = 'fa-solid';
                    if (in_array($ss['icon'], ['fa-android', 'fa-apple', 'fa-wordpress', 'fa-wordpress-simple'])) {
                        $icon_class = 'fa-brands';
                    }
                ?>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
                        <div class="service-card" style="background: #f9f9fc;">
                            <div class="icon-box" style="background: rgba(255, 77, 77, 0.05);">
                                <i class="<?= $icon_class ?> <?= htmlspecialchars($ss['icon']) ?>"></i>
                            </div>
                            <h3><?= htmlspecialchars($ss['title']) ?></h3>
                            <p><?= htmlspecialchars($ss['text']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Features Highlight Section (Make the Most of...) -->
    <section class="services-section">
        <div class="container">
            <div class="features-card" data-aos="fade-up">
                <div class="text-center mb-5">
                    <h2 class="section-title"><?= htmlspecialchars($dynContent['features_title']) ?></h2>
                    <p class="text-muted mt-3"><?= htmlspecialchars($dynContent['features_intro']) ?></p>
                </div>
                <div class="row g-3">
                    <?php foreach ($dynContent['features_list'] as $feature): ?>
                        <div class="col-md-6">
                            <div class="feature-list-item">
                                <i class="fa-solid fa-circle-check"></i>
                                <span><?= htmlspecialchars($feature) ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section" style="background: #fff;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our Proven Process</h2>
                <p class="text-muted mt-3">A streamlined approach to ensure project success from start to finish.</p>
            </div>
            <div class="row position-relative z-1">
                <div class="d-none d-lg-block position-absolute" style="top: 55px; left: 10%; right: 10%; height: 2px; background: #edf2f7; z-index: -1;"></div>
                
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="process-step">
                        <div class="step-num">01</div>
                        <h4>Discovery</h4>
                        <p>We start by understanding your brand, goals, and the <?= htmlspecialchars($city) ?> audience.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="process-step">
                        <div class="step-num">02</div>
                        <h4>Strategy</h4>
                        <p>Developing a customized roadmap tailored for your specific <?= htmlspecialchars($service_name) ?> needs.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="process-step">
                        <div class="step-num">03</div>
                        <h4>Execution</h4>
                        <p>Our expert team gets to work, implementing the strategy with precision and care.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="process-step">
                        <div class="step-num">04</div>
                        <h4>Optimization</h4>
                        <p>Continuous monitoring, testing, and refinement to maximize your ROI.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" style="background: var(--bg-light);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                    <h2 class="section-title text-start">Frequently Asked Questions</h2>
                    <p class="text-muted mt-4 mb-4">Have questions about our <?= htmlspecialchars($service_name) ?> services in <?= htmlspecialchars($city) ?>? We've got answers. If you need more information, feel free to reach out to our support team.</p>
                    <a href="<?= $base_url ?>contact-us.php" class="btn btn-premium" style="padding: 12px 30px; font-size: 1rem;">Contact Support</a>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="accordion" id="faqAccordion">
                        <?php foreach ($dynContent['faqs'] as $index => $faq): 
                            $collapseId = "collapse" . $index;
                            $headingId = "heading" . $index;
                            $showClass = ($index === 0) ? 'show' : '';
                            $collapsedClass = ($index === 0) ? '' : 'collapsed';
                            $expandedVal = ($index === 0) ? 'true' : 'false';
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="<?= $headingId ?>">
                                    <button class="accordion-button <?= $collapsedClass ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>" aria-expanded="<?= $expandedVal ?>" aria-controls="<?= $collapseId ?>">
                                        <?= htmlspecialchars($faq['question']) ?>
                                    </button>
                                </h2>
                                <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $showClass ?>" aria-labelledby="<?= $headingId ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <?= htmlspecialchars($faq['answer']) ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000">
            <h2>Ready to Dominate the <?= htmlspecialchars($city) ?> Market?</h2>
            <p>Partner with the top-rated <?= htmlspecialchars($service_name) ?> experts today and start your journey towards digital excellence.</p>
            <a href="<?= $base_url ?>contact-us.php" class="btn btn-premium bg-white text-dark">Get Started Now</a>
        </div>
    </section>

    <!-- Dynamic We Serve Across India Section -->
    <?php renderServiceLocationsSection($pageData['service_key'], $base_url); ?>

    <?php include 'common/footer.php'; ?>

    <!-- AOS Animation Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 50,
            duration: 800,
            easing: 'ease-in-out-cubic',
        });
    </script>
</body>
</html>
