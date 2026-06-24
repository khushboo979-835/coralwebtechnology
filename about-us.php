<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ========================================= -->
    <style>
        .about-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/about-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 100px 0;
        }

        .about-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Playfair Display', serif;
            font-size: 70px;
            font-weight: 700;
            letter-spacing: -1px;
        }

        @media screen and (max-width: 768px) {
            .about-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .about-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Playfair Display', serif;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .about-breadcrumb a:hover {
            color: #fff;
        }

        .about-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Playfair Display', serif;
            text-decoration: none;
        }
    </style>
    <section class="about-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ========================================= -->
    <section style="padding: 60px 0; background: #ffffff;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div style="text-align: center; margin-bottom: 50px; width: 100%;">
                    <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 15px; color: #333;">About <span style="color: #333;">Coral Web</span> Technology</h2>
                    <p style="font-size: 1.1rem; color: #666; margin: 0;">Innovating Digital Solutions for Your Business Growth</p>
                </div>

                <div class="col-lg-5 mb-4">
                    <img src="<?= $base_url ?>assets/images/about/1.jpg" alt="About Coral Web Technology"
                        class="img-fluid rounded" style="box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1); max-height: 450px; object-fit: cover;">
                </div>

                <div class="col-lg-7">
                    <p style="font-size: 1.05rem; line-height: 1.8; color: #333; margin-bottom: 1.5rem;">
                        <span class="fw-bold" style="color: #333;">Coral Web Technology</span> is a professional <strong>Software Development</strong>, <strong>Web Design</strong>, <strong>GMB SEO</strong>, <strong>Website SEO</strong>, <strong>Web Development</strong>, and <strong>Mobile App Development</strong> company in India. We are a team of highly motivated and hardworking professionals with rich and extensive experience in developing software and providing complete <strong>IT solutions</strong>. We specialize in creating effective online strategies for different organizations across industries.
                    </p>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: #333; margin-bottom: 1.5rem;">
                        As a leading software company, we deliver tangible value to organizations worldwide by designing, developing, and implementing innovative <strong>digital solutions</strong> that streamline complex business processes and replace high-maintenance legacy applications. Our expertise helps industry leaders remain responsive and attentive to the needs of their clients, ensuring scalability and reliability.
                    </p>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: #333;">
                        We offer high-end creative solutions for business communication and digital marketing. We are technically skilled in creative concepts, visualization, artwork, graphics, layout, and copywriting—all tailored with your profile and target audience in mind.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================= -->
    <style>
        .mission-vision {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            padding: 80px 0;
        }

        .mission-vision .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            background: white;
            overflow: hidden;
            position: relative;
        }

        .mission-vision .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #0d6efd, #198754, #fd7e14);
            transform: translateX(-100%);
            transition: transform 0.4s ease;
        }

        .mission-vision .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.12);
        }

        .mission-vision .card:hover::before {
            transform: translateX(0);
        }

        .mission-vision .icon-box {
            width: 70px;
            height: 70px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            border-radius: 50%;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .mission-vision .card:hover .icon-box {
            transform: scale(1.1) rotate(5deg);
        }

        .mission-vision .mission-icon {
            background: linear-gradient(135deg, #e9f5ff 0%, #d4e6ff 100%);
            color: #0d6efd;
        }

        .mission-vision .vision-icon {
            background: linear-gradient(135deg, #e9fff1 0%, #d4f5e3 100%);
            color: #198754;
        }

        .mission-vision .values-icon {
            background: linear-gradient(135deg, #fff4e5 0%, #ffe8cc 100%);
            color: #fd7e14;
        }

        .mission-vision .title {
            font-weight: 700;
            margin-bottom: 16px;
            color: #333;
            font-size: 1.3rem;
        }

        .mission-vision .text-muted {
            color: #666;
            line-height: 1.8;
            font-size: 1rem;
        }

        .core-values-list {
            padding-left: 0;
            list-style: none;
        }

        .core-values-list li {
            margin-bottom: 12px;
            padding-left: 28px;
            position: relative;
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        .core-values-list li::before {
            content: "✓";
            color: #0d6efd;
            font-weight: bold;
            position: absolute;
            left: 0;
            font-size: 1.2rem;
        }
    </style>

    <section class="mission-vision">
        <div class="container">
            <div class="row justify-content-center mb-5 text-center">
                <div class="col-lg-9">
                    <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 16px; color: #333;">Our Mission, Vision <span style="color: #333;">&</span> Core Values</h2>
                    <p style="font-size: 1.1rem; color: #666; margin: 0; line-height: 1.6;">We believe in innovation with purpose. Here's what drives our journey at <strong style="color: #333;">Coral Web Technology</strong>.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Mission -->
                <div class="col-md-4">
                    <div class="card p-3 text-center h-100">
                        <div class="icon-box mission-icon mx-auto">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h5 class="title">Our Mission</h5>
                        <p class="text-muted">
                            To empower startups and enterprises with <strong>cutting-edge digital solutions</strong> that <strong>streamline operations</strong>, enhance customer experience, and accelerate business success through innovative technology.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-4">
                    <div class="card p-3 text-center h-100">
                        <div class="icon-box vision-icon mx-auto">
                            <i class="bi bi-eye-fill"></i>
                        </div>
                        <h5 class="title">Our Vision</h5>
                        <p class="text-muted">
                            To become a globally trusted <strong>IT partner</strong>, known for turning ideas into intelligent and <strong>scalable digital ecosystems</strong> that create lasting impact and drive business innovation.
                        </p>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="col-md-4">
                    <div class="card p-3 text-center h-100">
                        <div class="icon-box values-icon mx-auto">
                            <i class="bi bi-stars"></i>
                        </div>
                        <h5 class="title">Core Values</h5>
                        <ul class="core-values-list text-start text-muted mt-3">
                            <li><strong>Client-Centric Approach</strong> – Your success is our priority</li>
                            <li><strong>Integrity & Transparency</strong> – Trust-based partnerships</li>
                            <li><strong>Innovation & Agility</strong> – Adapt and evolve continuously</li>
                            <li><strong>Quality-First Mindset</strong> – Excellence in every delivery</li>
                            <li><strong>Collaboration & Teamwork</strong> – Stronger together</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================= -->
    <!-- CTA Section -->
    <style>
        .cta-section {
            background: linear-gradient(135deg, #0052CC 0%, #0041a3 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: rgba(255, 77, 77, 0.1);
            border-radius: 50%;
        }

        .cta-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
        }

        .cta-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }

        .cta-btn {
            display: inline-block;
            padding: 16px 40px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(51, 51, 51, 0.3);
            border: 2px solid #333;
        }

        .cta-btn:hover {
            background: white;
            color: #333;
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(51, 51, 51, 0.4);
        }
    </style>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Business?</h2>
                <p>Let's collaborate and bring your <strong>digital vision</strong> to life. Our expert team is ready to help you achieve your <strong>business goals</strong> with innovative technology solutions.</p>
                <a href="<?= $base_url?>contact-us.php" class="cta-btn">Get In Touch Today</a>
            </div>
        </div>
    </section>

    <!-- ========================================= -->
    <?php include 'common/footer.php'; ?>
</body>

</html>