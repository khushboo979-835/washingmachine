<style>
    .navbar {
        background: #ffffff;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        padding: 10px 0;
        transition: all 0.3s ease-in-out;
    }

    .navbar .navbar-brand img {
        width: 140px;
        height: auto;
    }

    .nav-item .nav-link {
        font-weight: 600;
        font-size: 14px;
        color: #1e293b;
        padding: 6px 10px !important;
        white-space: nowrap;
        border-radius: 6px;
        transition: all 0.2s ease;
    }

    .nav-item .nav-link:hover,
    .nav-item .nav-link.active {
        color: #0387cf !important;
        background: rgba(3, 135, 207, 0.07);
    }

    .navbar.fixed-top {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        padding: 8px 0 !important;
        z-index: 1050;
        animation: slideDown 0.3s ease;
        background: #ffffff;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }

    @keyframes slideDown {
        from { transform: translateY(-100%); }
        to { transform: translateY(0); }
    }

    body.fixed-padding {
        padding-top: 75px;
    }

    .btn-header-call {
        background: linear-gradient(135deg, #0b1f3a, #0387cf);
        color: #ffffff !important;
        font-weight: 700;
        font-size: 13px;
        padding: 6px 14px;
        border-radius: 30px;
        white-space: nowrap;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-header-call:hover {
        background: linear-gradient(135deg, #0387cf, #00b4d8);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(3, 135, 207, 0.35);
    }

    .btn-header-wa {
        background: #25d366;
        color: #ffffff !important;
        font-weight: 700;
        font-size: 13px;
        padding: 6px 14px;
        border-radius: 30px;
        white-space: nowrap;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-header-wa:hover {
        background: #1eb956;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(37, 211, 102, 0.35);
    }

    .btn-header-book {
        background: #f8fafc;
        color: #0387cf !important;
        border: 1.5px solid #0387cf;
        font-weight: 700;
        font-size: 13px;
        padding: 5px 12px;
        border-radius: 30px;
        white-space: nowrap;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-header-book:hover {
        background: #0387cf;
        color: #ffffff !important;
    }

    /* Dropdown Styling */
    .dropdown-menu {
        border-radius: 12px;
        padding: 8px 0;
        border: 1px solid #e2e8f0;
        box-shadow: 0px 10px 30px rgba(0,0,0,0.1);
        margin-top: 8px;
        min-width: 240px;
        animation: fadeIn 0.25s ease-in-out;
    }

    .dropdown-item {
        padding: 8px 18px;
        font-size: 13.5px;
        font-weight: 500;
        color: #334155;
        transition: all 0.2s ease;
    }

    .dropdown-item:hover {
        background: linear-gradient(90deg, #0387cf, #00b4d8);
        color: #fff !important;
        padding-left: 22px;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(8px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<!-- Top Header -->
<style>
    .top-header {
        font-size: 12.5px;
        background: linear-gradient(90deg, #0b1f3a 0%, #0387cf 100%);
        color: #ffffff;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 5px 0;
    }

    .top-header a {
        color: #f1f5f9;
        transition: color 0.2s ease;
    }

    .top-header a:hover {
        color: #ffdd00;
    }

    .top-header i {
        color: #ffc107;
    }

    /* Executive Language Switcher */
    .lang-switcher-wrap {
        display: inline-flex;
        align-items: center;
        background: rgba(0, 0, 0, 0.25);
        padding: 2px 4px;
        border-radius: 30px;
        border: 1px solid rgba(255, 255, 255, 0.25);
        gap: 2px;
    }

    .lang-btn {
        background: transparent;
        border: none;
        color: #cbd5e1;
        font-size: 11.5px;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.2s ease;
        text-decoration: none;
    }

    .lang-btn:hover {
        color: #ffffff;
        background: rgba(255, 255, 255, 0.15);
    }

    .lang-btn.active {
        background: #ffffff;
        color: #0387cf !important;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
    }

    @media (max-width: 991px) {
        .navbar-nav {
            padding-top: 15px;
            gap: 6px;
        }
        .nav-item .nav-link {
            padding: 8px 12px !important;
        }
    }
</style>

<div class="top-header">
    <div class="container-fluid px-lg-4 px-3">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
            <!-- Left: Helpline & Email -->
            <div class="d-flex align-items-center flex-wrap gap-3">
                <a href="tel:+917752083960" class="text-decoration-none fw-bold text-warning">
                    <i class="bi bi-shield-fill-check me-1 text-warning"></i> <span data-lang-key="official_helpline">Official Helpline</span>: <strong>7752083960</strong>
                </a>
                <span class="d-none d-md-inline text-white-50">|</span>
                <a href="mailto:hansrajenterprises@gmail.com" class="text-decoration-none d-none d-md-inline small">
                    <i class="bi bi-envelope-fill me-1"></i> hansrajenterprises@gmail.com
                </a>
            </div>

            <!-- Right: Language Switcher Mode -->
            <div class="d-flex align-items-center gap-2 ms-auto">
                <span class="text-white-50 small fw-bold d-none d-sm-inline"><i class="bi bi-translate me-1 text-warning"></i> Language:</span>
                <div class="lang-switcher-wrap" role="group" aria-label="Language Mode Switcher">
                    <button type="button" class="lang-btn active" data-lang="en" title="English">English</button>
                    <button type="button" class="lang-btn" data-lang="hi" title="हिन्दी">हिन्दी</button>
                    <button type="button" class="lang-btn" data-lang="or" title="ଓଡ଼ିଆ">ଓଡ଼ିଆ</button>
                </div>
            </div>
        </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container-fluid px-lg-4 px-3">

            <!-- Logo -->
            <a class="navbar-brand me-2 me-lg-3" href="<?= $base_url ?>">
                <img src="<?= $base_url ?>assets/images/logo/logo.jpg" alt="Hansraj Enterprises Logo" class="img-fluid" style="max-height: 48px; width: auto;">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler border-0 shadow-none p-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list fs-1 text-dark"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url ?>" data-lang-key="nav_home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url ?>#about" data-lang-key="nav_about">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-lang-key="nav_services">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $base_url ?>ac-repair.php" data-lang-key="nav_ac_repair"><i class="bi bi-wind text-info me-2"></i>AC Repair</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>fridge-repair.php" data-lang-key="nav_fridge_repair"><i class="bi bi-snow2 text-success me-2"></i>Fridge Repair</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>microwave-repair.php" data-lang-key="nav_micro_repair"><i class="bi bi-fire text-danger me-2"></i>Microwave Repair</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>washing-machine.php" data-lang-key="nav_washing_repair"><i class="bi bi-gear-wide-connected text-primary me-2"></i>Washing Machine Repair</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-primary fw-bold" href="#" id="locationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-geo-alt-fill text-danger me-1"></i>Locations
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= $base_url ?>kalinga-institute-of-industrial-technology.php"><strong>01.</strong> KIIT / Patia</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>nexus-esplanade-bhubaneswar.php"><strong>02.</strong> Nexus Esplanade</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>dav-public-school-pokhariput.php"><strong>03.</strong> DAV Pokhariput</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>gita-autonomous-college-bhubaneswar.php"><strong>04.</strong> GITA College (Madanpur)</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>pgimer-capital-hospital-bhubaneswar.php"><strong>05.</strong> Capital Hospital (Unit 6)</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>lingaraj-temple-bhubaneswar.php"><strong>06.</strong> Lingaraj Temple (Old Town)</a></li>
                            <li><a class="dropdown-item" href="<?= $base_url ?>hi-tech-medical-college-hospital.php"><strong>07.</strong> Hi-Tech Medical College</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-danger fw-semibold" href="<?= $base_url ?>#guidelines" data-lang-key="nav_guidelines" title="Customer Guidelines & Disclaimer">
                            <i class="bi bi-shield-check text-primary me-1"></i>Guidelines <span class="badge bg-danger text-white rounded-pill ms-1" style="font-size: 9px; padding: 2px 5px;">Info</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url ?>blogs" data-lang-key="nav_blogs">Blogs</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $base_url ?>#contact" data-lang-key="nav_contact">Contact</a>
                    </li>
                </ul>

                <!-- Right Action Buttons (Desktop) -->
                <div class="d-none d-lg-flex align-items-center gap-2 ms-lg-2">
                    <span role="button" class="btn-header-book" data-bs-toggle="modal" data-bs-target="#exampleModal" data-lang-key="nav_book_now">
                        <i class="bi bi-calendar-check me-1"></i> Book Now
                    </span>
                    <a href="https://wa.me/917752083960" class="btn-header-wa text-decoration-none" target="_blank" data-lang-key="nav_whatsapp">
                        <i class="bi bi-whatsapp"></i> WhatsApp
                    </a>
                    <a href="tel:+917752083960" class="btn-header-call text-decoration-none" data-lang-key="nav_call_now">
                        <i class="bi bi-telephone-fill"></i> Call Now
                    </a>
                </div>

                <!-- Mobile Buttons (inside menu) -->
                <div class="d-lg-none mt-3 pt-3 border-top d-flex flex-column gap-2">
                    <span role="button" class="btn btn-outline-primary btn-sm rounded-pill fw-bold text-center py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-calendar-check me-1"></i> Book Doorstep Service
                    </span>
                    <div class="d-flex gap-2">
                        <a href="https://wa.me/917752083960" class="btn btn-success btn-sm w-50 rounded-pill fw-bold py-2" target="_blank">
                            <i class="bi bi-whatsapp me-1"></i> WhatsApp
                        </a>
                        <a href="tel:+917752083960" class="btn btn-primary btn-sm w-50 rounded-pill fw-bold py-2">
                            <i class="bi bi-telephone-fill me-1"></i> Call Now
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</header>
<?php include $base_path . 'common/enquiry.php'; ?>
<?php include $base_path . "common/chat-bot.php"; ?>

<script>
    window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 120) {
            navbar.classList.add("fixed-top");
            document.body.classList.add("fixed-padding");
        } else {
            navbar.classList.remove("fixed-top");
            document.body.classList.remove("fixed-padding");
        }
    });
</script>