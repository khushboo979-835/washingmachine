<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $base_path . "common/config.php"; ?>
    <?php include $base_path . "common/head.php"; ?>

    <!-- AOS Animation -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>

<body>

<?php include $base_path . "common/header.php"; ?>

<!-- HERO -->
<section class="hero-section text-white d-flex align-items-center">
    <div class="container text-center">
        <h1 data-aos="fade-up">Expert Washing Machine Repair in Bhubaneswar</h1>
        <p data-aos="fade-up" data-aos-delay="200">
            Fast, Reliable & Affordable Washing Machine Service at Your Doorstep
        </p>
        <a href="tel:+917894606334" class="btn btn-light mt-3" data-aos="zoom-in">
            📞 Call Now
        </a>
    </div>
</section>

<!-- SERVICES -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold" data-aos="fade-up">
            Our Washing Machine Services
        </h2>

        <div class="row">

            <!-- CARD 1 -->
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="service-card-pro">
                    <div class="img-box">
                        <img src="assets/images/services/wash-repair.jpg" alt="Washing Machine Repair">
                    </div>
                    <div class="content">
                        <h5>Machine Repair</h5>
                        <p>Fix drum issues, not spinning, noise and complete washing machine faults.</p>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-pro">
                    <div class="img-box">
                        <img src="assets/images/services/wash-install.jpg" alt="Installation">
                    </div>
                    <div class="content">
                        <h5>Installation</h5>
                        <p>Proper setup and installation for front load and top load machines.</p>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card-pro">
                    <div class="img-box">
                        <img src="assets/images/services/wash-service.jpg" alt="Maintenance">
                    </div>
                    <div class="content">
                        <h5>Maintenance & Service</h5>
                        <p>Regular servicing to improve performance and extend machine life.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- DESCRIPTION -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-4" data-aos="fade-up">
            Professional Washing Machine Repair in Bhubaneswar
        </h2>

        <p class="text-muted" style="max-width:850px;margin:auto;" data-aos="fade-up">
            Looking for expert washing machine repair services in Bhubaneswar? 
            Hansraj Enterprises provides complete repair, installation and maintenance 
            services for all types of washing machines including front load and top load models.

            Our skilled technicians quickly identify issues such as water leakage, 
            drum problems, spinning issues and electrical faults. We use advanced tools 
            and genuine spare parts to ensure long-lasting performance.

            We focus on fast service, affordable pricing and customer satisfaction, 
            making us a trusted choice for washing machine repair services.
        </p>
    </div>
</section>

<!-- WHY -->
<section class="bg-light py-5 text-center">
    <div class="container">

        <h2 class="fw-bold mb-3" data-aos="fade-up">
            Why Choose Hansraj Enterprises?
        </h2>

        <p class="text-muted mb-5" style="max-width:800px;margin:auto;" data-aos="fade-up">
            We provide reliable and affordable washing machine repair services with 
            expert technicians and quick response time.
        </p>

        <div class="row">

            <div class="col-md-3" data-aos="zoom-in">
                <div class="why-box">
                    <h4>⚡</h4>
                    <h6>Fast Service</h6>
                    <p>Quick repair at your doorstep within same day.</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="why-box">
                    <h4>👨‍🔧</h4>
                    <h6>Expert Technicians</h6>
                    <p>Trained professionals for all washing machine brands.</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="why-box">
                    <h4>💰</h4>
                    <h6>Affordable Pricing</h6>
                    <p>Budget-friendly service with no hidden charges.</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="why-box">
                    <h4>📞</h4>
                    <h6>24/7 Support</h6>
                    <p>Always available for urgent repair services.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section text-white text-center py-5">
    <div class="container">
        <h3>Need Washing Machine Repair?</h3>
        <a href="tel:+917894606334" class="btn btn-light mt-3">Call Now</a>
    </div>
</section>

<!-- CSS -->
<style>
.hero-section {
    height: 80vh;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                url('assets/images/services/wash-banner.jpg') center/cover;
}

.hero-section h1 {
    font-weight: 700;
    font-size: 42px;
}

.hero-section p {
    font-size: 18px;
}

.service-card-pro {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    transition: 0.4s;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

.img-box {
    height: 220px;
    overflow: hidden;
}

.img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.4s;
}

.service-card-pro:hover img {
    transform: scale(1.1);
}

.content {
    padding: 20px;
    text-align: center;
}

.service-card-pro:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.why-box p {
    font-size: 14px;
    color: #666;
}

.cta-section {
    background: linear-gradient(45deg, #007bff, #00c6ff);
}
</style>

<?php include $base_path . "common/footer.php"; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
AOS.init({ duration: 1000, once: true });
</script>

</body>
</html>