<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NBMSZ2NP');</script>
<!-- End Google Tag Manager -->

<!-- Global Event Tracking Script for GTM -->
<script>
(function() {
    // Ensure dataLayer is initialized
    window.dataLayer = window.dataLayer || [];

    // Helper function to push event to dataLayer
    function pushToDataLayer(eventData) {
        window.dataLayer.push(eventData);
        // Log to console for easier debugging in GTM Preview mode
        console.log('[GTM Tracking]', eventData);
    }

    // Helper to get element text safely
    function getElementText(element) {
        var text = element.innerText || element.textContent || '';
        return text.replace(/\s+/g, ' ').trim();
    }

    // 1. Listen for Click Events
    document.addEventListener('click', function(e) {
        var target = e.target;
        // Traverse up the DOM to find an anchor tag (A)
        while (target && target !== document) {
            if (target.tagName === 'A') {
                var href = target.getAttribute('href') || '';
                var text = getElementText(target);
                var classes = target.className || '';
                var id = target.id || '';

                // Case A: WhatsApp Click
                if (href.indexOf('wa.me') > -1 || 
                    href.indexOf('whatsapp.com') > -1 || 
                    classes.indexOf('floating-whatsapp') > -1 || 
                    classes.indexOf('btn-whatsapp-mob') > -1 ||
                    id.indexOf('whatsapp') > -1) {
                    
                    pushToDataLayer({
                        'event': 'whatsapp_click',
                        'click_text': text || 'WhatsApp Chat',
                        'click_url': href,
                        'click_class': classes,
                        'click_id': id,
                        'page_path': window.location.pathname,
                        'page_url': window.location.href
                    });
                    return; // Avoid duplicate triggers if it matches both
                }

                // Case B: Call Click
                if (href.indexOf('tel:') > -1 || 
                    classes.indexOf('btn-call-pro') > -1 ||
                    classes.indexOf('btn-call') > -1 ||
                    id.indexOf('call') > -1) {
                    
                    pushToDataLayer({
                        'event': 'call_click',
                        'click_text': text || 'Call Now',
                        'click_url': href,
                        'click_class': classes,
                        'click_id': id,
                        'page_path': window.location.pathname,
                        'page_url': window.location.href
                    });
                    return;
                }
            }
            target = target.parentNode;
        }
    }, true); // Use capture phase to intercept click

    // 2. Listen for Form Submit Events
    document.addEventListener('submit', function(e) {
        var form = e.target;
        
        // Validation check (e.g. Bootstrap needs-validation or HTML5 validation)
        if (form.checkValidity && !form.checkValidity()) {
            return;
        }

        var formId = form.id || '';
        var formClass = form.className || '';
        var formAction = form.getAttribute('action') || '';
        
        // Determine form name based on characteristics
        var formName = form.getAttribute('name') || '';
        if (!formName) {
            if (formId === 'leadFormPopup' || formClass.indexOf('popup-form') > -1) {
                formName = 'Lead Popup Form';
            } else if (formId === 'whatsappForm' || formClass.indexOf('whatsapp-form') > -1) {
                formName = 'WhatsApp Course Enquiry Form';
            } else if (formId === 'enquiryForm' || formId === 'modalEnquiryForm' || formClass.indexOf('enquiry-form') > -1 || formAction.indexOf('enquiry') > -1) {
                formName = 'Modal Enquiry Form';
            } else if (formAction.indexOf('send-mail.php') > -1 || formId.indexOf('contact') > -1) {
                formName = 'Contact Us Form';
            } else if (window.location.pathname.indexOf('schedule-meeting') > -1) {
                formName = 'Schedule Meeting Form';
            } else if (window.location.pathname.indexOf('careers') > -1) {
                formName = 'Careers Form';
            } else {
                formName = 'General Form Submission';
            }
        }

        pushToDataLayer({
            'event': 'form_submit',
            'form_name': formName,
            'form_id': formId,
            'form_class': formClass,
            'form_action': formAction,
            'page_path': window.location.pathname,
            'page_url': window.location.href
        });
    }, true); // Use capture phase to catch before stopPropagation
})();
</script>
<!-- End Global Event Tracking Script -->
<meta charset="UTF-8" />
<meta name="google-site-verification" content="IIOU8rPCF02uyHIWxr4lMdeULGDEvB_xIxEZbJWyVnw" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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

