<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <?php $service_key = 'maintenance-support'; ?>
    <!-- ======================================== -->
    <style>
        .maintenance-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/maintenance-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .maintenance-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .maintenance-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .maintenance-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .maintenance-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="maintenance-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Maintenance & Support </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Maintenance & Support </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Website & App AMC -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/maintenance-support/1.jpg"
                        alt="Website & App AMC" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Website & App AMC (Annual Maintenance Contract)</h3>
                    <p>Ensure your website and mobile apps run smoothly with our reliable Annual Maintenance Contracts.
                        We keep your digital platforms secure, updated, and high-performing throughout the year.</p>
                    <ul>
                        <li class="list-group-item">Regular updates & security patches</li>
                        <li class="list-group-item">Bug fixing & error resolution</li>
                        <li class="list-group-item">Performance monitoring & optimization</li>
                        <li class="list-group-item">Backup & recovery support</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Technical Support Plans -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/maintenance-support/2.jpg"
                        alt="Technical Support Plans" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Technical Support Plans</h3>
                    <p>Get expert assistance whenever you need it with our tailored technical support plans. From
                        troubleshooting to server management, we provide fast and reliable solutions.</p>
                    <ul>
                        <li class="list-group-item">24/7 helpdesk & remote support</li>
                        <li class="list-group-item">Priority-based support levels</li>
                        <li class="list-group-item">Troubleshooting & issue resolution</li>
                        <li class="list-group-item">Server & hosting support</li>
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
