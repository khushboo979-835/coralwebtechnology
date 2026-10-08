<?php
require_once __DIR__ . '/portfolio_data.php';
?>
<section class="py-5 bg-white portfolio-showcase-section">
    <div class="container">
        
        <!-- Blue Announcement Banner matching reference style -->
        <div class="portfolio-top-banner text-center text-white py-2 px-3 mb-4 rounded-3 shadow-sm mx-auto" style="max-width: 900px; background: #0052cc; font-size: 1.15rem; font-weight: 700; letter-spacing: 0.5px;">
            Start Your Online Journey Today !
        </div>

        <div class="head-title mb-4 text-center">
            <h2 class="fw-bold mb-2">Explore Our <span>Recent Projects</span></h2>
            <p class="text-muted fs-6" style="max-width: 750px; margin: 0 auto;">
                Go through our recent projects and discover how we've made difference for several businesses !
            </p>
        </div>
        
        <div class="portfolio-browser mx-auto" style="max-width: 1000px;">
            <div class="browser-header">
                <div class="browser-dot dot-red"></div>
                <div class="browser-dot dot-yellow"></div>
                <div class="browser-dot dot-green"></div>
                <div class="browser-title">Live Project Showcase</div>
            </div>
            
            <div class="swiper swiper-portfolio">
                <div class="swiper-wrapper">
                    <?php foreach($portfolio_projects as $p): 
                        $local_img = $base_url . "assets/portfolio/" . $p['img'];
                        $fallback_img = "https://image.thum.io/get/width/600/crop/800/noanimate/" . $p['url'];
                    ?>
                    <div class="swiper-slide">
                        <div class="project-card-wrapper">
                            <div class="project-card-image-box">
                                <img src="<?= $local_img ?>" alt="<?= htmlspecialchars($p['title']) ?>" loading="lazy" onerror="this.onerror=null;this.src='<?= $fallback_img ?>';">
                            </div>
                            <div class="project-card-body text-center">
                                <span class="project-domain-text"><?= htmlspecialchars($p['display_url']) ?></span>
                                <div>
                                    <a href="<?= $p['url'] ?>" target="_blank" rel="noopener" class="btn-visit-site">
                                        Visit Site <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="browser-footer text-center">
                <div class="d-inline-flex align-items-center gap-2 mb-3">
                    <div class="trust-check"><i class="bi bi-check-lg"></i></div>
                    <span class="trust-text-main">Trusted by 100+ businesses across India</span>
                </div>
                <div>
                    <a href="https://api.whatsapp.com/send?phone=919142569346&text=Hi%20Coral%20Web%20Technology,%20I%20want%20to%20discuss%20a%20project!" target="_blank" class="btn-explore-portfolio">
                        <i class="bi bi-lightning-fill me-2"></i> Explore Our Portfolio
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Portfolio Browser Frame */
.portfolio-showcase-section {
    position: relative;
}

.portfolio-browser {
    background: #f0fdf4;
    border: 1px solid #d1fae5;
    border-radius: 20px;
    padding: 0;
    overflow: hidden;
    position: relative;
    margin-top: 1.5rem;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
}

.browser-header {
    background: #e2e8f0;
    padding: 12px 20px;
    display: flex;
    align-items: center;
    gap: 8px;
    border-bottom: 1px solid #cbd5e1;
}

.browser-dot { width: 10px; height: 10px; border-radius: 50%; }
.dot-red { background: #ff5f56; }
.dot-yellow { background: #ffbd2e; }
.dot-green { background: #27c93f; }

.browser-title {
    font-size: 14px;
    font-weight: 600;
    margin-left: auto;
    margin-right: auto;
    opacity: 0.8;
    color: #334155;
}

/* Swiper Slider */
.swiper-portfolio {
    padding: 30px 15px 40px;
    width: 100%;
    background: #f8fafc;
}

.swiper-portfolio .swiper-slide {
    width: 320px;
    height: auto;
    border-radius: 16px;
    overflow: hidden;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

@media (min-width: 768px) {
    .swiper-portfolio .swiper-slide {
        width: 380px;
    }
}

.project-card-wrapper {
    padding: 16px;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.project-card-image-box {
    width: 100%;
    height: 220px;
    border-radius: 12px;
    overflow: hidden;
    background: #f1f5f9;
    border: 1px solid #e2e8f0;
    position: relative;
}

.project-card-image-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    transition: transform 0.6s ease;
}

.swiper-slide:hover .project-card-image-box img {
    transform: scale(1.05);
}

.project-card-body {
    padding-top: 14px;
}

.project-domain-text {
    display: block;
    font-size: 14px;
    font-weight: 500;
    color: #64748b;
    margin-bottom: 8px;
}

.btn-visit-site {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: #0052cc;
    font-size: 15px;
    font-weight: 700;
    text-decoration: none;
    transition: color 0.3s ease, transform 0.3s ease;
}

.btn-visit-site:hover {
    color: #003399;
    transform: translateX(4px);
}

.swiper-button-next, .swiper-button-prev {
    color: #0052cc;
    background: rgba(255, 255, 255, 0.9);
    width: 44px;
    height: 44px;
    border-radius: 50%;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    backdrop-filter: blur(4px);
    transition: background 0.3s ease, transform 0.3s ease;
}

.swiper-button-next:hover, .swiper-button-prev:hover {
    background: #0052cc;
    color: #ffffff;
    transform: scale(1.08);
}

.swiper-button-next:after, .swiper-button-prev:after {
    font-size: 18px;
    font-weight: bold;
}

.browser-footer {
    background: #ffffff;
    padding: 24px 20px;
    border-top: 1px solid #e2e8f0;
}

.trust-check {
    width: 22px;
    height: 22px;
    background: #2563eb;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
}

.trust-text-main {
    font-size: 15px;
    font-weight: 700;
    color: #1e293b;
}

.btn-explore-portfolio {
    background: #0052cc;
    color: #ffffff !important;
    padding: 12px 32px;
    border-radius: 10px;
    font-weight: 700;
    font-size: 1.05rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 8px 25px rgba(0, 82, 204, 0.3);
    transition: all 0.3s ease;
}

.btn-explore-portfolio:hover {
    background: #003399;
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(0, 82, 204, 0.4);
}
</style>
