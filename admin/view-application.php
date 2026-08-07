<?php
include __DIR__ . '/common/config.php';
include __DIR__ . '/common/session.php';

$app_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($app_id <= 0) {
    header("Location: career.php");
    exit;
}

// Handle status update submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_status'])) {
    $new_status = $_POST['status'];
    $update_stmt = $conn->prepare("UPDATE careers SET status = ? WHERE id = ?");
    if ($update_stmt) {
        $update_stmt->bind_param("si", $new_status, $app_id);
        $update_stmt->execute();
        $update_stmt->close();
        $success_msg = "Application status updated successfully to: " . htmlspecialchars($new_status);
    }
}

// Fetch candidate details
$query = "SELECT * FROM careers WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $app_id);
$stmt->execute();
$result = $stmt->get_result();
$candidate = $result->fetch_assoc();
$stmt->close();

if (!$candidate) {
    header("Location: career.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">
<?php include __DIR__ . '/common/head.php'; ?>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <?php include __DIR__ . '/common/sidebar.php'; ?>

            <div class="layout-page">

                <?php include __DIR__ . '/common/header.php'; ?>

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        
                        <!-- Navigation breadcrumb -->
                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <h4 class="fw-bold py-1 mb-0">
                                <span class="text-muted fw-light">Careers /</span> ATS Profile Details
                            </h4>
                            <a href="career.php" class="btn btn-secondary btn-sm"><i class="bx bx-arrow-back"></i> Back to List</a>
                        </div>

                        <!-- Success message toast -->
                        <?php if (isset($success_msg)): ?>
                            <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
                                <strong>Success!</strong> <?= htmlspecialchars($success_msg) ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <!-- Left profile panel -->
                            <div class="col-xl-4 col-lg-5 col-md-5 order-0 mb-4">
                                <div class="card shadow mb-4">
                                    <div class="card-body text-center">
                                        <!-- Profile Headshot Preview -->
                                        <div class="mx-auto mb-3" style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; border: 3px solid #696cff; background-color: #f5f5f9; display: flex; align-items: center; justify-content: center; font-size: 3.5rem; color: #a1a1c5;">
                                            <?php if (!empty($candidate['profile_image']) && file_exists('../' . $candidate['profile_image'])): ?>
                                                <img src="../<?= htmlspecialchars($candidate['profile_image']) ?>" alt="Avatar" class="w-100 h-100" style="object-fit: cover;">
                                            <?php else: ?>
                                                <i class="bx bx-user"></i>
                                            <?php endif; ?>
                                        </div>

                                        <h4 class="card-title fw-bold mb-1 text-dark"><?= htmlspecialchars($candidate['fullname']) ?></h4>
                                        <p class="text-primary mb-2 fw-semibold">
                                            <?= !empty($candidate['job_title']) ? htmlspecialchars($candidate['job_title']) : 'General Application' ?>
                                        </p>

                                        <!-- Status Badge -->
                                        <?php 
                                        $status = !empty($candidate['status']) ? $candidate['status'] : 'Screening';
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
                                        ?>
                                        <span class="badge <?= $badgeClass ?> mb-3" style="font-size: 0.9rem; padding: 6px 14px;"><?= htmlspecialchars($status) ?></span>
                                        
                                        <!-- Resume attachment download -->
                                        <div class="d-grid mt-2">
                                            <?php if (!empty($candidate['resume_path']) && file_exists('../' . $candidate['resume_path'])): ?>
                                                <a href="../<?= htmlspecialchars($candidate['resume_path']) ?>" target="_blank" class="btn btn-primary btn-md"><i class="bx bx-download"></i> View/Download Resume</a>
                                            <?php else: ?>
                                                <button class="btn btn-outline-secondary" disabled>No Resume Attached</button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action controls: Update Hiring Status -->
                                <div class="card shadow">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Update Application Status</h5>
                                        <form action="" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label text-muted small">Select ATS Pipeline Phase</label>
                                                <select name="status" class="form-select rounded-3 p-2">
                                                    <option value="Screening" <?= $status === 'Screening' ? 'selected' : '' ?>>Screening</option>
                                                    <option value="Interview Scheduled" <?= $status === 'Interview Scheduled' ? 'selected' : '' ?>>Interview Scheduled</option>
                                                    <option value="HR Round" <?= $status === 'HR Round' ? 'selected' : '' ?>>HR Round</option>
                                                    <option value="Offered" <?= $status === 'Offered' ? 'selected' : '' ?>>Offered</option>
                                                    <option value="Joined" <?= $status === 'Joined' ? 'selected' : '' ?>>Joined</option>
                                                    <option value="Rejected" <?= $status === 'Rejected' ? 'selected' : '' ?>>Rejected</option>
                                                </select>
                                            </div>
                                            <button type="submit" name="update_status" class="btn btn-warning w-100 py-2">Update Stage</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Right details panel -->
                            <div class="col-xl-8 col-lg-7 col-md-7 order-1 mb-4">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <!-- Personal Info -->
                                        <h5 class="fw-bold mb-3 border-bottom pb-2 text-dark"><i class="bx bx-user-circle text-primary"></i> Personal Details</h5>
                                        <div class="row mb-4 g-3">
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Email Address</span>
                                                <strong class="text-dark"><a href="mailto:<?= htmlspecialchars($candidate['email']) ?>"><?= htmlspecialchars($candidate['email']) ?></a></strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Phone Number</span>
                                                <strong class="text-dark"><a href="tel:<?= htmlspecialchars($candidate['phone']) ?>"><?= htmlspecialchars($candidate['phone']) ?></a></strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Gender</span>
                                                <strong class="text-dark"><?= htmlspecialchars($candidate['gender']) ?></strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Date of Birth</span>
                                                <strong class="text-dark"><?= date('M d, Y', strtotime($candidate['dob'])) ?></strong>
                                            </div>
                                            <div class="col-sm-12">
                                                <span class="text-muted small d-block">Current Physical Address</span>
                                                <strong class="text-dark"><?= nl2br(htmlspecialchars($candidate['address'])) ?></strong>
                                            </div>
                                        </div>

                                        <!-- Professional details -->
                                        <h5 class="fw-bold mb-3 border-bottom pb-2 text-dark"><i class="bx bx-briefcase text-primary"></i> Professional Credentials</h5>
                                        <div class="row mb-4 g-3">
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Highest Qualification</span>
                                                <strong class="text-dark"><?= htmlspecialchars($candidate['qualification']) ?></strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Total Work Experience</span>
                                                <strong class="text-dark"><?= htmlspecialchars($candidate['experience']) ?> Years</strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Relevant Specialty Experience</span>
                                                <strong class="text-dark"><?= !empty($candidate['relevant_experience']) ? htmlspecialchars($candidate['relevant_experience']) : 'N/A' ?></strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Current Employer</span>
                                                <strong class="text-dark"><?= !empty($candidate['current_employer']) ? htmlspecialchars($candidate['current_employer']) : 'N/A' ?></strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Current Salary (Monthly)</span>
                                                <strong class="text-dark"><?= !empty($candidate['current_salary']) ? '₹' . htmlspecialchars($candidate['current_salary']) : 'N/A' ?></strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Expected Salary (Monthly)</span>
                                                <strong class="text-dark">₹<?= htmlspecialchars($candidate['salary']) ?></strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Notice Period</span>
                                                <strong class="text-dark"><?= !empty($candidate['notice_period']) ? htmlspecialchars($candidate['notice_period']) : 'N/A' ?></strong>
                                            </div>
                                            <div class="col-sm-6">
                                                <span class="text-muted small d-block">Preferred Work Location</span>
                                                <strong class="text-primary"><?= !empty($candidate['preferred_location']) ? htmlspecialchars($candidate['preferred_location']) : 'Patna' ?></strong>
                                            </div>
                                        </div>

                                        <!-- Web Links -->
                                        <h5 class="fw-bold mb-3 border-bottom pb-2 text-dark"><i class="bx bx-globe text-primary"></i> Portfolios & Profiles</h5>
                                        <div class="row mb-4 g-3">
                                            <div class="col-sm-4">
                                                <span class="text-muted small d-block">LinkedIn Profile</span>
                                                <?php if (!empty($candidate['linkedin'])): ?>
                                                    <strong><a href="<?= htmlspecialchars($candidate['linkedin']) ?>" target="_blank" class="text-primary"><i class="bx bxl-linkedin-square"></i> Visit Profile</a></strong>
                                                <?php else: ?>
                                                    <span class="text-muted">Not Provided</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="text-muted small d-block">Portfolio Links</span>
                                                <?php if (!empty($candidate['portfolio'])): ?>
                                                    <strong><a href="<?= htmlspecialchars($candidate['portfolio']) ?>" target="_blank" class="text-primary"><i class="bx bx-link-external"></i> View Work</a></strong>
                                                <?php else: ?>
                                                    <span class="text-muted">Not Provided</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="text-muted small d-block">Personal Website</span>
                                                <?php if (!empty($candidate['website'])): ?>
                                                    <strong><a href="<?= htmlspecialchars($candidate['website']) ?>" target="_blank" class="text-primary"><i class="bx bx-globe"></i> Visit Site</a></strong>
                                                <?php else: ?>
                                                    <span class="text-muted">Not Provided</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-sm-12">
                                                <span class="text-muted small d-block">Referral Details</span>
                                                <strong class="text-dark"><?= !empty($candidate['reference']) ? htmlspecialchars($candidate['reference']) : 'Direct applicant (No referral)' ?></strong>
                                            </div>
                                        </div>

                                        <!-- Cover Letter -->
                                        <h5 class="fw-bold mb-2 border-bottom pb-2 text-dark"><i class="bx bx-message-detail text-primary"></i> Pitch / Cover Letter</h5>
                                        <?php if (!empty($candidate['cover_letter'])): ?>
                                            <div class="p-3 bg-light rounded-3 text-dark border-start border-primary border-4" style="line-height: 1.6; white-space: pre-line;">
                                                <?= htmlspecialchars($candidate['cover_letter']) ?>
                                            </div>
                                        <?php else: ?>
                                            <p class="text-muted italic mb-0">Candidate did not submit a cover letter.</p>
                                        <?php endif; ?>
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
