<div class="contact-card">
    <a href="<?= $base_url ?>contact-us.php" class="btn primary-btn">Book an Appointment</a>
    <h3>Contact Us</h3>

    <ul class="contact-info">
        <li><i class="bi bi-telephone"></i> +91-7209292777</li>
        <li><i class="bi bi-telephone"></i> +91-7209292888</li>
        <li><i class="bi bi-geo-alt"></i> Plot no B-54, People's Cooperative colony , Near Ganga Devi Mahila
            College and Medanta Hospital, Patna -800020</li>
        <li><i class="bi bi-envelope"></i> info@theskincentre.co.in</li>
    </ul>
</div>
<style>
    .contact-card {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 350px;
        margin: auto;
        position: sticky;
        top: 50px;
    }

    .contact-card h3 {
        margin: 20px 0;
        font-size: 22px;
        color: #7a124b;
    }

    .contact-info {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .contact-info li {
        margin: 10px 0;
        font-size: 16px;
    }

    .contact-info i {
        margin-right: 8px;
        color: #7a124b;
    }

    /* Reusing button styles */
    .primary-btn {
        display: inline-block;
        background: #7a124b;
        color: #fff;
        padding: 12px 25px;
        border-radius: 8px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: background 0.3s ease;
        text-decoration: none;
    }

    .primary-btn:hover {
        background: #560d36;
    }
</style>