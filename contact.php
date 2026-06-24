<style>
    .form-card {
        background: url('assets/images/others/contact.avif') no-repeat center center/cover;
        border-radius: 16px;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.1);
        padding: 40px;
    }

    .form-card h2 {
        font-size: 2rem;
        margin-bottom: 10px;
    }

    label {
        color: black;
    }

    .form-control,
    .form-select {
        border-radius: 2px;
        padding: 12px;
        font-size: 1rem;
        border: 1px solid #ddd;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--primary-color, #0d6efd);
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.1);
    }

    .btn-submit {
        background-color: var(--primary-color, #0d6efd);
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 12px 32px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        background-color: #084298;
        transform: translateY(-2px);
        color: var(--tertiary-color);
    }

    .invalid-feedback {
        font-size: 0.875rem;
        color: #dc3545;
    }

    textarea.form-control {
        resize: none;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="iframe-wrapper">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2843.564133867179!2d85.11813267416964!3d25.61196331477862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed593b06f0bc37%3A0x1e304fcb9cf6d46a!2sCoral%20Web%20Technology%3A!5e1!3m2!1sen!2sin!4v1765621972337!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-card">
                    <h2 class="fw-bold text-dark">Leave a Message</h2>
                    <p class="text-dark">Your email address will not be published. Required fields are marked *</p>

                    <form method="POST" action="send-mail.php" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name *</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your name" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                    name="email">
                                <div class="invalid-feedback">Please enter a valid Email .</div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="number" class="form-label">Number *</label>
                                <input type="text" class="form-control" id="number" name="number"
                                    placeholder="Enter your Number" required maxlength="10"
                                    onclick="this.oninput = () => this.value = this.value.replace(/[^0-9]/g, '').slice(0,10)">

                                <div class="invalid-feedback">Please enter a valid number .</div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="services" class="form-label">Looking For *</label>
                                <select name="services" class="form-select" id="services" required>
                                    <option value="" disabled selected>-- Select Service --</option>
                                    <option value="website_design">Website Design & Development Services</option>
                                    <option value="ecommerce_website">E-commerce Website Design Services</option>
                                    <option value="mobile_app">Mobile App Development Services</option>
                                    <option value="software_development">Software Development Services</option>
                                    <option value="digital_marketing">Digital Marketing Services – SEO, PPC, SMM, GMB</option>
                                    <option value="meta_ads">Meta Ads – Facebook & Instagram</option>
                                    <option value="website_seo">Website SEO Services</option>
                                    <option value="google_ads">Google Ads – PPC</option>
                                    <option value="social_media_marketing">Social Media Marketing – SMM</option>
                                    <option value="gmb_seo">Google Business Profile (GMB) SEO</option>
                                    <option value="real_estate_website">Real Estate Website Development Services</option>
                                    <option value="restaurant_hotel_website">Restaurant & Hotel Website Development Services</option>
                                    <option value="landing_page">Landing Page Design Services</option>
                                    <option value="management_software">School / College / Coaching / Hospital Management Software Development Services</option>
                                </select>
                                <div class="invalid-feedback">Please Select Services.</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message </label>
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your message"
                                rows="3"></textarea>
                            <div class="invalid-feedback">Please enter a message.</div>
                        </div>

                        <button type="submit" class="btn btn-submit">
                            Submit <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
(() => {
    'use strict';

    const forms = document.querySelectorAll('.needs-validation');

    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);
    });
})();
</script>
