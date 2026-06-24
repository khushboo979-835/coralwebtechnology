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
                <h2>Google Ads</h2>
            </div>

            <div class="col-md-6">
                <ol>
                    <li class="list-group-item">1 Google Ads Account Setup</li>
                    <li class="list-group-item">2 Create Search Campaign</li>
                    <li class="list-group-item">3 Location Targeting Cost Per Click Bidding Strategy</li>
                    <li class="list-group-item">4 Checking the Reports of Conversion Tracking Display Campaign call to Action Ads, Title Ads</li>
                </ol>
            </div>
            <div class="col-md-6">
                <ol>
                    <li class="list-group-item">5 Understanding Cost Per Thousand Impression Bid (CPM) Ad Delivery Ad Scheduling</li>
                    <li class="list-group-item">6 Searching Keywords negative Keywords Ads Technique Techniques</li>
                    <li class="list-group-item">7 Ideal Customer Targeting, Faster Outcome, Risen Conversion Rate, One-Time Campaign Promotions, Customisable, Easy-To-Track Data, Access to Multiple Channels</li>
                </ol>
            </div>
        </div>

        <div class="py-3 bg-light">
    <h3 class="text-danger">Pricing :-</h3>
    <div class="py-1">
        <h5 class="py-2 text-success">Google Adwords Monthly Payment :- 11,000 INR</h5>
        <h5 class="py-2 text-success">Google Adwords 6 Months Package Payment :- <del>66,000</del> INR</h5>
        <h5 class="py-2 text-success">Google Adwords 6 Months Package Offer Period (20% discount) One Time Payment :- 52,800 INR</h5>
        <h5 class="py-2 text-success">Google Adwords 1 Year Package Payment :- <del>1,32,000</del> INR</h5>
        <h5 class="py-2 text-success">Google Adwords 1 Year Package Offer Period (30% discount) One Time Payment :- 92,400 INR</h5>
    </div>
</div>


    </div>
</section>

    <!-- ============================================================== -->
    <!-- Dynamic We Serve Across India Section -->
    <?php $service_key = 'paid-marketing'; if (function_exists('renderServiceLocationsSection')) { renderServiceLocationsSection($service_key, $base_url); } ?>
    <?php include '../common/footer.php'; ?>
</body>

</html>
