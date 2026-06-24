<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../common/config.php"); ?>
    <?php include("../common/plugins.php"); ?>
    <?php include("../common/head.php"); ?>

</head>

<body>
    <?php include("../common/header.php"); ?>
    <!-- ================================================ -->
    <style>
        .blogs-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/blogs-banner.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .blogs-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .blogs-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .blogs-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .blogs-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="blogs-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Blogs</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- =============================================================================== -->
    <style>
        .blogs .card {
            border-radius: 0px;
        }

        .blogs .card img {
            height: 250px;
            width: 100%;
            width: 100%;
            object-fit: contain;
            background-color: var(--primary-color);
        }

        .blogs a {
            text-decoration: none;
        }
    </style>
    <section class="py-5 blogs">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="head-title mb-4 text-center">
                    <h2>Insights & <span>Updates</span></h2>
                    <p class="fst-italic">Stay informed with our latest blogs, tips, and trends to help your business
                        grow smarter and faster.</p>
                </div>

                <?php
                /* Config handled in head */
                // include '../admin/common/config.php';

                $stmt = $conn->prepare("SELECT slug, cover_title, cover_desc, cover_image, cover_alt, created_at FROM blogs ORDER BY created_at DESC");
                $stmt->execute();
                $result = $stmt->get_result();

                while ($row = $result->fetch_assoc()) {
                    $raw_slug = trim($row['slug']);
                    if (preg_match('/^https?:\/\//i', $raw_slug)) {
                        $slug = $raw_slug;
                    } else {
                        $slug = urlencode($raw_slug);
                    }
                    $coverTitle = htmlspecialchars($row['cover_title']);
                    $coverDesc = $row['cover_desc']; // No htmlspecialchars here
                    $coverAlt = htmlspecialchars($row['cover_alt']);
                    $coverImage = "../admin/uploads/blogs/" . htmlspecialchars($row['cover_image']);
                    $createdAt = date("d M Y", strtotime($row['created_at']));
                    ?>
                    <div class="col-md-4 mb-4">
                        <a href="<?= $slug; ?>" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="<?= $coverImage; ?>" class="card-img-top" alt="<?= $coverAlt; ?>"
                                    title="<?= $coverTitle; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $coverTitle; ?></h5>
                                    <p class="card-text">
                                        <?= mb_strimwidth($coverDesc, 0, 160, '...'); ?>
                                    </p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <small class="text-muted">Published on <?= $createdAt; ?></small>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>



    <!-- =================================================== -->
    <?php include("../common/footer.php"); ?>
</body>

</html>