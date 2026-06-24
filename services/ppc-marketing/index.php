<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'ppc-marketing',
    'title' => 'PPC Marketing',
    'meta_title' => 'Pay Per Click (PPC) Marketing Company in Patna | Coral Web Technology',
    'meta_description' => 'Get instant sales and high-quality leads with the best PPC marketing company in Patna. Coral Web Technology offers expert Google Ads and Meta Ads management services.',
    'meta_keywords' => 'ppc marketing company patna, pay per click services, google ads agency, meta ads management, pay per click agency patna, conversion rate optimization',
    'hero_title' => 'Capture Instant Search Intent With <span>PPC Marketing</span>',
    'hero_desc' => 'Stop waiting for organic rankings. Direct motivated, high-intent buyers directly to your landing pages with custom Google Ads and Facebook advertising campaigns.',
    'hero_bullets' => [
        'Instant Traffic & Leads',
        'Certified Google Ads Partners',
        'Laser-Targeted Audiences',
        'Conversion-Focused Landing Pages'
    ],
    'hero_img' => 'paid-advertising.webp',
    'about_img' => 'paid/1.webp',
    'about_title' => 'Maximize Your ROI With High-Performing PPC Campaigns',
    'about_desc' => [
        'PPC Marketing is the fastest way to generate online leads and revenue. At Coral Web Technology, we manage your advertising campaigns with absolute precision. We write compelling, persuasive ad copies, build high-converting landing pages, and optimize targeting to block unwanted clicks.',
        'We specialize in multi-channel paid ads. We construct full-funnel strategies that combine Search ads for active searchers, Display ads for branding, and remarketing lists to chase users who left without purchasing, ensuring no ad spend is wasted.'
    ],
    'about_features' => [
        'Precise Audience Targeting',
        'Negative Keyword Blockers',
        'Landing Page A/B Testing',
        'Transparent Cost Reporting'
    ],
    'features' => [
        ['icon' => 'bi-search', 'title' => 'Google Search Ads', 'desc' => 'Appear at the top of Google searches when users are actively looking for your services.'],
        ['icon' => 'bi-images', 'title' => 'Display & Banner Ads', 'desc' => 'Build massive visual awareness across millions of websites that display Google partner banners.'],
        ['icon' => 'bi-facebook', 'title' => 'Social Media Paid Ads', 'desc' => 'Deploy visual, high-engagement ads across Facebook, Instagram, and LinkedIn feeds.'],
        ['icon' => 'bi-arrow-clockwise', 'title' => 'Remarketing Campaigns', 'desc' => 'Target users who previously visited your website, displaying custom banners to pull them back.'],
        ['icon' => 'bi-cart-fill', 'title' => 'Shopping Ads', 'desc' => 'Set up e-commerce product feeds in Google Merchant Center to show products and prices directly on searches.'],
        ['icon' => 'bi-file-earmark-code', 'title' => 'Landing Page Optimization', 'desc' => 'Design high-speed, mobile-optimized landing pages with clear lead forms to maximize conversion rates.']
    ],
    'process' => [
        ['title' => 'Account Audit & Setup', 'desc' => 'We review your existing accounts, install conversion tracking pixels, and define clear lead metrics.'],
        ['title' => 'Keyword & Audience Mapping', 'desc' => 'We perform exhaustive keyword bidding research and set up custom demographic targeting profiles.'],
        ['title' => 'Creative & Copywriting', 'desc' => 'Our copywriters draft multiple ad variations, testing headline styles and strong call-to-actions.'],
        ['title' => 'Campaign Launch & Bidding', 'desc' => 'We publish the campaigns, monitoring active bid adjustments, quality scores, and search query reports.'],
        ['title' => 'A/B Testing & Optimization', 'desc' => 'We continuously test layouts, block negative search terms, adjust bids, and report cost-per-conversion rates.']
    ],
    'benefits' => [
        ['icon' => 'bi-lightning-fill', 'title' => 'Instant Leads & Traffic', 'desc' => 'Generate qualified business inquiries within hours of turning your advertising campaigns on.'],
        ['icon' => 'bi-target', 'title' => 'Granular Demographics', 'desc' => 'Select exactly who sees your ads based on age, language, location, specific interests, and search terms.'],
        ['icon' => 'bi-piggy-bank-fill', 'title' => 'Control Advertising Cost', 'desc' => 'Set daily caps, select bidding maximums, and only pay when a user actually clicks on your ad.'],
        ['icon' => 'bi-graph-up', 'title' => 'Measurable Performance', 'desc' => 'Track every single rupee spent, showing exactly how many clicks, calls, or form submissions were generated.']
    ],
    'faqs' => [
        ['q' => 'How much does PPC marketing cost?', 'a' => 'You set the budget! You can start with as little as ₹200 to ₹500 per day for Google or Facebook ads. Our team manages your campaigns to ensure your budget is spent on high-intent terms, minimizing wasted clicks.'],
        ['q' => 'What is Google Ad Quality Score and why does it matter?', 'a' => 'Quality Score is Google\'s rating of the relevance and quality of your ads, keywords, and landing page. A higher Quality Score lowers your cost-per-click (CPC) and gives your ads better placement on search result pages.'],
        ['q' => 'Will I pay Coral Web Technology or the ad platform?', 'a' => 'You pay the advertising platform (Google or Meta) directly for the ad spend using a credit card or billing profile. We charge a separate, transparent management fee to research, construct, and optimize your campaigns.'],
        ['q' => 'What is remarketing and how does it work?', 'a' => 'Remarketing places a safe cookie on your website visitors\' browsers. If they leave without buying or contact you, we display targeted ads to them as they browse other websites or social platforms, keeping your brand top-of-mind.'],
        ['q' => 'Why should I hire an agency when I can run ads myself?', 'a' => 'Running ads without experience often leads to high costs and no conversions due to poor keyword selection, wrong match types, and lack of negative keywords. We ensure conversion tracking is accurate, block irrelevant search terms, and optimize landing pages to maximize your ROI.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'PPC Marketing Services',
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
        'description' => 'Instant search and social leads with premium PPC marketing services in Patna by Coral Web Technology. Professional Google Ads & Meta Ads specialists.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
