<?php include 'common/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Professional Website Design Company | Responsive SEO Friendly Websites';
    $page_description = 'Get a fast-loading, responsive and SEO-friendly website designed for leads, sales and business growth.';
    $page_keywords = 'website design company, website development company, business website design, ecommerce website design';
    $page_canonical = $base_url . 'website-design-landing.php';
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

        /* Pricing Card Special Highlight */
        .package-card {
            border: 1px solid var(--border-color);
            background: var(--light-bg);
            border-radius: 16px;
            padding: 30px;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.02);
        }
        .package-card.highlight {
            border: 2px solid var(--primary);
            box-shadow: 0 10px 30px rgba(255, 43, 88, 0.08);
            transform: scale(1.02);
        }
        @media (max-width: 991px) {
            .package-card.highlight {
                transform: scale(1);
            }
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
        }
    </style>
</head>
<body>
    <?php include 'common/header.php'; ?>
    <div class="floating-cta d-md-none">
        <a class="call" href="tel:+919117741984"><i class="bi bi-telephone-fill"></i>Call Now</a>
        <a class="wa" href="https://wa.me/919117741984?text=Hi%20I%20want%20a%20professional%20website%20for%20my%20business" target="_blank"><i class="bi bi-whatsapp"></i>WhatsApp</a>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="premium-badge">
                        <i class="bi bi-stars"></i> 5–7 Days Delivery • Responsive & SEO Friendly
                    </span>
                    <h1 class="hero-title">
                        Professional <span class="text-gradient">Website Design</span> Company
                    </h1>
                    <p class="hero-subtitle">
                        Get a high-converting, custom-designed website that makes your business look premium, loads in milliseconds, and brings in qualified leads.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#lead-form" class="btn-gradient-cta">
                            <i class="bi bi-chat-left-dots-fill"></i> Get Free Quote
                        </a>
                        <a href="https://wa.me/919117741984?text=Hi%20I%20need%20a%20website%20for%20my%20business" class="btn-outline-cta" target="_blank">
                            <i class="bi bi-whatsapp" style="color: #25d366;"></i> WhatsApp Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <div class="accent-card pink-top">
                        <h4 class="fw-bold mb-4 text-gradient">Why Work With Us</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> Custom Mobile-First Layout
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> Advanced On-Page SEO
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> High Loading Speed Performance
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bi bi-patch-check-fill text-primary me-2"></i> Dedicated Post-Launch Support
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
                <h2 class="fw-bold text-gradient mb-2">Our Website Design Services</h2>
                <p class="text-muted mx-auto" style="max-width:700px;">From startup landing pages to full-scale corporate websites, we create digital experiences that look modern and perform well.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="accent-card">
                        <div class="card-icon"><i class="bi bi-window-stack"></i></div>
                        <h5 class="fw-bold mb-2">Business Websites</h5>
                        <p class="text-muted mb-0 small">Professional websites for services, agencies, and local businesses looking to scale.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="accent-card pink-top">
                        <div class="card-icon"><i class="bi bi-bag"></i></div>
                        <h5 class="fw-bold mb-2">Ecommerce Websites</h5>
                        <p class="text-muted mb-0 small">Sales-ready stores with secure checkout, product catalogues, and payment setups.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="accent-card blue-top">
                        <div class="card-icon"><i class="bi bi-wordpress"></i></div>
                        <h5 class="fw-bold mb-2">WordPress CMS</h5>
                        <p class="text-muted mb-0 small">Easy-to-manage, customized Content Management Systems built with light themes.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="accent-card">
                        <div class="card-icon"><i class="bi bi-speedometer2"></i></div>
                        <h5 class="fw-bold mb-2">SEO Optimisation</h5>
                        <p class="text-muted mb-0 small">Clean codebase, indexable structure, and optimized elements for search ranking.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Portfolio Highlights</h2>
                <p class="text-muted">Explore some of the premium websites we have crafted for brands globally.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="accent-card p-0 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=80" class="img-fluid w-100" alt="Corporate website design" style="height:200px; object-fit:cover;">
                        <div class="p-4">
                            <h5 class="fw-bold mb-2">Corporate SaaS Hub</h5>
                            <p class="text-muted mb-0 small">Clean layout, lead-focused pages, and rapid execution experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="accent-card p-0 overflow-hidden pink-top">
                        <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&w=900&q=80" class="img-fluid w-100" alt="Ecommerce website design" style="height:200px; object-fit:cover;">
                        <div class="p-4">
                            <h5 class="fw-bold mb-2">Global E-Retail Store</h5>
                            <p class="text-muted mb-0 small">Product-first UI with mobile browsing and checkout conversion setup.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="accent-card p-0 overflow-hidden blue-top">
                        <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=900&q=80" class="img-fluid w-100" alt="Landing page design" style="height:200px; object-fit:cover;">
                        <div class="p-4">
                            <h5 class="fw-bold mb-2">Fintech Conversion Funnel</h5>
                            <p class="text-muted mb-0 small">High-converting landing page crafted for premium Google Ads campaigns.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Transparent Packages</h2>
                <p class="text-muted">Choose a package based on your business goals and launch timeline.</p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-md-4">
                    <div class="package-card">
                        <h4 class="fw-bold mb-2">Starter</h4>
                        <p class="text-muted small">For startups and local service agencies</p>
                        <h2 class="fw-bold text-gradient my-3">₹12,999</h2>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Up to 5 Pages</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Mobile Responsive Design</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Standard Contact Form</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> 1 Year Support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="package-card highlight">
                        <span class="badge bg-danger mb-2 px-3 py-1 rounded-pill">Most Popular</span>
                        <h4 class="fw-bold mb-2">Growth</h4>
                        <p class="text-muted small">For brands ready to scale marketing</p>
                        <h2 class="fw-bold text-gradient my-3">₹24,999</h2>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Up to 10 Pages Layout</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> On-Page SEO Structure</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> High Loading Speed Performance</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Dedicated Project Planner</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="package-card">
                        <h4 class="fw-bold mb-2">Business Pro</h4>
                        <p class="text-muted small">For full enterprise operations</p>
                        <h2 class="fw-bold text-gradient my-3">₹49,999+</h2>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Custom Coding Panel</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Ecommerce / Payment Gateway</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> Advanced UX Animations</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i> 24/7 Server Management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Reviews -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-gradient mb-2">Client Reviews</h2>
                <p class="text-muted">Real feedback from businesses that trusted our team.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“The team delivered our website in just 6 days and the design quality was outstanding.”</p>
                        <strong class="text-gradient">Rahul K.</strong>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“Our new site loads fast, looks premium, and brought in more inquiries within a month.”</p>
                        <strong class="text-gradient">Pooja S.</strong>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="text-warning mb-2"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <p class="text-muted small mb-3">“Professional service, clear communication and excellent support after launch.”</p>
                        <strong class="text-gradient">Arjun M.</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us & Form -->
    <section class="section-padding" id="lead-form">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h2 class="fw-bold text-gradient mb-3">Partnering for Digital Success</h2>
                    <p class="text-muted mb-4">We combine UI design, conversion strategy, and SEO fundamentals to make sure your website works for your business expansion.</p>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-check-circle-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Business-First Layouts</h6>
                                <p class="text-muted mb-0 small">Every layout block is strategic to capture clicks and conversion leads.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-check-circle-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Fast Loading Speeds</h6>
                                <p class="text-muted mb-0 small">Optimized code, compressed assets, and minified scripts result in higher quality scores.</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-primary me-3 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">100% Mobile Responsive</h6>
                                <p class="text-muted mb-0 small">Verified cross-device responsiveness across smartphones, tablets, and large screens.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="clean-form-card">
                        <h3 class="fw-bold text-gradient mb-2">Get Free Consultation</h3>
                        <p class="text-muted mb-4">Fill out the requirements sheet below to schedule an interview session.</p>
                        <form action="send-mail.php" method="post">
                            <input type="hidden" name="services" value="Website Design">
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
                                <textarea class="form-control" name="requirement" rows="3" placeholder="Tell us about your website specifications" required></textarea>
                            </div>
                            <button type="submit" class="btn-gradient-cta w-100 justify-content-center">Send Requirement</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ & Map -->
    <section class="section-padding bg-soft">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h3 class="fw-bold text-gradient mb-3">Frequently Asked Questions</h3>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">How fast can I launch my business website?</h6>
                        <p class="text-muted mb-0 small">Standard landing layouts and corporate sites are delivered within 5–7 working days.</p>
                    </div>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">Do you build SEO-friendly sites?</h6>
                        <p class="text-muted mb-0 small">Yes, each project integrates clean indexing tags, optimized titles, schema coding, and high page performance setup.</p>
                    </div>
                    <div class="faq-item">
                        <h6 class="fw-bold mb-1">Can I manage my custom site after launch?</h6>
                        <p class="text-muted mb-0 small">Yes, we provide dynamic custom dashboards or clean WordPress setups for easy modifications.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="fw-bold text-gradient mb-3">Corporate Location</h3>
                    <iframe class="map-frame" src="https://www.google.com/maps?q=Patna%20Boring%20Road%20Chauraha&z=14&output=embed" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>
</body>
</html>
