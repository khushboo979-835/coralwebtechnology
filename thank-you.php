<!DOCTYPE html>
<html lang="en">
<head>
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

        <div class="redirect-text">
            You will be redirected to the homepage in <span id="count">5</span> seconds.
        </div>
    </div>

    <script>
        let timeLeft = 5;
        const counter = document.getElementById('count');

        const timer = setInterval(() => {
            timeLeft--;
            counter.textContent = timeLeft;

            if (timeLeft <= 0) {
                clearInterval(timer);
                window.location.href = "https://coralwebtechnology.com/";
            }
        }, 1000);
    </script>

</body>
</html>
