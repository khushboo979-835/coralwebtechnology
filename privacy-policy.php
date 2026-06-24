<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ====================================================== -->
    <style>
        .privacy-policy-breadcrumb {
            background: black;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
        }

        .privacy-policy-breadcrumb h1 {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            font-size: 70px;
        }

        @media screen and (max-width: 768px) {
            .privacy-policy-breadcrumb h1 {
                font-size: 50px;
            }
        }

        .privacy-policy-breadcrumb a {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .privacy-policy-breadcrumb .active {
            color: var(--tertiary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="privacy-policy-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Privacy Policy</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ============================================================================ -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Coral Web Technology ("we", "our", "us") respects your privacy. This policy explains what
                        data we
                        collect, how we use it, and the choices you have when you use our website <span
                            class="text-danger">coralwebtechnology.com</span> and our services.
                    </p>
                    <h2> Information we collect</h2>
                    <h3>Personal information you provide</h3>
                    <ul>
                        <li>Name, email, phone, company details when you contact us or request a quote.</li>
                        <li>Project details, content, and files you share for service delivery.</li>
                    </ul>
                    <h3>Automatic data</h3>
                    <ul>
                        <li>IP address, device and browser data, pages viewed, and timestamps.</li>
                        <li>Approximate location derived from IP.</li>
                    </ul>
                    <h3>Third-party sources</h3>
                    <p>We may receive limited information from analytics, payment, hosting, and communication providers
                        to run our
                        services.</p>
                    <div class="py-3">
                        <h2> How we use your information</h2>
                        <ul>
                            <li>Respond to inquiries and provide proposals and services.</li>
                            <li>Operate, maintain, and improve our website and support.</li>
                            <li>Send important updates about projects, invoices, or policy changes.</li>
                            <li>Marketing communications (you can opt out anytime).</li>
                            <li>Compliance with legal obligations and to prevent misuse.</li>
                        </ul>
                    </div>
                    <div class="py-3">
                        <h2> Information sharing</h2>
                        <p>We don’t sell or rent your personal data. We share information only with trusted vendors
                            needed to deliver
                            our services (for example: cloud hosting, email/SMS, payment gateways, analytics). Each
                            vendor processes
                            data under their own policies and only as necessary.</p>
                    </div>
                    <div class="py-3">
                        <h2> Cookies & tracking</h2>
                        <p>We use essential cookies for site functionality and optional analytics cookies to understand
                            usage. You can
                            control cookies in your browser settings. If you implement a cookie banner, link it here for
                            preferences.
                        </p>
                        <ul>
                            <li>Essential: session, security, load balancing.</li>
                            <li>Analytics/Performance: traffic insights and page performance.</li>
                        </ul>
                    </div>
                    <div class="py-3">
                        <h2> Data security</h2>
                        <p>We use reasonable administrative, technical, and physical safeguards to protect information.
                            No online method
                            is 100% secure, so we cannot guarantee absolute security.</p>
                    </div>
                    <div class="py-2">
                        <h2> Data retention</h2>
                        <p>We keep personal data only as long as needed for the purposes above, to comply with law,
                            resolve disputes,
                            and enforce agreements.</p>
                    </div>
                    <div class="py-3">
                        <h2> Your rights</h2>
                        <ul>
                            <li>Access, update, or delete your information.</li>
                            <li>Withdraw consent for marketing at any time.</li>
                            <li>Request a copy of your data (where applicable).</li>
                        </ul>
                        <p>To exercise your rights, contact us using the details below.</p>
                    </div>

                    <div class="py-2">
                        <h2> Children’s privacy</h2>
                        <p>Our services are intended for business users. We do not knowingly collect data from children
                            under 13.</p>
                    </div>
                    <div class="py-2">
                        <h2> Changes to this policy</h2>
                        <p>We may update this policy from time to time. We’ll revise the date at the top and, if changes
                            are
                            significant, provide a notice on the site.</p>
                    </div>
                    <div class="py-2">
                        <h2> Contact us</h2>
                        <p><strong>Coral Web Technology</strong><br>
                            Room No - 201, Opposite Harihar Chamber, Chandrakanta Apartment, Boring Road, Patna, Bihar
                            800001, India<br>
                            Email: <a
                                href="mailto:coralwebtechnology@gmail.com">coralwebtechnology@gmail.com</a><br>
                            Phone: <a href="tel:+91 9117741984">+91 91177 41984</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================================== -->
    <?php include 'common/footer.php'; ?>
</body>
</html>