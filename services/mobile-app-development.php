<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'mobile-app-development'; ?>
    <!-- ======================================== -->
    <style>
        .mobile-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/mobile-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .mobile-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .mobile-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .mobile-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .mobile-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="mobile-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Mobile App Development</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mobile App Development</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Android/iOS App -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/app-development/1.jpg"
                        alt="Android iOS App Development" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Android / iOS App Development</h3>
                    <p>We design and develop high-performing native mobile applications for Android and iOS platforms,
                        ensuring a smooth user experience and seamless functionality.</p>
                    <ul>
                        <li class="list-group-item">Native Android app development</li>
                        <li class="list-group-item">Native iOS app development</li>
                        <li class="list-group-item">Scalable and secure architecture</li>
                        <li class="list-group-item">User-friendly and modern UI</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Hybrid App (Flutter, React Native) -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/app-development/2.jpg" alt="Hybrid App Development"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Hybrid App Development</h3>
                    <p>We build cross-platform hybrid apps using Flutter and React Native that run efficiently
                        on both Android and iOS, saving time and reducing cost without compromising performance.</p>
                    <ul>
                        <li class="list-group-item">Flutter app development</li>
                        <li class="list-group-item">React Native app development</li>
                        <li class="list-group-item">Single codebase, multi-platform</li>
                        <li class="list-group-item">Faster deployment & cost-effective</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <!-- ======================================== -->
    <!-- Dynamic We Serve Across India Section -->
    <?php if (function_exists('renderServiceLocationsSection') && isset($service_key)) { renderServiceLocationsSection($service_key, $base_url); } ?>
    <?php include '../common/footer.php'; ?>
</body>

</html>
