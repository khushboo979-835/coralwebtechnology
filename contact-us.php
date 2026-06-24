<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ========================================================== -->
    <style>
        .contact-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/contact-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .contact-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .contact-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .contact-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .contact-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="contact-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ========================================= -->
    <style>
        .contact-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            padding: 10px 10px;
            margin-bottom: 30px;
            transition: all 0.3s ease-in-out;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
        }

        .contact-card .icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .contact-card h5.title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .contact-card p {
            font-size: 16px;
            color: #666;
            margin: 0;
            line-height: 1.6;
        }

        .contact-section .row {
            align-items: stretch;
        }
    </style>

    <section class="py-5 contact-section">
        <div class="container">
            <div class="row g-4">
                <!-- Address -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="icon"><i class="bi bi-geo-alt"></i></div>
                        <h5 class="title">Our Location</h5>
                        <p>Boring Road Chauraha, Opposite Harihar Chamber, Chandrakanta Appartment, Room No:- 201, Pandooi Kothi, Patna - 801503</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="icon"><i class="bi bi-telephone"></i></div>
                        <h5 class="title">Contact Numbers</h5>
                        <p> +91-8102549601<br> +91-9117741984</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="icon"><i class="bi bi-envelope"></i></div>
                        <h5 class="title">Email Us</h5>
                        <p>coralwebtechnology@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================================== -->

    <?php include 'contact.php'; ?>
    <!-- ============================================ -->
    <?php include 'common/footer.php'; ?>
</body>


</html>