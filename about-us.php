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
            padding: 130px 0;
        }

        .about-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .about-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .about-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .about-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="about-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ========================================= -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="head-title mb-3">
                    <h2 class="fw-bold">About <span>Corevix</span> Technology</h2>
                </div>

                <div class="col-md-5 mb-2">
                    <img src="<?= $base_url ?>assets/images/about/1.jpg" alt="About Corevix Technology"
                        class="img-fluid">
                </div>

                <div class="col-md-7">
                    <p class="text-justify">
                        At <span class="fw-bold text-danger">Corevix Technology</span>, we are passionate about building
                        digital solutions that help businesses
                        grow,
                        scale, and succeed in the modern world. Founded with the mission to deliver high-quality IT
                        services, we
                        specialize in web development, digital marketing, SEO, and graphic design — all tailored to meet
                        our
                        clients’ unique goals.
                    </p>
                    <p class="text-justify">
                        With a team of experienced developers, designers, and marketing experts, Corevix has worked with
                        clients
                        across various industries, delivering 25+ successful projects including education consultancies,
                        healthcare
                        platforms, and enterprise websites.
                    </p>
                    <p class="text-justify">
                        Our strength lies in combining creative design with robust code, ensuring every project is not
                        only visually
                        appealing but also technically solid. We believe in transparency, collaboration, and timely
                        delivery — values
                        that reflect in every project we undertake.
                    </p>
                    <p class="text-justify">
                        Whether you're a startup aiming to establish an online presence or a business looking to scale
                        your
                        operations digitally, Corevix Technology is your trusted partner in transformation.
                    </p>


                </div>
            </div>
        </div>
    </section>

    <!-- ========================================= -->
    <style>
        .mission-vision {
            background: #f8f9fa;
        }

        .mission-vision .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .mission-vision .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        .mission-vision .icon-box {
            width: 64px;
            height: 64px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            border-radius: 50%;
            margin-bottom: 16px;
        }

        .mission-vision .mission-icon {
            background-color: #e9f5ff;
            color: #0d6efd;
        }

        .mission-vision .vision-icon {
            background-color: #e9fff1;
            color: #198754;
        }

        .mission-vision .values-icon {
            background-color: #fff4e5;
            color: #fd7e14;
        }

        .mission-vision .title {
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--primary-color);
        }

        .mission-vision .text-muted {
            color: #555;
        }

        .core-values-list {
            padding-left: 0;
            list-style: none;
        }

        .core-values-list li::before {
            content: "✓";
            color: #0d6efd;
            font-weight: bold;
            margin-right: 8px;
        }
    </style>

    <section class="py-5 mission-vision">
        <div class="container">
            <div class="row justify-content-center mb-5 text-center">
                <div class="col-lg-9">
                    <h2 class="fw-bold mb-3">Our Mission, Vision & Core Values</h2>
                    <p class="text-muted fs-5">We believe in innovation with purpose. Here's what drives our journey at
                        <strong>Corevix Technology</strong>.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Mission -->
                <div class="col-md-4">
                    <div class="card p-4 text-center h-100">
                        <div class="icon-box mission-icon mx-auto">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h5 class="title">Our Mission</h5>
                        <p class="text-muted">
                            To empower startups and enterprises with cutting-edge digital solutions that streamline
                            operations,
                            enhance customer experience, and accelerate business success.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-4">
                    <div class="card p-4 text-center h-100">
                        <div class="icon-box vision-icon mx-auto">
                            <i class="bi bi-eye-fill"></i>
                        </div>
                        <h5 class="title">Our Vision</h5>
                        <p class="text-muted">
                            To become a globally trusted IT partner, known for turning ideas into intelligent and
                            scalable
                            digital ecosystems that create lasting impact.
                        </p>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="col-md-4">
                    <div class="card p-4 text-center h-100">
                        <div class="icon-box values-icon mx-auto">
                            <i class="bi bi-stars"></i>
                        </div>
                        <h5 class="title">Core Values</h5>
                        <ul class="core-values-list text-start text-muted mt-3">
                            <li>Client-Centric Approach</li>
                            <li>Integrity & Transparency</li>
                            <li>Innovation & Agility</li>
                            <li>Quality-First Mindset</li>
                            <li>Collaboration & Teamwork</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ========================================= -->
    <?php include 'common/footer.php'; ?>
</body>

</html>