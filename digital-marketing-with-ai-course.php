paytnotno<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <title>Digital Marketing with AI Course in Patna | Coral Web Technology</title>
    <meta name="description" content="Learn Digital Marketing with Artificial Intelligence in Patna at Coral Web Technology. Master AI tools for SEO, content creation, ad optimization & marketing automation. Future-proof your career." />
    <meta name="keywords" content="Digital Marketing AI course Patna, AI marketing training Patna, ChatGPT marketing course, AI tools for digital marketing, machine learning marketing Bihar" />
    <meta property="og:title" content="Digital Marketing with AI Course in Patna | Coral Web Technology" />
    <meta property="og:description" content="Future-proof your marketing career with AI. Learn ChatGPT, Gemini, AI SEO tools & automation at Coral Web Technology Patna." />
</head>
<body>
    <?php include 'common/header.php'; ?>

    <style>
        .course-hero { background: linear-gradient(135deg, #0a0a1a 0%, #0d1b2a 40%, #1a0a3e 100%); padding: 100px 0 70px; position: relative; overflow: hidden; }
        .ai-grid { position: absolute; inset: 0; background-image: linear-gradient(rgba(0,212,255,.05) 1px, transparent 1px), linear-gradient(90deg, rgba(0,212,255,.05) 1px, transparent 1px); background-size: 60px 60px; }
        .ai-glow { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 600px; height: 600px; background: radial-gradient(ellipse, rgba(139,92,246,.15) 0%, transparent 70%); border-radius: 50%; }
        .course-hero h1 { color: #fff; font-size: clamp(2rem,5vw,3.5rem); font-weight: 800; }
        .course-hero h1 span { background: linear-gradient(90deg,#00d4ff,#8b5cf6,#f59e0b); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-size: 200% auto; animation: gradient-flow 3s linear infinite; }
        @keyframes gradient-flow { 0% { background-position: 0% center; } 100% { background-position: 200% center; } }
        .course-hero p.lead { color: rgba(255,255,255,.85); }
        .hero-stat { background: rgba(255,255,255,.08); border: 1px solid rgba(0,212,255,.3); border-radius: 12px; padding: 14px 20px; text-align: center; transition: all .3s ease; }
        .hero-stat:hover { background: rgba(0,212,255,.1); transform: translateY(-3px); box-shadow: 0 0 20px rgba(0,212,255,.2); }
        .hero-stat .stat-num { font-size: 1.6rem; font-weight: 800; color: #00d4ff; }
        .hero-stat .stat-label { font-size: 12px; color: rgba(255,255,255,.75); margin: 0; }
        .btn-enroll { background: linear-gradient(135deg,#8b5cf6,#00d4ff); color: #fff; font-weight: 700; padding: 14px 36px; border-radius: 50px; border: none; font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-enroll:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(139,92,246,.5); color: #fff; }
        .btn-demo { background: transparent; color: #fff; font-weight: 600; padding: 14px 36px; border-radius: 50px; border: 2px solid rgba(0,212,255,.5); font-size: 1rem; transition: all .3s ease; text-decoration: none; display: inline-block; }
        .btn-demo:hover { border-color: #00d4ff; background: rgba(0,212,255,.1); color: #fff; }
        .overview-card { background: #fff; border-radius: 16px; padding: 28px; box-shadow: 0 4px 20px rgba(0,0,0,.06); border-left: 4px solid #8b5cf6; transition: transform .3s ease; }
        .overview-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(139,92,246,.12); }
        .overview-card .icon-wrap { width: 54px; height: 54px; background: linear-gradient(135deg,#8b5cf6,#00d4ff); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #fff; margin-bottom: 14px; }
        .module-card { border: 1px solid #e5e7f0; border-radius: 14px; overflow: hidden; transition: all .3s ease; }
        .module-card:hover { box-shadow: 0 8px 30px rgba(139,92,246,.12); transform: translateY(-4px); }
        .module-card .module-header { background: linear-gradient(135deg,#8b5cf6,#0d1b2a); color: #fff; padding: 16px 20px; }
        .module-card .module-header .num { width: 32px; height: 32px; background: rgba(255,255,255,.2); border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; margin-right: 10px; }
        .module-card .module-body { padding: 16px 20px; }
        .module-card .module-body ul { list-style: none; padding: 0; margin: 0; }
        .module-card .module-body ul li { padding: 5px 0; color: #444; font-size: 14px; border-bottom: 1px dashed #eee; }
        .module-card .module-body ul li:last-child { border: none; }
        .module-card .module-body ul li::before { content: '✓'; color: #8b5cf6; font-weight: 700; margin-right: 8px; }
        .why-section { background: linear-gradient(135deg,#0a0a1a,#1a0a3e); }
        .why-item { background: rgba(255,255,255,.06); border: 1px solid rgba(0,212,255,.2); border-radius: 14px; padding: 24px; text-align: center; transition: all .3s ease; }
        .why-item:hover { background: rgba(0,212,255,.08); transform: translateY(-5px); box-shadow: 0 0 30px rgba(0,212,255,.1); }
        .why-item .wi-icon { font-size: 2.2rem; margin-bottom: 12px; display: block; }
        .why-item h5 { color: #00d4ff; font-weight: 700; margin-bottom: 8px; }
        .why-item p { color: rgba(255,255,255,.78); font-size: 14px; margin: 0; }
        .ai-tools-section { background: #f8f9ff; }
        .ai-tool-badge { background: linear-gradient(135deg,#8b5cf6,#00d4ff); color: #fff; border-radius: 50px; padding: 8px 20px; font-weight: 600; font-size: 14px; display: inline-block; margin: 6px; transition: all .3s ease; }
        .ai-tool-badge:hover { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(139,92,246,.4); }
        .faq-section .accordion-button:not(.collapsed) { background: #f0f4ff; color: #8b5cf6; font-weight: 600; }
        .faq-section .accordion-button:focus { box-shadow: none; }
        .cta-section { background: linear-gradient(135deg,#8b5cf6,#00d4ff); }
        .other-course-card { background: #fff; border-radius: 14px; overflow: hidden; border: 1px solid #e5e7f0; transition: all .3s ease; text-decoration: none; }
        .other-course-card:hover { box-shadow: 0 8px 30px rgba(139,92,246,.15); transform: translateY(-5px); }
        .other-course-card .oc-icon { background: linear-gradient(135deg,#8b5cf6,#0d1b2a); padding: 24px; text-align: center; font-size: 2.5rem; }
        .other-course-card .oc-body { padding: 16px; }
        .other-course-card .oc-body h6 { color: #1a1a3e; font-weight: 700; margin: 0; }
        .section-title { font-weight: 800; font-size: clamp(1.6rem,3vw,2.2rem); color: #1a1a3e; }
        .section-title span { color: #8b5cf6; }
        .location-badge { background: rgba(139,92,246,.1); border: 1px solid rgba(139,92,246,.3); border-radius: 50px; padding: 8px 20px; color: #8b5cf6; font-size: 13px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; margin-bottom: 16px; }
        .pulse-dot { width: 8px; height: 8px; background: #8b5cf6; border-radius: 50%; animation: pulse 1.5s infinite; }
        @keyframes pulse { 0%,100% { transform: scale(1); opacity: 1; } 50% { transform: scale(1.5); opacity: 0.6; } }
    </style>

    <!-- HERO -->
    <section class="course-hero">
        <div class="ai-grid"></div>
        <div class="ai-glow"></div>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="location-badge">
                        <div class="pulse-dot"></div>
                        📍 Patna, Bihar | Coral Web Technology
                    </div>
                    <span class="d-inline-block mb-3 px-4 py-2 rounded-pill text-white fw-500" style="background:rgba(139,92,246,.2);border:1px solid rgba(139,92,246,.4);font-size:13px">🤖 Future-Ready Certification Course</span>
                    <h1 class="mb-3">Digital Marketing <span>with AI Course</span></h1>
                    <p class="lead mb-4">Combine the power of Digital Marketing & Artificial Intelligence. Master ChatGPT, Gemini, AI SEO tools, content automation & smart ad optimization for a future-proof career.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">15+</div><p class="stat-label">AI Tools</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">100%</div><p class="stat-label">Practical</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">10x</div><p class="stat-label">Faster</p></div></div>
                        <div class="col-6 col-md-3"><div class="hero-stat"><div class="stat-num">EMI</div><p class="stat-label">Available</p></div></div>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?php echo $base_url; ?>schedule-meeting.php" class="btn-enroll">Enroll Now →</a>
                        <a href="tel:+918102549601" class="btn-demo">Inquiry Now: 8102549601</a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="p-4" style="background:rgba(139,92,246,.1);border-radius:20px;border:1px solid rgba(0,212,255,.2)">
                        <h5 class="text-white mb-3">📋 Admission Form</h5>
                        <form id="whatsappForm" class="whatsapp-form">
                            <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="border-radius:10px;padding:12px 16px;"></div>
                            <div class="mb-3"><input type="tel" name="phone" class="form-control" placeholder="Phone Number" required style="border-radius:10px;padding:12px 16px;"></div>
                            <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Email Address" style="border-radius:10px;padding:12px 16px;"></div>
                            <div class="mb-3">
                                <select name="course" id="courseSelect" class="form-select" required style="border-radius:10px;padding:12px 16px;">
                                    <option value="">-- Select Interest --</option>
                                    <option value="3-Month Practical Digital Marketing Course">3-Month Practical Digital Marketing Course</option>
                                    <option value="4-Month Job-Oriented Digital Marketing Course">4-Month Job-Oriented Digital Marketing Course</option>
                                </select>
                            </div>
                            
                            <div id="courseDetails" class="mb-3" style="display:none; background: rgba(255,255,255,0.05); padding: 15px; border-radius: 10px; border: 1px solid rgba(0,212,255,0.2); color: #fff; font-size: 13.5px; line-height: 1.5;">
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
                    <li class="breadcrumb-item active">Digital Marketing with AI Course</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- COURSE HIGHLIGHTS & PRICING -->
    <section class="course-pricing-details py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Digital Marketing Training <span>at Coral Web Technology</span></h2>
                <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                    <span class="badge bg-light text-dark p-3 border fs-6 shadow-sm"><i class="bi bi-laptop text-primary me-2"></i> Live Online Practical Classes</span>
                    <span class="badge bg-light text-dark p-3 border fs-6 shadow-sm"><i class="bi bi-clock-history text-primary me-2"></i> 1 Hour 30 Minutes Per Class</span>
                    <span class="badge bg-light text-dark p-3 border fs-6 shadow-sm"><i class="bi bi-calendar-check text-primary me-2"></i> Monday to Friday</span>
                    <span class="badge bg-light text-dark p-3 border fs-6 shadow-sm"><i class="bi bi-alarm text-primary me-2"></i> Flexible Timing: 10 AM – 7 PM</span>
                </div>
            </div>

            <style>
                .pricing-card {
                    background: #fff;
                    border-radius: 20px;
                    border: 1px solid #e2e8f0;
                    padding: 25px 25px;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
                    transition: all 0.3s ease;
                    height: 100%;
                    position: relative;
                }
                .pricing-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
                }
                .pricing-card.premium {
                    border: 2px solid #8b5cf6;
                    box-shadow: 0 15px 35px rgba(139, 92, 246, 0.15);
                }
                .pricing-card.premium .badge-popular {
                    position: absolute;
                    top: -15px;
                    right: 25px;
                    background: linear-gradient(90deg, #8b5cf6, #00d4ff);
                    color: white;
                    padding: 6px 16px;
                    border-radius: 50px;
                    font-weight: bold;
                    font-size: 0.85rem;
                    box-shadow: 0 5px 15px rgba(139, 92, 246, 0.4);
                }
                .course-title {
                    font-size: 1.25rem;
                    font-weight: 800;
                    color: #1a1a3e;
                    margin-bottom: 15px;
                    line-height: 1.4;
                }
                .price-block {
                    background: #f8f9fa;
                    border-radius: 12px;
                    padding: 15px;
                    margin-bottom: 20px;
                    text-align: center;
                }
                .original-price {
                    color: #6c757d;
                    font-size: 1rem;
                    text-decoration: line-through;
                    margin-bottom: 2px;
                }
                .offer-price {
                    color: #10b981;
                    font-size: 1.8rem;
                    font-weight: 900;
                    margin-bottom: 0;
                }
                .offer-price span {
                    font-size: 0.9rem;
                    color: #4a5568;
                    font-weight: 600;
                }
                .feature-list {
                    list-style: none;
                    padding: 0;
                    margin-bottom: 20px;
                }
                .feature-list li {
                    margin-bottom: 10px;
                    font-size: 0.95rem;
                    color: #334155;
                    display: flex;
                    align-items: flex-start;
                }
                .feature-list li i {
                    color: #10b981;
                    margin-right: 10px;
                    font-size: 1.1rem;
                    margin-top: -1px;
                }
                .payment-options-title {
                    font-weight: 700;
                    font-size: 1rem;
                    color: #1a1a3e;
                    margin-bottom: 12px;
                    border-bottom: 2px dashed #e2e8f0;
                    padding-bottom: 8px;
                }
                .payment-box {
                    background: rgba(139, 92, 246, 0.05);
                    border: 1px solid rgba(139, 92, 246, 0.2);
                    border-radius: 10px;
                    padding: 15px;
                    margin-bottom: 15px;
                }
                .payment-box p {
                    margin-bottom: 6px;
                    font-size: 0.9rem;
                    font-weight: 600;
                    color: #1a1a3e;
                }
                .payment-box p:last-child {
                    margin-bottom: 0;
                }
                .payment-box p i {
                    color: #8b5cf6;
                    margin-right: 8px;
                }
                .contact-info-bar {
                    background: linear-gradient(135deg, #1a1a3e, #0d1b2a);
                    color: white;
                    border-radius: 15px;
                    padding: 20px;
                    margin-top: 40px;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-around;
                    align-items: center;
                    gap: 20px;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
                }
                .contact-item {
                    display: flex;
                    align-items: center;
                    font-size: 0.95rem;
                }
                .contact-item i {
                    font-size: 1.6rem;
                    color: #00d4ff;
                    margin-right: 12px;
                }
            </style>

            <div class="row g-4 justify-content-center align-items-stretch">
                <!-- 3 Month Course -->
                <div class="col-md-10 col-lg-5" data-aos="fade-up" data-aos-delay="0">
                    <div class="pricing-card">
                        <h3 class="course-title">🎯 3-Month Practical Digital Marketing Course</h3>
                        
                        <div class="price-block">
                            <p class="original-price">Original Fee: ₹32,000</p>
                            <p class="offer-price">₹8,000 <span>Only</span></p>
                            <div class="badge bg-danger mt-2 px-3 py-1">🔥 Special Offer</div>
                        </div>

                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> Practical Training</li>
                            <li><i class="bi bi-check-circle-fill"></i> SEO + Google Ads + Meta Ads + Social Media + GMB</li>
                            <li><i class="bi bi-check-circle-fill"></i> Live Practice</li>
                        </ul>

                        <div class="payment-box">
                            <div class="payment-options-title">💰 Payment Options</div>
                            <p><i class="bi bi-wallet2"></i> One-Time Payment: <span class="text-success fw-bold">₹6,000</span></p>
                            <p><i class="bi bi-credit-card-2-front"></i> 2 Installments: <span class="text-primary fw-bold">3500 + 3500</span> (₹7,000 Total)</p>
                            <p><i class="bi bi-calendar3"></i> 3 Installments: <span class="text-primary fw-bold">3000 + 2500 + 2500</span> (₹8,000 Total)</p>
                        </div>
                    </div>
                </div>

                <!-- 4 Month Course -->
                <div class="col-md-10 col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card premium">
                        <div class="badge-popular">⭐ Job-Oriented</div>
                        <h3 class="course-title">🎯 4-Month Job-Oriented Digital Marketing Course</h3>
                        
                        <div class="price-block">
                            <p class="original-price">Original Fee: ₹64,000</p>
                            <p class="offer-price">₹16,000 <span>Only</span></p>
                            <div class="badge bg-danger mt-2 px-3 py-2">🔥 Special Offer</div>
                        </div>

                        <ul class="feature-list">
                            <li><i class="bi bi-check-circle-fill"></i> 3 Months Classes</li>
                            <li><i class="bi bi-check-circle-fill"></i> 1 Month Internship</li>
                            <li><i class="bi bi-check-circle-fill"></i> Advanced Practical Training with Real-Time Implementation</li>
                            <li><i class="bi bi-check-circle-fill"></i> Live Client Projects Exposure</li>
                            <li><i class="bi bi-check-circle-fill"></i> Interview Preparation (Questions & Answers)</li>
                            <li><i class="bi bi-check-circle-fill text-warning"></i> 100% Placement Assistance</li>
                        </ul>

                        <div class="payment-box">
                            <div class="payment-options-title">💰 Payment Options</div>
                            <p><i class="bi bi-wallet2"></i> One-Time Payment: <span class="text-success fw-bold">₹12,000</span></p>
                            <p><i class="bi bi-credit-card-2-front"></i> 2 Installments: <span class="text-primary fw-bold">7000 + 7000</span> (₹14,000 Total)</p>
                            <p><i class="bi bi-calendar3"></i> 3 Installments: <span class="text-primary fw-bold">6000 + 5000 + 5000</span> (₹16,000 Total)</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Info Bottom Bar -->
            <div class="contact-info-bar" data-aos="fade-up">
                <div class="contact-item">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                        <strong class="d-block mb-1">Visit Our Institute</strong>
                        <span>Chandkanta Apartment, Near Zudio Mall, Boring Road, Patna</span>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="bi bi-telephone"></i>
                    <div>
                        <strong class="d-block mb-1">Call Us Now</strong>
                        <a href="tel:9117741984" class="text-white text-decoration-none">9117741984</a> | 
                        <a href="tel:8102549601" class="text-white text-decoration-none">8102549601</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- COURSE MODULES GRID -->
    <section class="course-modules-section py-5" style="background: #fdfdff;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Digital Marketing <span>with AI Course</span></h2>
                <p class="text-muted">Master the core pillars of digital marketing enhanced with AI technologies</p>
            </div>
            
            <style>
                .module-grid-card {
                    background: #ffffff;
                    border-radius: 20px;
                    padding: 30px 25px;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
                    transition: all 0.3s ease;
                    border: 1px solid rgba(0,0,0,0.06);
                    position: relative;
                    text-decoration: none;
                    display: flex;
                    flex-direction: column;
                    height: 100%;
                }
                .module-grid-card:hover {
                    transform: scale(1.03);
                }
                .module-grid-card .icon-container {
                    width: 70px;
                    height: 70px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 32px;
                    margin-bottom: 20px;
                    transition: all 0.3s ease;
                }
                .module-grid-card h4 {
                    font-weight: 800;
                    color: #1a1a3e;
                    margin-bottom: 12px;
                    font-size: 1.35rem;
                }
                .module-grid-card p.module-desc {
                    color: #64748b;
                    font-size: 0.95rem;
                    line-height: 1.5;
                    margin-bottom: 20px;
                    font-weight: 400;
                }
                .module-grid-card ul.overview-list {
                    list-style: none;
                    padding: 0;
                    margin: 0 0 25px 0;
                    flex-grow: 1;
                    border-top: 1px dashed rgba(0,0,0,0.05);
                    padding-top: 20px;
                }
                .module-grid-card ul.overview-list li {
                    color: #334155;
                    font-size: 0.9rem;
                    margin-bottom: 12px;
                    display: flex;
                    align-items: flex-start;
                    font-weight: 500;
                }
                .module-grid-card ul.overview-list li i {
                    margin-right: 10px;
                    font-size: 1.1rem;
                    margin-top: -2px;
                }
                .btn-view-details {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 14px 0;
                    color: #ffffff !important;
                    border-radius: 50px;
                    font-weight: 700;
                    font-size: 1rem;
                    transition: all 0.3s ease;
                    margin-top: auto;
                    width: 100%;
                    text-decoration: none;
                }
                .module-grid-card:hover .btn-view-details {
                    transform: translateY(-2px);
                }
                .btn-view-details i {
                    margin-left: 8px;
                    transition: transform 0.3s ease;
                }
                .module-grid-card:hover .btn-view-details i {
                    transform: translateX(5px);
                }

                /* Specific Colors */
                .card-google:hover { border-color: rgba(234, 67, 53, 0.4); box-shadow: 0 20px 40px rgba(234, 67, 53, 0.15); }
                .card-google .icon-container { background: rgba(234, 67, 53, 0.1); color: #ea4335; }
                .card-google:hover .icon-container { background: #ea4335; color: #fff; box-shadow: 0 5px 15px rgba(234, 67, 53, 0.4); }
                .card-google .btn-view-details { background: linear-gradient(90deg, #ea4335, #fbbc05); box-shadow: 0 4px 15px rgba(234, 67, 53, 0.3); }
                .card-google:hover .btn-view-details { box-shadow: 0 8px 25px rgba(234, 67, 53, 0.5); }
                .card-google ul.overview-list li i { color: #ea4335; }

                .card-meta:hover { border-color: rgba(24, 119, 242, 0.4); box-shadow: 0 20px 40px rgba(24, 119, 242, 0.15); }
                .card-meta .icon-container { background: rgba(24, 119, 242, 0.1); color: #1877F2; }
                .card-meta:hover .icon-container { background: #1877F2; color: #fff; box-shadow: 0 5px 15px rgba(24, 119, 242, 0.4); }
                .card-meta .btn-view-details { background: linear-gradient(90deg, #1877F2, #00c6ff); box-shadow: 0 4px 15px rgba(24, 119, 242, 0.3); }
                .card-meta:hover .btn-view-details { box-shadow: 0 8px 25px rgba(24, 119, 242, 0.5); }
                .card-meta ul.overview-list li i { color: #1877F2; }

                .card-seo:hover { border-color: rgba(16, 185, 129, 0.4); box-shadow: 0 20px 40px rgba(16, 185, 129, 0.15); }
                .card-seo .icon-container { background: rgba(16, 185, 129, 0.1); color: #10b981; }
                .card-seo:hover .icon-container { background: #10b981; color: #fff; box-shadow: 0 5px 15px rgba(16, 185, 129, 0.4); }
                .card-seo .btn-view-details { background: linear-gradient(90deg, #10b981, #00d4ff); box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3); }
                .card-seo:hover .btn-view-details { box-shadow: 0 8px 25px rgba(16, 185, 129, 0.5); }
                .card-seo ul.overview-list li i { color: #10b981; }

                .card-social:hover { border-color: rgba(225, 48, 108, 0.4); box-shadow: 0 20px 40px rgba(225, 48, 108, 0.15); }
                .card-social .icon-container { background: rgba(225, 48, 108, 0.1); color: #E1306C; }
                .card-social:hover .icon-container { background: #E1306C; color: #fff; box-shadow: 0 5px 15px rgba(225, 48, 108, 0.4); }
                .card-social .btn-view-details { background: linear-gradient(90deg, #E1306C, #f56040); box-shadow: 0 4px 15px rgba(225, 48, 108, 0.3); }
                .card-social:hover .btn-view-details { box-shadow: 0 8px 25px rgba(225, 48, 108, 0.5); }
                .card-social ul.overview-list li i { color: #E1306C; }
            </style>

            <div class="row g-4">
                <!-- Google Ads -->
                <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="module-grid-card card-google">
                        <div class="icon-container">
                            <i class="bi bi-google"></i>
                        </div>
                        <h4>Google Ads</h4>
                        <p class="module-desc">Learn PPC advertising, campaign setup, keyword targeting, and ROI optimization.</p>
                        <ul class="overview-list">
                            <li><i class="bi bi-clock-history"></i> Duration: 3–4 Months</li>
                            <li><i class="bi bi-briefcase"></i> Internship: 1 Month (Guaranteed)</li>
                            <li><i class="bi bi-laptop"></i> Mode: Online + Live Classes</li>
                            <li><i class="bi bi-bar-chart-line"></i> Level: Beginner to Advanced</li>
                        </ul>
                        <a href="<?php echo $base_url; ?>google-ads-course.php" class="btn-view-details">
                            View Details <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Meta Ads -->
                <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="module-grid-card card-meta">
                        <div class="icon-container">
                            <i class="bi bi-facebook"></i>
                        </div>
                        <h4>Meta Ads</h4>
                        <p class="module-desc">Master Facebook & Instagram ads, audience targeting, creatives, and ad scaling.</p>
                        <ul class="overview-list">
                            <li><i class="bi bi-clock-history"></i> Duration: 3–4 Months</li>
                            <li><i class="bi bi-briefcase"></i> Internship: 1 Month (Guaranteed)</li>
                            <li><i class="bi bi-laptop"></i> Mode: Online + Live Classes</li>
                            <li><i class="bi bi-bar-chart-line"></i> Level: Beginner to Advanced</li>
                        </ul>
                        <a href="<?php echo $base_url; ?>meta-ads-course.php" class="btn-view-details">
                            View Details <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- SEO -->
                <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="module-grid-card card-seo">
                        <div class="icon-container">
                            <i class="bi bi-search"></i>
                        </div>
                        <h4>SEO</h4>
                        <p class="module-desc">Learn on-page, off-page, technical SEO, keyword research, and ranking strategies.</p>
                        <ul class="overview-list">
                            <li><i class="bi bi-clock-history"></i> Duration: 3–4 Months</li>
                            <li><i class="bi bi-briefcase"></i> Internship: 1 Month (Guaranteed)</li>
                            <li><i class="bi bi-laptop"></i> Mode: Online + Live Classes</li>
                            <li><i class="bi bi-bar-chart-line"></i> Level: Beginner to Advanced</li>
                        </ul>
                        <a href="<?php echo $base_url; ?>seo-course.php" class="btn-view-details">
                            View Details <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Social Media Marketing -->
                <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="module-grid-card card-social">
                        <div class="icon-container">
                            <i class="bi bi-share"></i>
                        </div>
                        <h4>Social Media Marketing</h4>
                        <p class="module-desc">Learn content strategy, reels growth, branding, and audience engagement techniques.</p>
                        <ul class="overview-list">
                            <li><i class="bi bi-clock-history"></i> Duration: 3–4 Months</li>
                            <li><i class="bi bi-briefcase"></i> Internship: 1 Month (Guaranteed)</li>
                            <li><i class="bi bi-laptop"></i> Mode: Online + Live Classes</li>
                            <li><i class="bi bi-bar-chart-line"></i> Level: Beginner to Advanced</li>
                        </ul>
                        <a href="<?php echo $base_url; ?>social-media-marketing-course.php" class="btn-view-details">
                            View Details <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Best <span>Digital Marketing AI Course</span> in Patna</h2>
                <p class="text-muted mx-auto" style="max-width:650px">AI is transforming every aspect of marketing. Our course teaches you to harness AI for faster content creation, smarter ad campaigns, automated SEO & data-driven decisions — giving you a massive competitive advantage.</p>
            </div>
            <div class="row g-4">
                <?php $cards = [["🤖","AI Content Creation","Use ChatGPT & Jasper to create blogs, ads & social content 10x faster."],["🔍","AI-Powered SEO","Leverage Semrush AI & SurferSEO for data-driven keyword strategies."],["🎨","AI Image & Design","Create stunning visuals with Midjourney, DALL-E & Canva AI."],["📊","AI Analytics","Use machine learning to predict campaign performance & user behavior."],["🚀","AI Ad Optimization","Google PMax & Meta Advantage+ for smarter automated campaigns."],["⚡","Marketing Automation","Build AI-powered email sequences & chatbots that convert 24/7."]];
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
                <p class="text-muted">Complete Digital Marketing curriculum enhanced with AI tools at every step</p>
            </div>
            <div class="row g-4">
                <?php
                $modules = [
                    ["01","AI Fundamentals for Marketers",["What is AI & Machine Learning?","LLMs: ChatGPT, Gemini, Claude","Prompt engineering for marketing","AI ethics & responsible use"]],
                    ["02","AI-Powered Content Marketing",["Blog writing with ChatGPT & Jasper","AI video scripts & YouTube content","Social media content at scale","Email copywriting with AI"]],
                    ["03","AI SEO Techniques",["Keyword research with AI tools","SurferSEO content optimization","Technical SEO automation","AI-driven link building"]],
                    ["04","AI for Social Media",["AI content calendar generation","Automated posting & scheduling","Sentiment analysis tools","AI-based influencer research"]],
                    ["05","AI Advertising & PPC",["Google Performance Max campaigns","Meta Advantage+ shopping","AI bid optimization strategies","Dynamic ad creative generation"]],
                    ["06","AI Design & Visuals",["Midjourney & DALL-E for marketing","Canva AI for brand consistency","AI video generation basics","Product photography with AI"]],
                    ["07","AI Analytics & Data",["Predictive analytics fundamentals","GA4 + AI insights integration","Customer segmentation with AI","A/B testing automation"]],
                    ["08","AI Marketing Automation",["HubSpot AI workflows","AI chatbot for lead generation","Email automation with AI","WhatsApp bot marketing"]],
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
                <h2 class="section-title text-white">Why Learn <span style="color:#00d4ff">AI Marketing with Us?</span></h2>
            </div>
            <div class="row g-4">
                <?php $whys=[["🤖","Cutting-Edge Curriculum","15+ AI tools integrated into marketing workflows"],["👨‍🏫","Industry Experts","Trainers who actively use AI in real client campaigns"],["💼","High-Salary Jobs","AI marketers earn 40-60% more than traditional marketers"],["📜","Dual Certification","Digital Marketing + AI specialization certificate"],["💳","Easy EMI","Invest in your AI marketing career with flexible payments"],["🔄","Always Updated","Course updated monthly with latest AI tools & techniques"]];
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
                        <?php $faqs=[["Do I need programming skills for this AI course?","No programming knowledge required! Our course teaches you to use AI tools through intuitive interfaces. You'll become a power user of AI marketing tools, not a developer."],["What makes this different from a regular digital marketing course?","This course integrates 15+ AI tools into every module — from content creation to SEO to paid advertising. You'll learn to do in 1 hour what traditionally takes 8 hours."],["How long is the Digital Marketing with AI Course?","The course runs for 3-4 months with comprehensive coverage of both digital marketing fundamentals and AI tool mastery. Weekday and weekend batches available."],["Will AI replace marketing jobs?","AI won't replace marketers — but AI-skilled marketers will replace those who ignore it. Our course makes you the AI-powered marketer every company wants to hire."],["Is there placement support?","Yes! We provide 100% placement assistance. AI marketing is one of the most in-demand skills in 2024-25 and our graduates are being hired at premium salaries."]];
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
                <?php $oc=[["🚀","Performance Marketing","performance-marketing-course.php"],["🔍","SEO Course","seo-course.php"],["📱","Social Media Marketing","social-media-marketing-course.php"],["📘","Meta Ads Course","meta-ads-facebook-course.php"],["📊","Data Analytics","data-analytics-course.php"],["💰","Google Ads (PPC)","ppc-google-ads-course.php"]];
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
            <h2 class="fw-800 mb-3 text-white">Become an AI-Powered Marketer Today!</h2>
            <p class="mb-2 text-white" style="font-size:1.1rem">📍 Chandrakanta Apartment, Boring Road, Patna - 801503</p>
            <p class="mb-4 text-white-50">Future-proof your career with AI + Digital Marketing skills.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="<?php echo $base_url; ?>schedule-meeting.php" style="background:#fff;color:#8b5cf6;font-weight:700;padding:14px 36px;border-radius:50px;text-decoration:none;font-size:1rem;">Enroll Now</a>
                <a href="tel:+919117741984" style="background:rgba(255,255,255,.2);color:#fff;font-weight:600;padding:14px 36px;border-radius:50px;text-decoration:none;font-size:1rem;border:2px solid rgba(255,255,255,.6);">📞 Call: +91 9117741984</a>
            </div>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>
    <script>
        const courseSelect = document.getElementById('courseSelect');
        const courseDetails = document.getElementById('courseDetails');
        const courseSelect = document.getElementById('courseSelect');
        let currentCourse = "";

        const courseDetails = document.getElementById('courseDetails');


        let currentCourse = "";
        
        const courseData = {
            '3-Month Practical Digital Marketing Course': {
                full: 6000,
                installments: [
                    { label: '2 Installments', amount: 3500 },
                    { label: '1st Installment', amount: 3000 },
                    { label: '2nd Installment', amount: 2500 },
                    { label: '3rd Installment', amount: 2500 }
                ]
            },
            '4-Month Job-Oriented Digital Marketing Course': {
                full: 12000,
                installments: [
                    { label: '1st Installment', amount: 4000 },
                    { label: '2nd Installment', amount: 4000 },
                    { label: '3rd Installment', amount: 4000 },
                    { label: '4th Installment', amount: 4000 }
                ]
            }
        };

        if(courseSelect) {
            courseSelect.addEventListener('change', function() {
                currentCourse = this.value;
                renderOptions();
            });
        }

        function renderOptions() {
            paymentOptionsGrid.innerHTML = '';
            
            // 1. ALWAYS Add "Enter Your Amount" option
            addOption('custom', 'Enter Amount', 'Manual', 'bi-pencil-square');
            
            if(currentCourse && courseData[currentCourse]) {
                const data = courseData[currentCourse];
                // 2. Add Full Payment option
                addOption(data.full, 'Full Pay', `₹${data.full.toLocaleString()}`, 'bi-wallet2');

                // 3. Add Installments
                data.installments.forEach((inst, i) => {
                    addOption(inst.amount, inst.label, `₹${inst.amount.toLocaleString()}`, 'bi-calendar-event');
                });
            }

            // Re-attach listeners for new radio buttons
            document.querySelectorAll('input[name="paymentOption"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    if(this.value === 'custom') {
                        customArea.style.display = 'block';
                    } else {
                        customArea.style.display = 'none';
                    }
                });
            });
        }

        // Initialize options on load
        renderOptions();

        function addOption(value, label, amountLabel, icon) {
            const div = document.createElement('div');
            div.className = 'col-6';
            div.innerHTML = `
                <input type="radio" class="btn-check" name="paymentOption" id="opt${value}${label.replace(/\s/g,'')}" value="${value}">
                <label class="btn btn-outline-light w-100 p-2 text-center d-flex flex-column align-items-center justify-content-center" for="opt${value}${label.replace(/\s/g,'')}" style="border-radius:12px; font-size:10px; min-height:85px; border: 1px solid rgba(255,255,255,0.2);">
                    <i class="bi ${icon} mb-1 fs-5"></i>
                    <span class="small opacity-75">${label}</span>
                    <span class="fw-bold fs-6">${amountLabel}</span>
                </label>
            `;
            paymentOptionsGrid.appendChild(div);
        }

        if(payNowBtnV2) {
            payNowBtnV2.addEventListener('click', function() {
                const selected = document.querySelector('input[name="paymentOption"]:checked');
                if(!selected) { alert("Please select a payment option."); return; }

                let amount = selected.value;
                let description = "Course Payment";

                if(amount === 'custom') {
                    amount = customAmountVal.value;
                    if(!amount || amount <= 0) { alert("Please enter a valid amount."); return; }
                    description = `Custom Payment ${currentCourse ? '- ' + currentCourse : ''}`;
                } else {
                    const label = selected.nextElementSibling.querySelector('.small').innerText;
                    description = `${label} - ${currentCourse}`;
                }

                const upiLink = `upi://pay?pa=${COMPANY_UPI_ID}&pn=${encodeURIComponent(COMPANY_NAME)}&am=${amount}&cu=INR&tn=${encodeURIComponent(description)}`;
                window.location.href = upiLink;
            });
        }

        document.getElementById('whatsappForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = this.querySelector('input[name="name"]').value;
            const phone = this.querySelector('input[name="phone"]').value;
            const email = this.querySelector('input[name="email"]').value;
            
            const selected = document.querySelector('input[name="paymentOption"]:checked');
            let paymentDetail = "No Option Selected";
            
            if(selected) {
                if(selected.value === 'custom') {
                    paymentDetail = "Custom Amount (₹" + customAmountVal.value + ")";
                } else {
                    const label = selected.nextElementSibling.querySelector('.small').innerText;
                    paymentDetail = label + " (₹" + selected.value + ")";
                }
            }

            const myWhatsAppNumber = '9117741984'; 
            let message = "Hello Coral Web Technology,\n" +
                          "I have a new enquiry from the website:\n\n" +
                          "*Name:* " + name + "\n" +
                          "*Phone:* " + phone + "\n" +
                          "*Email:* " + email + "\n" +
                          "*Course:* " + currentCourse + "\n" +
                          "*Payment Choice:* " + paymentDetail + "\n\n" +
                          "Please contact me as soon as possible.";

            const whatsappUrl = "https://wa.me/" + myWhatsAppNumber + "?text=" + encodeURIComponent(message);
            window.open(whatsappUrl, '_blank');
        });

        if(courseSelect) {
            courseSelect.addEventListener('change', function() {
                const val = this.value;
                if (val === "3-Month Practical Digital Marketing Course") {
                    courseDetails.innerHTML = `
                        <div style="font-weight:700; color:#00d4ff; margin-bottom:10px; font-size:15px;"><i class="bi bi-bullseye me-2"></i>3-Month Practical Digital Marketing Course</div>
                        <div style="margin-bottom:12px;">
                            <span style="text-decoration:line-through; color:rgba(255,255,255,0.5); font-size:13px;">Original Fee: ₹32,000</span><br>
                            <span style="color:#10b981; font-weight:700; font-size:15px;">Special Offer Fee: ₹8,000 Only</span>
                        </div>
                        <div>
                            <div style="color:#00d4ff; font-weight:600; margin-bottom:5px;">Features:</div>
                            <ul style="padding-left:18px; margin-bottom:0; color:rgba(255,255,255,0.85);">
                                <li>Practical Training</li>
                                <li>SEO + Google Ads + Meta Ads + Social Media + GMB</li>
                                <li>Live Practice</li>
                            </ul>
                        </div>
                    `;
                    courseDetails.style.display = 'block';
                } else if (val === "4-Month Job-Oriented Digital Marketing Course") {
                    courseDetails.innerHTML = `
                        <div style="font-weight:700; color:#00d4ff; margin-bottom:10px; font-size:15px;"><i class="bi bi-bullseye me-2"></i>4-Month Job-Oriented Digital Marketing Course</div>
                        <div style="margin-bottom:12px;">
                            <span style="text-decoration:line-through; color:rgba(255,255,255,0.5); font-size:13px;">Original Fee: ₹64,000</span><br>
                            <span style="color:#10b981; font-weight:700; font-size:15px;">Special Offer Fee: ₹16,000 Only</span>
                        </div>
                        <div>
                            <div style="color:#00d4ff; font-weight:600; margin-bottom:5px;">Features:</div>
                            <ul style="padding-left:18px; margin-bottom:0; color:rgba(255,255,255,0.85);">
                                <li>3 Months Classes</li>
                                <li>1 Month Internship</li>
                                <li>Advanced Practical Training</li>
                                <li>100% Placement Assistance</li>
                            </ul>
                        </div>
                    `;
                    courseDetails.style.display = 'block';
                } else {
                    courseDetails.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
