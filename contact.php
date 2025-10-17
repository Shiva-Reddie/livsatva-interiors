<?php include './header.php'; ?>



<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="./assets/images/contact-ban.webp"
    data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Contact Us</h1>
                    <div class="path">
                        <a href="<?php echo $site_url; ?>">Home</a><span>/</span><a href="#0" class="active">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->



<!-- ==================== Start about ==================== -->





<section class="contact-info contact section ">
    <div class="info bg-gray space">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon pe-7s-phone"></span>
                        <div class="cont">
                            <h6 class="custom-font">Call Us</h6>
                            <p><a href="tel:+919492920955">+91 94929 20955</a></p>
                            <p><a href="tel:+919052611234">+91 90526 11234</a></p>
                            <p><a href="tel:+919912264824">+91 99122 64824</a></p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon pe-7s-mail-open"></span>
                        <div class="cont">
                            <h6 class="custom-font">Email Us</h6>
                            <p><a href="">info@livsatvainteriors.com</a></p>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <span class="icon pe-7s-map"></span>
                        <div class="cont">
                            <h6 class="custom-font">Address</h6>
                            <p> <a><b>Livsatva Interiors</b> <br>
                                    SBR Gateway, 4th floor, C9WH+W92, HUDA Techno Enclave, HITEC City, Hyderabad,
                                    Telangana
                                    -
                                    500081.
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- ==================== Start Luxury Contact Form ==================== -->
<section class="luxury-contact bg-gray">
    <div class="container">
        <div class="big-title">Livsatva Interiors</div>
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="luxury-form text-center">
                    <h2 class="form-title">Let’s talk about your project </h2>
                    <p class="form-sub">Beyond more stoic this along goodness hey this this wow manatee mongoose one far
                        flustered impressive manifest far crud opened inside owing punitively around for after wasteful
                        telling.</p>

                    <form class="form-sec mt-4">
                        <div class="controls">
                            <div class="row">
                                <!-- Left Column -->
                                <div class="col-md-6">
                                    <!-- Name -->
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="fas fa-user"></i>
                                            <input id="form_name" type="text" name="name" placeholder="Name" required
                                                minlength="3" pattern="[A-Za-z\s]+"
                                                title="Name should contain only letters and spaces">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <!-- Mobile Number -->
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="fas fa-phone"></i>
                                            <input id="form_phone" type="tel" name="phone" placeholder="Mobile Number"
                                                required pattern="[0-9]{10}"
                                                title="Please enter a valid 10-digit mobile number">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <!-- Email -->
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="fas fa-envelope"></i>
                                            <input id="form_email" type="email" name="email" placeholder="Email"
                                                required title="Enter a valid email address">
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class="col-md-6">
                                    <!-- Location -->
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <input id="form_location" type="text" name="location" placeholder="Location"
                                                required minlength="2">
                                        </div>

                                    </div>
                                </div>

                                <!-- Message -->
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <i class="fas fa-comment-dots" style="top: 20%;"></i>
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                                required minlength="5"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="social-box">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-x-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
    </div>
</section>
<!-- ==================== End Luxury Contact Form ==================== -->





<!-- ==================== End about ==================== -->
<?php include './footer.php'; ?>