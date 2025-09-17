<?php include('./header.php') ?>

<style>
/* Contact Section */
.contact-info-section {
    padding: 50px 0;

}

.contact-info-section .contact-card {
    background: #fff;
    border-radius: 15px;
    padding: 20px;
    min-height: 250px;
    text-align: center;
    transition: all 0.4s ease;
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    position: relative;
    overflow: hidden;
}

.contact-info-section .contact-card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.15);
    background: linear-gradient(135deg, #01386e, #0092f9);
    color: #fff;
}

.contact-info-section .contact-card .icon {
    font-size: 40px;
    color: #0092f9;
    margin-bottom: 20px;
    display: inline-block;
    transition: color 0.3s ease;
}

.contact-info-section .contact-card:hover .icon {
    color: #fff;
}

.contact-info-section .contact-card h6 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 15px;
    color: #01386e;
    transition: color 0.3s ease;
}

.contact-info-section .contact-card p,
.contact-info-section .contact-card a {
    font-size: 15px;
    line-height: 1.6;
    color: #555;
    margin: 0;
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-info-section .contact-card:hover h6,
.contact-info-section .contact-card:hover p,
.contact-info-section .contact-card:hover a {
    color: #fff;
}

.luxury-contact {
    padding: 70px 20px;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #01386e, #0092f9);
}

.luxury-container {
    display: flex;
    gap: 40px;
    max-width: 1200px;
    margin: auto;
    border-radius: 20px;
    overflow: hidden;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(12px);
    box-shadow: 0 8px 35px rgba(0, 0, 0, 0.3);
}

.luxury-image {
    flex: 1 1 45%;
}

.luxury-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.luxury-form {
    flex: 1 1 55%;
    padding: 40px;
    color: #fff;
}

.form-title {
    font-size: 30px;
    font-weight: 700;
    color: #FFD700;
    /* Gold Accent */
    margin-bottom: 10px;
}

.form-sub {
    font-size: 15px;
    color: #e0e0e0;
    margin-bottom: 30px;
}

.form-group {
    position: relative;
    margin-bottom: 20px;
}

.form-group i {
    position: absolute;
    top: 50%;
    left: 15px;
    color: #FFD700;
    font-size: 16px;
    transform: translateY(-50%);
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 6px 15px 6px 45px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 10px;
    font-size: 15px;
    outline: none;
    background: rgba(255, 255, 255, 0.15);
    color: #fff;
    transition: all 0.3s ease;
}

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: #ddd;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #FFD700;
    box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.2);
}

.form-group.textarea textarea {
    height: 120px;
    resize: none;
}

.luxury-btn {
    background: linear-gradient(135deg, #FFD700, #ffb400);
    color: #01386e;
    border: none;
    padding: 14px 25px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    letter-spacing: 0.5px;
}

.luxury-btn:hover {
    background: linear-gradient(135deg, #ffb400, #FFD700);
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(255, 215, 0, 0.4);
}

/* Responsive */
@media(max-width: 991px) {
    .luxury-container {
        flex-direction: column;
    }

    .luxury-image {
        height: 250px;
    }
}
</style>

<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="./assets/images/contact-ban.webp"
    data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Contact Us</h1>
                    <div class="path">
                        <a href="#0">Home</a><span>/</span><a href="#0" class="active">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->



<!-- ==================== Start about ==================== -->





<section class="contact-info-section">
    <div class="container">
        <div class="row">
            <!-- Phone -->
            <div class="col-lg-4 col-md-6">
                <div class="contact-card">
                    <span class="icon"><i class="fas fa-phone-alt"></i></span>
                    <div class="cont">
                        <h6>Call Us</h6>
                        <p><a href="tel:+919492920954">+91 94929 20954</a></p>
                        <p><a href="tel:+919492920955">+91 94929 20955</a></p>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="col-lg-4 col-md-6">
                <div class="contact-card">
                    <span class="icon"><i class="fas fa-envelope-open-text"></i></span>
                    <div class="cont">
                        <h6>Email Us</h6>
                        <p><a href="mailto:info@livsatvainteriors.com">info@livsatvainteriors.com</a></p>
                    </div>
                </div>
            </div>

            <!-- Address -->
            <div class="col-lg-4 col-md-12">
                <div class="contact-card">
                    <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                    <div class="cont">
                        <h6>Livsatva Interiors</h6>
                        <p>
                            SBR Gateway, 4th floor, C9WH+W92, HUDA Techno Enclave, HITEC City, Hyderabad, Telangana -
                            500081.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- ==================== Start Luxury Contact Form ==================== -->
<section class="luxury-contact">
    <div class="luxury-container">

        <!-- Left Side Image -->
        <div class="luxury-image">
            <img src="./assets/img/contact-us.png" alt="Contact Livsatva">
        </div>

        <!-- Right Side Form -->
        <div class="luxury-form">
            <h2 class="form-title">Get in Touch</h2>
            <p class="form-sub">Your dream interiors are just one step away. Fill the form & let’s design elegance
                together.</p>

            <form>
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-phone-alt"></i>
                    <input type="tel" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-tag"></i>
                    <input type="text" placeholder="Subject" required>
                </div>
                <div class="form-group textarea">
                    <i class="fas fa-comment-dots"></i>
                    <textarea placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="luxury-btn">Send Message</button>
            </form>
        </div>
    </div>
</section>
<!-- ==================== End Luxury Contact Form ==================== -->





<!-- ==================== End about ==================== -->
<?php include('./footer.php') ?>