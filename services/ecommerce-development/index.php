<?php
define('SERVICE_TEMPLATE_LOADED', true);

$service = [
    'key' => 'ecommerce-development',
    'title' => 'E-Commerce Website Development',
    'location_key' => 'e-commerce-services',
    'meta_title' => 'E-Commerce Website Development Company in Patna | Coral Web Technology',
    'meta_description' => 'Build high-converting, secure online stores with the best e-commerce website development company in Patna. Coral Web Technology offers expert WooCommerce and custom retail portals.',
    'meta_keywords' => 'ecommerce website development patna, e-commerce web design, online store development, ecommerce portals patna, custom shopping cart, payment gateway integration',
    'hero_title' => 'High-Converting <span>E-Commerce Website</span> Development',
    'hero_desc' => 'Turn website visitors into paying shoppers. We build fast, responsive, and secure online stores with inventory management, smooth checkouts, and seamless payment gateways.',
    'hero_bullets' => [
        'Secure Payment Integrations',
        'Frictionless Checkout Flows',
        'Advanced Inventory Controls',
        'Mobile-Optimized Shopping'
    ],
    'hero_img' => 'ecommerce-development.jpg',
    'about_img' => 'ecommerce/1.webp',
    'about_title' => 'Scale Your Retail Business Internationally With An Online Store',
    'about_desc' => [
        'Selling online requires more than just displaying products. It demands speed, security, and a frictionless checkout process to minimize cart abandonment. At Coral Web Technology, we develop premium e-commerce websites engineered to convert casual browsers into shoppers.',
        'We integrate user-friendly product catalogs, multi-layer filters, secure credit card and UPI gateways, and automated email/SMS order alerts. We make it easy for your admin team to manage product variants, adjust prices, track inventory, and view order reports.'
    ],
    'about_features' => [
        'Frictionless Cart & Checkouts',
        'Multi-Currency & Tax Setups',
        'Automated Invoicing Systems',
        'Advanced Coupon Engines'
    ],
    'features' => [
        ['icon' => 'bi-cart-check', 'title' => 'Product Catalog & Grids', 'desc' => 'Design clean category grids, list variants (size, color), and manage ratings & reviews.'],
        ['icon' => 'bi-credit-card-2-front', 'title' => 'Secure Payment Gateways', 'desc' => 'Integrate UPI payment APIs, credit/debit card processors, NetBanking, and cash-on-delivery options.'],
        ['icon' => 'bi-box-seam', 'title' => 'Inventory Management', 'desc' => 'Track stock levels automatically, set low-stock notification alerts, and manage product listings.'],
        ['icon' => 'bi-lock', 'title' => 'SSL & Security Encryption', 'desc' => 'Deploy secure checkout paths (HTTPS), protect user profiles, and enforce server security.'],
        ['icon' => 'bi-truck', 'title' => 'Logistics & Shipping API', 'desc' => 'Connect shipping APIs to calculate real-time delivery costs and display order tracking numbers.'],
        ['icon' => 'bi-receipt', 'title' => 'Invoice & Report Tools', 'desc' => 'Generate automated PDF invoices, track tax files, and export sales analytics inside the dashboard.']
    ],
    'process' => [
        ['title' => 'Store & Catalog Mapping', 'desc' => 'We define product attributes (sizes, colors), tax groups, and select payment gateways.'],
        ['title' => 'System & Database Code', 'desc' => 'We code the database schema to handle secure carts, orders, customer profiles, and product lists.'],
        ['title' => 'Checkout Flow Assembly', 'desc' => 'We design and code a single-page checkout flow to ensure fast processing and low abandon rates.'],
        ['title' => 'Payment & API Connections', 'desc' => 'We integrate payment processors, SMS notification gateways, and shipping calculators.'],
        ['title' => 'Load & Order Testing', 'desc' => 'We run mock purchases, test database integrity, optimize site speeds, and launch the portal live.']
    ],
    'benefits' => [
        ['icon' => 'bi-shop', 'title' => 'Open For Sales 24/7', 'desc' => 'Your products are available to buyers worldwide day and night, even while your physical office is closed.'],
        ['icon' => 'bi-funnel-fill', 'title' => 'Lower Cart Abandon Rates', 'desc' => 'Fast loading pages and simplified checkout steps make buying quick and easy, boosting overall sales.'],
        ['icon' => 'bi-database-fill-gear', 'title' => 'Automated Store Management', 'desc' => 'Invoices, inventory counts, shipping alerts, and emails are processed automatically by the system.'],
        ['icon' => 'bi-graph-up-arrow', 'title' => 'Data-Backed Business Scale', 'desc' => 'Analyze customer search patterns, top-selling items, and cart behaviors to plan promotions and scale revenues.']
    ],
    'faqs' => [
        ['q' => 'Which platform is best for e-commerce development?', 'a' => 'For small to medium stores, WooCommerce (WordPress) is highly popular due to its affordability and flexibility. For fast-scaling direct-to-consumer brands, Shopify offers a robust hosted ecosystem. For large-scale customized portals, we build custom PHP systems. We help you choose the best fit.'],
        ['q' => 'How do you secure customer payment details?', 'a' => 'We do not store credit card or bank details on your website database. Instead, we use secure tokenization via PCI-compliant payment gateways like Razorpay, PayU, or Stripe, combined with SSL encryption across all checkout pages.'],
        ['q' => 'Can I offer coupons and discount codes?', 'a' => 'Yes! We configure a flexible coupon engine that allows you to create percentage discounts, flat discounts, free shipping coupons, and restrict usage by category, minimum order, or user.'],
        ['q' => 'How do customers track their orders?', 'a' => 'Once an order is shipped, your admin panel generates a tracking link. The system automatically sends an email or SMS notification containing this link to the customer, allowing them to track delivery progress.'],
        ['q' => 'Will my online store work perfectly on mobile phones?', 'a' => 'Yes! Over 70% of e-commerce shopping is done on mobile devices. We design and build online stores with a strict mobile-first approach, prioritizing fast product rendering, touch-friendly buttons, and quick checkout forms.']
    ],
    'schema_json' => [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'E-Commerce Website Development Services',
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
        'description' => 'Secure, responsive online store portals in Patna by Coral Web Technology. Professional WooCommerce, Shopify, and custom shopping cart systems.',
        'areaServed' => 'IN'
    ]
];

include '../service-template.php';
