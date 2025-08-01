<style>
    .testimonials-section {
        background-color: #f9f9f9;
        position: relative;
    }

    .testimonial-slider {
        position: relative;
        overflow: hidden;
        padding-bottom: 3.5rem;
    }

    .testimonial-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        gap: 1.5rem;
    }

    .testimonial-card {
        flex: 0 0 100%;
        background: linear-gradient(145deg, var(--primary-color), var(--secondary-color));
        padding: 2rem 1.5rem;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.07);
        text-align: left;
        position: relative;
    }

    .testimonial-card blockquote {
        font-style: italic;
        color: var(--tertiary-color);
        position: relative;
        padding-left: 2.5rem;
    }

    .testimonial-card blockquote::before {
        content: "“";
        font-size: 3rem;
        color: var(tertiary-color);
        position: absolute;
        left: 0;
        top: -5px;
    }

    .testimonial-card h5 {
        margin-top: 1rem;
        font-weight: bold;
        color: var(--tertiary-color);
        text-align: right;
        /* font-size: 1rem; */
    }

    .slider-btn {
        background: var(--primary-color, #007BFF);
        color: white;
        border: none;
        padding: 0.4rem 1rem;
        font-size: 1.2rem;
        border-radius: 50%;
        cursor: pointer;
        position: absolute;
        bottom: 10px;
        transform: translateY(50%);
        z-index: 2;
        transition: 0.3s ease;
    }

    .slider-btn:hover {
        background: var(--secondary-color, #0056b3);
    }

    .slider-btn.prev {
        left: 45%;
    }

    .slider-btn.next {
        right: 45%;
    }

    @media (min-width: 992px) {
        .testimonial-card {
            flex: 0 0 48%;
        }
    }

    @media (max-width: 576px) {
        .slider-btn.prev {
            left: 40%;
        }

        .slider-btn.next {
            right: 40%;
        }
    }

    .testimonial-stars {
        margin-top: 1rem;
        text-align: left;
    }

    .testimonial-stars .star {
        font-size: 2rem;
        color: gold;
        margin-right: 2px;
        opacity: 0.85;
    }

    /* Optional: for greyed-out stars if needed */
    .testimonial-stars .star.empty {
        color: #ccc;
    }

    /* Optional: for half-filled stars using gradients (advanced) */
    .testimonial-stars .star.half {
        background: linear-gradient(90deg, gold 50%, #ccc 50%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>


<section class="py-5 testimonials-section">
    <div class="container">
        <div class="head-title text-center mb-5">
            <h2 class="fw-bold">Valuable <span>Testimonials</span></h2>
            <p class="text-muted">Hear directly from those who have worked with us.</p>
        </div>

        <div class="testimonial-slider">
            <div class="testimonial-track">
                <div class="testimonial-card">
                    <blockquote>"Great service and timely delivery. Highly recommended!"</blockquote>
                    <div class="testimonial-stars">
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star half">&#9733;</span> <!-- or leave empty for no star -->
                    </div>

                    <h5>- Ankit Sharma</h5>
                </div>
                <div class="testimonial-card">
                    <blockquote>"Their team truly understands our needs and delivers with precision."</blockquote>
                    <div class="testimonial-stars">
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                    </div>
                    <h5>- Ritu Verma</h5>
                </div>
                <div class="testimonial-card">
                    <blockquote>"Professional, punctual, and always helpful. Will hire again!"</blockquote>
                    <div class="testimonial-stars">
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star half">&#9733;</span> <!-- or leave empty for no star -->
                    </div>
                    <h5>- Saurabh Jain</h5>
                </div>
                <div class="testimonial-card">
                    <blockquote>"They transformed our online presence beyond expectations."</blockquote>
                    <div class="testimonial-stars">
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star full">&#9733;</span>
                        <span class="star half">&#9733;</span> <!-- or leave empty for no star -->
                    </div>
                    <h5>- Priya Sinha</h5>
                </div>
            </div>

            <button class="slider-btn prev">&#10094;</button>
            <button class="slider-btn next">&#10095;</button>
        </div>
    </div>
</section>

<script>
    const track = document.querySelector(".testimonial-track");
    const prevBtn = document.querySelector(".slider-btn.prev");
    const nextBtn = document.querySelector(".slider-btn.next");

    let index = 0;
    const cards = document.querySelectorAll(".testimonial-card");

    function getVisibleCount() {
        return window.innerWidth >= 992 ? 2 : 1;
    }

    function updateSlider() {
        const cardWidth = cards[0].offsetWidth + 24; // 24px approx gap
        const visibleCount = getVisibleCount();
        const maxIndex = cards.length - visibleCount;
        if (index > maxIndex) index = 0;
        track.style.transform = `translateX(-${index * cardWidth}px)`;
    }

    nextBtn.addEventListener("click", () => {
        index++;
        updateSlider();
    });

    prevBtn.addEventListener("click", () => {
        index--;
        if (index < 0) index = cards.length - getVisibleCount();
        updateSlider();
    });

    setInterval(() => {
        index++;
        updateSlider();
    }, 5000);

    window.addEventListener("resize", () => {
        index = 0;
        updateSlider();
    });

    // Initialize
    updateSlider();
</script>