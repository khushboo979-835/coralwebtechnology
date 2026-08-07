<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>

    <title>Meta Ads (Facebook Ads) Course in Patna | Coral Web Technology</title>
    <meta name="description" content="Learn Meta Ads & Facebook Ads Course in Patna at Coral Web Technology. Master Facebook & Instagram advertising, audience targeting, retargeting & campaign scaling. 100% practical training." />
    <meta name="keywords" content="Meta Ads course Patna, Facebook Ads course Patna, Instagram Ads training, social media advertising course, Facebook marketing course Bihar" />
    <meta property="og:title" content="Meta Ads (Facebook Ads) Course in Patna | Coral Web Technology" />
    <meta property="og:description" content="Master Meta Ads & Facebook advertising with live projects. Join Coral Web Technology Patna for expert-led training with job placement assistance." />
</head>
<body>
    <?php include 'common/header.php'; ?>

    <style>
        .course-hero { background: linear-gradient(135deg, #1a0533 0%, #3b0764 50%, #1e3a5f 100%); padding: 100px 0 70px; position: relative; overflow: hidden; }
        .course-hero::before { content: ''; position: absolute; inset: 0; background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); }
        .floating-circles { position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; pointer-events: none; }
        .floating-circles span { position: absolute; border-radius: 50%; animation: float-up 8s infinite linear; opacity: 0.08; }
        .floating-circles span:nth-child(1) { width: 80px; height: 80px; background: #1877f2; left: 10%; animation-delay: 0s; }
        .floating-circles span:nth-child(2) { width: 120px; height: 120px; background: #e1306c; left: 30%; animation-delay: 2s; }
        .floating-circles span:nth-child(3) { width: 60px; height: 60px; background: #1877f2; left: 60%; animation-delay: 4s; }
        .floating-circles span:nth-child(4) { width: 100px; height: 100px; background: #e1306c; left: 80%; animation-delay: 6s; }
        @keyframes float-up { 0% { transform: translateY(100vh) scale(0); opacity: 0; } 10% { opacity: 0.08; } 90% { opacity: 0.08; } 100% { transform: translateY(-100px) scale(1); opacity: 0; } }
        .course-hero h1 { color: #fff; font-size: clamp(2rem,5vw,3.5rem); font-weight: 800; }
        .course-hero h1 span { background: linear-gradient(90deg,#1877f2,#e1306c); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .course-hero p.lead { color: rgba(255,255,255,.85); }
        .hero-stat { background: rgba(255,255,255,.1); border: 1px solid rgba(255,255,255,.2); border-radius: 12px; padding: 14px 20px; text-align: center; transition: all .3s ease; }
        .hero-stat:hover { background: rgba(255,255,255,.2); transform: translateY(-3px); }
        .hero-stat .stat-num { font-size: 1.6rem; font-weight: 800; color: #1877f2; }
        .hero-stat .stat-label { font-size: 12px; color: rgba(255,255,255,.75); margin: 0; }
        .btn-enroll { background: linear-gradient(135deg,#1877f2,#e1306c); color: #fff; font-weight: 700; padding: 14px 36px; border-radius: 50px; border: none; font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-enroll:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(24,119,242,.4); color: #fff; }
        .btn-demo { background: transparent; color: #fff; font-weight: 600; padding: 14px 36px; border-radius: 50px; border: 2px solid rgba(255,255,255,.5); font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-demo:hover { border-color: #fff; background: rgba(255,255,255,.1); color: #fff; }
        .overview-card { background: #fff; border-radius: 16px; padding: 28px; box-shadow: 0 4px 20px rgba(0,0,0,.06); border-left: 4px solid #1877f2; transition: transform .3s ease; }
        .overview-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(24,119,242,.12); }
        .overview-card .icon-wrap { width: 54px; height: 54px; background: linear-gradient(135deg,#1877f2,#e1306c); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #fff; margin-bottom: 14px; }
        .module-card { border: 1px solid #e5e7f0; border-radius: 14px; overflow: hidden; transition: all .3s ease; }
        .module-card:hover { box-shadow: 0 8px 30px rgba(24,119,242,.12); transform: translateY(-4px); }
        .module-card .module-header { background: linear-gradient(135deg,#1877f2,#3b0764); color: #fff; padding: 16px 20px; }
        .module-card .module-header .num { width: 32px; height: 32px; background: rgba(255,255,255,.2); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; margin-right: 10px; }
        .module-card .module-body { padding: 16px 20px; }
        .module-card .module-body ul { list-style: none; padding: 0; margin: 0; }
        .module-card .module-body ul li { padding: 5px 0; color: #444; font-size: 14px; border-bottom: 1px dashed #eee; }
        .module-card .module-body ul li:last-child { border: none; }
        .module-card .module-body ul li::before { content: '✓'; color: #1877f2; font-weight: 700; margin-right: 8px; }
        .why-section { background: linear-gradient(135deg,#1a0533,#1e3a5f); }
        .why-item { background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.15); border-radius: 14px; padding: 24px; text-align: center; transition: all .3s ease; }
        .why-item:hover { background: rgba(255,255,255,.15); transform: translateY(-5px); }
        .why-item .wi-icon { font-size: 2.2rem; margin-bottom: 12px; display: block; }
        .why-item h5 { color: #1877f2; font-weight: 700; margin-bottom: 8px; }
        .why-item p { color: rgba(255,255,255,.78); font-size: 14px; margin: 0; }
        .faq-section .accordion-button:not(.collapsed) { background: #f0f4ff; color: #1877f2; font-weight: 600; }
        .faq-section .accordion-button:focus { box-shadow: none; }
        .cta-section { background: linear-gradient(135deg,#1877f2,#e1306c); }
        .other-course-card { background: #fff; border-radius: 14px; overflow: hidden; border: 1px solid #e5e7f0; transition: all .3s ease; text-decoration: none; }
        .other-course-card:hover { box-shadow: 0 8px 30px rgba(24,119,242,.12); transform: translateY(-5px); }
        .other-course-card .oc-icon { background: linear-gradient(135deg,#1877f2,#3b0764); padding: 24px; text-align: center; font-size: 2.5rem; }
        .other-course-card .oc-body { padding: 16px; }
        .other-course-card .oc-body h6 { color: #1a1a3e; font-weight: 700; margin: 0; }
        .section-title { font-weight: 800; font-size: clamp(1.6rem,3vw,2.2rem); color: #1a1a3e; }
        .section-title span { color: #1877f2; }
        .location-badge { background: rgba(24,119,242,.1); border: 1px solid rgba(24,119,242,.3); border-radius: 50px; padding: 8px 20px; color: #1877f2; font-size: 13px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 16px; }
        .pulse-dot { width: 8px; height: 8px; background: #1877f2; border-radius: 50%; animation: pulse 1.5s infinite; }
        @keyframes pulse { 0%,100% { transform: scale(1); opacity: 1; } 50% { transform: scale(1.5); opacity: 0.6; } }
    </style>

    <!-- HERO -->
    <section class="course-hero">
        <div class="floating-circles">
            <span></span><span></span><span></span><span></span>
        </div>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="location-badge">
                        <div class="pulse-dot"></div>
                        📍 Patna, Bihar | Coral Web Technology
                    </div>
                    <span class="d-inline-block mb-3 px-4 py-2 rounded-pill text-white fw-500" style="background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.3);font-size:13px">🎯 Professional Certification Course</span>
                    <h1 class="mb-3">Meta Ads <span>(Facebook Ads)</span> Course</h1>
                    <p class="lead mb-4">Master Facebook & Instagram advertising. Learn audience targeting, creative strategy, retargeting & campaign scaling with real ad budgets on live projects.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">8+</div><p class="stat-label">Modules</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">100%</div><p class="stat-label">Practical</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">400+</div><p class="stat-label">Placed</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">EMI</div><p class="stat-label">Available</p></div></div>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?php echo $base_url; ?>schedule-meeting.php" class="btn-enroll">Enroll Now →</a>
                        <a href="tel:+919117741984" class="btn-demo">📞 Call: +91 9117741984</a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="p-4" style="background:rgba(255,255,255,.08);border-radius:20px;border:1px solid rgba(255,255,255,.2)">
                        <h5 class="text-white mb-3">📋 Quick Enquiry</h5>
                        <form class="whatsapp-form" id="whatsappForm">
                            <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Your Full Name" aria-label="Full Name" required style="border-radius:10px;padding:12px 16px;"></div>
                            <div class="mb-3"><input type="tel" name="phone" class="form-control" placeholder="Phone Number" aria-label="Phone Number" required style="border-radius:10px;padding:12px 16px;"></div>
                            <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address" style="border-radius:10px;padding:12px 16px;"></div>
                            <div class="mb-3">
                                <select name="course" class="form-select" aria-label="Select Course" required style="border-radius:10px;padding:12px 16px;">
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
                            <button type="submit" class="btn-enroll w-100 text-center d-block border-0" id="whatsapp-submit-btn">
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
                    <li class="breadcrumb-item active">Meta Ads (Facebook Ads) Course</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- ABOUT -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Best <span>Meta Ads Course</span> in Patna</h2>
                <p class="text-muted mx-auto" style="max-width:650px">Facebook & Instagram advertising is the fastest way to grow any business. Learn to run profitable Meta Ad campaigns that generate real leads and sales with our expert-led training in Patna.</p>
            </div>
            <div class="row g-4">
                <?php $cards = [["📊","Campaign Structure","Master ad sets, audiences & creative hierarchy for maximum results."],["🎯","Audience Targeting","Custom, Lookalike & interest-based audiences that actually convert."],["🖼️","Ad Creative Strategy","Design compelling image & video ads that stop the scroll."],["🔄","Retargeting Funnels","Bring back visitors & convert warm audiences into buyers."],["💰","Budget Optimization","Scale winning campaigns profitably using Meta's smart bidding."],["📈","Analytics & Reporting","Track ROAS, CPC, CTR & optimize campaigns with real data."]];
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
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Course <span>Modules</span></h2>
                <p class="text-muted">8+ comprehensive modules covering Meta Ads from beginner to advanced</p>
            </div>
            <div class="row g-4">
                <?php
                $modules = [
                    ["01","Meta Business Manager Setup",["Business & Ad Account setup","Pixel installation & verification","Facebook Page & Catalog linking","Payment methods & billing"]],
                    ["02","Audience Research & Targeting",["Custom Audiences from website/app","Lookalike Audience creation","Detailed interest targeting","Behavioral & demographic targeting"]],
                    ["03","Ad Formats & Campaign Objectives",["Awareness, Traffic, Engagement campaigns","Lead Generation & Conversion campaigns","App installs & Catalog Sales ads","Messenger & WhatsApp ad campaigns"]],
                    ["04","Ad Creative Strategy",["Image ad design principles","Video ads & Reels for Instagram","Carousel & Collection ad formats","Copywriting for Meta Ads"]],
                    ["05","Retargeting & Funnel Building",["Website retargeting with Meta Pixel","Video view retargeting audiences","Engagement retargeting strategies","Full-funnel ad strategy (TOFU/MOFU/BOFU)"]],
                    ["06","Budget & Bid Optimization",["Campaign Budget Optimization (CBO)","Ad Set Budget Optimization (ABO)","Manual vs Automatic bidding","Cost Cap & Bid Cap strategies"]],
                    ["07","Analytics & Performance Tracking",["Meta Ads Manager dashboard","Key metrics: ROAS, CPC, CPL, CTR","A/B testing & creative testing","Custom reports & client dashboards"]],
                    ["08","Scaling & Advanced Strategies",["Horizontal & vertical scaling","Winning ad creative frameworks","Competitor research techniques","Agency workflows & client reporting"]],
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
                <h2 class="section-title text-white">Why Choose <span style="color:#1877f2">Our Course?</span></h2>
                <p class="text-white-50">Patna's most practical Meta Ads training with real results</p>
            </div>
            <div class="row g-4">
                <?php $whys=[["🎯","Live Ad Campaigns","Run real Facebook & Instagram ads with actual budgets"],["👨‍🏫","Agency Experts","Trainers with 5+ years of Meta advertising experience"],["💼","Job Placement","Connect with top digital agencies in Patna & nationally"],["📜","Meta Certification","Guidance for official Meta Blueprint certification"],["💳","Easy EMI","Zero-cost EMI available for all eligible students"],["🔄","Lifetime Access","Course recordings & updates accessible forever"]];
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
                        <?php $faqs=[["What is covered in the Meta Ads Course?","The course covers everything from Business Manager setup, audience targeting, ad creative design, retargeting, budget optimization to campaign scaling — 8+ comprehensive modules."],["Do I need prior experience?","No! We start from scratch. If you know how to use Facebook, you're ready. We build from basics to advanced Meta advertising strategies."],["How long is the Meta Ads course?","The course is 6–8 weeks with flexible weekday and weekend batches. Classes are highly practical with live campaign management."],["Will I run real Facebook ads?","Yes! You'll manage real Meta ad campaigns with live budgets under expert supervision. This is the core of our practical training approach."],["Is there job placement support?","Absolutely! We provide 100% placement assistance with resume building, portfolio creation, and connections to digital marketing agencies in Patna and beyond."]];
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
                <?php $oc=[["🚀","Performance Marketing","performance-marketing-course.php"],["🔍","SEO Course","seo-course.php"],["📱","Social Media Marketing","social-media-marketing-course.php"],["🛒","E-Commerce Marketing","ecommerce-marketing-course.php"],["🎬","YouTube Marketing","youtube-marketing-course.php"],["💰","Google Ads (PPC)","ppc-google-ads-course.php"]];
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
            <h2 class="fw-800 mb-3 text-white">Start Your Meta Ads Journey Today!</h2>
            <p class="mb-2 text-white" style="font-size:1.1rem">📍 Chandrakanta Apartment, Boring Road, Patna - 801503</p>
            <p class="mb-4 text-white-50">Join 400+ successful graduates. Book a free demo class now.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_url; ?>schedule-meeting.php" style="background:#fff;color:#1877f2;font-weight:700;padding:14px 36px;border-radius:50px;text-decoration:none;font-size:1rem;">Enroll Now</a>
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
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'form_submit_success',
        'form_name': 'WhatsApp Course Enquiry Form',
        'page_path': window.location.pathname
    });
    window.open(whatsappUrl, '_blank');
});
</script>
</body>
</html>
