<?php
include 'common/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $number   = trim($_POST['number'] ?? '');
    $services = trim($_POST['services'] ?? '');
    $message  = trim($_POST['message'] ?? ($_POST['requirement'] ?? ''));
    $redirect = trim($_POST['redirect_to'] ?? 'thank-you.php');

    // Security: block external redirects
    if (strpos($redirect, 'http') === 0 || strpos($redirect, '//') === 0) {
        $redirect = 'thank-you.php';
    }

    // ─── 1. SAVE TO DATABASE ─────────────────────────────────────────────────
    if ($conn) {
        // Create table if it doesn't exist
        $conn->query("CREATE TABLE IF NOT EXISTS `enquiries` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `name` VARCHAR(255) NOT NULL,
            `email` VARCHAR(255) DEFAULT '',
            `phone` VARCHAR(50) DEFAULT '',
            `service` VARCHAR(255) DEFAULT '',
            `message` TEXT DEFAULT '',
            `source_page` VARCHAR(500) DEFAULT '',
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

        $source_page = $_SERVER['HTTP_REFERER'] ?? 'direct';

        $stmt = $conn->prepare("INSERT INTO `enquiries` (`name`, `email`, `phone`, `service`, `message`, `source_page`) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssssss", $name, $email, $number, $services, $message, $source_page);
            $stmt->execute();
            $stmt->close();
        }
    }

    // ─── 2. SEND EMAIL ───────────────────────────────────────────────────────
    $to      = "coralwebtechnology@gmail.com";
    $subject = "=?UTF-8?B?" . base64_encode("New Enquiry: $services - $name") . "?=";

    // Build HTML email body
    $html_body = '<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body style="font-family:Arial,sans-serif;background:#f5f5f5;margin:0;padding:20px;">
<div style="max-width:600px;margin:0 auto;background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,0.08);">
  <div style="background:linear-gradient(135deg,#ea5f23,#d84e15);padding:30px 35px;text-align:center;">
    <h1 style="color:#ffffff;margin:0;font-size:22px;letter-spacing:0.5px;">🔔 New Enquiry Received</h1>
    <p style="color:rgba(255,255,255,0.85);margin:8px 0 0;font-size:14px;">Coral Web Technology — Lead Notification</p>
  </div>
  <div style="padding:35px;">
    <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
      <tr>
        <td style="padding:12px 0;border-bottom:1px solid #f0f0f0;">
          <span style="color:#8a94a6;font-size:13px;text-transform:uppercase;letter-spacing:0.5px;">Name</span><br>
          <strong style="color:#101010;font-size:16px;">' . htmlspecialchars($name) . '</strong>
        </td>
      </tr>
      <tr>
        <td style="padding:12px 0;border-bottom:1px solid #f0f0f0;">
          <span style="color:#8a94a6;font-size:13px;text-transform:uppercase;letter-spacing:0.5px;">Phone / Mobile</span><br>
          <strong style="color:#101010;font-size:16px;">📞 ' . htmlspecialchars($number) . '</strong>
        </td>
      </tr>
      <tr>
        <td style="padding:12px 0;border-bottom:1px solid #f0f0f0;">
          <span style="color:#8a94a6;font-size:13px;text-transform:uppercase;letter-spacing:0.5px;">Email</span><br>
          <strong style="color:#101010;font-size:16px;">✉️ ' . htmlspecialchars($email) . '</strong>
        </td>
      </tr>
      <tr>
        <td style="padding:12px 0;border-bottom:1px solid #f0f0f0;">
          <span style="color:#8a94a6;font-size:13px;text-transform:uppercase;letter-spacing:0.5px;">Service Interested In</span><br>
          <strong style="color:#ea5f23;font-size:16px;">' . htmlspecialchars($services) . '</strong>
        </td>
      </tr>
      <tr>
        <td style="padding:12px 0;">
          <span style="color:#8a94a6;font-size:13px;text-transform:uppercase;letter-spacing:0.5px;">Requirements / Message</span><br>
          <p style="color:#101010;font-size:15px;margin:8px 0 0;line-height:1.6;">' . nl2br(htmlspecialchars($message ?: 'No message provided')) . '</p>
        </td>
      </tr>
    </table>

    <div style="background:#fff8f5;border:1px solid #fde8dc;border-radius:8px;padding:16px;margin-top:25px;">
      <p style="margin:0;font-size:13px;color:#8a94a6;">📅 Received on: <strong>' . date('d M Y, h:i A') . '</strong></p>
      <p style="margin:6px 0 0;font-size:13px;color:#8a94a6;">🌐 Source: <strong>' . htmlspecialchars($_SERVER['HTTP_REFERER'] ?? 'Direct') . '</strong></p>
    </div>

    <div style="margin-top:25px;text-align:center;">
      <a href="https://wa.me/919117741984?text=' . urlencode("New enquiry from $name - Phone: $number - Service: $services") . '" style="display:inline-block;background:#25D366;color:#ffffff;text-decoration:none;padding:12px 30px;border-radius:50px;font-weight:bold;font-size:15px;">💬 Reply on WhatsApp</a>
    </div>
  </div>
  <div style="background:#f8fafd;padding:20px;text-align:center;border-top:1px solid #eef1f6;">
    <p style="margin:0;font-size:13px;color:#8a94a6;">© ' . date('Y') . ' Coral Web Technology | coralwebtechnology.com</p>
  </div>
</div>
</body>
</html>';

    // Email headers
    $boundary = md5(uniqid(time()));
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: Coral Web Enquiry <no-reply@coralwebtechnology.com>\r\n";
    $headers .= "Reply-To: $name <$email>\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    $mail_sent = mail($to, $subject, $html_body, $headers);

    // ─── 3. REDIRECT ─────────────────────────────────────────────────────────
    // Always redirect (even if mail fails — data is already in DB)
    $query_params = [
        'name'    => $name,
        'email'   => $email,
        'phone'   => $number,
        'service' => $services,
        'msg'     => $message
    ];

    $separator = (strpos($redirect, '?') === false) ? '?' : '&';
    $redirect .= $separator . http_build_query($query_params);

    header("Location: " . $base_url . ltrim($redirect, '/'));
    exit;

} else {
    // Not a POST request — redirect home
    header("Location: /");
    exit;
}
?>