<!-- WhatsApp & Call Button (Bottom Left) -->
<style>
  .quick-contact {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .quick-contact a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    background-color: #25D366;
    color: white;
    text-decoration: none;
    font-size: 26px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
  }

  .quick-contact a.call-btn {
    background-color: #0a66c2;
  }

  .quick-contact a:hover {
    transform: scale(1.1);
  }
</style>


<div class="quick-contact">
  <!-- WhatsApp Button -->
  <a href="https://wa.me/917209292888" target="_blank" title="Chat on WhatsApp">
    <i class="bi bi-whatsapp"></i>
  </a>

  <!-- Call Button -->
  <a href="tel:+917209292888" class="call-btn" title="Call Now">
    <i class="bi bi-telephone"></i>
  </a>
</div>