<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'facebook-instagram-ads',
    'title' => 'Facebook & Instagram Ads',
    'meta_title' => 'Facebook & Instagram Ads Agency in Patna | Coral Web Technology',
    'meta_description' => 'Scale your business with the best Facebook & Instagram ads agency in Patna. Coral Web Technology manages Meta ads, pixel tracking, lead generation, and custom designs.',
    'meta_keywords' => 'facebook ads agency patna, instagram advertising, meta ads management, facebook marketing patna, lead generation ads, pixel setup patna',
    'hero_title' => 'Scale Sales Fast With <span>Facebook & Instagram Ads</span>',
    'hero_desc' => 'Target your ideal customers based on their exact demographics, behaviors, and interests. Deploy high-converting Meta advertising campaigns that capture leads and drive sales.',
    'hero_bullets' => [
        'Advanced Meta Pixel Setup',
        'Stunning Visual Creatives',
        'Custom Lookalike Audiences',
        'Transparent Cost-Per-Lead Tracking'
    ],
    'hero_img' => 'facebook-instagram-ads/hero.png',
    'about_img' => 'paid/3.webp',
    'about_title' => 'Reach Millions of Motivated Buyers on Facebook & Instagram',
    'about_desc' => [
        'Facebook and Instagram hold the largest active databases of consumer behaviors. At Coral Web Technology, we help you tap into this resource by constructing hyper-targeted Meta advertising campaigns. We match your product with users who show matching lifestyle and shopping interests.',
        'We design high-converting visual banners, film engaging reels, and write persuasive ad copy. We install advanced Meta Pixels and Conversions API to track user actions, build lookalike audiences, and run multi-step remarketing funnels that close sales.'
    ],
    'about_features' => [
        'Creative Copywriting & Design',
        'Pixel & Conversions API Setup',
        'Custom Audience Targeting',
        'A/B Testing Ad Creatives'
    ],
    'features' => [
        ['icon' => 'bi-images', 'title' => 'Image & Carousel Ads', 'desc' => 'Deploy visual, multi-image carousel ads that showcase products or features cleanly in user feeds.'],
        ['icon' => 'bi-play-btn-fill', 'title' => 'Instagram Reel Ads', 'desc' => 'Shoot and run engaging, native-style vertical video ads that draw high organic-style engagement.'],
        ['icon' => 'bi-funnel-fill', 'title' => 'Instant Lead Form Ads', 'desc' => 'Generate customer details natively inside Facebook/Instagram without requiring external website redirects.'],
        ['icon' => 'bi-code-square', 'title' => 'Meta Pixel & API Install', 'desc' => 'Set up tracking codes to record website clicks, purchases, page visits, and cart additions.'],
        ['icon' => 'bi-arrow-repeat', 'title' => 'Retargeting Funnels', 'desc' => 'Run targeted ads to users who showed interest in your posts or visited specific product pages.'],
        ['icon' => 'bi-people', 'title' => 'Lookalike Audiences', 'desc' => 'Utilize Meta\'s AI to find new profiles that share behaviors with your current paying customers.']
    ],
    'process' => [
        ['title' => 'Audience Research & Setup', 'desc' => 'We define demographic segments, interest keywords, and set up pixel tracking tags.'],
        ['title' => 'Ad Design & Copy Production', 'desc' => 'We produce high-impact graphics, draft caption options, and select reels hooks.'],
        ['title' => 'Campaign Build & Launch', 'desc' => 'We configure campaigns under the Meta Business Manager, establishing custom bid criteria.'],
        ['title' => 'Target & Bid Optimizations', 'desc' => 'We monitor click-through rates, test new graphics to prevent ad fatigue, and exclude conversion groups.'],
        ['title' => 'Scale & Retargeting Setup', 'desc' => 'We allocate higher budgets to winning ad sets and launch remarketing sequences to close remaining leads.']
    ],
    'benefits' => [
        ['icon' => 'bi-graph-up', 'title' => 'Rapid Sales Scaling', 'desc' => 'Reach massive audiences quickly, generating leads and customer interest from day one of ad activation.'],
        ['icon' => 'bi-cash-coin', 'title' => 'Extremely Low Lead Costs', 'desc' => 'Natively-run Meta lead forms bypass landing pages, offering some of the lowest lead costs in paid marketing.'],
        ['icon' => 'bi-bullseye', 'title' => 'Interest-Based Targeting', 'desc' => 'Put your ads in front of users who follow competitors, buy specific brands, or show matching life events.'],
        ['icon' => 'bi-chat-heart', 'title' => 'Build Active Engagement', 'desc' => 'Paid ads build your organic social metrics, gaining you real page followers, comments, and brand fans.']
    ],
    'faqs' => [
        ['q' => 'What is the Meta Pixel and why is it necessary?', 'a' => 'The Meta Pixel is a piece of code placed on your website that tracks user visits and behavior. It allows Meta to see who converts from your ads, optimizes your campaigns for purchases or leads, and builds custom lists for retargeting.'],
        ['q' => 'How much should I spend on Facebook & Instagram Ads?', 'a' => 'You can start with a daily budget as low as ₹200 to ₹500. This is enough to test ad variations and gather initial leads. We recommend scaling the budget only after we identify which creatives and audiences are delivering profitable returns.'],
        ['q' => 'What is ad fatigue and how do you prevent it?', 'a' => 'Ad fatigue happens when your target audience sees the same ad too many times, causing click rates to drop and costs to rise. We prevent this by testing fresh image variations, filming new reels, and rotating targeting lists regularly.'],
        ['q' => 'Which is better: Lead Generation ads or Website Conversion ads?', 'a' => 'Lead Generation ads (using native forms) are great for quickly collecting phone numbers and emails at a lower cost. Website Conversion ads drive users to your site to read details, generating fewer but often higher-quality, more qualified leads. We often run a mix.'],
        ['q' => 'Will you manage my Facebook page and posts as well?', 'a' => 'Facebook Ads management focuses on paid advertising campaigns, targeting setup, pixel maintenance, and conversion tracking. If you need organic social media posting, graphics creation, and community management, we recommend combining this with our Social Media Marketing service.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Facebook and Instagram Ads Services',
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
        'description' => 'Maximize sales and leads with Facebook & Instagram Ads management in Patna by Coral Web Technology. Expert Meta Pixel, tracking, copy, and layout design.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
