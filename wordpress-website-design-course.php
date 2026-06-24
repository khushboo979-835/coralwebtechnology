<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <title>WordPress Website Design Course in Patna | Coral Web Technology</title>
    <meta name="description" content="Learn WordPress Website Design Course in Patna at Coral Web Technology. Master WordPress, Elementor, WooCommerce & build professional business websites. 100% practical with job placement." />
    <meta name="keywords" content="WordPress course Patna, WordPress website design training, Elementor course Patna, WooCommerce training Bihar, WordPress developer course Patna" />
    <meta property="og:title" content="WordPress Website Design Course in Patna | Coral Web Technology" />
    <meta property="og:description" content="Design professional WordPress websites with Elementor & WooCommerce at Coral Web Technology Patna. Start freelancing from day one." />
</head>
<body>
    <?php include 'common/header.php'; ?>

    <style>
        .course-hero { background: linear-gradient(135deg, #1a1033 0%, #21759b 50%, #0f172a 100%); padding: 100px 0 70px; position: relative; overflow: hidden; }
        .wp-particles { position: absolute; inset: 0; overflow: hidden; pointer-events: none; }
        .wp-particles span { position: absolute; width: 40px; height: 40px; background: rgba(255,255,255,.05); border-radius: 8px; animation: wp-float 6s infinite ease-in-out; }
        .wp-particles span:nth-child(1) { top: 10%; left: 10%; animation-delay: 0s; }
        .wp-particles span:nth-child(2) { top: 60%; left: 20%; animation-delay: 1s; width: 60px; height: 60px; }
        .wp-particles span:nth-child(3) { top: 20%; right: 15%; animation-delay: 2s; width: 50px; height: 50px; }
        .wp-particles span:nth-child(4) { bottom: 20%; right: 25%; animation-delay: 3s; }
        @keyframes wp-float { 0%,100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-15px) rotate(10deg); } }
        .course-hero h1 { color: #fff; font-size: clamp(2rem,5vw,3.5rem); font-weight: 800; }
        .course-hero h1 span { background: linear-gradient(90deg,#21759b,#d54e21); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .course-hero p.lead { color: rgba(255,255,255,.85); }
        .hero-stat { background: rgba(255,255,255,.1); border: 1px solid rgba(33,117,155,.4); border-radius: 12px; padding: 14px 20px; text-align: center; transition: all .3s ease; }
        .hero-stat:hover { background: rgba(33,117,155,.2); transform: translateY(-3px); }
        .hero-stat .stat-num { font-size: 1.6rem; font-weight: 800; color: #5bc0de; }
        .hero-stat .stat-label { font-size: 12px; color: rgba(255,255,255,.75); margin: 0; }
        .btn-enroll { background: linear-gradient(135deg,#21759b,#d54e21); color: #fff; font-weight: 700; padding: 14px 36px; border-radius: 50px; border: none; font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-enroll:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(33,117,155,.4); color: #fff; }
        .btn-demo { background: transparent; color: #fff; font-weight: 600; padding: 14px 36px; border-radius: 50px; border: 2px solid rgba(91,192,222,.5); font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-demo:hover { border-color: #5bc0de; background: rgba(91,192,222,.1); color: #fff; }
        .overview-card { background: #fff; border-radius: 16px; padding: 28px; box-shadow: 0 4px 20px rgba(0,0,0,.06); border-left: 4px solid #21759b; transition: transform .3s ease; }
        .overview-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(33,117,155,.12); }
        .overview-card .icon-wrap { width: 54px; height: 54px; background: linear-gradient(135deg,#21759b,#d54e21); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #fff; margin-bottom: 14px; }
        .module-card { border: 1px solid #e5e7f0; border-radius: 14px; overflow: hidden; transition: all .3s ease; }
        .module-card:hover { box-shadow: 0 8px 30px rgba(33,117,155,.12); transform: translateY(-4px); }
        .module-card .module-header { background: linear-gradient(135deg,#21759b,#1a1033); color: #fff; padding: 16px 20px; }
        .module-card .module-header .num { width: 32px; height: 32px; background: rgba(255,255,255,.2); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; margin-right: 10px; }
        .module-card .module-body { padding: 16px 20px; }
        .module-card .module-body ul { list-style: none; padding: 0; margin: 0; }
        .module-card .module-body ul li { padding: 5px 0; color: #444; font-size: 14px; border-bottom: 1px dashed #eee; }
        .module-card .module-body ul li:last-child { border: none; }
        .module-card .module-body ul li::before { content: '✓'; color: #21759b; font-weight: 700; margin-right: 8px; }
        .why-section { background: linear-gradient(135deg,#1a1033,#0f172a); }
        .why-item { background: rgba(255,255,255,.07); border: 1px solid rgba(33,117,155,.25); border-radius: 14px; padding: 24px; text-align: center; transition: all .3s ease; }
        .why-item:hover { background: rgba(33,117,155,.1); transform: translateY(-5px); }
        .why-item .wi-icon { font-size: 2.2rem; margin-bottom: 12px; display: block; }
        .why-item h5 { color: #5bc0de; font-weight: 700; margin-bottom: 8px; }
        .why-item p { color: rgba(255,255,255,.78); font-size: 14px; margin: 0; }
        .faq-section .accordion-button:not(.collapsed) { background: #e8f4f8; color: #21759b; font-weight: 600; }
        .faq-section .accordion-button:focus { box-shadow: none; }
        .cta-section { background: linear-gradient(135deg,#21759b,#d54e21); }
        .other-course-card { background: #fff; border-radius: 14px; overflow: hidden; border: 1px solid #e5e7f0; transition: all .3s ease; text-decoration: none; }
        .other-course-card:hover { box-shadow: 0 8px 30px rgba(33,117,155,.12); transform: translateY(-5px); }
        .other-course-card .oc-icon { background: linear-gradient(135deg,#21759b,#1a1033); padding: 24px; text-align: center; font-size: 2.5rem; }
        .other-course-card .oc-body { padding: 16px; }
        .other-course-card .oc-body h6 { color: #1a1a3e; font-weight: 700; margin: 0; }
        .section-title { font-weight: 800; font-size: clamp(1.6rem,3vw,2.2rem); color: #1a1a3e; }
        .section-title span { color: #21759b; }
        .location-badge { background: rgba(33,117,155,.1); border: 1px solid rgba(33,117,155,.3); border-radius: 50px; padding: 8px 20px; color: #5bc0de; font-size: 13px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 16px; }
        .pulse-dot { width: 8px; height: 8px; background: #5bc0de; border-radius: 50%; animation: pulse 1.5s infinite; }
        @keyframes pulse { 0%,100% { transform: scale(1); } 50% { transform: scale(1.5); opacity: 0.6; } }
        .wp-plugin-badge { background: #fff; border: 2px solid #e0eaf0; border-radius: 10px; padding: 12px 16px; text-align: center; font-size: 13px; font-weight: 600; color: #21759b; transition: all .3s; }
        .wp-plugin-badge:hover { border-color: #21759b; box-shadow: 0 4px 15px rgba(33,117,155,.12); transform: translateY(-3px); }
    </style>

    <!-- HERO -->
    <section class="course-hero">
        <div class="wp-particles"><span></span><span></span><span></span><span></span></div>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="location-badge"><div class="pulse-dot"></div>📍 Patna, Bihar | Coral Web Technology</div>
                    <span class="d-inline-block mb-3 px-4 py-2 rounded-pill text-white fw-500" style="background:rgba(33,117,155,.2);border:1px solid rgba(91,192,222,.3);font-size:13px">🌐 Professional Design Course</span>
                    <h1 class="mb-3">WordPress <span>Website Design Course</span></h1>
                    <p class="lead mb-4">Build stunning professional websites without coding! Master WordPress, Elementor, WooCommerce & popular plugins. Create business websites, blogs & online stores — perfect for freelancing.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">10+</div><p class="stat-label">Modules</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">100%</div><p class="stat-label">Practical</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">4+</div><p class="stat-label">Projects</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">EMI</div><p class="stat-label">Available</p></div></div>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?php echo $base_url; ?>schedule-meeting.php" class="btn-enroll">Enroll Now →</a>
                        <a href="tel:+919117741984" class="btn-demo">📞 Call: +91 9117741984</a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="p-4" style="background:rgba(33,117,155,.1);border-radius:20px;border:1px solid rgba(91,192,222,.2)">
                        <h5 class="text-white mb-3">📋 Quick Enquiry</h5>
                        <form class="whatsapp-form" id="whatsappForm">
                            <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="border-radius:10px;padding:12px 16px;"></div>
                            <div class="mb-3"><input type="tel" name="phone" class="form-control" placeholder="Phone Number" required style="border-radius:10px;padding:12px 16px;"></div>
                            <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Email Address" style="border-radius:10px;padding:12px 16px;"></div>
                            <div class="mb-3">
                                <select name="course" class="form-select" required style="border-radius:10px;padding:12px 16px;">
                                    <option value="">-- Select Interest --</option>
                                    <option value="Digital Marketing Course">Digital Marketing Course</option>
                                    <option value="Performance Marketing Course">Performance Marketing Course</option>
                                    <option value="SEO Course">SEO Course</option>
                                    <option value="Social Media Marketing Course">Social Media Marketing Course</option>
                                    <option value="PPC Google Ads Course">PPC Google Ads Course</option>
                                    <option value="Meta Ads (Facebook Ads) Course">Meta Ads (Facebook Ads) Course</option>
                                    <option value="YouTube Marketing Course">YouTube Marketing Course</option>
                                    <option value="Data Analytics Course">Data Analytics Course</option>
                                    <option value="Data Science Course">Data Science Course</option>
                                    <option value="Website Development Course">Website Development Course</option>
                                    <option value="WordPress Website Design">WordPress Website Design</option>
                                    <option value="Digital Marketing with AI">Digital Marketing with AI</option>
                                    <option value="E-Commerce Marketing">E-Commerce Marketing</option>
                                </select>
                            </div>
                            <button type="submit" class="btn-enroll w-100 text-center d-block border-0">
                                <i class="bi bi-whatsapp me-2"></i>Send on WhatsApp
                            </button>
                        </form>
                        <p class="text-white-50 text-center mt-2 mb-0" style="font-size:12px">📞 +91 91177 41984 | 📍 Boring Road, Patna</p>
                        <p class="text-white-50 text-center mt-3 mb-0" style="font-size:12px">📍 Boring Road, Patna | ☎ +91 9117741984</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <div class="bg-light py-2 border-bottom">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 small">
                    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>courses/">Courses</a></li>
                    <li class="breadcrumb-item active">WordPress Website Design Course</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- TOOLS -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h2 class="section-title">Plugins & Tools <span>You'll Master</span></h2>
            </div>
            <div class="row g-3" data-aos="fade-up">
                <?php $tools=[["🌐","WordPress CMS"],["⚡","Elementor Pro"],["🛒","WooCommerce"],["🔍","Yoast SEO"],["📧","MailChimp"],["💳","Payment Gateways"],["🛡️","Security Plugins"],["⚡","WP Rocket Cache"]];
                foreach($tools as $t): ?>
                <div class="col-6 col-md-3">
                    <div class="wp-plugin-badge">
                        <div style="font-size:1.5rem;margin-bottom:6px"><?= $t[0] ?></div>
                        <?= $t[1] ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Best <span>WordPress Course</span> in Patna</h2>
                <p class="text-muted mx-auto" style="max-width:650px">WordPress powers 43% of all websites globally. Learning WordPress is the fastest way to start earning as a freelance web designer or secure a job as a website developer.</p>
            </div>
            <div class="row g-4">
                <?php $cards=[["🎨","Custom Website Design","Build stunning business websites using Elementor drag & drop builder."],["🛒","E-Commerce with WooCommerce","Create full-featured online stores with products, carts & payments."],["🔍","WordPress SEO","Optimize every page with Yoast SEO plugin for top Google rankings."],["📱","Responsive Websites","Ensure your WordPress sites look perfect on mobile, tablet & desktop."],["⚡","Speed Optimization","Use caching, CDN & optimizations for lightning-fast load times."],["🔒","WordPress Security","Protect websites from hacks with security plugins & best practices."]];
                foreach ($cards as $c): ?>
                <div class="col-md-4" data-aos="fade-up">
                    <div class="overview-card h-100">
                        <div class="icon-wrap"><?= $c[0] ?></div>
                        <h5 class="fw-bold mb-2"><?= $c[1] ?></h5>
                        <p class="text-muted mb-0"><?= $c[2] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- MODULES -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Course <span>Modules</span></h2>
                <p class="text-muted">10+ modules covering complete WordPress design & development</p>
            </div>
            <div class="row g-4">
                <?php
                $modules = [
                    ["01","WordPress Fundamentals",["WordPress.org vs WordPress.com","Domain & hosting setup","WordPress installation & configuration","Dashboard walkthrough"]],
                    ["02","Themes & Customization",["Free vs premium theme selection","Theme installation & setup","Header, footer & sidebar customization","Child theme creation basics"]],
                    ["03","Elementor Page Builder",["Elementor interface & widgets","Building pages with drag & drop","Sections, columns & templates","Mobile responsiveness in Elementor"]],
                    ["04","WordPress Plugins",["Essential plugins for every site","Security plugins setup","Contact form & gallery plugins","Performance optimization plugins"]],
                    ["05","WooCommerce E-Commerce",["Store setup & configuration","Product listing & categories","Payment gateway integration","Shipping, taxes & order management"]],
                    ["06","WordPress SEO",["Yoast SEO plugin setup","Meta tags, titles & descriptions","XML sitemap creation","Schema markup basics"]],
                    ["07","Website Speed & Security",["WP Rocket caching setup","Image optimization techniques","SSL certificate & HTTPS","Malware protection & firewall"]],
                    ["08","Freelancing & Projects",["Client project workflow","4 complete website projects","Pricing & proposal creation","Website maintenance & support"]],
                ];
                foreach ($modules as $i => $m): ?>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $i*60 ?>">
                    <div class="module-card h-100">
                        <div class="module-header"><span class="num"><?= $m[0] ?></span><strong><?= $m[1] ?></strong></div>
                        <div class="module-body"><ul><?php foreach($m[2] as $li): ?><li><?= $li ?></li><?php endforeach; ?></ul></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- WHY US -->
    <section class="why-section py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title text-white">Why Learn <span style="color:#5bc0de">WordPress at Coral?</span></h2>
            </div>
            <div class="row g-4">
                <?php $whys=[["🌐","No Coding Required","Build professional websites without writing code"],["👨‍🏫","Expert Trainers","Trainers who manage 50+ client websites"],["💰","Freelance Friendly","Start taking WordPress clients during the course"],["📜","Certification","Coral Web Technology WordPress certificate"],["💳","Easy EMI","Flexible payment options available"],["🚀","4 Real Projects","Build 4 live websites for your portfolio"]];
                foreach($whys as $w): ?>
                <div class="col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="why-item h-100"><span class="wi-icon"><?= $w[0] ?></span><h5><?= $w[1] ?></h5><p><?= $w[2] ?></p></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion" data-aos="fade-up">
                        <?php $faqs=[["Do I need coding knowledge for WordPress?","No coding skills required! WordPress is designed for non-programmers. You'll learn to build professional websites using Elementor's visual drag & drop builder."],["What kind of websites can I build?","You'll learn to build: business websites, blogs, portfolio sites, restaurant websites, e-commerce stores, real estate websites and more — all with WordPress."],["How long is the WordPress course?","The course runs for 2-3 months. We focus on quality and completeness, building 4 real projects that you can immediately use for freelancing or job applications."],["How much can I earn as a WordPress freelancer?","WordPress freelancers in India typically earn ₹500-3000 per page, and ₹5,000-50,000+ per complete website. Many of our students earn while they learn."],["Is there job/freelance placement support?","Yes! We provide placement assistance and also help you set up your freelancing profile on platforms like Fiverr & Upwork, and connect you with local clients."]];
                        foreach($faqs as $i=>$f): ?>
                        <div class="accordion-item mb-3 border rounded overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button <?= $i>0?'collapsed':'' ?> fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>">
                                    <?= $f[0] ?>
                                </button>
                            </h2>
                            <div id="faq<?= $i ?>" class="accordion-collapse collapse <?= $i===0?'show':'' ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted"><?= $f[1] ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OTHER COURSES -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Explore Other <span>Courses</span></h2>
            </div>
            <div class="row g-4">
                <?php $oc=[["💻","Website Development","website-development-course.php"],["🔬","Data Science","data-science-course.php"],["🔍","SEO Course","seo-course.php"],["📘","Meta Ads Course","meta-ads-facebook-course.php"],["🚀","Performance Marketing","performance-marketing-course.php"],["🤖","Digital Marketing AI","digital-marketing-ai-course.php"]];
                foreach($oc as $c): ?>
                <div class="col-md-4 col-sm-6" data-aos="fade-up">
                    <a href="<?php echo $base_url; ?>courses/<?= $c[2] ?>" class="other-course-card d-block text-decoration-none">
                        <div class="oc-icon"><?= $c[0] ?></div>
                        <div class="oc-body"><h6><?= $c[1] ?></h6><small class="text-muted">View Course →</small></div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section py-5">
        <div class="container text-center" data-aos="fade-up">
            <h2 class="fw-800 mb-3 text-white">Build Your WordPress Career Now!</h2>
            <p class="mb-2 text-white" style="font-size:1.1rem">📍 Chandrakanta Apartment, Boring Road, Patna - 801503</p>
            <p class="mb-4 text-white-50">Start earning as a WordPress freelancer. Join batches starting every month.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_url; ?>schedule-meeting.php" style="background:#fff;color:#21759b;font-weight:700;padding:14px 36px;border-radius:50px;text-decoration:none;font-size:1rem;">Enroll Now</a>
                <a href="tel:+919117741984" style="background:rgba(255,255,255,.2);color:#fff;font-weight:600;padding:14px 36px;border-radius:50px;text-decoration:none;font-size:1rem;border:2px solid rgba(255,255,255,.6);">📞 Call: +91 9117741984</a>
            </div>
        </div>
    </section>

   <?php include 'common/footer.php'; ?>
   <script>
document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Form data fetch karna
    const name = this.querySelector('input[name="name"]').value;
    const phone = this.querySelector('input[name="phone"]').value;
    const email = this.querySelector('input[name="email"]').value;
    const course = this.querySelector('select[name="course"]').value;

    // Aapka Number
    const myWhatsAppNumber = '9117741984'; 

    // Message taiyar karna
    const message = "*New Website Enquiry*%0A%0A" +
                    "*Name:* " + name + "%0A" +
                    "*Phone:* " + phone + "%0A" +
                    "*Email:* " + email + "%0A" +
                    "*Course:* " + course;

    const whatsappUrl = "https://wa.me/" + myWhatsAppNumber + "?text=" + message;

    // WhatsApp open karna
    window.open(whatsappUrl, '_blank');
});
</script>
</body>
</html>
