<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <title>Google Ads Mastery Program | Coral Web Technology</title>
    <meta name="description" content="Learn how to plan, launch, and scale profitable Google Ads campaigns using proven performance marketing frameworks. From Beginner to Expert Level." />
    <meta name="keywords" content="Google Ads course, performance marketing, PPC training, Google Ads mastery, learn Google Ads" />
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
            color: #ff6600;
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
        .hero-duration .orange { color: #ff6600; }
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
            border-color: #ff6600;
            box-shadow: 0 10px 30px rgba(255, 102, 0, 0.1);
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
            color: #ff6600;
            font-weight: 800;
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
            color: #ea4335;
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
                    <h1 class="hero-title-orange" data-aos="fade-right">Google Ads</h1>
                    <h1 class="hero-title-blue" data-aos="fade-right" data-aos-delay="100">Mastery Program</h1>
                    
                    <div class="hero-pill" data-aos="fade-right" data-aos-delay="200">
                        From Beginner to Expert Level Performance Marketing
                    </div>

                    <p class="hero-desc" data-aos="fade-right" data-aos-delay="300">
                        Learn how to plan, launch, and scale profitable Google Ads campaigns using proven performance marketing frameworks.
                    </p>

                    <div class="hero-duration" data-aos="fade-right" data-aos-delay="400">
                        <span class="orange">Duration of 6 Weeks</span> 
                        <span class="separator">|</span> 
                        <span class="blue">Live Online</span>
                    </div>
                </div>
                
                <!-- Image Column (Right) -->
                <div class="col-lg-7 position-relative z-1">
                    <div class="hero-image-container" data-aos="fade-left" data-aos-delay="200" style="transform: scale(1.12); transform-origin: left center;">
                        <!-- Placeholder for the dashboard image with instructor -->
                        <img src="<?php echo $base_url; ?>assets/img/google-ads-dashboard.png" class="img-fluid" style="border-radius: 16px; box-shadow: 0 30px 60px rgba(0,0,0,0.15); border: 2px solid #ffffff;" alt="Google Ads Dashboard Overview" onerror="this.onerror=null;this.src='https://via.placeholder.com/1000x650/10104a/ffffff?text=Google+Ads+Dashboard+Overview'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHO SHOULD JOIN -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Who Should Join This Program</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="join-card" data-aos="fade-up" data-aos-delay="0">
                        <h3>Freshers</h3>
                        <p>Freshers who want to start their career in performance marketing.</p>
                    </div>
                    <div class="join-card" data-aos="fade-up" data-aos-delay="100">
                        <h3>Business Owners</h3>
                        <p>Generate leads and customers for your business using paid advertising.</p>
                    </div>
                    <div class="join-card" data-aos="fade-up" data-aos-delay="200">
                        <h3>Freelancers</h3>
                        <p>Offer Google Ads services and manage campaigns for clients.</p>
                    </div>
                    <div class="join-card" data-aos="fade-up" data-aos-delay="300">
                        <h3>Marketing Professionals</h3>
                        <p>Learn advanced Google Ads strategies to grow your career.</p>
                    </div>
                    <div class="join-card" data-aos="fade-up" data-aos-delay="400">
                        <h3>Agency Owners</h3>
                        <p>Improve campaign performance and scale advertising accounts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT MAKES IT DIFFERENT -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">What Makes This Course<br>Different</h2>
            
            <div class="timeline-container">
                <div class="timeline-item bg-color-1" data-aos="fade-right" data-aos-delay="0">
                    <div class="timeline-number" style="background:#134674;">1</div>
                    <h4>Strategic Training</h4>
                    <p>Learn the frameworks professional advertisers use to plan and execute campaigns.</p>
                </div>
                <div class="timeline-item bg-color-2" data-aos="fade-right" data-aos-delay="100">
                    <div class="timeline-number" style="background:#8a2a9e;">2</div>
                    <h4>Real Campaign Insights</h4>
                    <p>Understand how advertising strategies work in real industry scenarios.</p>
                </div>
                <div class="timeline-item bg-color-3" data-aos="fade-right" data-aos-delay="200">
                    <div class="timeline-number" style="background:#de1db6;">3</div>
                    <h4>Data Driven Optimization</h4>
                    <p>Learn how to analyze performance metrics and make informed decisions.</p>
                </div>
                <div class="timeline-item bg-color-4" data-aos="fade-right" data-aos-delay="300">
                    <div class="timeline-number" style="background:#6b1d9c;">4</div>
                    <h4>Scalable Advertising Systems</h4>
                    <p>Understand how to grow campaigns while maintaining efficiency and return on investment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- STEP BY STEP FRAMEWORK (MODULES) -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title mb-2" data-aos="fade-up">Step-by-Step Learning<br>Framework</h2>
            <p class="text-center mb-5 fs-5" data-aos="fade-up">The program follows a structured learning path designed to develop expertise progressively.</p>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 01</span>
                        <h4>Google Ads Overview</h4>
                        <p>Understand how the Google Ads ecosystem works, including the auction system, account structure, and how campaigns, ad groups, and keywords work together to give results.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 02</span>
                        <h4>Audience Behavior & Intent</h4>
                        <p>Learn how users search online, what drives their decisions, and how to identify high-intent audiences for better campaign targeting.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 03</span>
                        <h4>Marketing Funnel Strategy</h4>
                        <p>Understand how to structure campaigns across Top Funnel(TOFU), Mid Funnel(MOFU), and Bottom Funnel(BOFU) stages to guide users from awareness to conversion.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 04</span>
                        <h4>Strategic Planning & Tools</h4>
                        <p>Learn how to use planning tools like Keyword Planner and Performance Planner to research demand and plan effective advertising strategies.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 05</span>
                        <h4>Advanced Keyword Strategies</h4>
                        <p>Understand how to select high-intent keywords, structure match types correctly, analyze search term reports, and eliminate wasted spend using negative keywords.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 06</span>
                        <h4>High Converting Ads & Extensions</h4>
                        <p>Learn how to write high-converting ad copy, structure responsive search ads & use ad extensions such as sitelinks, callouts & structured snippets to increase CTR & ad visibility.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 07</span>
                        <h4>Bidding Optimization Strategies</h4>
                        <p>Learn how users search online, what drives their decisions, and how to identify high-intent audiences for better campaign targeting.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 08</span>
                        <h4>Budget Allocation & Forecasting</h4>
                        <p>Learn how to calculate daily budgets, control campaign spending, and forecast potential leads or sales based on search demand and competition.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 09</span>
                        <h4>Media Planning & Budget Estimation</h4>
                        <p>Learn how experienced marketers estimate budgets, predict campaign performance, and allocate spending across campaigns.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 10</span>
                        <h4>Search Campaign Mastery</h4>
                        <p>Learn how to structure high-performing search campaigns, create tightly themed ad groups, write effective ads & optimize campaigns to capture high-intent traffic & generate qualified leads.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 11</span>
                        <h4>Demand Generation Campaigns</h4>
                        <p>Learn how to use Google’s Demand Generation campaigns to reach new audiences across YouTube, Discover, and Gmail, and drive interest before users actively search.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 12</span>
                        <h4>Display Campaign Excellence</h4>
                        <p>Understand how to create display campaigns using audience targeting, contextual targeting, and creative assets to reach potential customers across websites and mobile apps.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 13</span>
                        <h4>Advanced Display Network Targeting</h4>
                        <p>Learn how to refine display targeting using placements, topics, custom audiences, and in-market audiences to increase relevance and reduce wasted impressions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 14</span>
                        <h4>Performance Max Campaign Strategy</h4>
                        <p>Understand how Performance Max campaigns work across Search, Display, YouTube, Gmail, and Discover, and learn how to structure asset groups and signals for better results.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 15</span>
                        <h4>Conversion Tracking & Measurement</h4>
                        <p>Accurate tracking is the foundation of performance marketing. Learn to implement conversion tracking using GTM, Google Tag & GA4 to measure leads, sales & important user actions.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 16</span>
                        <h4>Remarketing & Reengagement</h4>
                        <p>Learn how to reconnect with users who previously visited your website or interacted with your ads. Remarketing strategies help convert interested users who did not convert on their first visit.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 17</span>
                        <h4>Video Ads & YouTube Campaigns</h4>
                        <p>Understand how to leverage YouTube advertising to build brand awareness, capture attention, and influence potential customers through strategic video campaigns.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 18</span>
                        <h4>Data Analysis & Reporting</h4>
                        <p>Learn how to analyze Google Ads reports, understand key metrics such as CTR, CPC, CPA, and ROAS, and make optimization decisions based on real campaign data.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 19</span>
                        <h4>Advanced Tools & Automation</h4>
                        <p>Explore automation features like automated rules and smart recommendations that help manage campaigns more efficiently.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 20</span>
                        <h4>Billing & Cost Management</h4>
                        <p>Understand how Google Ads billing works, including payment methods, billing thresholds, account limits, and financial controls.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 21</span>
                        <h4>Manager Accounts (MCC)</h4>
                        <p>Learn how agencies manage multiple advertising accounts using Google Ads Manager Accounts and streamline reporting and account management.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 22</span>
                        <h4>Industry Case Studies</h4>
                        <p>Analyze real campaign case studies from different industries to understand strategies, optimization techniques, and performance improvements.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="module-box">
                        <span class="mod-num">Module 23</span>
                        <h4>Expert Level Optimization</h4>
                        <p>Learn professional optimization frameworks used by experienced performance marketers to scale campaigns, improve efficiency, and maximize return on advertising spend.</p>
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
                    <h2 class="section-title mb-4">About the Program</h2>
                    <p class="fs-5 mb-4 text-start">Google Ads is one of the most powerful platforms for generating leads, sales, and business growth.</p>
                    <p class="mb-4 text-start">However, most advertisers struggle because they focus only on running ads without understanding strategy, audience behavior, and campaign optimization.</p>
                    <p class="mb-4 text-start">This program is designed to teach you how to run Google Ads like a professional performance marketer.</p>
                    
                    <div class="d-flex justify-content-center mt-4">
                        <ul class="skills-check text-start d-inline-block">
                            <li><i class="bi bi-check2-circle"></i> Learn real campaign strategies</li>
                            <li><i class="bi bi-check2-circle"></i> Understand how the Google Ads auction works</li>
                            <li><i class="bi bi-check2-circle"></i> Build campaigns that generate measurable business results</li>
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
                            <p>Build structured Google Ads campaigns that attract high-intent traffic</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Identify profitable keywords and audiences that generate leads or sales</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Create high-performing ads that improve click-through and conversion rates</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Track real business results using proper conversion tracking</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Analyze campaign data to improve performance and reduce wasted spend</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Scale campaigns strategically while maintaining strong ROI</p>
                        </div>
                        <div class="cascade-box">
                            <i class="bi bi-circle-fill"></i>
                            <p>Manage advertising accounts professionally for businesses or clients</p>
                        </div>
                        
                        <div class="quote-box">
                            <div class="quote-icon"><i class="bi bi-quote" style="transform: scaleX(-1); display: inline-block;"></i></div>
                            <p class="quote-text">This program helps you master the skills required to run profitable Google Ads campaigns and apply performance marketing strategies in real business scenarios.</p>
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
            <h2 class="section-title mb-3">Start Your Journey</h2>
            <p class="fs-5 text-muted max-w-700 mx-auto mb-4" style="max-width: 700px;">This program is designed for individuals who want to build real expertise in Google Ads and campaign optimization. Build the skills required to run high-performing advertising campaigns and generate measurable business results.</p>
            <a href="contact-us.php" class="btn btn-lg px-5 py-3 rounded-pill fw-bold" style="background:#ff6600; color:#fff; box-shadow: 0 10px 20px rgba(255,102,0,0.3);">
                Join Today - Batch Starting Soon <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>
</body>
</html>
