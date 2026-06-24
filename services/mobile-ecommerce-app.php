<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'mobile-ecommerce-app'; ?>
    <!-- ======================================== -->
    <style>
        .mobile-ecom-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/mobile-ecom-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .mobile-ecom-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif; 
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .mobile-ecom-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .mobile-ecom-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .mobile-ecom-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="mobile-ecom-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Mobile E-Commerce App</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mobile E-Commerce App</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Android/iOS App for Store -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/mobile/1.jpg"
                        alt="Android iOS App for Store" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Android / iOS App for Store</h3>
                    <p>We develop feature-rich Android and iOS e-commerce apps that offer smooth shopping experiences,
                        secure checkout, and user-friendly interfaces.</p>
                    <ul>
                        <li class="list-group-item">Native app development for Android & iOS</li>
                        <li class="list-group-item">Product browsing & secure checkout</li>
                        <li class="list-group-item">User profile & order management</li>
                        <li class="list-group-item">Fast, responsive & scalable apps</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Hybrid App (Flutter / React Native) -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/mobile/2.jpg"
                        alt="Hybrid App Flutter React Native" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Hybrid App (Flutter / React Native)</h3>
                    <p>Save time and cost with hybrid mobile apps built on Flutter or React Native, delivering smooth
                        performance on both Android and iOS platforms.</p>
                    <ul>
                        <li class="list-group-item">Cross-platform app development</li>
                        <li class="list-group-item">Single codebase for Android & iOS</li>
                        <li class="list-group-item">Custom UI/UX for better engagement</li>
                        <li class="list-group-item">Cost-effective & faster deployment</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Push Notification Integration -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/mobile/3.jpg"
                        alt="Push Notification Integration" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Push Notification Integration</h3>
                    <p>Keep your customers engaged with real-time push notifications for offers, discounts, order
                        updates, and personalized promotions.</p>
                    <ul>
                        <li class="list-group-item">Real-time order & delivery alerts</li>
                        <li class="list-group-item">Promotional & discount notifications</li>
                        <li class="list-group-item">Personalized engagement campaigns</li>
                        <li class="list-group-item">Easy integration with Firebase/OneSignal</li>
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
