<?php
include __DIR__ . '/common/config.php';

// Handle delete before HTML output
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);

    // Get resume and profile image paths before delete
    $get_sql = "SELECT resume_path, profile_image FROM careers WHERE id = ?";
    $stmt = $conn->prepare($get_sql);
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $career = $result->fetch_assoc();

    // Delete files if they exist in the root folder relative to admin
    if ($career) {
        if (!empty($career['resume_path']) && file_exists('../' . $career['resume_path'])) {
            unlink('../' . $career['resume_path']);
        }
        if (!empty($career['profile_image']) && file_exists('../' . $career['profile_image'])) {
            unlink('../' . $career['profile_image']);
        }
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
<?php include __DIR__ . '/common/head.php'; ?>
<?php include __DIR__ . '/common/session.php'; ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <?php include __DIR__ . '/common/sidebar.php'; ?>

            <div class="layout-page">

                <?php include __DIR__ . '/common/header.php'; ?>

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
                                        <h5 class="card-title mb-3">Careers ATS Applications</h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped align-middle text-center">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th>#</th>
                                                        <th class="text-nowrap">Full Name</th>
                                                        <th class="text-nowrap">Applied Position</th>
                                                        <th class="text-nowrap">Experience</th>
                                                        <th class="text-nowrap">Expected Salary</th>
                                                        <th class="text-nowrap">Resume</th>
                                                        <th class="text-nowrap">Status</th>
                                                        <th class="text-nowrap">Submitted At</th>
                                                        <th class="text-nowrap">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    $query = "SELECT id, fullname, email, phone, qualification, experience, salary, resume_path, job_title, status, submitted_at FROM careers ORDER BY id DESC";
                                                    $result = $conn->query($query);

                                                    if ($result && $result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '<tr>';
                                                            echo '<td class="text-nowrap">' . $i++ . '</td>';
                                                            
                                                            // Name
                                                            echo '<td class="text-nowrap fw-bold text-dark">' . htmlspecialchars($row['fullname']) . '</td>';
                                                            
                                                            // Applied Position
                                                            $jTitle = !empty($row['job_title']) ? $row['job_title'] : 'General Application';
                                                            echo '<td class="text-nowrap">' . htmlspecialchars($jTitle) . '</td>';
                                                            
                                                            // Experience
                                                            echo '<td class="text-nowrap">' . htmlspecialchars($row['experience']) . ' yrs</td>';
                                                            
                                                            // Salary
                                                            echo '<td class="text-nowrap">₹' . htmlspecialchars($row['salary']) . '</td>';

                                                            // Resume link (using dynamic base url link)
                                                            echo '<td>';
                                                            if (!empty($row['resume_path'])) {
                                                                $resume_url = "../" . $row['resume_path'];
                                                                echo '<a href="' . $resume_url . '" target="_blank" class="btn btn-sm btn-info py-1 px-2"><i class="bx bx-file"></i> View</a>';
                                                            } else {
                                                                echo '<span class="text-muted">No Resume</span>';
                                                            }
                                                            echo '</td>';

                                                            // Status Badge
                                                            $status = !empty($row['status']) ? $row['status'] : 'Screening';
                                                            $badgeClass = 'bg-label-primary';
                                                            if ($status === 'Interview Scheduled' || $status === 'HR Round') {
                                                                $badgeClass = 'bg-label-warning';
                                                            } elseif ($status === 'Offered') {
                                                                $badgeClass = 'bg-label-success';
                                                            } elseif ($status === 'Joined') {
                                                                $badgeClass = 'bg-label-info';
                                                            } elseif ($status === 'Rejected') {
                                                                $badgeClass = 'bg-label-danger';
                                                            }
                                                            echo '<td class="text-nowrap"><span class="badge ' . $badgeClass . '">' . htmlspecialchars($status) . '</span></td>';

                                                            // Submitted at
                                                            echo '<td class="text-nowrap">' . date('M d, Y h:i A', strtotime($row['submitted_at'])) . '</td>';

                                                            // Actions
                                                            echo '<td class="text-nowrap">
                                                                <a href="view-application.php?id=' . $row['id'] . '" class="btn btn-sm btn-primary me-2"><i class="bx bx-show-alt"></i> View Profile</a>
                                                                <a href="?delete_id=' . $row['id'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete this candidate application record?\')"><i class="bx bx-trash"></i> Delete</a>
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
    <?php include __DIR__ . '/common/footer.php'; ?>
</body>

</html>