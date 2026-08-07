<?php
ob_start();
include __DIR__ . '/common/config.php';
include __DIR__ . '/common/jobs-data.php';
ob_end_flush();

// Parse filters from GET parameters
$filter_keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';
$filter_department = isset($_GET['department']) ? trim($_GET['department']) : '';
$filter_category = isset($_GET['category']) ? trim($_GET['category']) : '';
$filter_work_mode = isset($_GET['work_mode']) ? trim($_GET['work_mode']) : '';
$filter_location = isset($_GET['location']) ? trim($_GET['location']) : '';
$filter_experience = isset($_GET['experience']) ? trim($_GET['experience']) : '';

// Apply filters to jobs list
$filteredJobs = [];
foreach ($jobs as $id => $job) {
    // Keyword match (title, overview, skills, or department)
    if (!empty($filter_keyword)) {
        $kw = strtolower($filter_keyword);
        $titleMatch = strpos(strtolower($job['title']), $kw) !== false;
        $descMatch = strpos(strtolower($job['overview']), $kw) !== false;
        $skillsMatch = false;
        foreach ($job['skills'] as $skill) {
            if (strpos(strtolower($skill), $kw) !== false) {
                $skillsMatch = true;
                break;
            }
        }
        if (!$titleMatch && !$descMatch && !$skillsMatch) {
            continue; // Skip
        }
    }

    // Department match
    if (!empty($filter_department) && strcasecmp($job['department'], $filter_department) !== 0) {
        continue;
    }

    // Category match
    if (!empty($filter_category) && strcasecmp($job['category'], $filter_category) !== 0) {
        continue;
    }

    // Work Mode match
    if (!empty($filter_work_mode) && strcasecmp($job['work_mode'], $filter_work_mode) !== 0) {
        // Special case check for Field Sales Executive which lists Work From Office / On-site Only
        if ($filter_work_mode === 'Work From Office' && strpos($job['work_mode'], 'Work From Office') === false) {
            continue;
        }
        if ($filter_work_mode === 'Work From Office / On-site Only' && strpos($job['work_mode'], 'On-site Only') === false && strpos($job['work_mode'], 'Work From Office') === false) {
            continue;
        }
    }

    // Location match
    if (!empty($filter_location)) {
        if (is_array($job['location'])) {
            if (!in_array($filter_location, $job['location'])) {
                continue;
            }
        } else {
            if (strcasecmp($job['location'], $filter_location) !== 0) {
                continue;
            }
        }
    }

    // Experience match
    if (!empty($filter_experience) && strcasecmp($job['experience'], $filter_experience) !== 0) {
        continue;
    }

    // If passed all filters, add to list
    $filteredJobs[$id] = $job;
}

$page_title = "Browse Open Positions | Coral Web Technology Careers";
$page_description = "Search and apply for job openings at Coral Web Technology Patna. Filter by department, experience, and location.";
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

    <!-- Breadcrumb Header -->
    <section class="careers-header-section text-center text-md-start">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="careers-header-title">Job Openings</h1>
                    <p class="careers-header-subtitle mt-2 mb-0">
                        Explore professional opportunities, filter by specialization, and build a premium digital career.
                    </p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <nav aria-label="breadcrumb" class="d-inline-block">
                        <ol class="breadcrumb mb-0 bg-transparent p-0">
                            <li class="breadcrumb-item"><a href="<?= $base_url ?>" class="text-white opacity-75">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= $base_url ?>careers.php" class="text-white opacity-75">Careers</a></li>
                            <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Jobs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Job List Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Filters Sidebar -->
                <div class="col-lg-4">
                    <div class="card shadow border-0 p-4" style="border-radius: 20px; position: sticky; top: 100px; z-index: 100;">
                        <div class="d-flex justify-bin-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0 text-dark"><i class="bi bi-funnel me-1"></i> Filter Jobs</h5>
                            <a href="<?= $base_url ?>jobs.php" class="btn btn-sm text-primary p-0 fw-bold">Reset All</a>
                        </div>
                        <form action="" method="GET">
                            <!-- Keyword -->
                            <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Keyword Search</label>
                                <div class="position-relative">
                                    <input type="text" name="keyword" class="form-control rounded-3" style="padding-left: 35px;" placeholder="Search roles..." value="<?= htmlspecialchars($filter_keyword) ?>">
                                    <i class="bi bi-search position-absolute text-muted" style="left: 12px; top: 10px;"></i>
                                </div>
                            </div>

                            <!-- Department -->
                            <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Department</label>
                                <select name="department" class="form-select rounded-3">
                                    <option value="">All Departments</option>
                                    <option value="Digital Marketing" <?= $filter_department === 'Digital Marketing' ? 'selected' : '' ?>>Digital Marketing</option>
                                    <option value="Development" <?= $filter_department === 'Development' ? 'selected' : '' ?>>Development</option>
                                    <option value="SEO" <?= $filter_department === 'SEO' ? 'selected' : '' ?>>SEO</option>
                                    <option value="Sales" <?= $filter_department === 'Sales' ? 'selected' : '' ?>>Sales</option>
                                    <option value="Design" <?= $filter_department === 'Design' ? 'selected' : '' ?>>Design</option>
                                    <option value="Management" <?= $filter_department === 'Management' ? 'selected' : '' ?>>Management</option>
                                    <option value="Content" <?= $filter_department === 'Content' ? 'selected' : '' ?>>Content</option>
                                    <option value="Business Development" <?= $filter_department === 'Business Development' ? 'selected' : '' ?>>Business Development</option>
                                </select>
                            </div>

                            <!-- Location -->
                            <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Location</label>
                                <select name="location" class="form-select rounded-3">
                                    <option value="">All Locations</option>
                                    <option value="Patna" <?= $filter_location === 'Patna' ? 'selected' : '' ?>>Patna</option>
                                </select>
                            </div>

                            <!-- Work Mode -->
                            <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Work Mode</label>
                                <select name="work_mode" class="form-select rounded-3">
                                    <option value="">All Work Modes</option>
                                    <option value="Work From Office" <?= $filter_work_mode === 'Work From Office' ? 'selected' : '' ?>>Work From Office</option>
                                    <option value="Work From Office / On-site Only" <?= $filter_work_mode === 'Work From Office / On-site Only' ? 'selected' : '' ?>>On-site Only</option>
                                </select>
                            </div>

                            <!-- Experience -->
                            <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Experience Requisition</label>
                                <select name="experience" class="form-select rounded-3">
                                    <option value="">All Experience Ranges</option>
                                    <option value="1–2 Years" <?= $filter_experience === '1–2 Years' ? 'selected' : '' ?>>1–2 Years</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-search-premium mt-2">Apply Filters</button>
                        </form>
                    </div>
                </div>

                <!-- Job List -->
                <div class="col-lg-8">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fw-bold text-muted">
                            <span class="text-primary fw-bold" id="jobs-count"><?= count($filteredJobs) ?></span> openings found
                        </span>
                        
                        <!-- Sort or status info -->
                        <span class="small text-muted"><i class="bi bi-lightning-charge-fill text-warning"></i> Regularly updated</span>
                    </div>

                    <!-- Loading Skeletons (Hidden by JS on Render) -->
                    <div id="skeleton-loader" class="d-none">
                        <div class="skeleton-card">
                            <div class="skeleton-pill"></div>
                            <div class="skeleton-line skeleton-title"></div>
                            <div class="skeleton-line" style="width: 80%;"></div>
                            <div class="skeleton-line" style="width: 60%;"></div>
                        </div>
                        <div class="skeleton-card">
                            <div class="skeleton-pill"></div>
                            <div class="skeleton-line skeleton-title"></div>
                            <div class="skeleton-line" style="width: 80%;"></div>
                            <div class="skeleton-line" style="width: 60%;"></div>
                        </div>
                    </div>

                    <div id="jobs-listing-container">
                        <?php if (count($filteredJobs) > 0): ?>
                            <?php foreach ($filteredJobs as $job): 
                                $badgeClass = 'badge-status-active';
                                if ($job['hiring_status'] === 'Urgent Hiring') {
                                    $badgeClass = 'badge-status-urgent';
                                } elseif ($job['hiring_status'] === 'Hot Job') {
                                    $badgeClass = 'badge-status-hot';
                                }
                            ?>
                                <div class="job-card" data-aos="fade-up">
                                    <div class="d-flex flex-wrap justify-content-between align-items-start gap-3">
                                        <div>
                                            <div class="d-flex align-items-center gap-2 mb-2">
                                                <span class="badge-hiring-status <?= $badgeClass ?>"><?= htmlspecialchars($job['hiring_status']) ?></span>
                                                <span class="text-muted small"><i class="bi bi-clock me-1"></i> Posted: <?= $job['posted_date'] ?></span>
                                            </div>
                                            <h3 class="job-card-title"><?= htmlspecialchars($job['title']) ?></h3>
                                            <div class="d-flex flex-wrap mb-3">
                                                <span class="job-meta-pill"><i class="bi bi-building"></i> <?= htmlspecialchars($job['department']) ?></span>
                                                <span class="job-meta-pill"><i class="bi bi-mortarboard"></i> Exp: <?= htmlspecialchars($job['experience']) ?></span>
                                                <span class="job-meta-pill"><i class="bi bi-wallet2"></i> <?= htmlspecialchars($job['salary']) ?></span>
                                                <span class="job-meta-pill"><i class="bi bi-geo-alt"></i> <?= is_array($job['location']) ? 'Multiple Locations' : htmlspecialchars($job['location']) ?></span>
                                                <span class="job-meta-pill"><i class="bi bi-laptop"></i> <?= htmlspecialchars($job['work_mode']) ?></span>
                                                <span class="job-meta-pill"><i class="bi bi-briefcase"></i> <?= htmlspecialchars($job['employment_type']) ?></span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row flex-wrap align-items-center gap-2">
                                            <button class="job-action-btn" onclick="toggleSaveJob('<?= $job['id'] ?>', this)" title="Save Job">
                                                <i class="bi bi-bookmark"></i>
                                            </button>
                                            <button class="job-action-btn" onclick="openShareModal('<?= $job['id'] ?>', '<?= htmlspecialchars($job['title']) ?>')" title="Share Job">
                                                <i class="bi bi-share"></i>
                                            </button>
                                            <a href="<?= $base_url ?>job-details.php?id=<?= $job['id'] ?>" class="btn btn-details-card">View Details</a>
                                            <a href="<?= $base_url ?>apply.php?id=<?= $job['id'] ?>" class="btn btn-apply-card">Apply Now</a>
                                        </div>
                                    </div>
                                    <div class="job-card-dates d-flex justify-content-between mt-3 pt-3 border-top">
                                        <span><i class="bi bi-info-circle me-1"></i> Reporting to: <?= htmlspecialchars($job['reporting_manager']) ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="card p-5 text-center shadow border-0" style="border-radius: 20px;">
                                <div class="mb-3 text-muted" style="font-size: 3.5rem;">
                                    <i class="bi bi-search"></i>
                                </div>
                                <h4 class="fw-bold text-dark">No Positions Found</h4>
                                <p class="text-muted max-width-500 mx-auto">We couldn't find any openings matching your exact search parameters. Try adjusting your filters or resetting the form to view all opportunities.</p>
                                <a href="<?= $base_url ?>jobs.php" class="btn btn-search-premium w-auto mx-auto mt-2 px-4">Reset Filters</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SHARE MODAL -->
    <div class="modal fade" id="shareJobModal" tabindex="-1" aria-labelledby="shareJobModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px; overflow: hidden;">
                <div class="modal-header border-0 bg-light">
                    <h5 class="modal-title fw-bold" id="shareJobModalLabel">Share Open Position</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-center">
                    <p class="mb-3">Share <strong id="shareModalJobTitle">Job Opening</strong> with colleagues and friends:</p>
                    
                    <div class="d-flex justify-content-center mb-4">
                        <a id="shareFB" href="#" target="_blank" class="social-share-btn share-fb"><i class="bi bi-facebook"></i></a>
                        <a id="shareTW" href="#" target="_blank" class="social-share-btn share-tw"><i class="bi bi-twitter-x"></i></a>
                        <a id="shareWA" href="#" target="_blank" class="social-share-btn share-wa"><i class="bi bi-whatsapp"></i></a>
                        <a id="shareLI" href="#" target="_blank" class="social-share-btn share-li"><i class="bi bi-linkedin"></i></a>
                    </div>
                    
                    <div class="text-start">
                        <label class="form-label small fw-bold text-muted">Copy link to clipboard</label>
                        <div class="share-link-copy-box">
                            <input type="text" id="shareLinkInput" class="share-link-input" readonly value="">
                            <button class="btn-share-copy" onclick="copyShareLink()">Copy</button>
                        </div>
                        <span id="copyLinkSuccessMsg" class="text-success small mt-1 d-none"><i class="bi bi-check-circle-fill"></i> Link copied!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/common/footer.php'; ?>

    <!-- Save & Share Interaction Script -->
    <script>
        // Toggle saved jobs in localStorage
        function getSavedJobs() {
            try {
                return JSON.parse(localStorage.getItem('saved_jobs')) || [];
            } catch(e) {
                return [];
            }
        }

        function toggleSaveJob(jobId, btnElement) {
            let saved = getSavedJobs();
            let index = saved.indexOf(jobId);
            if (index > -1) {
                saved.splice(index, 1);
                btnElement.classList.remove('saved');
                btnElement.querySelector('i').className = 'bi bi-bookmark';
            } else {
                saved.push(jobId);
                btnElement.classList.add('saved');
                btnElement.querySelector('i').className = 'bi bi-bookmark-fill';
            }
            localStorage.setItem('saved_jobs', JSON.stringify(saved));
        }

        // Initialize button saved state on load
        document.addEventListener("DOMContentLoaded", function() {
            let saved = getSavedJobs();
            document.querySelectorAll(".job-action-btn").forEach(btn => {
                let onClickStr = btn.getAttribute("onclick");
                if (onClickStr && onClickStr.includes("toggleSaveJob")) {
                    // Extract job ID
                    let match = onClickStr.match(/'([^']+)'/);
                    if (match && match[1] && saved.includes(match[1])) {
                        btn.classList.add('saved');
                        btn.querySelector('i').className = 'bi bi-bookmark-fill';
                    }
                }
            });
            
            // Demo skeleton loader hide after a small delay to simulate premium loading
            let loader = document.getElementById('skeleton-loader');
            let container = document.getElementById('jobs-listing-container');
            
            // Toggle view for visual effect
            loader.classList.remove('d-none');
            container.style.opacity = 0;
            
            setTimeout(() => {
                loader.classList.add('d-none');
                container.style.transition = 'opacity 0.5s ease-in-out';
                container.style.opacity = 1;
            }, 300);
        });

        // Share Modals Setup
        let shareModal = new bootstrap.Modal(document.getElementById('shareJobModal'));
        function openShareModal(jobId, jobTitle) {
            let url = '<?= $base_url ?>job-details.php?id=' + jobId;
            document.getElementById('shareModalJobTitle').innerText = jobTitle;
            document.getElementById('shareLinkInput').value = url;
            
            // Set up share anchors
            document.getElementById('shareFB').href = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url);
            document.getElementById('shareTW').href = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent('Apply for ' + jobTitle + ' at Coral Web Technology!');
            document.getElementById('shareWA').href = 'https://api.whatsapp.com/send?text=' + encodeURIComponent('Apply for ' + jobTitle + ' at Coral Web Technology: ' + url);
            document.getElementById('shareLI').href = 'https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(url);
            
            document.getElementById('copyLinkSuccessMsg').classList.add('d-none');
            shareModal.show();
        }

        function copyShareLink() {
            let copyText = document.getElementById("shareLinkInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value).then(() => {
                document.getElementById('copyLinkSuccessMsg').classList.remove('d-none');
            });
        }
    </script>
</body>
</html>
