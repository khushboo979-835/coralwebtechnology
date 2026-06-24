<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/config.php'; ?>
<?php include 'common/head.php'; ?>
<?php include 'common/plugins.php'; ?>
    <title>Data Analytics Course in Patna | Coral Web Technology</title>
    <meta name="description" content="Learn Data Analytics Course in Patna at Coral Web Technology. Master Excel, SQL, Python, Power BI, Google Analytics & data visualization. 100% job placement assistance." />
    <meta name="keywords" content="Data Analytics course Patna, data science training Patna, Power BI course Bihar, SQL Python analytics, business intelligence course Patna" />
    <meta property="og:title" content="Data Analytics Course in Patna | Coral Web Technology" />
    <meta property="og:description" content="Master Data Analytics with Excel, SQL, Python & Power BI at Coral Web Technology Patna. Build a data-driven career with 100% job assistance." />
</head>
<body>
   <?php include 'common/header.php'; ?>

    <style>
        .course-hero { background: linear-gradient(135deg, #0b1829 0%, #0f3460 50%, #16213e 100%); padding: 100px 0 70px; position: relative; overflow: hidden; }
        .data-bars { position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; overflow: hidden; pointer-events: none; }
        .data-bars .bar { position: absolute; bottom: 0; width: 30px; border-radius: 4px 4px 0 0; animation: bar-rise 3s ease-in-out infinite alternate; opacity: 0.08; }
        .data-bars .bar:nth-child(1) { left: 5%; height: 40%; background: #00b4d8; animation-delay: 0s; }
        .data-bars .bar:nth-child(2) { left: 15%; height: 60%; background: #0077b6; animation-delay: .3s; }
        .data-bars .bar:nth-child(3) { left: 25%; height: 35%; background: #f72585; animation-delay: .6s; }
        .data-bars .bar:nth-child(4) { left: 75%; height: 55%; background: #00b4d8; animation-delay: .9s; }
        .data-bars .bar:nth-child(5) { left: 85%; height: 45%; background: #f72585; animation-delay: 1.2s; }
        .data-bars .bar:nth-child(6) { left: 92%; height: 70%; background: #0077b6; animation-delay: 1.5s; }
        @keyframes bar-rise { 0% { transform: scaleY(0.6); } 100% { transform: scaleY(1); } }
        .course-hero h1 { color: #fff; font-size: clamp(2rem,5vw,3.5rem); font-weight: 800; }
        .course-hero h1 span { background: linear-gradient(90deg,#00b4d8,#f72585); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .course-hero p.lead { color: rgba(255,255,255,.85); }
        .hero-stat { background: rgba(255,255,255,.08); border: 1px solid rgba(0,180,216,.3); border-radius: 12px; padding: 14px 20px; text-align: center; transition: all .3s ease; }
        .hero-stat:hover { background: rgba(0,180,216,.15); transform: translateY(-3px); }
        .hero-stat .stat-num { font-size: 1.6rem; font-weight: 800; color: #00b4d8; }
        .hero-stat .stat-label { font-size: 12px; color: rgba(255,255,255,.75); margin: 0; }
        .btn-enroll { background: linear-gradient(135deg,#0077b6,#f72585); color: #fff; font-weight: 700; padding: 14px 36px; border-radius: 50px; border: none; font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-enroll:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(0,119,182,.4); color: #fff; }
        .btn-demo { background: transparent; color: #fff; font-weight: 600; padding: 14px 36px; border-radius: 50px; border: 2px solid rgba(0,180,216,.5); font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-demo:hover { border-color: #00b4d8; background: rgba(0,180,216,.1); color: #fff; }
        .overview-card { background: #fff; border-radius: 16px; padding: 28px; box-shadow: 0 4px 20px rgba(0,0,0,.06); border-left: 4px solid #0077b6; transition: transform .3s ease; }
        .overview-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(0,119,182,.12); }
        .overview-card .icon-wrap { width: 54px; height: 54px; background: linear-gradient(135deg,#0077b6,#f72585); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #fff; margin-bottom: 14px; }
        .module-card { border: 1px solid #e5e7f0; border-radius: 14px; overflow: hidden; transition: all .3s ease; }
        .module-card:hover { box-shadow: 0 8px 30px rgba(0,119,182,.12); transform: translateY(-4px); }
        .module-card .module-header { background: linear-gradient(135deg,#0077b6,#0b1829); color: #fff; padding: 16px 20px; }
        .module-card .module-header .num { width: 32px; height: 32px; background: rgba(255,255,255,.2); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; margin-right: 10px; }
        .module-card .module-body { padding: 16px 20px; }
        .module-card .module-body ul { list-style: none; padding: 0; margin: 0; }
        .module-card .module-body ul li { padding: 5px 0; color: #444; font-size: 14px; border-bottom: 1px dashed #eee; }
        .module-card .module-body ul li:last-child { border: none; }
        .module-card .module-body ul li::before { content: '✓'; color: #0077b6; font-weight: 700; margin-right: 8px; }
        .why-section { background: linear-gradient(135deg,#0b1829,#16213e); }
        .why-item { background: rgba(255,255,255,.07); border: 1px solid rgba(0,180,216,.2); border-radius: 14px; padding: 24px; text-align: center; transition: all .3s ease; }
        .why-item:hover { background: rgba(0,180,216,.08); transform: translateY(-5px); }
        .why-item .wi-icon { font-size: 2.2rem; margin-bottom: 12px; display: block; }
        .why-item h5 { color: #00b4d8; font-weight: 700; margin-bottom: 8px; }
        .why-item p { color: rgba(255,255,255,.78); font-size: 14px; margin: 0; }
        .tools-section { background: #f0f8ff; }
        .tool-chip { background: #fff; border: 2px solid #e0f0ff; border-radius: 10px; padding: 16px 20px; text-align: center; transition: all .3s ease; }
        .tool-chip:hover { border-color: #0077b6; box-shadow: 0 5px 20px rgba(0,119,182,.1); transform: translateY(-3px); }
        .tool-chip .tool-icon { font-size: 2rem; display: block; margin-bottom: 8px; }
        .tool-chip span { font-size: 13px; font-weight: 600; color: #0077b6; }
        .faq-section .accordion-button:not(.collapsed) { background: #f0f8ff; color: #0077b6; font-weight: 600; }
        .faq-section .accordion-button:focus { box-shadow: none; }
        .cta-section { background: linear-gradient(135deg,#0077b6,#f72585); }
        .other-course-card { background: #fff; border-radius: 14px; overflow: hidden; border: 1px solid #e5e7f0; transition: all .3s ease; text-decoration: none; }
        .other-course-card:hover { box-shadow: 0 8px 30px rgba(0,119,182,.12); transform: translateY(-5px); }
        .other-course-card .oc-icon { background: linear-gradient(135deg,#0077b6,#0b1829); padding: 24px; text-align: center; font-size: 2.5rem; }
        .other-course-card .oc-body { padding: 16px; }
        .other-course-card .oc-body h6 { color: #1a1a3e; font-weight: 700; margin: 0; }
        .section-title { font-weight: 800; font-size: clamp(1.6rem,3vw,2.2rem); color: #1a1a3e; }
        .section-title span { color: #0077b6; }
        .location-badge { background: rgba(0,119,182,.1); border: 1px solid rgba(0,119,182,.3); border-radius: 50px; padding: 8px 20px; color: #00b4d8; font-size: 13px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 16px; }
        .pulse-dot { width: 8px; height: 8px; background: #00b4d8; border-radius: 50%; animation: pulse 1.5s infinite; }
        @keyframes pulse { 0%,100% { transform: scale(1); } 50% { transform: scale(1.5); opacity: 0.6; } }
    </style>

    <!-- HERO -->
    <section class="course-hero">
        <div class="data-bars"><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span><span class="bar"></span></div>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="location-badge"><div class="pulse-dot"></div>📍 Patna, Bihar | Coral Web Technology</div>
                    <span class="d-inline-block mb-3 px-4 py-2 rounded-pill text-white fw-500" style="background:rgba(0,119,182,.2);border:1px solid rgba(0,180,216,.3);font-size:13px">📊 Professional Certification Course</span>
                    <h1 class="mb-3">Data <span>Analytics Course</span></h1>
                    <p class="lead mb-4">Master data analysis tools & techniques. Learn Excel, SQL, Python, Power BI & Google Analytics to transform raw data into powerful business insights and land high-paying data jobs.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">10+</div><p class="stat-label">Modules</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">100%</div><p class="stat-label">Practical</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">300+</div><p class="stat-label">Placed</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">EMI</div><p class="stat-label">Available</p></div></div>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?php echo $base_url; ?>schedule-meeting.php" class="btn-enroll">Enroll Now →</a>
                        <a href="tel:+919117741984" class="btn-demo">📞 Call: +91 9117741984</a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="p-4" style="background:rgba(0,119,182,.15);border-radius:20px;border:1px solid rgba(0,180,216,.3)">
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
                    <li class="breadcrumb-item active">Data Analytics Course</li>
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
                <?php $tools=[["📊","Microsoft Excel"],["🗄️","SQL"],["🐍","Python"],["📈","Power BI"],["📉","Google Analytics"],["🔢","Tableau"],["📋","Google Sheets"],["🤖","Pandas / NumPy"]];
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
                <h2 class="section-title">Best <span>Data Analytics Course</span> in Patna</h2>
                <p class="text-muted mx-auto" style="max-width:650px">Data is the new oil. Every company needs data analysts who can collect, clean, analyze and visualize data to drive decisions. Our course gives you the practical skills to become that person.</p>
            </div>
            <div class="row g-4">
                <?php $cards=[["📊","Data Visualization","Create stunning dashboards & charts that tell compelling data stories."],["🗄️","Database & SQL","Query databases, join tables & extract insights from large datasets."],["🐍","Python for Analytics","Use Pandas, NumPy & Matplotlib for advanced data manipulation."],["📈","Business Intelligence","Build interactive Power BI & Tableau dashboards for executives."],["📉","Statistical Analysis","Apply statistics to identify trends, correlations & predictions."],["🎯","Marketing Analytics","Track campaigns, funnels & customer journeys with data."]];
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
                <p class="text-muted">10+ comprehensive modules from data basics to advanced analytics</p>
            </div>
            <div class="row g-4">
                <?php
                $modules = [
                    ["01","Excel for Data Analysis",["Advanced formulas & functions","Pivot tables & charts","VLOOKUP, INDEX-MATCH","Data cleaning techniques"]],
                    ["02","SQL & Database Basics",["SQL syntax & queries","Joins, subqueries & views","Data filtering & aggregation","MySQL & PostgreSQL basics"]],
                    ["03","Python for Data Analytics",["Python fundamentals for analysts","Pandas for data manipulation","NumPy for numerical computing","Matplotlib & Seaborn charts"]],
                    ["04","Data Cleaning & Preparation",["Handling missing values","Data type conversion","Outlier detection & removal","Data normalization techniques"]],
                    ["05","Data Visualization",["Power BI dashboard creation","Tableau fundamentals","Google Data Studio reports","Storytelling with data"]],
                    ["06","Statistics for Analysts",["Descriptive statistics","Probability & distributions","Hypothesis testing","Regression analysis basics"]],
                    ["07","Google Analytics & Marketing Data",["GA4 setup & configuration","Custom reports & segments","UTM tracking & attribution","E-commerce analytics"]],
                    ["08","Business Intelligence & Reporting",["KPI dashboard design","Automated reporting workflows","Executive-level presentations","Real-world case studies"]],
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
                <h2 class="section-title text-white">Why Choose <span style="color:#00b4d8">Our Course?</span></h2>
            </div>
            <div class="row g-4">
                <?php $whys=[["📊","Live Data Projects","Work on real datasets from multiple industries"],["👨‍🏫","Industry Experts","Trainers with 7+ years of data analytics experience"],["💼","High-Paying Jobs","Data analysts earn ₹4-12 LPA in their first role"],["📜","Certifications","Industry-recognized certificates from Coral & Google"],["💳","Easy EMI","Invest in your data career with flexible payments"],["🔄","Lifetime Access","Course materials & updates accessible forever"]];
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
                        <?php $faqs=[["Is Data Analytics suitable for beginners?","Yes! Our course starts with basics — Excel and foundational concepts — before progressing to SQL, Python and Power BI. No prior coding or statistics knowledge required."],["What tools will I learn?","You'll get hands-on experience with Excel, SQL, Python (Pandas, NumPy), Power BI, Google Analytics, Tableau, and Google Data Studio."],["How long is the Data Analytics course?","The course runs for 3-4 months covering all tools comprehensively. We offer weekday and weekend batches with flexible timings."],["What jobs can I get after this course?","Graduates go on to become: Data Analyst, Business Analyst, Marketing Analyst, BI Analyst, Digital Marketing Analyst — with starting salaries of ₹3.5–8 LPA."],["Is there 100% placement support?","Yes! We provide complete placement assistance including resume building, portfolio projects, mock interviews, and direct connections to hiring companies."]];
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
                <?php $oc=[["🔬","Data Science","data-science-course.php"],["🤖","Digital Marketing AI","digital-marketing-ai-course.php"],["💻","Website Development","website-development-course.php"],["🔍","SEO Course","seo-course.php"],["💰","Google Ads (PPC)","ppc-google-ads-course.php"],["🚀","Performance Marketing","performance-marketing-course.php"]];
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
            <h2 class="fw-800 mb-3 text-white">Start Your Data Analytics Journey!</h2>
            <p class="mb-2 text-white" style="font-size:1.1rem">📍 Chandrakanta Apartment, Boring Road, Patna - 801503</p>
            <p class="mb-4 text-white-50">Land high-paying data jobs with our practical training. Join 300+ successful graduates.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_url; ?>schedule-meeting.php" style="background:#fff;color:#0077b6;font-weight:700;padding:14px 36px;border-radius:50px;text-decoration:none;font-size:1rem;">Enroll Now</a>
                <a href="tel:+919117741984" style="background:rgba(255,255,255,.2);color:#fff;font-weight:600;padding:14px 36px;border-radius:50px;text-decoration:none;font-size:1rem;border:2px solid rgba(255,255,255,.6);">📞 Call: +91 9117741984</a>
            </div>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>
    <script>
document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Page ko reload hone se rokne ke liye

    // 1. Form se data nikalna
    const name = this.querySelector('input[name="name"]').value;
    const phone = this.querySelector('input[name="phone"]').value;
    const email = this.querySelector('input[name="email"]').value;
    const course = this.querySelector('select[name="course"]').value;

    // 2. Aapka WhatsApp Number (Country code '91' ke saath, bina '+' ke)
    const myWhatsAppNumber = '9117741984'; 

    // 3. Message ka design banana (Professional look ke liye)
    // %0A ka matlab hota hai 'New Line' (Enter)
    const message = "Hello Coral Web Technology,%0A" +
                    "I have a new enquiry from the website:%0A%0A" +
                    "*Name:* " + name + "%0A" +
                    "*Phone:* " + phone + "%0A" +
                    "*Email:* " + email + "%0A" +
                    "*Course Interested:* " + course + "%0A%0A" +
                    "Please contact me as soon as possible.";

    // 4. WhatsApp URL taiyar karna
    const whatsappUrl = "https://wa.me/" + myWhatsAppNumber + "?text=" + message;

    // 5. User ko WhatsApp par redirect karna
    window.open(whatsappUrl, '_blank');
});
</script>
</body>
</html>
