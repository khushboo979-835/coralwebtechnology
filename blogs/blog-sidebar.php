<?php ?>

<style>
    .sticky-sidebar {
        position: sticky;
        top: 100px;
        z-index: 5;
    }

    .sidebar-card {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        padding: 18px;
        border: none;
        margin-bottom: 18px;
        border-top: 3px solid #0052CC;
        transition: all 0.3s ease;
    }

    .sidebar-card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .sidebar-title {
        font-family: var(--title-font);
        font-size: 1.15rem;
        font-weight: 700;
        margin-bottom: 14px;
        position: relative;
        padding-bottom: 0;
        color: #333333;
    }

    .sidebar-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 100%;
        height: 2px;
        background: transparent;
    }

    .latest-posts-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .post-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .post-item:last-child {
        border-bottom: none;
    }

    .post-item:hover {
        transform: translateX(2px);
    }

    .post-thumb {
        width: 60px;
        height: 60px;
        border-radius: 6px;
        overflow: hidden;
        flex-shrink: 0;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
    }

    .post-item:hover .post-thumb {
        box-shadow: 0 4px 10px rgba(0,0,0,0.12);
    }

    .post-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .post-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .post-info h6 {
        font-size: 0.85rem;
        font-weight: 600;
        margin: 0;
        line-height: 1.3;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        color: #333333;
        transition: color 0.3s ease;
    }

    .post-info a {
        text-decoration: none;
        color: inherit;
    }

    .post-info a:hover h6 {
        color: #0052CC;
    }

    .post-date {
        font-size: 0.7rem;
        color: #999;
        margin-top: 2px;
        font-weight: 500;
    }
</style>

<div class="sidebar-card">
    <h4 class="sidebar-title">Latest Updates</h4>
    <ul class="latest-posts-list">
        <?php
        $latestBlogsStmt = mysqli_query($conn, "SELECT id, cover_title, cover_image, cover_alt, slug FROM blogs ORDER BY created_at DESC LIMIT 5");
        while ($blog = mysqli_fetch_assoc($latestBlogsStmt)) {
            $blogSlug = htmlspecialchars($blog['slug']);
        ?>
            <li class="post-item">
                <div class="post-thumb">
                    <img src="../admin/uploads/blogs/<?= htmlspecialchars($blog['cover_image']); ?>"
                         alt="<?= htmlspecialchars($blog['cover_alt']); ?>">
                </div>
                <div class="post-info">
                    <a href="<?= $blogSlug; ?>">
                        <h6><?= htmlspecialchars($blog['cover_title']); ?></h6>
                    </a>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>