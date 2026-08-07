<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'wordpress-development',
    'title' => 'WordPress Development',
    'location_key' => 'website-development',
    'meta_title' => 'WordPress Website Development Company in Patna | Coral Web Technology',
    'meta_description' => 'Build premium, responsive, and SEO friendly WordPress websites with the best WordPress company in Patna. Coral Web Technology offers theme and plugin customization.',
    'meta_keywords' => 'wordpress development company patna, wordpress website services, wordpress designer patna, woocommerce development, wordpress custom plugins, website developer',
    'hero_title' => 'Stunning & Customized <span>WordPress Development</span>',
    'hero_desc' => 'Manage your site content with absolute ease. We build custom WordPress websites, blogs, and WooCommerce stores designed for high speeds and security.',
    'hero_bullets' => [
        'Easy Content Management',
        'Custom Theme Coding',
        'High Speed Optimization',
        'Secure Plugin Configurations'
    ],
    'hero_img' => 'wordpress-development.png',
    'about_img' => 'custom/1.webp',
    'about_title' => 'Dominate Your Niche With Customized WordPress Solutions',
    'about_desc' => [
        'WordPress powers over 40% of the web due to its incredible flexibility. However, poor configuration or bloated templates can make WordPress slow and insecure. At Coral Web Technology, we develop clean, fast-loading, and secure WordPress websites designed around lightweight themes.',
        'We customize admin panels, build custom post structures, code custom page layouts, and configure reliable plugin systems. We ensure your team can edit titles, upload blogs, and change images without writing a single line of code.'
    ],
    'about_features' => [
        'Lightweight Theme Coding',
        'Advanced Custom Fields',
        'Frictionless Page Builders',
        'Automated Backup Setups'
    ],
    'features' => [
        ['icon' => 'bi-wordpress', 'title' => 'Custom Theme Development', 'desc' => 'Code unique, lightweight WordPress themes from scratch or customize premium templates to match your brand.'],
        ['icon' => 'bi-cart-check', 'title' => 'WooCommerce Integration', 'desc' => 'Convert your site into an online store with product category pages, cart flows, and payment gateway connect.'],
        ['icon' => 'bi-gear-wide-connected', 'title' => 'Plugin Configuration & Code', 'desc' => 'Select and set up secure plugins, or code custom functionalities that match your business flow.'],
        ['icon' => 'bi-shield-check', 'title' => 'WordPress Security Hardening', 'desc' => 'Block login brute forces, hide admin directories, sanitise files, and prevent malware injections.'],
        ['icon' => 'bi-speedometer2', 'title' => 'Speed & Database Optimization', 'desc' => 'Configure caching policies, compress images, clean database tables, and clean redundant styles.'],
        ['icon' => 'bi-cloud-upload', 'title' => 'Migration & Backup Setup', 'desc' => 'Safely migrate your site to faster servers and set up automatic backup routines to cloud storage.']
    ],
    'process' => [
        ['title' => 'Outline & Plugin Map', 'desc' => 'We define the content structures, select key plugins, and map out the layout themes.'],
        ['title' => 'WordPress Setup & Theme', 'desc' => 'We configure WordPress on staging servers, creating child themes and layout frameworks.'],
        ['title' => 'Custom Field Coding', 'desc' => 'We set up custom post structures and editable fields to make back-end editing simple.'],
        ['title' => 'WooCommerce & Setup', 'desc' => 'We integrate payment systems, configure shipping rules, and build product detail formats.'],
        ['title' => 'Speed Optimization & Launch', 'desc' => 'We clean databases, optimize asset delivery, run security tests, and deploy files to live servers.']
    ],
    'benefits' => [
        ['icon' => 'bi-pencil-square', 'title' => 'Frictionless Admin Panel', 'desc' => 'Add new pages, publish blogs, and update prices in seconds without hiring a programmer.'],
        ['icon' => 'bi-currency-rupee', 'title' => 'Lower Maintenance Costs', 'desc' => 'WordPress is open source, keeping license costs zero and lowering long-term management expenses.'],
        ['icon' => 'bi-lightning-fill', 'title' => 'Search Engine Friendly', 'desc' => 'WordPress clean code and plugin ecosystems (like RankMath/Yoast) simplify index management and SEO setups.'],
        ['icon' => 'bi-puzzle-fill', 'title' => 'Infinite Scaling Plugins', 'desc' => 'Choose from thousands of verified plugins to add booking calendars, membership areas, or forums instantly.']
    ],
    'faqs' => [
        ['q' => 'Is WordPress good for business websites?', 'a' => 'Yes, WordPress is excellent for business websites. It is user-friendly, highly customizable, and SEO-optimized. It allows you to manage content without technical skills, saving you time and money.'],
        ['q' => 'Will I be able to update content myself?', 'a' => 'Yes! We build WordPress sites using intuitive drag-and-drop page builders and custom fields. We provide a full video training tutorial guiding you on how to change texts, add images, and post blogs.'],
        ['q' => 'How do you keep WordPress websites secure?', 'a' => 'We implement strict security measures: changing default login paths, enforcing strong passwords, setting up automatic backups, installing security firewalls, and keeping themes and plugins updated to prevent vulnerability exploits.'],
        ['q' => 'Can you convert my existing HTML website to WordPress?', 'a' => 'Yes! We can import your existing design, copy, and ranking URLs, recreate the exact layout inside a custom WordPress theme, and set up the admin dashboard for easy management.'],
        ['q' => 'Do you build WooCommerce e-commerce stores?', 'a' => 'Yes, we specialize in WooCommerce development. We configure payment checkouts, invoice generation, discount coupons, shipping rates, and product catalog pages.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'WordPress Development Services',
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
        'description' => 'Fast customized WordPress development in Patna by Coral Web Technology. Professional custom theme development, plugin configurations, and WooCommerce setups.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
