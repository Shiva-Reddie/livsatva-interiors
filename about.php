<?php include './header.php'; ?>

<style>
/* Glassmorphism + Luxury Gold Style */
.glass-card {
    background: rgb(255 255 255);
    border-radius: 5px;
    /* border: 1px solid rgba(255, 215, 0, 0.35); */
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    color: #fff;
    transition: all 0.5s ease;
    padding: 2rem;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
    position: relative;
    overflow: hidden;
    background-image: url(https://theme7x.com/inteshape/images/background/cross-line2.png);
}

/* Hover Glow Effect */
.glass-card:hover {
    transform: translateY(-5px) scale(1.02);
    /* box-shadow: 0 12px 30px rgba(255, 215, 0, 0.4), 0 0 20px rgba(0, 146, 249, 0.3);
    border: 1px solid #FFD700; */
}

/* Animated Icon */
.glass-card .icon i {
    color: var(--s);
    transition: all 0.4s ease;
    /* filter: drop-shadow(0 0 6px rgba(255, 215, 0, 0.6)); */
}

.glass-card:hover .icon i {
    color: var(--p);
    transform: scale(1.25) rotate(8deg);
    /* filter: drop-shadow(0 0 12px rgba(255, 215, 0, 0.8)); */
}

/* Headings */
.glass-card h4 {
    color: var(--p);
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 1rem;
    font-size: 24px;
}

/* Text */
.glass-card p {

    font-size: 14px;
    line-height: 1.7;
}

/* Section Title */
.mission-vision h2 {
    font-size: 2.2rem;
    letter-spacing: 1px;
    /* color: #000 !important; */
    /* text-transform: uppercase; */
    /* text-shadow: 0 0 10px rgba(255, 215, 0, 0.6); */
    margin-bottom: 20px;
}



.mission-vision p {
    color: #000;
}


/* Section Background */
.ourstory-section {
    /* background: #f9f9f9; */
    padding: 60px 20px;
    font-family: 'Poppins', sans-serif;
}

/* Flex Layout */
.ourstory-container {
    display: flex;
    gap: 40px;
    max-width: 1200px;
    margin: auto;
    flex-wrap: wrap;
}

/* Profile Card */
.ourstory-profile {
    flex: 1 1 30%;
    background: #fff;
    border-radius: 16px;
    text-align: center;
    padding: 30px 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.ourstory-profile:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(0, 146, 249, 0.2);
}

.ourstory-img {
    border-radius: 50%;
    border: 4px solid #0092f9;
    width: 180px;
    height: 180px;
    object-fit: cover;
    margin-bottom: 15px;
}

.ourstory-name {
    font-size: 20px;
    font-weight: 600;
    color: #01386e;
    margin: 10px 0 5px;
}

.ourstory-role {
    font-size: 14px;
    color: #777;
    margin-bottom: 20px;
}

/* Social Icons */
.ourstory-social a {
    margin: 0 8px;
    color: #0092f9;
    font-size: 16px;
    transition: all 0.3s ease;
}

.ourstory-social a:hover {
    color: #01386e;
    transform: scale(1.2);
}

/* Content Side */
.ourstory-content {
    flex: 1 1 65%;
}

.ourstory-title {
    font-size: 28px;
    font-weight: 700;
    color: #01386e;
    margin-bottom: 20px;
}

.ourstory-text {
    font-size: 16px;
    color: #555;
    line-height: 1.7;
    margin-bottom: 30px;
}

/* Story Items */
.ourstory-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.ourstory-item:hover {
    transform: translateX(8px);
}

.ourstory-icon {
    font-size: 24px;
    color: #0092f9;
    min-width: 40px;
}

.ourstory-item h5 {
    font-size: 18px;
    font-weight: 600;
    color: #01386e;
    margin-bottom: 5px;
}

.ourstory-item p {
    font-size: 15px;
    color: #666;
    margin: 0;
}

/* Responsive */
@media(max-width: 991px) {
    .ourstory-container {
        flex-direction: column;
    }

    .ourstory-profile,
    .ourstory-content {
        flex: 1 1 100%;
    }
}
</style>






<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="assets/img/pg1.jpg" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>About Us</h1>
                    <div class="path">
                        <a href="<?php echo $site_url; ?>">Home</a><span>/</span><a href="#0" class="active">About
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->



<!-- ==================== Start about ==================== -->

<section class="about section-padding space">
    <div class="container">
        <div class="row">
            <!-- Numbers / Achievements -->
            <div class="col-lg-6">
                <div class="numbers">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="item mb-50">
                                <h3><span class="nbr custom-font">350+</span></h3>
                                <h6>Projects Completed</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="item mb-50">
                                <h3><span class="nbr custom-font">500+</span></h3>
                                <h6>Satisfied Clients</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="item">
                                <h3><span class="nbr custom-font">10+</span></h3>
                                <h6>Years of Experience</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="item">
                                <h3><span class="nbr custom-font">15</span></h3>
                                <h6>Awards Won</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Content -->
            <div class="col-lg-6">
                <div class="txt-cont">
                    <h6 class="sub-title">About Us</h6>
                    <h2 class="mb-20 playfont">
                        About Livsatva Interiors
                    </h2>

                    <p class="mb-20">
                        At Livsatva Interiors, we believe every space has a story to tell. With a passion for design and
                        a commitment
                        to excellence, we transform houses into dream homes and workplaces into inspiring environments.
                    </p>
                    <p>
                        Our team blends creativity with functionality, ensuring each project reflects the unique
                        lifestyle and personality
                        of our clients. From concept and 3D visualization to execution and handover, we deliver timeless
                        designs,
                        uncompromising quality, and complete transparency. With hundreds of satisfied clients and
                        award-winning projects,
                        Livsatva Interiors continues to set new standards in the world of interior design.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End about ==================== -->

<!-- ==================== Start Mission & Vision ==================== -->
<section class="mission-vision py-5">
    <div class="container">
        <!-- <div class="text-center mb-5 text-white">
            <h2 class="fw-bold" style="color:#FFD700;">Our Philosophy</h2>
            <p class="opacity-75">Blending creativity and elegance to craft timeless interiors.</p>
        </div> -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-12 text-center">
                <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Our Mission & vision</h6>
                <h2 class="playfont wow flipInX" data-wow-delay=".5s">Our Philosophy</h2>
            </div>
        </div>

        <div class="row g-4">
            <!-- Mission -->
            <div class="col-lg-6 col-md-6">
                <div class="glass-card h-100 text-center p-4">
                    <div class="icon mb-3">
                        <i class="fas fa-bullseye fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Our Mission</h4>
                    <p>
                        To transform spaces into personalized experiences that reflect individuality,
                        comfort, and timeless design.
                    </p>
                </div>
            </div>

            <!-- Vision -->
            <div class="col-lg-6 col-md-6">
                <div class="glass-card h-100 text-center p-4">
                    <div class="icon mb-3">
                        <i class="fas fa-lightbulb fa-3x"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Our Vision</h4>
                    <p>
                        To be the most trusted name in interior design, delivering innovation and
                        excellence for every project we create.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== End Mission & Vision ==================== -->

<div class="numbers section-padding space d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <h3><span class="nbr custom-font">352</span></h3>
                    <h6>Projects Completed</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <h3><span class="nbr custom-font">567</span></h3>
                    <h6>Satisfied Clients</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <h3><span class="nbr custom-font">656</span><i>M</i></h3>
                    <h6>Monthly Revenue</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <h3><span class="nbr custom-font">17</span></h3>
                    <h6>Awards Won</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==================== Our Story Section ==================== -->
<section class="about ourstory-section">
    <div class="ourstory-container">

        <div class="row">
            <div class="col-lg-3">
                <!-- Left Side Profile -->
                <div class="ourstory-profile">
                    <img src="./assets/img/team/1.jpg" alt="Founder" class="ourstory-img">
                    <h4 class="ourstory-name">Shiva Raj</h4>
                    <p class="ourstory-role">Founder & Chief Designer</p>

                    <!-- Social Links -->
                    <div class="ourstory-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <!-- Right Side Content -->
                <div class="ourstory-content">
                    <h2 class="ourstory-title"></h2>
                    <h6 class="sub-title">Our Story</h6>
                    <h2 class="mb-20 playfont">
                        The Livsatva Interiors Story
                    </h2>

                    <p class="ourstory-text">
                        Livsatva Interiors was founded with a vision to combine creativity, elegance,
                        and comfort in every project. With years of experience, our journey has been
                        guided by passion for design and commitment to client satisfaction.
                    </p>

                    <div class="ourstory-item">
                        <div class="ourstory-icon"><i class="fas fa-building"></i></div>
                        <div>
                            <h5>How We Started</h5>
                            <p>From a small design studio to a trusted interior brand.</p>
                        </div>
                    </div>

                    <div class="ourstory-item">
                        <div class="ourstory-icon"><i class="fas fa-user-tie"></i></div>
                        <div>
                            <h5>Founders’ Vision</h5>
                            <p>To create spaces that tell stories and reflect individuality.</p>
                        </div>
                    </div>

                    <div class="ourstory-item">
                        <div class="ourstory-icon"><i class="fas fa-award"></i></div>
                        <div>
                            <h5>Passion & Experience</h5>
                            <p>Decades of design experience blended with creativity and innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
</section>
<!-- ==================== End Our Story ==================== -->



<!-- ==================== Start Skills / Our Expertise ==================== -->

<section class="skills-sec section-padding pt-80  space2 bg-img bg-repeat" data-background="assets/images/bg-12.jpg">
    <div class="container">

        <!-- Section Heading -->

        <div class="text-center mb-4">
            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Our Expertise</h6>
            <h2 class="playfont wow flipInX" data-wow-delay=".5s">What We Do Best</h2>
        </div>



        <div class="row">
            <!-- Left Side Skills -->
            <div class="col-lg-6 valign">
                <div class="skills-box full-width">
                    <div class="skill-item">
                        <h6>Architecture</h6>
                        <div class="skill-progress">
                            <div class="progres custom-font" data-value="90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6>Interior Design</h6>
                        <div class="skill-progress">
                            <div class="progres custom-font" data-value="75%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6>3D Modeling</h6>
                        <div class="skill-progress">
                            <div class="progres custom-font" data-value="80%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Content -->
            <div class="col-lg-6">
                <div class="content">
                    <p><b>
                            Providing Customized Design Solutions That Fit Every Space
                        </b>
                    </p>
                    <p class="mb-10">
                        At Livsatva Interiors, we believe every space deserves a unique identity.
                        Our team blends creativity with functionality to deliver timeless designs.
                    </p>
                    <p>
                        With expertise across architecture, interiors, and 3D visualization,
                        we ensure each project reflects innovation, elegance, and client aspirations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Skills / Our Expertise ==================== -->


<style>
.our-expertise-title {
    font-size: 32px;
    font-weight: 700;
    color: #01386e;
    margin-bottom: 10px;
}

.our-expertise-sub {
    font-size: 16px;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}
</style>








<!-- ==================== Start Team ==================== -->

<section class="team tmgrid section-padding">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font">Creative Minds</h6>
                    <h4 class="playfont">Our Employees</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="item col-lg-3 col-md-6">
                <div class="img">
                    <img src="assets/img/team/1.jpg" alt="">
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
            <div class="item col-lg-3 col-md-6">
                <div class="img">
                    <img src="assets/img/team/3.jpg" alt="">
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
            <div class="item col-lg-3 col-md-6">
                <div class="img">
                    <img src="assets/img/team/2.jpg" alt="">
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
            <div class="item col-lg-3 col-md-6">
                <div class="img">
                    <img src="assets/img/team/4.jpg" alt="">
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
        </div>
    </div>
</section>

<!-- ==================== End Team ==================== -->





<?php include './footer.php'; ?>