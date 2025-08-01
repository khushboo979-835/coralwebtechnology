<?php
include 'common/config.php';

// Handle delete before HTML output
if (isset($_GET['delete_id'])) {
  $delete_id = intval($_GET['delete_id']);

  // Get image paths before delete
  $get_img_sql = "SELECT banner, cover_image FROM blogs WHERE id = ?";
  $stmt = $conn->prepare($get_img_sql);
  $stmt->bind_param("i", $delete_id);
  $stmt->execute();
  $result = $stmt->get_result();
  $project = $result->fetch_assoc();

  // Delete images from folder if exist
  if ($project) {
    if (!empty($project['banner']) && file_exists('uploads/blogs/' . $project['banner'])) {
      unlink('uploads/blogs/' . $project['banner']);
    }
    if (!empty($project['cover_image']) && file_exists('uploads/blogs/' . $project['cover_image'])) {
      unlink('uploads/blogs/' . $project['cover_image']);
    }
  }

  // Delete from DB
  $delete_sql = "DELETE FROM blogs WHERE id = ?";
  $stmt = $conn->prepare($delete_sql);
  $stmt->bind_param("i", $delete_id);
  $stmt->execute();

  // Redirect to same page
  header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
  exit();
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
                    <a href="add-blogs.php" class="btn btn-primary">Add Blogs</a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card shadow">
                  <div class="card-body">
                    <h5 class="card-title mb-3">blogs List</h5>
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped align-middle text-center">
                        <thead class="table-dark">
                          <tr>
                            <th>#</th>
                            <th>Cover Image</th>
                            <th>Slug</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include 'common/config.php';
                          $i = 1;
                          $query = "SELECT id, cover_image, slug FROM blogs ORDER BY id DESC";
                          $result = $conn->query($query);

                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              echo '<tr>';
                              echo '<td>' . $i++ . '</td>';

                              // Image Preview
                              echo '<td>';
                              if (!empty($row['cover_image']) && file_exists('uploads/blogs/' . $row['cover_image'])) {
                                echo '<img src="uploads/blogs/' . $row['cover_image'] . '" alt="Cover Image" width="100">';
                              } else {
                                echo 'No Image';
                              }
                              echo '</td>';

                              echo '<td>' . htmlspecialchars($row['slug']) . '</td>';

                              echo '<td>
                        <a href="update-blogs.php?id=' . $row['id'] . '" class="btn btn-sm btn-warning me-2">Edit</a>
                        <a href="?delete_id=' . $row['id'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete this blog?\')">Delete</a>
                    </td>';

                              echo '</tr>';
                            }
                          } else {
                            echo '<tr><td colspan="4">No blogs found.</td></tr>';
                          }
                          ?>
                        </tbody>
                      </table>

                    </div>
                  </div>
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