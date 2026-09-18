<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $base_path . "common/config.php"; ?>
    <?php include $base_path . "common/head.php"; ?>
    <link rel="preload" as="image" href="assets/images/banner/1.avif">
    <link rel="preload" as="image" href="assets/images/banner/2.avif">
    <link rel="preload" as="image" href="assets/images/banner/3.avif">

</head>

<body>
    <?php include $base_path . "common/header.php"; ?>
    <!-- ========================================== -->

    <section class="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="assets/images/banner/1.avif" class="d-block w-100" alt="AC Repair in Bhubaneswar" width="1060" height="530">
                    <div class="carousel-caption">
                        <h1 data-lang-key="hero_title_1">Washing Machine Repair Experts</h1>
                        <p data-lang-key="hero_desc_1">Front Load, Top Load or Semi — We Repair All Types with Care</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="assets/images/banner/2.avif" class="d-block w-100"  alt="Fridge Repair in Bhubaneswar" width="1060" height="454" loading="lazy">
                    <div class="carousel-caption">
                        <h2 data-lang-key="hero_title_2">Expert AC Repair Services</h2>
                        <p data-lang-key="hero_desc_2">Quick, Reliable & Affordable AC Repair at Your Doorstep in Bhubaneswar</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="assets/images/banner/3.avif" class="d-block w-100"
                        alt="Washing Machine Repair in Bhubaneswar" width="1060" height="530" loading="lazy">
                    <div class="carousel-caption">
                        <h2 data-lang-key="hero_title_3">Trusted Refrigerator Repair</h2>
                        <p data-lang-key="hero_desc_3">We Fix Cooling, Gas, Leakage & More — Same-Day Fridge Service</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- =========================================================== -->
    <style>
        .about-section {
            background: #f8f9fa;
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            width: 100%;
            border-radius: 15px;
        }

        .about-badge {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: var(--primary-color, #007bff);
            color: #fff;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 600;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .about-section ul {
            padding-left: 0;
            list-style: none;
        }

        .about-section li {
            font-size: 1.1rem;
        }

        @media(max-width: 768px) {
            .section-title {
                font-size: 1.7rem;
            }

            .about-badge {
                font-size: 0.9rem;
            }
        }
    </style>

    <section class="about-section py-5" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <!-- Left Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <div class="about-image position-relative">
                        <img src="assets/images/about/1.avif" alt="Appliance Repair" class="img-fluid rounded shadow">
                        <span class="about-badge" data-lang-key="about_badge">Fast & Reliable</span>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-md-7">
                    <div class="head-title">
                        <h2 class="mb-3" data-lang-key="about_title">About Our Repair Services</h2>
                        <div class="underline"></div>
                        <p class="subtitle" data-lang-key="about_subtitle">Expert Refrigerator, AC, and Appliance Repairs at Your Doorstep</p>
                    </div>

                    <p class="mb-4" data-lang-key="about_p1">We specialize in Refrigerator, AC, and Fridge Repair ensuring quick, affordable, and hassle-free service at your doorstep. Our experienced technicians guarantee reliable repairs with genuine parts and top-notch quality.</p>

                    <ul class="list-unstyled mb-4">
                        <li class="mb-2" data-lang-key="about_feature_1">✔ 24/7 Emergency Support</li>
                        <li class="mb-2" data-lang-key="about_feature_2">✔ Affordable Pricing</li>
                        <li class="mb-2" data-lang-key="about_feature_3">✔ Certified & Experienced Technicians</li>
                        <li data-lang-key="about_feature_4">✔ 100% Customer Satisfaction</li>
                    </ul>

                    <a href="#contact" class="btn btn-primary px-4" data-lang-key="about_btn">Book a Technician</a>
                </div>

            </div>
        </div>
    </section>
    <!-- ========================================================= -->
    <!-- Shared Styles -->


    <!-- Refrigerator Repair Section -->
    <section class="refrigerator-section py-5" id="services">
        <div class="container">
            <div class="row align-items-center g-4">
                <!-- Text Content -->
                <div class="col-12 col-md-6">
                    <div class="head-title mb-4">
                        <h2 class="text-white fw-bold">
                            Premium Refrigerator Repair <br>
                            in <span class="text-white">Bhubaneswar</span><br>
                            by Hansraj Enterprises
                        </h2>
                    </div>
                    <p class="lead mb-3">
                        Facing fridge troubles? Whether it’s not cooling, leaking, or making noise—
                        <strong>Hansraj Enterprises</strong> offers quick, professional, and affordable fridge repair at
                        your doorstep.
                    </p>

                    <ul class="custom-list mb-4">
                        <li class="text-white list-group-item">All Fridge Types: Single, Double, Side-by-Side, Deep
                            Freezer</li>
                        <li class="text-white list-group-item">Cooling, Noise, Gas Refill, Defrost & Water Leakage
                            Issues</li>
                        <li class="text-white list-group-item">Trained Technicians | Same-Day Service | Transparent
                            Charges</li>
                        <li class="text-white list-group-item">Trusted by 1000+ Bhubaneswar Homes & Businesses</li>
                    </ul>

                    <p><strong>Service Areas:</strong> Saheed Nagar, Nayapalli, Khandagiri, Patia, Rasulgarh & more</p>


                </div>

                <!-- Image -->
                <div class="col-12 col-md-6 text-center">
                    <img src="assets/images/about/refrigriator.jpg" alt="Fridge Repair in Bhubaneswar"
                        class="img-fluid fridge-image rounded-4 shadow-lg">
                    <div class="mt-4">
                        <a href="tel:+917894606334" class="cta-btn">📞 Call +91-78946 06334</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AC Repair Section -->
    <section class="ac-section py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <!-- Text Content -->
                <div class="col-12 col-md-7 order-md-2">
                    <div class="head-title mb-4">
                        <h2 class="fw-bold">
                            <span class="highlight-blue">Professional</span> AC Repair Services
                            in <span class="highlight-red">Bhubaneswar</span>
                            by Hansraj Enterprises
                        </h2>
                    </div>

                    <p class="lead mb-3">
                        Is your AC not cooling or making noise? Don’t sweat it.
                        <strong>Hansraj Enterprises</strong> offers fast and reliable AC repair services at your
                        doorstep —
                        whether it's split, window, or commercial air conditioners.
                    </p>

                    <ul class="custom-list mb-4">
                        <li class="list-group-item">Split, Window & Commercial AC Repair</li>
                        <li class="list-group-item">Gas Refill, Water Leakage, Thermostat & Compressor Issues</li>
                        <li class="list-group-item">Quick Diagnosis | Same-Day Repair | Verified Experts</li>
                        <li class="list-group-item">Affordable Pricing | High Customer Satisfaction</li>
                    </ul>

                    <p><strong>Service Areas:</strong> Saheed Nagar, Patia, Rasulgarh, Nayapalli, Khandagiri & more</p>


                </div>

                <!-- Image -->
                <div class="col-12 col-md-5 text-center">
                    <img src="assets/images/about/ac.jpg" alt="AC Repair in Bhubaneswar"
                        class="img-fluid ac-image rounded-4 shadow-lg">
                    <div class="mt-4">
                        <a href="tel:+917894606334" class="cta-btn">📞 Call +91-78946 06334</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =============================================================== -->
    <!-- Washing Machine Repair Section -->
    <section class="washing-machine-section py-5"
        style="background: var(--primary-color); color: var(--tertiary-color);">
        <div class="container">
            <div class="row align-items-center g-4">
                <!-- Text Content -->
                <div class="col-12 col-md-6">
                    <div class="head-title mb-4">
                        <h2 class="text-white fw-bold">
                            Trusted Washing Machine Repair <br>
                            in <span class="text-white">Bhubaneswar</span><br>
                            by Hansraj Enterprises
                        </h2>
                    </div>

                    <p class="lead mb-3 text-white">
                        Is your washing machine not spinning, draining, or vibrating abnormally? <strong>Hansraj
                            Enterprises</strong> provides expert repair for all types of washing machines — fully
                        automatic, semi-automatic, and front or top load models.
                    </p>

                    <ul class="custom-list mb-4">
                        <li class="text-white list-group-item"> Front Load, Top Load & Semi-Automatic Machine Repairs
                        </li>
                        <li class="text-white list-group-item"> Drainage, Motor, Drum, Spin, and Noise Issues</li>
                        <li class="text-white list-group-item"> Fast & Same-Day Home Service by Verified Technicians
                        </li>
                        <li class="text-white list-group-item">Affordable Pricing with High Customer Satisfaction</li>
                    </ul>

                    <p class="text-white">
                        <strong>Service Areas:</strong> Khandagiri, Patia, Laxmisagar, Saheed Nagar, Nayapalli & nearby
                        locations
                    </p>


                </div>

                <!-- Image -->
                <div class="col-12 col-md-6 text-center">
                    <img src="assets/images/about/washing-machine.jpg" alt="Washing Machine Repair in Bhubaneswar"
                        class="img-fluid shadow-lg rounded-4 w-100"
                        style="max-height: 400px; object-fit: cover; border: 5px solid #fff;">

                    <div class="mt-4">
                        <a href="tel:+917894606334" class="cta-btn">📞 Call +91-78946 06334</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================= -->
    <?php include "slider.php"; ?>
    <!-- ================================================== -->
    <!-- Important Customer Guidelines & Reward Policy Section -->
    <?php include "common/guidelines-section.php"; ?>
    <!-- ================================================== -->
    <!-- Service Areas Section -->
    <section class="service-areas-section py-5 bg-light">
        <div class="container">
            <div class="text-center head-title mb-4">
                <h2 class="fw-bold"><span data-lang-key="serve_all_title">We Serve All Over Bhubaneswar</span></h2>
                <p class="text-muted" data-lang-key="serve_all_desc">Hansraj Enterprises provides doorstep appliance repair services across all major localities of Bhubaneswar.</p>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="area-box p-4 rounded-4 shadow-sm bg-white">
                        <div class="row">
                            <!-- Localities List -->
                            <div class="col-12">
                                <div class="locality-list d-flex flex-wrap gap-2">
                                    <span class="badge ">Baramunda</span>
                                    <span class="badge ">Gopabandhu Nagar</span>
                                    <span class="badge ">Delta Colony</span>
                                    <span class="badge ">Surya Nagar</span>
                                    <span class="badge ">CRPF</span>
                                    <span class="badge ">Mancheswar</span>
                                    <span class="badge ">Uttara</span>
                                    <span class="badge ">VSS Nagar</span>
                                    <span class="badge ">Rasulgarh</span>
                                    <span class="badge ">Palasuni</span>
                                    <span class="badge ">GGP Colony</span>
                                    <span class="badge ">Rail Kunj</span>
                                    <span class="badge ">Jaydev Vihar</span>
                                    <span class="badge ">IRC Village</span>
                                    <span class="badge ">ID Market</span>
                                    <span class="badge ">CRP Square</span>
                                    <span class="badge ">Fire Station</span>
                                    <span class="badge ">Satya Vihar</span>
                                    <span class="badge ">Jharpada</span>
                                    <span class="badge ">Laxmisagar</span>
                                    <span class="badge ">Pandra</span>
                                    <span class="badge ">New Forest Park</span>
                                    <span class="badge ">Jagamara</span>
                                    <span class="badge ">Khandagiri</span>
                                    <span class="badge ">Patrapada</span>
                                    <span class="badge ">Gandamunda</span>
                                    <span class="badge ">Pokhariput</span>
                                    <span class="badge ">Palaspali</span>
                                    <span class="badge ">Bhimatangi</span>
                                    <span class="badge ">Dumduma</span>
                                    <span class="badge ">Arugul</span>
                                    <span class="badge ">Sundarpada</span>
                                    <span class="badge ">Balabhadrapur</span>
                                    <span class="badge ">Kantilo</span>
                                    <span class="badge ">Jatani Road</span>
                                    <span class="badge ">Tomando</span>
                                    <span class="badge ">Kalinga Nagar</span>
                                    <span class="badge ">Ghatikia</span>
                                    <span class="badge ">Samantarapur</span>
                                    <span class="badge ">BJB Nagar</span>
                                    <span class="badge ">Rajarani Colony</span>
                                    <span class="badge ">Pandav Nagar</span>
                                    <span class="badge ">Chintamaniswar</span>
                                    <span class="badge ">Lingaraj Nagar</span>
                                    <span class="badge ">Gouri Nagar</span>
                                    <span class="badge ">Kapileswar</span>
                                    <span class="badge ">Old Town</span>
                                    <span class="badge ">Lingaraj Mandir</span>
                                    <span class="badge ">Chandrasekharpur</span>
                                    <span class="badge ">Damana</span>
                                    <span class="badge ">Station Bazar</span>
                                    <span class="badge ">Master Canteen</span>
                                    <span class="badge ">Infocity</span>
                                    <span class="badge ">Sailashree Vihar</span>
                                    <span class="badge ">Niladri Vihar</span>
                                    <span class="badge ">Rental Colony</span>
                                    <span class="badge ">Nalco Nagar</span>
                                    <span class="badge ">Gajapati Nagar</span>
                                    <span class="badge ">Vani Vihar</span>
                                    <span class="badge ">Salia Sahi</span>
                                    <span class="badge ">Patia</span>
                                    <span class="badge ">Acharya Vihar</span>
                                    <span class="badge ">Shahid Nagar</span>
                                    <span class="badge ">Bhouma Nagar</span>
                                    <span class="badge ">Bhoi Sahi</span>
                                    <span class="badge ">Unit-1</span>
                                    <span class="badge ">Unit-2</span>
                                    <span class="badge ">Unit-3</span>
                                    <span class="badge ">Unit-4</span>
                                    <span class="badge ">KIIT</span>
                                    <span class="badge ">DAV School</span>
                                    <span class="badge ">Ravi Talkies</span>
                                    <!-- Add more badges if needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================-->
    <style>
        .accordion-button {
  font-weight: 500;
  color: #333;
  background-color: #fff;
  box-shadow: none;
}

.accordion-button:not(.collapsed) {
  color: #0d6efd;
  background-color: #eef4ff;
}

.accordion-item {
  border: 1px solid #dee2e6;
  border-radius: 6px;
  margin-bottom: 10px;
  overflow: hidden;
}

.accordion-button:focus {
  box-shadow: none;
  border-color: #0d6efd;
}

    </style>
    <section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="text-center mb-4 fw-semibold">Frequently Asked Questions</h2>

        <div class="accordion" id="faqAccordion">
          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                1. Which is the best washing machine repair service near me in Bhubaneswar?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Hansraj Enterprises offers the best washing machine repair near you in Bhubaneswar, providing expert home service for all major brands like Samsung, LG, Whirlpool, and Godrej.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2. Do you provide home service for washing machine repair?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes, our technicians offer washing machine repair home service near you in Bhubaneswar and Cuttack. We inspect, repair, and test your machine at your doorstep for your convenience.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                3. How can I find a reliable refrigerator repair near me?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                If you’re searching for refrigerator repair near me, Hansraj Enterprises is your trusted choice. We provide fridge repair in Bhubaneswar for Samsung, LG, Whirlpool, Voltas, and other brands.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                4. Which is the best washing machine service near me in Bhubaneswar?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Hansraj Enterprises is one of the best washing machine service providers in Bhubaneswar, offering affordable, fast, and guaranteed repair for all leading brands like LG, Samsung, and Whirlpool.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                5. What types of washing machines do you repair?
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We repair front-load, top-load, semi-automatic, and fully automatic washing machines from all brands. Whether you need a washer fixer or complete overhaul, our experts can help.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                6. How much does washing machine repair cost in Bhubaneswar?
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                The cost of washing machine repair in Bhubaneswar depends on the issue and brand. Basic servicing starts at affordable rates, and we provide transparent quotes before repair.
              </div>
            </div>
          </div>

          <!-- FAQ 7 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                7. Do you also offer fridge gas refilling or cooling issues repair?
              </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes, our fridge technicians near you are skilled in gas refilling, compressor repair, and cooling system fixes. We specialize in refrigeration repair near me for all models.
              </div>
            </div>
          </div>

          <!-- FAQ 8 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                8. Can you fix my washing machine or fridge on the same day?
              </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                In most cases, yes! Hansraj Enterprises provides same-day washing machine repair and fridge repair home service near you to get your appliances working quickly.
              </div>
            </div>
          </div>

          <!-- FAQ 9 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingNine">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                9. Do you provide AC and air conditioner repair service as well?
              </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Absolutely! We are also an air conditioner service centre near you in Bhubaneswar, offering installation, gas refilling, and maintenance for brands like Voltas, Hitachi, and Samsung.
              </div>
            </div>
          </div>

          <!-- FAQ 10 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTen">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                10. How do I contact Hansraj Enterprises for appliance repair near me?
              </button>
            </h2>
            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                You can book a service through our website or call our helpline for washing machine repair near me, refrigerator repair near me, or AC service in Bhubaneswar.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

    <!-- ================================================= -->
    <!-- SERVICE LOCATIONS SECTION -->
    <section class="py-5 locations-section" id="locations" style="background: #f1f5f9;">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 mx-auto">
                    <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">
                        <i class="bi bi-geo-alt-fill text-danger me-1"></i> Landmark Service Hubs
                    </span>
                    <h2 class="fw-bold fs-2">Our Service Locations in <span class="text-primary">Bhubaneswar</span></h2>
                    <p class="text-muted">
                        Fast 30-minute doorstep repair for Washing Machines, Refrigerators, ACs & Microwave Ovens across Bhubaneswar's key landmark areas and educational institutes.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Location 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="location-hub-card h-100 bg-white rounded-4 p-4 shadow-sm border position-relative d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="loc-number-badge">01</span>
                            <span class="badge bg-light text-dark border px-2 py-1"><i class="bi bi-pin-map-fill text-primary me-1"></i>Patia Zone</span>
                        </div>
                        <h4 class="fw-bold mb-2 fs-5">Kalinga Institute of Industrial Technology (KIIT)</h4>
                        <p class="text-muted small flex-grow-1">
                            Prompt doorstep appliance service across KIIT University, Campus 1-20, KIIT Square, Patia, Infocity, and Chandrasekharpur.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-auto">
                            <a href="<?= $base_url ?>kalinga-institute-of-industrial-technology.php" class="btn btn-primary btn-sm rounded-pill px-3 flex-grow-1">
                                View Details <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <a href="https://share.google/3U3p2yIr36wGPAGDf" target="_blank" class="btn btn-outline-secondary btn-sm rounded-pill px-3" title="Open Google Map Location">
                                <i class="bi bi-geo-alt text-danger"></i> Map
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Location 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="location-hub-card h-100 bg-white rounded-4 p-4 shadow-sm border position-relative d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="loc-number-badge">02</span>
                            <span class="badge bg-light text-dark border px-2 py-1"><i class="bi bi-pin-map-fill text-primary me-1"></i>Rasulgarh Zone</span>
                        </div>
                        <h4 class="fw-bold mb-2 fs-5">Nexus Esplanade</h4>
                        <p class="text-muted small flex-grow-1">
                            Quick doorstep repair service for residential and commercial spaces near Nexus Esplanade Mall, Rasulgarh Square, Bomikhal, and Cuttack Road.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-auto">
                            <a href="<?= $base_url ?>nexus-esplanade-bhubaneswar.php" class="btn btn-primary btn-sm rounded-pill px-3 flex-grow-1">
                                View Details <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <a href="https://share.google/fTCtHQjuo7OkSvy7m" target="_blank" class="btn btn-outline-secondary btn-sm rounded-pill px-3" title="Open Google Map Location">
                                <i class="bi bi-geo-alt text-danger"></i> Map
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Location 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="location-hub-card h-100 bg-white rounded-4 p-4 shadow-sm border position-relative d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="loc-number-badge">03</span>
                            <span class="badge bg-light text-dark border px-2 py-1"><i class="bi bi-pin-map-fill text-primary me-1"></i>Pokhariput Zone</span>
                        </div>
                        <h4 class="fw-bold mb-2 fs-5">D.A.V. Public School Pokhariput</h4>
                        <p class="text-muted small flex-grow-1">
                            Same-day washing machine, fridge & AC repair near DAV Pokhariput, Ananta Vihar, Jagamara, Gandamunda, and Aerodrome Gate.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-auto">
                            <a href="<?= $base_url ?>dav-public-school-pokhariput.php" class="btn btn-primary btn-sm rounded-pill px-3 flex-grow-1">
                                View Details <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <a href="https://share.google/xuPGhQ24RLGEuMTbh" target="_blank" class="btn btn-outline-secondary btn-sm rounded-pill px-3" title="Open Google Map Location">
                                <i class="bi bi-geo-alt text-danger"></i> Map
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Location 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="location-hub-card h-100 bg-white rounded-4 p-4 shadow-sm border position-relative d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="loc-number-badge">04</span>
                            <span class="badge bg-light text-dark border px-2 py-1"><i class="bi bi-pin-map-fill text-primary me-1"></i>Madanpur / Janla</span>
                        </div>
                        <h4 class="fw-bold mb-2 fs-5">GITA Autonomous College Bhubaneswar</h4>
                        <p class="text-muted small flex-grow-1">
                            Certified appliance repair services near GITA Autonomous College campus, Madanpur, Janla, Info Valley, and NH-16 highway corridor.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-auto">
                            <a href="<?= $base_url ?>gita-autonomous-college-bhubaneswar.php" class="btn btn-primary btn-sm rounded-pill px-3 flex-grow-1">
                                View Details <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <a href="https://share.google/0tvxMtVBJQ8VTlxCk" target="_blank" class="btn btn-outline-secondary btn-sm rounded-pill px-3" title="Open Google Map Location">
                                <i class="bi bi-geo-alt text-danger"></i> Map
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Location 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="location-hub-card h-100 bg-white rounded-4 p-4 shadow-sm border position-relative d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="loc-number-badge">05</span>
                            <span class="badge bg-light text-dark border px-2 py-1"><i class="bi bi-pin-map-fill text-primary me-1"></i>Unit 6 / AG Square</span>
                        </div>
                        <h4 class="fw-bold mb-2 fs-5">PGIMER & Capital Hospital Bhubaneswar</h4>
                        <p class="text-muted small flex-grow-1">
                            Priority doorstep repairs near PGIMER & Capital Hospital, Unit 6, AG Square, Forest Park, Raj Bhawan, and Ashok Nagar.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-auto">
                            <a href="<?= $base_url ?>pgimer-capital-hospital-bhubaneswar.php" class="btn btn-primary btn-sm rounded-pill px-3 flex-grow-1">
                                View Details <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <a href="https://www.google.com/search?client=ms-android-oppo-terr1-rso2&hs=FlZq&sca_esv=12e2dcfd274873dd&hl=en-GB&cs=1&sxsrf=APpeQntxT71IzkjpfMHZGJ4jf6x73kjmbg%3A1788596672360&kgmid=%2Fg%2F1tdd3pkw&q=PGIMER%20%26%20Capital%20Hospital%20Bhubaneswar" target="_blank" class="btn btn-outline-secondary btn-sm rounded-pill px-3" title="Open Google Map Location">
                                <i class="bi bi-geo-alt text-danger"></i> Map
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Location 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="location-hub-card h-100 bg-white rounded-4 p-4 shadow-sm border position-relative d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="loc-number-badge">06</span>
                            <span class="badge bg-light text-dark border px-2 py-1"><i class="bi bi-pin-map-fill text-primary me-1"></i>Old Town Zone</span>
                        </div>
                        <h4 class="fw-bold mb-2 fs-5">Lingaraj Temple</h4>
                        <p class="text-muted small flex-grow-1">
                            Reliable home appliance repair services across Lingaraj Temple vicinity, Bindu Sagar Lake, Old Town, Samantarapur, and Rath Road.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-auto">
                            <a href="<?= $base_url ?>lingaraj-temple-bhubaneswar.php" class="btn btn-primary btn-sm rounded-pill px-3 flex-grow-1">
                                View Details <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <a href="https://www.google.com/search?client=ms-android-oppo-terr1-rso2&hs=cQuV&sca_esv=12e2dcfd274873dd&hl=en-GB&cs=1&sxsrf=APpeQntGhIftpGXvM00zJZJZj3AY4DbCeA%3A1788596710520&kgmid=%2Fm%2F0cwxjv&q=Lingaraj%20Temple" target="_blank" class="btn btn-outline-secondary btn-sm rounded-pill px-3" title="Open Google Map Location">
                                <i class="bi bi-geo-alt text-danger"></i> Map
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Location 7 -->
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="location-hub-card h-100 bg-white rounded-4 p-4 shadow-sm border position-relative d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="loc-number-badge">07</span>
                            <span class="badge bg-light text-dark border px-2 py-1"><i class="bi bi-pin-map-fill text-primary me-1"></i>Pandara / Cuttack Road</span>
                        </div>
                        <h4 class="fw-bold mb-2 fs-5">Hi-Tech Medical College and Hospital</h4>
                        <p class="text-muted small flex-grow-1">
                            Fast doorstep repairs near Hi-Tech Medical College, Pandara, Pandra Square, Palasuni Overbridge, and NH-16 Cuttack Highway.
                        </p>
                        <div class="d-flex flex-wrap gap-2 pt-3 border-top mt-auto">
                            <a href="<?= $base_url ?>hi-tech-medical-college-hospital.php" class="btn btn-primary btn-sm rounded-pill px-3 flex-grow-1">
                                View Details <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <a href="https://share.google/EBrvHmA570w2L0P91" target="_blank" class="btn btn-outline-secondary btn-sm rounded-pill px-3" title="Open Google Map Location">
                                <i class="bi bi-geo-alt text-danger"></i> Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .location-hub-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        border: 1px solid #e2e8f0;
    }
    .location-hub-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.09) !important;
        border-color: #0387cf;
    }
    .loc-number-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        border-radius: 12px;
        background: linear-gradient(135deg, #0b1f3a, #0387cf);
        color: #ffdd00;
        font-weight: 800;
        font-size: 15px;
        box-shadow: 0 3px 8px rgba(3, 135, 207, 0.25);
    }
    </style>


    <!-- ================================================= -->
    <section class="py-5 contact-section" id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center head-title">
                    <h2>Send us a <span>message</span></h2>
                </div>
            </div>
            <div class="row g-4 align-items-center">
                <!-- Left: Contact Info & Map -->
                <div class="col-md-5">
                    <div class="card h-100 p-4 border-0 shadow-sm">
                        <h4 class="mb-3">Contact Information</h4>
                        <p class="mb-2 ">
                            <strong>Address:</strong>
                            Near, Sum Hospital Rd, Kalinganagar, Bhubaneswar, Odisha 751003
                        </p>
                        <p class="mb-2">
                            <strong>Phone:</strong>
                            <a href="tel:+917894606334" class="text-decoration-none text-dark">+91-78946 06334</a>
                        </p>
                        <p class="mb-3">
                            <strong>Email:</strong>
                            <a href="mailto:support@hansrajenterprises.in"
                                class="text-decoration-none text-dark">support@hansrajenterprises.in</a>
                        </p>
                        <!-- Google Map -->
                        <div class="ratio ratio-4x3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d239536.13348521694!2d85.678486!3d20.269114!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xad24d19b597d6a5d%3A0xc346c3e328dbd3d7!2sHANSRAJ%20ENTERPRISES%3A-%20Best%20washing%20machine%20%26%20fridge%20Repair%20in%20Bhubaneswar%7C%20washing%20machine%20repair%20in%20Bhubaneswar.!5e0!3m2!1sen!2sin!4v1751531014121!5m2!1sen!2sin"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Right: Contact Form -->
                <div class="col-md-7">
                    <div class="py-1">
                        <p>
                            Get in touch and let us know how we can help you.
                        </p>
                    </div>
                    <form method="post" class="card whatsapp-form p-4 shadow-sm border-0">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control name-field" placeholder="Enter your name"
                                    id="name" name="name" required />
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control phone-field" placeholder="Enter your Number"
                                    id="phone" name="phone" required />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control email-field" placeholder="Enter your email"
                                    id="email" name="email" />
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label">Address </label>
                                <input type="text" class="form-control address-field" placeholder="Enter your Address"
                                    id="address" name="address" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message </label>
                            <textarea class="form-control message-field" id="message" name="message"
                                placeholder="Enter your message" rows="4"></textarea>
                        </div>

                        <div class="text-end">
                            <button type="button" class="btn btn-primary px-4 send-to-whatsapp">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================= -->
    <?php include $base_path . "common/footer.php"; ?>

</body>
<script>
    document.querySelectorAll(".send-to-whatsapp").forEach(function (button) {
        button.addEventListener("click", function (event) {
            const form = button.closest("form");

            // Apply Bootstrap validation check
            if (!form.checkValidity()) {
                form.classList.add("was-validated");
                return;
            }

            // Fetch input values
            const name = form.querySelector(".name-field").value.trim();
            const phone = form.querySelector(".phone-field").value.trim();
            const email = form.querySelector(".email-field")?.value.trim();
            const address = form.querySelector(".address-field")?.value.trim();
            const message = form.querySelector(".message-field").value.trim();

            // Format message
            const formattedMessage =
                `Hello Hansraj Enterprises,%0A` +
                `I'd like to request a service:%0A%0A` +
                `👤 *Name:* ${name}%0A` +
                `📞 *Phone:* ${phone}%0A` +
                `✉️ *Email:* ${email || 'N/A'}%0A` +
                `🏠 *Address:* ${address || 'N/A'}%0A` +
                `📝 *Message:* ${message}`;

            const whatsappNumber = "917894606334";
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(formattedMessage)}`;

            window.open(whatsappURL, "_blank");
        });
    });
</script>

</html>