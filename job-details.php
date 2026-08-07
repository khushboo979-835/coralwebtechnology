<?php
ob_start();
include __DIR__ . '/common/config.php';
include __DIR__ . '/common/jobs-data.php';
ob_end_flush();

$jobId = isset($_GET['id']) ? trim($_GET['id']) : '';
if (empty($jobId) || !isset($jobs[$jobId])) {
    header("Location: jobs.php");
    exit;
}

$job = $jobs[$jobId];

// Calculate related jobs
$relatedJobs = [];
foreach ($jobs as $id => $j) {
    if ($id !== $jobId && ($j['category'] === $job['category'] || $j['department'] === $job['department'])) {
        $relatedJobs[$id] = $j;
    }
}
// If not enough related jobs, fill with other active ones
if (count($relatedJobs) < 2) {
    foreach ($jobs as $id => $j) {
        if ($id !== $jobId && !isset($relatedJobs[$id])) {
            $relatedJobs[$id] = $j;
            if (count($relatedJobs) >= 3) break;
        }
    }
}

$page_title = $job['title'] . " Job Opening at Coral Web Technology Patna";
$page_description = "We are hiring for the role of " . $job['title'] . " in Patna. Required experience: " . $job['experience'] . ", Salary: " . $job['salary'] . ". Apply today!";
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
                    <div class="d-flex align-items-center gap-2 mb-2 justify-content-center justify-content-md-start">
                        <span class="badge-hiring-status badge-status-urgent"><?= htmlspecialchars($job['hiring_status']) ?></span>
                        <span class="text-white opacity-75 small"><i class="bi bi-clock me-1"></i> Posted: <?= $job['posted_date'] ?></span>
                    </div>
                    <h1 class="careers-header-title" style="font-size: 2.8rem;"><?= htmlspecialchars($job['title']) ?></h1>
                    <div class="d-flex flex-wrap justify-content-center justify-content-md-start mt-2">
                        <span class="text-white opacity-75 me-3"><i class="bi bi-building me-1"></i> <?= htmlspecialchars($job['department']) ?></span>
                        <span class="text-white opacity-75 me-3"><i class="bi bi-geo-alt me-1"></i> <?= is_array($job['location']) ? 'Multiple Locations' : htmlspecialchars($job['location']) ?></span>
                        <span class="text-white opacity-75 me-3"><i class="bi bi-briefcase me-1"></i> <?= htmlspecialchars($job['employment_type']) ?></span>
                    </div>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <nav aria-label="breadcrumb" class="d-inline-block">
                        <ol class="breadcrumb mb-0 bg-transparent p-0">
                            <li class="breadcrumb-item"><a href="<?= $base_url ?>" class="text-white opacity-75">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= $base_url ?>careers.php" class="text-white opacity-75">Careers</a></li>
                            <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Job Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Details Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Details Body -->
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="job-details-content p-4 p-md-5">
                        <!-- Overview -->
                        <div>
                            <h3 class="job-details-subtitle mt-0">Job Overview</h3>
                            <p class="text-muted" style="line-height: 1.7; font-size: 1rem;">
                                <?= htmlspecialchars($job['overview']) ?>
                            </p>
                        </div>

                        <!-- Skills -->
                        <div class="mt-4">
                            <h4 class="job-details-subtitle">Required Skills</h4>
                            <div class="skills-badge-list">
                                <?php foreach ($job['skills'] as $skill): ?>
                                    <span class="skill-badge"><?= htmlspecialchars($skill) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Responsibilities -->
                        <div class="mt-4">
                            <h4 class="job-details-subtitle">Key Responsibilities</h4>
                            <ul class="list-unstyled">
                                <?php 
                                $resps = isset($job['responsibilities']) ? $job['responsibilities'] : [
                                    'Promote regional operations and manage assigned tasks.',
                                    'Coordinate daily assignments and sync with managing leads.',
                                    'Report metrics and achievements to directors weekly.'
                                ];
                                foreach ($resps as $resp): 
                                ?>
                                    <li class="icon-list-item">
                                        <i class="bi bi-check2-circle"></i>
                                        <span class="text-muted"><?= htmlspecialchars($resp) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Requirements -->
                        <div class="mt-4">
                            <h4 class="job-details-subtitle">Role Requirements</h4>
                            <ul class="list-unstyled">
                                <?php 
                                $reqs = isset($job['requirements']) ? $job['requirements'] : [
                                    '1+ Years of industry experience inside a fast-paced agency framework.',
                                    'Strong communication and professional writing.',
                                    'Ability to work independently and manage complex challenges.'
                                ];
                                foreach ($reqs as $req): 
                                ?>
                                    <li class="icon-list-item">
                                        <i class="bi bi-shield-check"></i>
                                        <span class="text-muted"><?= htmlspecialchars($req) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Benefits -->
                        <div class="mt-4">
                            <h4 class="job-details-subtitle">Benefits & Perks</h4>
                            <ul class="list-unstyled">
                                <?php 
                                $bens = isset($job['benefits']) ? $job['benefits'] : [
                                    'Competitive salary packages matching skills.',
                                    'Paid holidays and leave packages.',
                                    'Structured career trajectories and regular mentoring reviews.'
                                ];
                                foreach ($bens as $ben): 
                                ?>
                                    <li class="icon-list-item icon-list-item-perk">
                                        <i class="bi bi-gift-fill"></i>
                                        <span class="text-muted"><?= htmlspecialchars($ben) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Company Description -->
                        <div class="mt-5 pt-4 border-top">
                            <h4 class="fw-bold mb-3 text-dark">About Coral Web Technology</h4>
                            <p class="text-muted small text-justify" style="line-height: 1.6;">
                                Coral Web Technology is one of Patna's premier IT Development and Digital Marketing agencies. Established to deliver exceptional digital business solutions, we specialize in high-conversion search engine optimization (SEO), custom software engineering, content marketing systems, and high-impact social branding campaigns. We operate on a foundation of growth, transparency, and collaborative talent development.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Highlights -->
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="job-overview-sidebar p-4">
                        <h4 class="fw-bold mb-4 text-dark"><i class="bi bi-card-list text-primary"></i> Job Summary</h4>
                        
                        <div class="d-flex align-items-center gap-3 py-3 border-bottom">
                            <div class="fs-4 text-primary bg-light p-2 rounded-3"><i class="bi bi-mortarboard"></i></div>
                            <div>
                                <span class="text-muted small d-block">Experience</span>
                                <strong class="text-dark"><?= htmlspecialchars($job['experience']) ?></strong>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 py-3 border-bottom">
                            <div class="fs-4 text-primary bg-light p-2 rounded-3"><i class="bi bi-wallet2"></i></div>
                            <div>
                                <span class="text-muted small d-block">Salary Range</span>
                                <strong class="text-dark"><?= htmlspecialchars($job['salary']) ?></strong>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 py-3 border-bottom">
                            <div class="fs-4 text-primary bg-light p-2 rounded-3"><i class="bi bi-building"></i></div>
                            <div>
                                <span class="text-muted small d-block">Department</span>
                                <strong class="text-dark"><?= htmlspecialchars($job['department']) ?></strong>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 py-3 border-bottom">
                            <div class="fs-4 text-primary bg-light p-2 rounded-3"><i class="bi bi-laptop"></i></div>
                            <div>
                                <span class="text-muted small d-block">Work Mode</span>
                                <strong class="text-dark"><?= htmlspecialchars($job['work_mode']) ?></strong>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 py-3 border-bottom">
                            <div class="fs-4 text-primary bg-light p-2 rounded-3"><i class="bi bi-person-badge"></i></div>
                            <div>
                                <span class="text-muted small d-block">Reporting Manager</span>
                                <strong class="text-dark"><?= htmlspecialchars($job['reporting_manager']) ?></strong>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 py-3 border-bottom">
                            <div class="fs-4 text-primary bg-light p-2 rounded-3"><i class="bi bi-people"></i></div>
                            <div>
                                <span class="text-muted small d-block">Open Positions</span>
                                <strong class="text-dark"><?= htmlspecialchars($job['open_positions']) ?> Requisitions</strong>
                            </div>
                        </div>



                        <!-- Action Buttons -->
                        <div class="mt-4">
                            <a href="<?= $base_url ?>apply.php?id=<?= $job['id'] ?>" class="btn btn-search-premium w-100 py-3 mb-2">Apply For This Job</a>
                            
                            <div class="d-flex gap-2">
                                <button class="btn btn-details-card w-50 py-2 d-flex align-items-center justify-content-center gap-2" id="sidebarSaveBtn" onclick="toggleSaveJob('<?= $job['id'] ?>', this)">
                                    <i class="bi bi-bookmark"></i> Save Role
                                </button>
                                <button class="btn btn-details-card w-50 py-2 d-flex align-items-center justify-content-center gap-2" onclick="openShareModal('<?= $job['id'] ?>', '<?= htmlspecialchars($job['title']) ?>')">
                                    <i class="bi bi-share"></i> Share Job
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RELATED JOBS SECTION -->
            <div class="row mt-5">
                <div class="col-12 mb-4" data-aos="fade-up">
                    <h3 class="fw-bold text-dark"><i class="bi bi-briefcase-fill text-primary"></i> Related Job Openings</h3>
                    <p class="text-muted mb-0">You might also be interested in these active openings in similar departments.</p>
                </div>
                
                <?php 
                $shownRelated = array_slice($relatedJobs, 0, 3);
                foreach ($shownRelated as $rId => $rJob): 
                    $badgeClass = 'badge-status-active';
                    if ($rJob['hiring_status'] === 'Urgent Hiring') {
                        $badgeClass = 'badge-status-urgent';
                    } elseif ($rJob['hiring_status'] === 'Hot Job') {
                        $badgeClass = 'badge-status-hot';
                    }
                ?>
                    <div class="col-md-4 mb-4" data-aos="fade-up">
                        <div class="card shadow border-0 p-4 h-100" style="border-radius: 20px; transition: var(--transition-smooth);">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <span class="badge-hiring-status <?= $badgeClass ?>" style="font-size: 0.7rem; padding: 4px 8px;"><?= htmlspecialchars($rJob['hiring_status']) ?></span>
                            </div>
                            <h5 class="fw-bold text-dark mb-2"><?= htmlspecialchars($rJob['title']) ?></h5>
                            <div class="mb-3 small text-muted">
                                <div><i class="bi bi-building"></i> <?= htmlspecialchars($rJob['department']) ?></div>
                                <div><i class="bi bi-wallet2"></i> <?= htmlspecialchars($rJob['salary']) ?></div>
                                <div><i class="bi bi-geo-alt"></i> Patna</div>
                            </div>
                            <div class="mt-auto d-flex justify-content-between align-items-center pt-3 border-top">
                                <a href="<?= $base_url ?>job-details.php?id=<?= $rId ?>" class="btn btn-sm btn-details-card py-2 px-3">Details</a>
                                <a href="<?= $base_url ?>apply.php?id=<?= $rId ?>" class="btn btn-sm btn-apply-card py-2 px-3">Apply</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- STICKY APPLY BAR -->
    <div class="sticky-apply-bar" id="stickyApplyBar">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-none d-md-block">
                    <h5 class="fw-bold mb-0 text-dark"><?= htmlspecialchars($job['title']) ?></h5>
                    <span class="text-muted small"><i class="bi bi-wallet2 me-1"></i> <?= htmlspecialchars($job['salary']) ?> &bull; <i class="bi bi-geo-alt me-1"></i> Patna</span>
                </div>
                <div class="w-100 w-md-auto d-flex justify-content-between align-items-center gap-3">
                    <span class="d-block d-md-none text-dark fw-bold" style="font-size: 0.95rem;"><?= htmlspecialchars($job['title']) ?></span>
                    <a href="<?= $base_url ?>apply.php?id=<?= $job['id'] ?>" class="btn btn-search-premium py-2 px-4 w-auto">Apply Now</a>
                </div>
            </div>
        </div>
    </div>

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
            let sidebarBtn = document.getElementById('sidebarSaveBtn');
            
            if (index > -1) {
                saved.splice(index, 1);
                
                // Update elements
                if (sidebarBtn) {
                    sidebarBtn.classList.remove('saved');
                    sidebarBtn.innerHTML = '<i class="bi bi-bookmark"></i> Save Role';
                }
                btnElement.classList.remove('saved');
            } else {
                saved.push(jobId);
                
                // Update elements
                if (sidebarBtn) {
                    sidebarBtn.classList.add('saved');
                    sidebarBtn.innerHTML = '<i class="bi bi-bookmark-fill"></i> Saved';
                }
                btnElement.classList.add('saved');
            }
            localStorage.setItem('saved_jobs', JSON.stringify(saved));
        }

        // Initialize saved button state
        document.addEventListener("DOMContentLoaded", function() {
            let saved = getSavedJobs();
            let jobId = '<?= $job['id'] ?>';
            let sidebarBtn = document.getElementById('sidebarSaveBtn');
            
            if (saved.includes(jobId) && sidebarBtn) {
                sidebarBtn.classList.add('saved');
                sidebarBtn.innerHTML = '<i class="bi bi-bookmark-fill"></i> Saved';
            }
            
            // Listen to scroll to display Sticky Apply Bar
            let stickyBar = document.getElementById('stickyApplyBar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 350) {
                    stickyBar.classList.add('show');
                } else {
                    stickyBar.classList.remove('show');
                }
            });
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
