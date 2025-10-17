<?php include './header.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ==================== Start Slider ==================== -->
<header class="slid-half">
    <div id="js-cta-slider" class="cta__slider-wrapper nofull swiper-container">
        <div class="swiper-wrapper cta__slider">
            <!-- SLIDER ITEM -->
            <div class="cta__slider-item swiper-slide" style="background-image: url(assets/images/ban1.webp);">
                <div class="media-wrapper slide-inner valign">
                    <div class="bg-img" data-background="assets/img/slid/01.jpg" data-overlay-dark1="5"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption">
                                    <span class="top-corn"></span>
                                    <span class="bottom-corn"></span>
                                    <div class="custom-font">
                                        <h5 class="thin custom-font"> Style that lasts. Strength that endures.</h5>
                                        <h1 data-splitting="">
                                            <a href="#0">
                                                Modern Metal Designs
                                            </a>
                                        </h1>
                                    </div>
                                    <p>
                                        Discover interiors that combine the strength of metal with the grace of modern
                                        design.
                                        At LivSatva, every kitchen and wardrobe is crafted from premium steel — durable,
                                        sleek, and sustainable.


                                    </p>
                                    <!-- <a href="./contact.php" class="btn-curve btn-color mt-30">
                                        <span></span>
                                    </a> -->
                                    <a href="#" class="btn-curve btn-color mt-30" data-bs-toggle="modal"
                                        data-bs-target="#contactModal">
                                        <span><i class="fa-solid fa-arrow-right me-2"></i>Book a Free
                                            Consultation</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDER ITEM -->
            <!-- SLIDER ITEM -->
            <div class="cta__slider-item swiper-slide" style="background-image: url(assets/images/wardrobes-ban.webp);">
                <div class="media-wrapper slide-inner valign">
                    <div class="bg-img" data-background="assets/img/slid/02.jpg" data-overlay-dark1="5"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption">
                                    <span class="top-corn"></span>
                                    <span class="bottom-corn"></span>
                                    <div class="custom-font">
                                        <h5 class="thin custom-font"> Beautiful today. Brilliant forever.</h5>
                                        <h1 data-splitting=""><a href="#0"> Redefining Modern Interiors</a></h1>
                                    </div>
                                    <p>
                                        Step into the future of interior design with LivSatva’s all-steel creations.
                                        We replace wood with innovation — creating eco-friendly, termite-free, and
                                        low-maintenance spaces that stand the test of time.

                                    </p>
                                    <!-- <a href="./book-a-home-visit.php" class="btn-curve btn-color mt-30">
                                        <span>Discover Work</span>
                                    </a> -->
                                    <a href="#" class="btn-curve btn-color mt-30" data-bs-toggle="modal"
                                        data-bs-target="#contactModal">
                                        <span><i class="fa-solid fa-arrow-right me-2"></i>Book a Free
                                            Consultation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDER ITEM -->
            <!-- SLIDER ITEM -->
            <div class="cta__slider-item swiper-slide" style="background-image: url(assets/images/ban3.webp);">
                <div class="media-wrapper slide-inner valign">
                    <div class="bg-img" data-background="assets/img/slid/03.jpg" data-overlay-dark1="5"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption">
                                    <span class="top-corn"></span>
                                    <span class="bottom-corn"></span>
                                    <div class="custom-font">
                                        <h5 class="thin custom-font">Beautiful. Durable. Sustainable.</h5>
                                        <h1 data-splitting="">
                                            <a href="#0">
                                                Modern Metal Designs for Modern Living
                                            </a>
                                        </h1>
                                    </div>
                                    <p>

                                        Welcome to LivSatva, where innovation meets elegance.
                                        We create luxurious, long-lasting steel interiors — from modular kitchens to
                                        wardrobes — built to transform your home into a masterpiece of strength and
                                        style.



                                    </p>
                                    <!-- <a href="./book-a-showroom-visit.php" class="btn-curve btn-color mt-30">
                                        <span>Discover Work</span>
                                    </a> -->

                                    <a href="#" class="btn-curve btn-color mt-30" data-bs-toggle="modal"
                                        data-bs-target="#contactModal">
                                        <span><i class="fa-solid fa-arrow-right me-2"></i>Book a Free
                                            Consultation</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDER ITEM -->
        </div>
        <div class="cta__slider-arrows">
            <i id="js-cta-slider-next" class="cta__slider-arrow cta__slider-arrow--next">
                <i class="fas fa-chevron-up"></i>
            </i>
            <i id="js-cta-slider-previous" class="cta__slider-arrow cta__slider-arrow--previous">
                <i class="fas fa-chevron-down"></i>
            </i>
        </div>
    </div>
    <div class="swiper-pagination top custom-font"></div>
</header>

<!-- pop up form banner section -->
<!-- ==================== Start Luxury Contact Form Modal ==================== -->
<!-- ==================== Start Stylish Contact Modal ==================== -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-12 m-auto">
            <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content glass-form border-0 position-relative overflow-hidden">

                        <!-- Close Button -->
                        <button type="button" class="btn-close custom-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>

                        <!-- Form Body -->
                        <div class="modal-body p-5 text-white">
                            <div class="text-center mb-4">
                                <h2 class="fw-bold text-uppercase mb-2">Let’s Talk About Your Project</h2>
                                <p class="small mb-0">
                                    Share your details below — our team will connect soon to bring your <b>steel
                                        interior</b> vision
                                    to life.
                                </p>
                            </div>

                            <form class="row g-3">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <div class="input-group form-glass">
                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Full Name" required>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="input-group form-glass">
                                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                        <input type="tel" class="form-control" placeholder="Mobile Number"
                                            pattern="[0-9]{10}" required>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="input-group form-glass">
                                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                </div>

                                <!-- Location -->
                                <div class="col-md-6">
                                    <div class="input-group form-glass">
                                        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                        <input type="text" class="form-control" placeholder="Location" required>
                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <div class="input-group form-glass">
                                        <span class="input-group-text"><i class="fa-solid fa-comment-dots"></i></span>
                                        <textarea class="form-control" placeholder="Your Message" rows="4"
                                            required></textarea>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 text-center mt-3">
                                    <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill">
                                        <i class="fa-solid fa-paper-plane me-2"></i> Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== End Stylish Contact Modal ==================== -->

<!-- ==================== End Luxury Contact Form Modal ==================== -->

<!-- pop up form banner section -->
<!-- ==================== End Slider ==================== -->
<!-- ==================== Start Services ==================== -->
<section class="services">
    <div class="feat-top">
        <div class="notfull bg-gray wow"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item-sm wow fadeInUp" data-wow-delay="1s">
                        <div class="box">
                            <h6 class="mb-20"><span class="custom-font numb">01</span> Connect with Our Experts</h6>
                            <p> Share your vision with our design specialists.
                                We understand your lifestyle, preferences, and space to create concepts that perfectly
                                reflect you.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item-sm wow fadeInUp" data-wow-delay="1.1s">
                        <div class="box">
                            <h6 class="mb-20"><span class="custom-font numb">02</span> Visualize Your Dream Design
                            </h6>
                            <p> Get a personalized 3D design preview and a clear, transparent quote — no hidden charges,
                                no surprises.
                                You’ll see exactly how your dream kitchen or interior will look before we begin.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item-sm wow fadeInUp" data-wow-delay="1.2s">
                        <div class="box">
                            <h6 class="mb-20"><span class="custom-font numb">03</span> Confirm & Experience Perfection
                            </h6>
                            <p> Once approved, our team handles everything — from precision manufacturing to seamless
                                installation.
                                Enjoy strong, stylish, and termite-free steel interiors that are built to last.

                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
               <div class="item-sm wow fadeInUp" data-wow-delay="1.2s">
                   <div class="box">
                       <h6 class="mb-20"><span class="custom-font numb">03</span> Installation
               and Handover</h6>
                       <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                   </div>
               </div>
               </div> -->
            </div>
        </div>
    </div>
</section>
<!-- ==================== End Services ==================== -->
<!-- ==================== Start about ==================== -->
<section class="about space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 valign">
                <div class="exp-content nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">About Us</h6>
                    <h2 class="mb-20 playfont">
                        Who We Are
                    </h2>
                    <p>
                        At LivSatva, we don’t just design spaces — we engineer experiences.
                        Our mission is to replace traditional wooden interiors with premium stainless-steel solutions
                        that last for decades.

                    </p>
                    <h5>Our Vision</h5>
                    <p>To redefine modern interiors with innovation, integrity, and sustainability.</p>
                    <h5>Our Promise</h5>
                    <p>Every design we create blends strength, hygiene, and aesthetics — crafted to suit your lifestyle
                        and built to last a lifetime. <br>
                        <b>Design Pure. Live Satva.</b>
                    </p>
                    <a href="./modular-kitchen.php" class="btn-curve btn-color mt-30">
                        <span>View More</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="assets/img/line-pattern.png"></div>
                        </div>
                        <div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img mb-20 wow imago">
                                <img src="assets/img/ab1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-7 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="assets/img/ab2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="years-exp">
                                <div class="exp-text">
                                    <h2 class="custom-font">21</h2>
                                    <h6>Years Of Experience</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">

        <div class="bigheading">
            <h3>Our Products</h3>
        </div>

    </div>
</section>

<section class="about space2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <h5>Where Design Meets Durability</h5>
                <p>At LivSatva, we don’t just create interiors — we craft experiences.
                    Every product is designed with precision engineering, superior stainless steel, and modern
                    aesthetics that last for generations.
                </p>
                <p><b>No wood. No worries. Just beauty, strength, and sustainability — perfectly balanced.</b></p>
            </div>
        </div>
        <div class="row mt-50">
            <div class="col-lg-5 valign">
                <div class="exp-content text-lg-left text-left nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title"> Built with Steel.
                        Styled for You. </h6>
                    <h2 class="mb-20 playfont">Modular Kitchen</h2>

                    <p>

                        Your kitchen isn’t just a workspace — it’s the heart of your home.
                        That’s why our steel modular kitchens are designed to combine function, hygiene, and timeless
                        beauty.
                    </p>

                    <p>

                        Each LivSatva kitchen is a masterpiece — crafted from high-grade stainless steel and coated with
                        powder-finish perfection, ensuring strength that never fades.
                    </p>





                    <p class="mt-3">
                        <i class="fa-solid fa-lightbulb text-warning me-2"></i>
                        <b>Experience the future of cooking — stylish, smart, and sustainable.</b>
                    </p>

                    <a href="./modular-kitchen.php" class="btn-curve btn-color mt-30">
                        <span><i class="fa-solid fa-arrow-right me-2"></i> View More</span>
                    </a>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="assets/img/line-pattern.png"></div>
                        </div>
                        <!-- <div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
                     <div class="img mb-20 wow imago">
                         <img src="assets/images/kitchen.webp" alt="">
                     </div>
                     </div> -->
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago  image-anime reveal">
                                <img src="assets/images/kitchen1.webp" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about space2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="assets/img/line-pattern.png"></div>
                        </div>
                        <!-- <div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
                     <div class="img mb-20 wow imago">
                         <img src="assets/images/kitchen.webp" alt="">
                     </div>
                     </div> -->
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago  image-anime reveal">
                                <img src="assets/images/Wardrobes.webp" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 valign  order-1 order-lg-2">
                <div class="exp-content nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">Elegance in Every Inch</h6>
                    <h2 class="mb-20 playfont">Modular Wardrobes</h2>
                    <p>
                        Your wardrobe should be more than storage — it should be a statement of your style.
                        LivSatva’s steel wardrobes combine luxury aesthetics with lifetime durability.

                    </p>
                    <p>Designed with precision engineering and finished with powder-coated elegance, our wardrobes
                        redefine modern minimalism.</p>
                    <a href="./modular-wardrobe.php" class="btn-curve btn-color mt-30">
                        <span>View More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about space2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 valign">
                <div class="exp-content text-right nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">Where Function Meets Fine Living.</h6>
                    <h2 class="mb-20 playfont">Modular Crockery Units</h2>
                    <p>
                        A well-designed crockery unit brings class to your dining experience.
                        LivSatva’s modular steel crockery units are the perfect blend of display, storage, and
                        sophistication.

                    </p>
                    <p>Whether you want a sleek wall-mounted unit or a full-length display cabinet, LivSatva designs add
                        a touch of modern luxury to every dining room.</p>
                    <a href="./modular-crockery.php" class="btn-curve btn-color mt-30">
                        <span>View More</span>
                    </a>
                    <!-- <a href="" class="a-btn-arrow-2" target="_self">
                        <span class="arrow-right"></span>
                        READ
                    </a> -->
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="assets/img/line-pattern.png"></div>
                        </div>
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago image-anime reveal">
                                <img src="assets/images/crockery.webp" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about space2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="assets/img/line-pattern.png"></div>
                        </div>
                        <!-- <div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
                     <div class="img mb-20 wow imago">
                         <img src="assets/images/partition.webp" alt="">
                     </div>
                     </div> -->
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago  image-anime reveal">
                                <img src="assets/img/products/partition3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 valign  order-1 order-lg-2">
                <div class="exp-content nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">Creating Spaces with Purpose and Style.</h6>
                    <h2 class="mb-20 playfont">Partitions</h2>
                    <p>
                        Modern homes deserve flexibility — and that’s exactly what our steel partitions offer.
                        Designed to divide spaces without blocking light or openness, LivSatva partitions add a
                        contemporary edge to your interiors.

                    </p>
                    <p>From living room dividers to office separators, each piece is crafted from durable, powder-coated
                        steel, ensuring it stays elegant, rust-free, and maintenance-free.</p>
                    <a href="./partitions.php" class="btn-curve btn-color mt-30">
                        <span>View More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about space2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 valign">
                <div class="exp-content text-lg-right text-left nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">Style Meets Functionality.</h6>
                    <h2 class="mb-20 playfont">TV Unit</h2>
                    <p>
                        Your living room deserves a centerpiece that’s as smart as it is stunning.
                        LivSatva’s steel TV units are designed to bring elegance, durability, and organization into your
                        entertainment space.

                    </p>
                    <p>Made entirely from premium stainless steel, our TV units combine sleek design with superior
                        functionality, ensuring they remain flawless for years — without fading, warping, or termite
                        damage.</p>
                    <a href="./tv-unit.php" class="btn-curve btn-color mt-30">
                        <span>View More</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="assets/img/line-pattern.png"></div>
                        </div>
                        <!-- <div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
                     <div class="img mb-20 wow imago">
                         <img src="assets/images/tv-unit.webp" alt="">
                     </div>
                     </div> -->
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago  image-anime reveal">
                                <img src="assets/img/products/tv3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="about space2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 valign">
                <div class="exp-content text-right nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">Professional Spaces, Designed to Inspire.</h6>
                    <h2 class="mb-20 playfont">Office Interiors</h2>
                    <p>
                        Your workspace should motivate productivity and reflect your brand’s personality.
                        LivSatva creates premium steel-based office interiors that are stylish, ergonomic, and built for
                        long-term performance.

                    </p>
                    <p>From executive cabins to open workstations, every design is customized to ensure comfort,
                        durability, and visual appeal — without the wear and tear that comes with traditional wooden
                        setups.</p>
                    <a href="./office.php" class="btn-curve btn-color mt-30">
                        <span>View More</span>
                    </a>
                    <!-- <a href="" class="a-btn-arrow-2" target="_self">
                        <span class="arrow-right"></span>
                        READ
                    </a> -->
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="assets/img/line-pattern.png"></div>
                        </div>
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago image-anime reveal">
                                <img src="assets/img/products/office8.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about space ">
    <div class="container">
        <div class="row">

            <div class="col-lg-7  order-2 order-lg-1">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="assets/img/line-pattern.png"></div>
                        </div>
                        <div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img mb-20 wow imago  image-anime reveal">
                                <img src="assets/img/products/other1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-7 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago  image-anime reveal">
                                <img src="assets/img/products/other5.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="years-exp">
                                <div class="exp-text">
                                    <h2 class="custom-font">21</h2>
                                    <h6>Years Of Experience</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 valign  order-1 order-lg-2">
                <div class="exp-content text-right nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">Other Interiors</h6>
                    <h2 class="mb-20 playfont">Beds & Vanity Units
                    </h2>
                    <p>
                        Our steel beds and vanity units combine aesthetic comfort with unmatched durability.
                        Unlike wood, steel furniture doesn’t warp, crack, or weaken with time — it stays beautiful for
                        decades.

                    </p>
                    <p></p>
                    <a href="./others.php" class="btn-curve btn-color mt-30">
                        <span>View More</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End about ==================== -->
<!-- ==================== Start works ==================== -->
<section class="portfolio full-bg d-none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 cluom current" data-tab="tab-1">
                <div class="info">
                    <h6 class="custom-font">Interior</h6>
                    <h5>Smart steel solutions that bring style and durability to your outdoors.</h5>
                </div>
                <div class="more">
                    <a href="./modular-kitchen.php">View Project <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cluom" data-tab="tab-2">
                <div class="info">
                    <h6 class="custom-font">Interior</h6>
                    <h5>Elegant, long-lasting interiors designed for luxury hospitality.</h5>
                </div>
                <div class="more">
                    <a href="./modular-wardrobe.php">View Project <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cluom" data-tab="tab-3">
                <div class="info">
                    <h6 class="custom-font">Interior</h6>
                    <h5> Modern modular steel designs for urban living.</h5>
                </div>
                <div class="more">
                    <a href="./modular-crockery.php">View Project <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cluom" data-tab="tab-4">
                <div class="info">
                    <h6 class="custom-font">Interior</h6>
                    <h5>Clean lines, durable finishes, and timeless elegance.</h5>
                </div>
                <div class="more">
                    <a href="./office.php">View Project <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="glry-img">
        <div id="tab-1" class="bg-img tab-img current" data-background="assets/images/kitchen_project.webp"
            data-overlay-dark="2"></div>
        <div id="tab-2" class="bg-img tab-img" data-background="assets/images/vanity-units.webp" data-overlay-dark="2">
        </div </div>
</section>
<!-- ==================== End works ==================== -->
<!-- ==================== Start process ==================== -->
<section class="process space2 bg-img bg-repeat" data-background="assets/images/bg-12.jpg">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="sub-title" data-wow-delay=".3s">How We Do It</h6>
                    <h2 class="playfont wow flipInX" data-wow-delay=".5s">Why Choose Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- 1 -->
            <div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".3s">
                <div class="item">
                    <div class="bg-img d-flex justify-content-center align-items-center"
                        data-background="assets/img/features/bg1.jpg">
                        <i class="bi bi-shield-check feature-icon"></i>
                    </div>
                    <div class="cont">
                        <h6 class="mb-10">Termite-Free</h6>
                        <p>100% resistant to termite damage.</p>
                    </div>
                </div>
            </div>




            <!-- 2 -->
            <div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".5s">
                <div class="item">
                    <div class="bg-img d-flex justify-content-center align-items-center"
                        data-background="assets/img/features/bg2.jpg">
                        <i class="bi bi-volume-mute feature-icon"></i>
                    </div>
                    <div class="cont">
                        <h6 class="mb-10">Noise-Free</h6>
                        <p>Smooth, silent operation every time.</p>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".4s">
                <div class="item">
                    <div class="bg-img d-flex justify-content-center align-items-center"
                        data-background="assets/img/features/bg3.jpg">
                        <i class="bi bi-tools feature-icon"></i>
                    </div>
                    <div class="cont">
                        <h6 class="mb-10">Zero Maintenance</h6>
                        <p>Durable materials with minimal upkeep.</p>
                    </div>
                </div>
            </div>

            <!-- 4 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="item">
                    <div class="bg-img d-flex justify-content-center align-items-center"
                        data-background="assets/img/features/bg4.jpg">
                        <i class="bi bi-recycle feature-icon"></i>
                    </div>
                    <div class="cont">
                        <h6 class="mb-10">Eco-Friendly</h6>
                        <p>Sustainable, safe, and environment-friendly.</p>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="item">
                    <div class="bg-img d-flex justify-content-center align-items-center"
                        data-background="assets/img/features/bg5.jpg">
                        <i class="bi bi-paint-bucket feature-icon"></i>
                    </div>
                    <div class="cont">
                        <h6 class="mb-10">Powder-Coated Finish</h6>
                        <p>Stylish, rust-proof, and long-lasting.</p>
                    </div>
                </div>
            </div>

            <!-- 6 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="item">
                    <div class="bg-img d-flex justify-content-center align-items-center"
                        data-background="assets/img/features/bg6.jpg">
                        <i class="bi bi-bricks feature-icon"></i>
                    </div>
                    <div class="cont">
                        <h6 class="mb-10">Durability</h6>
                        <p>Built with premium steel for strength.</p>
                    </div>
                </div>
            </div>

            <!-- 7 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                <div class="item">
                    <div class="bg-img d-flex justify-content-center align-items-center"
                        data-background="assets/img/features/bg7.jpg">
                        <i class="bi bi-sun feature-icon"></i>
                    </div>
                    <div class="cont">
                        <h6 class="mb-10">Weather Resistant</h6>
                        <p>Stands strong against moisture and climate changes.</p>
                    </div>
                </div>
            </div>

            <!-- 8 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1s">
                <div class="item">
                    <div class="bg-img d-flex justify-content-center align-items-center"
                        data-background="assets/img/features/bg8.jpg">
                        <i class="bi bi-lightning-charge feature-icon"></i>
                    </div>
                    <div class="cont">
                        <h6 class="mb-10">Energy Efficient</h6>
                        <p>Smart designs that support a greener lifestyle.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- ==================== End process ==================== -->
<!-- ==================== Start Team ==================== -->
<section class="team space2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tit">
                    <h6 class="custom-font mb-10 wow fadeInDown" data-wow-delay=".3s">Some Thoughts from Us</h6>
                    <h2 class="playfont wow flipInX" data-wow-delay=".5s">Our People, Our Pride</h2>
                    <p class="wow fadeInUp" data-wow-delay=".3s">

                        At Livsatva, our strength lies in our people. We are proud of our expert team members, whose
                        creativity, dedication, and skill transform every project into a masterpiece. Their passion
                        for
                        innovation and commitment to quality ensure that each interior we design is functional,
                        durable,
                        and visually stunning.
                    </p>
                    <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                        <span class="prev">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </span>
                        <span class="next">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="team-container">
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="assets/img/team/1.jpg" alt="" />
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Hasib sharif</h5>
                            <span>General Manager</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="assets/img/team/2.jpg" alt="" />
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Jonson Leo</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="assets/img/team/3.jpg" alt="" />
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Leio Man</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="assets/img/team/4.jpg" alt="" />
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Robert Front</h5>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="assets/img/team/5.jpg" alt="" />
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Legender Mao</h5>
                            <span>3D Visualization</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="assets/img/team/6.jpg" alt="" />
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Matt Huk</h5>
                            <span>3D Visualization</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dots-half bg-img bg-repeat" data-background="assets/img/dots.png"></div>
</section>
<!-- ==================== End Team ==================== -->
<!-- ==================== Start Testimonials ==================== -->
<section class="testimonials grid space2 bg-img parallaxie" data-background="assets/img/001.jpg" data-overlay-dark="9">
    <div class="container mb-50">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Testimonials</h6>
                    <h2 class="playfont wow flipInX" data-wow-delay=".5s">What Our Clients Say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testim wow fadeInUp" data-wow-delay=".3s">
                    <div class="item">
                        <span class="quote-icon"><img src="assets/img/clients/quote.svg" alt="" /></span>
                        <div class="cont">
                            <p class="playfont">"The metal interiors completely transformed my home. Durable, stylish,
                                and absolutely maintenance-free—highly recommend their team!"</p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="assets/img/clients/1.jpg" alt="" />
                            </div>
                            <h6>Ravi Kumar,
                                <span>Hyderabad</span>
                            </h6>
                        </div>
                    </div>
                    <div class="item">
                        <span class="quote-icon"><img src="assets/img/clients/quote.svg" alt="" /></span>
                        <div class="cont">
                            <p class="playfont">"
                                From design to installation, everything was seamless. The powder-coated finish gives a
                                premium look and I love the termite-free assurance.
                                "</p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="assets/img/clients/2.jpg" alt="" />
                            </div>
                            <h6>Anita Sharma, <span>Bangalore</span></h6>
                        </div>
                    </div>
                    <div class="item">
                        <span class="quote-icon"><img src="assets/img/clients/quote.svg" alt="" /></span>
                        <div class="cont">
                            <p class="playfont">"
                                A fantastic experience! The team understood my requirements perfectly and delivered
                                interiors that are modern, eco-friendly, and long-lasting.
                                "</p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="assets/img/clients/3.jpg" alt="" />
                            </div>
                            <h6>Suresh Reddy, <span>Visakhapatnam</span></h6>
                        </div>
                    </div>
                    <div class="item">
                        <span class="quote-icon"><img src="assets/img/clients/quote.svg" alt="" /></span>
                        <div class="cont">
                            <p class="playfont">"
                                I was amazed at how noise-free and durable the interiors are. Their stainless steel
                                solutions are practical and elegant.
                                "</p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="assets/img/clients/4.jpg" alt="" />
                            </div>
                            <h6>Priya Nair, <span>Chennai</span></h6>
                        </div>
                    </div>
                </div>
                <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                    <span class="prev">
                        <i class="fas fa-long-arrow-alt-left"></i>
                    </span>
                    <span class="next">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== End Testimonials ==================== -->
<!-- ==================== Start brands ==================== -->
<!-- <div class="brands bg-gray">
    <div class="container box-top wow fadeInUp" data-wow-delay=".3s">
        <div class="row">
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="assets/img/clients/brands/01.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="assets/img/clients/brands/02.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="assets/img/clients/brands/01.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="assets/img/clients/brands/02.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="assets/img/clients/brands/01.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="assets/img/clients/brands/02.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- ==================== End brands ==================== -->
<!-- ==================== Start Blog ==================== -->
<section class="blog-grid section-padding">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Latest News</h6>
                    <h2 class="playfont wow flipInX" data-wow-delay=".5s">Our Blogs</h4>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4">
                <div class="item wow fadeInUp md-mb50" data-wow-delay=".3s">
                    <div class="post-img">
                        <div class="img">
                            <img src="assets/img/blog/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="cont">
                        <div class="info">
                            <a href="#0">Alex Smith</a>
                            <a href="#0">Sep 10 2025</a>
                        </div>

                        <h5 class="playfont"><a href="#0">In Good Taste: Mark Finlay Architects and Interiors</a>
                        </h5>

                        <a href="#" class="more">
                            <span class="custom-font">Read More</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="item wow fadeInUp md-mb50" data-wow-delay=".1s">
                    <div class="post-img">
                        <div class="img">
                            <img src="assets/img/blog/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="cont">
                        <div class="info">
                            <a href="#0">Alex Smith</a>
                            <a href="#0">Sep 10 2025</a>
                        </div>

                        <h5 class="playfont"><a href="#0">Five Things You Should Know About Modern Furniture.</a>
                        </h5>

                        <a href="" class="more">
                            <span class="custom-font">Read More</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="item wow fadeInUp" data-wow-delay=".5s">
                    <div class="post-img">
                        <div class="img">
                            <img src="assets/img/blog/3.jpg" alt="">
                        </div>
                    </div>
                    <div class="cont">
                        <div class="info">
                            <a href="#0">Alex Smith</a>
                            <a href="#0">Sep 10 2025</a>
                        </div>

                        <h5 class="playfont"><a href="#0">What it's like to be an interior designer?</a></h5>

                        <a href="#" class="more">
                            <span class="custom-font">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Blog ==================== -->



<!-- ==================== Start contact ==================== -->

<section class="contact cont-map">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 contact-form wow fadeInDown" data-wow-delay=".3s">
                <!-- Contact Form -->
                <form id="contact-form" method="post" action="contact.php">
                    <div class="section-head">
                        <h6 class="custom-font">Contact Us</h6>
                        <h2 class="playfont cta_heading">Book Design Consultation
                        </h2>
                    </div>

                    <div class="messages"></div>

                    <div class="controls">

                        <!-- Name -->
                        <div class="form-group">
                            <div class="input-with-icon">
                                <i class="fas fa-user"></i>
                                <input id="form_name" type="text" name="name" placeholder="Name" required minlength="3"
                                    pattern="[A-Za-z\s]+" title="Name should contain only letters and spaces">
                            </div>
                        </div>

                        <!-- Mobile Number -->
                        <div class="form-group">
                            <div class="input-with-icon">
                                <i class="fas fa-phone"></i>
                                <input id="form_phone" type="tel" name="phone" placeholder="Mobile Number" required
                                    pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <div class="input-with-icon">
                                <i class="fas fa-envelope"></i>
                                <input id="form_email" type="email" name="email" placeholder="Email" required
                                    title="Enter a valid email address">
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="form-group">
                            <div class="input-with-icon">
                                <i class="fas fa-map-marker-alt"></i>
                                <input id="form_location" type="text" name="location" placeholder="Location" required
                                    minlength="2">
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <div class="input-with-icon">
                                <i class="fas fa-comment-dots" style="top: 20%;"></i>
                                <textarea id="form_message" name="message" placeholder="Message" rows="4" required
                                    minlength="5"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                    </div>
                </form>

                <!-- FontAwesome CDN -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


            </div>
        </div>
    </div>
    <div class="contact-map">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6888.934435656514!2d78.37838!3d17.447257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93ddd83b95a9%3A0x6199113a72f38d86!2sSBR%20Gateway!5e1!3m2!1sen!2sin!4v1757504194566!5m2!1sen!2sin"
                width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
    <div class="bg-img" data-background="assets/images/2.jpg"></div>
</section>

<!-- ==================== End contact ==================== -->

<!-- ==================== End Blog ==================== -->
<?php include './footer.php'; ?>