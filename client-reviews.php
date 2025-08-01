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
        .client-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/client-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 130px 0;
        }

        .client-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .client-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .client-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .client-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="client-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Client Reviews</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Client Reviews</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ========================================= -->

    <!-- Reviews Section -->
    <section class="py-5 bg-light" id="client-reviews">
        <div class="container">
            <div class="text-center head-title mb-5">
                <h2 class="fw-bold">What Our <span>Clients</span> Say</h2>
                <p class="text-muted">Real feedback from our valued clients around the world.</p>
            </div>

            <div class="row g-4">
                <!-- Review Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <div class="card-body">
                            <div class="mb-3 d-flex align-items-center">
                                
                                <div>
                                    <h6 class="mb-0 fw-semibold">Amit Raj</h6>
                                    <small class="text-muted">India</small>
                                </div>
                            </div>
                            <p class="text-muted mb-3">Working with Corevix has been a game changer. Their dedication
                                and timely delivery were top-notch!</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <div class="card-body">
                            <div class="mb-3 d-flex align-items-center">
                                
                                <div>
                                    <h6 class="mb-0 fw-semibold">Sofia Lopez</h6>
                                    <small class="text-muted">Spain</small>
                                </div>
                            </div>
                            <p class="text-muted mb-3">Impressed with the UI/UX and support! They understood our needs
                                and delivered accordingly.</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-4 h-100">
                        <div class="card-body">
                            <div class="mb-3 d-flex align-items-center">
                                
                                <div>
                                    <h6 class="mb-0 fw-semibold">James Carter</h6>
                                    <small class="text-muted">USA</small>
                                </div>
                            </div>
                            <p class="text-muted mb-3">Highly professional team. We had a great experience working with
                                them from start to finish.</p>
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================= -->
    <?php include 'common/footer.php'; ?>
</body>

</html>