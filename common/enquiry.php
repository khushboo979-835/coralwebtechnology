<style>
    .modal-content {
        background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/others/enquiry-background.jpg') ;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Enquiry Now</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" class="needs-validation whatsapp-form" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                                required>
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
                            <div class="invalid-feedback">Please enter a valid Number.</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="services" class="form-label">Services *</label>
                            <select name="services" class="form-select" id="" required>
                                <option value="Asthetics">Asthetics</option>
                                <option value="Dermatosurgery">Dermatosurgery</option>
                                <option value="Clinical Dermatology">Clinical Dermatology</option>
                                <option value="Laser">Laser</option>
                                <option value="Trichology">Trichology</option>
                                <option value="Venereology">Venereology</option>
                            </select>
                            <div class="invalid-feedback">Please Select Services.</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message </label>
                        <textarea class="form-control" id="message" name="message" placeholder="Enter your message"
                            rows="2"></textarea>
                        <div class="invalid-feedback">Please enter a message.</div>
                    </div>

                    <button type="submit" class="btn btn-submit text-end">
                        Submit <i class="bi bi-arrow-right ms-2"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>