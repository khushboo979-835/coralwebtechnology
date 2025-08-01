<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body >
    <?php include '../common/header.php'; ?>
    <!-- ======================================== -->
    <style>
        .venereology-breadcrumb {
            /* background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/venereology-banner.jpg'); */
            background: black;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .venereology-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .venereology-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .venereology-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="venereology-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Venereology</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Venereology</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="head-title mb-3">
                    <p>Venereology at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <p>
                        Venereology is the branch of dermatology that focuses on the diagnosis, treatment, and
                        prevention of sexually transmitted infections (STIs), also known as sexually transmitted
                        diseases (STDs). At The Skin Centre, we provide discreet, evidence-based care for a wide range
                        of venereal conditions affecting both men and women.
                    </p>
                    <div class="py-3">

                        <p>
                            Our team of experienced dermatologists and venereologists offers specialized consultations
                            for conditions such as genital warts, herpes, syphilis, gonorrhea, chlamydia, and other
                            related infections. Timely diagnosis and treatment are essential not only for managing
                            symptoms but also for preventing complications and transmission to others.
                        </p>
                        <p>
                            We maintain strict patient confidentiality and provide compassionate, non-judgmental care to
                            ensure you feel comfortable discussing sensitive health concerns.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Venereology Care?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists and venereologists with years of experience
                            </li>
                            <li class=" mb-3">
                                Comprehensive STI/STD screening, diagnosis, and treatment
                            </li>
                            <li class=" mb-3">
                                Discreet and confidential consultations in a professional environment
                            </li>
                            <li class=" mb-3">
                                Focus on both treatment and prevention through education and counseling
                            </li>
                            <li class=" mb-3">
                                Personalized treatment plans using the latest medical protocols
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <?php include 'sidebar.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>