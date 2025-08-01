<?php
include("../admin/common/config.php");   // For Database Connection
include("../common/config.php");     // For $baseURL
include '../common/head.php';
?>
<?php include '../common/plugins.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?= $baseURL ?>/assets/images/logo/logo.png" type="image/png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <?php
    $slug = $_GET['slug'] ?? '';

    if (!empty($slug)) {
        $stmt = $conn->prepare("SELECT google_tag, page_title, slug, meta_title, meta_description, meta_keywords, canonical_url, og_title, og_description, og_image, og_alt FROM blogs WHERE slug = ? LIMIT 1");
        $stmt->bind_param("s", $slug);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $ogImageUrl = $base_url . 'admin/uploads/blogs/' . htmlspecialchars($row['og_image']);
            echo $row['google_tag'];
            echo "<title>" . htmlspecialchars($row['page_title']) . "</title>\n";
            echo '<meta name="title" content="' . htmlspecialchars($row['meta_title']) . '">' . "\n";
            echo '<meta name="description" content="' . htmlspecialchars($row['meta_description']) . '">' . "\n";
            echo '<meta name="keywords" content="' . htmlspecialchars($row['meta_keywords']) . '">' . "\n";
            echo '<link rel="canonical" href="' . htmlspecialchars($row['canonical_url']) . '">' . "\n";

            // Open Graph (OG) Meta Tags
            echo '<meta property="og:title" content="' . htmlspecialchars($row['og_title']) . '">' . "\n";
            echo '<meta property="og:description" content="' . htmlspecialchars($row['og_description']) . '">' . "\n";
            echo '<meta property="og:url" content="' . htmlspecialchars($row['canonical_url']) . '">' . "\n";
            echo '<meta property="og:image" content="' . $ogImageUrl . '">' . "\n";
            echo '<meta property="og:image:alt" content="' . htmlspecialchars($row['og_alt']) . '">' . "\n";
            echo '<meta property="og:type" content="website">' . "\n";

            // Twitter Meta Tags
            echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
            echo '<meta name="twitter:title" content="' . htmlspecialchars($row['og_title']) . '">' . "\n";
            echo '<meta name="twitter:description" content="' . htmlspecialchars($row['og_description']) . '">' . "\n";
            echo '<meta name="twitter:image" content="' . $ogImageUrl . '">' . "\n";
            echo '<meta name="twitter:image:alt" content="' . htmlspecialchars($row['og_alt']) . '">' . "\n";

            $valid_slug = true;
        } else {
            echo "<title>No Slug Found</title>\n";
            $valid_slug = false;
        }
    } else {
        echo "<title>No Slug Provided</title>\n";
        $valid_slug = false;
    }
    ?>
</head>

<body>

    <?php include("../common/header.php"); ?>

    <style>
        .blog-hero img {
            height: 400px;
            object-fit: cover;
        }

        @media screen and (max-width: 768px) {
            .blog-hero img {
                height: unset;
                object-fit: unset;
            }
        }
    </style>

    <?php
    if (!empty($slug) && $valid_slug) {
        $stmt_content = $conn->prepare("SELECT banner, banner_alt, content_title, long_content FROM blogs WHERE slug = ? LIMIT 1");
        $stmt_content->bind_param("s", $slug);
        $stmt_content->execute();
        $content_result = $stmt_content->get_result();
        $content = $content_result->fetch_assoc();
    } else {
        $content = false;
    }
    ?>

    <?php if ($content): ?>
        <section class="blog-hero">
            <div class="single-banner">
                <img src="../admin/uploads/blogs/<?= $content['banner']; ?>" class="w-100 img-fluid"
                    alt="<?= htmlspecialchars($content['banner_alt']); ?>" />
            </div>
        </section>

        <section class="py-5 blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h6 class="text-center"><?= htmlspecialchars($content['content_title']); ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <?= nl2br(html_entity_decode($content['long_content'])); ?>
                    </div>
                    <div class="col-md-4">
                        <?php include 'blog-sidebar.php'; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="py-5 text-center">
            <div class="container">
                <h2>Blog Not Found</h2>
                <p>The blog you're looking for doesn't exist or has been removed.</p>
            </div>
        </section>
    <?php endif; ?>

    <?php include("../common/footer.php"); ?>
</body>

</html>