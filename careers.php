<?php include('./header.php') ?>

<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="./assets/images/contact-ban.webp"
    data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Careers at Our Company</h1>
                    <div class="path">
                        <a href="<?php echo $base_url; ?>">Home</a><span>/</span><a href="#0" class="active">Careers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->

<style>
/* Job Card */


.job-card .card-body {
    padding: 25px;
}

.apply-btn {
    background: #0092f9;
    border: none;
    border-radius: 50px;
    padding: 10px 25px;
    color: #fff;
    transition: 0.3s;
}

.apply-btn:hover {
    background: #01386e;
}

/* Modal */
.modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
}

.modal-header {
    border: none;
    background: #01386e;
    color: #fff;
    border-radius: 20px 20px 0 0;
}

.form-control {
    border-radius: 50px;
    padding-left: 40px;
}

.input-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #888;
}


li{

        padding: 5px 0px;
    font-size: 14px;
}
.form-group {
    position: relative;
    margin-bottom: 20px;
}

.submit-btn {
    background: #0092f9;
    border: none;
    border-radius: 50px;
    padding: 10px 25px;
    color: #fff;
    width: 100%;
}

.submit-btn:hover {
    background: #01386e;
}
</style>
<style>
/* Hero Section */
.careers-hero {
    background: linear-gradient(135deg, #01386e, #0092f9);
    color: #fff;
    padding: 100px 20px;
    text-align: center;
    border-radius: 0 0 50px 50px;
}

.careers-hero h1 {
    font-size: 3rem;
    font-weight: 700;
}

.careers-hero p {
    font-size: 1.2rem;
    opacity: 0.9;
}

/* Section Title */
.section-title {
    text-align: center;
    padding: 60px 0 30px;
}

.section-title h2 {
    font-weight: 700;
    color: #01386e;
}

/* Job Cards */
.job-card {
    border: none;
    border-radius: 20px;
    padding: 25px;
    margin-bottom: 25px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
        border: none;
    border-radius: 20px;
    padding: 25px;
    margin-bottom: 25px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    background-image: url(https://img.freepik.com/premium-photo/drawing-loft-office-interior-with-laptops-table-blank-brick-wall-workplace-lifestyle-concept-3d-rendering_670147-58398.jpg?w=1480);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    box-shadow: rgb(255 255 255 / 94%) 0 0 0 1000px inset;
}

.job-card:hover {
    transform: translateY(-8px);
    /* box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15); */
}

.job-card h5 {
    font-weight: 700;
    color: #01386e;
}

.job-card .badge {
    background: #0092f9;
}

.btn-apply {
    background: linear-gradient(135deg, #01386e, #0092f9);
    color: #fff;
    border-radius: 30px;
    padding: 10px 20px;
    font-weight: 600;
    transition: 0.3s;
}

.btn-apply:hover {
    opacity: 0.9;
    transform: scale(1.05);
}

/* Perks Section */
.perk {
    text-align: center;
    padding: 30px;
    border-radius: 20px;
    background: #fff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    transition: 0.3s;
}

.perk i {
    font-size: 2rem;
    color: #0092f9;
    margin-bottom: 15px;
}

.perk:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

/* Call to Action */
.cta-section {
    background: linear-gradient(135deg, #01386e, #0092f9);
    color: #fff;
    text-align: center;
    padding: 60px 20px;
    border-radius: 30px;

}

.cta-section h2 {
    font-weight: 700;
    margin-bottom: 20px;
    color: #fff;
}

.cta-section p {

    color: #fff;
}

.btn-cta {
    background: #fff;
    color: #01386e;
    font-weight: 600;
    border-radius: 30px;
    padding: 12px 28px;
    transition: 0.3s;
}

.btn-cta:hover {
    background: #0092f9;
    color: #fff;
}

h6{
    color: var(--p);
}

li i{
    color: #0091fa;
}
</style>
</head>

<body>



    <!-- Open Positions -->
    <section class="about">


        <div class="container">
            <div class="section-title">
                <h2><i class="fa-solid fa-briefcase me-2"></i> Open Positions</h2>
            </div>
            <div class="row">
                <!-- Job 1 -->
                <!-- <div class="col-md-12">
                    <div class="job-card">
                        <h5>Frontend Developer <span class="badge ms-2">Full-time</span></h5>
                        <p class="mt-2">We’re looking for a creative frontend developer with strong React & UI/UX
                            skills.
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li><i class="fa-solid fa-location-dot me-2"></i> Hyderabad, India</li>
                            <li><i class="fa-solid fa-clock me-2"></i> Experience: 2+ Years</li>
                        </ul>
                        <button class="btn btn-apply mt-3 " data-bs-toggle="modal" data-bs-target="#applyModal">Apply
                            Now</button>
                    </div>
                </div> -->

                <!-- Job 2 -->
                <div class="col-md-12">
                    <div class="job-card p-4">
                        <h5>
                            Interior Designer
                            <span class="badge bg-primary ms-2">Full-time</span>
                        </h5>
                        <p class="mt-2">Join our creative studio team to design sophisticated interior spaces for global
                            clients.</p>

                        <!-- Job Details -->
                                              <ul class="small mb-3">

                            <li><i class="fa-solid fa-location-dot me-2"></i> Remote / On-site</li>
                            <li><i class="fa-solid fa-clock me-2"></i> Experience: 3+ Years</li>
                            <li><i class="fa-solid fa-graduation-cap me-2"></i> Qualification: B.Des / M.Des /
                                Equivalent
                            </li>
                            <li><i class="fa-solid fa-swatchbook me-2"></i> Skills: AutoCAD, SketchUp, 3Ds Max,
                                Creativity
                            </li>
                        </ul>

                        <!-- Key Responsibilities -->
                        <h6 class="fw-bold">Responsibilities:</h6>
                        <ul class="small mb-3">
                            <li><i class="fas fa-lightbulb me-2"></i> Conceptualize and develop innovative interior designs.</li>
                            <li><i class="fas fa-handshake me-2"></i> Collaborate with clients to understand requirements and preferences.</li>
                            <li><i class="fas fa-palette me-2"></i> Prepare mood boards, 3D renders, and detailed layouts.</li>
                            <li><i class="fas fa-people-arrows me-2"></i> Work closely with vendors and contractors to ensure project success.</li>
                        </ul>

                        <!-- Perks -->
                        <h6 class="fw-bold">What We Offer:</h6>
                        <ul class="small mb-3">
                            <li><i class="fas fa-money-bill-wave me-2"></i> Competitive salary and performance bonuses.</li>
                            <li><i class="fas fa-rocket me-2"></i> Creative freedom and growth opportunities.</li>
                            <li><i class="fas fa-heart me-2"></i> Health & wellness benefits.</li>
                            <li><i class="fas fa-globe me-2"></i> Chance to work with global luxury projects.</li>
                        </ul>

                        <!-- Apply Button -->
                        <button class="btn btn-apply mt-2" data-bs-toggle="modal" data-bs-target="#applyModal">
                            <i class="fa-solid fa-paper-plane me-2"></i> Apply Now
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Perks & Benefits -->
    <section class="process space2 bg-img bg-repeat" data-background="assets/images/bg-12.jpg">
        <div class="container">
            <div class="section-title">
                <h2><i class="fa-solid fa-gift me-2"></i> Perks & Benefits</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="perk">
                        <i class="fa-solid fa-heart"></i>
                        <h6>Health Insurance</h6>
                        <p>Comprehensive medical coverage for you and your family.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="perk">
                        <i class="fa-solid fa-laptop-house"></i>
                        <h6>Flexible Work</h6>
                        <p>Hybrid and remote working options to suit your lifestyle.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="perk">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <h6>Learning Budget</h6>
                        <p>Annual budget for courses, certifications, and training.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to Action -->
    <section class="about py-5">
        <div class="container cta-section">
            <h2>Ready to Build Your Future with Us?</h2>
            <p>We’re always on the lookout for passionate and talented individuals.</p>
            <button class="btn btn-cta mt-3"><i class="fa-solid fa-envelope me-2"></i> Drop Your Resume</button>
        </div>
    </section>



    <!-- Modal Form -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa-solid fa-user-plus me-2"></i> Apply for this Position</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form id="applyForm">
                        <!-- Name -->
                        <div class="form-group">
                            <i class="fa-solid fa-user input-icon"></i>
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <i class="fa-solid fa-envelope input-icon"></i>
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <!-- Phone -->
                        <div class="form-group">
                            <i class="fa-solid fa-phone input-icon"></i>
                            <input type="tel" class="form-control" placeholder="Phone Number" pattern="[0-9]{10}"
                                required>
                        </div>
                        <!-- Resume -->
                        <div class="form-group">
                            <i class="fa-solid fa-file input-icon"></i>
                            <input type="file" class="form-control" required>
                        </div>
                        <button type="submit" class="submit-btn"><i class="fa-solid fa-check me-2"></i>Submit
                            Application</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script>
    // Basic validation feedback
    document.getElementById("applyForm").addEventListener("submit", function(e) {
        e.preventDefault();
        alert("✅ Application submitted successfully!");
        const modal = bootstrap.Modal.getInstance(document.getElementById("applyModal"));
        modal.hide();
    });
    </script>


    <!-- ==================== End about ==================== -->
    <?php include('./footer.php') ?>