<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'youtube-ads',
    'title' => 'YouTube Ads',
    'meta_title' => 'YouTube Ads Management Agency in Patna | Coral Web Technology',
    'meta_description' => 'Promote your brand visually with YouTube ads management in Patna by Coral Web Technology. Get skippable ads, bumper ads, and video marketing to boost ROI.',
    'meta_keywords' => 'youtube ads agency patna, video marketing services, skippable video ads, bumper ads youtube, youtube channel marketing, paid video campaigns',
    'hero_title' => 'Captivate Audiences With High-Impact <span>YouTube Ads</span>',
    'hero_desc' => 'Leverage the power of video marketing. Place your product or brand story directly in front of highly targeted viewers on the world\'s largest video platform.',
    'hero_bullets' => [
        'Engaging Video Placements',
        'Custom Demographics Targeting',
        'Remarketing Video Campaigns',
        'Transparent Cost-Per-View Analytics'
    ],
    'hero_img' => 'youtube-ads/hero.png',
    'about_img' => 'paid/4.webp',
    'about_title' => 'Dominate Video Feeds With Professional YouTube Ads Management',
    'about_desc' => [
        'Video content holds the highest user retention and engagement rates online. At Coral Web Technology, we help you launch high-performing YouTube advertising campaigns that tell your brand story and capture attention in the first 5 critical seconds.',
        'Managed through the Google Ads ecosystem, YouTube Ads allows us to target users based on their specific search histories, channel subscriptions, and content categories. We optimize bids and ad placements to drive high conversions and view rates.'
    ],
    'about_features' => [
        'Skippable In-Stream Ads',
        'Bumper Ad Optimizations',
        'Video Search Placements',
        'Audience Intent Targeting'
    ],
    'features' => [
        ['icon' => 'bi-play-btn', 'title' => 'Skippable In-Stream Ads', 'desc' => 'Video ads that play before or during other videos, where users can choose to skip after 5 seconds.'],
        ['icon' => 'bi-dash-square', 'title' => 'Non-Skippable Video Ads', 'desc' => 'Short 15-20 second video ads that viewers must watch fully before their main video plays.'],
        ['icon' => 'bi-lightning', 'title' => 'Bumper Ads', 'desc' => 'High-impact 6-second video ads designed to build rapid brand awareness without interrupting the viewer.'],
        ['icon' => 'bi-search', 'title' => 'In-Feed Video Ads', 'desc' => 'Place your video thumbnail and text on YouTube search results and homepage recommended feeds.'],
        ['icon' => 'bi-target', 'title' => 'Search History Targeting', 'desc' => 'Show ads to users on YouTube who recently searched for matching terms on Google.'],
        ['icon' => 'bi-person-badge', 'title' => 'Channel Placements', 'desc' => 'Place your ads directly on specific competitor channels or industry-relevant video lists.']
    ],
    'process' => [
        ['title' => 'Strategy & Script Setup', 'desc' => 'We define the campaign structure, analyze target viewer profiles, and outline key video hook angles.'],
        ['title' => 'Channel Integration & Pixel', 'desc' => 'We link your YouTube channel to Google Ads and install conversion tracking codes on your site.'],
        ['title' => 'Ad Campaign Construction', 'desc' => 'We configure targeting settings, choosing specific search terms and channel exclusions.'],
        ['title' => 'Bidding & Bumper Optimize', 'desc' => 'We set Max CPV (Cost-Per-View) or Target CPA bids, keeping ad spend in check.'],
        ['title' => 'Analytics & Return Reviews', 'desc' => 'We review video watch rates (25%, 50%, 100%), adjust target lists, and scale high-converting ad sets.']
    ],
    'benefits' => [
        ['icon' => 'bi-eye-fill', 'title' => 'Unmatched User Attention', 'desc' => 'Video ads engage sound, motion, and vision, resulting in much higher brand recall than standard image banners.'],
        ['icon' => 'bi-wallet-fill', 'title' => 'Pay Only for Full Views', 'desc' => 'For skippable ads, you only pay if the user watches 30 seconds (or the full ad if shorter) or clicks the link.'],
        ['icon' => 'bi-globe2', 'title' => 'Massive Regional Reach', 'desc' => 'Put your ads in front of millions of active video consumers in Patna, Bihar, or all of India.'],
        ['icon' => 'bi-link', 'title' => 'Drive Direct Web Sales', 'desc' => 'Use interactive call-to-action cards and site link extensions to guide viewers from YouTube directly to checkout.']
    ],
    'faqs' => [
        ['q' => 'How does billing work for YouTube Ads?', 'a' => 'YouTube Ads uses the Cost-Per-View (CPV) or Cost-Per-Action (CPA) model. For skippable ads, you only pay if a viewer watches 30 seconds of your video (or the whole video if it is shorter than 30s) or interacts with your ad (clicks a call-to-action). If they skip, you pay nothing!'],
        ['q' => 'Do I need a professional video production team to run YouTube Ads?', 'a' => 'While high-production videos are great, authentic, clear, and well-lit videos shot on modern smartphones or basic cameras often convert exceptionally well. The script, hooks, and messaging in the first 5 seconds are what matter most. We help you draft the script.'],
        ['q' => 'What is a Bumper Ad?', 'a' => 'A Bumper Ad is a quick 6-second video ad that is non-skippable. It is highly effective for raising brand awareness, delivering a single, memorable message, and keeping your brand top-of-mind at a very low cost.'],
        ['q' => 'Can we target ads to users who watch specific YouTube channels?', 'a' => 'Yes! We can target your ads to appear on specific YouTube channels, category lists, or even individual videos, ensuring your ads are shown to people consuming highly relevant content.'],
        ['q' => 'What metrics do we review to check ad performance?', 'a' => 'We track impressions, view rate (percentage of people who didn\'t skip), average Cost-Per-View (CPV), click-through rates (CTR) to your landing page, and actual conversions (sales/leads) generated.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'YouTube Ads Services',
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
        'description' => 'Reach visual audiences with professional YouTube Ads management in Patna by Coral Web Technology. Expert video marketing, bumper ads, and target optimizations.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
