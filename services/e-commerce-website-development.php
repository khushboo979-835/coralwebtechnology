<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <!-- ================================================ -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="head-title text-center mb-4">
                    <h2>Website Design & Development on PHP Coding (E - Commerce
                        Website)
                    </h2>
                </div>

                <div class="col-md-6">
                    <ol>
                        <li class="list-group-item">1 Custom Design: A unique layout that aligns with your brand’s
                            vision. </li>
                        <li class="list-group-item">2 Responsive Layout: OpƟmized for all devices (desktop, tablet, and
                            mobile)</li>
                        <li class="list-group-item">3 SEO-Optimized Structure: Basic SEO setup to increase
                            discoverability.
                        </li>
                        <li class="list-group-item">4 Plugin Integration: Essential plugins for security, SEO, and
                            performance. </li>
                        <li class="list-group-item">5 Social Media Integration: Links to connect visitors with your
                            social profiles.
                        </li>

                    </ol>
                </div>

                <div class="col-md-6">
                    <ol>
                        <li class="list-group-item">5 Contact Form: Enables easy communication directly from your
                            website.
                        </li>
                        <li class="list-group-item">6 Basic Content Formatting: Adding and styling the content you
                            provide.
                        </li>
                        <li class="list-group-item">7 Image Optimization: High-quality visuals that load quickly.
                        </li>

                        <h5>Optional Service - Content Creation (if required)
                        </h5>
                        <li class="list-group-item">Professional Copywriting: Engaging and original content aligned with
                            your brand voice.
                        </li>
                        <li class="list-group-item">Content OpƟmizaton: Structured to meet SEO requirements.</li>
                    </ol>
                </div>
            </div>

            <div class="py-3 bg-light">
                <h3 class="text-danger">Pricing :-</h3>
                <div class="py-1">
                    <h5 class="py-2 text-success">Website Designing (PHP) :- ₹30,000 </h5>
                    <h5 class="py-2 text-success">Content Creation (Optional) :- ₹1,000
                    </h5>
                    <li class="list-group-item">Total (with content creation): ₹30,000</li>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- Dynamic We Serve Across India Section -->
    <?php $service_key = 'website-development'; if (function_exists('renderServiceLocationsSection')) { renderServiceLocationsSection($service_key, $base_url); } ?>
    <?php include '../common/footer.php'; ?>
</body>

</html>
