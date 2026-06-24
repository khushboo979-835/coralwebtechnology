<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <title>Data Science Course in Patna | Coral Web Technology</title>
    <meta name="description" content="Learn Data Science Course in Patna at Coral Web Technology. Master Python, Machine Learning, Deep Learning, NLP & AI with hands-on projects. 100% job placement assistance in Patna." />
    <meta name="keywords" content="Data Science course Patna, machine learning training Patna, Python AI course Bihar, deep learning course Patna, data scientist training Bihar" />
    <meta property="og:title" content="Data Science Course in Patna | Coral Web Technology" />
    <meta property="og:description" content="Become a Data Scientist with Python, ML & AI training at Coral Web Technology Patna. Hands-on projects & 100% placement assistance." />
</head>
<body>
    <?php include 'common/header.php'; ?>

    <style>
        .course-hero { background: linear-gradient(135deg, #020617 0%, #0f172a 40%, #1e1b4b 100%); padding: 100px 0 70px; position: relative; overflow: hidden; }
        .neural-bg { position: absolute; inset: 0; overflow: hidden; }
        .neural-bg svg { position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0.04; }
        .orbit { position: absolute; border: 1px solid rgba(99,102,241,.15); border-radius: 50%; animation: orbit-spin 20s linear infinite; }
        .orbit:nth-child(1) { width: 300px; height: 300px; top: -50px; right: -50px; animation-duration: 25s; }
        .orbit:nth-child(2) { width: 200px; height: 200px; bottom: -30px; left: -30px; animation-duration: 18s; animation-direction: reverse; }
        @keyframes orbit-spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
        .course-hero h1 { color: #fff; font-size: clamp(2rem,5vw,3.5rem); font-weight: 800; }
        .course-hero h1 span { background: linear-gradient(90deg,#6366f1,#a855f7,#ec4899); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-size: 200%; animation: gradient-move 3s linear infinite; }
        @keyframes gradient-move { 0% { background-position: 0%; } 100% { background-position: 200%; } }
        .course-hero p.lead { color: rgba(255,255,255,.85); }
        .hero-stat { background: rgba(99,102,241,.1); border: 1px solid rgba(99,102,241,.3); border-radius: 12px; padding: 14px 20px; text-align: center; transition: all .3s ease; }
        .hero-stat:hover { background: rgba(99,102,241,.2); transform: translateY(-3px); box-shadow: 0 0 20px rgba(99,102,241,.3); }
        .hero-stat .stat-num { font-size: 1.6rem; font-weight: 800; color: #818cf8; }
        .hero-stat .stat-label { font-size: 12px; color: rgba(255,255,255,.75); margin: 0; }
        .btn-enroll { background: linear-gradient(135deg,#6366f1,#a855f7); color: #fff; font-weight: 700; padding: 14px 36px; border-radius: 50px; border: none; font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-enroll:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(99,102,241,.5); color: #fff; }
        .btn-demo { background: transparent; color: #fff; font-weight: 600; padding: 14px 36px; border-radius: 50px; border: 2px solid rgba(99,102,241,.5); font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-demo:hover { border-color: #6366f1; background: rgba(99,102,241,.1); color: #fff; }
        .overview-card { background: #fff; border-radius: 16px; padding: 28px; box-shadow: 0 4px 20px rgba(0,0,0,.06); border-left: 4px solid #6366f1; transition: transform .3s ease; }
        .overview-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(99,102,241,.12); }
        .overview-card .icon-wrap { width: 54px; height: 54px; background: linear-gradient(135deg,#6366f1,#a855f7); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #fff; margin-bottom: 14px; }
        .module-card { border: 1px solid #e5e7f0; border-radius: 14px; overflow: hidden; transition: all .3s ease; }
        .module-card:hover { box-shadow: 0 8px 30px rgba(99,102,241,.12); transform: translateY(-4px); }
        .module-card .module-header { background: linear-gradient(135deg,#6366f1,#020617); color: #fff; padding: 16px 20px; }
        .module-card .module-header .num { width: 32px; height: 32px; background: rgba(255,255,255,.2); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; margin-right: 10px; }
        .module-card .module-body { padding: 16px 20px; }
        .module-card .module-body ul { list-style: none; padding: 0; margin: 0; }
        .module-card .module-body ul li { padding: 5px 0; color: #444; font-size: 14px; border-bottom: 1px dashed #eee; }
        .module-card .module-body ul li:last-child { border: none; }
        .module-card .module-body ul li::before { content: '✓'; color: #6366f1; font-weight: 700; margin-right: 8px; }
        .why-section { background: linear-gradient(135deg,#020617,#1e1b4b); }
        .why-item { background: rgba(99,102,241,.07); border: 1px solid rgba(99,102,241,.2); border-radius: 14px; padding: 24px; text-align: center; transition: all .3s ease; }
        .why-item:hover { background: rgba(99,102,241,.12); transform: translateY(-5px); box-shadow: 0 0 30px rgba(99,102,241,.15); }
        .why-item .wi-icon { font-size: 2.2rem; margin-bottom: 12px; display: block; }
        .why-item h5 { color: #818cf8; font-weight: 700; margin-bottom: 8px; }
        .why-item p { color: rgba(255,255,255,.78); font-size: 14px; margin: 0; }
        .roadmap-section { background: #f8f8ff; }
        .roadmap-item { position: relative; padding-left: 40px; margin-bottom: 30px; }
        .roadmap-item::before { content: ''; position: absolute; left: 12px; top: 0; height: 100%; width: 2px; background: linear-gradient(#6366f1,#a855f7); }
        .roadmap-item::after { content: ''; position: absolute; left: 4px; top: 6px; width: 18px; height: 18px; background: #6366f1; border-radius: 50%; border: 3px solid #fff; box-shadow: 0 0 0 2px #6366f1; }
        .roadmap-item:last-child::before { display: none; }
        .roadmap-item .rp-title { font-weight: 700; color: #1a1a3e; margin-bottom: 4px; }
        .roadmap-item .rp-desc { color: #666; font-size: 14px; }
        .faq-section .accordion-button:not(.collapsed) { background: #f0f0ff; color: #6366f1; font-weight: 600; }
        .faq-section .accordion-button:focus { box-shadow: none; }
        .cta-section { background: linear-gradient(135deg,#6366f1,#a855f7); }
        .other-course-card { background: #fff; border-radius: 14px; overflow: hidden; border: 1px solid #e5e7f0; transition: all .3s ease; text-decoration: none; }
        .other-course-card:hover { box-shadow: 0 8px 30px rgba(99,102,241,.15); transform: translateY(-5px); }
        .other-course-card .oc-icon { background: linear-gradient(135deg,#6366f1,#020617); padding: 24px; text-align: center; font-size: 2.5rem; }
        .other-course-card .oc-body { padding: 16px; }
        .other-course-card .oc-body h6 { color: #1a1a3e; font-weight: 700; margin: 0; }
        .section-title { font-weight: 800; font-size: clamp(1.6rem,3vw,2.2rem); color: #1a1a3e; }
        .section-title span { color: #6366f1; }
        .location-badge { background: rgba(99,102,241,.1); border: 1px solid rgba(99,102,241,.3); border-radius: 50px; padding: 8px 20px; color: #818cf8; font-size: 13px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 16px; }
        .pulse-dot { width: 8px; height: 8px; background: #818cf8; border-radius: 50%; animation: pulse 1.5s infinite; }
        @keyframes pulse { 0%,100% { transform: scale(1); } 50% { transform: scale(1.5); opacity: 0.6; } }
        .lib-badge { background: linear-gradient(135deg,#6366f1,#1e1b4b); color: #fff; border-radius: 8px; padding: 8px 16px; font-size: 13px; font-weight: 600; display: inline-block; margin: 4px; font-family: monospace; }
    </style>

    <!-- HERO -->
    <section class="course-hero">
        <div class="neural-bg">
            <div class="orbit"></div>
            <div class="orbit"></div>
        </div>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="location-badge"><div class="pulse-dot"></div>📍 Patna, Bihar | Coral Web Technology</div>
                    <span class="d-inline-block mb-3 px-4 py-2 rounded-pill text-white fw-500" style="background:rgba(99,102,241,.15);border:1px solid rgba(99,102,241,.35);font-size:13px">🔬 Advanced Certification Course</span>
                    <h1 class="mb-3">Data <span>Science Course</span></h1>
                    <p class="lead mb-4">Become a Data Scientist with Patna's most comprehensive training. Master Python, Machine Learning, Deep Learning, NLP & AI with real projects & 100% placement assistance.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">12+</div><p class="stat-label">Modules</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">100%</div><p class="stat-label">Practical</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">₹8L+</div><p class="stat-label">Avg Salary</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">EMI</div><p class="stat-label">Available</p></div></div>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?php echo $base_url; ?>schedule-meeting.php" class="btn-enroll">Enroll Now →</a>
                        <a href="tel:+919117741984" class="btn-demo">📞 Call: +91 9117741984</a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="p-4" style="background:rgba(99,102,241,.1);border-radius:20px;border:1px solid rgba(99,102,241,.25)">
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
                    <li class="breadcrumb-item active">Data Science Course</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- TECH STACK -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h2 class="section-title">Libraries & Tools <span>You'll Use</span></h2>
            </div>
            <div class="text-center" data-aos="fade-up">
                <?php $libs=["Python","NumPy","Pandas","Matplotlib","Seaborn","Scikit-learn","TensorFlow","Keras","NLP (NLTK)","OpenCV","Jupyter Notebook","SQL","Power BI","Git"];
                foreach($libs as $l): ?>
                <span class="lib-badge"><?= $l ?></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Best <span>Data Science Course</span> in Patna</h2>
                <p class="text-muted mx-auto" style="max-width:650px">Data Science is the highest-paying field in tech, with average salaries of ₹6-15 LPA for freshers. Our comprehensive program takes you from Python basics to building real ML models deployed in production.</p>
            </div>
            <div class="row g-4">
                <?php $cards=[["🐍","Python Programming","Master Python for data science — from basics to advanced libraries."],["🧠","Machine Learning","Build predictive models with regression, classification & clustering."],["🔮","Deep Learning & AI","Create neural networks with TensorFlow & Keras for complex problems."],["💬","NLP","Process & analyze text data, build chatbots & sentiment analyzers."],["👁️","Computer Vision","Image recognition, object detection & OpenCV applications."],["📊","Data Visualization","Create compelling charts, dashboards & presentation-ready visuals."]];
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
                <p class="text-muted">12+ comprehensive modules — the most complete Data Science training in Patna</p>
            </div>
            <div class="row g-4">
                <?php
                $modules = [
                    ["01","Python for Data Science",["Python syntax, variables & data types","Functions, loops & OOP basics","File handling & error management","Virtual environments & packages"]],
                    ["02","Data Analysis with Pandas",["DataFrame creation & manipulation","Data filtering, sorting & grouping","Handling missing values","Merging, joining & reshaping data"]],
                    ["03","Data Visualization",["Matplotlib plots & customization","Seaborn statistical visualizations","Plotly interactive charts","Dashboards with Streamlit"]],
                    ["04","Statistics for Data Science",["Descriptive & inferential statistics","Probability distributions","Hypothesis testing & p-values","Correlation & covariance"]],
                    ["05","Machine Learning Basics",["Supervised vs unsupervised learning","Linear & logistic regression","Decision trees & random forests","Model evaluation & cross-validation"]],
                    ["06","Advanced ML Algorithms",["SVM & KNN classification","K-Means & hierarchical clustering","Feature engineering & selection","Ensemble methods & boosting"]],
                    ["07","Deep Learning & Neural Networks",["Neural network architecture","TensorFlow & Keras framework","CNNs for image processing","RNNs & LSTMs for sequences"]],
                    ["08","NLP & Project Deployment",["Text preprocessing & tokenization","Sentiment analysis & classification","Building a recommendation system","Model deployment with Flask/Streamlit"]],
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

    <!-- ROADMAP -->
    <section class="roadmap-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="section-title mb-4">Your Learning <span>Roadmap</span></h2>
                    <?php $roadmap=[["Month 1-2","Python & Data Fundamentals","Master Python, NumPy, Pandas & data visualization from scratch"],["Month 3","Statistics & Machine Learning","Learn statistical concepts & build first ML models with Scikit-learn"],["Month 4","Advanced ML & Deep Learning","Neural networks, CNNs, RNNs with TensorFlow & Keras"],["Month 5","Specialization & Projects","NLP, Computer Vision or Business Analytics — choose your track"],["Month 6","Capstone & Placement","Build industry-level project, prepare portfolio & start interviews"]];
                    foreach($roadmap as $r): ?>
                    <div class="roadmap-item" data-aos="fade-up">
                        <div class="rp-title"><?= $r[0] ?>: <?= $r[1] ?></div>
                        <div class="rp-desc"><?= $r[2] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title mb-4">Career <span>Opportunities</span></h2>
                    <?php $careers=[["Data Scientist","₹8-20 LPA","Build predictive models & AI solutions"],["ML Engineer","₹10-25 LPA","Deploy & scale machine learning systems"],["Data Analyst","₹5-12 LPA","Extract insights from business data"],["AI Researcher","₹12-30 LPA","Research & develop next-gen AI models"],["NLP Engineer","₹8-18 LPA","Build conversational AI & text systems"]];
                    foreach($careers as $c): ?>
                    <div class="d-flex align-items-start mb-3 p-3 border rounded" style="border-color:#e5e7f0!important" data-aos="fade-up">
                        <div class="me-3" style="min-width:50px">
                            <span style="background:linear-gradient(135deg,#6366f1,#a855f7);color:#fff;border-radius:8px;padding:8px 12px;font-size:13px;font-weight:700"><?= $c[1] ?></span>
                        </div>
                        <div>
                            <div style="font-weight:700;color:#1a1a3e"><?= $c[0] ?></div>
                            <div style="color:#666;font-size:13px"><?= $c[2] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY US -->
    <section class="why-section py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title text-white">Why <span style="color:#818cf8">Our Data Science Course?</span></h2>
            </div>
            <div class="row g-4">
                <?php $whys=[["🔬","Hands-on Projects","8 real data science & ML projects for your portfolio"],["👨‍🏫","Industry Experts","Trainers with AI/ML experience at top tech companies"],["💼","Highest-Paying Jobs","Avg starting salary ₹6-15 LPA in data science roles"],["📜","Certifications","Coral & partner certifications for data science"],["💳","Easy EMI","Invest in Patna's most in-demand tech skill"],["🔄","Lifetime Access","Course & updates accessible throughout your career"]];
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
                        <?php $faqs=[["Do I need a Math or programming background?","Basic math (10th grade level) is helpful but not required. We start Python from absolute zero. Our curriculum is designed so anyone can become a data scientist with dedication."],["What is the difference between Data Analytics & Data Science?","Data Analytics focuses on analyzing existing data to find insights. Data Science goes deeper — building predictive models, machine learning algorithms & AI systems from scratch."],["How long is the Data Science course?","The course runs for 5-6 months with comprehensive coverage of Python, ML, Deep Learning & project work. This is the most thorough Data Science program in Patna."],["What projects will I build?","You'll build 8 real projects: stock price predictor, sentiment analyzer, image classifier, recommendation system, fraud detection model, customer churn predictor & more."],["Are there job placements for Data Science graduates?","Yes! Data Science is the most in-demand skill globally. We provide 100% placement assistance with dedicated HR support, mock interviews & direct connections to hiring companies."]];
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
                <?php $oc=[["📊","Data Analytics","data-analytics-course.php"],["🤖","Digital Marketing AI","digital-marketing-ai-course.php"],["💻","Website Development","website-development-course.php"],["🌐","WordPress Design","wordpress-website-course.php"],["🔍","SEO Course","seo-course.php"],["🚀","Performance Marketing","performance-marketing-course.php"]];
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
            <h2 class="fw-800 mb-3 text-white">Launch Your Data Science Career Today!</h2>
            <p class="mb-2 text-white" style="font-size:1.1rem">📍 Chandrakanta Apartment, Boring Road, Patna - 801503</p>
            <p class="mb-4 text-white-50">Join 200+ data scientists trained at Coral Web Technology. Batch starts soon.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_url; ?>schedule-meeting.php" style="background:#fff;color:#6366f1;font-weight:700;padding:14px 36px;border-radius:50px;text-decoration:none;font-size:1rem;">Enroll Now</a>
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
