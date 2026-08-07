<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <title>SEO Foundation Course in Patna | Coral Web Technology</title>
    <meta name="description" content="Learn SEO Foundation Course in Patna at Coral Web Technology. Master Keyword Research, On-Page, Off-Page, Technical & Local SEO. Rank #1 on Google and drive organic traffic." />
    <meta name="keywords" content="SEO course Patna, SEO foundation training Patna, search engine optimization course Bihar, local SEO training, technical SEO course Patna" />
    <meta property="og:title" content="SEO Foundation Course in Patna | Coral Web Technology" />
    <meta property="og:description" content="Master SEO with practical training on Keyword Research, Link Building, and Technical SEO at Coral Web Technology Patna. Drive free organic traffic." />
</head>
<body>
    <?php include 'common/header.php'; ?>

    <style>
        .course-hero { background: linear-gradient(135deg, #0a0514 0%, #1a0f2e 50%, #0d0221 100%); padding: 100px 0 70px; position: relative; overflow: hidden; }
        .data-bars { position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; overflow: hidden; pointer-events: none; }
        .data-bars .bar { position: absolute; bottom: 0; width: 30px; border-radius: 4px 4px 0 0; animation: bar-rise 3s ease-in-out infinite alternate; opacity: 0.08; }
        .data-bars .bar:nth-child(1) { left: 5%; height: 40%; background: #ff6600; animation-delay: 0s; }
        .data-bars .bar:nth-child(2) { left: 15%; height: 60%; background: #8a2be2; animation-delay: .3s; }
        .data-bars .bar:nth-child(3) { left: 25%; height: 35%; background: #ff6600; animation-delay: .6s; }
        .data-bars .bar:nth-child(4) { left: 75%; height: 55%; background: #8a2be2; animation-delay: .9s; }
        .data-bars .bar:nth-child(5) { left: 85%; height: 45%; background: #ff6600; animation-delay: 1.2s; }
        .data-bars .bar:nth-child(6) { left: 92%; height: 70%; background: #8a2be2; animation-delay: 1.5s; }
        @keyframes bar-rise { 0% { transform: scaleY(0.6); } 100% { transform: scaleY(1); } }
        .course-hero h1 { color: #fff; font-size: clamp(2rem,5vw,3.5rem); font-weight: 800; }
        .course-hero h1 span { background: linear-gradient(90deg,#ff6600,#8a2be2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .course-hero p.lead { color: rgba(255,255,255,.85); }
        .hero-stat { background: rgba(255,255,255,.08); border: 1px solid rgba(255,102,0,.3); border-radius: 12px; padding: 14px 20px; text-align: center; transition: all .3s ease; }
        .hero-stat:hover { background: rgba(255,102,0,.15); transform: translateY(-3px); }
        .hero-stat .stat-num { font-size: 1.6rem; font-weight: 800; color: #ff6600; }
        .hero-stat .stat-label { font-size: 12px; color: rgba(255,255,255,.75); margin: 0; }
        .btn-enroll { background: linear-gradient(135deg,#ff6600,#8a2be2); color: #fff; font-weight: 700; padding: 14px 36px; border-radius: 50px; border: none; font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-enroll:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(255,102,0,.4); color: #fff; }
        .btn-demo { background: transparent; color: #fff; font-weight: 600; padding: 14px 36px; border-radius: 50px; border: 2px solid rgba(255,102,0,.5); font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-demo:hover { border-color: #ff6600; background: rgba(255,102,0,.1); color: #fff; }
        .overview-card { background: #fff; border-radius: 16px; padding: 28px; box-shadow: 0 4px 20px rgba(0,0,0,.06); border-left: 4px solid #ff6600; transition: transform .3s ease; }
        .overview-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(255,102,0,.12); }
        .overview-card .icon-wrap { width: 54px; height: 54px; background: linear-gradient(135deg,#ff6600,#8a2be2); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #fff; margin-bottom: 14px; }
        .module-card { border: 1px solid #e5e7f0; border-radius: 14px; overflow: hidden; transition: all .3s ease; }
        .module-card:hover { box-shadow: 0 8px 30px rgba(255,102,0,.12); transform: translateY(-4px); }
        .module-card .module-header { background: linear-gradient(135deg,#ff6600,#0a0514); color: #fff; padding: 16px 20px; }
        .module-card .module-header .num { width: 32px; height: 32px; background: rgba(255,255,255,.2); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; margin-right: 10px; }
        .module-card .module-body { padding: 16px 20px; }
        .module-card .module-body ul { list-style: none; padding: 0; margin: 0; }
        .module-card .module-body ul li { padding: 5px 0; color: #444; font-size: 14px; border-bottom: 1px dashed #eee; }
        .module-card .module-body ul li:last-child { border: none; }
        .module-card .module-body ul li::before { content: '✓'; color: #ff6600; font-weight: 700; margin-right: 8px; }
        .why-section { background: linear-gradient(135deg,#0a0514,#1a0f2e); }
        .why-item { background: rgba(255,255,255,.07); border: 1px solid rgba(255,102,0,.2); border-radius: 14px; padding: 24px; text-align: center; transition: all .3s ease; }
        .why-item:hover { background: rgba(255,102,0,.08); transform: translateY(-5px); }
        .why-item .wi-icon { font-size: 2.2rem; margin-bottom: 12px; display: block; }
        .why-item h5 { color: #ff6600; font-weight: 700; margin-bottom: 8px; }
        .why-item p { color: rgba(255,255,255,.78); font-size: 14px; margin: 0; }
        .tools-section { background: #fff5f0; }
        .tool-chip { background: #fff; border: 2px solid #ffebe0; border-radius: 10px; padding: 16px 20px; text-align: center; transition: all .3s ease; }
        .tool-chip:hover { border-color: #ff6600; box-shadow: 0 5px 20px rgba(255,102,0,.1); transform: translateY(-3px); }
        .tool-chip .tool-icon { font-size: 2rem; display: block; margin-bottom: 8px; }
        .tool-chip span { font-size: 13px; font-weight: 600; color: #ff6600; }
        .faq-section .accordion-button:not(.collapsed) { background: #fff5f0; color: #ff6600; font-weight: 600; }
        .faq-section .accordion-button:focus { box-shadow: none; }
        .cta-section { background: linear-gradient(135deg,#ff6600,#8a2be2); }
        .other-course-card { background: #fff; border-radius: 14px; overflow: hidden; border: 1px solid #e5e7f0; transition: all .3s ease; text-decoration: none; }
        .other-course-card:hover { box-shadow: 0 8px 30px rgba(255,102,0,.12); transform: translateY(-5px); }
        .other-course-card .oc-icon { background: linear-gradient(135deg,#ff6600,#0a0514); padding: 24px; text-align: center; font-size: 2.5rem; }
        .other-course-card .oc-body { padding: 16px; }
        .other-course-card .oc-body h6 { color: #1a1a3e; font-weight: 700; margin: 0; }
        .section-title { font-weight: 800; font-size: clamp(1.6rem,3vw,2.2rem); color: #1a1a3e; }
        .section-title span { color: #ff6600; }
        .location-badge { background: rgba(255,102,0,.1); border: 1px solid rgba(255,102,0,.3); border-radius: 50px; padding: 8px 20px; color: #ff6600; font-size: 13px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 16px; }
        .pulse-dot { width: 8px; height: 8px; background: #ff6600; border-radius: 50%; animation: pulse 1.5s infinite; }
        @keyframes pulse { 0%,100% { transform: scale(1); } 50% { transform: scale(1.5); opacity: 0.6; } }
    </style>

    <!-- HERO -->
    <section class="course-hero">
        <div class="data-bars"><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span></div>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="location-badge"><div class="pulse-dot"></div>📍 Patna, Bihar | Coral Web Technology</div>
                    <span class="d-inline-block mb-3 px-4 py-2 rounded-pill text-white fw-500" style="background:rgba(255,102,0,.2);border:1px solid rgba(255,102,0,.3);font-size:13px">🔍 Professional Certification Course</span>
                    <h1 class="mb-3">SEO <span>Foundation Course</span></h1>
                    <p class="lead mb-4">Learn the complete long-term process to rank your website in the first position on Google. Master On-Page, Off-Page, Technical, and Local SEO to drive massive organic (free) traffic.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">08+</div><p class="stat-label">Modules</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">100%</div><p class="stat-label">Practical</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">150+</div><p class="stat-label">Placed</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">EMI</div><p class="stat-label">Available</p></div></div>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?php echo $base_url; ?>schedule-meeting.php" class="btn-enroll">Enroll Now →</a>
                        <a href="tel:+919117741984" class="btn-demo">📞 Call: +91 9117741984</a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="p-4" style="background:rgba(255,102,0,.15);border-radius:20px;border:1px solid rgba(255,102,0,.3)">
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
                    <li class="breadcrumb-item active">SEO Foundation Course</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- TOOLS -->
    <section class="tools-section py-5">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h2 class="section-title">Tools <span>You'll Learn</span></h2>
            </div>
            <div class="row g-3" data-aos="fade-up">
                <?php $tools=[["🔍","Google Search Console"],["📈","Google Analytics"],["⚒️","Ahrefs"],["📊","SEMrush"],["✏️","Yoast SEO"],["🧠","Rank Math"],["📍","Google My Business"],["🕷️","Screaming Frog"]];
                foreach($tools as $t): ?>
                <div class="col-6 col-md-3">
                    <div class="tool-chip">
                        <span class="tool-icon"><?= $t[0] ?></span>
                        <span><?= $t[1] ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Best <span>SEO Course</span> in Patna</h2>
                <p class="text-muted mx-auto" style="max-width:650px">Search Engine Optimization is the backbone of digital marketing. Without SEO, websites remain invisible. Our foundation course gives you the exact blueprint to rank any website on Google's first page.</p>
            </div>
            <div class="row g-4">
                <?php $cards=[["🔍","Keyword Research","Find high-value user search queries that drive targeted organic traffic."],["📝","On-Page SEO","Optimize website titles, meta descriptions, headings, and internal linking."],["🔗","Off-Page SEO","Build website authority through high-quality backlinks and guest posting."],["⚙️","Technical SEO","Improve page speed, mobile-friendliness, sitemaps, and fix broken links."],["📍","Local SEO","Dominate local search results with Google My Business and local citations."],["📊","Content Strategy","Learn to create highly informative, SEO-optimized content that ranks naturally."]];
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
                <p class="text-muted">Comprehensive modules covering complete Search Engine Optimization</p>
            </div>
            <div class="row g-4">
                <?php
                $modules = [
                    ["01","How Search Engines Work",["Crawling: Bots scan websites","Indexing: Store pages in database","Ranking: Show best results","Algorithm Updates"]],
                    ["02","Keyword Research",["Short-tail & Long-tail keywords","Competitor keyword analysis","Search Intent optimization","Using tools: Ahrefs, Semrush, GKP"]],
                    ["03","On-Page SEO",["Title & Meta descriptions","Heading tags (H1, H2, H3)","Image ALT tags & URLs","Canonical & Open Graph tags"]],
                    ["04","Off-Page SEO",["Link building strategies","Guest posting & outreach","Social sharing & Web 2.0","Directory & Profile submissions"]],
                    ["05","Technical SEO",["Website speed optimization","Mobile-friendliness & UI","XML Sitemap & Robots.txt","Schema markup implementation"]],
                    ["06","Local SEO",["Google My Business Setup","Targeting local keywords","Building local citations (NAP)","Managing customer reviews"]],
                    ["07","SEO Tools & Analytics",["Google Search Console","Google Analytics 4 setup","Tracking ranking positions","Understanding traffic drops"]],
                    ["08","Content Strategy",["Creating high-quality content","Avoiding keyword stuffing","Structuring blog posts","AI content vs Human content"]],
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
                <h2 class="section-title text-white">Why Choose <span style="color:#ff6600">Our SEO Course?</span></h2>
            </div>
            <div class="row g-4">
                <?php $whys=[["📈","Live SEO Projects","Work on ranking live websites instead of just theory"],["👨‍🏫","Industry Experts","Trainers with years of real-world ranking experience"],["💼","Freelance Ready","Start taking global SEO clients from platforms like Upwork"],["📜","Certifications","Industry-recognized SEO certificate from Coral Web Technology"],["💳","Easy EMI","Start learning with flexible and affordable payment options"],["🔄","Lifetime Support","Get help even after you complete the training program"]];
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
                        <?php $faqs=[["Is SEO suitable for beginners?","Absolutely! Our Foundation Course is designed for beginners. We start from the very basics of how Google works before moving to advanced ranking strategies."],["Do I need coding knowledge for SEO?","No programming skills are required. While Technical SEO involves some code elements like meta tags, we teach you exactly how to optimize them using tools and plugins like Yoast."],["How long does it take to learn SEO?","The Foundation Course spans 4 weeks. However, mastering SEO takes practice on real websites, which we provide during the training."],["What jobs can I get after this course?","You can work as an SEO Executive, SEO Analyst, Digital Marketer, or start your own journey as a Freelancer or Agency Owner."],["Is there placement support?","Yes, we provide job placement assistance, help you build your resume, and guide you on setting up profiles on freelancing platforms."]];
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
                <?php $oc=[["🔬","Data Science","data-science-course.php"],["🤖","Digital Marketing AI","digital-marketing-ai-course.php"],["💻","Website Development","website-development-course.php"],["📊","Data Analytics","data-analytics-course.php"],["💰","Google Ads (PPC)","ppc-google-ads-course.php"],["🚀","Performance Marketing","performance-marketing-course.php"]];
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
            <h2 class="fw-800 mb-3 text-white">Start Your SEO Journey Today!</h2>
            <p class="mb-2 text-white" style="font-size:1.1rem">📍 Chandrakanta Apartment, Boring Road, Patna - 801503</p>
            <p class="mb-4 text-white-50">Master the algorithms and drive organic traffic. Join our upcoming batch now.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_url; ?>schedule-meeting.php" style="background:#fff;color:#ff6600;font-weight:700;padding:14px 36px;border-radius:50px;text-decoration:none;font-size:1rem;">Enroll Now</a>
                <a href="tel:+919117741984" style="background:rgba(255,255,255,.2);color:#fff;font-weight:600;padding:14px 36px;border-radius:50px;text-decoration:none;font-size:1rem;border:2px solid rgba(255,255,255,.6);">📞 Call: +91 9117741984</a>
            </div>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>
    <script>
document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault(); 

    const name = this.querySelector('input[name="name"]').value;
    const phone = this.querySelector('input[name="phone"]').value;
    const email = this.querySelector('input[name="email"]').value;
    const course = this.querySelector('select[name="course"]').value;

    const myWhatsAppNumber = '9117741984'; 

    const message = "*New Website Enquiry*%0A%0A" +
                    "*Name:* " + name + "%0A" +
                    "*Phone:* " + phone + "%0A" +
                    "*Email:* " + email + "%0A" +
                    "*Course:* " + course;

    const whatsappUrl = "https://wa.me/" + myWhatsAppNumber + "?text=" + message;

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
