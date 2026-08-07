<?php 
include '../../common/config.php'; 

// Fetch form details from URL query parameters
$name = trim($_GET['name'] ?? '');
$email = trim($_GET['email'] ?? '');
$phone = trim($_GET['phone'] ?? '');
$service = trim($_GET['service'] ?? '');
$msg = trim($_GET['msg'] ?? '');

// Construct WhatsApp message
$wa_message = "*New Mobile App Enquiry Received*\n\n";
if ($name) $wa_message .= "*Name:* " . $name . "\n";
if ($email) $wa_message .= "*Email:* " . $email . "\n";
if ($phone) $wa_message .= "*Phone:* " . $phone . "\n";
if ($service) $wa_message .= "*Service:* " . $service . "\n";
if ($msg) $wa_message .= "*Requirements:* " . $msg . "\n";

$wa_link = "https://wa.me/919117741984?text=" . urlencode($wa_message);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Thank You - Coral Web Technology';
    $page_description = 'Thank you for reaching out to Coral Web Technology. We have successfully received your mobile app development inquiry and will contact you shortly.';
    $page_canonical = $base_url . 'mobile-app-development-company-in-india/thank-you/';
    ?>
    <?php include '../../common/head.php'; ?>
    <?php include '../../common/plugins.php'; ?>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Roboto:wght@400;500;700;900&display=swap');
        
        :root {
            --primary: #ea5f23; /* Coral Orange */
            --secondary: #2760ca; /* Royal Blue */
            --dark: #101010;
            --light-bg: #ffffff;
            --soft-bg: #fdfdfd;
            --border-color: #eef1f6;
            --text-main: #2b2b2b;
            --text-muted: #5e6670;
            --accent-glow: rgba(234, 95, 35, 0.1);
            --call-glow: 234, 95, 35;
        }
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif !important; 
            color: var(--text-main); 
            background: var(--soft-bg); 
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto', sans-serif !important;
            font-weight: 700;
            color: var(--dark);
        }

        /* Custom Distraction-Free Header */
        .landing-header {
            background: #ffffff;
            border-bottom: 1px solid var(--border-color);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            width: 100%;
        }
        .header-logo {
            display: inline-block;
        }

        /* Main Content Wrapper */
        .thank-you-wrapper {
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
        }

        .thank-you-card {
            background: #ffffff;
            border-radius: 24px;
            padding: 50px 40px;
            max-width: 650px;
            width: 100%;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(0, 0, 0, 0.02);
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        /* Success Animation */
        .success-checkmark {
            width: 80px;
            height: 80px;
            margin: 0 auto 30px;
            background: rgba(40, 167, 69, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            animation: scaleIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) both;
        }

        .success-checkmark i {
            font-size: 40px;
            color: #28a745;
            animation: rotateCheck 0.6s ease-in-out;
        }

        /* Step Timeline */
        .process-steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            margin: 40px 0;
            padding: 0 10px;
        }

        .process-steps::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 10%;
            right: 10%;
            height: 3px;
            background: #eef1f6;
            z-index: 1;
        }

        .step-item {
            position: relative;
            z-index: 2;
            flex: 1;
            text-align: center;
        }

        .step-badge {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #eef1f6;
            color: #8a94a6;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin: 0 auto 10px;
            transition: all 0.3s ease;
            border: 3px solid #ffffff;
            box-shadow: 0 0 0 1px #eef1f6;
        }

        .step-item.completed .step-badge {
            background: #28a745;
            color: #ffffff;
            box-shadow: 0 0 0 1px #28a745;
        }

        .step-item.active .step-badge {
            background: var(--primary);
            color: #ffffff;
            box-shadow: 0 0 0 1px var(--primary);
            animation: pulse-ring 1.5s infinite;
        }

        .step-title {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-muted);
            margin-top: 5px;
        }

        .step-item.completed .step-title {
            color: #28a745;
        }

        .step-item.active .step-title {
            color: var(--dark);
            font-weight: 700;
        }

        /* Buttons & CTAs */
        .cta-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .btn-theme-primary {
            background: var(--primary);
            color: #ffffff !important;
            border: 2px solid var(--primary);
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(234, 95, 35, 0.15);
        }

        .btn-theme-primary:hover {
            background: #d84e15;
            border-color: #d84e15;
            transform: translateY(-2px);
        }

        .btn-theme-outline {
            background: transparent;
            color: var(--dark) !important;
            border: 2px solid var(--dark);
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .btn-theme-outline:hover {
            background: var(--dark);
            color: #ffffff !important;
            transform: translateY(-2px);
        }

        .redirect-text {
            font-size: 14px;
            color: var(--text-muted);
            margin-top: 25px;
        }

        .redirect-text a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        /* Footer */
        .landing-footer {
            background: #ffffff;
            border-top: 1px solid var(--border-color);
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
            color: var(--text-muted);
            width: 100%;
        }

        /* Animations */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes rotateCheck {
            0% {
                transform: scale(0) rotate(-45deg);
                opacity: 0;
            }
            70% {
                transform: scale(1.2) rotate(10deg);
            }
            100% {
                transform: scale(1) rotate(0);
                opacity: 1;
            }
        }

        @keyframes pulse-ring {
            0% {
                box-shadow: 0 0 0 0 rgba(234, 95, 35, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(234, 95, 35, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(234, 95, 35, 0);
            }
        }
    </style>
</head>
<body>

    <!-- Simplified Header -->
    <header class="landing-header">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="<?= $base_url; ?>" class="header-logo">
                    <img src="<?= $base_url; ?>assets/images/logo/logo.png" alt="Coral Web Technology" style="height: 48px; width: auto; object-fit: contain;">
                </a>
                <a href="tel:+918102549601" class="btn-theme-outline py-2 px-4" style="font-size: 15px;">
                    <i class="bi bi-telephone-fill"></i> Talk to Expert
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="thank-you-wrapper">
        <div class="container d-flex justify-content-center">
            <div class="thank-you-card">
                <div class="success-checkmark">
                    <i class="bi bi-check-circle-fill"></i>
                </div>
                
                <h1 class="fw-bold mb-3">Inquiry Received Successfully!</h1>
                <p class="text-muted px-md-4">
                    Thank you for contacting us regarding <strong>Mobile App Development</strong>. Our app developers and product managers are analyzing your platform (iOS/Android) features and design preferences. We will connect with you within 24 hours.
                </p>

                <!-- Process Steps -->
                <div class="process-steps">
                    <div class="step-item completed">
                        <div class="step-badge"><i class="bi bi-check-lg"></i></div>
                        <div class="step-title">Enquiry Sent</div>
                    </div>
                    <div class="step-item active">
                        <div class="step-badge">2</div>
                        <div class="step-title">App Concept</div>
                    </div>
                    <div class="step-item">
                        <div class="step-badge">3</div>
                        <div class="step-title">Prototype Plan</div>
                    </div>
                </div>

                <!-- CTAs -->
                <div class="cta-group">
                    <a href="../" class="btn-theme-outline">
                        <i class="bi bi-arrow-left"></i> Back to Page
                    </a>
                    <a href="<?= $wa_link ?>" class="btn-theme-primary" target="_blank">
                        <i class="bi bi-whatsapp"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Simplified Footer -->
    <footer class="landing-footer">
        <div class="container">
            &copy; <?= date('Y'); ?> Coral Web Technology. All Rights Reserved.
        </div>
    </footer>


</body>
</html>
