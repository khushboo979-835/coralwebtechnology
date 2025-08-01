<style>
    .form-card {
        background-color: var(--primary-color);
        border-radius: 16px;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.1);
        padding: 40px;
    }

    .form-card h2 {
        font-size: 2rem;
        margin-bottom: 10px;
    }
label{
    color : var(--tertiary-color);
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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d686.9214658641502!2d85.11818762707273!3d25.61230866431966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sboring%20road%20chauraha%20zudio!5e0!3m2!1sen!2sin!4v1753858920688!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-card">
                    <h2 class="fw-bold text-white">Leave a Message</h2>
                    <p class="text-white">Your email address will not be published. Required fields are marked *</p>

                    <form method="POST" class="needs-validation" novalidate>
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
                                    name="number">
                                <div class="invalid-feedback">Please enter a valid Number .</div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="number" class="form-label">Number *</label>
                                <input type="number" class="form-control" id="number" placeholder="Enter your Number"
                                    name="number" required>
                                <div class="invalid-feedback">Please enter a valid number .</div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="services" class="form-label">Looking For *</label>
                                <select name="services" class="form-select" id="services" required>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="SEO">SEO</option>
                                    <option value="Paid Advertising">Paid Advertising</option>
                                    <option value="Custom Digital Strategy">Custom Digital Strategy</option>
                                    <option value="Social Media Marketing">Social Media Marketing</option>
                                    <option value="Design & Development">Design & Development</option>
                                    <option value="Content Marketing">Content Marketing</option>
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