<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'seo-service',
    'title' => 'SEO Service',
    'location_key' => 'seo',
    'meta_title' => 'Best SEO Company in Patna | SEO Services - Coral Web Technology',
    'meta_description' => 'Boost your website ranking on Google with professional SEO services in Patna by Coral Web Technology. Get high organic traffic, keyword optimization, and backlinks.',
    'meta_keywords' => 'seo company patna, seo services patna, search engine optimization, best seo agency patna, local seo services, technical seo expert',
    'hero_title' => 'Drive Organic Traffic With Expert <span>SEO Services</span>',
    'hero_desc' => 'Rank on the first page of Google, capture highly targeted customer search intents, and build long-term organic revenue streams with our certified SEO strategies.',
    'hero_bullets' => [
        'Top 10 Google Rankings',
        'Certified SEO Consultants',
        'White-Hat SEO Practices',
        'Comprehensive Monthly Audits'
    ],
    'hero_img' => 'seo.webp',
    'about_img' => 'seo/1.webp',
    'about_title' => 'Increase Sales & Traffic With Professional Search Engine Optimization',
    'about_desc' => [
        'Having a beautiful website is useless if your target audience cannot find it on search engines. At Coral Web Technology, we optimize your digital presence from the ground up, making it extremely search-engine friendly. We analyze search intent and user queries to structure your content properly.',
        'Our technical, on-page, and authority-building strategies align with Google’s core algorithm guidelines. We resolve crawl blocks, improve load speeds, and acquire highly authoritative backlinks to establish your website as a market leader in your niche.'
    ],
    'about_features' => [
        'Advanced Keyword Research',
        'Competitor Gap Analysis',
        'Technical Architecture Fixes',
        'Safe Authority Building'
    ],
    'features' => [
        ['icon' => 'bi-search', 'title' => 'Keyword Research & Mapping', 'desc' => 'Discover high-volume, transactional search terms that bring users ready to buy your products.'],
        ['icon' => 'bi-code-slash', 'title' => 'Technical SEO', 'desc' => 'Optimize site speed, fix crawling issues, implement canonical tags, and build structured schema markup.'],
        ['icon' => 'bi-file-earmark-text', 'title' => 'On-Page Optimization', 'desc' => 'Structure title tags, meta descriptions, header structures (H1-H3), image alts, and content keyword densities.'],
        ['icon' => 'bi-geo-alt', 'title' => 'Local SEO & GMB', 'desc' => 'Optimize your Google My Business profile and build local citations to dominate local map pack searches.'],
        ['icon' => 'bi-link-45deg', 'title' => 'Link Building & Authority', 'desc' => 'Acquire high-quality, relevant backlinks from authoritative domains using outreach and content assets.'],
        ['icon' => 'bi-bar-chart', 'title' => 'Analytics & Reporting', 'desc' => 'Track key metrics like organic traffic, keyword positions, CTR, and search impressions using Console & Analytics.']
    ],
    'process' => [
        ['title' => 'Comprehensive SEO Audit', 'desc' => 'We perform a full technical checkup of your website to identify speed bottlenecks, indexing errors, and code structural gaps.'],
        ['title' => 'Keyword & Competitor Strategy', 'desc' => 'We research search terms and examine your top competitors to define low-competition keyword wins.'],
        ['title' => 'On-Page Architecture Tune', 'desc' => 'We refine meta descriptions, copy structures, image properties, internal link chains, and canonical guidelines.'],
        ['title' => 'Content & Authority Scale', 'desc' => 'We write high-value blog posts and construct white-hat outreach strategies to build domain authority.'],
        ['title' => 'Tracking & Conversion Refine', 'desc' => 'We analyze Google Search Console, adjust landing pages for lower bounce rates, and report keyword rank movements.']
    ],
    'benefits' => [
        ['icon' => 'bi-graph-up-arrow', 'title' => 'Consistent Organic Traffic', 'desc' => 'Receive steady waves of targeted website visitors month after month without paying for ad clicks.'],
        ['icon' => 'bi-patch-check', 'title' => 'Establish Industry Authority', 'desc' => 'Appearing at the top of search results builds immediate brand credibility and user trust.'],
        ['icon' => 'bi-percent', 'title' => 'Better ROI Than Paid Ads', 'desc' => 'Organic traffic is free and compound over time, drastically lowering your long-term marketing costs.'],
        ['icon' => 'bi-people-fill', 'title' => 'Target High-Intent Users', 'desc' => 'Connect with users exactly when they are searching for solutions, leading to higher conversion rates.']
    ],
    'faqs' => [
        ['q' => 'What is the difference between On-Page and Off-Page SEO?', 'a' => 'On-Page SEO involves optimizations done directly inside your website (content, headings, metadata, site speed, internal links). Off-Page SEO refers to actions taken outside your website to impact rankings, primarily building high-quality backlinks, social sharing, and local citations.'],
        ['q' => 'How long does it take to rank on the first page of Google?', 'a' => 'SEO is a long-term investment. While some low-competition local keywords can rank in 30 to 60 days, highly competitive commercial terms typically take 4 to 8 months of consistent optimization and link building to rank on Page 1.'],
        ['q' => 'Do you use safe, white-hat SEO techniques?', 'a' => 'Yes, absolutely. We strictly follow Google Search Essentials (Webmaster Guidelines) to ensure your site is safe from algorithmic penalties. We do not use automated link networks, keyword stuffing, or hidden redirects.'],
        ['q' => 'Why does my Google My Business listing not show in map searches?', 'a' => 'This is usually due to lack of local optimization, citation consistency errors, or poor review signals. We optimize your GMB profile description, verify categories, build consistent NAP (Name, Address, Phone) citations, and guide you on review acquisition.'],
        ['q' => 'Will you provide access to ranking reports?', 'a' => 'Yes, we provide detailed monthly ranking reports showing keyword position changes, organic traffic growth, top-performing pages, and search query impressions from Google Search Console.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'SEO Services',
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
        'description' => 'Dominate search rankings with professional SEO services in Patna by Coral Web Technology. On-page, technical, off-page, and local SEO optimizations.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
