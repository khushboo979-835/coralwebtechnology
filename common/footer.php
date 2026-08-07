<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 800
    });
</script>
<!-- Bootstrap 5.3.3 JS Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<!-- JS Scripts -->

<!-- ============================================================================================ -->
<?php if (isset($service_key) && function_exists('renderServiceLocationsSection')): ?>
    <?php renderServiceLocationsSection($service_key, $base_url); ?>
<?php endif; ?>
<style>
    .footer-social a {
        font-size: 18px;
        transition: all 0.3s ease-in-out;
        color: var(--primary-color);
    }

    .footer-main a {
        color: var(--tertiary-color);
        text-decoration: none;
        font-weight: 500;
    }

    .footer-main h5 {
        font-weight: 600;
        margin-bottom: 15px;
    }

    .footer-main ul li {
        margin-bottom: 8px;
    }

    .footer-main ul li a {
        text-decoration: none;
    }

    .footer-main ul li a:hover {
        color: var(--tertiary-color);
    }


    .footer-main {
        background-color: var(--primary-color);
        color: var(--tertiary-color);
    }

    .footer-bottom {
        background-color: var(--primary-color);
        color: var(--tertiary-color);
    }

    .footer-bottom {
        background-color: var(--primary-color);
        color: var(--tertiary-color);
    }
</style>
<footer class="footer-section">
    <div class="footer-main py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="">About Coral Web</h5>
                    <p class="text-justify">
                        At Coral Web Technology, we are passionate about building digital solutions that help businesses
                        grow, scale, and succeed in the modern world. Founded with the mission to deliver high-quality
                        IT services, we specialize in web development, digital marketing, SEO, and graphic design — all
                        tailored to meet our clients’ unique goals.
                    </p>
                    <div class="footer-social">
                        <a href="#" target="_blank" class=" me-3 text-decoration-none" aria-label="Facebook Page">
                            <img src="<?= $base_url ?>assets/images/others/facebook.webp" alt="Facebook"
                                class="img-fluid" width="30px">
                        </a>
                        <a href="#" target="_blank" class=" me-3 text-decoration-none" aria-label="Instagram Page">
                            <img src="<?= $base_url ?>assets/images/others/instagram.webp" alt="Instagram" class="img-fluid"
                                width="30px">
                        </a>
                        <a href="#" target="_blank" class=" me-3 text-decoration-none" aria-label="LinkedIn Page">
                            <img src="<?= $base_url ?>assets/images/others/linkedin.webp" alt="LinkedIn"
                                class="img-fluid" width="30px">
                        </a>
                        <a href="#" target="_blank" class=" me-3 text-decoration-none" aria-label="Twitter Page">
                            <img src="<?= $base_url ?>assets/images/others/twitter.webp" alt="Twitter"
                                class="img-fluid" width="30px">
                        </a>
                        <a href="#" target="_blank" class="text-decoration-none" aria-label="YouTube Page">
                            <img src="<?= $base_url ?>assets/images/others/youtube.webp" alt="YouTube"
                                class="img-fluid" width="30px">
                        </a>
                    </div>
                </div>

                <div class="col-md-4  mt-4 mt-lg-0 footer-links">
                    <div class="row">
                        <div class="col-5">
                            <h5>Quick Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="<?= $base_url ?>" class=""><i class="bi bi-arrow-right me-2"></i>Home</a>
                                </li>
                                <li><a href="<?= $base_url ?>about-us.php" class=""><i class="bi bi-arrow-right me-2"></i>About Us</a>
                                </li>
                                <li><a href="<?= $base_url ?>client-reviews.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Testimonials</a></li>
                                <li><a href="<?= $base_url ?>blogs/" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Blogs</a></li>
                                <li><a href="<?= $base_url ?>gallery.php" class=""><i class="bi bi-arrow-right me-2"></i>Gallery</a>
                                </li>
                                <li><a href="<?= $base_url ?>contact-us.php" class=""><i class="bi bi-arrow-right me-2"></i>Contact
                                        Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-7">
                            <h5>Services</h5>
                            <ul class="list-unstyled">
                                <li><a href="<?= $base_url ?>services/software-development.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Software Development</a></li>
                                <li><a href="<?= $base_url ?>services/mobile-app-development.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Mobile App Development</a></li>
                                <li><a href="<?= $base_url ?>services/website-development.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Website Development</a></li>
                                <li><a href="<?= $base_url ?>services/graphic-&-branding.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Graphic & Branding</a></li>
                                <li><a href="<?= $base_url ?>services/e-commerce-services.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>E Commerce Services</a></li>
                                <li><a href="<?= $base_url ?>services/mobile-ecommerce-app.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Mobile Eccomerce Apps</a></li>
                                <li><a href="<?= $base_url ?>services/ecommerce-marketing.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>E-commerce Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <h5 class="text-white">Contact Us</h5>
                    <div class="py-1">
                        <p class=""><i class="bi bi-geo-alt me-2"></i> <strong>Corporate Office: </strong> Chandrakanta Appartment, Room No:- 201, Opposite Harihar Chamber, Boring Road Chauraha,
                              Pandooi Kothi, Patna - 800001</p>
                              <p class=""><i class="bi bi-geo-alt me-2"></i><strong>1<sup>st</sup> Branch: </strong> Pusp ratan row house 
Near Vishwakarma chauk Shramik nagar, carbon naka , MIDC Satpur, Nashik, Maharashtra, pin code 422007</p>

<p class=""><i class="bi bi-geo-alt me-2"></i><strong>2<sup>nd</sup> Branch: </strong> 7F/7A , DDA Building, District centre Janakpuri, New Delhi, Delhi, 110058</p>

<p class=""><i class="bi bi-geo-alt me-2"></i><strong>3<sup>rd</sup> Branch: </strong> Above Monginis Cake Shop, Aundh-Wakad Rd, opposite Copa Cobana Restaurant, Vishal Nagar, Pune, Maharashtra 411027</p>
                    </div>
                    <div class="py-1">
                        <p class=""><i class="bi bi-envelope me-2"></i>Email: coralwebtechnology@gmail.com</p>
                    </div>
                    <div class="py-1">
                        <p class=""><i class="bi bi-telephone me-2"></i> +91-9117741984</p>
                    </div>
                    <div class="py-1">
                        <p class=""><i class="bi bi-telephone me-2"></i> +91-9117741984</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom py-2 border-top  text-center ">
        <p class="mb-0 text-white">
            <script>
                document.write(new Date().getFullYear());
            </script>
            &copy; Coral Web technology. All rights reserved.
        </p>
        <div class="py-2">
            <div class="mb-0 text-white">
                <a href="<?= $base_url ?>privacy-policy.php" class="text-white text-decoration-none">Privacy Policy</a>
                |
                <a href="<?= $base_url ?>terms-conditions.php" class="text-white text-decoration-none">Terms &
                    Conditions</a>
            </div>
        </div>
   </footer>

