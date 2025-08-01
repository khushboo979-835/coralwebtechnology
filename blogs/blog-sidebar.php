<style>
   

    .blog-page .card img {
        border-radius: 0px;
    }

    .blog-page .card a {
        text-decoration: none;
        color: var(--primary-color);
    }
    .blog-page .card{
        position: sticky;
        top: 130px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6);
    }
    .blog-page .card li{
        border-bottom: 1px solid var(--secondary-color);
        padding: 10px 0px;
    }
</style>


<?php
$latestBlogs = mysqli_query($conn, "SELECT id, cover_title, cover_image, cover_alt, slug FROM blogs ORDER BY created_at DESC LIMIT 5");

while ($blog = mysqli_fetch_assoc($latestBlogs)) {
    ?>
    <div class="card mb-3">
    <div class="card-header bg-dark text-white text-center">
        <h4>Latest Blog Posts</h4>
    </div>
    <ul class="list-group list-group-flush">
        <?php
        $latestBlogs = mysqli_query($conn, "SELECT id, cover_title, cover_image, cover_alt, slug FROM blogs ORDER BY created_at DESC LIMIT 5");

        while ($blog = mysqli_fetch_assoc($latestBlogs)) {
        ?>
            <li class="list-group-item">
                <a href="<?= htmlspecialchars($blog['slug']); ?>" class="text-decoration-none">
                    <div class="row g-1">
                        <div class="col-2">
                            <img src="../admin/uploads/blogs/<?= htmlspecialchars($blog['cover_image']); ?>"
                                class="img-fluid" alt="<?= htmlspecialchars($blog['cover_alt']); ?>">
                        </div>
                        <div class="col-10">
                            <h6 class="card-title m-0"><?= htmlspecialchars($blog['cover_title']); ?></h6>
                        </div>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>

<?php } ?>