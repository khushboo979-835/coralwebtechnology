<?php include 'common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Mobile App Development Company | Android iOS App Development';
    $page_description = 'Build Android and iOS apps with custom features, smooth UI and reliable development support.';
    $page_keywords = 'mobile app development company, android app development, ios app development, react native app development';
    $page_canonical = $base_url . 'mobile-app-development-landing.php';
    ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <style>
        :root {
            --primary: #ff2b58; /* Appslure Pink-Red */
            --secondary: #277cea; /* Appslure Blue */
            --dark: #2b2c36; /* Appslure Dark Grey */
            --light-bg: #ffffff;
            --soft-bg: #f8f9fb;
            --border-color: #e5e5e5;
            --text-main: #333333;
            --text-muted: #555555;
            --primary-glow: rgba(255, 43, 88, 0.1);
        }
        
        body { 
            font-family: 'Poppins', sans-serif; 
            color: var(--text-main); 
            background: var(--light-bg); 
            overflow-x: hidden;
        }

        .section-padding { padding: 50px 0; }
        .bg-soft { background: var(--soft-bg); }

        /* Typography Gradients */
        .text-gradient {
            background: linear-gradient(to right, #ff2b58 0%, #8e2de2 50%, #277cea 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        /* Modern Premium Badge */
        .premium-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            border-radius: 99px;
            background: rgba(255, 43, 88, 0.05);
            border: 1px solid rgba(255, 43, 88, 0.15);
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 20px;
        }

        /* Hero */
        .hero-section {
            position: relative;
            padding: 100px 0 70px;
            background: linear-gradient(135deg, #f8f9fb 0%, #eef2f7 100%);
            border-bottom: 1px solid var(--border-color);
        }
        .hero-title {
            font-size: clamp(2.2rem, 4.5vw, 3.4rem);
            font-weight: 800;
            line-height: 1.2;
            color: var(--dark);
            margin-bottom: 15px;
        }
        .hero-subtitle {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 650px;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        /* Top-Border Accent Cards */
        .accent-card {
            background: var(--light-bg);
            border-radius: 12px;
            padding: 28px;
            height: 100%;
            border: 1px solid var(--border-color);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
            position: relative;
        }
        .accent-card::before {
            content: "";
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            height: 5px;
            border-radius: 12px 12px 0 0;
            background: var(--dark);
        }
        .accent-card.pink-top::before { background: var(--primary); }
        .accent-card.blue-top::before { background: var(--secondary); }

        .accent-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            border-color: rgba(255, 43, 88, 0.2);
        }
        
        .card-icon {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            background: rgba(255, 43, 88, 0.08);
            color: var(--primary);
            font-size: 1.4rem;
            margin-bottom: 18px;
            transition: all 0.3s ease;
        }
        .accent-card:hover .card-icon {
            background: var(--primary);
            color: #fff;
        }

        /* Scroll box styling inspired by Appslure */
        .scroll-box {
            height: 110px;
            overflow-y: auto;
            margin-top: 10px;
            padding-right: 5px;
            font-size: 0.88rem;
            line-height: 1.5;
            color: var(--text-muted);
        }
        .scroll-box::-webkit-scrollbar {
            width: 4px;
        }
        .scroll-box::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.02);
        }
        .scroll-box::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        /* Buttons */
        .btn-gradient-cta {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px 28px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 15px rgba(255, 43, 88, 0.2);
            transition: all 0.3s ease;
        }
        .btn-gradient-cta:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(255, 43, 88, 0.3);
            color: #fff;
        }

        .btn-outline-cta {
            background: transparent;
            color: var(--dark);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 12px 28px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .btn-outline-cta:hover {
            background: rgba(0, 0, 0, 0.02);
            border-color: var(--dark);
            color: var(--dark);
        }

        /* Timeline / Process Block */
        .step-timeline {
            border-left: 3px dashed var(--border-color);
            padding-left: 30px;
            position: relative;
        }
        .step-node {
            position: relative;
            margin-bottom: 35px;
        }
        .step-node:last-child {
            margin-bottom: 0;
        }
        .step-number {
            position: absolute;
            left: -47px;
            top: 0;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--primary);
            color: #fff;
            font-weight: 700;
            display: grid;
            place-items: center;
            font-size: 0.9rem;
            box-shadow: 0 4px 10px rgba(255, 43, 88, 0.2);
        }
        .step-node:nth-child(even) .step-number {
            background: var(--secondary);
            box-shadow: 0 4px 10px rgba(39, 124, 234, 0.2);
        }

        /* Form Card */
        .clean-form-card {
            background: var(--light-bg);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        }
        .clean-form-card input, .clean-form-card textarea {
            background: var(--soft-bg) !important;
            border: 1px solid var(--border-color) !important;
            color: var(--text-main) !important;
            border-radius: 8px !important;
            padding: 10px 14px !important;
            transition: all 0.3s ease !important;
        }
        .clean-form-card input:focus, .clean-form-card textarea:focus {
            background: #fff !important;
            border-color: var(--primary) !important;
            box-shadow: 0 0 0 3px var(--primary-glow) !important;
        }

        /* Testimonial Cards */
        .testimonial-card {
            background: var(--light-bg);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 24px;
            height: 100%;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
        }
        .testimonial-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        /* Map and Accordion Styling */
        .map-frame {
            border: 0;
            width: 100%;
            min-height: 350px;
            border-radius: 16px;
            border: 1px solid var(--border-color);
        }
        .faq-item {
            background: var(--soft-bg);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 12px;
            transition: all 0.3s ease;
        }
        .faq-item:hover {
            border-color: var(--primary);
        }

        /* Floating CTA bar */
        .floating-cta {
            position: fixed;
            right: 16px;
            bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 999;
        }
        .floating-cta a {
            border-radius: 999px;
            padding: 12px 18px;
            color: #fff;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .floating-cta .call { background: var(--secondary); }
        .floating-cta .wa { background: #25d366; }

        @media (max-width: 768px) {
            .hero-section { padding: 80px 0 50px; }
            .floating-cta {
                right: 10px;
                left: 10px;
                bottom: 12px;
                flex-direction: row;
            }
            .floating-cta a {
                flex: 1;
                justify-content: center;
            }
            .step-timeline {
                padding-left: 20px;
            }
            .step-number {
                left: -37px;
            }
        }
    </style>
</head>
<body>
    <?php include 'common/header.php'; ?>
    <div class="floating-cta d-md-none">
        <a class="call" href="tel:+919117741984"><i class="bi bi-telephone-fill"></i>Call Now</a>
        <a class="wa" href="https://wa.me/919117741984?text=Hi%20I%20need%20a%20mobile%20app%20for%20my%20business" target="_blank"><i class="bi bi-whatsapp"></i>WhatsApp</a>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="premium-badge">
                        <i class="bi bi-phone-fill"></i> Android & iOS App Development Experts
                    </span>
                    <h1 class="hero-title">
                        Custom <span class="text-gradient">Mobile Apps</span> For Business
                    </h1>
                    <p class="hero-subtitle">
                        Award-winning engineering team building high-performance native iOS, Android, and cross-platform apps designed to engage users and scale your business workflow.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#lead-form" class="btn-gradient-cta">
                            <i class="bi bi-chat-left-dots-fill"></i> Free Consultation
                        </a>
                        <a href="https://wa.me/919117741984?text=Hi%20I%20want%20to%20discuss%20my%20app%20idea" class="btn-outline-cta" target="_blank">
                            <i class="bi bi-whatsapp" style="color: #25d366;"></i> WhatsApp Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <div class="accent-card pink-top">
                        <h4 class="fw-bold mb-4 text-gradient">What We Deliver</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> Custom Android & iOS Systems
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> React Native & Flutter Setup
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> Scalable Admin Panels & APIs
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> Full App Store Launch Support
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Mobile App Development Services</h2>
                <p class="text-muted mx-auto" style="max-width:700px;">Providing cutting-edge native and hybrid mobile engineering tailored to modern enterprise standards.</p>
            </div>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="accent-card">
                        <div class="card-icon"><i class="bi bi-phone"></i></div>
                        <h5 class="fw-bold mb-2">Custom Mobile App Development</h5>
                        <div class="scroll-box">
                            As a leading pioneer in app development, we shape unique interface flows and robust backend reporting systems. The more complex your business process, the better our developers perform.
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="accent-card pink-top">
                        <div class="card-icon"><i class="bi bi-lightning-fill"></i></div>
                        <h5 class="fw-bold mb-2">Swift App Development</h5>
                        <div class="scroll-box">
                            Native iOS architecture built in Swift for high-security applications, widgets, Apple Watch systems, and clean animations matching Apple's guidelines.
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="accent-card blue-top">
                        <div class="card-icon"><i class="bi bi-layers-fill"></i></div>
                        <h5 class="fw-bold mb-2">Hybrid App Development</h5>
                        <div class="scroll-box">
                            Being the best Hybrid App Development Company, we build custom hybrid apps performing functions like GPS tracking, offline syncing, wallet calculators, and push updates.
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="accent-card blue-top">
                        <div class="card-icon"><i class="bi bi-android2"></i></div>
                        <h5 class="fw-bold mb-2">Android App Development</h5>
                        <div class="scroll-box">
                            Full-stack Android systems built native in Kotlin/Java. Optimized for vehicle tracking, IoT integrations, location APIs, and secure payment processing.
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="accent-card">
                        <div class="card-icon"><i class="bi bi-apple"></i></div>
                        <h5 class="fw-bold mb-2">iOS App Development</h5>
                        <div class="scroll-box">
                            Polished iPhone and iPad native software systems. We handle complete UI design, Apple App Store compliance, and secure cloud API integration.
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="accent-card pink-top">
                        <div class="card-icon"><i class="bi bi-globe"></i></div>
                        <h5 class="fw-bold mb-2">Offshore Development</h5>
                        <div class="scroll-box">
                            Leverage our dedicated offshore team as your extended IT division, offering secure code bases, daily agile updates, and massive operation savings.
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="accent-card pink-top">
                        <div class="card-icon"><i class="bi bi-braces"></i></div>
                        <h5 class="fw-bold mb-2">React Native Development</h5>
                        <div class="scroll-box">
                            Deploy high-performance apps across iOS & Android using a single shared React code framework, boosting launch speed and lowering maintenance.
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-md-6 col-lg-4">
                    <div class="accent-card blue-top">
                        <div class="card-icon"><i class="bi bi-cpu"></i></div>
                        <h5 class="fw-bold mb-2">Flutter App Development</h5>
                        <div class="scroll-box">
                            Beautiful native compilation using Google's Flutter framework. Delivers high FPS, customized widgets, and seamless hardware sensor integration.
                        </div>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="col-md-6 col-lg-4">
                    <div class="accent-card">
                        <div class="card-icon"><i class="bi bi-window-sidebar"></i></div>
                        <h5 class="fw-bold mb-2">Web App Portals</h5>
                        <div class="scroll-box">
                            Build corresponding admin dashboards and responsive web portals to manage your mobile app content, user accounts, and financial reports.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Mobile Products Portfolio</h2>
                <p class="text-muted">Explore some of the recent apps launched by our team.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="accent-card p-0 overflow-hidden">
                        <div class="p-4">
                            <h5 class="fw-bold mb-2">On-Demand Cab System</h5>
                            <p class="text-muted mb-0 small">Real-time driver location tracking, instant Stripe checkout, and push alerts built on Flutter.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="accent-card p-0 overflow-hidden pink-top">
                        <div class="p-4">
                            <h5 class="fw-bold mb-2">E-commerce Mobile Hub</h5>
                            <p class="text-muted mb-0 small">Sleek multi-vendor shopping application with localized payment getways and biometric auth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="accent-card p-0 overflow-hidden blue-top">
                        <div class="p-4">
                            <h5 class="fw-bold mb-2">Astrology Devvaani Portal</h5>
                            <p class="text-muted mb-0 small">High-speed chat and call system matching customers to astrologers with active wallet payment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Reviews Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Client Reviews</h2>
                <p class="text-muted">Read feedback from business owners who scaled their operations through our apps.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“The React Native app they developed has helped us onboard over 10,000 customers smoothly. Post launch support has been absolute gold.”</p>
                        <strong class="text-gradient">Vikram R.</strong>
                        <p class="text-muted small mb-0">CEO, E-Grocer</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“Delivered both Android and iOS apps on time. The offline capability and fast sync work flawlessly. Highly recommended team.”</p>
                        <strong class="text-gradient">Sneha P.</strong>
                        <p class="text-muted small mb-0">Co-founder, FitTrack</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“Superb communications during development phases. Their help with App Store policy setups saved us months of delay.”</p>
                        <strong class="text-gradient">Karan J.</strong>
                        <p class="text-muted small mb-0">Product Manager, LogiShip</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Process & Lead Form -->
    <section class="section-padding bg-soft" id="lead-form">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h2 class="fw-bold text-gradient mb-4">Our App Engineering Process</h2>
                    <div class="step-timeline">
                        <div class="step-node">
                            <span class="step-number">1</span>
                            <h5 class="fw-bold mb-1">Discovery & Blueprinting</h5>
                            <p class="text-muted mb-0 small">We outline features, user personas, API flows, and construct clickable interactive wireframes.</p>
                        </div>
                        <div class="step-node">
                            <span class="step-number">2</span>
                            <h5 class="fw-bold mb-1">UI/UX Screen Design</h5>
                            <p class="text-muted mb-0 small">Crafting modern dark-themed mobile app interfaces with smooth transistions and intuitive controls.</p>
                        </div>
                        <div class="step-node">
                            <span class="step-number">3</span>
                            <h5 class="fw-bold mb-1">Agile Development & QA</h5>
                            <p class="text-muted mb-0 small">Writing modular clean code with continuous integration testing across different physical devices.</p>
                        </div>
                        <div class="step-node">
                            <span class="step-number">4</span>
                            <h5 class="fw-bold mb-1">App Store Launch & Sync</h5>
                            <p class="text-muted mb-0 small">Publishing onto Google Play & Apple App Store. Providing post-launch monitoring and API maintenance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="clean-form-card">
                        <h3 class="fw-bold text-gradient mb-2">Book App Consultation</h3>
                        <p class="text-muted mb-4">Request a free NDA-protected requirement blueprint for your app concept.</p>
                        <form action="send-mail.php" method="post">
                            <input type="hidden" name="services" value="Mobile App Development">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" name="number" placeholder="Mobile Number" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="requirement" rows="3" placeholder="Describe your mobile app requirements" required></textarea>
                            </div>
                            <button type="submit" class="btn-gradient-cta w-100 justify-content-center">Send Requirement</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ & Map -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h3 class="fw-bold text-gradient mb-3">Frequently Asked Questions</h3>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">Do you provide full source code ownership?</h6>
                        <p class="text-muted mb-0 small">Yes, 100% intellectual property and raw code ownership is transferred to you upon completion.</p>
                    </div>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">How much does custom mobile app development cost?</h6>
                        <p class="text-muted mb-0 small">The pricing varies based on features, native platforms vs hybrid structures, and backend complications. Request a free quote for custom estimation.</p>
                    </div>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">Can you handle App Store policies and approvals?</h6>
                        <p class="text-muted mb-0 small">Absolutely. We manage the entire submission pipeline, including privacy guidelines compliance and developer console setup.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold text-gradient mb-3">Our Corporate Location</h3>
                    <iframe class="map-frame" src="https://www.google.com/maps?q=Patna%20Boring%20Road%20Chauraha&z=14&output=embed" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>
</body>
</html>
