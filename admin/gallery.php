<?php
include 'common/config.php';

$imgFolder = "admin/uploads/images/";

// DELETE LOGIC
if (isset($_GET['delete_id'])) {
  $delete_id = intval($_GET['delete_id']);

  $getSql = "SELECT image FROM gallery WHERE id = $delete_id";
  $result = $conn->query($getSql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (!empty($row['image']) && file_exists($imgFolder . $row['image'])) {
      unlink($imgFolder . $row['image']);
    }
       $conn->query("DELETE FROM gallery WHERE id = $delete_id");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
  data-template="vertical-menu-template-free">
<?php include 'common/head.php'; ?>
<?php include 'common/session.php'; ?>

<body>
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
            <div class="row">
              <div class="py-2">
                <div class="row justify-content-end">
                  <div class="col-md-3 text-end">
                    <a href="add-gallery.php" class="btn btn-primary">Add Gallery</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <h4>📷 Images</h4>
                <div class="row">
                  <?php
                  $imgResult = $conn->query("SELECT * FROM gallery WHERE image IS NOT NULL AND image != '' ORDER BY id DESC");
                  if ($imgResult->num_rows > 0) {
                    while ($row = $imgResult->fetch_assoc()) {
                      echo '
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="' . $row['image'] . '" class="card-img-top" style="height: 250px; object-fit: cover;" alt="gallery Image">
                    <div class="card-body text-center">
                        <a href="?delete_id=' . $row['id'] . '" onclick="return confirm(\'Delete this image?\')" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </div>
            </div>';
                    }
                  } else {
                    echo '<p class="text-muted">No images found.</p>';
                  }
                  ?>
                </div>

               
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