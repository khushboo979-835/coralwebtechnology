<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'website-development',
    'title' => 'Website Development',
    'location_key' => 'website-development',
    'meta_title' => 'Best Website Development Company in Patna | Coral Web Technology',
    'meta_description' => 'Build fast, secure, and SEO optimized websites with the best website development company in Patna. Coral Web Technology offers expert web development services.',
    'meta_keywords' => 'website development company patna, web development services, website developer patna, php website development, custom web development, web agency patna',
    'hero_title' => 'Secure, Fast & Scalable <span>Website Development</span>',
    'hero_desc' => 'Translate visual mockups into clean, high-performance code. We build custom websites, dashboards, and enterprise web applications tailored to scale your business.',
    'hero_bullets' => [
        'Clean & Validated Code',
        '90+ PageSpeed Scores',
        'SEO Friendly Structures',
        'Advanced Database Systems'
    ],
    'hero_img' => 'website-development.jpg',
    'about_img' => 'website-development/2.webp',
    'about_title' => 'Scale Your Operations With Custom Web Development Solutions',
    'about_desc' => [
        'A website should not just look good; it must perform flawlessly. At Coral Web Technology, we develop fast-loading, secure, and SEO-optimized web systems. We avoid bloated frameworks, choosing clean codes and highly optimized database queries to ensure instant load times.',
        'We specialize in frontend designs, custom PHP systems, database architectures, and API integrations. Our developers ensure all scripts are minified, image assets are compressed, and security protocols are integrated to protect your customer data.'
    ],
    'about_features' => [
        'Highly Optimized Backend',
        'Secure Database Structures',
        'Fast API Integrations',
        'Cross-Browser Compats'
    ],
    'features' => [
        ['icon' => 'bi-file-code', 'title' => 'Custom PHP Development', 'desc' => 'Build custom, dynamic web applications, portals, and CMS systems using secure PHP structures.'],
        ['icon' => 'bi-code-slash', 'title' => 'Frontend Coding (HTML/CSS/JS)', 'desc' => 'Translate layouts into lightweight, responsive, and semantic HTML5, CSS3, and JavaScript code.'],
        ['icon' => 'bi-database', 'title' => 'Database Architecture', 'desc' => 'Design secure, normalized MySQL relational database systems structured for fast query executions.'],
        ['icon' => 'bi-link', 'title' => 'Third-Party API Integration', 'desc' => 'Connect payment gateways, SMS APIs, logistics providers, and CRM tools directly into your system.'],
        ['icon' => 'bi-shield-check', 'title' => 'Web Security Protocols', 'desc' => 'Implement SSL certificates, sanitization scripts, SQL injection blockers, and data encryption.'],
        ['icon' => 'bi-speedometer2', 'title' => 'Performance Optimization', 'desc' => 'Clean code, enable server-side caching, minify JS/CSS files, and structure assets for 90+ speeds.']
    ],
    'process' => [
        ['title' => 'Database & Tech Map', 'desc' => 'We select the technology stack, normalize database tables, and map out API endpoints.'],
        ['title' => 'Backend Core Coding', 'desc' => 'Our developers write secure backend code, build logical functions, and connect database connections.'],
        ['title' => 'Frontend Assembly', 'desc' => 'We code responsive layouts, connecting styles and interactive scripts with backend APIs.'],
        ['title' => 'Security & Performance Tune', 'desc' => 'We sanitize inputs, test script executions, compress assets, and run speed audits.'],
        ['title' => 'Beta Launch & Deploy', 'desc' => 'We deploy files to staging, run database integrity checks, configure domain records, and launch live.']
    ],
    'benefits' => [
        ['icon' => 'bi-speedometer', 'title' => 'Lightning Load Speeds', 'desc' => 'Optimized scripts and cached servers load pages instantly, lowering bounce rates and boosting SEO.'],
        ['icon' => 'bi-shield-lock-fill', 'title' => 'Rock-Solid Web Security', 'desc' => 'Sanitized inputs and encrypted databases protect your system from scripts injection and hackers.'],
        ['icon' => 'bi-gear-fill', 'title' => 'Custom Functional Rules', 'desc' => 'We write functions tailored to your exact business rules, workflows, and database needs.'],
        ['icon' => 'bi-arrow-up-right-circle', 'title' => 'Scalable System Architecture', 'desc' => 'We structure code cleanly so that new features, modules, or databases can be integrated in the future.']
    ],
    'faqs' => [
        ['q' => 'Which technology stack do you use for web development?', 'a' => 'We specialize in PHP, MySQL, HTML5, CSS3, JavaScript, Bootstrap, and popular CMS platforms. For complex, custom applications, we use clean PHP frameworks. We choose technologies that ensure fast load times, scalability, and easy maintenance.'],
        ['q' => 'Will my website load fast to satisfy Google PageSpeed?', 'a' => 'Yes! Speed is our priority. We minify stylesheets and script files, compress images to WebP format, implement lazy loading, and write clean codes to ensure your website achieves 90+ scores on PageSpeed audits.'],
        ['q' => 'Can you integrate payment gateways like Razorpay or Paytm?', 'a' => 'Yes, we do! We integrate payment gateways (Razorpay, Paytm, Stripe, PayPal), SMS alerts, email notification services, and CRM databases directly into your web system.'],
        ['q' => 'Do you provide website hosting and domain registration?', 'a' => 'Yes. We assist you in selecting the right hosting package (shared, VPS, or cloud) and registering your domain. We manage the server setup, SSL configuration, and domain connection for you.'],
        ['q' => 'What support do you offer after the website goes live?', 'a' => 'We provide 3 to 12 months of free maintenance support (depending on the package) to resolve bugs, apply security patches, and perform basic updates. We also offer extended monthly maintenance plans.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Website Development Services',
        'provider' => [
            '@type' => 'LocalBusiness',
            'name' => 'Coral Web Technology',
            'image' => 'https://coralwebtechnology.com/assets/images/logo/logo.png',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Chandrakanta Appartment, Room No:- 201, Opposite Harihar Chamber, Boring Road Chauraha',
                'addressLocality' => 'Patna',
                'addressRegion' => 'Bihar',
                'postalCode' => '800001',
                'addressCountry' => 'IN'
            ]
        ],
        'description' => 'Fast, secure, and responsive web development in Patna by Coral Web Technology. Professional custom PHP development, API integrations, and database designs.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
