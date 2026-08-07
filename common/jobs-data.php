<?php
/**
 * Shared Job Openings Data for Coral Web Technology hiring portal.
 * This structure acts as the central datastore and can be easily imported into a SQL table or admin panel.
 */

$jobs = [
    'seo-executive' => [
        'id' => 'seo-executive',
        'title' => 'SEO Executive',
        'department' => 'SEO',
        'category' => 'SEO',
        'experience' => '1–2 Years',
        'salary' => '₹15,000 – ₹25,000',
        'location' => 'Patna',
        'work_mode' => 'Work From Office',
        'employment_type' => 'Full Time',
        'hiring_status' => 'Urgent Hiring', // Badge status: Active / Urgent Hiring / Hot Job
        'posted_date' => 'July 18, 2026',
        'last_date' => 'August 31, 2026',
        'reporting_manager' => 'SEO Head & Digital Lead',
        'open_positions' => 2,
        'overview' => 'We are looking for a result-driven SEO Executive to join our digital team. You will be responsible for managing search engine optimization activities including keyword strategy, link building, and optimizing website architecture, content, and metadata to increase organic search traffic.',
        'skills' => ['Keyword Research', 'Google Analytics', 'Ahrefs', 'WordPress SEO', 'Technical Audits', 'Link Building'],
        'responsibilities' => [
            'Keyword Research: Find high-value, relevant terms to target.',
            'On Page SEO: Optimize meta tags, headers, image alt text, and body copy.',
            'Off Page SEO: Execute white-hat link building and profile creation campaigns.',
            'Technical SEO: Address crawl errors, speed optimization, and mobile rendering problems.',
            'Link Building: Secure authoritative backlinks through content partnerships and outreach.',
            'Google Search Console: Track indexation issues, query performance, and crawl stats.',
            'Google Analytics: Set up custom dashboards to monitor organic traffic and conversions.',
            'Competitor Analysis: Reverse engineer competitors backlink and content strategies.',
            'Local SEO: Optimize Google Business Profile listing and local citations.',
            'Website Audit: Produce comprehensive reports outlining performance blockages.'
        ],
        'requirements' => [
            'Good Communication: Ability to draft clean reports and explain SEO tactics.',
            'SEO Knowledge: Deep understanding of ranking algorithms and ranking factors.',
            'WordPress Knowledge: Comfort editing pages, posts, and plugin settings (Yoast/RankMath).',
            'Basic HTML/CSS: Ability to read code and implement structural schema markups.',
            'Google Search Console: Experience diagnosing indexation and coverage errors.',
            'Ahrefs or SEMrush: Advanced proficiency with keyword planning and domain diagnostics tools.'
        ],
        'benefits' => [
            'Performance Bonus based on quarterly organic traffic goals.',
            'Clear career growth trajectory into Senior SEO Specialist role.',
            'Paid leaves (casual and sick leaves) as per company policy.',
            'Hands-on training and mentorship from senior digital marketing leads.',
            'Festival bonus paid during major national holidays.'
        ]
    ],
    'field-sales-executive' => [
        'id' => 'field-sales-executive',
        'title' => 'Field Sales Executive',
        'department' => 'Sales',
        'category' => 'Sales',
        'experience' => '1–2 Years',
        'salary' => '₹20,000 – ₹40,000',
        'location' => [
            'Delhi', 'Delhi NCR', 'Noida', 'Gurgaon', 'Bangalore', 'Pune', 
            'Chennai', 'Mumbai', 'Ahmedabad', 'Jaipur', 'Hyderabad', 
            'Patna', 'Kolkata', 'Chandigarh', 'Kerala'
        ], // Multiple locations supported
        'work_mode' => 'Work From Office / On-site Only',
        'employment_type' => 'Full Time',
        'hiring_status' => 'Hot Job',
        'posted_date' => 'July 20, 2026',
        'last_date' => 'September 15, 2026',
        'reporting_manager' => 'Sales Director',
        'open_positions' => 15,
        'overview' => 'We are seeking dynamic, energetic, and travel-ready Field Sales Executives across major Indian hubs. In this role, you will meet prospective clients face-to-face, showcase our top-tier Digital Marketing and IT services, and build profitable long-term partnerships.',
        'skills' => ['Client Handling', 'B2B Sales', 'Negotiation', 'Pitching', 'Relationship Management', 'CRM Tracking'],
        'responsibilities' => [
            'Generate new business opportunities through outbound prospecting.',
            'Visit clients and conduct face-to-face meetings daily.',
            'Promote company services including web design, SEO, and marketing campaigns.',
            'Achieve monthly sales targets set by the regional manager.',
            'Coordinate with marketing and technical teams for pre-sales preparation.',
            'Prepare and present tailored service quotations and business proposals.',
            'Build long-term client relationships to generate referrals.',
            'Maintain accurate customer and interaction records in our CRM.',
            'Attend client meetings and presentations to represent the brand.',
            'Provide detailed daily reporting to the regional sales manager.'
        ],
        'requirements' => [
            'Excellent Communication: Fluent in Hindi and regional language; conversational English.',
            'Sales Skills: Solid understanding of lead qualification and closing techniques.',
            'Negotiation: Ability to handle objections and close deals with win-win contracts.',
            'Client Handling: Customer-centric attitude with strong conflict resolution abilities.',
            'Presentation Skills: Comfortable presenting slides and case studies to directors.',
            'MS Office: Standard knowledge of Excel, Word, and PowerPoint.',
            'Travel Ready: Must be willing to travel extensively within the assigned territory.',
            'Two Wheeler preferred: Own transport is highly recommended for daily visits.'
        ],
        'benefits' => [
            'Travel Allowance: Full reimbursement for field visits and client meetings.',
            'Uncapped Sales Incentives based on target achievements.',
            'Performance Bonus: Monthly and quarterly bonuses for top performers.',
            'Festival bonus: Paid during major national holiday seasons.',
            'Structured career growth with promotions to Regional Sales Lead.',
            'Regular corporate training on marketing trends and digital services.'
        ]
    ],
    'digital-marketing-executive' => [
        'id' => 'digital-marketing-executive',
        'title' => 'Digital Marketing Executive',
        'department' => 'Digital Marketing',
        'category' => 'Digital Marketing',
        'experience' => '1–2 Years',
        'salary' => '₹20,000 – ₹40,000',
        'location' => 'Patna',
        'work_mode' => 'Work From Office',
        'employment_type' => 'Full Time',
        'hiring_status' => 'Active',
        'posted_date' => 'July 15, 2026',
        'last_date' => 'August 30, 2026',
        'reporting_manager' => 'Digital Marketing Manager',
        'open_positions' => 3,
        'overview' => 'Join our marketing unit to plan, create, and deploy multi-channel online campaigns. You will coordinate social channels, write ad scripts, configure newsletters, and help build a consistent brand identity for clients.',
        'skills' => ['Social Media Optimization', 'Canva Design', 'Email Marketing', 'Content Planning', 'Basic Copywriting'],
        'responsibilities' => [
            'Maintain and optimize social profiles (LinkedIn, Instagram, Facebook, X).',
            'Draft weekly content calendars containing hooks, designs, and captions.',
            'Coordinate with designers for visual asset creation.',
            'Plan and dispatch customer engagement newsletters via email clients.',
            'Monitor social metrics and formulate engagement reports.'
        ],
        'requirements' => [
            'Graduate in Business, Marketing, or Communications.',
            'Command of social marketing dashboards and scheduling software.',
            'Basic knowledge of Canva or photo-editing software.',
            'Active interest in digital trends and viral content layouts.'
        ],
        'benefits' => [
            'Mentorship from digital marketing directors.',
            'Paid leaves & casual off days.',
            'Festival bonus payouts.',
            'Regular training and certifications sponsored by company.'
        ]
    ],
    'performance-marketing-executive' => [
        'id' => 'performance-marketing-executive',
        'title' => 'Performance Marketing Executive',
        'department' => 'Digital Marketing',
        'category' => 'Digital Marketing',
        'experience' => '1–2 Years',
        'salary' => '₹20,000 – ₹60,000',
        'location' => 'Patna',
        'work_mode' => 'Work From Office',
        'employment_type' => 'Full Time',
        'hiring_status' => 'Urgent Hiring',
        'posted_date' => 'July 22, 2026',
        'last_date' => 'August 28, 2026',
        'reporting_manager' => 'Paid Media Head',
        'open_positions' => 1,
        'overview' => 'We are seeking a data-driven Performance Marketer to manage paid advertising budgets across Meta, Google, and LinkedIn. You will focus on scaling campaigns, reducing acquisition costs, and optimizing user journeys.',
        'skills' => ['Google Ads', 'Facebook Ads Manager', 'Conversion Tracking', 'A/B Testing', 'CPA Optimization'],
        'responsibilities' => [
            'Launch and optimize ad sets across Meta (Instagram/Facebook) and Google Networks.',
            'Define audience personas and configure retargeting lists.',
            'Implement conversion tracking pixels, custom events, and Google Tag Manager variables.',
            'Perform continuous A/B testing on ad copies, creatives, and landing pages.',
            'Draft transparent weekly ROAS (Return on Ad Spend) reports for clients.'
        ],
        'requirements' => [
            'Hands-on experience running ads with a proven ROI portfolio.',
            'Deep familiarity with custom variables, attribution models, and conversion APIs.',
            'Analytical mindset with proficiency in Excel data modeling.',
            'Creative sense to guide designers on high-performing ad formats.'
        ],
        'benefits' => [
            'Performance-linked incentives based on campaign ROI.',
            'Health cover & paid leaves.',
            'Fully paid industry certifications.',
            'Annual performance appraisals.'
        ]
    ],
    'business-development-executive' => [
        'id' => 'business-development-executive',
        'title' => 'Business Development Executive',
        'department' => 'Business Development',
        'category' => 'Business Development',
        'experience' => '1–2 Years',
        'salary' => '₹15,000 – ₹25,000',
        'location' => 'Patna',
        'work_mode' => 'Work From Office',
        'employment_type' => 'Full Time',
        'hiring_status' => 'Active',
        'posted_date' => 'July 14, 2026',
        'last_date' => 'September 01, 2026',
        'reporting_manager' => 'Business Development Head',
        'open_positions' => 4,
        'overview' => 'As a Business Development Executive, you will drive growth by identifying new leads, executing initial email outreach, and setting up qualified pitch sessions for our design and tech teams.',
        'skills' => ['Cold Outreach', 'Lead Sourcing', 'Inside Sales', 'Active Listening', 'Client Relationship'],
        'responsibilities' => [
            'Research and source quality leads via LinkedIn, directories, and databases.',
            'Execute personalized email campaigns and follow-ups.',
            'Arrange discovery calls and document client requirements.',
            'Draft preliminary business proposals under guidance.',
            'Maintain updated lead logs in company spreadsheets and CRM.'
        ],
        'requirements' => [
            'Bachelor\'s degree in any discipline.',
            'Enthusiasm for software sales and agency service offerings.',
            'Excellent phone etiquette and prompt written communication.',
            'High level of resilience and problem-solving skills.'
        ],
        'benefits' => [
            'Incremental incentives on every successful deal closure.',
            'Comprehensive onboarding and sales training modules.',
            'Festival bonuses & paid holidays.',
            'Team dinners and rewards for monthly achievers.'
        ]
    ],
    'mobile-app-developer' => [
        'id' => 'mobile-app-developer',
        'title' => 'Mobile App Developer',
        'department' => 'Development',
        'category' => 'Development',
        'experience' => '1–2 Years',
        'salary' => '₹20,000 – ₹40,000',
        'location' => 'Patna',
        'work_mode' => 'Work From Office',
        'employment_type' => 'Full Time',
        'hiring_status' => 'Hot Job',
        'posted_date' => 'July 19, 2026',
        'last_date' => 'August 31, 2026',
        'reporting_manager' => 'CTO / Engineering Lead',
        'open_positions' => 2,
        'overview' => 'We are seeking a Mobile App Developer with experience in Flutter or React Native. You will build user-friendly interfaces, connect REST APIs, implement offline databases, and deploy products to Android and iOS markets.',
        'skills' => ['Flutter / Dart', 'React Native', 'API Integration', 'UI Layouts', 'State Management'],
        'responsibilities' => [
            'Write clean, modular mobile code using modern state management (Bloc/Provider/Redux).',
            'Connect third-party JSON API endpoints and payment gateways.',
            'Optimize mobile rendering to guarantee 60fps animations.',
            'Integrate push notifications and local analytics events.',
            'Manage build processes and deploy to Google Play Store and Apple App Store.'
        ],
        'requirements' => [
            'Proven apps uploaded to Google Play or Apple App Store.',
            'Familiarity with Dart, JavaScript, and native SDK variables.',
            'Experience using Git version control and team pipelines.',
            'Analytical debugging skills for multi-screen formats.'
        ],
        'benefits' => [
            'Modern workstations equipped with testing devices.',
            'Opportunity to learn backend microservices and cloud structures.',
            'Flexible working brackets & leaves framework.',
            'Bi-annual performance review.'
        ]
    ],
    'project-manager' => [
        'id' => 'project-manager',
        'title' => 'Project Manager',
        'department' => 'Management',
        'category' => 'Management',
        'experience' => '1–2 Years',
        'salary' => '₹25,000 – ₹40,000',
        'location' => 'Patna',
        'work_mode' => 'Work From Office',
        'employment_type' => 'Full Time',
        'hiring_status' => 'Active',
        'posted_date' => 'July 16, 2026',
        'last_date' => 'August 25, 2026',
        'reporting_manager' => 'Director of Operations',
        'open_positions' => 1,
        'overview' => 'Seeking an organized Project Manager to act as a bridge between design, development, SEO, and the final client. You will draft scopes of work, assign deliverables, track sprints, and secure timelines.',
        'skills' => ['Agile Project Coordination', 'Task Scheduling', 'Client Communication', 'Scrum / Sprint planning', 'Quality Review'],
        'responsibilities' => [
            'Define project scope, deliverables, and strict timelines.',
            'Create task backlogs on Jira, ClickUp, or Trello, and assign cards to teams.',
            'Hold daily stand-ups to eliminate blockers for development and content.',
            'Deliver status reports to clients weekly.',
            'Conduct quality assurance tests to ensure output meets client guidelines.'
        ],
        'requirements' => [
            'Prior experience in an IT agency or digital agency ecosystem.',
            'Command of PM frameworks (Scrum/Kanban) and tracking dashboards.',
            'Superb interpersonal skills to coordinate cross-functional targets.',
            'Technical familiarity to gauge dev timelines accurately.'
        ],
        'benefits' => [
            'Leadership training program.',
            'Health coverage & monthly fitness stipend.',
            'Company-funded technical and agile certifications.',
            'Paid sick and casual leaves.'
        ]
    ],
    'graphic-designer-video-editor' => [
        'id' => 'graphic-designer-video-editor',
        'title' => 'Graphic Designer & Video Editor',
        'department' => 'Design',
        'category' => 'Design',
        'experience' => '1–2 Years',
        'salary' => '₹15,000 – ₹25,000',
        'location' => 'Patna',
        'work_mode' => 'Work From Office',
        'employment_type' => 'Full Time',
        'hiring_status' => 'Urgent Hiring',
        'posted_date' => 'July 17, 2026',
        'last_date' => 'August 30, 2026',
        'reporting_manager' => 'Creative Director',
        'open_positions' => 2,
        'overview' => 'Bring campaigns to life through visual assets and engaging video. You will design brand templates, promotional reels, and YouTube explainers that boost brand recall for client accounts.',
        'skills' => ['Photoshop', 'Illustrator', 'Premiere Pro', 'After Effects', 'Visual Branding'],
        'responsibilities' => [
            'Produce creative layouts for social posts, web banners, and client assets.',
            'Edit raw video recordings, compile transitions, add subtitles and audios.',
            'Design creative animations for reels, stories, and advertisements.',
            'Maintain visual consistency across multiple brand guidelines.',
            'Deliver raw file mockups in specified dimensions on deadline.'
        ],
        'requirements' => [
            'Outstanding portfolio showcasing vector graphics, illustrations, and edited videos.',
            'Mastery of Adobe Premiere Pro, After Effects, Photoshop, and Illustrator.',
            'Active engagement with social video trends and short-form storytelling.',
            'Willingness to take feedback and refine mockups accordingly.'
        ],
        'benefits' => [
            'Modern editing suite equipped with high-end rendering units.',
            'Creative independence with guidance on premium projects.',
            'Festival bonuses and paid leaves package.',
            'Weekly skill workshops on design styles.'
        ]
    ],
    'content-writer' => [
        'id' => 'content-writer',
        'title' => 'Content Writer',
        'department' => 'Content',
        'category' => 'Content',
        'experience' => '1–2 Years',
        'salary' => '₹15,000 – ₹20,000',
        'location' => 'Patna',
        'work_mode' => 'Work From Office',
        'employment_type' => 'Full Time',
        'hiring_status' => 'Active',
        'posted_date' => 'July 18, 2026',
        'last_date' => 'September 05, 2026',
        'reporting_manager' => 'Content Head',
        'open_positions' => 2,
        'overview' => 'We are seeking a Content Writer to craft SEO blogs, copy for web landing pages, and captions for social accounts. The candidate must write error-free, engaging copy that matches distinct brand tones.',
        'skills' => ['Blog Copywriting', 'SEO Content Mapping', 'Proofreading', 'Brand Tone Adaptability', 'Content Research'],
        'responsibilities' => [
            'Write high-ranking blogs and research-backed web copies.',
            'Format articles using keywords identified by the SEO team.',
            'Draft catchy copy for social reels, scripts, and email newsletters.',
            'Proofread and edit draft articles before final publishing.',
            'Perform secondary research to verify data and quotes in content.'
        ],
        'requirements' => [
            'Portfolio of published articles (medium, blogs, or web pages).',
            'Flawless command of written English grammar and syntax.',
            'Understand structural SEO writing (H2/H3 layouts, keyword density).',
            'Strong research habits and adaptability.'
        ],
        'benefits' => [
            'Guidance on advanced copy and brand messaging.',
            'Paid sick, casual, and annual leaves.',
            'Performance increments based on client conversions.',
            'Festival gifts and performance bonus.'
        ]
    ]
];

// Helper functions for jobs
function getJobCategories($jobsList) {
    $categories = [];
    foreach ($jobsList as $job) {
        $cat = $job['category'];
        if (!isset($categories[$cat])) {
            $categories[$cat] = 0;
        }
        $categories[$cat] += $job['open_positions'];
    }
    return $categories;
}

function getUniqueLocations($jobsList) {
    $locations = [];
    foreach ($jobsList as $job) {
        if (is_array($job['location'])) {
            foreach ($job['location'] as $loc) {
                $locations[$loc] = true;
            }
        } else {
            $locations[$job['location']] = true;
        }
    }
    return array_keys($locations);
}
