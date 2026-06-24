<?php
// Logic at top for redirection safety
include 'common/config.php'; 

// One-Time Registration Logic: Redirect if an admin already exists
$adminCheck = mysqli_query($conn, "SELECT id FROM register LIMIT 1");
if (mysqli_num_rows($adminCheck) > 0) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Strong Validations
    if (empty($name) || empty($email) || empty($password)) {
        echo "<script>alert('Please fill all fields');</script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match! Please try again.');</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format');</script>";
    } else {

        // Check if email already exists in 'register' table (from Image 3)
        $check = $conn->prepare("SELECT id FROM register WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            echo "<script>alert('This Email is already registered! Redirecting to Login.'); window.location.href='login.php';</script>";
        } else {
            // Hash password for security
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // INSERT with 'name' column as seen in phpMyAdmin
            $stmt = $conn->prepare("INSERT INTO register (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $hashed_password);

            if ($stmt->execute()) {
                echo "<script>alert('Registration successful! Welcome, $name. Please login.'); window.location.href='login.php';</script>";
            } else {
                echo "<script>alert('Database Error: " . $conn->error . "');</script>";
            }
            $stmt->close();
        }
        $check->close();
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<?php include 'common/head.php'; ?>
<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <div class="card shadow">
          <div class="card-body">
            <!-- Branding -->
            <div class="app-brand justify-content-center">
              <span class="app-brand-text demo text-body fw-bolder mb-3">Coral Web Technology</span>
            </div>
            
            <h4 class="mb-2">Admin Registration 🚀</h4>
            <p class="mb-4">Stronger, Secure access for Coral Admins.</p>

            <form id="formAuthentication" class="mb-3" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">FULL NAME</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your full name" required autofocus />
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">EMAIL ADDRESS</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your valid email" required />
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">PASSWORD</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="············" required />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="confirm-password">CONFIRM PASSWORD</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="confirm-password" class="form-control" name="confirm-password" placeholder="············" required />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <button class="btn btn-primary d-grid w-100" type="submit" name="submit">Create Admin Account</button>
            </form>

            <p class="text-center">
              <span>Already have an account?</span>
              <a href="login.php"><span>Sign in instead</span></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'common/footer.php'; ?>
</body>
</html>