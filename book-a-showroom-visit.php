<?php include('./header.php') ?>



<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="./assets/images/book-a-showroom.webp"
    data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Experience Our Showroom
                    </h1>

                    <p>Step inside our world of design – plan your dream kitchen with our experts.</p>
                    <div class="path">
                        <a href="<?php echo $base_url; ?>">Home</a><span>/</span><a href="#0" class="active">Book a Showroom Visit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    :root {
        --p: #01386e;
        --s: #0092f9;
    }



 
    .hero h1 {
        font-size: 2.5rem;
    }

    /* About Section */
    .about-showroom img {
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* .features-box {
        background: var(--p);
        color: #fff;
        padding: 30px;
        border-radius: 16px;
    } */

    .features-box ul {
        padding-left: 1.2rem;
    }

    .features-box ul li {
        margin-bottom: 10px;
    }

    /* Form Card */
    .form-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 30px;
        padding-top: 0;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
    }

    .form-card button {
        background: var(--s);
        color: #fff;
        border: none;
        font-weight: 600;
    }

    .form-card button:hover {
        background: var(--p);
    }

    /* Timeline */
    .timeline {
        background: #f8f9fa;
        padding: 50px 0;
    }

    .timeline h3 {
        margin-bottom: 50px;
    }

    .timeline-step {
        background: #fff;
        border-radius: 6px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .timeline-step:hover {
        transform: translateY(-5px);
    }

    .timeline-step img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .timeline-step .content {
        padding: 20px;
    }

    .timeline-step .content h5 {
        color: var(--p);
        font-weight: 700;
        font-size: 20px;
    }

    /* Section dividers */
    .divider {
        height: 80px;
        background: linear-gradient(to right, var(--s), var(--p));
        clip-path: polygon(0 0, 100% 100%, 0% 100%);
    }

    /* AOS animations base tweaks */
    [data-aos] {
        transition: all 0.6s ease-in-out;
    }
</style>
</head>

<body class="bg1">

    <!-- HERO -->
    <!-- <section class="hero">
    <div class="container">
      <h1 data-aos="fade-down">Experience Our Showroom</h1>
      <p data-aos="fade-up" class="mt-3 wow fadeInUp">Step inside our world of design – plan your dream kitchen with our experts.</p>
    </div>
  </section> -->



    <!-- ABOUT SHOWROOM -->
    <section class="about-showroom py-5 bg1">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="img wow imago image-anime reveal">

                        <img src="./assets/images/showroom_visit1.jpg" alt="Showroom" class="img-fluid">

                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2>Why Visit Our Showroom?</h2>
                    <p class="mt-3">Consult with us to see how your kitchen can be planned to reflect your style and values as well as making it a lovely, beautifully curated space. You’ll also have access to our professional designing skills and trade contacts.</p>
                    <p>However big or small your project is, we will analyze your situation and suggest designs that work for you!</p>
                    <p><b><i>You might actually enjoy the decorating process after all!!</i></b></p>
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
                        <h3><i class="fa-solid fa-user-check me-2"></i>Meet Our Experts at Showroom</h3>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="feature-card">
                                            <i class="fas fa-box-open fa-2x mb-3"></i>
                                            <p>Witness a display of our products & experience their functions.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-card">
                                            <i class="fas fa-comments fa-2x mb-3"></i>
                                            <p>Discuss your requirements with our expert</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-card">
                                            <i class="fas fa-swatchbook fa-2x mb-3"></i>
                                            <p>See a presentation of samples, shades, accessories, previous projects etc.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-card">
                                            <i class="fas fa-cube fa-2x mb-3"></i>
                                            <p>Get free design options with 3D Preview</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="feature-card">
                                            <i class="fas fa-file-invoice-dollar fa-2x mb-3"></i>
                                            <p>Obtain a detailed quotation with no compulsion to buy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

<style>
.feature-card {
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

h3 {
    font-size: 25px;
}

.feature-card i {
      color: #34739b;
    transition: all 0.3s ease;
}

.feature-card:hover i {
    transform: scale(1.1);
    color: #8E7452;
}

.feature-card p {
    margin: 0;
    line-height: 1.5;
}

.showroom_row {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
padding: 20px;
}
    
</style>
                      
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
                                    <input type="tel" class="form-control" name="ContactNo" required pattern="(9|8|7)\d{9}">
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
                                <button type="submit" class="btn w-100 mt-2"><i class="fa-regular fa-paper-plane me-2"></i>Submit</button>
                        </form>
                    </div>
               
                </div>
            </div>



<style>
.home-measurement-card {
    
    box-shadow: 0 8px 30px rgb(0 0 0 / 57%);
    transition: all 0.3s ease;
    background: url(https://img.freepik.com/premium-photo/female-hands-holding-ice-coffee-mug-wooden-worktable-with-laptop-book_67155-9745.jpg?w=1480);
    padding: 70px !important;
    background-size: cover;
    background-position: 0px -70px;
    background-repeat: no-repeat;
    box-shadow: rgb(2 75 146 / 86%) 0 0 0 1000px inset;
    color: #fff;
    border-radius: 5px;
}

.home-measurement-card:hover {
    transform: translateY(-5px);
    /* box-shadow: 0 15px 40px rgba(0,0,0,0.12); */
    
}

.home-measurement-card p{
        color: #fff;
    font-size: 30px;
    line-height: normal;
}

.icon-wrapper {
    width: 80px;
    height: 80px;
    margin: 0 auto;
    background: #f8f9fa;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.icon-wrapper i {
    color: #B19777;
}

.home-measurement-card h4 {
    color: #fff;
    font-weight: 600;
}

.home-measurement-card .btn-primary {
    background: #B19777;
    border: none;
    font-weight: 500;
    letter-spacing: 0.5px;
}

.home-measurement-card .btn-primary:hover {
    background: #8E7452;
}
</style>
                    </div>
        </div>
    </section>

    <section>
        <div class="container">
                             <div class=" mt-4" data-aos="fade-up">
<div class="home-measurement-card p-4 text-center">
    
    <h4 class="mb-3">
        <i class="fas fa-home me-2"></i>
        Book Home Measurements
    </h4>
    <p class="mb-4">
       <i class="fas fa-heart me-2 " style="
    color: #ff0335 !important;
"></i>
        We all desire a space that feels authentically our own: somewhere we can coil up over a cup of coffee <i class="fas fa-coffee"></i>.
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
                        <img src="https://www.kuche7.com/Content/images/process/step3.jpg" alt="">
                        <div class="content">
                            <h5><span class="showroom_visit_steps">Step 1</span> - Meet & Greet</h5>
                            <p>We meet and explain our products while understanding your lifestyle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="timeline-step">
                        <img src="https://www.kuche7.com/Content/images/process/step3.jpg" alt="">
                        <div class="content">
                            <h5><span class="showroom_visit_steps">Step 2</span> – Idea & Concept</h5>
                            <p>We measure, note details, understand context and offer practical advice.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="timeline-step">
                        <img src="https://www.kuche7.com/Content/images/process/step3.jpg" alt="">
                        <div class="content">
                            <h5><span class="showroom_visit_steps">Step 3</span> – Design & Create</h5>
                            <p>Our specialists create a customized plan only for you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="timeline-step">
                        <img src="https://www.kuche7.com/Content/images/process/step4.jpg" alt="">
                        <div class="content">
                            <h5><span class="showroom_visit_steps">Step 4</span> – Build & Install</h5>
                            <p>We craft and install your dream kitchen with attention to finishing touches.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="timeline-step">
                        <img src="https://www.kuche7.com/Content/images/process/step5.jpg" alt="">
                        <div class="content">
                            <h5><span class="showroom_visit_steps">Step 5</span> – After Sales Services</h5>
                            <p>We finalize, attend to remaining items and explain care & maintenance.</p>
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