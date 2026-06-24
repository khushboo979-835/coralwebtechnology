<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'android-app-development',
    'title' => 'Android App Development',
    'location_key' => 'mobile-app-development',
    'meta_title' => 'Android App Development Company in Patna | Coral Web Technology',
    'meta_description' => 'Build high-performance, responsive Android applications with the best Android app development company in Patna. Coral Web Technology offers expert Kotlin and Flutter coding.',
    'meta_keywords' => 'android app development company patna, android app developers, kotlin programmers, java app development, mobile app agency patna, play store upload services',
    'hero_title' => 'Robust & Feature-Rich <span>Android App Development</span>',
    'hero_desc' => 'Dominate the largest smartphone operating system. We build high-performance, responsive Android applications optimized for multiple screen ratios and manufacturers.',
    'hero_bullets' => [
        'Kotlin & Java Architecture',
        'Stunning Material UI Designs',
        'Optimized for Android Devices',
        'Play Store Publishing Support'
    ],
    'hero_img' => 'android/hero.png',
    'about_img' => 'android/about.png',
    'about_title' => 'Capture The Massive Android Mobile Market For Business Growth',
    'about_desc' => [
        'Over 90% of smartphone users in India use Android. To reach your audience, having a functional, fast-loading Android application is critical. At Coral Web Technology, we develop custom Android applications utilizing secure database queries, smooth layout changes, and native functions.',
        'We specialize in Kotlin and Java coding for native apps, as well as Flutter for high-quality cross-platform systems. We configure push notification triggers, background sync services, offline SQLite databases, and manage the final upload to the Google Play Console.'
    ],
    'about_features' => [
        'Native Kotlin Coding',
        'Material UI Frameworks',
        'Google API Integrations',
        'Tablet & Phone Responsive'
    ],
    'features' => [
        ['icon' => 'bi-android2', 'title' => 'Native Android Apps', 'desc' => 'Code high-speed native Android apps using Kotlin and Java to ensure absolute device feature access.'],
        ['icon' => 'bi-smartphone', 'title' => 'Material Design UI/UX', 'desc' => 'Apply Google\'s Material Design guidelines to build fluid, visually engaging, and modern layouts.'],
        ['icon' => 'bi-geo-alt', 'title' => 'GPS & Location Services', 'desc' => 'Integrate Google Maps and location geofencing for tracking, logistics, or delivery apps.'],
        ['icon' => 'bi-bell', 'title' => 'Firebase Push Alerts', 'desc' => 'Configure real-time notifications to alert users about orders, promotions, or chat messages.'],
        ['icon' => 'bi-database', 'title' => 'Offline SQLite Support', 'desc' => 'Enable offline data caching using SQLite or Room databases so users can read data without internet.'],
        ['icon' => 'bi-cloud-arrow-up', 'title' => 'Google Play Store Upload', 'desc' => 'Package builds, write store listings, create assets, and manage Play Store approval.' ]
    ],
    'process' => [
        ['title' => 'Android Wireframe Design', 'desc' => 'We map screen flows, designing interactive buttons and material navigation trees.'],
        ['title' => 'Backend API Development', 'desc' => 'We code secure server scripts and APIs to sync mobile data with your backend.'],
        ['title' => 'Kotlin/Flutter App Code', 'desc' => 'Our developers write frontend Android scripts, integrating layout widgets and API functions.'],
        ['title' => 'Hardware Feature Audits', 'desc' => 'We test GPS, cameras, storage accesses, and background synchronization on physical devices.'],
        ['title' => 'Play Store Submission', 'desc' => 'We sign the app build, compile target listings, configure permissions, and deploy live.']
    ],
    'benefits' => [
        ['icon' => 'bi-people-fill', 'title' => 'Reach Huge Audiences', 'desc' => 'Put your app on the devices of millions of active Android users across India and globally.'],
        ['icon' => 'bi-wallet-fill', 'title' => 'Affordable Dev Cost', 'desc' => 'Android\'s open ecosystem and developer consoles have lower fees, making development highly cost-effective.'],
        ['icon' => 'bi-cpu', 'title' => 'Direct Hardware Access', 'desc' => 'Native apps leverage cameras, Bluetooth, GPS, and biometric locks to perform advanced functions.'],
        ['icon' => 'bi-graph-up', 'title' => 'Vibrant App Store Presence', 'desc' => 'App listing reviews and ratings build brand authority, driving passive user installs from the Play Store.']
    ],
    'faqs' => [
        ['q' => 'Which language is best for native Android development?', 'a' => 'Google officially recommends Kotlin for native Android development. It is modern, secure, and fully interoperable with Java. We use Kotlin for native apps and Flutter for cross-platform apps.'],
        ['q' => 'How much does a Google Play Developer account cost?', 'a' => 'Google charges a one-time registration fee of $25 to open a Google Play Developer Console account. This account allows you to publish unlimited applications.'],
        ['q' => 'Will my app support all Android phone sizes and manufacturers?', 'a' => 'Yes! The Android ecosystem features thousands of devices (Samsung, OnePlus, Xiaomi, Vivo). We design responsive layouts and test on multiple screen sizes and OS versions to ensure consistent rendering.'],
        ['q' => 'Can you connect the app to my existing website database?', 'a' => 'Yes, we do. We build custom API bridges that allow the Android app to securely sync products, user logins, orders, or data with your main web server database.'],
        ['q' => 'How do you test the app before launching it on Google Play?', 'a' => 'We perform local emulator testing and distribute beta builds (APKs) to your team for internal testing. We also use Google Play\'s Internal Testing tracks to verify builds before submitting them for public review.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Android App Development Services',
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
        'description' => 'High-performance Kotlin & Flutter Android app development in Patna by Coral Web Technology. Professional custom Android layouts, APIs, and Play Store publishing.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
