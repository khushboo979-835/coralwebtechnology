<?php
// Service data loader for dynamic location pages and "We Serve Across India" sections.

$SERVICE_CATEGORY_DEFINITIONS = [
    'digital-marketing' => [
        'name' => 'Digital Marketing',
        'label' => 'Digital Marketing Company',
        'patterns' => [
            'digital marketing company',
            'digital marketing agency',
            'digital marketing services',
            'digital marketing',
        ],
    ],
    'seo' => [
        'name' => 'SEO',
        'label' => 'SEO Company',
        'patterns' => [
            'seo company',
            'seo services',
            'seo agency',
            'search engine optimization',
            'seo expert',
            'seo consultant',
        ],
    ],
    'mobile-app-development' => [
        'name' => 'Mobile App Development',
        'label' => 'Mobile App Development Company',
        'patterns' => [
            'mobile app development',
            'app development',
            'mobile application development',
            'mobile app developers',
        ],
    ],
    'website-development' => [
        'name' => 'Website Development',
        'label' => 'Website Development Company',
        'patterns' => [
            'website development',
            'web development',
            'website design',
            'web design',
            'website developer',
            'web developer',
            'website designer',
            'web designer',
        ],
    ],
    'software-development' => [
        'name' => 'Software Development',
        'label' => 'Software Development Company',
        'patterns' => [
            'software company',
            'software development',
            'software development company',
            'software development firms',
        ],
    ],
    'social-media-marketing' => [
        'name' => 'Social Media Marketing',
        'label' => 'Social Media Marketing Agency',
        'patterns' => [
            'social media marketing',
            'social media ads',
            'social media',
        ],
    ],
    'content-marketing' => [
        'name' => 'Content Marketing',
        'label' => 'Content Marketing Agency',
        'patterns' => [
            'content marketing',
            'media agency',
        ],
    ],
    'ecommerce-marketing' => [
        'name' => 'E-commerce Marketing',
        'label' => 'E-commerce Marketing Agency',
        'patterns' => [
            'ecommerce marketing',
            'e-commerce marketing',
        ],
    ],
    'e-commerce-services' => [
        'name' => 'E-commerce Services',
        'label' => 'E-commerce Services Provider',
        'patterns' => [
            'ecommerce services',
            'e-commerce services',
        ],
    ],
    'graphic-branding' => [
        'name' => 'Graphic & Branding',
        'label' => 'Graphic & Branding Agency',
        'patterns' => [
            'graphic',
            'branding',
        ],
    ],
    'paid-marketing' => [
        'name' => 'Paid Marketing',
        'label' => 'Paid Marketing Agency',
        'patterns' => [
            'paid advertising',
            'paid marketing',
            'ppc services',
            'google ads',
            'meta ads',
        ],
    ],
    'mobile-ecommerce-app' => [
        'name' => 'Mobile E-commerce App',
        'label' => 'Mobile E-commerce App Development Company',
        'patterns' => [
            'mobile ecommerce',
            'mobile e-commerce',
            'ecommerce app',
            'e-commerce app',
        ],
    ],
    'custom-digital-marketing' => [
        'name' => 'Custom Digital Marketing',
        'label' => 'Custom Digital Marketing Agency',
        'patterns' => [
            'custom digital marketing',
            'custom marketing',
        ],
    ],
    'digital-strategy' => [
        'name' => 'Digital Strategy',
        'label' => 'Digital Strategy Agency',
        'patterns' => [
            'digital strategy',
        ],
    ],
    'design-and-development' => [
        'name' => 'Design & Development',
        'label' => 'Design & Development Agency',
        'patterns' => [
            'design and development',
            'design & development',
        ],
    ],
    'maintenance-support' => [
        'name' => 'Maintenance & Support',
        'label' => 'Maintenance and Support Services',
        'patterns' => [
            'maintenance',
            'support',
        ],
    ],
];

$SERVICE_FALLBACK_CITIES = [
    'Delhi',
    'Mumbai',
    'Bangalore',
    'Chennai',
    'Hyderabad',
    'Pune',
    'Noida',
    'Gurgaon',
    'Ahmedabad',
    'Jaipur',
    'Kolkata',
    'Patna',
];

function getServiceDefinitions()
{
    global $SERVICE_CATEGORY_DEFINITIONS;
    return $SERVICE_CATEGORY_DEFINITIONS;
}

function getSheetCsvPath()
{
    return __DIR__ . '/../sheet-export.csv';
}

function updateSheetCsvCache(string $path)
{
    // URL to export Google Sheet as CSV
    $sheetUrl = "https://docs.google.com/spreadsheets/d/1fNgAIweLrAVTiebU2b6zJTF1KngRBiE6xZu0O1F5CIw/export?format=csv&gid=1534442709";
    
    // Check if file exists and is less than 1 hour old (3600 seconds)
    if (file_exists($path) && (time() - filemtime($path)) < 3600) {
        return; // Cache is still fresh
    }

    // Attempt to download the latest CSV
    $context = stream_context_create([
        'http' => [
            'timeout' => 5 // 5 seconds timeout so it doesn't block page load forever
        ]
    ]);
    
    $data = @file_get_contents($sheetUrl, false, $context);
    if ($data !== false && strlen($data) > 100) {
        file_put_contents($path, $data);
    }
}

function loadServiceSheetCells()
{
    static $cells = null;
    if ($cells !== null) {
        return $cells;
    }

    $cells = [];
    $path = getSheetCsvPath();
    
    // Update cache if needed
    updateSheetCsvCache($path);

    if (!file_exists($path)) {
        return $cells;
    }

    if (($handle = fopen($path, 'r')) !== false) {
        while (($row = fgetcsv($handle)) !== false) {
            foreach ($row as $cell) {
                $cell = trim(preg_replace('/[\r\n]+/', ' ', strip_tags((string) $cell)));
                if ($cell !== '') {
                    $cells[] = $cell;
                }
            }
        }
        fclose($handle);
    }

    return $cells;
}

function isValidSheetCell(string $cell): bool
{
    $cell = trim($cell);
    if (strlen($cell) < 10) {
        return false;
    }

    $blacklist = [
        '/https?:\/\//i',
        '/\b(id|password|semrush|top location|volume|competition|ranking)\b/i',
        '/^\s*[0-9\s.\-]+\s*$/',
    ];

    foreach ($blacklist as $pattern) {
        if (preg_match($pattern, $cell)) {
            return false;
        }
    }

    return true;
}

function normalizeKeyword(string $keyword): string
{
    $keyword = trim(preg_replace('/\s+/', ' ', strip_tags($keyword)));
    return trim($keyword, " \t\n\r\0\x0B,");
}

function keywordHasLocation(string $keyword): bool
{
    return preg_match('/\bin\b/i', $keyword)
        || preg_match('/\b(india|ncr|gurgaon|noida|chennai|pune|kolkata|jaipur|ahmedabad|hyderabad|delhi|mumbai|bangalore|patna)\b/i', $keyword);
}

function slugify(string $text): string
{
    $slug = trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($text)), '-');
    return $slug;
}

function extractCityFromKeyword(string $keyword): string
{
    // Extract location dynamically using "in [city]" pattern
    if (preg_match('/\bin\s+([a-z0-9\- ]+)$/i', $keyword, $matches)) {
        return ucwords(strtolower(trim($matches[1])));
    }

    // Match well-known cities at the end or standalone
    if (preg_match('/\b(india|ncr|delhi ncr|gurgaon|noida|chennai|pune|kolkata|jaipur|ahmedabad|hyderabad|delhi|mumbai|bangalore|patna|kerala|chandigarh|coimbatore|nagpur)\b/i', $keyword, $matches)) {
        $city = strtolower($matches[1]);
        if ($city === 'ncr' || $city === 'delhi ncr') {
            return 'Delhi NCR';
        }
        return ucwords($city);
    }

    return '';
}

function getServiceKeywords(string $service_key = null): array
{
    static $cache = [];
    if (array_key_exists($service_key ?? '', $cache)) {
        return $cache[$service_key ?? ''];
    }

    $definitions = getServiceDefinitions();
    $cells = loadServiceSheetCells();
    $result = [];

    foreach ($cells as $cell) {
        if (!isValidSheetCell($cell)) {
            continue;
        }

        $keyword = normalizeKeyword($cell);
        foreach ($definitions as $key => $definition) {
            if ($service_key !== null && $key !== $service_key) {
                continue;
            }
            foreach ($definition['patterns'] as $pattern) {
                if (preg_match('/\b' . preg_quote($pattern, '/') . '\b/i', $keyword) && keywordHasLocation($keyword)) {
                    $result[$key][$keyword] = true;
                    break 2;
                }
            }
        }
    }

    foreach ($definitions as $key => $definition) {
        if ($service_key !== null && $key !== $service_key) {
            continue;
        }

        if (empty($result[$key])) {
            global $SERVICE_FALLBACK_CITIES;
            foreach ($SERVICE_FALLBACK_CITIES as $city) {
                $result[$key][normalizeKeyword($definition['label'] . ' in ' . $city)] = true;
            }
        }
    }

    if ($service_key !== null) {
        $keywords = array_keys($result[$service_key] ?? []);
        sort($keywords, SORT_NATURAL | SORT_FLAG_CASE);
        return $cache[$service_key] = $keywords;
    }

    foreach ($result as $key => $items) {
        $keywords = array_keys($items);
        sort($keywords, SORT_NATURAL | SORT_FLAG_CASE);
        $result[$key] = $keywords;
    }

    $cache[$service_key ?? ''] = $result;
    return $result;
}

function getServiceKeywordsWithSlugs(string $service_key): array
{
    $keywords = getServiceKeywords($service_key);
    $entries = [];

    foreach ($keywords as $keyword) {
        $entries[] = [
            'keyword' => $keyword,
            'slug' => slugify($keyword),
            'url' => '/' . slugify($keyword) . '/',
            'city' => extractCityFromKeyword($keyword),
        ];
    }

    return $entries;
}

function getServicePageDataBySlug(string $slug): ?array
{
    $definitions = getServiceDefinitions();
    foreach (getServiceKeywords() as $service_key => $keywords) {
        foreach ($keywords as $keyword) {
            if (slugify($keyword) === $slug) {
                return [
                    'service_key' => $service_key,
                    'service_name' => $definitions[$service_key]['name'] ?? 'Service',
                    'service_label' => $definitions[$service_key]['label'] ?? 'Service Provider',
                    'keyword' => $keyword,
                    'slug' => $slug,
                    'url' => '/' . $slug . '/',
                    'city' => extractCityFromKeyword($keyword),
                ];
            }
        }
    }

    return null;
}

function getLocationPageMeta(array $page): array
{
    $title = ucwords(strtolower($page['keyword']));
    $city = $page['city'] ?: $page['service_name'];
    $service_name = $page['service_name'];

    $description = "Looking for {$page['keyword']}? Coral Web Technology is the best {$page['service_label']} in {$city}, delivering local SEO, digital growth, and conversion-focused marketing services.";
    $keywords = [
        $page['keyword'],
        "{$page['service_label']} in {$city}",
        "best {$page['service_label']} in {$city}",
        "top {$service_name} company in {$city}",
    ];

    return [
        'meta_title' => "{$title} | Coral Web Technology",
        'meta_description' => $description,
        'meta_keywords' => implode(', ', array_unique($keywords)),
        'og_title' => $title . ' | Coral Web Technology',
        'og_description' => $description,
        'canonical_url' => $page['url'],
        'page_title' => $title,
        'page_description' => $description,
    ];
}

function renderServiceLocationsSection(string $service_key, string $base_url): void
{
    $definitions = getServiceDefinitions();
    $service_name = $definitions[$service_key]['name'] ?? 'Our Service';
    $entries = getServiceKeywordsWithSlugs($service_key);

    if (empty($entries)) {
        return;
    }

    echo '<style>.serve-across-india .location-link{transition:all .3s ease;color:#333;text-decoration:none}.serve-across-india .location-link:hover{color:#ff4d4d;text-transform:translateX(2px)}.serve-across-india .location-card{border-radius:10px;padding:15px;transition:all .4s ease;border:1px solid rgba(0,0,0,.06);background:#fff}.serve-across-india .location-card:hover{box-shadow:0 20px 40px rgba(0,0,0,.08);transform:translateY(-4px)}</style>';
    echo '<section class="py-5 serve-across-india">';
    echo '<div class="container">';
    echo '<div class="text-center mb-4">';
    echo '<h2 class="fw-bold">We Serve Across India</h2>';
    echo '<p class="text-muted">Explore our regional pages for ' . htmlspecialchars($service_name) . ' and discover service coverage across the cities listed below.</p>';
    echo '</div>';
    echo '<div class="row g-3">';

    foreach ($entries as $entry) {
        echo '<div class="col-12 col-md-6 col-lg-3" data-aos="fade-up">';
        echo '<div class="location-card">';
        echo '<a class="location-link" href="' . htmlspecialchars($base_url . ltrim($entry['url'], '/')) . '">';
        echo htmlspecialchars(ucwords(strtolower($entry['keyword'])));
        echo '</a>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
    echo '</section>';
}

function getDynamicServiceContent(string $service_key, string $city, string $service_name): array
{
    global $SERVICE_DYNAMIC_CONTENT;
    
    // Ensure content array is loaded
    if (!isset($SERVICE_DYNAMIC_CONTENT)) {
        $contentPath = __DIR__ . '/service-content.php';
        if (file_exists($contentPath)) {
            include_once $contentPath;
        }
    }
    
    // If city is empty, use 'India'
    $display_city = !empty($city) ? $city : 'India';
    
    // Find matching service key or fallback
    $key = isset($SERVICE_DYNAMIC_CONTENT[$service_key]) ? $service_key : 'fallback';
    
    if ($key === 'fallback') {
        // Build a dynamic fallback content matrix using the service name and city
        $data = [
            'tagline' => "Leading {$service_name} Agency in {$display_city}",
            'intro' => "Coral Web Technology is the premier choice for professional {$service_name} services in {$display_city}. We deliver high-performing, scalable, and results-driven strategies designed to elevate your brand presence and achieve business objectives.",
            'why_choose_title' => "Why Partner with the Best {$service_name} Company in {$display_city}?",
            'why_choose_intro' => "We provide state-of-the-art {$service_name} solutions tailored for your business requirements in {$display_city}.",
            'why_choose_cards' => [
                [
                    'title' => 'Result-Driven Strategies',
                    'text' => "Our custom approach is tailored specifically to succeed in {$display_city} markets.",
                    'icon' => 'fa-bullseye'
                ],
                [
                    'title' => 'Experienced Professionals',
                    'text' => "Our dedicated team of professionals possesses years of experience in {$service_name}.",
                    'icon' => 'fa-users'
                ],
                [
                    'title' => 'Transparent Communication',
                    'text' => 'We keep you updated with clear monthly reports, analytics, and project milestones.',
                    'icon' => 'fa-comments'
                ],
                [
                    'title' => '100% Quality Assurance',
                    'text' => 'We are committed to delivering the highest quality work to ensure absolute customer satisfaction.',
                    'icon' => 'fa-check-circle'
                ]
            ],
            'sub_services_title' => "{$service_name} Services at Coral Web Technology",
            'sub_services' => [
                [
                    'title' => 'Custom Strategy Planning',
                    'text' => "We analyze your business targets to establish a robust {$service_name} roadmap.",
                    'icon' => 'fa-map-signs'
                ],
                [
                    'title' => 'Execution & Development',
                    'text' => "Our team implements the campaign using industry-leading methodologies and tools.",
                    'icon' => 'fa-cogs'
                ],
                [
                    'title' => 'Performance Tracking',
                    'text' => 'We monitor keyword rankings, traffic metrics, and customer actions closely.',
                    'icon' => 'fa-chart-bar'
                ],
                [
                    'title' => 'Ongoing Optimization',
                    'text' => 'We continuously test and refine your campaigns to maximize return on investment.',
                    'icon' => 'fa-sync-alt'
                ]
            ],
            'features_title' => "Make the Most of Your {$service_name} with Coral Web Technology",
            'features_intro' => "Partner with top-rated experts in {$display_city} to streamline your operations and scale your digital presence.",
            'features_list' => [
                "Customized strategies tailored for {$display_city} markets",
                "Advanced tracking setups with transparent analytics reporting",
                "Integration with cutting-edge tools and frameworks",
                "Dedicated customer support team and regular project alignment meetings",
                "End-to-end management from research to final execution",
                "Continuous performance audits to find fresh growth opportunities"
            ],
            'faqs' => [
                [
                    'question' => "Why is Coral Web Technology the right choice for {$service_name} in {$display_city}?",
                    'answer' => "We combine local market expertise in {$display_city} with industry-leading practices. Our team ensures customized solutions that drive tangible business growth."
                ],
                [
                    'question' => 'How long does it take to see results?',
                    'answer' => 'While immediate PPC ads work instantly, SEO and organic marketing campaigns typically show meaningful visibility and engagement improvements within 45 to 90 days.'
                ],
                [
                    'question' => 'Do you provide custom packages?',
                    'answer' => "Absolutely! We understand that every business in {$display_city} is unique. We tailor our {$service_name} packages to fit your specific objectives and budget."
                ]
            ]
        ];
    } else {
        $data = $SERVICE_DYNAMIC_CONTENT[$key];
    }
    
    // Interpolate {city} and {service_name} into all values
    $replacements = [
        '{city}' => $display_city,
        '{service_name}' => $service_name
    ];
    
    $interpolate = function($text) use ($replacements) {
        return str_replace(array_keys($replacements), array_values($replacements), $text);
    };
    
    $data['tagline'] = $interpolate($data['tagline']);
    $data['intro'] = $interpolate($data['intro']);
    $data['why_choose_title'] = $interpolate($data['why_choose_title']);
    $data['why_choose_intro'] = $interpolate($data['why_choose_intro']);
    
    foreach ($data['why_choose_cards'] as &$card) {
        $card['title'] = $interpolate($card['title']);
        $card['text'] = $interpolate($card['text']);
    }
    unset($card);
    
    $data['sub_services_title'] = $interpolate($data['sub_services_title']);
    foreach ($data['sub_services'] as &$ss) {
        $ss['title'] = $interpolate($ss['title']);
        $ss['text'] = $interpolate($ss['text']);
    }
    unset($ss);
    
    $data['features_title'] = $interpolate($data['features_title']);
    $data['features_intro'] = $interpolate($data['features_intro']);
    foreach ($data['features_list'] as &$feature) {
        $feature = $interpolate($feature);
    }
    unset($feature);
    
    foreach ($data['faqs'] as &$faq) {
        $faq['question'] = $interpolate($faq['question']);
        $faq['answer'] = $interpolate($faq['answer']);
    }
    unset($faq);
    
    return $data;
}
?>
