<?php
ob_start();
include __DIR__ . '/common/config.php';
include __DIR__ . '/common/jobs-data.php';
include __DIR__ . '/common/careers-db-init.php'; // Runs automated table creation & column updates
ob_end_flush();

$page_title = "Join Coral Web Technology | Premium Corporate Hiring Portal";
$page_description = "Build your future with one of India's fastest growing Digital Marketing & IT companies. Explore exciting career opportunities and become a part of our innovative team.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/common/head.php'; ?>
    <?php include __DIR__ . '/common/plugins.php'; ?>
    <!-- Premium CSS Override -->
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/careers.css?v=<?= APP_VERSION ?>">
</head>

<body class="bg-careers">
    <?php include __DIR__ . '/common/header.php'; ?>

    <!-- 1. HERO SECTION -->
    <section class="careers-hero d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 careers-hero-content" data-aos="fade-right">
                    <span class="careers-hero-tag">We Are Hiring</span>
                    <h1 class="careers-hero-title">
                        Join <span>Coral Web Technology</span>
                    </h1>
                    <p class="careers-hero-subtitle">
                        Build your future with one of India's fastest growing Digital Marketing & IT companies. Explore exciting career opportunities and become a part of our innovative team.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?= $base_url ?>jobs.php" class="btn btn-search-premium px-4 py-3 w-auto">Explore Openings</a>
                        <a href="<?= $base_url ?>apply.php" class="btn btn-details-card text-white border-white px-4 py-3 w-auto" style="border-width: 1.5px !important;">Apply Now</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="careers-hero-graphics">
                        <!-- Premium Interactive Cards representing the Indian IT office vibe -->
                        <div class="illustration-card illustration-card-1">
                            <div class="illus-icon"><i class="bi bi-laptop"></i></div>
                            <h6 class="fw-bold mb-1">Modern Workplace</h6>
                            <p class="text-muted small mb-0">High-end systems & creative freedom</p>
                        </div>
                        <div class="illustration-card illustration-card-2">
                            <div class="illus-icon"><i class="bi bi-graph-up-arrow"></i></div>
                            <h6 class="fw-bold mb-1">Career Growth</h6>
                            <p class="text-muted small mb-0">Structured paths to senior roles</p>
                        </div>
                        <div class="illustration-card illustration-card-3">
                            <div class="illus-icon"><i class="bi bi-people-fill"></i></div>
                            <h6 class="fw-bold mb-1">Great Culture</h6>
                            <p class="text-muted small mb-0">Collaborative and supportive teams</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. SEARCH SECTION -->
    <div class="container search-panel-container">
        <div class="search-panel" data-aos="zoom-in" data-aos-delay="100">
            <h5 class="search-panel-title">
                <i class="bi bi-briefcase-fill text-primary"></i> Find Your Dream Job
            </h5>
            <form action="<?= $base_url ?>jobs.php" method="GET">
                <div class="row g-3">
                    <!-- Keyword Search -->
                    <div class="col-lg-3 col-md-6">
                        <div class="search-field-group">
                            <input type="text" name="keyword" class="search-input-custom" placeholder="Title, skills, keyword...">
                            <i class="bi bi-search search-field-icon"></i>
                        </div>
                    </div>

                    <!-- Department -->
                    <div class="col-lg-3 col-md-6">
                        <div class="search-field-group">
                            <select name="department" class="search-input-custom">
                                <option value="">Select Department</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Development">Development</option>
                                <option value="SEO">SEO</option>
                                <option value="Sales">Sales</option>
                                <option value="Design">Design</option>
                                <option value="Management">Management</option>
                                <option value="Content">Content</option>
                                <option value="Business Development">Business Development</option>
                            </select>
                            <i class="bi bi-building search-field-icon"></i>
                        </div>
                    </div>

                    <!-- Work Mode -->
                    <div class="col-lg-2 col-md-6">
                        <div class="search-field-group">
                            <select name="work_mode" class="search-input-custom">
                                <option value="">Work Mode</option>
                                <option value="Work From Office">Work From Office</option>
                                <option value="Work From Office / On-site Only">On-site Only</option>
                            </select>
                            <i class="bi bi-laptop search-field-icon"></i>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="col-lg-2 col-md-6">
                        <div class="search-field-group">
                            <select name="location" class="search-input-custom">
                                <option value="">Select Location</option>
                                <option value="Patna">Patna</option>
                            </select>
                            <i class="bi bi-geo-alt search-field-icon"></i>
                        </div>
                    </div>

                    <!-- Search Button -->
                    <div class="col-lg-2 col-md-12">
                        <button type="submit" class="btn btn-search-premium">
                            <i class="bi bi-search me-1"></i> Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- 3. JOB CATEGORIES -->
    <section class="py-5 mt-4">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-primary fw-bold text-uppercase tracking-wider">Explore Verticals</span>
                <h2 class="fw-bold mt-2">Browse Jobs by Category</h2>
                <p class="text-muted">Find opportunities matching your skills and experience across different departments.</p>
            </div>
            
            <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
                <?php 
                $categoryCounts = getJobCategories($jobs);
                $categoriesList = [
                    'Digital Marketing' => ['icon' => 'bi-megaphone', 'title' => 'Digital Marketing'],
                    'Development' => ['icon' => 'bi-code-slash', 'title' => 'Development'],
                    'SEO' => ['icon' => 'bi-graph-up', 'title' => 'SEO'],
                    'Sales' => ['icon' => 'bi-cart-check', 'title' => 'Sales'],
                    'Design' => ['icon' => 'bi-palette', 'title' => 'Design'],
                    'Management' => ['icon' => 'bi-kanban', 'title' => 'Management'],
                    'Content' => ['icon' => 'bi-journal-text', 'title' => 'Content'],
                    'Business Development' => ['icon' => 'bi-briefcase', 'title' => 'Business Development']
                ];
                
                foreach ($categoriesList as $key => $catData):
                    $count = isset($categoryCounts[$key]) ? $categoryCounts[$key] : 0;
                ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <a href="<?= $base_url ?>jobs.php?category=<?= urlencode($key) ?>" class="category-card">
                            <div class="category-icon-wrapper">
                                <i class="bi <?= $catData['icon'] ?>"></i>
                            </div>
                            <h4 class="category-title"><?= $catData['title'] ?></h4>
                            <span class="category-count"><?= $count ?> Open Positions</span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 4. OPEN POSITIONS HIGHLIGHT -->
    <section class="py-5 bg-light border-top border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-5" data-aos="fade-up">
                <div>
                    <span class="text-primary fw-bold text-uppercase tracking-wider">Current Openings</span>
                    <h2 class="fw-bold mt-2 mb-0">Explore Featured Positions</h2>
                </div>
                <a href="<?= $base_url ?>jobs.php" class="btn btn-details-card mt-3">View All Openings <i class="bi bi-arrow-right ms-1"></i></a>
            </div>

            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                    <?php 
                    // Select 4 jobs to feature on landing page
                    $featuredJobs = array_slice($jobs, 0, 4);
                    foreach ($featuredJobs as $job):
                        $badgeClass = 'badge-status-active';
                        if ($job['hiring_status'] === 'Urgent Hiring') {
                            $badgeClass = 'badge-status-urgent';
                        } elseif ($job['hiring_status'] === 'Hot Job') {
                            $badgeClass = 'badge-status-hot';
                        }
                    ?>
                        <div class="job-card">
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
                </div>
            </div>
        </div>
    </section>

    <!-- 5. WHY JOIN CORAL WEB TECHNOLOGY -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-primary fw-bold text-uppercase tracking-wider">Perks & Culture</span>
                <h2 class="fw-bold mt-2">Why Join Coral Web Technology?</h2>
                <p class="text-muted">We foster a warm, high-performance workspace where talent grows and results are celebrated.</p>
            </div>

            <div class="row g-4" data-aos="fade-up" data-aos-delay="100">
                <?php 
                $perks = [
                    ['icon' => 'bi-cash-coin', 'title' => 'Competitive Salary', 'desc' => 'We offer industry-standard payouts that reward your skills and value properly.'],
                    ['icon' => 'bi-gift', 'title' => 'Performance Incentives', 'desc' => 'Your achievements deserve rewards. Get performance-linked monthly increments.'],
                    ['icon' => 'bi-graph-up-arrow', 'title' => 'Career Growth', 'desc' => 'We promote from within. Grow into lead and management positions rapidly.'],
                    ['icon' => 'bi-award', 'title' => 'Skill Development', 'desc' => 'Get exposure to international client budgets and the latest software setups.'],
                    ['icon' => 'bi-emoji-smile', 'title' => 'Friendly Environment', 'desc' => 'No corporate politics. Work with a supportive team in a welcoming space.'],
                    ['icon' => 'bi-book', 'title' => 'Learning Opportunities', 'desc' => 'Access structured corporate courses, books, and expert mentorship.'],
                    ['icon' => 'bi-calendar-check', 'title' => 'Paid Leave', 'desc' => 'Enjoy healthy work-life balance with standard casual and medical leaves.'],
                    ['icon' => 'bi-stars', 'title' => 'Festival Bonus', 'desc' => 'Receive special payouts and gifts during major festive holidays.'],
                    ['icon' => 'bi-trophy', 'title' => 'Recognition', 'desc' => 'Work achievements are called out and awarded in monthly townhall reviews.'],
                    ['icon' => 'bi-building-check', 'title' => 'Modern Workplace', 'desc' => 'Collaborate in a premium office setup with high-speed web and amenities.']
                ];
                foreach ($perks as $perk):
                ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="perk-card">
                            <div class="perk-icon-box">
                                <i class="bi <?= $perk['icon'] ?>"></i>
                            </div>
                            <h4 class="perk-title"><?= htmlspecialchars($perk['title']) ?></h4>
                            <p class="text-muted small mb-0"><?= htmlspecialchars($perk['desc']) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 6. HIRING PROCESS (Timeline) -->
    <section class="py-5 bg-light border-top">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-primary fw-bold text-uppercase tracking-wider">Our Workflow</span>
                <h2 class="fw-bold mt-2">Our Modern Hiring Process</h2>
                <p class="text-muted">A fast, structured, and transparent process from application to day one.</p>
            </div>

            <div class="timeline-container d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                <div class="timeline-line"></div>
                
                <!-- Stage 1 -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-card">
                        <div class="timeline-number">01</div>
                        <h4 class="timeline-title">Application Submitted</h4>
                        <p class="text-muted small mb-0">Fill out our ATS form, upload your profile photo and PDF resume. You will receive an immediate acknowledgement confirmation.</p>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-card">
                        <div class="timeline-number">02</div>
                        <h4 class="timeline-title">Resume Screening</h4>
                        <p class="text-muted small mb-0">Our HR recruiters evaluate your work history, skills, and portfolio against our active project requisitions within 3 days.</p>
                    </div>
                </div>

                <!-- Stage 3 -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-card">
                        <div class="timeline-number">03</div>
                        <h4 class="timeline-title">Technical Interview</h4>
                        <p class="text-muted small mb-0">Demonstrate your core expertise during an in-depth conversation or coding test with our team leads and senior builders.</p>
                    </div>
                </div>

                <!-- Stage 4 -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-card">
                        <div class="timeline-number">04</div>
                        <h4 class="timeline-title">HR Interview</h4>
                        <p class="text-muted small mb-0">Discuss compensation, location choices, company values, work-timings, and growth frameworks with the recruiting manager.</p>
                    </div>
                </div>

                <!-- Stage 5 -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-card">
                        <div class="timeline-number">05</div>
                        <h4 class="timeline-title">Offer Letter</h4>
                        <p class="text-muted small mb-0">Congratulations! A formal engagement contract stating CTC, benefits, and start date is dispatched to your mailbox.</p>
                    </div>
                </div>

                <!-- Stage 6 -->
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-card">
                        <div class="timeline-number">06</div>
                        <h4 class="timeline-title">Joining</h4>
                        <p class="text-muted small mb-0">Complete digital onboarding, meet your team guides, and start crafting high-performance digital solutions!</p>
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