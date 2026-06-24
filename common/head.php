<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5D7GB4CB');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8" />
<meta name="google-site-verification" content="IIOU8rPCF02uyHIWxr4lMdeULGDEvB_xIxEZbJWyVnw" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

<!-- Title & SEO Meta -->
<title><?= htmlspecialchars($page_title ?? 'Best SEO & Web Development Company – Coral Web Technology') ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description ?? 'Boost your brand with Coral Web Technology, Boring Road Chauraha – expert in digital marketing, SEO services, web development & branding solutions.') ?>" />
<meta name="keywords" content="<?= htmlspecialchars($page_keywords ?? 'Coral Web Technology, digital marketing, SEO services, web development, graphic designing, lead generation, branding') ?>" />
<meta name="author" content="Coral Web Technology" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="<?= htmlspecialchars($page_canonical ?? ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])) ?>" />

<!-- Open Graph (Facebook/LinkedIn) -->
<meta property="og:type" content="website" />
<meta property="og:title" content="<?= htmlspecialchars($page_og_title ?? 'Coral Web Technology - Digital Marketing, SEO & Web Experts') ?>" />
<meta property="og:description" content="<?= htmlspecialchars($page_og_description ?? 'Coral Web Technology at Boring Road Chauraha provides results-driven digital marketing, SEO, and web development services to grow your business online.') ?>" />
<meta property="og:image" content="<?= htmlspecialchars($page_og_image ?? $base_url . 'assets/images/meta/og-image.jpg') ?>" />
<meta property="og:url" content="<?= htmlspecialchars($page_og_url ?? ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])) ?>" />
<meta property="og:site_name" content="Coral Web Technology" />

<!-- Twitter Meta -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?= htmlspecialchars($page_og_title ?? 'Coral Web Technology - Digital Marketing, SEO & Web Experts') ?>" />
<meta name="twitter:description" content="<?= htmlspecialchars($page_og_description ?? 'Located at Boring Road Chauraha, Coral Web Technology helps businesses grow online through SEO, marketing, design, and development services.') ?>" />
<meta name="twitter:image" content="<?= htmlspecialchars($page_og_image ?? $base_url . 'assets/images/meta/twitter-image.jpg') ?>" />
<meta name="twitter:site" content="@webseo" />
<?php if (isset($pageData) && is_array($pageData)): ?>
<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => $base_url,
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => $pageData['service_name'] ?? 'Service',
                    'item' => $base_url,
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => $pageData['keyword'],
                    'item' => $page_og_url ?? ($base_url . ltrim($pageData['url'], '/')),
                ],
            ],
        ],
        [
            '@type' => 'LocalBusiness',
            'name' => 'Coral Web Technology',
            'image' => $base_url . 'assets/images/logo/logo.png',
            '@id' => $base_url,
            'url' => $base_url,
            'telephone' => '+91-9117741984',
            'priceRange' => '₹₹',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Chandrakanta Appartment, Room No 201, Opposite Harihar Chamber, Boring Road Chauraha, Pandooi Kothi',
                'addressLocality' => 'Patna',
                'addressRegion' => 'Bihar',
                'postalCode' => '800001',
                'addressCountry' => 'IN',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => '25.608310',
                'longitude' => '85.122049',
            ],
            'sameAs' => [
                'https://www.facebook.com/',
                'https://www.instagram.com/',
                'https://www.linkedin.com/',
                'https://www.youtube.com/',
            ],
            'description' => $page_description ?? 'Coral Web Technology provides digital marketing, SEO, web development and branding solutions across India.',
            'areaServed' => $pageData['city'] ?? 'India',
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'What makes Coral Web Technology the best ' . ($pageData['service_name'] ?? 'service') . ' service provider in ' . ($pageData['city'] ?? 'your city') . '?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We combine local keyword expertise, industry experience, and transparent reporting to deliver measurable results for ' . ($pageData['city'] ?? 'your city') . ' customers.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How soon can I expect results from this ' . ($pageData['keyword'] ?? 'service') . ' service?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Local SEO and marketing results typically appear within 45-90 days, depending on competition and campaign scope.',
                    ],
                ],
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>
<?php endif; ?>

<!-- Favicon -->
<link rel="icon" href="<?= $base_url ?>assets/images/logo/logo.png" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="180x180" href="<?= $base_url ?>apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="<?= $base_url ?>favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="<?= $base_url ?>favicon-16x16.png" />
<!-- <link rel="manifest" href="<?= $base_url ?>site.webmanifest" /> -->
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />-->
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

