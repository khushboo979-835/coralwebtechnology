<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NBMSZ2NP');</script>
    <!-- End Google Tag Manager -->
    <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'form_submit_success',
            'form_name': 'Contact Us Form',
            'page_path': window.location.pathname
        });
    </script>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #eef2f7, #f9fbff);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .thank-card {
            background: #fff;
            padding: 45px 40px;
            border-radius: 14px;
            max-width: 520px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            animation: fadeUp 0.6s ease;
        }

        .icon-wrap {
            width: 70px;
            height: 70px;
            background: #0d6efd;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin: 0 auto 20px;
        }

        .thank-card h1 {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .thank-card p {
            color: #555;
            margin-bottom: 28px;
            line-height: 1.6;
        }

        .btn-home {
            padding: 10px 26px;
            border-radius: 8px;
            font-weight: 500;
        }

        .redirect-text {
            font-size: 13px;
            color: #777;
            margin-top: 18px;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBMSZ2NP"
    height="0" width="0" style="display:none;visibility:hidden" title="Google Tag Manager"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="thank-card">
        <div class="icon-wrap">
            <i class="bi bi-check-lg"></i>
        </div>

        <h1>Thank You!</h1>
        <p>
            Your message has been sent successfully.  
            Our team will review your request and contact you shortly.
        </p>

        <a href="index.php" class="btn btn-primary btn-home">
            Back to Home
        </a>

    </div>

</body>
</html>
