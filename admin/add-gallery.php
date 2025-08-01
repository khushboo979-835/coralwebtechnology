<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">
<?php include 'common/head.php'; ?>
<?php include 'common/session.php'; ?>

<body>
    <?php
    include 'common/config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Image Handling
        $imageName = $_FILES['image']['name'];
        $imageTmp = $_FILES['image']['tmp_name'];
        $imagePath = "uploads/gallery/" . time() . '_' . basename($imageName); // Safe file name
    
        // Alt Text
        $alt = $conn->real_escape_string($_POST['alt']);

        // Upload Image
        if (move_uploaded_file($imageTmp, $imagePath)) {

            // Insert into database
            $stmt = $conn->prepare("INSERT INTO gallery (image, alt) VALUES (?, ?)");
            $stmt->bind_param("ss", $imagePath, $alt);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Gallery item added successfully!');window.location.href='gallery.php';</script>";
            } else {
                echo "<div class='alert alert-danger'>Something went wrong while saving to the database.</div>";
            }

        } else {
            echo "<div class='alert alert-danger'>Image upload failed.</div>";
        }
    }
    ?>


    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <?php include 'common/sidebar.php'; ?>

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <?php include 'common/header.php'; ?>
                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-11 order-2 order-md-3 order-lg-2 mb-4">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">gallery Image</label>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="alt" class="form-label">Image Alt Text</label>
                                        <input type="text" name="alt" id="alt" class="form-control"
                                            placeholder="Describe the image" required>
                                    </div>

                                    <button type="submit" class="btn btn-success">Add gallery</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <?php include 'common/footer.php'; ?>
</body>

</html>