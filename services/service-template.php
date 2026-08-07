<?php
// Prevent direct access
if (!defined('SERVICE_TEMPLATE_LOADED')) {
    exit('Direct access not allowed.');
}

// Set SEO meta variables for head.php
$page_title = $service['meta_title'];
$page_description = $service['meta_description'];
$page_keywords = $service['meta_keywords'];
$page_og_title = $service['og_title'] ?? $service['meta_title'];
$page_og_description = $service['og_description'] ?? $service['meta_description'];
$page_og_image = $service['og_image'] ?? ($base_url . "assets/images/servicess/" . $service['hero_img']);
$page_canonical = $base_url . "services/" . $service['key'] . "/";

// Dynamically generate a 3rd about paragraph if only 2 are provided
$about_paragraphs = $service['about_desc'] ?? [];
if (count($about_paragraphs) < 3) {
    $about_paragraphs[] = "As a leading digital partner, Coral Web Technology combines technical expertise with market intelligence to execute strategies that deliver results. We continuously optimize our systems, track key performances, and scale layouts to ensure your business stays ahead of the competition.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../../common/config.php'; ?>
    <?php include '../../common/head.php'; ?>
    <?php include '../../common/plugins.php'; ?>
    <!-- Custom Premium Services CSS -->
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/services.css?v=<?= APP_VERSION ?>">
    
    <!-- Schema Markup -->
    <?php if (isset($service['schema_json'])): ?>
    <script type="application/ld+json">
    <?= json_encode($service['schema_json'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
    </script>
    <?php endif; ?>
</head>
<body class="srv-body">
    <?php include '../../common/header.php'; ?>

    <!-- 1. HERO SECTION REDESIGN -->
    <section class="hero-wrapper">
        <div class="hero-shape hero-shape-1"></div>
        <div class="hero-shape hero-shape-2"></div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <!-- Breadcrumb -->
                    <div class="srv-breadcrumb">
                        <a href="<?= $base_url ?>">Home</a>
                        <span>/</span>
                        <a href="<?= $base_url ?>#services">Services</a>
                        <span>/</span>
                        <span style="color: var(--srv-secondary);"><?= htmlspecialchars($service['title']) ?></span>
                    </div>
                    
                    <h1 class="display-5 font-weight-bold mb-3"><?= $service['hero_title'] ?></h1>
                    <p class="lead mb-4"><?= $service['hero_desc'] ?></p>
                    
                    <!-- Fixed Redesigned Bullet Points -->
                    <div class="hero-bullets">
                        <div class="hero-bullet-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Increase Online Visibility</span>
                        </div>
                        <div class="hero-bullet-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Generate Quality Leads</span>
                        </div>
                        <div class="hero-bullet-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Improve Business Growth</span>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#cta-section" class="srv-btn srv-btn-primary" aria-label="Book Free Consultation">
                            Get Free Consultation <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="tel:+919117741984" class="srv-btn srv-btn-outline" id="call-now-btn" aria-label="Call Coral Web Technology Now">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 hero-img-container" data-aos="fade-left">
                    <img src="<?= $base_url ?>assets/images/servicess/<?= $service['hero_img'] ?>" 
                         alt="<?= htmlspecialchars($service['title']) ?> Hero Image" 
                         width="600" height="400" loading="eager">
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ABOUT SERVICE SECTION -->
    <section class="srv-section about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 about-image-wrapper" data-aos="slide-left">
                    <img src="<?= $base_url ?>assets/images/servicess/<?= $service['hero_img'] ?>" 
                         alt="Grow Business With <?= htmlspecialchars($service['title']) ?>" 
                         class="img-fluid" width="600" height="450" loading="lazy">
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-up">
                    <span class="about-badge">About Service</span>
                    <h2 class="about-title">Grow Your Business With Our <?= htmlspecialchars($service['title']) ?> Experts</h2>
                    
                    <?php foreach ($about_paragraphs as $paragraph): ?>
                        <p class="about-desc"><?= $paragraph ?></p>
                    <?php endforeach; ?>
                    
                    <div class="about-benefits-list">
                        <?php 
                        $benefits_checks = $service['about_features'] ?? ['Result-Oriented Work', 'Expert Consultants', 'Comprehensive Support', 'Fast Implementations'];
                        foreach ($benefits_checks as $feat): 
                        ?>
                            <div class="about-benefit-item">
                                <i class="bi bi-patch-check-fill"></i>
                                <span><?= htmlspecialchars($feat) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <a href="#cta-section" class="srv-btn srv-btn-primary about-cta-btn" aria-label="Start Your Project Now">
                        Get Started Now <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SERVICE FEATURE SECTION -->
    <section class="srv-section features-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 data-aos="fade-up">Key Capabilities & Features</h2>
                <p data-aos="fade-up" data-aos-delay="100">Explore the advanced technical features and strategic capabilities we deploy to ensure project success.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($service['features'] as $idx => $feat): ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $idx * 100 ?>">
                    <div class="feature-grid-card">
                        <div class="feature-grid-icon-wrapper">
                            <i class="bi <?= htmlspecialchars($feat['icon']) ?>"></i>
                        </div>
                        <h3><?= htmlspecialchars($feat['title']) ?></h3>
                        <p><?= htmlspecialchars($feat['desc']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 4. WHY CHOOSE CORAL WEB TECHNOLOGY -->
    <section class="srv-section why-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 pr-lg-5" data-aos="fade-right">
                    <div class="section-header m-0 mb-4 text-start">
                        <h2>Why Choose Coral Web Technology?</h2>
                        <p>We are a results-driven agency committed to building high-performance solutions that elevate your business, maximize online leads, and scale your brand identity.</p>
                    </div>
                    
                    <ul class="why-bullets-list">
                        <li class="why-bullet-item"><i class="bi bi-check-square-fill"></i> Expert Team - Certified professionals dedicated to your niche.</li>
                        <li class="why-bullet-item"><i class="bi bi-check-square-fill"></i> Result Oriented Work - Absolute focus on client ROI and conversions.</li>
                        <li class="why-bullet-item"><i class="bi bi-check-square-fill"></i> Modern Technology - We use high-speed, secure, and modern tech stacks.</li>
                        <li class="why-bullet-item"><i class="bi bi-check-square-fill"></i> Affordable Pricing - Competitive packaging built for business growth.</li>
                        <li class="why-bullet-item"><i class="bi bi-check-square-fill"></i> Customer Support - Seamless communications and proactive maintenance.</li>
                    </ul>
                    
                    <!-- Redesigned Counters -->
                    <div class="why-stats-row">
                        <div class="stat-box">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">30+</div>
                            <div class="stat-label">Happy Clients</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">5+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="why-right-card">
                        <h3>We Build For Growth</h3>
                        <p class="mb-3">We help organizations transform their digital landscapes by planning, executing, and scaling customer-acquisition funnels that align with core operational goals.</p>
                        <p>Our team works round the clock to ensure your website, mobile app, or search marketing campaign operates at 100% capacity, giving your business the platform it needs to succeed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. OUR WORK PROCESS REDESIGN -->
    <section class="srv-section process-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 data-aos="fade-up">Our Proven Work Process</h2>
                <p data-aos="fade-up" data-aos-delay="100">We deploy a highly structured, conversion-centric work process to ensure seamless campaign execution and deployment.</p>
            </div>
            
            <div class="process-timeline">
                <?php
                // Redesigned timeline steps matching the user request
                $redesigned_steps = [
                    ['badge' => 'Step 01', 'title' => 'Research', 'desc' => 'We perform competitor analysis, keyword planning, and target market profiling to map out a clear roadmap.'],
                    ['badge' => 'Step 02', 'title' => 'Planning', 'desc' => 'We outline content themes, establish campaign structures, choose tools, and outline delivery guidelines.'],
                    ['badge' => 'Step 03', 'title' => 'Implementation', 'desc' => 'Our developers write clean code or our marketers activate campaigns using conversion-focused layouts.'],
                    ['badge' => 'Step 04', 'title' => 'Optimization', 'desc' => 'We monitor speed performance, check tracking tags, block negative terms, and adjust layouts.'],
                    ['badge' => 'Step 05', 'title' => 'Growth Report', 'desc' => 'We deliver detailed analytics, showing impressions, conversions, clicks, and outline next scaling stages.']
                ];
                
                foreach ($redesigned_steps as $idx => $step):
                ?>
                <div class="process-step-row">
                    <div class="process-timeline-card" data-aos="<?= $idx % 2 == 0 ? 'fade-right' : 'fade-left' ?>">
                        <span class="process-badge"><?= $step['badge'] ?></span>
                        <h3><?= htmlspecialchars($step['title']) ?></h3>
                        <p><?= htmlspecialchars($step['desc']) ?></p>
                    </div>
                    <div class="process-timeline-node">0<?= $idx + 1 ?></div>
                    <div class="process-timeline-spacer"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 6. TOOLS / TECHNOLOGY SECTION (NEW) -->
    <?php
    // Determine category based on service key to render appropriate logos
    $mkt_keys = ['digital-marketing', 'seo-service', 'social-media-marketing', 'ppc-marketing', 'google-ads', 'facebook-instagram-ads', 'youtube-ads'];
    $app_keys = ['mobile-app-development', 'android-app-development', 'ios-app-development'];
    
    if (in_array($service['key'], $mkt_keys)) {
        $tech_type = 'Marketing Tools';
        $logos = [
            ['name' => 'Google Ads', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #4285F4;"><path d="M16 2.012H8C7.4 2.012 7 2.412 7 3.012v8h10v-8c0-.6-.4-1-1-1zm-1 8h-6v-6h6v6zM22 13.012h-8c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-8c0-.6-.4-1-1-1zm-1 8h-6v-6h6v6zM10 13.012H2c-.6 0-1 .4-1 1v8c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-8c0-.6-.4-1-1-1zm-1 8H3v-6h6v6z"/></svg>'],
            ['name' => 'Google Analytics', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #E37400;"><path d="M12 2A10 10 0 1 0 22 12A10 10 0 0 0 12 2zm1 17.93V13h5.93a8 8 0 0 1-5.93 6.93zM13 11V4.07a8 8 0 0 1 5.93 6.93zm-2-6.93V11H4.07a8 8 0 0 1 5.93-6.93zm0 15.86a8 8 0 0 1-5.93-6.93H11z"/></svg>'],
            ['name' => 'Meta Ads', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #0668E1;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15.92c-3.13-.47-5.5-3.32-5.5-6.67 0-3.73 3.02-6.75 6.75-6.75s6.75 3.02 6.75 6.75c0 3.35-2.37 6.2-5.5 6.67v-2.02c2.03-.44 3.5-2.29 3.5-4.65 0-2.62-2.13-4.75-4.75-4.75S8.25 9.38 8.25 12c0 2.36 1.47 4.21 3.5 4.65v2.02z"/></svg>'],
            ['name' => 'Search Console', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #34A853;"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>'],
            ['name' => 'SEMrush', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #FF6600;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 14.5h-2v-2h2zm0-4h-2v-4h2z"/></svg>']
        ];
    } else if (in_array($service['key'], $app_keys)) {
        $tech_type = 'Development Stacks';
        $logos = [
            ['name' => 'Flutter', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #02569B;"><path d="M14.3 2.3L5 11.6l4.7 4.7 9.3-9.3zM21.7 9.7L12.4 19l4.7 4.7 9.3-9.3z"/></svg>'],
            ['name' => 'React Native', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #61DAFB;"><path d="M12 2A10 10 0 1 0 22 12A10 10 0 0 0 12 2zm1 14.93V12h3.93a5 5 0 0 1-3.93 4.93zM13 10V5.07a5 5 0 0 1 3.93 4.93zm-2-4.93V10H6.07a5 5 0 0 1 5.93-4.93zm0 13.86a5 5 0 0 1-5.93-4.93H11z"/></svg>'],
            ['name' => 'Swift', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #FA7323;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.5 12.5c-.8 0-1.5-.5-1.8-1.2l-1.7-4.1-1.7 4.1c-.3.7-1 1.2-1.8 1.2H7.5v-2h2c.3 0 .5-.2.6-.4l2.4-5.8c.2-.5.7-.8 1.2-.8s1 .3 1.2.8l2.4 5.8c.1.2.3.4.6.4h2v2h-2z"/></svg>'],
            ['name' => 'Kotlin', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #7F52FF;"><path d="M2 2h20v20H2zM12 12L2 22h20z"/></svg>'],
            ['name' => 'Firebase', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #FFCA28;"><path d="M12 2A10 10 0 1 0 22 12A10 10 0 0 0 12 2zm1 14.5h-2v-2h2zm0-4h-2v-4h2z"/></svg>']
        ];
    } else {
        $tech_type = 'Technology Stacks';
        $logos = [
            ['name' => 'HTML5', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #E34F26;"><path d="M12 2L2 22h20zm0 3l7.5 14H4.5zM11 14h2v2h-2zm0-6h2v4h-2z"/></svg>'],
            ['name' => 'CSS3', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #1572B6;"><path d="M12 2A10 10 0 1 0 22 12A10 10 0 0 0 12 2zm3.93 11H8.07a4 4 0 0 1 3.93-3.93h3.93z"/></svg>'],
            ['name' => 'React', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #61DAFB;"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm-3-9h6v2H9z"/></svg>'],
            ['name' => 'PHP', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #777BB4;"><path d="M12 2A10 10 0 1 0 22 12A10 10 0 0 0 12 2zm3 12h-2v-2h2zm-4 0H9v-2h2zm2-4h-4v-2h4z"/></svg>'],
            ['name' => 'WordPress', 'svg' => '<svg viewBox="0 0 24 24" width="36" height="36" fill="currentColor" style="color: #21759B;"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 1.5a8.5 8.5 0 0 1 5.2 15.2L12 8.3l-5.2 10.4A8.5 8.5 0 0 1 12 3.5z"/></svg>']
        ];
    }
    ?>
    <section class="tech-slider-section text-center">
        <div class="container">
            <h3>Technologies & Tools We Leverage</h3>
            <div class="tech-slider">
                <!-- Double the track items for seamless infinite scroll effect -->
                <div class="tech-track">
                    <?php for($i = 0; $i < 2; $i++): ?>
                        <?php foreach ($logos as $logo): ?>
                            <div class="tech-logo-item" title="<?= htmlspecialchars($logo['name']) ?>">
                                <?= $logo['svg'] ?>
                                <span class="ms-2 fw-semibold text-muted" style="font-size: 0.95rem;"><?= htmlspecialchars($logo['name']) ?></span>
                            </div>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FAQ SECTION accordion -->
    <section class="srv-section faq-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 data-aos="fade-up">Frequently Asked Questions</h2>
                <p data-aos="fade-up" data-aos-delay="100">Got questions? We have compiled clear answers to the most common queries about this service.</p>
            </div>
            <div class="faq-accordion-wrapper">
                <div class="accordion" id="serviceFaqAccordion">
                    <?php foreach ($service['faqs'] as $idx => $faq): ?>
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="<?= $idx * 50 ?>">
                        <h3 class="accordion-header" id="heading<?= $idx ?>">
                            <button class="accordion-button <?= $idx === 0 ? '' : 'collapsed' ?>" type="button" 
                                    data-bs-toggle="collapse" data-bs-target="#collapse<?= $idx ?>" 
                                    aria-expanded="<?= $idx === 0 ? 'true' : 'false' ?>" aria-controls="collapse<?= $idx ?>">
                                <span><?= htmlspecialchars($faq['q']) ?></span>
                            </button>
                        </h3>
                        <div id="collapse<?= $idx ?>" class="accordion-collapse collapse <?= $idx === 0 ? 'show' : '' ?>" 
                             aria-labelledby="heading<?= $idx ?>" data-bs-parent="#serviceFaqAccordion">
                            <div class="accordion-body">
                                <?= $faq['a'] ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. CTA SECTION REDESIGN -->
    <section class="final-cta-section" id="cta-section">
        <div class="cta-mesh"></div>
        <div class="container cta-container" data-aos="zoom-in">
            <h2>Ready To Grow Your Business?</h2>
            <p>Let's create something amazing together. Speak to our specialists today to map out your custom growth blueprints.</p>
            <a href="<?= $base_url ?>contact-us.php" class="srv-btn cta-btn-start" aria-label="Start Your Project">
                Start Your Project <i class="bi bi-arrow-right-short"></i>
            </a>
        </div>
    </section>

    <!-- Dynamic Location Section for SEO Coverage -->
    <?php 
    if (function_exists('renderServiceLocationsSection') && isset($service['location_key'])) { 
        renderServiceLocationsSection($service['location_key'], $base_url); 
    } 
    ?>

    <?php include '../../common/footer.php'; ?>
</body>
</html>
