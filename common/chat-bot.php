<!-- Chat Support Widget -->
<style>
    .chat-widget {
        position: fixed;
        bottom: 20px;
        left: 20px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        z-index: 9999;
    }

    .chat-widget a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 55px;
        height: 55px;
        background-color: #25D366;
        /* WhatsApp Green */
        color: white;
        border-radius: 50%;
        text-decoration: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        transition: transform 0.2s ease-in-out;
    }

    .chat-widget a.call-icon {
        background-color: #007BFF;
        /* Blue for call */
    }

    .chat-widget a:hover {
        transform: scale(1.1);
    }

    .chat-widget i {
        font-size: 24px;
    }
</style>

<div class="chat-widget">
    <!-- WhatsApp -->
    <a href="https://wa.me/917894606334?text=Hi%20there%2C%20I%20need%20assistance" target="_blank"
        title="Chat on WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Call -->
    <a href="tel:+917894606334" class="call-icon" title="Call Now">
        <i class="bi bi-telephone-fill"></i>
    </a>
</div>

<!-- Font Awesome CDN for icons -->
<script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>