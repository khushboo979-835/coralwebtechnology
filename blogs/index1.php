<?php
include("../admin/common/config.php");
include("../common/config.php");
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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?php
    $slug = $_GET['slug'] ?? '';
    $valid_slug = false;

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
            echo '<meta property="og:title" content="' . htmlspecialchars($row['og_title']) . '">' . "\n";
            echo '<meta property="og:description" content="' . htmlspecialchars($row['og_description']) . '">' . "\n";
            echo '<meta property="og:url" content="' . htmlspecialchars($row['canonical_url']) . '">' . "\n";
            echo '<meta property="og:image" content="' . $ogImageUrl . '">' . "\n";
            echo '<meta property="og:image:alt" content="' . htmlspecialchars($row['og_alt']) . '">' . "\n";
            echo '<meta property="og:type" content="website">' . "\n";
            echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
            echo '<meta name="twitter:title" content="' . htmlspecialchars($row['og_title']) . '">' . "\n";
            echo '<meta name="twitter:description" content="' . htmlspecialchars($row['og_description']) . '">' . "\n";
            echo '<meta name="twitter:image" content="' . $ogImageUrl . '">' . "\n";
            $valid_slug = true;
        }
    }
    ?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333333;
            line-height: 1.8;
        }

        .blog-hero {
            position: relative;
            height: 60vh;
            min-height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            overflow: hidden;
        }

        .blog-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .blog-hero-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
            transition: transform 5s ease;
        }

        .blog-hero:hover .blog-hero-img {
            transform: scale(1.1);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            padding: 0 20px;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .hero-meta {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            opacity: 0.95;
            margin-bottom: 15px;
            font-weight: 600;
            display: inline-block;
            background: rgba(255, 255, 255, 0.12);
            padding: 6px 14px;
            border-radius: 20px;
        }

        .blog-page {
            background: white;
            padding: 40px 0 60px;
            width: 100%;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        .col-lg-8 {
            flex: 0 0 66.66666667%;
            max-width: 66.66666667%;
            padding: 0 15px;
        }

        .col-lg-4 {
            flex: 0 0 33.33333333%;
            max-width: 33.33333333%;
            padding: 0 15px;
            display: block;
        }

        .blog-content-wrapper {
            background: white;
            padding: 45px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            margin-top: -40px;
            position: relative;
            z-index: 10;
        }

        .blog-long-content {
            font-size: 1.05rem;
            color: #333333;
            line-height: 1.4;
            letter-spacing: 0.3px;
        }

        .blog-long-content p {
            margin-bottom: 0.1rem;
            text-align: justify;
        }

        .blog-long-content h1 {
            font-family: 'Playfair Display', serif;
            color: #0052CC;
            margin-top: 0.15rem;
            margin-bottom: 0.1rem;
            font-weight: 700;
            font-size: 2.2rem;
            line-height: 1.2;
        }

        .blog-long-content h2 {
            font-family: 'Playfair Display', serif;
            color: #0052CC;
            margin-top: 0.15rem;
            margin-bottom: 0.1rem;
            font-weight: 700;
            font-size: 1.7rem;
            line-height: 1.2;
        }

        .blog-long-content h3 {
            font-family: 'Playfair Display', serif;
            color: #0052CC;
            margin-top: 0.1rem;
            margin-bottom: 0.08rem;
            font-weight: 700;
            font-size: 1.4rem;
            line-height: 1.2;
        }

        .blog-long-content h4 {
            font-family: 'Playfair Display', serif;
            color: #0052CC;
            margin-top: 0.1rem;
            margin-bottom: 0.08rem;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .blog-long-content strong {
            color: #333333;
            font-weight: 700;
        }

        .blog-long-content ul,
        .blog-long-content ol {
            margin-bottom: 0.1rem;
            margin-left: 1.8rem;
            line-height: 1.4;
            font-size: 1.05rem;
        }

        .blog-long-content li {
            margin-bottom: 0.05rem;
        }

        .blog-long-content blockquote {
            border-left: 4px solid #0052CC;
            margin: 0.1rem 0;
            color: #555555;
            font-style: italic;
            background-color: #f5f5f5;
            padding: 0.4rem 0.7rem;
            border-radius: 4px;
            font-size: 1.05rem;
        }

        .blog-long-content img {
            border-radius: 6px;
            margin: 0.3rem 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            height: auto;
            display: block;
        }

        .blog-long-content a {
            color: #0052CC;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .blog-long-content a:hover {
            text-decoration: underline;
            color: #0044a3;
        }

        .blog-long-content table {
            width: 100%;
            border-collapse: collapse;
            margin: 0.2rem 0;
            font-size: 1rem;
        }}

        .blog-long-content table thead {
            background-color: #0052CC;
            color: white;
        }

        .blog-long-content table th,
        .blog-long-content table td {
            padding: 0.8rem;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .sticky-sidebar {
            padding-left: 25px;
            position: sticky;
            top: 100px;
            z-index: 5;
        }

        .sticky-sidebar .widget {
            background: white;
            padding: 18px;
            border-radius: 8px;
            margin-bottom: 18px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
            border-top: 3px solid #0052CC;
        }

        .sticky-sidebar .widget-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 0.9rem;
            color: #333333;
        }

        .sticky-sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sticky-sidebar li {
            margin-bottom: 0.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #f0f0f0;
            font-size: 0.95rem;
        }

        .sticky-sidebar li:last-child {
            border-bottom: none;
        }

        .sticky-sidebar a {
            color: #0052CC;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .sticky-sidebar a:hover {
            color: #0044a3;
            text-decoration: underline;
        }

        #progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            background: #0052CC;
            z-index: 9999;
            width: 0%;
            transition: width 0.1s ease;
        }

        @media (max-width: 1024px) {
            .hero-title {
                font-size: clamp(1.6rem, 4vw, 2.8rem);
            }
        }

        @media (max-width: 768px) {
            .blog-hero {
                height: 45vh;
                min-height: 300px;
            }

            .blog-content-wrapper {
                padding: 20px 15px;
                margin-top: 0;
            }

            .blog-long-content {
                font-size: 0.95rem;
            }

            .col-lg-8,
            .col-lg-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .sticky-sidebar {
                padding-left: 0;
                position: static;
                margin-top: 30px;
            }
        }
    </style>
</head>

<body>
    <div id="progress-bar"></div>
    <?php include("../common/header.php"); ?>

    <?php
    if (!empty($slug) && $valid_slug) {
        $stmt_content = $conn->prepare("SELECT banner, banner_alt, content_title, long_content, created_at FROM blogs WHERE slug = ? LIMIT 1");
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
            <img src="../admin/uploads/blogs/<?= $content['banner']; ?>" class="blog-hero-img" alt="<?= htmlspecialchars($content['banner_alt']); ?>" />
            <div class="hero-content">
                <div class="hero-meta"><?= date("d M Y", strtotime($content['created_at'])); ?></div>
                <h1 class="hero-title"><?= htmlspecialchars($content['content_title']); ?></h1>
            </div>
        </section>

        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="blog-content-wrapper">
                            <div class="blog-long-content">
                                <?= nl2br(html_entity_decode($content['long_content'])); ?>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <aside class="sticky-sidebar">
                            <?php include 'blog-sidebar.php'; ?>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section style="padding: 60px 0; text-align: center; min-height: 100vh; display: flex; align-items: center; justify-content: center;">
            <div class="container">
                <h2 style="font-size: 2.2rem; font-weight: bold; margin-bottom: 20px;">Blog Not Found</h2>
                <p style="font-size: 1.1rem; color: #666;">The blog you're looking for doesn't exist or has been removed.</p>
                <a href="index.php" style="display: inline-block; margin-top: 20px; padding: 10px 25px; background: #0052CC; color: white; text-decoration: none; border-radius: 4px;">Return to Blogs</a>
            </div>
        </section>
    <?php endif; ?>

    <?php include("../common/footer.php"); ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        window.onscroll = function() {
            let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let scrolled = (winScroll / height) * 100;
            document.getElementById("progress-bar").style.width = scrolled + "%";
        };
    </script>
</body>

</html>