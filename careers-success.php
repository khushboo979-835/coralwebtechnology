<?php
ob_start();
include __DIR__ . '/common/config.php';
ob_end_flush();

$app_id = isset($_GET['app_id']) ? intval($_GET['app_id']) : 0;
$candidate = null;
$wa_link = '#';

if ($app_id > 0 && $conn) {
    $stmt = $conn->prepare("SELECT * FROM careers WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $app_id);
        $stmt->execute();
        $res = $stmt->get_result();
        if ($res && $res->num_rows > 0) {
            $candidate = $res->fetch_assoc();
        }
        $stmt->close();
    }
}

// Construct detailed WhatsApp message if candidate is found
if ($candidate) {
    $wa_message = "📄 *Coral Web Technology - New Job Application*\n";
    $wa_message .= "---------------------------------------\n";
    $wa_message .= "*Position:* " . ($candidate['job_title'] ?: 'General Application') . "\n";
    $wa_message .= "*Name:* " . $candidate['fullname'] . "\n";
    $wa_message .= "*Email:* " . $candidate['email'] . "\n";
    $wa_message .= "*Phone:* " . $candidate['phone'] . "\n";
    $wa_message .= "*Qualification:* " . $candidate['qualification'] . "\n";
    $wa_message .= "*Total Experience:* " . $candidate['experience'] . " Years\n";
    if (!empty($candidate['relevant_experience'])) {
        $wa_message .= "*Relevant Exp:* " . $candidate['relevant_experience'] . "\n";
    }
    $wa_message .= "*Expected Salary:* ₹" . $candidate['salary'] . " / month\n";
    $wa_message .= "*Notice Period:* " . $candidate['notice_period'] . "\n";
    $wa_message .= "*Current Location:* " . $candidate['current_location'] . "\n";
    $wa_message .= "*Preferred Location:* " . $candidate['preferred_location'] . "\n";
    
    if (!empty($candidate['linkedin'])) {
        $wa_message .= "*LinkedIn:* " . $candidate['linkedin'] . "\n";
    }
    if (!empty($candidate['portfolio'])) {
        $wa_message .= "*Portfolio:* " . $candidate['portfolio'] . "\n";
    }
    if (!empty($candidate['resume_path'])) {
        $wa_message .= "*Resume Link:* " . $base_url . $candidate['resume_path'] . "\n";
    }
    $wa_message .= "---------------------------------------\n";
    $wa_message .= "I have successfully submitted my details. Looking forward to your response!";

    $wa_link = "https://wa.me/919117741984?text=" . urlencode($wa_message);
}

$page_title = "Application Successful | Coral Web Technology Careers";
$page_description = "Thank you for applying. Your application has been logged into our Recruitment system.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/common/head.php'; ?>
    <?php include __DIR__ . '/common/plugins.php'; ?>
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/careers.css?v=<?= APP_VERSION ?>">
</head>

<body class="bg-careers">
    <?php include __DIR__ . '/common/header.php'; ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in">
                
                <!-- Success Card -->
                <div class="success-screen-card">
                    <!-- SVG Checkmark Draw Animation -->
                    <svg class="success-icon-svg" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45"></circle>
                        <path d="M30,50 L45,65 L70,35"></path>
                    </svg>

                    <h2 class="fw-bold text-dark mb-2">Application Received!</h2>
                    <p class="text-muted mb-4" style="font-size: 1.05rem;">
                        Your profile has been saved in our database. We are now redirecting you to WhatsApp to share your application details directly with our HR team.
                    </p>

                    <!-- Auto redirect countdown alert -->
                    <?php if ($candidate): ?>
                        <div class="alert alert-info rounded-4 p-3 mb-4 text-center d-flex align-items-center justify-content-center gap-2 mx-auto" style="max-width: 500px;">
                            <div class="spinner-border spinner-border-sm text-info" role="status"></div>
                            <span>Redirecting to WhatsApp in <strong id="countdownSec">3</strong> seconds...</span>
                        </div>
                    <?php endif; ?>

                    <!-- Action Details Summary -->
                    <?php if ($candidate): ?>
                        <div class="card p-3 border-0 bg-light rounded-4 text-start mx-auto mb-4" style="max-width: 480px;">
                            <div class="row g-2">
                                <div class="col-sm-4 text-muted small">Application ID:</div>
                                <div class="col-sm-8 fw-bold text-dark">#CWT-<?= str_pad($app_id, 5, '0', STR_PAD_LEFT) ?></div>

                                <div class="col-sm-4 text-muted small">Candidate:</div>
                                <div class="col-sm-8 fw-bold text-dark"><?= htmlspecialchars($candidate['fullname']) ?></div>

                                <div class="col-sm-4 text-muted small">Position:</div>
                                <div class="col-sm-8 fw-bold text-primary"><?= htmlspecialchars($candidate['job_title']) ?></div>

                                <div class="col-sm-4 text-muted small">Phone Number:</div>
                                <div class="col-sm-8 text-dark small"><?= htmlspecialchars($candidate['phone']) ?></div>
                            </div>
                        </div>

                        <!-- Manual Redirection Trigger -->
                        <div class="my-4">
                            <a href="<?= $wa_link ?>" target="_blank" class="btn btn-success py-3 px-5 fw-bold rounded-pill shadow" style="background-color: #25d366; border-color: #25d366;">
                                <i class="bi bi-whatsapp me-2"></i> Submit Application to HR on WhatsApp
                            </a>
                            <p class="text-muted small mt-2">Click the button above if you are not automatically redirected.</p>
                        </div>
                    <?php endif; ?>

                    <!-- Action Timeline: What Happens Next -->
                    <div class="text-start border-top pt-4 mt-2">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-arrow-right-circle text-primary"></i> Recruitment Workflow</h5>
                        
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="p-3 bg-light rounded-4 border h-100" style="opacity: 0.65;">
                                    <div class="fw-bold text-muted small mb-1">STAGE 1</div>
                                    <h6 class="fw-bold mb-1 text-muted">Intake Completed</h6>
                                    <p class="text-muted mb-0" style="font-size: 0.75rem;">Your details are logged and indexed.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-white rounded-4 border border-primary h-100 shadow-sm" style="position: relative; border-width: 1.5px !important;">
                                    <span class="position-absolute badge rounded-pill bg-warning text-dark font-monospace fw-bold" style="top: -10px; right: 10px; font-size: 0.65rem; padding: 4px 8px;">ACTIVE STEP</span>
                                    <div class="fw-bold text-primary small mb-1">STAGE 2</div>
                                    <h6 class="fw-bold mb-1 text-dark">Resume Screening</h6>
                                    <p class="text-muted mb-0" style="font-size: 0.75rem;">Our recruiters review your work portfolio (1-3 days).</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-light rounded-4 border h-100" style="opacity: 0.65;">
                                    <div class="fw-bold text-muted small mb-1">STAGE 3</div>
                                    <h6 class="fw-bold mb-1 text-muted">Technical Round</h6>
                                    <p class="text-muted mb-0" style="font-size: 0.75rem;">Interactive coding or design session.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap justify-content-center gap-3 mt-5 pt-3 border-top">
                        <a href="<?= $base_url ?>careers.php" class="btn btn-details-card py-2.5 px-4"><i class="bi bi-house me-1"></i> Careers Home</a>
                        <a href="<?= $base_url ?>jobs.php" class="btn btn-search-premium py-2.5 px-4 w-auto"><i class="bi bi-briefcase me-1"></i> Browse Other Roles</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include __DIR__ . '/common/footer.php'; ?>

    <script>
        // Track GTM success event
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'careers_apply_success',
            'application_id': '<?= $app_id ?>',
            'job_title': '<?= $candidate ? esc_attr($candidate['job_title']) : "General" ?>'
        });

        // Handle auto-redirection with countdown
        document.addEventListener("DOMContentLoaded", function() {
            let countdown = 3;
            let countdownEl = document.getElementById('countdownSec');
            let waLink = '<?= $wa_link ?>';

            if (waLink !== '#' && waLink !== '') {
                let interval = setInterval(function() {
                    countdown--;
                    if (countdownEl) {
                        countdownEl.innerText = countdown;
                    }
                    if (countdown <= 0) {
                        clearInterval(interval);
                        // Redirect to WhatsApp
                        window.location.href = waLink;
                    }
                }, 1000);
            }
        });
    </script>
</body>

</html>
