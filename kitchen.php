<?php include('./header.php') ?>

<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="img/portfolio/project1/bg.jpg" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Modular Kitchens In Steel</h1>
                    <div class="path">
                        <a href="<?php echo $base_url; ?>">Home</a><span>/</span><a href="#0" class="active">Modular Kitchens In Steel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->



<!-- ==================== Start Intro ==================== -->

<section class="intro-section section-padding">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-5 col-md-5">
                <div class="htit">
                    <h2>The Best Modular Kitchen Designs with a Wide Range of Customization Options!</h2>

                    <div class="text">
                        <p>When it comes to creating a kitchen that combines style, functionality, and durability, Livsatva Interiors’s modular kitchen designs are the perfect solution. At Livsatva Interiors, we take pride in providing the best modular kitchen designs that meet the unique needs of homeowners. Our designs are crafted to maximize space and ensure a seamless cooking experience, making your kitchen the heart of your home.</p>


                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-7">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="assets/img/line-pattern.png"></div>
                        </div>
                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago image-anime reveal">
                                <img src="assets/images/kit.webp" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==================== End Intro ==================== -->

<style>
    :root {
        --p: #01386e;
        /* primary brand */
        --s: #0092f9;
        /* secondary brand */
        --muted: #6b7280;
    }

    body {
        background: linear-gradient(180deg, #fbfdff 0%, #f3f7fb 100%);
        font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial
    }

    .hero {
        padding: 3rem 1rem 2rem
    }

    .badge-key {
        background: linear-gradient(90deg, var(--p), var(--s));
        color: #fff;
        font-weight: 600
    }

    /* Stepper */
    .stepper {
        background: #fff;
        border-radius: 18px;
        padding: 1.25rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05)
    }

    .steps {
        display: flex;
        gap: 0.5rem;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap
    }

    .step {
        flex: 1;
        position: relative;
        display: flex;
        align-items: flex-start;
        gap: 0.875rem;
        padding: 0.75rem;
        border-radius: 12px;
        cursor: pointer;
        transition: all .28s cubic-bezier(.2, .9, .3, 1);
        background: #f8fbff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .step-number {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: #fff;
        background: var(--p);
        flex-shrink: 0
    }

    .step:not(.active):hover {
        transform: translateY(-6px);
        box-shadow: 0 6px 18px rgba(14, 20, 42, 0.06)
    }

    .step .icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
        background: #fff;
        border: 1px solid #e6eef0;
        color: var(--p)
    }

    .step .content {
        flex: 1
    }

    .step .title {
        font-weight: 700;
        font-size: 0.98rem;
        color: var(--p)
    }

    .step .subtitle {
        font-size: 0.85rem;
        color: var(--muted)
    }

    .step.active {
        background: linear-gradient(45deg, rgba(1, 56, 110, 0.08), rgba(0, 146, 249, 0.06));
        box-shadow: 0 12px 30px rgba(14, 20, 42, 0.08)
    }

    .step.active .icon {
        background: linear-gradient(135deg, var(--p), var(--s));
        color: #fff;
        box-shadow: 0 6px 18px rgba(14, 20, 42, 0.12)
    }

    .step.active .step-number {
        background: var(--s)
    }

    /* connector line */
    .connector {
        position: absolute;
        left: 0;
        right: 0;
        top: 0%;
        transform: translateY(-50%);
        height: 6px;
        z-index: 0
    }

    .connector .track {
        height: 6px;
        background: #e6eef0;
        border-radius: 6px
    }

    .connector .progress {
        position: absolute;
        left: 0;
        top: 0;
        height: 6px;
        border-radius: 6px;
        background: linear-gradient(90deg, var(--p), var(--s));
        width: 0%;
        transition: width .5s ease
    }

    .steps .progress {
        position: absolute;
        top: 18px;
        /* adjust to your step icon alignment */
        left: 0;
        height: 4px;
        background: var(--s);
        /* your secondary brand color for filled */
        width: 20%;
        /* fill up to step 1 initially */
        transition: width 0.3s ease-in-out;
    }

    @media (max-width: 768px) {
        .steps {
            flex-direction: column
        }

        .connector {
            display: none
        }

        .step {
            align-items: center;
            width: 100%
        }
    }

    .detail-card {
        margin-top: 1.25rem;
        border-radius: 14px;
        padding: 1.25rem;
        box-shadow: 0 8px 30px rgba(14, 20, 42, 0.04);
        background: linear-gradient(180deg, #fff, #fbfdff)
    }

    .muted-note {
        font-size: .88rem;
        color: var(--muted)
    }

    .cta-form {
        margin-top: 2rem;
        padding: 1.5rem;
        border-radius: 14px;
        background: linear-gradient(180deg, #f8fbff, #fff);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05)
    }

    .cta-form h4 {
        color: var(--p);
        font-weight: 700
    }

    .text-gradient {}
</style>

<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class=" fw-bold text-gradient" style="background:linear-gradient(90deg,var(--p),var(--s)); -webkit-background-clip:text; color:transparent">Looking for Stainless Steel Modular Kitchen? Plan Your Kitchen with Livsatva Interiors!</h3>
                <p class="  ">There are a number of aspects to consider before you leap in: Space, Storage, Material — and many more. At Livsatva Interiors, we help you complete your dream kitchen with ease. You are just <strong>5 steps</strong> away from getting your home a dream kitchen from Livsatva Interiors.</p>

            </div>
        </div>

        <div class="stepper mt-4 position-relative">
            <div class="connector">
                <div class="track"></div>
                <div class="progress" id="progressBar"></div>
            </div>

            <div class="steps">
                <div class="step active" data-step="1">
                    <div class="step-number">1</div>
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="content">
                        <div class="title">Make An Enquiry</div>
                        <div class="subtitle">Enquire via website, WhatsApp, call or visit any outlet.</div>
                    </div>
                </div>

                <div class="step inactive" data-step="2">
                    <div class="step-number">2</div>
                    <div class="icon"><i class="fa-solid fa-house-user"></i></div>
                    <div class="content">
                        <div class="title">Home Visit</div>
                        <div class="subtitle">Our team performs site survey & measurements.</div>
                    </div>
                </div>

                <div class="step inactive" data-step="3">
                    <div class="step-number">3</div>
                    <div class="icon"><i class="fa-solid fa-pencil-ruler"></i></div>
                    <div class="content">
                        <div class="title">Designing</div>
                        <div class="subtitle">We plan layouts considering storage & your preferences.</div>
                    </div>
                </div>

                <div class="step inactive" data-step="4">
                    <div class="step-number">4</div>
                    <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                    <div class="content">
                        <div class="title">Customization</div>
                        <div class="subtitle">Budget adjustments and custom features are finalized.</div>
                    </div>
                </div>

                <div class="step inactive" data-step="5">
                    <div class="step-number">5</div>
                    <div class="icon"><i class="fa-solid fa-toolbox"></i></div>
                    <div class="content">
                        <div class="title">Installation & Follow-up</div>
                        <div class="subtitle">Installed within 30 days; follow-ups for support.</div>
                    </div>
                </div>
            </div>

            <div class="detail-card" id="detailCard">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h5 id="detailTitle">Make An Enquiry</h5>
                        <p class="muted-note mb-2" id="detailSubtitle">Enquire via our website, WhatsApp, call us or just walk in to any of our outlet.</p>
                        <p class="mb-0"><strong>Contact Livsatva Interiors engineers</strong></p>
                    </div>
                    <div class="text-end">
                        <div class="small text-muted">Step <span id="currentStep">1</span> of 5</div>
                        <div class="fw-bold fs-5" style="background:linear-gradient(90deg,var(--p),var(--s)); -webkit-background-clip:text; color:transparent">Ready?</div>
                        <!-- <a href="#" class="btn btn-primary btn-lg" style="background:var(--s); border:none">Make An Enquiry <i class="fa-solid fa-arrow-right ms-2"></i></a> -->

                    </div>
                </div>

                <div class="d-flex gap-2 mt-3">
                    <button id="prevBtn" class="btn btn-outline-secondary" disabled><i class="fa-solid fa-chevron-left me-1"></i> Prev</button>
                    <button id="nextBtn" class="btn btn-outline-secondary">Next <i class="fa-solid fa-chevron-right ms-1"></i></button>
                </div>
            </div>



            <div class="col-md-8 offset-2 text-center">
                <form id="contact-form" method="post" action="contact.php">
    <div class="section-head">
        <h6 class="custom-font">Contact Us</h6>
        <h2 class="playfont cta_heading">Book Design Consultation</h2>
    </div>

    <div class="messages"></div>

    <div class="controls">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <!-- Name -->
                <div class="form-group">
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
                        <input id="form_name" type="text" name="name" placeholder="Name" required minlength="3"
                            pattern="[A-Za-z\s]+" title="Name should contain only letters and spaces">
                    </div>
                </div>

            </div>
            <div class="col-md-6">

                <!-- Mobile Number -->
                <div class="form-group">
                    <div class="input-with-icon">
                        <i class="fas fa-phone"></i>
                        <input id="form_phone" type="tel" name="phone" placeholder="Mobile Number" required
                            pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number">
                    </div>
                </div>
            </div>
                <!-- Email -->
            <div class="col-md-6">

                <div class="form-group">
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input id="form_email" type="email" name="email" placeholder="Email" required
                            title="Enter a valid email address">
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-6">
                <!-- Location -->
                <div class="form-group">
                    <div class="input-with-icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <input id="form_location" type="text" name="location" placeholder="Location" required
                            minlength="2">
                    </div>
                </div>

            </div>

                <!-- Message -->
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-with-icon">
                        <i class="fas fa-comment-dots" style="top: 20%;"></i>
                        <textarea id="form_message" name="message" placeholder="Message" rows="4" required
                            minlength="5"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
            </div>
        </div>
    </div>
</form>

            </div>
        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const stepsData = {
        1: {
            title: 'Make An Enquiry',
            subtitle: 'Enquire via our website, WhatsApp, call us or just walk in to any of our outlet.',
            note: 'contact Livsatva Interiors engineers'
        },
        2: {
            title: 'Home Visit',
            subtitle: 'Our team of highly experienced professionals will make a visit to your home for site survey & measurements.',
            note: 'site survey & measurements'
        },
        3: {
            title: 'Designing',
            subtitle: 'Our team will understand design reservations, storage prerequisites and do need-based kitchen planning and designing.',
            note: 'stainless steel modular kitchen design'
        },
        4: {
            title: 'Customization',
            subtitle: 'We will work out the budget and adjustments for customization of your dream kitchen Lshapes.',
            note: 'customization & budget adjustments'
        },
        5: {
            title: 'Installation & Follow-up',
            subtitle: 'Your dream kitchen is installed within 30 days. Our support team will connect back for follow-ups after installation.',
            note: 'installation within 30 days'
        }
    };

    const steps = Array.from(document.querySelectorAll('.step'));
    const progress = document.getElementById('progressBar');
    const detailTitle = document.getElementById('detailTitle');
    const detailSubtitle = document.getElementById('detailSubtitle');
    const currentStepText = document.getElementById('currentStep');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let current = 1;

    function updateUI() {
        steps.forEach((el) => {
            const s = Number(el.dataset.step);
            el.classList.toggle('active', s === current);
            el.classList.toggle('inactive', s !== current);
        });
        const pct = ((current - 1) / (steps.length - 1)) * 100;
        progress.style.width = pct + '%';
        detailTitle.textContent = stepsData[current].title;
        detailSubtitle.textContent = stepsData[current].subtitle;
        currentStepText.textContent = current;
        prevBtn.disabled = current === 1;
        nextBtn.disabled = current === steps.length;
    }

    steps.forEach(s => s.addEventListener('click', () => {
        current = Number(s.dataset.step);
        updateUI();
    }));

    prevBtn.addEventListener('click', () => {
        if (current > 1) {
            current--;
            updateUI();
        }
    });
    nextBtn.addEventListener('click', () => {
        if (current < steps.length) {
            current++;
            updateUI();
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') {
            if (current < steps.length) {
                current++;
                updateUI();
            }
        }
        if (e.key === 'ArrowLeft') {
            if (current > 1) {
                current--;
                updateUI();
            }
        }
    });

    updateUI();
</script>




<section class="portfolio section-padding">
    <div class="container">
        <div class="row">

            <!-- filter links -->
            <div class="filtering text-center col-12">
                <div class="filter box">
                    <span data-filter='*' class="active">All</span>
                    <span data-filter='.Lshape'>L shape Kitchen</span>
                    <span data-filter='.ushape'>u shape Kitchen</span>
                    <span data-filter='.Linear '>Linear Kitchen</span>
                </div>
            </div>

            <!-- gallery -->
            <div class="gallery twsty inf-lit full-width">

                <!-- gallery item -->
                <div class="items ushape three-column mt-50">
                    <div class="item-img bg-img" data-background="assets/images/ushape.webp">
                        <div class="item-img-overlay">
                            <img alt="" src="assets/images/ushape.webp">
                        </div>
                    </div>
                    <div class="info mt-10">
                        <h5>Fantastic ushape</h5>
                        <span>ushape Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items ushape three-column mt-50">
                    <div class="item-img bg-img" data-background="assets/images/ushape2.webp">

                        <div class="item-img-overlay">
                            <img alt="" src="assets/images/ushape2.webp">
                        </div>
                    </div>
                    <div class="info mt-10">
                        <h5>Fantastic ushape</h5>
                        <span>ushape Design</span>
                    </div>
                </div>

                <div class="items ushape three-column mt-50">
                    <div class="item-img bg-img" data-background="assets/images/ushape3.webp">

                        <div class="item-img-overlay">
                            <img alt="" src="assets/images/ushape3.webp">
                        </div>
                    </div>
                    <div class="info mt-10">
                        <h5>Fantastic Lshape</h5>
                        <span>Lshape Design</span>
                    </div>
                </div>



                <!-- gallery item -->
                <div class="items Lshape three-column mt-50">
                    <div class="item-img bg-img" data-background="./assets/images/lshape1.webp">

                        <div class="item-img-overlay valign">
                            <img src="./assets/images/lshape1.webp" alt="">

                        </div>

                    </div>
                    <div class="info mt-10">
                        <h5>Choose Your Dream</h5>
                        <span>Architecture</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items Linear  three-column mt-50">
                    <div class="item-img bg-img" data-background="./assets/images/linear3.webp">
                        
                            <div class="item-img-overlay valign">
                                <img src="./assets/images/linear3.webp" alt="">
                            </div>
                        
                    </div>
                    <div class="info mt-10">
                        <h5>Luxury Villa</h5>
                        <span>Architecture</span>
                    </div>
                </div>

          
                <!-- gallery item -->
                <div class="items Lshape three-column mt-50">
                    <div class="item-img bg-img" data-background="./assets/images/lshape3.webp">

                        <div class="item-img-overlay valign">
                            <img src="./assets/images/lshape3.webp" alt="">
                        </div>

                    </div>
                    <div class="info mt-10">
                        <h5>Choose Your Dream</h5>
                        <span>Architecture</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items ushape three-column mt-50">
                    <div class="item-img bg-img" data-background="./assets/images/ushape4.webp">

                        <div class="item-img-overlay valign">
                            <img src="./assets/images/ushape4.webp" alt="">
                        </div>

                    </div>
                    <div class="info mt-10">
                        <h5>Fantastic Lshape</h5>
                        <span>Lshape Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items Lshape three-column mt-50">
                    <div class="item-img bg-img" data-background="./assets/images/lshape2.webp">

                        <div class="item-img-overlay valign">
                            <img src="./assets/images/lshape2.webp" alt="">
                        </div>

                    </div>
                    <div class="info mt-10">
                        <h5>Choose Your Dream</h5>
                        <span>Architecture</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items Linear  three-column mt-50">
                    <div class="item-img bg-img" data-background="./assets/images/linear1.webp">
                        <div class="item-img-overlay valign">
                            <img src="./assets/images/linear1.webp" alt="">
                        </div>
                    </div>
                    <div class="info mt-10">
                        <h5>Luxury Villa</h5>
                        <span>Architecture</span>
                    </div>
                </div>

      

                <!-- gallery item -->
                <div class="items Linear  three-column mt-50">
                    <div class="item-img bg-img" data-background="./assets/images/linear2.webp">
                        <div class="item-img-overlay valign">
                            <img src="./assets/images/linear2.webp" alt="">
                        </div>
                    </div>
                    <div class="info mt-10">
                        <h5>Luxury Villa</h5>
                        <span>Architecture</span>
                    </div>
                </div>



            </div>

        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="faq-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Frequently Asked Questions</h2>
      <p class="text-muted">Find quick answers to common questions about our modular kitchens.</p>
    </div>

    <div class="row">
      <!-- Column 1 -->
      <div class="col-md-6">
        <div class="accordion" id="faqLeft">
          <!-- FAQ Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq1-heading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                What is the purpose of steel in the kitchen?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1-heading" data-bs-parent="#faqLeft">
              <div class="accordion-body">
                Stainless steel’s exceptional corrosion resistance means that kitchens don’t have to worry about damage due to spills, steam, or food products. This resistance also benefits usage outside the kitchen.
              </div>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq2-heading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                Which steel is best for modular kitchen?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading" data-bs-parent="#faqLeft">
              <div class="accordion-body">
                304 stainless steel is the most common form of stainless steel used worldwide due to excellent corrosion resistance and durability. It’s easy to sanitize and ideal for kitchens.
              </div>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq3-heading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                How much do the kitchens cost?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading" data-bs-parent="#faqLeft">
              <div class="accordion-body">
                The price depends on size, material, accessories, and products used. Fill out the enquiry form to get a call back from our team.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Column 2 -->
      <div class="col-md-6">
        <div class="accordion" id="faqRight">
          <!-- FAQ Item 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq4-heading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                What warranty do you offer?
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading" data-bs-parent="#faqRight">
              <div class="accordion-body">
                We offer a 15-year warranty* (conditions apply) along with maintenance services to keep your kitchen in top condition.
              </div>
            </div>
          </div>

          <!-- FAQ Item 5 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq5-heading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                What kitchen shutter options are available?
              </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5-heading" data-bs-parent="#faqRight">
              <div class="accordion-body">
                We offer shutters in Stainless Steel, Galvanized Steel, Ceramic/Porcelain, Lacquered Glass, and more in a wide range of colors.
              </div>
            </div>
          </div>

          <!-- FAQ Item 6 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq6-heading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                How long does it take to make a kitchen?
              </button>
            </h2>
            <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq6-heading" data-bs-parent="#faqRight">
              <div class="accordion-body">
                Delivery is usually within 30–45 working days after order finalization and advance payment, depending on material and season.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- ==================== Start call-to-action ==================== -->

<section class="call-action nogif next">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content text-center">
                    <a href="project-details2.html">
                        <h6 class="wow" data-splitting="">Next Product</h6>
                        <h2 class="wow" data-splitting=""><b> Modular  </b> Wardrobe</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="nxt-img bg-img" data-background="img/portfolio/project1/bg.jpg"></div>
</section>

<!-- ==================== End call-to-action ==================== -->



<!-- 🔻 Lightbox Modal (put this near end of body) -->
<div id="lightbox" class="lightbox">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
</div>

<style>
    .faq-section .accordion-button {
  font-weight: 500;
  background-color: #fff;
  color: #01386e; /* brand primary color */
}
.faq-section .accordion-button:focus {
  box-shadow: none;
}
.faq-section .accordion-button:not(.collapsed) {
  background-color: #0092f9; /* brand secondary color */
  color: #fff;
}
.faq-section .accordion-body {
  background-color: #f8f9fa;
}


.accordion-item {
    margin: 30px 0px;
    box-shadow: 0 0 30px 0 rgb(0 0 0 / .12);
}
</style>

<!-- 🔻 CSS for Lightbox -->
<style>
    .lightbox {
        display: none;
        /* hidden by default */
        position: fixed;
        z-index: 9999;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.9);
    }

    .lightbox-content {
        margin: auto;
        display: block;
        max-width: 80%;
        max-height: 80%;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        border-radius: 10px;
    }

    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 35px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .lightbox-close:hover {
        color: #bbb;
    }
</style>
<!-- 🔻 Lightbox Modal (put this near end of body) -->
<div id="lightbox" class="lightbox">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
</div>

<!-- 🔻 JS to Open & Close Lightbox -->
<script>
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const closeBtn = document.querySelector('.lightbox-close');

    // Attach click event to all gallery images
    document.querySelectorAll('.item-img-overlay img').forEach(img => {
        img.addEventListener('click', () => {
            lightbox.style.display = 'block';
            lightboxImg.src = img.src; // show clicked image
        });
    });

    // Close modal when X clicked
    closeBtn.onclick = () => lightbox.style.display = 'none';

    // Close modal when clicking outside image
    lightbox.onclick = (e) => {
        if (e.target === lightbox) lightbox.style.display = 'none';
    }
</script>

<?php include('./footer.php') ?>