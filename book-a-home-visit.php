<?php include('./header.php') ?>






<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="./assets/images/book-a-showroom.webp"
    data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Book a Home Visit</h1>
                    <p>Let our experts visit your home, take precise measurements, and help design your perfect kitchen.
                    </p>
                    <div class="path">
                        <a href="<?php echo $site_url; ?>">Home</a><span>/</span><a href="#0" class="active">Book a
                            Home Visit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



</head>

<body class="bg1">





    <!-- ABOUT HOME VISIT -->
    <section class="about-showroom py-5 bg1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="img wow imago image-anime reveal">
                        <img src="./assets/images/showroom_visit1.jpg" alt="Home Visit" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2>Why Choose a Home Visit?</h2>
                    <p class="mt-3">Our experts will visit your home to understand your space, lifestyle, and
                        requirements so we can design a kitchen that perfectly fits your home environment.</p>
                    <p>From taking accurate measurements to suggesting the best layout and finishes, we ensure your
                        kitchen is customized to your needs without you stepping out.</p>
                    <p><b><i>Enjoy the comfort of expert guidance right at your doorstep!</i></b></p>
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- FEATURES + FORM -->
    <section class="py-5">
        <div class="container">
            <div class="row showroom_row ">

                <div class="col-lg-6" data-aos="fade-up">
                    <div class="features-box">
                        <h3><i class="fa-solid fa-user-check me-2"></i>Benefits of a Home Visit</h3>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="feature-card">
                                            <i class="fas fa-ruler-combined fa-2x mb-3"></i>
                                            <p>Accurate on-site measurements for perfect planning.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-card">
                                            <i class="fas fa-comments fa-2x mb-3"></i>
                                            <p>Discuss your lifestyle needs in the comfort of your home.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-card">
                                            <i class="fas fa-palette fa-2x mb-3"></i>
                                            <p>Explore material, shade, and accessory options at your doorstep.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-card">
                                            <i class="fas fa-vr-cardboard fa-2x mb-3"></i>
                                            <p>Get 3D design previews tailored to your actual space.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="feature-card">
                                            <i class="fas fa-file-invoice-dollar fa-2x mb-3"></i>
                                            <p>Receive a detailed quotation with no obligation to purchase.</p>
                                        </div>
                                    </div>
                                </div>



                            </div>




                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="form-card">
                        <h3 class="text-center mb-4">Book a Showroom Visit</h3>
                        <form id="bookShowroomForm" class="mt-50">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="FName" required>
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label">Contact No *</label>
                                    <input type="tel" class="form-control" name="ContactNo" required
                                        pattern="(9|8|7)\d{9}">
                                </div>
                                <div class="col-6 mb-3">

                                    <label class="form-label">Email *</label>
                                    <input type="email" class="form-control" name="Email" required>
                                </div>

                                <div class="col-6 mb-3">
                                    <label class="form-label">Location *</label>
                                    <input type="text" class="form-control" name="Location" required>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Preferred Date</label>
                                        <input type="date" class="form-control" name="PrefferedDate">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Preferred Time</label>
                                        <input type="time" class="form-control" name="PrefferedTime">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">My Budget is *</label>
                                    <select class="form-control" name="Budget" required>
                                        <option value="">Select</option>
                                        <option>7.5-10 Lacs</option>
                                        <option>10-15 Lacs</option>
                                        <option>15 Lacs+</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn w-100 mt-2"><i
                                        class="fa-regular fa-paper-plane me-2"></i>Submit</button>
                        </form>
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
            <h3 class="text-center" data-aos="fade-down">Process & Delivery</h3>
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
    <?php include('./footer.php') ?>