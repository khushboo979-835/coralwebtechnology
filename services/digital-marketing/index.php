<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'digital-marketing',
    'title' => 'Digital Marketing',
    'location_key' => 'digital-marketing',
    'meta_title' => 'Digital Marketing Company in Patna | Coral Web Technology',
    'meta_description' => 'Boost your business online with the best digital marketing company in Patna. Coral Web Technology offers expert SEO, SMM, PPC, and lead generation services.',
    'meta_keywords' => 'digital marketing company patna, digital marketing agency, digital marketing services, seo company patna, social media marketing, lead generation',
    'hero_title' => 'Result-Oriented <span>Digital Marketing</span> Services',
    'hero_desc' => 'Grow your brand value, capture high-intent leads, and maximize your ROI with our custom digital marketing campaigns built for modern businesses.',
    'hero_bullets' => [
        'Result Driven Solutions',
        'Experienced Marketing Team',
        'Affordable Growth Packages',
        'Weekly Transparent Reports'
    ],
    'hero_img' => 'digital markating.jpg',
    'about_img' => 'digital-marketing/1.webp',
    'about_title' => 'Grow Your Business With Our Digital Marketing Expertise',
    'about_desc' => [
        'At Coral Web Technology, we map out comprehensive online marketing roadmaps designed to put your business in front of the right audience at the right time. Our data-driven methods bypass guesswork, focusing heavily on user behaviors, marketing analytics, and solid conversion rate optimization.',
        'We help brands establish an authoritative online presence through synchronized marketing channels. From search engine visibility to social media engagement, our strategies ensure constant brand communication, driving customer acquisition and sustainable business growth.'
    ],
    'about_features' => [
        'Data-Driven Strategy',
        'ROI-Focused Campaigns',
        'Multi-Channel Marketing',
        'Full Analytics Tracking'
    ],
    'features' => [
        ['icon' => 'bi-search', 'title' => 'Search Engine Optimization', 'desc' => 'Rank higher on Google and drive sustainable organic traffic with on-page, off-page, and technical SEO.'],
        ['icon' => 'bi-megaphone', 'title' => 'Social Media Marketing', 'desc' => 'Build customer loyalty and brand engagement across Facebook, Instagram, LinkedIn, and YouTube.'],
        ['icon' => 'bi-credit-card', 'title' => 'Pay Per Click (PPC)', 'desc' => 'Capture instant search intent and generate hot leads with highly optimized Google Ads & Meta Ads.'],
        ['icon' => 'bi-envelope', 'title' => 'Email Marketing', 'desc' => 'Nurture your leads and drive repeat sales with automated, highly personalized email drip campaigns.'],
        ['icon' => 'bi-chat-left-text', 'title' => 'Content Marketing', 'desc' => 'Create authoritative, engaging content that educates your audience and drives customer action.'],
        ['icon' => 'bi-graph-up', 'title' => 'Conversion Rate Optimization', 'desc' => 'Turn your website visitors into paying customers by analyzing user journeys and eliminating drop-offs.']
    ],
    'process' => [
        ['title' => 'Strategic Alignment', 'desc' => 'We define your target buyer persona, campaign goals, key performance indicators (KPIs), and budget allocations.'],
        ['title' => 'Market Intelligence', 'desc' => 'We analyze competitors, search volumes, and social media trends to find the most cost-effective marketing angles.'],
        ['title' => 'Creative & Copy Setup', 'desc' => 'We design high-converting ad creatives, landing pages, and persuasive ad copies that capture audience attention.'],
        ['title' => 'Campaign Launch', 'desc' => 'We deploy campaigns across search, social, and display channels with granular tracking tags installed.'],
        ['title' => 'Optimization & Scale', 'desc' => 'We monitor analytics, refine targetings, adjust bidding strategies, and scale winning campaigns to maximize ROI.']
    ],
    'benefits' => [
        ['icon' => 'bi-eye-fill', 'title' => 'Increase Brand Visibility', 'desc' => 'Ensure your target customers encounter your brand wherever they search, browse, or engage online.'],
        ['icon' => 'bi-funnel-fill', 'title' => 'Generate Qualified Leads', 'desc' => 'Fill your sales pipeline with high-intent prospects actively searching for your products or services.'],
        ['icon' => 'bi-pie-chart-fill', 'title' => 'Lower Acquisition Costs', 'desc' => 'Optimize marketing spend across channels to get more conversions for every rupee spent.'],
        ['icon' => 'bi-shield-check', 'title' => 'Build Customer Trust', 'desc' => 'Create positive, authoritative touchpoints that position your business as the industry leader.']
    ],
    'faqs' => [
        ['q' => 'How long does it take to see results from digital marketing?', 'a' => 'Paid channels like Google Ads and Meta Ads can deliver leads and traffic within 24-48 hours of launch. Organic channels like SEO and Content Marketing are long-term strategies and typically take 3 to 6 months to display significant ranking and traffic growth.'],
        ['q' => 'Which digital marketing channel is best for my business?', 'a' => 'It depends on your business model (B2B vs B2C). If your customers are actively searching for your service, Google Ads and SEO are excellent. If you need to build visual awareness or target specific demographics/interests, Social Media Ads (Facebook & Instagram) work best. We analyze your market to suggest the right mix.'],
        ['q' => 'Do you provide weekly or monthly reports?', 'a' => 'Yes! We provide detailed, transparent monthly reports (and weekly summaries for active ad campaigns) detailing impressions, clicks, click-through rates (CTR), conversions, cost-per-lead, and overall ROI.'],
        ['q' => 'What budget should I allocate for paid advertising?', 'a' => 'We recommend starting with a modest budget that allows you to gather data and test creatives. Depending on your industry and location, we can start as low as ₹5,000 to ₹10,000 per month for local ads, and scale as we prove profitability.'],
        ['q' => 'How is Coral Web Technology different from other agencies?', 'a' => 'We are highly focused on business bottom-line metrics (leads, sales, revenue) rather than just "likes" or "vanity traffic". Our certified experts combine data analysis with creative messaging to construct campaigns that scale.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Digital Marketing Services',
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
        'description' => 'Professional digital marketing services in Patna by Coral Web Technology. Boost your business with expert SEO, SMM, Google Ads, and lead generation.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
