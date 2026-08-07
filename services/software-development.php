<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'software-development'; ?>
    
    <!-- CUSTOM PREMIUM STYLING -->
    <style>
        :root {
            --accent-color: #ff4d4d;
            --dark-bg: #0f172a;
            --card-bg: #ffffff;
            --light-bg: #f8fafc;
            --text-color: #475569;
            --title-color: #0f172a;
        }
        
        .software-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.7)), url('<?= $base_url ?>assets/images/banner/software-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0 80px;
            color: #fff;
            text-align: center;
        }
        
        .software-hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            letter-spacing: -1px;
        }
        
        .software-hero p {
            font-size: 1.2rem;
            color: #cbd5e1;
            max-width: 800px;
            margin: 20px auto 0;
            line-height: 1.6;
        }
        
        .software-hero .breadcrumb {
            background: rgba(255, 255, 255, 0.08);
            display: inline-flex;
            padding: 8px 20px;
            border-radius: 30px;
            backdrop-filter: blur(5px);
            margin-top: 25px;
        }
        
        .software-hero .breadcrumb a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .software-hero .breadcrumb a:hover {
            color: var(--accent-color);
        }
        
        .software-hero .breadcrumb-item.active {
            color: var(--accent-color);
        }
        
        .software-hero .breadcrumb-item + .breadcrumb-item::before {
            color: #fff;
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        .bg-light-section {
            background-color: var(--light-bg);
        }
        
        .software-title {
            font-size: 2.3rem;
            font-weight: 800;
            color: var(--title-color);
            margin-bottom: 20px;
            position: relative;
            text-align: center;
        }
        
        .software-title::after {
            content: '';
            display: block;
            width: 70px;
            height: 4px;
            background-color: var(--accent-color);
            margin: 15px auto 0;
            border-radius: 2px;
        }
        
        .intro-box {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        
        .intro-box p {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-color);
        }
        
        /* How We Work Cards */
        .work-card {
            background: #fff;
            border-radius: 18px;
            padding: 35px 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(0, 0, 0, 0.04);
            height: 100%;
            transition: all 0.4s ease;
        }
        
        .work-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.06);
            border-color: rgba(255, 77, 77, 0.2);
        }
        
        .work-card-num {
            font-size: 2.8rem;
            font-weight: 800;
            color: rgba(255, 77, 77, 0.12);
            line-height: 1;
            margin-bottom: 20px;
        }
        
        .work-card h4 {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--title-color);
            margin-bottom: 15px;
        }
        
        .work-card p {
            font-size: 0.98rem;
            color: var(--text-color);
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .work-card ul {
            padding-left: 20px;
            color: var(--text-color);
            font-size: 0.95rem;
            margin-bottom: 0;
        }
        
        .work-card li {
            margin-bottom: 10px;
        }
        
        /* SDLC Steps */
        .sdlc-card {
            background: #fff;
            border-radius: 18px;
            padding: 35px 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(0, 0, 0, 0.04);
            transition: all 0.4s ease;
            height: 100%;
        }
        
        .sdlc-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(255, 77, 77, 0.08);
            border-color: rgba(255, 77, 77, 0.2);
        }
        
        .sdlc-icon {
            width: 76px;
            height: 76px;
            background: rgba(255, 77, 77, 0.06);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            color: var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .sdlc-card:hover .sdlc-icon {
            background: var(--accent-color);
            color: #fff;
            transform: scale(1.08) rotate(5deg);
        }
        
        .sdlc-card h4 {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--title-color);
            margin-bottom: 12px;
        }
        
        .sdlc-card p {
            font-size: 0.95rem;
            color: var(--text-color);
            margin-bottom: 0;
            line-height: 1.6;
        }
        
        /* Tech Stack */
        .tech-item {
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.01);
            border: 1px solid rgba(0, 0, 0, 0.04);
            font-weight: 700;
            color: var(--title-color);
            transition: all 0.3s ease;
            font-size: 1.05rem;
        }
        
        .tech-item:hover {
            transform: translateY(-4px);
            color: var(--accent-color);
            box-shadow: 0 10px 25px rgba(255, 77, 77, 0.08);
            border-color: rgba(255, 77, 77, 0.3);
        }
        
        /* Solutions Grid */
        .solution-card {
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(0, 0, 0, 0.04);
            height: 100%;
            transition: all 0.4s ease;
        }
        
        .solution-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.06);
        }
        
        .solution-img-box {
            position: relative;
            overflow: hidden;
            height: 220px;
            background-color: #f1f5f9;
        }
        
        .solution-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .solution-card:hover .solution-img-box img {
            transform: scale(1.08);
        }
        
        .solution-content {
            padding: 30px;
        }
        
        .solution-content h4 {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--title-color);
            margin-bottom: 15px;
        }
        
        .solution-content p {
            font-size: 0.98rem;
            color: var(--text-color);
            line-height: 1.65;
            margin-bottom: 20px;
        }
        
        .solution-content ul {
            padding-left: 20px;
            font-size: 0.92rem;
            color: var(--text-color);
            margin-bottom: 0;
        }
        
        .solution-content li {
            margin-bottom: 8px;
        }
        
        /* Why Choose List */
        .benefit-row {
            background: #fff;
            border-radius: 14px;
            padding: 24px 30px;
            margin-bottom: 18px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.01);
            border-left: 5px solid var(--accent-color);
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .benefit-row:hover {
            transform: translateX(8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.04);
        }
        
        .benefit-icon {
            font-size: 1.6rem;
            color: var(--accent-color);
            margin-right: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .benefit-text {
            font-weight: 600;
            color: var(--title-color);
            font-size: 1.1rem;
        }
        
        /* FAQ Accordion */
        .custom-accordion .accordion-item {
            border: none;
            margin-bottom: 16px;
            border-radius: 14px !important;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.01);
            border: 1px solid rgba(0, 0, 0, 0.04);
        }
        
        .custom-accordion .accordion-button {
            padding: 22px 28px;
            font-weight: 700;
            font-size: 1.08rem;
            color: var(--title-color);
            background-color: #fff;
        }
        
        .custom-accordion .accordion-button:not(.collapsed) {
            color: var(--accent-color);
            background-color: rgba(255, 77, 77, 0.02);
            box-shadow: none;
        }
        
        .custom-accordion .accordion-body {
            color: var(--text-color);
            line-height: 1.75;
            padding: 0 28px 24px;
            font-size: 0.98rem;
        }
        
        /* Premium CTA */
        .premium-cta {
            background: linear-gradient(135deg, var(--dark-bg), #1e293b);
            border-radius: 28px;
            padding: 70px 50px;
            position: relative;
            overflow: hidden;
            color: #fff;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        .premium-cta h2 {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 20px;
        }
        
        .premium-cta p {
            font-size: 1.15rem;
            color: #94a3b8;
            max-width: 800px;
            margin: 0 auto 35px;
            line-height: 1.7;
        }
        
        .btn-premium-action {
            background-color: var(--accent-color);
            color: #fff !important;
            font-weight: 700;
            padding: 16px 45px;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            box-shadow: 0 10px 25px rgba(255, 77, 77, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-premium-action:hover {
            background-color: #e63939;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 77, 77, 0.4);
        }
    </style>
    
    <!-- 1. HERO BANNER -->
    <section class="software-hero">
        <div class="container">
            <h1 class="fw-bold" data-aos="fade-up" data-aos-duration="1000">Software Solutions</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                Accelerate your digital evolution with our custom, robust, and highly scalable software development solutions.
            </p>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Software Solutions</li>
                </ol>
            </nav>
        </div>
    </section>
    
    <!-- 2. INTRO SECTION -->
    <section class="section-padding">
        <div class="container">
            <div class="intro-box" data-aos="fade-up">
                <h2 class="software-title">Your Trusted Software Development Partner</h2>
                <p class="mt-4">
                    In today's highly competitive market, a reliable, custom-engineered software system is critical to driving business growth. Whether you require a specialized CRM system, an automated billing framework, or a complex enterprise ERP, we convert your vision into smart, functional, and user-centric software.
                </p>
                <p>
                    As a premier software development agency, Coral Web Technology is committed to delivering quality code built to support your long-term success.
                </p>
            </div>
        </div>
    </section>
    
    <!-- 3. HOW WE WORK -->
    <section class="section-padding bg-light-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="software-title">How We Work</h2>
                <p class="text-muted mt-3 max-width-800 mx-auto">
                    Software engineering is about far more than just writing code. It is about understanding your business parameters, solving operational bottlenecks, and deploying a secure product that drives real value.
                </p>
            </div>
            
            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="work-card">
                        <div class="work-card-num">01</div>
                        <h4>Business Understanding</h4>
                        <p>We start by diving deep into your brand, understanding the goals of your project, and defining exactly what challenges need to be solved.</p>
                        <ul>
                            <li>Study your targets & challenges</li>
                            <li>Analyze market competitors</li>
                            <li>Define clear project milestones</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="work-card">
                        <div class="work-card-num">02</div>
                        <h4>Requirement Gathering</h4>
                        <p>Not all projects begin with a detailed technical document. We help structure your ideas into precise, actionable requirements.</p>
                        <ul>
                            <li>Shape thoughts into clear models</li>
                            <li>Reduce roadmap ambiguity</li>
                            <li>Speed up development phases</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="work-card">
                        <div class="work-card-num">03</div>
                        <h4>Functional & Technical Planning</h4>
                        <p>We map out the application architecture, user workflows, and technical details to match your operational needs and budget parameters.</p>
                        <ul>
                            <li>Detail features & UX flows</li>
                            <li>Select optimal tech stacks</li>
                            <li>Define server & API structures</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 4. SDLC PHASES -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="software-title">Full Software Development Lifecycle</h2>
                <p class="text-muted mt-3">
                    We implement a structured, transparent, and proven SDLC methodology to ensure high-quality software is delivered on time.
                </p>
            </div>
            
            <div class="row g-4">
                <!-- Phase 1 -->
                <div class="col-md-6 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sdlc-card">
                        <div class="sdlc-icon"><i class="bi bi-journal-check"></i></div>
                        <h4>Planning</h4>
                        <p>Scope definition, timeline plotting, and team alignment.</p>
                    </div>
                </div>
                <!-- Phase 2 -->
                <div class="col-md-6 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="sdlc-card">
                        <div class="sdlc-icon"><i class="bi bi-palette"></i></div>
                        <h4>Design</h4>
                        <p>User-friendly UI/UX layouts and system blueprints.</p>
                    </div>
                </div>
                <!-- Phase 3 -->
                <div class="col-md-6 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                    <div class="sdlc-card">
                        <div class="sdlc-icon"><i class="bi bi-code-slash"></i></div>
                        <h4>Development</h4>
                        <p>Writing clean, secure, and scalable backend/frontend code.</p>
                    </div>
                </div>
                <!-- Phase 4 -->
                <div class="col-md-6 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                    <div class="sdlc-card">
                        <div class="sdlc-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Testing</h4>
                        <p>Rigorous QA checks, bug fixing, and performance tuning.</p>
                    </div>
                </div>
                <!-- Phase 5 -->
                <div class="col-md-6 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                    <div class="sdlc-card">
                        <div class="sdlc-icon"><i class="bi bi-rocket-takeoff"></i></div>
                        <h4>Deployment</h4>
                        <p>Successful cloud launch, server setup, and publication.</p>
                    </div>
                </div>
                <!-- Phase 6 -->
                <div class="col-md-6 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                    <div class="sdlc-card">
                        <div class="sdlc-icon"><i class="bi bi-tools"></i></div>
                        <h4>Support</h4>
                        <p>Continuous monitoring, regular updates, and maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 5. TECHNOLOGY STACK -->
    <section class="section-padding bg-light-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="software-title">Technologies We Use</h2>
                <p class="text-muted mt-3">
                    We utilize modern, industry-standard languages, frameworks, and tools to construct high-performance platforms.
                </p>
            </div>
            
            <div class="row g-3 justify-content-center" data-aos="fade-up">
                <div class="col-6 col-md-3 col-lg-2"><div class="tech-item">Node.js</div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="tech-item">Python</div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="tech-item">Java</div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="tech-item">PHP</div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="tech-item">React.js</div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="tech-item">Laravel</div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="tech-item">MySQL</div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="tech-item">MongoDB</div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="tech-item">PostgreSQL</div></div>
                <div class="col-6 col-md-3 col-lg-2"><div class="tech-item">AWS Cloud</div></div>
            </div>
        </div>
    </section>
    
    <!-- 6. CORE SOLUTIONS -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="software-title">Our Best Software Development Solutions</h2>
                <p class="text-muted mt-3">
                    We engineer tailor-made software solutions to digitize, automate, and scale your business operations.
                </p>
            </div>
            
            <div class="row g-4">
                <!-- Solution 1: Hospital Management -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="solution-card">
                        <div class="solution-img-box">
                            <img src="<?= $base_url ?>assets/images/services/software/1.jpg" alt="Hospital Management Software" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?q=80&w=600&auto=format&fit=crop';">
                        </div>
                        <div class="solution-content">
                            <h4>Hospital Management Software</h4>
                            <p>Streamline patient registration, appointments, digital health records, billing, and pharmacy inventories with absolute security.</p>
                            <ul>
                                <li>Patient records & history</li>
                                <li>OPD/IPD management</li>
                                <li>GST-compliant billing</li>
                                <li>Pharmacy & inventory control</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Solution 2: School/Coaching ERP -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="solution-card">
                        <div class="solution-img-box">
                            <img src="<?= $base_url ?>assets/images/services/software/2.jpg" alt="School/Coaching ERP" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?q=80&w=600&auto=format&fit=crop';">
                        </div>
                        <div class="solution-content">
                            <h4>School/Coaching ERP</h4>
                            <p>A unified portal designed for schools and educational institutes to manage admissions, attendance, fees, examinations, and communication.</p>
                            <ul>
                                <li>Student & Staff portal</li>
                                <li>Automated fee management</li>
                                <li>Exam & report card generation</li>
                                <li>SMS & App notifications</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Solution 3: Inventory & Billing -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="solution-card">
                        <div class="solution-img-box">
                            <img src="<?= $base_url ?>assets/images/services/software/3.jpg" alt="Inventory & Billing Software" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=600&auto=format&fit=crop';">
                        </div>
                        <div class="solution-content">
                            <h4>Inventory & Billing Software</h4>
                            <p>Track real-time stock levels, manage purchase orders, and generate GST-ready invoices instantly. Ideal for retail, wholesale, and logistics.</p>
                            <ul>
                                <li>Real-time stock tracking</li>
                                <li>Barcode & QR scanner integration</li>
                                <li>GST calculation & reporting</li>
                                <li>Low-stock alert reminders</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Solution 4: CRM Solutions -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="solution-card">
                        <div class="solution-img-box">
                            <img src="<?= $base_url ?>assets/images/services/software/4.jpg" alt="CRM Solutions" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=600&auto=format&fit=crop';">
                        </div>
                        <div class="solution-content">
                            <h4>CRM Solutions</h4>
                            <p>Enhance lead tracking, follow-ups, client conversations, and team performances to optimize conversion rates and revenues.</p>
                            <ul>
                                <li>Lead pipeline tracking</li>
                                <li>Automated WhatsApp/Email alerts</li>
                                <li>Sales performance logs</li>
                                <li>Centralized database management</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Solution 5: Hotel Management Software -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="solution-card">
                        <div class="solution-img-box">
                            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=600&auto=format&fit=crop" alt="Hotel Management Software">
                        </div>
                        <div class="solution-content">
                            <h4>Hotel Management Software</h4>
                            <p>Manage room reservations, check-ins/check-outs, restaurant billing (POS), housekeeping, and staff assignments dynamically.</p>
                            <ul>
                                <li>Room allocation & occupancy</li>
                                <li>Restaurant POS integration</li>
                                <li>Housekeeping & laundry logs</li>
                                <li>Guest feedback database</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Solution 6: Transport & Logistics Software -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="solution-card">
                        <div class="solution-img-box">
                            <img src="https://images.unsplash.com/photo-1516576880352-db6624ac30e5?q=80&w=600&auto=format&fit=crop" alt="Transport & Logistics Software">
                        </div>
                        <div class="solution-content">
                            <h4>Transport & Logistics Software</h4>
                            <p>Optimize fleet management, route planning, real-time tracking, fuel monitoring, and driver assignments within a single dashboard.</p>
                            <ul>
                                <li>GPS tracking & mapping</li>
                                <li>Fuel & expense logs</li>
                                <li>Driver & vehicle management</li>
                                <li>Client billing & dispatch</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 7. WHY CHOOSE US -->
    <section class="section-padding bg-light-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="software-title">Why Choose Coral Web Technology?</h2>
                <p class="text-muted mt-3">
                    We build partnerships based on transparency, expertise, and a commitment to your long-term success.
                </p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Point 1 -->
                    <div class="benefit-row" data-aos="fade-up" data-aos-delay="100">
                        <div class="benefit-icon"><i class="bi bi-people-fill"></i></div>
                        <div class="benefit-text">Experienced Engineers: A highly qualified team skilled in modern tech stacks.</div>
                    </div>
                    <!-- Point 2 -->
                    <div class="benefit-row" data-aos="fade-up" data-aos-delay="200">
                        <div class="benefit-icon"><i class="bi bi-chat-left-heart-fill"></i></div>
                        <div class="benefit-text">Client-Centric Philosophy: Your brand's targets guide our development paths.</div>
                    </div>
                    <!-- Point 3 -->
                    <div class="benefit-row" data-aos="fade-up" data-aos-delay="300">
                        <div class="benefit-icon"><i class="bi bi-sliders"></i></div>
                        <div class="benefit-text">Tailor-Made Configurations: We build software custom-designed for your operational requirements.</div>
                    </div>
                    <!-- Point 4 -->
                    <div class="benefit-row" data-aos="fade-up" data-aos-delay="400">
                        <div class="benefit-icon"><i class="bi bi-eye-fill"></i></div>
                        <div class="benefit-text">Transparent Collaboration: Clear milestone reporting and constant project alignment.</div>
                    </div>
                    <!-- Point 5 -->
                    <div class="benefit-row" data-aos="fade-up" data-aos-delay="500">
                        <div class="benefit-icon"><i class="bi bi-patch-check-fill"></i></div>
                        <div class="benefit-text">Post-Launch Guarantee: Reliable maintenance, support, and updates.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 8. FAQ SECTION -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="software-title">Frequently Asked Questions</h2>
                <p class="text-muted mt-3">
                    Find answers to common queries regarding our custom software engineering services.
                </p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-9" data-aos="fade-up">
                    <div class="accordion custom-accordion" id="softwareFaqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    What kind of custom software products do you build?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#softwareFaqAccordion">
                                <div class="accordion-body">
                                    We design and build a diverse range of custom business applications, including HR & Payroll Management Systems (HRMS), School ERPs, Hotel CRM, Inventory & Billing programs, and custom logistics platforms.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    Which technologies do you leverage for development?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#softwareFaqAccordion">
                                <div class="accordion-body">
                                    We select technology stacks based on your project goals. Typically, we use JavaScript (Node.js, React.js), Python, Java, and PHP for backend and frontend engineering, coupled with secure database architectures like MySQL, PostgreSQL, and MongoDB.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Do we own the source code of the developed software?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#softwareFaqAccordion">
                                <div class="accordion-body">
                                    Yes, 100%! Upon project completion and final payment settlement, you retain full intellectual property rights and source code ownership of the software products we build for you.
                                </div>
                            </div>
                        </div>
                        
                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    Do you offer support and maintenance post-deployment?
                                </button>
                            </h3>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#softwareFaqAccordion">
                                <div class="accordion-body">
                                    Yes. We provide continuous post-deployment support, error troubleshooting, database optimization audits, and feature enhancement updates to keep your application running smoothly.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- 9. CTA BANNER -->
    <section class="py-5" style="padding-bottom: 90px !important;">
        <div class="container">
            <div class="premium-cta" data-aos="zoom-in">
                <h2>Let's Build Your Next Digital Solution</h2>
                <p>
                    At Coral Web Technology, we believe custom software should simplify complex operations, elevate team productivity, and accelerate business growth. Speak to our software architecture experts today to convert your idea into a high-performance system.
                </p>
                <a href="<?= $base_url ?>contact-us.php" class="btn-premium-action">Get Started Now <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>
    
    <?php include '../common/footer.php'; ?>
</body>

</html>
