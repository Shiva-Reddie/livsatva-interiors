<?php include './header.php'; ?>

<!-- CUSTOM CSS -->
<style>
:root {
    --p: #01386e;
    --s: #0092f9;
}

.form-group {
    position: relative;
}

.form-group .form-icon {
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
    color: #01386e;
    font-size: 16px;
}

.form-control {
    height: 45px;
}

select.form-control {
    height: 45px;
}

.step-card:hover .step-icon {
    transform: scale(1.1);
    transition: 0.3s ease;
}

.step-card h6 {
    font-size: 14px;
}

.step-card p {
    font-size: 12px;
}

.why-choose-us .sub-title {
    font-weight: 500;
    text-transform: uppercase;
    color: var(--p);
    letter-spacing: 1px;
}

.benefit-card {
    background: #fff;
    border-radius: 12px;
    transition: transform 0.3s, box-shadow 0.3s;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.benefit-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.benefit-card .icon {
    color: var(--p);
    background: linear-gradient(45deg, var(--p), var(--s));
    -webkit-background-clip: text;
    color: transparent;
}

.benefit-card h5 {
    margin-top: 10px;
    margin-bottom: 10px;
    font-weight: 600;
    color: #01386e;
}

.benefit-card p {
    font-size: 0.9rem;
    color: #555;
}
</style>

<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="./assets/images/book-a-showroom.webp"
    data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Book a Visit</h1>
                    <p>Let our experts visit your home, take precise measurements, and help design your perfect kitchen.
                    </p>
                    <div class="path">
                        <a href="<?php echo $site_url; ?>">Home</a><span>/</span><a href="#0" class="active">Book a
                            Visit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


</head>

<body class="bg1">

    <!-- HERO / HOME VISIT INTRO -->
    <section class="hero-home-visit py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3s">
                    <h2>Schedule a Home Visit for Your Dream Modular Interiors</h2>
                    <p class="mt-3">
                        Let our experts visit your home to assess your space, understand your requirements,
                        and suggest personalized solutions for your modular kitchen, wardrobe, or living space.
                    </p>
                    <p>
                        Experience the ease of professional guidance, accurate measurements, and tailored design
                        right from the comfort of your home.
                    </p>

                    <a href="#booking-form" class="btn-curve btn-color mt-30">
                        <span>Schedule a Visit</span>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay=".3s">
                    <div class="img wow imago image-anime reveal">
                        <img src="./assets/images/showroom_visit1.jpg" alt="Home Visit" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- FEATURES + FORM -->
    <section class="py-5">
        <div class="container">
            <div class="row showroom_row">

                <!-- Benefits Column -->
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="features-box">
                        <h3><i class="fa-solid fa-user-check me-2"></i>Benefits of a Home Visit</h3>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="row g-4">
                                    <div class="col-md-6 text-center">
                                        <div class="step-card p-3 rounded shadow-sm">
                                            <div class="step-icon mb-3"
                                                style="background: linear-gradient(45deg, var(--p), var(--s)); color:#fff; width:60px; height:60px; line-height:60px; border-radius:50%; margin:auto; font-size:24px;">
                                                <i class="fa-solid fa-paper-plane"></i>
                                            </div>
                                            <h6 class="fw-bold mt-2">Request a Visit</h6>
                                            <p class="small text-muted">Fill out the form with your details.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <div class="step-card p-3 rounded shadow-sm">
                                            <div class="step-icon mb-3"
                                                style="background: linear-gradient(45deg, var(--p), var(--s)); color:#fff; width:60px; height:60px; line-height:60px; border-radius:50%; margin:auto; font-size:24px;">
                                                <i class="fa-solid fa-user-tie"></i>
                                            </div>
                                            <h6 class="fw-bold mt-2">Expert Consultation</h6>
                                            <p class="small text-muted">Our designer visits your home.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <div class="step-card p-3 rounded shadow-sm">
                                            <div class="step-icon mb-3"
                                                style="background: linear-gradient(45deg, var(--p), var(--s)); color:#fff; width:60px; height:60px; line-height:60px; border-radius:50%; margin:auto; font-size:24px;">
                                                <i class="fa-solid fa-ruler-combined"></i>
                                            </div>
                                            <h6 class="fw-bold mt-2">Space Assessment</h6>
                                            <p class="small text-muted">Measurements, layout, and requirement analysis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <div class="step-card p-3 rounded shadow-sm">
                                            <div class="step-icon mb-3"
                                                style="background: linear-gradient(45deg, var(--p), var(--s)); color:#fff; width:60px; height:60px; line-height:60px; border-radius:50%; margin:auto; font-size:24px;">
                                                <i class="fa-solid fa-file-invoice-dollar"></i>
                                            </div>
                                            <h6 class="fw-bold mt-2">Quotation & Plan</h6>
                                            <p class="small text-muted">Receive personalized design & quotation.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="step-card p-3 rounded shadow-sm">
                                            <div class="step-icon mb-3"
                                                style="background: linear-gradient(45deg, var(--p), var(--s)); color:#fff; width:60px; height:60px; line-height:60px; border-radius:50%; margin:auto; font-size:24px;">
                                                <i class="fa-solid fa-check-circle"></i>
                                            </div>
                                            <h6 class="fw-bold mt-2">Approval & Scheduling</h6>
                                            <p class="small text-muted">Confirm design and installation timeline.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div id="booking-form" class="form-card p-4 shadow-sm rounded">
                        <h3 class="text-center mb-4">Book a Home Visit</h3>
                        <form id="bookShowroomForm" class="mt-50">
                            <div class="row g-3">
                                <!-- Name -->
                                <div class="col-6">
                                    <div class="form-group position-relative">
                                        <i class="fas fa-user form-icon"></i>
                                        <input type="text" class="form-control ps-5" name="FName" placeholder="Name *"
                                            required>
                                    </div>
                                </div>

                                <!-- Contact No -->
                                <div class="col-6">
                                    <div class="form-group position-relative">
                                        <i class="fas fa-phone form-icon"></i>
                                        <input type="tel" class="form-control ps-5" name="ContactNo"
                                            placeholder="Contact No *" required pattern="(9|8|7)\d{9}">
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-6">
                                    <div class="form-group position-relative">
                                        <i class="fas fa-envelope form-icon"></i>
                                        <input type="email" class="form-control ps-5" name="Email" placeholder="Email *"
                                            required>
                                    </div>
                                </div>

                                <!-- Location -->
                                <div class="col-6">
                                    <div class="form-group position-relative">
                                        <i class="fas fa-map-marker-alt form-icon"></i>
                                        <input type="text" class="form-control ps-5" name="Location"
                                            placeholder="Location *" required>
                                    </div>
                                </div>

                                <!-- Date -->
                                <div class="col-6">
                                    <div class="form-group position-relative">
                                        <i class="fas fa-calendar-alt form-icon"></i>
                                        <input type="date" class="form-control ps-5" name="PrefferedDate">
                                    </div>
                                </div>

                                <!-- Time -->
                                <div class="col-6">
                                    <div class="form-group position-relative">
                                        <i class="fas fa-clock form-icon"></i>
                                        <input type="time" class="form-control ps-5" name="PrefferedTime">
                                    </div>
                                </div>

                                <!-- Budget -->
                                <div class="col-12">
                                    <div class="form-group position-relative">
                                        <i class="fas fa-wallet form-icon"></i>
                                        <select class="form-control ps-5" name="Budget" required>
                                            <option value="">Select Budget *</option>
                                            <option>7.5-10 Lacs</option>
                                            <option>10-15 Lacs</option>
                                            <option>15 Lacs+</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 mt-2">
                                        <i class="fa-regular fa-paper-plane me-2"></i>Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="why-choose-us about py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="sub-title text-primary">Our Commitment</h6>
                <h2>Why Choose Us?</h2>
                <p class="text-muted">We provide professional, personalized, and timely services for your home
                    interiors.</p>
            </div>

            <div class="row g-4">
                <!-- Benefit 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card text-center p-4 h-100">
                        <div class="icon mb-3">
                            <i class="fas fa-user-tie fa-2x"></i>
                        </div>
                        <h5>Experienced Designers</h5>
                        <p>Our experts bring years of experience to craft interiors that fit your lifestyle perfectly.
                        </p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card text-center p-4 h-100">
                        <div class="icon mb-3">
                            <i class="fas fa-file-invoice-dollar fa-2x"></i>
                        </div>
                        <h5>Transparent Quotations</h5>
                        <p>We provide clear, detailed quotations so you know exactly what you’re investing in.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card text-center p-4 h-100">
                        <div class="icon mb-3">
                            <i class="fas fa-paint-roller fa-2x"></i>
                        </div>
                        <h5>Personalized Solutions</h5>
                        <p>Every home is unique. We create custom designs and solutions tailored to your space.</p>
                    </div>
                </div>

                <!-- Benefit 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card text-center p-4 h-100">
                        <div class="icon mb-3">
                            <i class="fas fa-truck-fast fa-2x"></i>
                        </div>
                        <h5>On-time Visits & Installation</h5>
                        <p>We respect your time and ensure home visits and installations are punctual and hassle-free.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="container">
            <div class="mt-4" data-aos="fade-up">
                <div class="home-measurement-card p-4 text-center">

                    <h4 class="mb-3">
                        <i class="fas fa-home me-2"></i>
                        Book a Home Visit
                    </h4>
                    <p class="mb-4">
                        <i class="fas fa-heart me-2" style="color: #ff0335 !important;"></i>
                        Experience personalized design solutions right at your doorstep.
                        Our team takes precise measurements <i class="fas fa-ruler-combined"></i>
                        and helps you explore ideas that fit your lifestyle.
                    </p>

                </div>
            </div>
        </div>
    </section>




    <!-- TIMELINE -->
    <section class="timeline">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="sub-title text-primary">Our Commitment</h6>
                <h2>Process & Delivery</h2>
                <p class="text-muted">We provide professional, personalized, and timely services for your home
                    interiors.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="timeline-step">
                        <img src="https://images.pexels.com/photos/8293778/pexels-photo-8293778.jpeg" alt="Home Visit">
                        <div class="content">
                            <h5><span class="showroom_visit_steps">Step 1</span> – Schedule a Visit</h5>
                            <p>Book a convenient time for our team to visit your home and discuss your requirements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="timeline-step">
                        <img src="https://images.pexels.com/photos/8486185/pexels-photo-8486185.jpeg"
                            alt="Site Measurement">
                        <div class="content">
                            <h5><span class="showroom_visit_steps">Step 2</span> – Site Measurement</h5>
                            <p>We take accurate measurements, understand your space, and note important details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="timeline-step">
                        <img src="https://images.pexels.com/photos/6476587/pexels-photo-6476587.jpeg"
                            alt="Design Proposal">
                        <div class="content">
                            <h5><span class="showroom_visit_steps">Step 3</span> – Design Proposal</h5>
                            <p>Our experts prepare a personalized design concept that matches your lifestyle and taste.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="timeline-step">
                        <img src="https://images.pexels.com/photos/6585763/pexels-photo-6585763.jpeg"
                            alt="Installation">
                        <div class="content">
                            <h5><span class="showroom_visit_steps">Step 4</span> – Execution & Installation</h5>
                            <p>We manufacture, deliver, and install with precision, ensuring top-quality finishing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="timeline-step">
                        <img src="https://images.pexels.com/photos/6186814/pexels-photo-6186814.jpeg" alt="Support">
                        <div class="content">
                            <h5><span class="showroom_visit_steps">Step 5</span> – Support & Care</h5>
                            <p>After completion, we provide guidance on maintenance and offer ongoing support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 800,
        once: true
    });
    // Basic JS to show confirmation
    document.getElementById('bookShowroomForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Your showroom visit has been booked! We will contact you soon.');
        this.reset();
    });
    </script>
    <?php include './footer.php'; ?>