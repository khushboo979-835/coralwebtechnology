<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <style>
        .ppc-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/paid-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .ppc-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .ppc-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .ppc-breadcrumb a,
        .ppc-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="ppc-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">PPC Marketing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">PPC Marketing</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6">
                    <img src="<?= $base_url ?>assets/images/services/paid/1.jpg" alt="PPC Marketing" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3">PPC Campaign Management</h3>
                    <p>Our PPC marketing services help you generate leads fast with targeted campaigns that deliver measurable ROI.</p>
                    <ul>
                        <li class="list-group-item">Paid ads strategy and keyword targeting</li>
                        <li class="list-group-item">Ad creation for search and display</li>
                        <li class="list-group-item">Landing page recommendations</li>
                        <li class="list-group-item">Conversion tracking and reporting</li>
                    </ul>
                </div>
            </div>

            <div class="row align-items-center mb-5 bg-light p-3 flex-md-row-reverse">
                <div class="col-md-6">
                    <img src="<?= $base_url ?>assets/images/services/paid/2.jpg" alt="PPC Optimization" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3">Optimization and Scaling</h3>
                    <p>We continuously optimize bids, ad copy, and targeting to reduce costs and increase campaign effectiveness.</p>
                    <ul>
                        <li class="list-group-item">A/B testing for ads and creatives</li>
                        <li class="list-group-item">Bid and budget management</li>
                        <li class="list-group-item">Audience and remarketing setup</li>
                        <li class="list-group-item">Weekly and monthly performance reviews</li>
                    </ul>
                </div>
            </div>

            <div class="row align-items-center mb-5 bg-white p-3">
                <div class="col-md-6">
                    <img src="<?= $base_url ?>assets/images/services/paid/3.jpg" alt="PPC Reporting" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3">Reporting and Transparency</h3>
                    <p>We provide transparent PPC reports so you know exactly how your ads are performing and where your budget is invested.</p>
                    <ul>
                        <li class="list-group-item">Transparent ad spend reporting</li>
                        <li class="list-group-item">Conversion and ROI metrics</li>
                        <li class="list-group-item">Campaign insights and recommendations</li>
                        <li class="list-group-item">Goal tracking and next-step planning</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic We Serve Across India Section -->
    <?php $service_key = 'paid-marketing'; if (function_exists('renderServiceLocationsSection')) { renderServiceLocationsSection($service_key, $base_url); } ?>
    <?php include '../common/footer.php'; ?>
</body>

</html>
