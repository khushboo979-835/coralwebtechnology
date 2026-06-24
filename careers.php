<?php
ob_start();
include 'common/config.php';
// Create careers table if not exists
$createTableSQL = "CREATE TABLE IF NOT EXISTS careers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(15),
    gender VARCHAR(10),
    dob DATE,
    qualification VARCHAR(100),
    experience INT,
    salary VARCHAR(50),
    address TEXT,
    resume_path VARCHAR(255),
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($createTableSQL);

// Form submit logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $qualification = $_POST["qualification"];
    $experience = $_POST["experience"];
    $salary = $_POST["salary"];
    $address = $_POST["address"];

    // Handle file upload
    $uploadDir = "uploads/resumes/";
    if (!is_dir($uploadDir))
        mkdir($uploadDir, 0777, true); // create folder if not exists

    $fileName = basename($_FILES["resume"]["name"]);
    $targetFile = $uploadDir . time() . "_" . $fileName;
    move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFile);

    // Insert data
    $stmt = $conn->prepare("INSERT INTO careers (fullname, email, phone, gender, dob, qualification, experience, salary, address, resume_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssisss", $fullname, $email, $phone, $gender, $dob, $qualification, $experience, $salary, $address, $targetFile);
    $stmt->execute();
    $stmt->close();

    header("Location: " . $_SERVER['PHP_SELF'] . "?success=true");
    exit;
}
ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- config included at top -->
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ====================================================== -->
    <style>
        .career-breadcrumb {
            background: black;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .career-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .career-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .career-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .career-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="career-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Career</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Career</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ============================================================================ -->


    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Join Our Team</h2>
                <p>Submit your application and be part of our growing Coral Web Technology.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form action="" method="POST" enctype="multipart/form-data" class="bg-white p-4 shadow rounded">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" name="fullname" placeholder="Enter your full name"
                                    class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" placeholder="Enter your email address"
                                    class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Mobile Number</label>
                                <input type="tel" name="phone" placeholder="Enter Your mobile number"
                                    class="form-control" required
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10">
                            </div>
                            <div class="col-md-6">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" class="form-select" required>
                                    <option value="">-- Select Gender --</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" name="dob" placeholder="Enter your date of birth"
                                    class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="qualification" class="form-label">Highest Qualification</label>
                                <input type="text" name="qualification" placeholder="Enter your highest qualification"
                                    class="form-control" required
                                    oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div class="col-md-6">
                                <label for="experience" class="form-label">Experience (in years)</label>
                                <input type="tel" name="experience" placeholder="Enter your experience"
                                    class="form-control" min="0" step="1" required
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            </div>
                            <div class="col-md-6">
                                <label for="salary" class="form-label">Expected Salary (Monthly)</label>
                                <input type="text" name="salary" placeholder="Enter your expected salary"
                                    class="form-control" required
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            </div>
                            <div class="col-md-12">
                                <label for="address" class="form-label">Full Address</label>
                                <textarea name="address" rows="3" placeholder="Enter your full address"
                                    class="form-control" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="resume" class="form-label">Upload Resume (PDF/DOC)</label>
                                <input type="file" name="resume" placeholder="Upload your resume" class="form-control"
                                    accept=".pdf,.doc,.docx" required>
                            </div>
                            <div class="col-md-12 form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="agree" required>
                                <label class="form-check-label" for="agree">
                                    I confirm all information is correct and I accept the terms.
                                </label>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary px-4">Submit Application</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php if (isset($_GET['success'])): ?>
        <div id="careerSuccess"
            class="toast align-items-center text-white bg-success border-0 position-fixed bottom-0 end-0 m-4" role="alert">
            <div class="d-flex">
                <div class="toast-body">
                    Application submitted successfully!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    <?php endif; ?>
    <!-- ============================================================================== -->
    <?php include 'common/footer.php'; ?>
</body>

<script>
    const toastEl = document.getElementById('careerSuccess');
    if (toastEl) {
        new bootstrap.Toast(toastEl).show();
    }
</script>

</html>