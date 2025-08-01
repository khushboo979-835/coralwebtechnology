<style>
    #scrollToTopBtn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
        display: none;
        transition: all 0.3s ease;
        width: 45px;
        height: 45px;
        font-size: 1.2rem;
        background-color: var(--secondary-color);
        color: white;
        border: none;
        justify-content: center;
        align-items: center;
    }

    #scrollToTopBtn:hover {
        background-color: var(--primary-color);
        transform: scale(1.1);
    }
</style>

<!-- Scroll to Top Button -->
<button id="scrollToTopBtn" class="btn rounded-circle d-flex shadow" title="Back to Top">
    <i class="bi bi-arrow-up m-auto"></i>
</button>

<script>
    const scrollBtn = document.getElementById("scrollToTopBtn");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
            scrollBtn.style.display = "flex";
        } else {
            scrollBtn.style.display = "none";
        }
    });

    scrollBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>