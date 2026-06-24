<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    
    <style>
        /* Portfolio Specific Styles */
        :root {
            --portfolio-bg: #f8fafc;
            --portfolio-card: #ffffff;
            --portfolio-text: #1e293b;
            --portfolio-muted: #64748b;
            --portfolio-border: #e2e8f0;
            --portfolio-primary: #0f172a;
            --portfolio-accent: #ff4d4d; /* Using Coral Theme color */
            
            --portfolio-shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --portfolio-shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --portfolio-shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }
        .portfolio-page-wrapper {
            background-color: var(--portfolio-bg);
            padding: 60px 0 80px;
            font-family: 'Montserrat', sans-serif;
        }
        .portfolio-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .portfolio-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--portfolio-primary);
            margin-bottom: 1rem;
            letter-spacing: -1px;
        }
        .portfolio-header p {
            font-size: 1.1rem;
            color: var(--portfolio-muted);
            max-width: 600px;
            margin: 0 auto;
        }
        .portfolio-controls {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-bottom: 3rem;
            align-items: center;
        }
        .search-container {
            position: relative;
            width: 100%;
            max-width: 500px;
        }
        .search-container i {
            position: absolute;
            left: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--portfolio-muted);
            font-size: 1.25rem;
        }
        #portfolioSearch {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 3rem;
            border: 1px solid var(--portfolio-border);
            border-radius: 50px;
            font-size: 1rem;
            background-color: var(--portfolio-card);
            color: var(--portfolio-text);
            transition: all 0.3s ease;
            box-shadow: var(--portfolio-shadow-sm);
        }
        #portfolioSearch:focus {
            outline: none;
            border-color: var(--portfolio-accent);
            box-shadow: 0 0 0 3px rgba(255, 77, 77, 0.1);
        }
        .filter-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            justify-content: center;
        }
        .filter-btn {
            padding: 0.5rem 1.25rem;
            border: 1px solid var(--portfolio-border);
            border-radius: 50px;
            background-color: var(--portfolio-card);
            color: var(--portfolio-muted);
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .filter-btn:hover {
            border-color: var(--portfolio-muted);
            color: var(--portfolio-text);
        }
        .filter-btn.active {
            background-color: var(--portfolio-accent);
            color: #fff;
            border-color: var(--portfolio-accent);
        }
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2rem;
        }
        .p-card {
            background-color: var(--portfolio-card);
            border: 1px solid var(--portfolio-border);
            border-radius: 12px;
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: var(--portfolio-shadow-sm);
        }
        .p-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background-color: var(--portfolio-accent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .p-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--portfolio-shadow-lg);
            border-color: transparent;
        }
        .p-card:hover::before {
            opacity: 1;
        }
        .p-category {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background-color: var(--portfolio-bg);
            color: var(--portfolio-muted);
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 50px;
            margin-bottom: 1rem;
            align-self: flex-start;
        }
        .p-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--portfolio-primary);
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }
        .p-link-text {
            color: var(--portfolio-muted);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            word-break: break-all;
            text-decoration: none;
        }
        .p-link-text i { font-size: 1rem; }
        .p-footer {
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px solid var(--portfolio-border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .p-visit-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--portfolio-accent);
            transition: color 0.3s ease;
            text-decoration: none;
        }
        .p-card:hover .p-visit-btn {
            color: #d13030;
        }
        .p-visit-btn i {
            transition: transform 0.3s ease;
        }
        .p-card:hover .p-visit-btn i {
            transform: translateX(4px);
        }
        .p-empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--portfolio-muted);
            width: 100%;
        }
        .p-empty-state i {
            font-size: 4rem;
            color: var(--portfolio-border);
            margin-bottom: 1rem;
        }
        .p-send-btn {
            background: none;
            border: none;
            color: var(--portfolio-muted);
            font-size: 1.25rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem;
            border-radius: 50%;
        }
        .p-send-btn:hover {
            color: var(--portfolio-accent);
            background-color: var(--portfolio-bg);
            transform: translateY(-2px);
        }
        /* Toast Notification */
        .p-toast {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background-color: var(--portfolio-primary);
            color: #ffffff;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            box-shadow: var(--portfolio-shadow-lg);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            z-index: 9999;
            transform: translateY(150%);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        .p-toast.show {
            transform: translateY(0);
            opacity: 1;
        }
        .p-toast i {
            color: #4ade80;
            font-size: 1.25rem;
        }
        /* Breadcrumb banner */
        .about-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/about-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 100px 0;
        }
        .about-breadcrumb h1 {
            color: #fff;
            font-family: 'Playfair Display', serif;
            font-size: 70px;
            font-weight: 700;
            letter-spacing: -1px;
        }
        @media screen and (max-width: 768px) {
            .about-breadcrumb h1 { font-size: 50px; }
        }
        .about-breadcrumb a, .about-breadcrumb .active {
            color: #fff;
            font-family: 'Playfair Display', serif;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .about-breadcrumb a:hover { color: #f0f0f0; }
    </style>
</head>
<body>
    <?php include 'common/header.php'; ?>
    <!-- Breadcrumb -->
    <section class="about-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Our Work</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?= $base_url?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Work</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Main Content -->
    <div class="portfolio-page-wrapper">
        <div class="container">
            <div class="portfolio-header">
                <h2>Explore Our Client Success Stories</h2>
                <p>We've delivered exceptional digital solutions across various industries.</p>
            </div>
            <!-- Controls -->
            <div class="portfolio-controls">
                <div class="search-container">
                    <i class="bi bi-search"></i>
                    <input type="text" id="portfolioSearch" placeholder="Search projects by name or URL...">
                </div>
                
                <div class="filter-tags" id="portfolioFilters">
                    <button class="filter-btn active" data-filter="all">All Projects</button>
                    <button class="filter-btn" data-filter="healthcare">Healthcare & Rehab</button>
                    <button class="filter-btn" data-filter="ngo">NGO & Foundation</button>
                    <button class="filter-btn" data-filter="business">Business & Tech</button>
                    <button class="filter-btn" data-filter="services">Services & Logistics</button>
                    <button class="filter-btn" data-filter="education">Education & Others</button>
                </div>
            </div>
            <!-- Grid -->
            <div class="portfolio-grid" id="portfolioGrid">
                <!-- Cards injected here -->
            </div>
            <!-- Empty state -->
            <div class="p-empty-state" id="portfolioEmpty" style="display: none;">
                <i class="bi bi-folder-x"></i>
                <h3>No projects found</h3>
                <p>Try adjusting your search or filter.</p>
            </div>
        </div>
    </div>
    <!-- Script for functionality -->
    <script>
        const projects = [
            { name: 'Shanti Foundation', url: 'shanti-foundation.co.in', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Akansha Foundation', url: 'akanshafoundation.com', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Mangalam Foundation', url: 'mangalamfoundation.site', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Home Care Service Center', url: 'homecareservicenter.in', category: 'services', categoryLabel: 'Services & Logistics' },
            { name: 'Navjagran Foundation', url: 'navjagranfoundation.com', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Radhe Kishori Packers Movers', url: 'radhekishoripakersmovers.in', category: 'services', categoryLabel: 'Services & Logistics' },
            { name: 'The Expert Driver', url: 'theexpertdriver.in', category: 'services', categoryLabel: 'Services & Logistics' },
            { name: 'Amarnath Packers & Movers', url: 'amarnathpackersandmovers.in', category: 'services', categoryLabel: 'Services & Logistics' },
            { name: 'Lawanya Derma Hair Transplant', url: 'lawanyadermahairtransplant.in', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'Patna AC Repair', url: 'patnaacrepairappliancecare.in', category: 'services', categoryLabel: 'Services & Logistics' },
            { name: 'Swetank Foundation', url: 'swetankfoundation.in', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Life Care Center', url: 'lifecarecenter.in', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'Ehsaas Foundation Center', url: 'ehsaasfoundationcenterin.site', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Power Academy', url: 'poweracademy.life', category: 'education', categoryLabel: 'Education & Others' },
            { name: 'Adarsh Skin Care Clinic', url: 'adarshskincareclinic.com', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'Paras Happiness Homes', url: 'parashappinesshomes.in', category: 'business', categoryLabel: 'Business & Tech' },
            { name: 'Lawanya Aesthetic Clinic', url: 'lawanyadermaandaestheticclinic.com', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'Shreeji Gems Vastu Vigyan', url: 'shreejigemsvastuvigyan.in', category: 'business', categoryLabel: 'Business & Tech' },
            { name: 'Manav Seva Rehab Center', url: 'manavsevarehabilitationcenter.in', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'Digital Web SEO Ads', url: 'digitalwebseoadsagency.online', category: 'business', categoryLabel: 'Business & Tech' },
            { name: 'Madhav Care Center', url: 'madhavcarecenter.in', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'Jan Samaj Kalyan Sansthan', url: 'jansamajkalyansevasansthan.in', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Bihar Seva Sansthan', url: 'biharsevasansthan.in', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Ehsas De-addiction Center', url: 'ehsasdeaddictionrehabilitationcenter.in', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'Swetank Nasha Mukti Kendra', url: 'swetanknashamuktikendrafoundation.in', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Deep Nasha Mukti Kendra', url: 'deepnashamuktikendra.in', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'ZF Dreams', url: 'zfdreams.in', category: 'business', categoryLabel: 'Business & Tech' },
            { name: 'Hansraj Interior Designer', url: 'interiordesignerhansraj.info', category: 'business', categoryLabel: 'Business & Tech' },
            { name: 'Attensile Techworks', url: 'attensiletechworks.in', category: 'business', categoryLabel: 'Business & Tech' },
            { name: 'washmartkankarbagh', url: 'https://washmartkankarbagh.in/', category: 'business', categoryLabel: 'Business & Tech' },
            { name: 'Ehsaas Nasha Mukti Kendra', url: 'ehsaasnashamuktikendra.com', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'Bhagya Tech', url: 'bhagyatech.com', category: 'business', categoryLabel: 'Business & Tech' },
            { name: 'Rao Refrigeration', url: 'raorefrigeration.in', category: 'services', categoryLabel: 'Services & Logistics' },
            { name: 'Annapurna Home Tuition', url: 'annapurnahometuition.in', category: 'education', categoryLabel: 'Education & Others' },
            { name: 'Muskan Nasha Mukti Kendra', url: 'muskannashamuktikendra.life', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'Coral Web Technology', url: 'coralwebtechnology.com', category: 'business', categoryLabel: 'Business & Tech' },
            { name: 'Samaj Kalyan Foundation', url: 'samajkalyanfoundation.life', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Hansraj Enterprises', url: 'hansrajenterprises.com', category: 'business', categoryLabel: 'Business & Tech' },
            { name: 'Jan Samaj Seva Sansthan', url: 'jansamajsevasansthan.in', category: 'ngo', categoryLabel: 'NGO & Foundation' },
            { name: 'Sudhaar Nasha Mukti Kendra', url: 'sudhaarnashamuktikendra.in', category: 'healthcare', categoryLabel: 'Healthcare & Rehab' },
            { name: 'Goldenrod Jellyfish', url: 'goldenrod-jellyfish-682734.hostingersite.com', category: 'other', categoryLabel: 'Education & Others' }
        ];
        document.addEventListener('DOMContentLoaded', () => {
            const grid = document.getElementById('portfolioGrid');
            const searchInput = document.getElementById('portfolioSearch');
            const filterBtns = document.querySelectorAll('.filter-btn');
            const emptyState = document.getElementById('portfolioEmpty');
            let currentFilter = 'all';
            let searchQuery = '';
            const renderCards = () => {
                grid.innerHTML = '';
                
                const filtered = projects.filter(p => {
                    const matchF = currentFilter === 'all' || p.category === currentFilter;
                    const matchS = p.name.toLowerCase().includes(searchQuery.toLowerCase()) || 
                                   p.url.toLowerCase().includes(searchQuery.toLowerCase());
                    return matchF && matchS;
                });
                if (filtered.length === 0) {
                    grid.style.display = 'none';
                    emptyState.style.display = 'block';
                } else {
                    grid.style.display = 'grid';
                    emptyState.style.display = 'none';
                    filtered.forEach(p => {
                        const href = p.url.startsWith('http') ? p.url : `https://${p.url}`;
                        
                        const card = document.createElement('div');
                        card.className = 'p-card';
                        card.innerHTML = `
                            <span class="p-category">${p.categoryLabel}</span>
                            <h3 class="p-title">${p.name}</h3>
                            <a href="${href}" target="_blank" class="p-link-text">
                                <i class="bi bi-link-45deg"></i> ${p.url}
                            </a>
                            <div class="p-footer">
                                <a href="${href}" target="_blank" class="p-visit-btn">
                                    Visit Website <i class="bi bi-arrow-right"></i>
                                </a>
                                <button class="p-send-btn" data-name="${p.name}" data-url="${href}" title="Send/Share to Client">
                                    <i class="bi bi-send"></i>
                                </button>
                            </div>
                        `;
                        grid.appendChild(card);
                    });
                }
            };
            renderCards();
            searchInput.addEventListener('input', (e) => {
                searchQuery = e.target.value;
                renderCards();
            });
            filterBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    e.target.classList.add('active');
                    currentFilter = e.target.getAttribute('data-filter');
                    renderCards();
                });
            });
            // --- Share / Send Functionality ---
            const toast = document.createElement('div');
            toast.className = 'p-toast';
            toast.innerHTML = `<i class="bi bi-check-circle-fill"></i> <span class="p-toast-message"></span>`;
            document.body.appendChild(toast);
            let toastTimeout;
            const showToast = (message) => {
                const toastMessage = toast.querySelector('.p-toast-message');
                toastMessage.textContent = message;
                toast.classList.add('show');
                
                clearTimeout(toastTimeout);
                toastTimeout = setTimeout(() => {
                    toast.classList.remove('show');
                }, 3000);
            };
            grid.addEventListener('click', async (e) => {
                const sendBtn = e.target.closest('.p-send-btn');
                if (sendBtn) {
                    const name = sendBtn.getAttribute('data-name');
                    const url = sendBtn.getAttribute('data-url');
                    const shareData = {
                        title: name,
                        text: `Check out this project: ${name}`,
                        url: url
                    };
                    try {
                        if (navigator.share) {
                            await navigator.share(shareData);
                        } else {
                            await navigator.clipboard.writeText(url);
                            showToast(`Link for ${name} copied!`);
                        }
                    } catch (err) {
                        if (err.name !== 'AbortError') {
                            try {
                                await navigator.clipboard.writeText(url);
                                showToast(`Link copied!`);
                            } catch (clipboardErr) {
                                console.error('Clipboard error:', clipboardErr);
                            }
                        }
                    }
                }
            });
        });
    </script>
    
    <?php include 'common/footer.php'; ?>
</body>
</html>
