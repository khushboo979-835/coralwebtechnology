<style>
    .custom-accordion .accordion-button {
        font-weight: 600;
        transition: all 0.3s ease;
        padding: 1rem 1.2rem;
        border-radius: 8px;
    }

    .custom-accordion .accordion-button:not(.collapsed) {
        background: linear-gradient(180deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .custom-accordion .accordion-button::after {
        transform: rotate(180deg);
        transition: transform 0.3s ease;
    }

    .custom-accordion .accordion-button.collapsed::after {
        transform: rotate(0deg);
    }

    .custom-accordion .accordion-body {
        background-color: #f8f9fa;
        border-radius: 0 0 8px 8px;
        padding: 1rem 1.5rem;
        color: #333;
        border-top: 1px solid #ddd;
    }
</style>


<section class="faq py-5">
    <div class="container">
        <div class="text-center head-title mb-5">
            <h2 class="fw-bold">Frequently <span>Asked</span> Questions</h2>
            <p class="text-muted">Find answers to common queries about our services, process, and support.</p>
        </div>

        <div class="accordion custom-accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                        <i class="bi bi-question-circle me-2 text-danger"></i> What services does your company offer?
                    </button>
                </h2>
                <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We provide a wide range of services including web development, digital marketing, SEO, branding,
                        and IT consulting for businesses of all sizes.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                        <i class="bi bi-globe me-2 text-danger"></i> Do you serve international clients?
                    </button>
                </h2>
                <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we have served clients in 5+ countries including the USA, UK, UAE, Australia, and
                        Singapore. We are fully equipped for remote collaboration.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                        <i class="bi bi-stopwatch me-2 text-danger"></i> How long does it take to complete a website?
                    </button>
                </h2>
                <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Project timelines vary based on complexity, but a standard business website usually takes
                        between 7 to 20 working days.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                        <i class="bi bi-headset me-2 text-danger"></i> Do you provide support after project delivery?
                    </button>
                </h2>
                <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Absolutely! We offer 1-3 months of free support depending on the package. Extended support and
                        AMC plans are also available.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>