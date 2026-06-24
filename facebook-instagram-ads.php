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
                <h2>Facebook / Instagram Ads (Meta Ads)</h2>
            </div>

            <div class="col-md-6">
                <ol>
                    <li class="list-group-item">1 Ad Campaign Setup</li>
                    <li class="list-group-item">2 Creative Ads Design</li>
                    <li class="list-group-item">3 Content Writing</li>
                    <li class="list-group-item">4 Hashtag Strategy</li>
                    <li class="list-group-item">5 Audience Targeting</li>
                </ol>
            </div>
            <div class="col-md-6">
                <ol>
                    <li class="list-group-item">6 A/B Testing</li>
                    <li class="list-group-item">7 Daily Monitoring</li>
                    <li class="list-group-item">8 Optimization</li>
                    <li class="list-group-item">9 Reporting</li>
                </ol>
            </div>
        </div>

        <div class="py-3 bg-light">
            <h3 class="text-danger">Pricing :-</h3>
            <div class="py-1">
                <h5 class="py-2 text-success">Facebook / Instagram Ads (Meta Ads) Monthly Payment :- 6,000 INR</h5>
                <h5 class="py-2 text-success">Facebook / Instagram Ads (Meta Ads) 6 Months Package :- <del>36,000</del> INR</h5>
                <h5 class="py-2 text-success">Facebook / Instagram Ads (Meta Ads) 6 Months Package Offer Period (15% discount) One Time Payment :- 30,600 INR</h5>
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
