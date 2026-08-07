<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'shopify-development',
    'title' => 'Shopify Website Development',
    'location_key' => 'e-commerce-services',
    'meta_title' => 'Shopify Website Development Company in Patna | Coral Web Technology',
    'meta_description' => 'Build high-converting, fully customized online stores with the best Shopify development company in Patna. Coral Web Technology offers expert Shopify setups, app installs, and custom Liquid coding.',
    'meta_keywords' => 'shopify development company patna, shopify web designer, shopify setup services, custom shopify store, shopify liquid programmer, ecommerce agency patna',
    'hero_title' => 'Launch Your Store Fast With <span>Shopify Development</span>',
    'hero_desc' => 'Launch a robust, fully-hosted online store that handles massive traffic seamlessly. We design, customize, and configure high-converting Shopify stores tailored to your brand.',
    'hero_bullets' => [
        'Custom Liquid Theme Code',
        'App Setup & Integration',
        'Fast Load Time Optimization',
        'Frictionless Checkout Setup'
    ],
    'hero_img' => 'shopify-development.jpg',
    'about_img' => 'shopify/about.png',
    'about_title' => 'Scale Your E-Commerce Brand With Shopify Hosted Ecosystems',
    'about_desc' => [
        'Shopify is the world’s leading hosted e-commerce platform, trusted by top direct-to-consumer brands. However, standing out requires more than just installing a basic template. At Coral Web Technology, we write custom Liquid codes, customize themes, and optimize your store layout to drive high engagement.',
        'We help you configure the perfect app stack to handle upsells, email notifications, shipping tracking, and inventory syncs. We optimize theme assets to ensure your Shopify store loads instantly on mobile networks, reducing drop-offs and increasing sales.'
    ],
    'about_features' => [
        'Liquid Code Customizations',
        'Seamless App Stack Setup',
        'High Speed Code Audits',
        'Product Variant Setups'
    ],
    'features' => [
        ['icon' => 'bi-shop-window', 'title' => 'Shopify Store Setup', 'desc' => 'Complete setup of your domain, shipping rules, tax settings, payment gateways, and staff permissions.'],
        ['icon' => 'bi-code-square', 'title' => 'Theme Customization (Liquid)', 'desc' => 'Write custom HTML, CSS, and Shopify Liquid codes to modify layouts and build unique page designs.'],
        ['icon' => 'bi-puzzle', 'title' => 'App Integration & Sync', 'desc' => 'Select, install, and configure apps for reviews, custom orders, email automation, upsells, and CRM syncs.'],
        ['icon' => 'bi-cart-check', 'title' => 'Product Inventory Import', 'desc' => 'Set up categories (collections), product variations (sizes, colors), tags, and upload listings.'],
        ['icon' => 'bi-truck', 'title' => 'Local Shipping API Settings', 'desc' => 'Configure Indian payment processors (Razorpay/Paytm) and connect delivery services (Shiprocket/Delhivery).'],
        ['icon' => 'bi-speedometer2', 'title' => 'Shopify Speed Optimization', 'desc' => 'Analyze theme scripts, clean duplicate app codes, compress images, and optimize fonts for fast load times.']
    ],
    'process' => [
        ['title' => 'Requirement & Theme Selection', 'desc' => 'We define collection architectures, select the base theme, and finalize payment integrations.'],
        ['title' => 'Liquid Theme Custom Coding', 'desc' => 'We code customized sections, adapt design elements, and set up brand colors.'],
        ['title' => 'Inventory & Category Import', 'desc' => 'We structure Collections, map out products, and input tags, variants, and descriptions.'],
        ['title' => 'App Stack & Shipping Connect', 'desc' => 'We configure tracking pixels, upsell builders, shipping APIs, and payment checkouts.'],
        ['title' => 'Speed Optimization & Launch', 'desc' => 'We clean codes, test transaction flows across mobile devices, and connect your custom domain to launch live.']
    ],
    'benefits' => [
        ['icon' => 'bi-cloud-check-fill', 'title' => 'Zero Hosting Worries', 'desc' => 'Shopify handles server security, SSL certificates, database backups, and handles flash sales traffic automatically.'],
        ['icon' => 'bi-lightning-fill', 'title' => 'Extremely Fast Launch', 'desc' => 'Hosted systems bypass core backend database setups, allowing us to launch your store in a fraction of the time.'],
        ['icon' => 'bi-puzzle-fill', 'title' => 'Robust App Ecosystem', 'desc' => 'Instantly add dropshipping integrations, visual sliders, live chats, and order trackers using verified apps.'],
        ['icon' => 'bi-shield-fill-check', 'title' => 'Built-In PCI Security', 'desc' => 'Shopify handles checkout encryption natively, ensuring your store is secure and customer data is protected.']
    ],
    'faqs' => [
        ['q' => 'What is Shopify and does it require hosting?', 'a' => 'Shopify is a fully hosted e-commerce platform. This means you do not need to purchase separate hosting or install SSL certificates. Shopify manages all server maintenance, backups, and security patches for a monthly subscription fee.'],
        ['q' => 'Can we customize the Shopify design, or are we locked in?', 'a' => 'We can fully customize your Shopify design! Our developers write custom CSS and Shopify Liquid code to modify standard themes, build custom product templates, and create layouts that match your brand.'],
        ['q' => 'Can I use my custom domain name?', 'a' => 'Yes, absolutely. We connect your custom domain (e.g. www.yourstore.com) to your Shopify backend and configure the DNS records so your store displays professionally under your brand name.'],
        ['q' => 'Do you integrate Indian shipping providers like Shiprocket?', 'a' => 'Yes, we do. We set up Indian payment gateways (Razorpay, PayU, Paytm) and integrate logistics aggregators like Shiprocket, Delhivery, or Pickrr to calculate real-time rates and print shipping labels.'],
        ['q' => 'Will Shopify support massive traffic during flash sales?', 'a' => 'Yes! Shopify is designed to scale. It maintains a 99.99% uptime and easily processes thousands of transactions per minute during sales and promotions without crashing.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Shopify Website Development Services',
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
        'description' => 'Launch your online store fast with Shopify website development in Patna by Coral Web Technology. Professional custom Liquid theme customizations, app stacks, and checkout configurations.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
