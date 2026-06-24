<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <title>Meta Ads Course | Coral Web Technology</title>
    <meta name="description" content="Meta Ads Course me aap Facebook aur Instagram par professional advertising seekhenge for Lead Generation and Sales." />
    <meta name="keywords" content="Meta Ads course, Facebook Ads, Instagram Ads, lead generation, conversion ads, digital marketing" />
</head>
<body>
    <?php include 'common/header.php'; ?>

    <style>
        body {
            background-color: #e6f0ff;
            /* Light subtle texture effect */
            background-image: radial-gradient(#d4e4fc 1px, transparent 0);
            background-size: 20px 20px;
            font-family: 'Inter', sans-serif;
            color: #1a1a3e;
        }

        /* Hero Section */
        .hero-section {
            padding: 100px 0 60px;
            text-align: left;
        }
        .hero-title-orange {
            color: #0668E1; /* Meta Blue */
            font-weight: 900;
            font-size: clamp(3rem, 5vw, 4.5rem);
            line-height: 1.1;
            margin-bottom: 0;
        }
        .hero-title-blue {
            color: #10104a;
            font-weight: 900;
            font-size: clamp(2.5rem, 4.5vw, 4rem);
            margin-bottom: 25px;
        }
        .hero-pill {
            background: #ffffff;
            color: #10104a;
            padding: 8px 25px;
            border-radius: 50px;
            display: inline-block;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #d4e4fc;
        }
        .hero-desc {
            font-size: 1.25rem;
            color: #333;
            max-width: 800px;
            margin: 0 0 30px;
            line-height: 1.6;
            font-weight: 500;

        }
        .hero-duration {
            font-size: 1.4rem;
            font-weight: 800;
            margin-bottom: 40px;
        }
        .hero-duration .orange { color: #0668E1; }
        .hero-duration .blue { color: #10104a; }
        .hero-duration .separator { color: #ff6600; margin: 0 10px; }

        .hero-image-container {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
        }
        .hero-image-container img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }

        /* Section Titles */
        .section-title {
            color: #10104a;
            font-weight: 900;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 40px;
        }

        /* Who Should Join */
        .join-card {
            background: #ffebe6;
            border: 2px solid #10104a;
            border-radius: 12px;
            padding: 25px 30px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .join-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(16, 16, 74, 0.1);
        }
        .join-card h3 {
            color: #d831a2;
            font-weight: 800;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .join-card p {
            color: #10104a;
            font-size: 1.1rem;
            margin: 0;
            font-weight: 500;
        }

        /* What Makes This Course Different (Timeline) */
        .timeline-container {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
            padding-left: 50px;
        }
        .timeline-container::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 4px;
            background: #2cb563; /* Green line */
            border-radius: 4px;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
            padding: 25px 30px;
            border-radius: 15px;
            color: white;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .timeline-number {
            position: absolute;
            left: -65px;
            top: 50%;
            transform: translateY(-50%);
            width: 35px;
            height: 35px;
            background: #10104a;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.2rem;
            border: 4px solid #e6f0ff;
            z-index: 2;
        }
        .bg-color-1 { background: #134674; }
        .bg-color-2 { background: #8a2a9e; }
        .bg-color-3 { background: #de1db6; }
        .bg-color-4 { background: #6b1d9c; }
        
        .timeline-item h4 {
            font-weight: 800;
            font-size: 1.3rem;
            margin-bottom: 8px;
        }
        .timeline-item p {
            margin: 0;
            font-size: 1.05rem;
            opacity: 0.9;
        }

        /* Modules Grid - Adapted to match the clean aesthetic */
        .module-box {
            background: #ffffff;
            border: 2px solid #d4e4fc;
            border-radius: 12px;
            padding: 25px;
            height: 100%;
            transition: all 0.3s ease;
        }
        .module-box:hover {
            border-color: #0668E1;
            box-shadow: 0 10px 30px rgba(6, 104, 225, 0.1);
            transform: translateY(-5px);
        }
        .module-box .mod-num {
            color: #d831a2;
            font-weight: 800;
            font-size: 0.95rem;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }
        .module-box h4 {
            color: #10104a;
            font-weight: 800;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .module-box p {
            color: #444;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        /* Skills / Instructor */
        .instructor-section {
            background: #10104a;
            color: white;
            border-radius: 20px;
            padding: 50px;
            margin: 60px 0;
        }
        .instructor-section h3 {
            color: #0668E1;
        }
        .skills-check {
            list-style: none;
            padding: 0;
        }
        .skills-check li {
            margin-bottom: 15px;
            font-size: 1.1rem;
            display: flex;
            align-items: flex-start;
            font-weight: 500;
        }
        .skills-check li i {
            color: #2cb563;
            font-size: 1.3rem;
            margin-right: 15px;
        }
        
        .skills-cascade-wrapper {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }
        .cascade-box {
            background: #ffebe6;
            border: 2px solid #10104a;
            border-radius: 6px;
            padding: 12px 20px;
            margin-bottom: -2px;
            position: relative;
            display: flex;
            align-items: flex-start;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        .cascade-box:hover {
            transform: translateY(-2px);
            z-index: 10 !important;
            box-shadow: 0 6px 12px rgba(16, 16, 74, 0.15);
        }
        .cascade-box i {
            color: #10104a;
            font-size: 0.5rem;
            margin-right: 12px;
            margin-top: 6px;
        }
        .cascade-box p {
            color: #10104a;
            font-weight: 500;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.4;
        }
        
        /* Cascading margins with overlap */
        .cascade-box:nth-child(1) { margin-left: 0%; width: 85%; z-index: 7; }
        .cascade-box:nth-child(2) { margin-left: 3%; width: 85%; z-index: 6; }
        .cascade-box:nth-child(3) { margin-left: 6%; width: 85%; z-index: 5; }
        .cascade-box:nth-child(4) { margin-left: 9%; width: 85%; z-index: 4; }
        .cascade-box:nth-child(5) { margin-left: 12%; width: 85%; z-index: 3; }
        .cascade-box:nth-child(6) { margin-left: 15%; width: 85%; z-index: 2; }
        .cascade-box:nth-child(7) { margin-left: 18%; width: 85%; z-index: 1; }
        
        .quote-box {
            display: flex;
            align-items: flex-start;
            margin-top: 30px;
            padding: 0 15px;
        }
        .quote-icon {
            color: #0668E1;
            font-size: 2.5rem;
            line-height: 1;
            margin-right: 15px;
            margin-top: -10px;
        }
        .quote-text {
            color: #10104a;
            font-size: 1rem;
            font-weight: 600;
            margin: 0;
        }
    </style>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column (Left) -->
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h1 class="hero-title-orange" data-aos="fade-right">Meta Ads</h1>
                    <h1 class="hero-title-blue" data-aos="fade-right" data-aos-delay="100">Course</h1>
                    
                    <div class="hero-pill" data-aos="fade-right" data-aos-delay="200">
                        Facebook & Instagram Advertising
                    </div>

                    <p class="hero-desc" data-aos="fade-right" data-aos-delay="300">
                        Meta Ads Course me aap Meta Platforms ke through Facebook aur Instagram par professional advertising seekhenge. Yeh course aapko lead generation aur sales increase karna sikhata hai.
                    </p>

                    <div class="hero-duration" data-aos="fade-right" data-aos-delay="400">
                        <span class="orange">Duration of 4 Weeks</span> 
                        <span class="separator">|</span> 
                        <span class="blue">Live Online</span>
                    </div>
                </div>
                
                <!-- Image Column (Right) -->
                <div class="col-lg-7 position-relative z-1">
                    <div class="hero-image-container" data-aos="fade-left" data-aos-delay="200" style="transform: scale(1.12); transform-origin: left center;">
                        <!-- Placeholder for the dashboard image -->
                        <img src="<?php echo $base_url; ?>assets/img/meta-ads-dashboard.png" class="img-fluid" style="border-radius: 16px; box-shadow: 0 30px 60px rgba(0,0,0,0.15); border: 2px solid #ffffff;" alt="Meta Ads Dashboard Overview" onerror="this.src='https://via.placeholder.com/1000x650/10104a/ffffff?text=Meta+Ads+Dashboard+Overview'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHO SHOULD JOIN -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Who Can Join</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="join-card" data-aos="fade-up" data-aos-delay="0">
                        <h3>Business Owners</h3>
                        <p>Learn how to scale your own business and generate direct leads and sales.</p>
                    </div>
                    <div class="join-card" data-aos="fade-up" data-aos-delay="100">
                        <h3>Digital Marketers</h3>
                        <p>Enhance your paid marketing skills and master advanced Facebook and Instagram campaigns.</p>
                    </div>
                    <div class="join-card" data-aos="fade-up" data-aos-delay="200">
                        <h3>Freelancers</h3>
                        <p>Provide Meta advertising services to global clients and manage huge budgets.</p>
                    </div>
                    <div class="join-card" data-aos="fade-up" data-aos-delay="300">
                        <h3>Students</h3>
                        <p>Build a strong career in performance marketing by learning hands-on campaign execution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT MAKES IT DIFFERENT (Key Benefits) -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Key Benefits</h2>
            
            <div class="timeline-container">
                <div class="timeline-item bg-color-1" data-aos="fade-right" data-aos-delay="0">
                    <div class="timeline-number" style="background:#134674;">1</div>
                    <h4>High-Converting Ad Strategy</h4>
                    <p>Learn frameworks that guarantee maximum CTR and low cost-per-click.</p>
                </div>
                <div class="timeline-item bg-color-2" data-aos="fade-right" data-aos-delay="100">
                    <div class="timeline-number" style="background:#8a2a9e;">2</div>
                    <h4>Real Campaign Practice</h4>
                    <p>Hands-on practical execution and management of live advertising campaigns.</p>
                </div>
                <div class="timeline-item bg-color-3" data-aos="fade-right" data-aos-delay="200">
                    <div class="timeline-number" style="background:#de1db6;">3</div>
                    <h4>ROI Optimization</h4>
                    <p>Understand analytics and data to optimize budget and increase Return on Investment.</p>
                </div>
                <div class="timeline-item bg-color-4" data-aos="fade-right" data-aos-delay="300">
                    <div class="timeline-number" style="background:#6b1d9c;">4</div>
                    <h4>Lead Generation System</h4>
                    <p>Setup a continuous, automated system that brings high-quality leads consistently.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STEP BY STEP FRAMEWORK (Modules) -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title mb-2" data-aos="fade-up">What You Will Learn</h2>
            <p class="text-center mb-5 fs-5" data-aos="fade-up">Ye advanced course hai jisme paid advertising sikhaya jata hai.</p>

            <div class="row justify-content-center g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 01</span>
                        <h4>Facebook Ads Manager Setup</h4>
                        <p>Complete setup of Business Manager, Ad Accounts, Page Integration, and Pixel setup.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 02</span>
                        <h4>Campaign Creation</h4>
                        <p>Structure your campaigns, ad sets, and ads properly for maximum efficiency and reach.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 03</span>
                        <h4>Audience Targeting</h4>
                        <p>Master Core, Custom, and Lookalike audiences to target exact potential customers.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 04</span>
                        <h4>Lead Generation Ads</h4>
                        <p>Create instant forms and campaigns designed specifically to generate high-quality B2B and B2C leads.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 05</span>
                        <h4>Conversion Ads</h4>
                        <p>Run e-commerce and sales-driven campaigns to get direct purchases on your website.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 06</span>
                        <h4>Budget Optimization</h4>
                        <p>Learn CBO (Advantage+ Campaign Budget) and ABO to distribute budgets effectively without wastage.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 07</span>
                        <h4>Sales Funnel Strategy</h4>
                        <p>Build comprehensive funnels integrating Awareness, Retargeting, and Final Conversion strategies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT PROGRAM & SKILLS -->
    <section class="py-5">
        <div class="container">
            <!-- About Section -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="section-title mb-4">About the Course</h2>
                    <p class="fs-5 mb-4 text-start">Meta Ads Course me aap Meta Platforms ke through Facebook aur Instagram par professional advertising seekhenge.</p>
                    <p class="mb-4 text-start">Yeh advanced course aapko sikhaega ki kis tarah paid advertising ka use karke aap lead generation aur sales increase kar sakte hain.</p>
                    
                    <div class="d-flex justify-content-center mt-4">
                        <ul class="skills-check text-start d-inline-block">
                            <li><i class="bi bi-check2-circle"></i> Complete Facebook Ads Mastery</li>
                            <li><i class="bi bi-check2-circle"></i> Complete Instagram Ads Mastery</li>
                            <li><i class="bi bi-check2-circle"></i> Advanced Paid Advertising Strategies</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Skills Section -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8" data-aos="fade-up">
                    <h2 class="section-title mb-5" style="color: #10104a;">Skills you will develop</h2>
                    
                    <div class="skills-cascade-wrapper">
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Properly Setup and Manage Facebook Business Manager and Ads Manager</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Create and Structure Profitable Advertising Campaigns</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Identify and Target the Right Audience (Core, Custom, Lookalike)</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Generate High-Quality Leads efficiently using Lead Generation Ads</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Drive Direct Website Sales through Conversion Ad Campaigns</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Optimize Budgets to maximize ROAS (Return on Ad Spend)</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Build and Execute Complete Sales Funnel Strategies</p>
                        </div>
                        
                        <div class="quote-box">
                            <div class="quote-icon"><i class="bi bi-quote" style="transform: scaleX(-1); display: inline-block;"></i></div>
                            <p class="quote-text">This program empowers you to run successful Facebook and Instagram campaigns, manage budgets like a pro, and consistently bring in sales and leads.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INSTRUCTOR -->
    <section class="py-5">
        <div class="container">
            <div class="instructor-section" data-aos="zoom-in">
                <div class="row align-items-center g-5">
                    <div class="col-md-4 text-center">
                        <div style="width:150px; height:150px; background:#fff; border-radius:50%; margin:0 auto 20px; display:flex; align-items:center; justify-content:center;">
                            <i class="bi bi-person-circle text-primary" style="font-size: 80px;"></i>
                        </div>
                        <h3 class="mb-1">Syed Saqib Ali</h3>
                        <p class="text-info fw-bold mb-1">Performance Marketing Expert</p>
                        <p class="opacity-75 mb-0">Founder: Nesfity Media LLP</p>
                    </div>
                    <div class="col-md-8">
                        <p class="mb-3 fs-5 border-bottom border-light border-opacity-25 pb-3">With over 7+ years of experience in running Google Ads, Meta Ads, LinkedIn Ads, and Account-Based Marketing (ABM).</p>
                        <p class="mb-3 opacity-75">I help businesses across multiple industries manage and scale advertising campaigns, with a strong focus on generating high-quality leads and driving business growth through data-driven strategies.</p>
                        <p class="mb-0 opacity-75">As a performance marketing expert and agency founder, I am known for my practical and execution focused approach to advertising. I teach real campaign strategies, structured frameworks, and hands-on methods that help you understand how to build, manage, and optimize profitable advertising campaigns.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 mb-5 text-center">
        <div class="container" data-aos="fade-up">
            <h2 class="section-title mb-3">Start Generating Leads Today</h2>
            <p class="fs-5 text-muted max-w-700 mx-auto mb-4" style="max-width: 700px;">Aaj hi join kare aur apne business ke liye leads & sales generate kare. Free Demo Class Available.</p>
            <a href="contact-us.php" class="btn btn-lg px-5 py-3 rounded-pill fw-bold" style="background:#0668E1; color:#fff; box-shadow: 0 10px 20px rgba(6,104,225,0.3);">
                Join Today - Batch Starting Soon <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>
</body>
</html>
