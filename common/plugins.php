<!-- ✅ Preload critical Bootstrap first -->
<link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></noscript>

<!-- ✅ AOS Animation CSS (async load) -->
<link rel="preload" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet"></noscript>

<!-- ✅ Bootstrap Icons -->
<link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet"></noscript>

<!-- ✅ Your Custom CSS (load last so overrides work properly) -->
<link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css?v=<?= time() ?>">
