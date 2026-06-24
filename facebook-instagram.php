<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ================================================ -->
   <section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="head-title text-center mb-4">
                <h2>Facebook / Instagram</h2>
            </div>

            <div class="col-md-6">
                <ol>
                    <li class="list-group-item">1 - 15 Professional Post Designs</li>
                    <li class="list-group-item">2 - Content Writing (Captions & Copies)</li>
                    <li class="list-group-item">3 - Hashtag Find</li>
                    <li class="list-group-item">4 - Keyword Research</li>
                    <li class="list-group-item">5 - Account Handling Services</li>
                    <li class="list-group-item">6 - Page Setup & Optimization</li>
                    <li class="list-group-item">7 - Content Strategy & Planning</li>
                    <li class="list-group-item">8 - Creative Designing</li>
                    <li class="list-group-item">9 - Festival & Trending Content Plan</li>
                    <li class="list-group-item">10 - Professional Post Designs</li>
                    <li class="list-group-item">11 - Posting & Scheduling</li>
                    <li class="list-group-item">12 - Audience Engagement</li>
                </ol>
            </div>
        </div>

        <div class="py-3 bg-light">
            <h3 class="text-danger">Pricing :-</h3>
            <div class="py-1">
                <h5 class="py-2 text-success">Facebook / Instagram (Management) Monthly Payment :- 7,000 INR</h5>
                <h5 class="py-2 text-success">Facebook / Instagram (Management) 6 Months Package :- <del>42,000</del> INR</h5>
                <h5 class="py-2 text-success">Facebook / Instagram (Management) 6 Months Package Offer Period (20% discount) One Time Payment :- 33,600 INR</h5>
            </div>
        </div>

    </div>
</section>

    <!-- ============================================================== -->
    <!-- Dynamic We Serve Across India Section -->
    <?php $service_key = 'social-media-marketing'; if (function_exists('renderServiceLocationsSection')) { renderServiceLocationsSection($service_key, $base_url); } ?>
    <?php include 'common/footer.php'; ?>
</body>

</html>
