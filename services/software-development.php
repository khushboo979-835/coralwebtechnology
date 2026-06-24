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
    <!-- ======================================== -->
    <style>
        .software-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/software-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .software-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .software-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .software-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .software-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="software-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Software Solutions</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Software Solutions</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Hospital Management Software -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/software/1.jpg"
                        alt="Hospital Management Software" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Hospital Management Software</h3>
                    <p>Our Hospital Management Software helps healthcare providers streamline patient care,
                        appointments, billing, and medical records with ease.</p>
                    <ul>
                        <li class="list-group-item">Patient records management</li>
                        <li class="list-group-item">Appointment scheduling</li>
                        <li class="list-group-item">Billing & insurance integration</li>
                        <li class="list-group-item">Pharmacy & inventory control</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: School/Coaching ERP -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/software/2.jpg" alt="School/Coaching ERP"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">School/Coaching ERP</h3>
                    <p>A complete ERP solution for schools and coaching institutes to manage academics,
                        attendance, examinations, and communication with parents.</p>
                    <ul>
                        <li class="list-group-item">Student information system</li>
                        <li class="list-group-item">Attendance & exam management</li>
                        <li class="list-group-item">Fee collection & accounting</li>
                        <li class="list-group-item">Parent-teacher communication</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Inventory & Billing Software -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/software/3.jpg"
                        alt="Inventory & Billing Software" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Inventory & Billing Software</h3>
                    <p>Track stock, manage sales, and automate billing with our efficient inventory &
                        billing software tailored for businesses of all sizes.</p>
                    <ul>
                        <li class="list-group-item">Real-time stock management</li>
                        <li class="list-group-item">Barcode & QR integration</li>
                        <li class="list-group-item">GST-compliant billing</li>
                        <li class="list-group-item">Reports & analytics</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: CRM Solutions -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/software/4.jpg" alt="CRM Solutions"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">CRM Solutions</h3>
                    <p>Boost customer relationships with a CRM solution that helps manage leads, sales,
                        and customer interactions effectively.</p>
                    <ul>
                        <li class="list-group-item">Lead & opportunity tracking</li>
                        <li class="list-group-item">Sales pipeline management</li>
                        <li class="list-group-item">Automated follow-ups & reminders</li>
                        <li class="list-group-item">Analytics & reporting dashboard</li>
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
