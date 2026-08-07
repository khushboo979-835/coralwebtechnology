<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'ios-app-development',
    'title' => 'iOS App Development',
    'location_key' => 'mobile-app-development',
    'meta_title' => 'iOS App Development Company in Patna | Coral Web Technology',
    'meta_description' => 'Build high-security, fluid iOS applications with the best iOS app development company in Patna. Coral Web Technology offers expert Swift and Apple App Store setups.',
    'meta_keywords' => 'ios app development company patna, ios app developers, swift programmers, apple app store services, iPhone app development, mobile app agency patna',
    'hero_title' => 'Premium & High-Security <span>iOS App Development</span>',
    'hero_desc' => 'Reach high-value Apple consumers. We build fluid, high-security, and feature-rich iOS applications optimized for iPhones, iPads, and Apple Watches.',
    'hero_bullets' => [
        'Swift & SwiftUI Coding',
        'Apple Human Interface Designs',
        'Strict App Store Approvals',
        'Secure iOS Backend APIs'
    ],
    'hero_img' => 'ios-app-development.jpg',
    'about_img' => 'ios/about.png',
    'about_title' => 'Target Premium Apple Consumers With Professional iOS Apps',
    'about_desc' => [
        'iOS users represent the highest-value segment in the mobile market, showing much higher transactional engagement rates. At Coral Web Technology, we help you tap into this demographic by building fluid, high-security, and premium iOS applications.',
        'We specialize in native Swift and SwiftUI coding, as well as Flutter cross-platform applications. We ensure your app aligns perfectly with Apple’s Human Interface Guidelines, passes strict App Store audits, and utilizes secure backend encryption.'
    ],
    'about_features' => [
        'Native Swift & SwiftUI Code',
        'Strict Privacy Compliance',
        'Apple Store Specifications',
        'Fluid Layout Animations'
    ],
    'features' => [
        ['icon' => 'bi-apple', 'title' => 'Native Swift Development', 'desc' => 'Code secure native iOS apps using Swift and SwiftUI to utilize the full processing power of Apple devices.'],
        ['icon' => 'bi-laptop', 'title' => 'Human Interface UI/UX', 'desc' => 'Apply Apple\'s design principles to build elegant, intuitive, and modern app interfaces.'],
        ['icon' => 'bi-fingerprint', 'title' => 'Apple Security & Auth', 'desc' => 'Integrate FaceID, TouchID, Apple Sign-In, and strict user data privacy compliance.'],
        ['icon' => 'bi-bell', 'title' => 'APNs Push Notifications', 'desc' => 'Set up Apple Push Notification service (APNs) to send real-time transaction updates and alerts.'],
        ['icon' => 'bi-wallet2', 'title' => 'In-App Purchase Settings', 'desc' => 'Configure secure digital content purchases, subscriptions, and payment processes within the app.'],
        ['icon' => 'bi-cloud-check', 'title' => 'App Store Connect Upload', 'desc' => 'Manage provisioning profiles, configure certificates, write metadata, and handle App Store reviews.']
    ],
    'process' => [
        ['title' => 'iOS Storyboard & UX Map', 'desc' => 'We design Apple-compliant screen interfaces, wireframes, and button navigation maps.'],
        ['title' => 'Secure API Development', 'desc' => 'We build backend APIs with SSL encryption to ensure secure data transfers.'],
        ['title' => 'Swift/Flutter Mobile Coding', 'desc' => 'Our developers write frontend iOS code, integrating device features and connecting API keys.'],
        ['title' => 'Strict Sandbox & Beta Audits', 'desc' => 'We test layout behaviors, memory leaks, and distribute builds via TestFlight for client reviews.'],
        ['title' => 'App Store Review Submit', 'desc' => 'We set up distribution profiles, upload the build, fill metadata details, and submit for Apple approval.']
    ],
    'benefits' => [
        ['icon' => 'bi-gem', 'title' => 'High-Value Demographics', 'desc' => 'iOS users represent premium, high-income consumers more likely to make in-app purchases and orders.'],
        ['icon' => 'bi-shield-fill-lock', 'title' => 'Maximum System Security', 'desc' => 'Apple\'s strict sandboxing and closed ecosystem offer unbeatable security against data hacks.'],
        ['icon' => 'bi-stars', 'title' => 'Flawless Fluid Performance', 'desc' => 'Swift native coding ensures maximum frame rates, smooth animations, and high response times.'],
        ['icon' => 'bi-award-fill', 'title' => 'Premium Brand Association', 'desc' => 'Launching a verified application on Apple\'s App Store greatly increases your corporate brand prestige.']
    ],
    'faqs' => [
        ['q' => 'Why is native iOS app development more expensive than Android?', 'a' => 'iOS apps require macOS computers (Mac mini/MacBook) and specific Apple test devices for development. Apple\'s SDKs, provisioning profiles, and strict code review procedures demand high developer expertise, resulting in slightly higher development costs.'],
        ['q' => 'How much does an Apple Developer Account cost?', 'a' => 'Apple charges an annual subscription fee of $99 for an individual or organization Developer Account, which is required to publish apps on the App Store.'],
        ['q' => 'What is TestFlight and how do we use it?', 'a' => 'TestFlight is Apple\'s official beta testing platform. It allows us to securely distribute pre-release builds of your app to your team and external testers before submitting it to the public App Store.'],
        ['q' => 'How long does Apple take to approve an application?', 'a' => 'Apple\'s App Review team typically takes 24 to 48 hours to audit a submission. If any design or policy violations are found, they may reject it. We optimize your app code to ensure compliance and pass the review successfully.'],
        ['q' => 'Do you build apps that work on iPads and Apple Watches?', 'a' => 'Yes! We design universal iOS apps that run smoothly on iPhones and iPads. We can also develop companion apps for Apple Watches as part of advanced packages.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'iOS App Development Services',
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
        'description' => 'Premium, high-security Swift & Flutter iOS app development in Patna by Coral Web Technology. Professional custom iOS layouts, APIs, and App Store Connect publishing.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
