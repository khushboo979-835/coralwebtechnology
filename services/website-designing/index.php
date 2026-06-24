<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'website-designing',
    'title' => 'Website Designing',
    'location_key' => 'website-development',
    'meta_title' => 'Best Website Designing Company in Patna | Coral Web Technology',
    'meta_description' => 'Create stunning, responsive, and user-friendly website designs with the best website designing company in Patna. Coral Web Technology offers expert UI/UX design.',
    'meta_keywords' => 'website designing company patna, web design services, website designer patna, ui ux design agency, responsive web design patna, graphic design patna',
    'hero_title' => 'Stunning & Conversion-Focused <span>Website Designing</span>',
    'hero_desc' => 'Your website is your digital storefront. We design premium, responsive, and user-centric websites that captivate visitors, build trust, and drive conversions.',
    'hero_bullets' => [
        'Modern UI/UX Layouts',
        'Fully Responsive Designs',
        'Custom Figma Mockups',
        'Conversion-Rate Optimized'
    ],
    'hero_img' => 'design-development.webp',
    'about_img' => 'design-development/1.webp',
    'about_title' => 'Hook Your Visitors Instantly With Premium UI/UX Web Design',
    'about_desc' => [
        'First impressions matter online. If your website looks outdated or is difficult to navigate on mobile, visitors will leave instantly. At Coral Web Technology, we design modern, clean, and interactive websites that reflect your unique brand identity and retain user interest.',
        'Our designer team focuses heavily on user experience (UX) and conversion hierarchy. We map out clean navigation menus, position strong call-to-actions, and design custom interactive layouts that guide users smoothly toward contact forms or product purchases.'
    ],
    'about_features' => [
        'User-Centric Architecture',
        'Responsive Mobile-First grids',
        'Interactive Hover Effects',
        'Custom Typography & Theme'
    ],
    'features' => [
        ['icon' => 'bi-layout-text-window-reverse', 'title' => 'UI/UX Interface Design', 'desc' => 'Create beautiful visual designs, wireframes, and prototypes in Figma that align with target user psychology.'],
        ['icon' => 'bi-phone', 'title' => 'Responsive Grid Design', 'desc' => 'Ensure your website renders perfectly and loads fast on smartphones, tablets, laptops, and desktops.'],
        ['icon' => 'bi-cart3', 'title' => 'E-Commerce Store Layouts', 'desc' => 'Design clean category grids, easy-to-use filter sidebars, and frictionless product detail layouts.'],
        ['icon' => 'bi-window-sidebar', 'title' => 'Landing Page Designing', 'desc' => 'Construct conversion-focused single page layouts built to maximize ad click signups.'],
        ['icon' => 'bi-palette', 'title' => 'Brand Asset Creation', 'desc' => 'Select matching color palettes, fonts, graphic vectors, and icons that represent your brand identity.'],
        ['icon' => 'bi-code-square', 'title' => 'Redesigning Services', 'desc' => 'Overhaul your old, outdated website with a modern, fast-loading, and responsive design structure.']
    ],
    'process' => [
        ['title' => 'Wireframing & Layout Map', 'desc' => 'We outline the structural page structure, navigation trees, and call-to-action hierarchies.'],
        ['title' => 'Theme & Brand Selection', 'desc' => 'We finalize color palettes, typography, and visual assets based on your brand guidelines.'],
        ['title' => 'Figma UI Mockup Design', 'desc' => 'We create detailed high-fidelity desktop and mobile visual layouts for your review and approval.', 'allowMultiple' => false],
        ['title' => 'Interactive Prototyping', 'desc' => 'We set up click-through prototypes so you can preview navigation flows and page transitions.'],
        ['title' => 'Asset Handover & Specs', 'desc' => 'We export clean graphics, SVG icons, style codes, and handover layouts to the web development team.']
    ],
    'benefits' => [
        ['icon' => 'bi-heart-fill', 'title' => 'Unbeatable First Impression', 'desc' => 'Build immediate corporate credibility and user trust with a clean, modern, and state-of-the-art layout.'],
        ['icon' => 'bi-phone-flip', 'title' => 'Perfect Mobile Usability', 'desc' => 'Over 60% of traffic comes from mobile. Our responsive designs ensure smooth scrolling and easy tapping on phones.'],
        ['icon' => 'bi-graph-up-arrow', 'title' => 'Higher Conversion Rates', 'desc' => 'Strategic heading placements, clear call-to-actions, and clean forms turn more visitors into active leads.'],
        ['icon' => 'bi-speedometer2', 'title' => 'PageSpeed Friendly Code', 'desc' => 'We design clean, lightweight layouts that avoid heavy design assets, laying the foundation for fast loading speeds.']
    ],
    'faqs' => [
        ['q' => 'Do you design custom websites or use ready-made templates?', 'a' => 'We offer both options! We specialize in custom UI/UX design created from scratch in Figma to match your unique brand identity. For businesses looking for quick launches, we also customize pre-designed premium themes.'],
        ['q' => 'Will my website design be mobile-friendly?', 'a' => 'Yes, absolutely. We design with a mobile-first approach. Every layout is tested across various screen sizes (mobile, tablet, laptop, and desktop) to ensure perfect responsiveness and easy navigation.'],
        ['q' => 'What is Figma and how do we use it in the project?', 'a' => 'Figma is a leading cloud-based design tool. We use it to create interactive web layouts. We share a live Figma link with you so you can review designs, add comments, and suggest modifications in real-time.'],
        ['q' => 'Can you redesign my old, existing website?', 'a' => 'Yes, we do! We can analyze your current website\'s drop-off points, performance gaps, and restructure it with a modern visual theme, better navigation, and faster page load speeds.'],
        ['q' => 'Do you provide the images and website copywriting?', 'a' => 'We recommend clients provide text and raw images of their physical business. However, we can source premium stock graphics, design custom illustrations, and write professional copywriting as part of our package.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Website Designing Services',
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
        'description' => 'Stunning responsive designs with professional website designing services in Patna by Coral Web Technology. Expert UI/UX designers, Figma mockups, and mobile layouts.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
