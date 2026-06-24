<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'social-media-marketing',
    'title' => 'Social Media Marketing',
    'location_key' => 'social-media-marketing',
    'meta_title' => 'Social Media Marketing Agency in Patna | Coral Web Technology',
    'meta_description' => 'Drive engagement and sales with the best social media marketing agency in Patna. Coral Web Technology manages Facebook, Instagram, LinkedIn, and YouTube campaigns.',
    'meta_keywords' => 'social media marketing patna, smm agency patna, facebook marketing, instagram marketing, linkedin marketing, social media ads patna',
    'hero_title' => 'Build A Loyal Community With <span>Social Media Marketing</span>',
    'hero_desc' => 'Connect with your target audience on the platforms they use daily. We build custom SMM strategies that drive brand engagement, visual trust, and steady conversions.',
    'hero_bullets' => [
        'Engaging Visual Content',
        'Targeted Demographics Ads',
        'Community Management',
        'Detailed Performance Reports'
    ],
    'hero_img' => 'social-media/1.webp',
    'about_img' => 'social-media/2.webp',
    'about_title' => 'Connect, Engage & Grow Your Brand Across Social Platforms',
    'about_desc' => [
        'Social media is the voice of your brand. At Coral Web Technology, we help you project an authentic, professional voice across Facebook, Instagram, LinkedIn, and YouTube. We draft content calendars that blend educational topics, product showcases, and viral trend participations.',
        'We do not just chase empty metrics like likes or comments. We focus on social media engagement that feeds directly into your sales funnel, using strategic call-to-actions, customized message flows, and targeted remarketing lists.'
    ],
    'about_features' => [
        'Custom Content Calendars',
        'Creative Graphic Designs',
        'Active Community Building',
        'Competitor Social Listening'
    ],
    'features' => [
        ['icon' => 'bi-pencil-square', 'title' => 'Content Creation & Design', 'desc' => 'High-quality graphics, reels, videos, and post copies designed to hook scrolling users.'],
        ['icon' => 'bi-facebook', 'title' => 'Facebook Page Growth', 'desc' => 'Build community pages, post engaging polls, and manage reviews to maintain brand authority.'],
        ['icon' => 'bi-instagram', 'title' => 'Instagram Branding & Reels', 'desc' => 'Develop grid layouts, curate relevant hashtags, and shoot engaging reels that capture user attention.'],
        ['icon' => 'bi-linkedin', 'title' => 'LinkedIn B2B Marketing', 'desc' => 'Position your business leaders as industry authorities and connect directly with key corporate decision makers.'],
        ['icon' => 'bi-chat-text', 'title' => 'Community Management', 'desc' => 'Actively respond to comments, direct messages, and reviews to maintain a positive brand reputation.'],
        ['icon' => 'bi-pie-chart', 'title' => 'Social Ad Management', 'desc' => 'Run hyper-targeted paid campaigns to reach specific locations, interests, age brackets, and behaviors.']
    ],
    'process' => [
        ['title' => 'Brand & Target Discovery', 'desc' => 'We analyze your brand guidelines, past social performance, and identify the platform demographics where your buyers are most active.'],
        ['title' => 'Content Calendar Planning', 'desc' => 'We outline a monthly content theme, drafting graphic concepts, reel scripts, and promotional hooks.'],
        ['title' => 'Creative Asset Production', 'desc' => 'Our graphic designers and copywriters produce eye-catching visuals, layout designs, and engaging captions.'],
        ['title' => 'Active Management & Posting', 'desc' => 'We schedule posts at peak engagement hours and handle community responses to messages and comments.'],
        ['title' => 'Insights & Trend Alignment', 'desc' => 'We review post reaches, engagement rates, and realign the content strategy to capitalize on viral social trends.']
    ],
    'benefits' => [
        ['icon' => 'bi-people-fill', 'title' => 'Higher Brand Affinity', 'desc' => 'Convert passive viewers into brand advocates by posting relatable, interactive, and human content.'],
        ['icon' => 'bi- megaphone', 'title' => 'Cost-Effective Reach', 'desc' => 'Organic posts and targeted paid campaigns reach thousands of prospective buyers for a fraction of traditional ad costs.'],
        ['icon' => 'bi-globe', 'title' => 'Increase Site Traffic', 'desc' => 'Direct social media followers to your website landing pages to explore detailed service descriptions.'],
        ['icon' => 'bi-award-fill', 'title' => 'Establish Brand Authority', 'desc' => 'A vibrant, active social media feed demonstrates that your business is responsive, modern, and reliable.']
    ],
    'faqs' => [
        ['q' => 'Which social media platforms should my business be on?', 'a' => 'This depends entirely on your business model. B2C businesses (retail, education, healthcare, real estate) benefit heavily from Instagram and Facebook. B2B businesses (consulting, SaaS, corporate services) get the highest quality leads on LinkedIn. YouTube works globally for educational and demo content.'],
        ['q' => 'How often should my business post on social media?', 'a' => 'Quality always beats quantity. For platforms like Facebook and LinkedIn, posting 3 to 5 times a week is sufficient. For Instagram, we recommend posting 3 to 4 times a week, combined with daily Stories to keep your brand active in the user feed.'],
        ['q' => 'Do you create the graphics and write the post captions?', 'a' => 'Yes! Our full-service social media management includes creative graphic design, writing engaging captions, performing hashtag research, and publishing content on your pages.'],
        ['q' => 'Do your packages include social media advertising budget?', 'a' => 'Our service fee covers campaign creation, ad copywriting, design, targeting setup, and management. The actual advertising budget (paid directly to Meta/Google) is decided by you, based on your business growth targets.'],
        ['q' => 'How do you measure social media success?', 'a' => 'We look at key metrics that drive business values: follower growth rate, post engagement rates (likes, comments, shares), click-through rates to your website, and actual lead conversions generated from campaigns.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Social Media Marketing Services',
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
        'description' => 'Expert social media marketing services in Patna by Coral Web Technology. Professional Facebook, Instagram, LinkedIn, and YouTube growth management.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
