<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'google-ads',
    'title' => 'Google Ads',
    'meta_title' => 'Google Ads Agency in Patna | Google Adwords Services - Coral Web Technology',
    'meta_description' => 'Dominate search results and get instant leads with the best Google Ads agency in Patna. Coral Web Technology offers expert Google AdWords, search, and display ads.',
    'meta_keywords' => 'google ads agency patna, google adwords services, search ads company, google display ads, shopping ads expert patna, pay per click patna',
    'hero_title' => 'Rank Instantly At The Top With <span>Google Ads</span>',
    'hero_desc' => 'Place your business at the very top of Google when potential customers are actively searching for your services. Generate high-intent leads and maximize your ROI.',
    'hero_bullets' => [
        'Top Search Placements',
        'Certified AdWords Experts',
        'Lower Cost-Per-Click',
        'Transparent Lead Tracking'
    ],
    'hero_img' => 'google-ads/hero.png',
    'about_img' => 'paid/2.webp',
    'about_title' => 'Target Active Buyers With Certified Google AdWords Services',
    'about_desc' => [
        'Unlike social media ads where users are casually browsing, Google Ads targets active searchers who are showing immediate intent to buy. At Coral Web Technology, we help you leverage this intent by showing your business as the direct solution to their queries.',
        'As Google Ads specialists, we manage search ads, display banners, shopping lists, and YouTube placements. We monitor bid adjustments, optimize Quality Scores, and remove negative keywords daily to ensure you get more leads for less ad spend.'
    ],
    'about_features' => [
        'Quality Score Optimization',
        'Negative Keyword Exclusions',
        'Search Intent Mapping',
        'Call & Form Lead Tracking'
    ],
    'features' => [
        ['icon' => 'bi-search', 'title' => 'Google Search Ads', 'desc' => 'Text-based advertisements that rank at the top of Google results when target keywords are searched.'],
        ['icon' => 'bi-aspect-ratio', 'title' => 'Display Banner Ads', 'desc' => 'Visual graphics placed across millions of Google partner websites to build brand recognition.'],
        ['icon' => 'bi-cart4', 'title' => 'Google Shopping Ads', 'desc' => 'Display product images, prices, and merchant ratings directly on Google Search for e-commerce stores.'],
        ['icon' => 'bi-youtube', 'title' => 'YouTube Video Ads', 'desc' => 'Skippable and non-skippable video ads targeting users based on content interests and history.'],
        ['icon' => 'bi-phone-vibrate', 'title' => 'Call-Only Campaigns', 'desc' => 'Ads designed specifically to drive direct phone calls to your sales or support team on mobile devices.'],
        ['icon' => 'bi-arrow-repeat', 'title' => 'Google Ads Remarketing', 'desc' => 'Display follow-up ads to users who previously visited your site to draw them back for a purchase.']
    ],
    'process' => [
        ['title' => 'Setup & Tracking Install', 'desc' => 'We configure your Google Ads account, link Google Analytics, and deploy Tag Manager conversion tracking.'],
        ['title' => 'Keyword & Bidding Research', 'desc' => 'We identify search terms, check competitor CPCs, and plan negative keyword exclusions to block waste clicks.'],
        ['title' => 'Ad Copy Creation', 'desc' => 'We draft responsive search ads, creating compelling headlines and clear calls to action.'],
        ['title' => 'Campaign Launch & Bids', 'desc' => 'We activate campaigns, manage starting CPC bids, and establish location geofences.'],
        ['title' => 'Daily Optimization Reviews', 'desc' => 'We monitor Quality Scores, add search query negatives, check conversions, and scale profitable keyword bids.']
    ],
    'benefits' => [
        ['icon' => 'bi-lightning-charge-fill', 'title' => 'Immediate Page 1 Placement', 'desc' => 'Bypass the months needed for organic ranking and appear at the top of Google searches instantly.'],
        ['icon' => 'bi-bullseye', 'title' => 'Hyper-Targeted Traffic', 'desc' => 'Only show ads to users in specific cities or pin codes during operational hours when search terms match.'],
        ['icon' => 'bi-wallet2', 'title' => 'Pay Only For Real Clicks', 'desc' => 'Impressions are completely free; you only pay Google when a user clicks your link and visits your page.'],
        ['icon' => 'bi-check2-square', 'title' => 'Complete Tracking Metrics', 'desc' => 'Know exactly which keyword, ad copy, and landing page layout generated the call or form lead.']
    ],
    'faqs' => [
        ['q' => 'How much does a click cost on Google Ads?', 'a' => 'The Cost-Per-Click (CPC) varies depending on keyword competition, industry, and Quality Score. Local searches might cost ₹5 to ₹30 per click, while highly competitive corporate fields can cost more. We optimize your Quality Scores to get you the lowest possible CPC.'],
        ['q' => 'What is a Responsive Search Ad (RSA)?', 'a' => 'An RSA allows you to enter multiple headlines and descriptions. Google\'s AI then automatically tests different combinations to determine which copy performs best with specific searchers, improving click-through and conversion rates.'],
        ['q' => 'How do negative keywords save my budget?', 'a' => 'Negative keywords tell Google not to show your ads for specific terms. For example, if you sell premium websites, we add "free", "cheap", "jobs", and "tutorials" as negatives to prevent paying for irrelevant clicks.'],
        ['q' => 'How do we track if Google Ads are working?', 'a' => 'We install GTM tags that track form submissions, phone call clicks, WhatsApp chat starts, and purchase checkouts. You see the exact number of leads and cost-per-lead inside your reports.'],
        ['q' => 'Can we target ads to a specific location in Patna?', 'a' => 'Yes! We can geo-target your campaigns to show only to users in Boring Road, Kankarbagh, Bailey Road, or any specific radius around your physical office, preventing waste budget on distant locations.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Google Ads Services',
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
        'description' => 'Target active buyers with certified Google Ads & AdWords management in Patna by Coral Web Technology. Professional search, display, and shopping campaigns.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
