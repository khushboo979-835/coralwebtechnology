<?php
// Session and Logic at the top for proper redirection
session_start();
include 'common/config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email-username']);
    $password = $_POST['password'];

    // Using 'register' table from phpMyAdmin (Image 3)
    $stmt = $conn->prepare("SELECT * FROM register WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Verification using password_verify for security
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = isset($user['name']) ? $user['name'] : $email;
            header("Location: index.php"); // Final Dashboard Redirect
            exit();
        } else {
            echo "<script>alert('Invalid password! Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Email not found! Please register a new account.'); window.location.href='register.php';</script>";
    }
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

            <h4 class="mb-2">Admin Login 👋</h4>
            <p class="mb-4">Securely manage your Careers & Blog portals.</p>

            <form id="formAuthentication" class="mb-3" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">REGISTERED EMAIL</label>
                <input type="text" class="form-control" name="email-username" placeholder="Enter your email" required autofocus />
              </div>

              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">PASSWORD</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="············" required />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </form>

            <p class="text-center">
              <?php
              $adminCheck = mysqli_query($conn, "SELECT id FROM register LIMIT 1");
              if (mysqli_num_rows($adminCheck) == 0) {
              ?>
                <span>New on our platform? </span>
                <a href="register.php"><span>Create an account</span></a>
              <?php } else { ?>
                <span class="text-muted">Registration is closed. Please login with your admin credentials.</span>
              <?php } ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'common/footer.php'; ?>
</body>
</html>