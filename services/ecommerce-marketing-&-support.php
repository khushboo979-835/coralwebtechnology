<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <!-- ======================================== -->
    <style>
        .marketing-support-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/marketing-support-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .marketing-support-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .marketing-support-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .marketing-support-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .marketing-support-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="marketing-support-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">E-Commerce Marketing & Support</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Commerce Marketing & Support</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->

    <section class="py-5">
        <div class="container">

            <!-- SECTION 1: Product Upload Service -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/support/1.jpg"
                        alt="Product Upload Service" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Product Upload Service (Bulk/Single)</h3>
                    <p>Save time with our product upload services. We handle bulk and single product uploads with
                        accurate descriptions, pricing, and images.</p>
                    <ul>
                        <li class="list-group-item">Bulk & single product uploads</li>
                        <li class="list-group-item">SEO-friendly product descriptions</li>
                        <li class="list-group-item">Image optimization for faster loading</li>
                        <li class="list-group-item">Error-free product catalog setup</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 2: Payment Gateway Integration -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/support/2.jpg"
                        alt="Payment Gateway Integration" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Payment Gateway Integration (Razorpay, PayU, PayPal)</h3>
                    <p>Enable smooth and secure online transactions with our payment gateway integration services
                        tailored for your e-commerce store.</p>
                    <ul>
                        <li class="list-group-item">Multiple gateway options</li>
                        <li class="list-group-item">Secure transactions (SSL & PCI compliant)</li>
                        <li class="list-group-item">Seamless checkout experience</li>
                        <li class="list-group-item">Support for Razorpay, PayU, PayPal & more</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 3: Delivery Partner Integration -->
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6 order-md-1 order-2">
                    <img src="<?= $base_url ?>assets/images/services/support/3.jpg"
                        alt="Delivery Partner Integration" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-2 order-1">
                    <h3 class="fw-bold mb-3 s-title">Delivery Partner Integration (Shiprocket, Delhivery)</h3>
                    <p>Connect your store with trusted delivery partners for faster and hassle-free order fulfillment
                        and shipment tracking.</p>
                    <ul>
                        <li class="list-group-item">Integration with Shiprocket, Delhivery & more</li>
                        <li class="list-group-item">Automated shipping & label generation</li>
                        <li class="list-group-item">Real-time tracking updates</li>
                        <li class="list-group-item">Improved order fulfillment efficiency</li>
                    </ul>
                </div>
            </div>

            <!-- SECTION 4: Website Security & Backup Plan -->
            <div class="row align-items-center mb-5 bg-light p-3">
                <div class="col-md-6 order-md-2 order-1">
                    <img src="<?= $base_url ?>assets/images/services/support/4.jpg"
                        alt="Website Security & Backup Plan" class="img-fluid rounded">
                </div>
                <div class="col-md-6 order-md-1 order-2">
                    <h3 class="fw-bold mb-3 s-title">Website Security & Backup Plan</h3>
                    <p>Keep your e-commerce store safe from cyber threats with our advanced security measures and
                        reliable backup solutions.</p>
                    <ul>
                        <li class="list-group-item">Regular website backups</li>
                        <li class="list-group-item">SSL setup & security monitoring</li>
                        <li class="list-group-item">Malware protection & removal</li>
                        <li class="list-group-item">Disaster recovery support</li>
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
