<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $base_path . "common/config.php"; ?>
    <?php include $base_path . "common/head.php"; ?>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>

<body>

<?php include $base_path . "common/header.php"; ?>

<!-- HERO -->
<section class="hero-section text-white d-flex align-items-center">
    <div class="container text-center">
        <h1 data-aos="fade-up">Expert AC Repair Services in Bhubaneswar</h1>
        <p data-aos="fade-up" data-aos-delay="200">
            Fast, Reliable & Affordable AC Repair at Your Doorstep
        </p>
        <a href="tel:+917894606334" class="btn btn-light mt-3" data-aos="zoom-in">
            📞 Call Now
        </a>
    </div>
</section>

<!-- SERVICES -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold" data-aos="fade-up">Our Premium AC Services</h2>

        <div class="row">

            <!-- CARD -->
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="service-card-pro">
                    <div class="img-box">
                        <img src="assets/images/services/ac-install.jpg">
                    </div>
                    <div class="content">
                        <h5>AC Installation</h5>
                        <p>Professional installation with proper setup and safety checks.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card-pro">
                    <div class="img-box">
                        <img src="assets/images/services/gas-refill.jpg">
                    </div>
                    <div class="content">
                        <h5>Gas Refilling</h5>
                        <p>Improve cooling efficiency with quick gas refill service.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card-pro">
                    <div class="img-box">
                        <img src="assets/images/services/ac-repair.jpg">
                    </div>
                    <div class="content">
                        <h5>Repair & Maintenance</h5>
                        <p>Complete AC repair including cooling & leakage issues.</p>
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
            Professional AC Repair Services in Bhubaneswar
        </h2>

        <p class="text-muted" style="max-width:850px;margin:auto;" data-aos="fade-up" data-aos-delay="200">
            Looking for trusted and professional AC repair services in Bhubaneswar? 
            Hansraj Enterprises offers complete air conditioning solutions including 
            installation, gas refilling, servicing and repair for all major brands like LG, 
            Samsung, Voltas and more.

            Our experienced technicians provide fast doorstep service using advanced tools 
            and genuine spare parts to ensure long-lasting performance. Whether your AC is 
            not cooling, leaking water, making noise or completely stopped working — 
            we solve all problems quickly and efficiently.

            We focus on delivering high-quality service, affordable pricing and 100% 
            customer satisfaction, making us one of the most reliable AC service providers.
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
            We are committed to providing fast, reliable and affordable AC repair services. 
            Our expert team ensures quality work, quick response and complete customer satisfaction.
        </p>

        <div class="row">

            <div class="col-md-3" data-aos="zoom-in">
                <div class="why-box">
                    <h4>⚡</h4>
                    <h6>Same Day Service</h6>
                    <p>Get your AC repaired quickly with our fast response team.</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="why-box">
                    <h4>👨‍🔧</h4>
                    <h6>Expert Technicians</h6>
                    <p>Highly skilled professionals with years of experience.</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="why-box">
                    <h4>💰</h4>
                    <h6>Affordable Pricing</h6>
                    <p>Transparent pricing with no hidden charges.</p>
                </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="why-box">
                    <h4>📞</h4>
                    <h6>24/7 Support</h6>
                    <p>Available anytime for emergency AC services.</p>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- CTA -->
<section class="cta-section text-white text-center py-5">
    <div class="container">
        <h3>Need AC Repair Service?</h3>
        <a href="tel:+917894606334" class="btn btn-light mt-3">Call Now</a>
    </div>
</section>

<!-- CSS -->
<style>
.hero-section {
    height: 80vh;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                url('assets/images/about/ac.jpg') center/cover;
}

/* CARD */
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

/* WHY */
.why-box {
    padding: 20px;
    transition: 0.3s;
}

.why-box:hover {
    transform: translateY(-8px);
}

/* CTA */
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