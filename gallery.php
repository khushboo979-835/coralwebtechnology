<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- Fancybox JS -->

</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ======================================= -->
    <style>
        .gallery-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/gallery-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .gallery-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .gallery-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .gallery-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .gallery-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="gallery-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Gallery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ========================================= -->
    <style>
        .gallery img {
            height: 200px;
            object-fit: cover;
        }
    </style>
    <section class="py-5 gallery">
        <div class="container">
            <div class="row">
                <?php
                include "admin/common/config.php";
                $sql = "SELECT * FROM gallery";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card h-100">
                                <a href="<?= $base_url; ?>admin/<?= $row['image']; ?>" data-fancybox="gallery"
                                    data-caption="<?= htmlspecialchars($row['alt']); ?>">
                                    <img src="<?= $base_url; ?>admin/<?= $row['image']; ?>" class="card-img-top img-fluid"
                                        alt="<?= htmlspecialchars($row['alt']); ?>">
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p class='text-center'>No completed projects found.</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </section>


    <!-- ======================================== -->
    <?php include 'common/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

</body>

</html>