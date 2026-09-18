<!-- Bootstrap 5.3.3 JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= $base_url ?>assets/js/language-manager.js"></script>

<!-- ========================================================================================= -->
<!-- Footer CSS -->
<style>
    footer {
        background: #082846;
        color: #ffffff;
        padding: 50px 0 25px;
        font-family: "Segoe UI", sans-serif;
    }

    .footer-logo {
        max-width: 150px;
        margin-bottom: 15px;
    }

    footer h3, footer h4 {
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: 700;
        color: #ffffff;
        position: relative;
        display: inline-block;
    }

    footer h3::after, footer h4::after {
        content: '';
        display: block;
        width: 35px;
        height: 3px;
        background: #ffdd00;
        margin-top: 5px;
        border-radius: 2px;
    }

    footer p,
    footer a {
        font-size: 13.5px;
        line-height: 1.6;
        color: #e2e8f0;
        text-decoration: none;
    }

    footer a:hover {
        color: #ffdd00 !important;
        text-decoration: underline;
    }

    .footer-branch-item {
        margin-bottom: 10px;
        line-height: 1.5;
        font-size: 13px;
    }

    .footer-branch-item strong {
        color: #ffdd00;
    }

    .footer-branch-item a {
        color: #f1f5f9;
        text-decoration: none;
        border-bottom: 1px dotted rgba(255, 255, 255, 0.4);
        transition: all 0.2s ease;
    }

    .footer-branch-item a:hover {
        color: #38bdf8 !important;
        border-bottom-color: #38bdf8;
    }

    .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        margin-right: 8px;
        font-size: 16px;
        color: #ffffff;
        background: rgba(255, 255, 255, 0.12);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        color: #ffffff;
        background: #0284c7;
        transform: translateY(-3px);
    }

    .bottom-footer {
        border-top: 1px solid rgba(255, 255, 255, 0.12);
        text-align: center;
        font-size: 12.5px;
        padding-top: 15px;
        margin-top: 25px;
        color: #94a3b8;
    }

    .goog-te-banner-frame.skiptranslate, .goog-te-banner-frame {
        display: none !important;
    }
    body {
        top: 0px !important;
    }
    .goog-tooltip, .goog-tooltip:hover {
        display: none !important;
    }
    .goog-text-highlight {
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }
</style>

<!-- Footer HTML -->
<footer>
    <div class="container-fluid px-lg-5 px-3">
        <div class="row gy-4">
            <!-- Col 1: About & Quick Links -->
            <div class="col-lg-4 col-md-5">
                <img src="<?= $base_url ?>assets/images/logo/logo.jpg" alt="Hansraj Enterprises Logo" class="footer-logo rounded">
                <h3 data-lang-key="footer_about_title">About Hansraj Enterprises</h3>
                <p class="text-white-50 mb-3" data-lang-key="footer_about_desc">
                    Hansraj Enterprises is your trusted doorstep appliance service provider across Bhubaneswar and Cuttack. We provide reliable and guaranteed repairs for Washing Machines, Refrigerators, ACs & Microwave Ovens.
                </p>

                <div class="mb-3">
                    <h4 class="fs-6 mb-2">Quick Navigation</h4>
                    <ul class="list-unstyled d-flex flex-wrap gap-3 small mb-0">
                        <li><a href="<?= $base_url ?>" class="text-white" data-lang-key="nav_home">Home</a></li>
                        <li><a href="<?= $base_url ?>#about" class="text-white" data-lang-key="nav_about">About Us</a></li>
                        <li><a href="<?= $base_url ?>#services" class="text-white" data-lang-key="nav_services">Services</a></li>
                        <li><a href="<?= $base_url ?>blogs" class="text-white" data-lang-key="nav_blogs">Blogs</a></li>
                        <li><a href="<?= $base_url ?>#guidelines" class="text-warning fw-semibold" data-lang-key="nav_guidelines"><i class="bi bi-shield-check me-1"></i>Guidelines</a></li>
                        <li><a href="<?= $base_url ?>#contact" class="text-white" data-lang-key="nav_contact">Contact</a></li>
                    </ul>
                </div>

                <div class="social-icons d-flex mt-3">
                    <a href="<?= $base_url ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="<?= $base_url ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="<?= $base_url ?>" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="<?= $base_url ?>" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <!-- Col 2: Numbered Branches & Locations (Reference Style) -->
            <div class="col-lg-8 col-md-7">
                <h3 data-lang-key="footer_contact_title">Contact & Service Locations</h3>
                
                <div class="row g-2">
                    <div class="col-lg-6">
                        <div class="footer-branch-item">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> <strong>Corporate Office / Main Branch:</strong> Near, Sum Hospital Rd, Kalinganagar, Bhubaneswar, Odisha - 751029
                        </div>
                        <div class="footer-branch-item">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> <strong>1st Branch (Cuttack):</strong> Near, Sector 6 Park, Cuttack - 753014
                        </div>
                        <div class="footer-branch-item">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> <strong>2nd Branch (KIIT / Patia):</strong> <a href="<?= $base_url ?>kalinga-institute-of-industrial-technology.php">Near Kalinga Institute of Industrial Technology, Patia, Bhubaneswar - 751024</a>
                        </div>
                        <div class="footer-branch-item">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> <strong>3rd Branch (Rasulgarh):</strong> <a href="<?= $base_url ?>nexus-esplanade-bhubaneswar.php">Near Nexus Esplanade Mall, Rasulgarh Square, Bhubaneswar - 751010</a>
                        </div>
                        <div class="footer-branch-item">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> <strong>4th Branch (Pokhariput):</strong> <a href="<?= $base_url ?>dav-public-school-pokhariput.php">Near D.A.V. Public School, Pokhariput, Bhubaneswar - 751020</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="footer-branch-item">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> <strong>5th Branch (Janla / Madanpur):</strong> <a href="<?= $base_url ?>gita-autonomous-college-bhubaneswar.php">Near GITA Autonomous College, Madanpur, Janla, Bhubaneswar - 752054</a>
                        </div>
                        <div class="footer-branch-item">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> <strong>6th Branch (Unit 6 / AG Square):</strong> <a href="<?= $base_url ?>pgimer-capital-hospital-bhubaneswar.php">Near PGIMER & Capital Hospital, Unit 6, AG Square, Bhubaneswar - 751001</a>
                        </div>
                        <div class="footer-branch-item">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> <strong>7th Branch (Old Town):</strong> <a href="<?= $base_url ?>lingaraj-temple-bhubaneswar.php">Near Lingaraj Temple, Old Town, Bindu Sagar, Bhubaneswar - 751002</a>
                        </div>
                        <div class="footer-branch-item">
                            <i class="bi bi-geo-alt-fill text-warning me-1"></i> <strong>8th Branch (Pandara):</strong> <a href="<?= $base_url ?>hi-tech-medical-college-hospital.php">Near Hi-Tech Medical College & Hospital, Pandara, Bhubaneswar - 751025</a>
                        </div>
                    </div>
                </div>

                <!-- Contact details bar -->
                <div class="mt-3 pt-3 border-top border-white-50 d-flex flex-wrap gap-4 align-items-center">
                    <div>
                        <i class="bi bi-shield-check text-warning me-1"></i> <strong>Official Helpline:</strong> <a href="tel:+917752083960" class="text-warning fw-bold fs-6">+91 77520 83960</a>
                    </div>
                    <div>
                        <i class="bi bi-telephone-fill text-white-50 me-1"></i> <strong>Phone:</strong> <a href="tel:+917894606334" class="text-white">+91 78946 06334</a>
                    </div>
                    <div>
                        <i class="bi bi-envelope-fill text-white-50 me-1"></i> <strong>Email:</strong> <a href="mailto:hansrajenterprises@gmail.com" class="text-white">hansrajenterprises@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="bottom-footer mt-4">
            <p class="mb-0">
                &copy;
                <script>document.write(new Date().getFullYear());</script> <span data-lang-key="footer_rights">Hansraj Enterprises | All Rights Reserved</span> |
                Website Design & Maintain By: <a href="https://coralwebtechnology.com"
                    class="text-white text-decoration-none" target="_blank">coralwebtechnology.com</a>
            </p>
        </div>
    </div>
</footer>