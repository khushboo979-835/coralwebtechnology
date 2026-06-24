<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'mobile-app-development',
    'title' => 'Mobile App Development',
    'location_key' => 'mobile-app-development',
    'meta_title' => 'Mobile App Development Company in Patna | Coral Web Technology',
    'meta_description' => 'Build high-performance Android & iOS applications with the best mobile app development company in Patna. Coral Web Technology offers expert Flutter, React Native, and native app coding.',
    'meta_keywords' => 'mobile app development company patna, app development services, flutter app developers patna, react native agency, android app development, ios app development patna',
    'hero_title' => 'Premium & High-Performance <span>Mobile App Development</span>',
    'hero_desc' => 'Engage your users on their smartphones. We build feature-rich, high-performance Android and iOS mobile applications designed with stunning UI/UX layouts and secure APIs.',
    'hero_bullets' => [
        'Native & Cross-Platform (Flutter)',
        'Stunning App Interfaces',
        'Secure API & Backend Codes',
        'App Store & Play Store Launches'
    ],
    'hero_img' => 'app-development/1.webp',
    'about_img' => 'app-development/2.webp',
    'about_title' => 'Build A Powerful Mobile Application For Your Business Growth',
    'about_desc' => [
        'A mobile application puts your business directly in your customers’ pockets. At Coral Web Technology, we develop highly interactive, fast-loading, and secure Android & iOS mobile applications. We use advanced frameworks like Flutter and React Native to build cross-platform apps from a single codebase.',
        'We manage the entire app life cycle—from initial UI/UX layouts, wireframes, and database architecture, to API integrations, push notifications, and publishing the final build to the Google Play Store and Apple App Store.'
    ],
    'about_features' => [
        'Cross-Platform Frameworks',
        'Stunning Mobile UI/UX',
        'Real-Time Push Alerts',
        'Secure Cloud Backends'
    ],
    'features' => [
        ['icon' => 'bi-phone', 'title' => 'Hybrid App Development', 'desc' => 'Develop high-performance, cost-effective cross-platform apps for both Android and iOS using Flutter.'],
        ['icon' => 'bi-android2', 'title' => 'Android App Coding', 'desc' => 'Code dedicated Android mobile apps optimized for different screen sizes and device manufacturers.'],
        ['icon' => 'bi-apple', 'title' => 'iOS App Coding', 'desc' => 'Develop high-security, fluid iOS applications matching Apple\'s strict design and performance guidelines.'],
        ['icon' => 'bi-cloud-check', 'title' => 'API & Cloud Integration', 'desc' => 'Build secure RESTful APIs to connect your mobile app with backend databases and cloud servers.'],
        ['icon' => 'bi-bell', 'title' => 'Push Notification Setup', 'desc' => 'Configure automated push notification campaigns via Firebase to keep users engaged and active.'],
        ['icon' => 'bi-cloud-upload', 'title' => 'Store Console Publishing', 'desc' => 'Manage the submission process, creating store layouts, descriptions, assets, and launching live.']
    ],
    'process' => [
        ['title' => 'UI/UX App Wireframing', 'desc' => 'We design vertical screen mockups, mapping button interactions and navigation paths.'],
        ['title' => 'Database & REST API Code', 'desc' => 'We code the backend server database, creating API endpoints to feed data to the mobile app.'],
        ['title' => 'Mobile App Coding', 'desc' => 'Our developers write frontend mobile code using Flutter/React Native, connecting API functions.'],
        ['title' => 'Feature & System Test', 'desc' => 'We run extensive simulator testing, checking loading states, alerts, push codes, and offline data caches.'],
        ['title' => 'Store Upload & Live', 'desc' => 'We package the app builds (APK/AAB/IPA), compile description files, and submit to App Store and Play Store.']
    ],
    'benefits' => [
        ['icon' => 'bi-chat-heart-fill', 'title' => 'Direct Customer Connection', 'desc' => 'Send push notifications about offers directly to users\' notification trays, bypassing email spam filters.'],
        ['icon' => 'bi-phone-fill', 'title' => 'Faster User Experience', 'desc' => 'Mobile apps cache files locally, providing much faster and smoother user experiences than web pages.'],
        ['icon' => 'bi-award-fill', 'title' => 'Boost Brand Credibility', 'desc' => 'Having active applications published on official App Stores elevates your company\'s professional status.'],
        ['icon' => 'bi-graph-up-arrow', 'title' => 'Higher Customer Retention', 'desc' => 'An app icon on the home screen serves as a constant brand reminder, driving repeat business and user loyalty.']
    ],
    'faqs' => [
        ['q' => 'What is the difference between Native and Hybrid App Development?', 'a' => 'Native apps are coded using platform-specific languages (Swift for iOS, Kotlin for Android) and require separate codebases. Hybrid (Cross-Platform) apps use frameworks like Flutter or React Native to compile into native apps for both iOS and Android from a single codebase, saving up to 40% in development costs.'],
        ['q' => 'Will you publish my mobile app on the App Store and Google Play Store?', 'a' => 'Yes! We manage the entire publishing process. We help you set up developer accounts, prepare screenshots, write optimized store descriptions, set up privacy policies, and submit the builds for approval.'],
        ['q' => 'How do mobile apps connect to website databases?', 'a' => 'We code secure RESTful APIs (Application Programming Interfaces). These APIs act as secure bridges, allowing your mobile app to read, write, and synchronize data with your main website server database in real-time.'],
        ['q' => 'Can you integrate push notifications into the app?', 'a' => 'Yes! We integrate push notification systems using services like Firebase Cloud Messaging. This allows you to send targeted promotional alerts, transaction confirmations, and updates directly to your users\' devices.'],
        ['q' => 'How much does it cost to build a mobile application?', 'a' => 'Mobile app costs depend on features, platforms (Android, iOS, or both), and API complexities. Basic business apps are highly affordable, while complex database-driven apps with real-time tracking cost more. We provide a detailed feature-by-feature cost estimate before starting.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Mobile App Development Services',
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
        'description' => 'High-performance Android & iOS mobile applications development in Patna by Coral Web Technology. Expert Flutter, React Native, and native app developers.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
