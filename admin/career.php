<?php
include 'common/config.php';

// Handle delete before HTML output
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);

    // Get resume path before delete
    $get_sql = "SELECT resume_path FROM careers WHERE id = ?";
    $stmt = $conn->prepare($get_sql);
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $career = $result->fetch_assoc();

    // Delete resume file if exists
    if ($career && !empty($career['resume_path']) && file_exists('uploads/resumes/' . $career['resume_path'])) {
        unlink('uploads/resumes/' . $career['resume_path']);
    }

    // Delete from DB
    $delete_sql = "DELETE FROM careers WHERE id = ?";
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
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <?php include 'common/sidebar.php'; ?>

            <div class="layout-page">

                <?php include 'common/header.php'; ?>

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="py-2">
                                <div class="row justify-content-end">
                                   
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Careers List</h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped align-middle text-center">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="text-nowrap">Full Name</th>
                                                        <th class="text-nowrap">Email</th>
                                                        <th class="text-nowrap">Phone</th>
                                                        <th class="text-nowrap">Qualification</th>
                                                        <th class="text-nowrap">Experience</th>
                                                         <th class="text-nowrap">Salary Expectation</th>
                                                        <th class="text-nowrap">Resume</th>
                                                        <th class="text-nowrap">Submitted At</th>
                                                        <th class="text-nowrap">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include 'common/config.php';
                                                    $i = 1;
                                                    $query = "SELECT id, fullname, email, phone, qualification, experience, salary, resume_path, submitted_at FROM careers ORDER BY id DESC";
                                                    $result = $conn->query($query);

                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '<tr>';
                                                            echo '<td class="text-nowrap">' . $i++ . '</td>';
                                                            echo '<td class="text-nowrap">' . htmlspecialchars($row['fullname']) . '</td>';
                                                            echo '<td class="text-nowrap">' . htmlspecialchars($row['email']) . '</td>';
                                                            echo '<td class="text-nowrap">' . htmlspecialchars($row['phone']) . '</td>';
                                                            echo '<td class="text-nowrap">' . htmlspecialchars($row['qualification']) . '</td>';
                                                            echo '<td class="text-nowrap">' . htmlspecialchars($row['experience']) . ' yrs</td>';
                                                            echo '<td class="text-nowrap">' . htmlspecialchars($row['salary']) . '</td>';

                                                            // Resume link
                                                            echo '<td>';
                                                            if (!empty($row['resume_path'])) {
                                                                // Full domain URL
                                                                $resume_url = "https://coralwebtechnology.com/" . $row['resume_path'];
                                                                echo '<a href="' . $resume_url . '" target="_blank" class="btn btn-sm btn-info">View</a>';
                                                            } else {
                                                                echo 'No Resume';
                                                            }
                                                            echo '</td>';

                                                    

                                                            echo '<td class="text-nowrap">' . $row['submitted_at'] . '</td>';

                                                            echo '<td class="text-nowrap">
                                <a href="update-career.php?id=' . $row['id'] . '" class="btn btn-sm btn-warning me-2">Edit</a>
                                <a href="?delete_id=' . $row['id'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete this record?\')">Delete</a>
                              </td>';

                                                            echo '</tr>';
                                                        }
                                                    } else {
                                                        echo '<tr><td colspan="9">No career entries found.</td></tr>';
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
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <?php include 'common/footer.php'; ?>
</body>

</html>