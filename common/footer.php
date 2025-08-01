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
<style>
    .footer-social a {
        font-size: 18px;
        transition: all 0.3s ease-in-out;
        color: var(--primary-color);
    }

    .footer-main a {
        color: var(--tertiary-color);
        text-decoration: none;
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

    .footer-top {
        background-color: var(--secondary-color);
        border-top: 1px solid var(--primary-color);
        border-bottom: 1px solid var(--tertiary-color);
    }

    .footer-main {
        background-color: var(--primary-color);
        color: var(--tertiary-color);
    }

    .footer-bottom {
        background-color: var(--primary-color);
        color: var(--tertiary-color);
    }
</style>
<footer class="footer-section"> <!-- Main Footer -->
    <div class="footer-main py-5">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 mb-4">
                    <h5 class="">About Corevix</h5>
                    <p class="text-justify">
                        At Corevix Technology, we are passionate about building digital solutions that help businesses
                        grow, scale, and succeed in the modern world. Founded with the mission to deliver high-quality
                        IT services, we specialize in web development, digital marketing, SEO, and graphic design — all
                        tailored to meet our clients’ unique goals.
                    </p>
                    <div class="footer-social">
                        <a href="" target="_blank" class=" me-3 text-decoration-none">
                            <img src="<?= $base_url ?>assets/images/others/facebook.webp" alt="facebook"
                                class="img-fluid" width="30px">
                        </a>
                        <a href="" target="_blank" class=" me-3 text-decoration-none">
                            <img src="<?= $base_url ?>assets/images/others/instagram.webp" alt="insta" class="img-fluid"
                                width="30px">
                        </a>
                        <a href="" target="_blank" class=" me-3 text-decoration-none">
                            <img src="<?= $base_url ?>assets/images/others/linkedin.webp" alt="twitter"
                                class="img-fluid" width="30px">
                        </a>
                        <a href="#" class=" me-3 text-decoration-none">
                            <img src="<?= $base_url ?>assets/images/others/twitter.webp" alt="twitter" target="_blank"
                                class="img-fluid" width="30px">
                        </a>
                        <a href="#" class="text-decoration-none">
                            <img src="<?= $base_url ?>assets/images/others/youtube.webp" alt="insta" target="_blank"
                                class="img-fluid" width="30px">
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-md-5 mb-4">
                    <div class="row">
                        <div class="col-5">
                            <h5>Quick Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="<?= $base_url ?>" class="">Home</a></li>
                                <li><a href="about-us.php" class="">About Us</a></li>
                                <li><a href="client-reviews.php" class="">Testimonials</a></li>
                                <li><a href="<?= $base_url ?>blogs/" class="">Blogs</a></li>
                                <li><a href="gallery.php" class="">Gallery</a></li>
                                <li><a href="contact-us.php" class="">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-7">
                            <h5>Services</h5>
                            <ul class="list-unstyled">
                                <li><a href="<?= $base_url ?>" class="">Digital Marketing</a></li>
                                <li><a href="about-us.php" class="">Seo</a></li>
                                <li><a href="client-reviews.php" class="">Paid Advertising</a></li>
                                <li><a href="<?= $base_url ?>blogs/" class="">Custom Digital Strategy</a></li>
                                <li><a href="gallery.php" class="">Social Media Marketing</a></li>
                                <li><a href="contact-us.php" class="">Design & Development</a></li>
                                <li><a href="contact-us.php" class="">Content Writing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-md-3 mb-4">
                    <h5>Contact Us</h5>
                    <div class="py-1">
                        <p class=""><i class="bi bi-geo-alt me-2"></i>Boring Road Chauraha, patna</p>
                    </div>
                    <div class="py-1">
                        <p class=""><i class="bi bi-envelope me-2"></i>Email: info@corevixtechnology.com</p>
                    </div>
                    <div class="py-1">
                        <p class=""><i class="bi bi-telephone me-2"></i> +91-987654321</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="footer-bottom py-2 border-top  text-center ">
        <p class="mb-0 text-white">
            <script>
                document.write(new Date().getFullYear());
            </script>
            &copy; Corevix technology. All rights reserved.
        </p>
    </div>
</footer>
<!-- Locomotive Scroll JS -->