<?php
ob_start();
include __DIR__ . '/common/config.php';
include __DIR__ . '/common/jobs-data.php';
include __DIR__ . '/common/careers-db-init.php'; // Ensure DB has correct schema

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect all text parameters
    $job_id = isset($_POST["job_id"]) ? $_POST["job_id"] : '';
    $job_title = isset($jobs[$job_id]) ? $jobs[$job_id]['title'] : 'General Application';
    
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $qualification = $_POST["qualification"];
    $experience = intval($_POST["experience"]);
    $relevant_experience = $_POST["relevant_experience"];
    $current_employer = $_POST["current_employer"];
    $current_salary = $_POST["current_salary"];
    $expected_salary = $_POST["expected_salary"]; // Maps to salary in base table
    $notice_period = $_POST["notice_period"];
    $current_location = $_POST["current_location"];
    $preferred_location = $_POST["preferred_location"];
    $linkedin = $_POST["linkedin"];
    $portfolio = $_POST["portfolio"];
    $website = $_POST["website"];
    $address = $_POST["address"];
    $reference = $_POST["reference"];
    $cover_letter = $_POST["cover_letter"];

    // File Directories setup
    $resumeDir = "uploads/resumes/";
    if (!is_dir($resumeDir)) {
        mkdir($resumeDir, 0777, true);
    }
    
    $profileDir = "uploads/profiles/";
    if (!is_dir($profileDir)) {
        mkdir($profileDir, 0777, true);
    }

    // Handle Resume Upload
    $resumePath = '';
    if (isset($_FILES["resume"]) && $_FILES["resume"]["error"] == 0) {
        $resumeName = basename($_FILES["resume"]["name"]);
        $cleanResumeName = time() . "_" . preg_replace("/[^a-zA-Z0-9\._-]/", "_", $resumeName);
        $targetResume = $resumeDir . $cleanResumeName;
        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetResume)) {
            $resumePath = $targetResume;
        }
    }

    // Handle Profile Image Upload
    $profileImgPath = '';
    if (isset($_FILES["profile_image"]) && $_FILES["profile_image"]["error"] == 0) {
        $imgName = basename($_FILES["profile_image"]["name"]);
        $cleanImgName = time() . "_" . preg_replace("/[^a-zA-Z0-9\._-]/", "_", $imgName);
        $targetImg = $profileDir . $cleanImgName;
        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetImg)) {
            $profileImgPath = $targetImg;
        }
    }

    // Insert to DB using Prepared Statements (23 variables bound)
    // Table columns: 
    // fullname, email, phone, gender, dob, qualification, experience, salary (as expected_salary), address, resume_path, 
    // job_title, profile_image, relevant_experience, current_employer, current_salary, notice_period, current_location, 
    // preferred_location, linkedin, portfolio, website, reference, cover_letter
    
    $stmt = $conn->prepare("INSERT INTO careers (
        fullname, email, phone, gender, dob, qualification, experience, salary, address, resume_path,
        job_title, profile_image, relevant_experience, current_employer, current_salary, notice_period, current_location,
        preferred_location, linkedin, portfolio, website, reference, cover_letter, status
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Screening')");

    if ($stmt) {
        $stmt->bind_param("ssssssissssssssssssssss", 
            $fullname, $email, $phone, $gender, $dob, $qualification, $experience, $expected_salary, $address, $resumePath,
            $job_title, $profileImgPath, $relevant_experience, $current_employer, $current_salary, $notice_period, $current_location,
            $preferred_location, $linkedin, $portfolio, $website, $reference, $cover_letter
        );
        
        if ($stmt->execute()) {
            $application_id = $conn->insert_id;
            $stmt->close();
            header("Location: careers-success.php?app_id=" . $application_id);
            exit;
        } else {
            $error_message = "Database execution error: " . $stmt->error;
            $stmt->close();
        }
    } else {
        $error_message = "Database prepare error: " . $conn->error;
    }
}

// Pre-fill Job Info if ID is passed
$selectedJobId = isset($_GET['id']) ? trim($_GET['id']) : '';
$hasSelectedJob = (!empty($selectedJobId) && isset($jobs[$selectedJobId]));
$selectedJob = $hasSelectedJob ? $jobs[$selectedJobId] : null;

$page_title = "Apply Online | ATS Hiring Portal";
$page_description = "Submit your resume and details to join the team at Coral Web Technology.";
ob_end_flush();
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
                    <h1 class="careers-header-title">Apply For Opportunity</h1>
                    <p class="careers-header-subtitle mt-2 mb-0">
                        Submit your professional profile directly into our Application Tracking System (ATS).
                    </p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <nav aria-label="breadcrumb" class="d-inline-block">
                        <ol class="breadcrumb mb-0 bg-transparent p-0">
                            <li class="breadcrumb-item"><a href="<?= $base_url ?>" class="text-white opacity-75">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= $base_url ?>careers.php" class="text-white opacity-75">Careers</a></li>
                            <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Apply</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Application Form -->
    <section class="py-5">
        <div class="container">
            <!-- Show Error if any -->
            <?php if (isset($error_message)): ?>
                <div class="alert alert-danger alert-dismissible fade show rounded-4 mb-4" role="alert">
                    <strong>Submission Error:</strong> <?= htmlspecialchars($error_message) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="row g-4">
                <!-- Sidebar summary -->
                <div class="col-lg-4 order-lg-2">
                    <div class="job-overview-sidebar p-4" style="position: sticky; top: 100px;">
                        <h5 class="fw-bold mb-3 text-dark"><i class="bi bi-briefcase-fill text-primary"></i> Application Target</h5>
                        
                        <?php if ($hasSelectedJob): ?>
                            <!-- Job Info Panel -->
                            <div class="pb-3 border-bottom">
                                <h4 class="fw-bold text-primary mb-1"><?= htmlspecialchars($selectedJob['title']) ?></h4>
                                <span class="badge-hiring-status badge-status-urgent d-inline-block"><?= htmlspecialchars($selectedJob['hiring_status']) ?></span>
                            </div>
                            
                            <div class="py-3 border-bottom small text-muted">
                                <div class="mb-2"><i class="bi bi-building me-1"></i> Department: <strong class="text-dark"><?= htmlspecialchars($selectedJob['department']) ?></strong></div>
                                <div class="mb-2"><i class="bi bi-wallet2 me-1"></i> Salary: <strong class="text-dark"><?= htmlspecialchars($selectedJob['salary']) ?></strong></div>
                                <div class="mb-2"><i class="bi bi-laptop me-1"></i> Mode: <strong class="text-dark"><?= htmlspecialchars($selectedJob['work_mode']) ?></strong></div>
                                <div class="mb-2"><i class="bi bi-geo-alt me-1"></i> Location: <strong class="text-dark"><?= is_array($selectedJob['location']) ? 'Multiple locations' : htmlspecialchars($selectedJob['location']) ?></strong></div>
                            </div>
                            
                            <div class="pt-3">
                                <h6 class="fw-bold mb-2 text-dark">Required Competencies:</h6>
                                <div class="skills-badge-list">
                                    <?php foreach ($selectedJob['skills'] as $skill): ?>
                                        <span class="skill-badge" style="font-size: 0.75rem; padding: 4px 10px;"><?= htmlspecialchars($skill) ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <!-- No Job Selected / General Intake -->
                            <div class="pb-3">
                                <h5 class="fw-bold text-primary mb-2">General Direct Intake</h5>
                                <p class="text-muted small">Not applying for a specific open requisition? Submit your resume here and our recruitment unit will map you when suitable client projects initialize.</p>
                            </div>
                        <?php endif; ?>

                        <!-- Standard corporate side reminder -->
                        <div class="mt-4 p-3 bg-light rounded-4 border">
                            <h6 class="fw-bold mb-1 text-dark small"><i class="bi bi-info-circle-fill text-primary"></i> Review Instructions</h6>
                            <p class="text-muted mb-0" style="font-size: 0.75rem; line-height: 1.4;">
                                Please ensure your resume is in PDF format. Profile photos should be standard professional headshots (JPG/PNG). Complete all address fields accurately for verification checks.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Main Form Card -->
                <div class="col-lg-8 order-lg-1" data-aos="fade-right">
                    <div class="ats-form-card">
                        <form id="atsApplicationForm" action="" method="POST" enctype="multipart/form-data">
                            
                            <!-- Hidden or dropdown job selection -->
                            <?php if ($hasSelectedJob): ?>
                                <input type="hidden" name="job_id" id="jobSelectionInput" value="<?= $selectedJob['id'] ?>">
                            <?php else: ?>
                                <div class="mb-4">
                                    <label class="form-label fw-bold text-dark">Position You Are Applying For <span class="text-danger">*</span></label>
                                    <select name="job_id" id="jobSelectionInput" class="form-select rounded-3 p-3" required onchange="handleJobDropdownChange(this.value)">
                                        <option value="">-- Choose Position --</option>
                                        <?php foreach ($jobs as $id => $j): ?>
                                            <option value="<?= $id ?>"><?= htmlspecialchars($j['title']) ?> (<?= htmlspecialchars($j['department']) ?>)</option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            <?php endif; ?>

                            <!-- PROFILE PHOTO UPLOAD SECTION -->
                            <div class="ats-form-section-title mt-0">Candidate Avatar</div>
                            <div class="profile-upload-container">
                                <div class="profile-preview-box" id="avatarPreviewBox">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div>
                                    <label class="btn btn-details-card py-2 px-3 m-0" style="cursor: pointer;">
                                        <i class="bi bi-camera me-1"></i> Choose Headshot Image
                                        <input type="file" name="profile_image" id="profileImageFile" class="d-none" accept=".jpg,.jpeg,.png" onchange="previewAvatar(this)">
                                    </label>
                                    <span class="text-muted small d-block mt-1">Accepts JPG, PNG up to 2MB.</span>
                                </div>
                            </div>

                            <!-- RESUME UPLOAD SECTION -->
                            <div class="ats-form-section-title">Resume Attachment</div>
                            <div class="mb-4">
                                <div class="dropzone-container" id="resumeDropzone" onclick="triggerResumeInput()">
                                    <div class="dropzone-icon"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                                    <div class="dropzone-label" id="resumeUploadLabel">Drag & Drop Resume here</div>
                                    <p class="text-muted small mb-0">or click to browse local files (PDF, DOC, DOCX up to 5MB)</p>
                                    <input type="file" name="resume" id="resumeFile" class="d-none" accept=".pdf,.doc,.docx" required onchange="handleResumeSelect(this)">
                                </div>
                                <span id="resumeFileFeedback" class="text-success small mt-1 d-none"><i class="bi bi-check-circle-fill"></i> Resume loaded: <strong id="resumeFileNameText">file.pdf</strong></span>
                            </div>

                            <!-- PERSONAL INFORMATION -->
                            <div class="ats-form-section-title">Personal Information</div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="fullname" class="form-control rounded-3 p-3" placeholder="Enter full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control rounded-3 p-3" placeholder="email@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Mobile Number <span class="text-danger">*</span></label>
                                    <input type="tel" name="phone" class="form-control rounded-3 p-3" placeholder="10 digit number" required oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Gender <span class="text-danger">*</span></label>
                                    <select name="gender" class="form-select rounded-3 p-3" required>
                                        <option value="">-- Select --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Date of Birth <span class="text-danger">*</span></label>
                                    <input type="date" name="dob" class="form-control rounded-3 p-3" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Highest Qualification <span class="text-danger">*</span></label>
                                    <input type="text" name="qualification" class="form-control rounded-3 p-3" placeholder="e.g. B.Tech / MBA / BCA" required>
                                </div>
                            </div>

                            <!-- PROFESSIONAL PROFILE -->
                            <div class="ats-form-section-title">Professional Experience</div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Total Experience (In Years) <span class="text-danger">*</span></label>
                                    <input type="number" name="experience" class="form-control rounded-3 p-3" min="0" max="40" placeholder="e.g. 2" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Relevant Experience (In Years) <span class="text-danger">*</span></label>
                                    <input type="text" name="relevant_experience" class="form-control rounded-3 p-3" placeholder="e.g. 1.5 Years" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Current Employer</label>
                                    <input type="text" name="current_employer" class="form-control rounded-3 p-3" placeholder="e.g. Acme Tech (Optional)">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Current Salary (Monthly in ₹)</label>
                                    <input type="text" name="current_salary" class="form-control rounded-3 p-3" placeholder="e.g. 20,000" oninput="this.value = this.value.replace(/[^0-9,]/g, '')">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Expected Salary (Monthly in ₹) <span class="text-danger">*</span></label>
                                    <input type="text" name="expected_salary" class="form-control rounded-3 p-3" placeholder="e.g. 35,000" required oninput="this.value = this.value.replace(/[^0-9,]/g, '')">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Notice Period <span class="text-danger">*</span></label>
                                    <select name="notice_period" class="form-select rounded-3 p-3" required>
                                        <option value="">-- Choose Notice Period --</option>
                                        <option value="Immediate Joiner">Immediate Joiner</option>
                                        <option value="15 Days">15 Days</option>
                                        <option value="1 Month">1 Month</option>
                                        <option value="2 Months">2 Months</option>
                                        <option value="3 Months">3 Months</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Current Location <span class="text-danger">*</span></label>
                                    <input type="text" name="current_location" class="form-control rounded-3 p-3" placeholder="e.g. Patna" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-muted">Preferred Work Location <span class="text-danger">*</span></label>
                                    <select name="preferred_location" id="preferredLocationDropdown" class="form-select rounded-3 p-3" required>
                                        <option value="Patna">Patna</option>
                                    </select>
                                </div>
                            </div>

                            <!-- LINKS & URLS -->
                            <div class="ats-form-section-title">Web Portfolio & Social Links</div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label small fw-bold text-muted">LinkedIn Profile</label>
                                    <input type="url" name="linkedin" class="form-control rounded-3 p-3" placeholder="https://linkedin.com/in/username">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label small fw-bold text-muted">Portfolio URL</label>
                                    <input type="url" name="portfolio" class="form-control rounded-3 p-3" placeholder="e.g. behance.net/username">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label small fw-bold text-muted">Personal Website</label>
                                    <input type="url" name="website" class="form-control rounded-3 p-3" placeholder="https://username.me">
                                </div>
                            </div>

                            <!-- ADDRESS & COVER LETTER -->
                            <div class="ats-form-section-title">Cover Letter & Address</div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label small fw-bold text-muted">Current Address <span class="text-danger">*</span></label>
                                    <textarea name="address" rows="3" class="form-control rounded-3 p-3" placeholder="Enter complete home address" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label small fw-bold text-muted">Reference (Who referred you?)</label>
                                    <input type="text" name="reference" class="form-control rounded-3 p-3" placeholder="e.g. Name of employee, or Job portal (Optional)">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-bold text-muted">Cover Letter / Pitch</label>
                                    <textarea name="cover_letter" rows="4" class="form-control rounded-3 p-3" placeholder="Pitch yourself! Why should we hire you? (Optional)"></textarea>
                                </div>
                            </div>

                            <!-- DECLARATION -->
                            <div class="mt-4 p-3 bg-light rounded-4 border">
                                <div class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" id="atsDeclaration" required>
                                    <label class="form-check-label small fw-bold text-dark" for="atsDeclaration">
                                        I hereby declare that all the information provided above is true and accurate to the best of my knowledge and belief.
                                    </label>
                                </div>
                            </div>

                            <!-- SUBMIT BUTTON -->
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-search-premium py-3 px-5 w-auto" id="atsSubmitBtn">Submit ATS Application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/common/footer.php'; ?>

    <script>
        // Trigger file input click when clicking dropzone
        function triggerResumeInput() {
            document.getElementById('resumeFile').click();
        }

        // Show selected file name in dropzone
        function handleResumeSelect(input) {
            let feedback = document.getElementById('resumeFileFeedback');
            let text = document.getElementById('resumeFileNameText');
            let label = document.getElementById('resumeUploadLabel');
            
            if (input.files && input.files[0]) {
                text.innerText = input.files[0].name;
                feedback.classList.remove('d-none');
                label.innerText = 'Resume Selected Successfully!';
                label.style.color = '#28a745';
            } else {
                feedback.classList.add('d-none');
                label.innerText = 'Drag & Drop Resume here';
                label.style.color = 'var(--dark-navy)';
            }
        }

        // Preview Profile Avatar photo
        function previewAvatar(input) {
            let box = document.getElementById('avatarPreviewBox');
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    box.innerHTML = '<img src="' + e.target.result + '" alt="Avatar Preview">';
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                box.innerHTML = '<i class="bi bi-person-fill"></i>';
            }
        }

        // Setup drag over and drop handlers
        let dropzone = document.getElementById('resumeDropzone');
        
        ['dragenter', 'dragover'].forEach(eventName => {
            dropzone.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        dropzone.addEventListener('dragover', () => {
            dropzone.style.borderColor = 'var(--primary-blue)';
            dropzone.style.backgroundColor = 'rgba(15, 115, 188, 0.08)';
        });
        
        dropzone.addEventListener('dragleave', () => {
            dropzone.style.borderColor = 'rgba(15, 115, 188, 0.25)';
            dropzone.style.backgroundColor = 'var(--light-slate)';
        });
        
        dropzone.addEventListener('drop', (e) => {
            preventDefaults(e);
            dropzone.style.borderColor = 'rgba(15, 115, 188, 0.25)';
            dropzone.style.backgroundColor = 'var(--light-slate)';
            
            let fileInput = document.getElementById('resumeFile');
            if (e.dataTransfer.files && e.dataTransfer.files[0]) {
                fileInput.files = e.dataTransfer.files;
                handleResumeSelect(fileInput);
            }
        });

        // Dynamic Location Options based on selected Job Requisition
        const locationsMap = {
            'field-sales-executive': [
                'Delhi', 'Delhi NCR', 'Noida', 'Gurgaon', 'Bangalore', 'Pune', 
                'Chennai', 'Mumbai', 'Ahmedabad', 'Jaipur', 'Hyderabad', 
                'Patna', 'Kolkata', 'Chandigarh', 'Kerala'
            ],
            // All other positions are default Patna
            'default': ['Patna']
        };

        function handleJobDropdownChange(jobId) {
            let dropdown = document.getElementById('preferredLocationDropdown');
            dropdown.innerHTML = '';
            
            let list = locationsMap[jobId] || locationsMap['default'];
            list.forEach(loc => {
                let opt = document.createElement('option');
                opt.value = loc;
                opt.innerText = loc;
                dropdown.appendChild(opt);
            });
        }

        // Trigger logic on load for pre-filled job ID
        document.addEventListener("DOMContentLoaded", function() {
            let selectVal = document.getElementById('jobSelectionInput').value;
            if (selectVal) {
                handleJobDropdownChange(selectVal);
            }
        });
    </script>
</body>
</html>
