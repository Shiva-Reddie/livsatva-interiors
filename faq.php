<?php include('./header.php') ?>

<style>
:root {
    --deep-blue: #01386e;
    --sky-blue: #0092f9;
    --muted: #6c757d;
    --card-bg: #ffffff;
    --glass: rgba(255, 255, 255, 0.06);
}



.faq-hero {
    padding: 48px 0;
}

.faq-card {
    border: 0;
    border-radius: 16px;
    box-shadow: 0 8px 28px rgba(1, 56, 110, 0.08);
    overflow: hidden;
}

/* Left column (visual) */
.faq-visual {
    background: linear-gradient(135deg, var(--deep-blue) 0%, var(--sky-blue) 100%);
    color: #fff;
    padding: 36px;
    min-height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
}

.faq-visual h2 {
    font-weight: 700;
    letter-spacing: -0.02em;
    margin-bottom: 8px;
    font-size: 1.9rem;
    color: #fff;
}

.faq-visual p.lead {
    color: rgba(255, 255, 255, 0.92);
    margin-bottom: 18px;
}

.faq-model {
    width: 100%;
    border-radius: 12px;
    box-shadow: 0 12px 30px rgba(1, 56, 110, 0.25);
    border: 6px solid rgba(255, 255, 255, 0.06);
}

/* Right column (faq controls) */
.faq-controls {
    padding: 28px;
}

.chip {
    display: inline-flex;
    gap: .45rem;
    align-items: center;
    padding: 6px 12px;
    border-radius: 999px;
    font-size: .86rem;
    margin: 4px;
    cursor: pointer;
    background: linear-gradient(90deg, rgba(1, 56, 110, 0.06), rgba(0, 146, 249, 0.04));
    border: 1px solid rgba(1, 56, 110, 0.06);
}

.chip.active {
    background: linear-gradient(90deg, var(--deep-blue), var(--sky-blue));
    color: #fff;
    box-shadow: 0 6px 18px rgba(0, 146, 249, 0.14);
    border: 0;
}

.search-input {
    border-radius: 12px;
    box-shadow: none !important;
    border: 1px solid rgba(1, 56, 110, 0.08);
    padding-left: 14px;
}

.accordion-button {
      border-radius: 5px;
    /* margin-bottom: 15px; */
    background: linear-gradient(180deg, #fff, #fbfbff);
    /* border: 1px solid #ececec; */
    color: var(--deep-blue);
    font-weight: 600;
    padding: .9rem 1.1rem;
}

.accordion-body {
    color: var(--muted);
    padding: 1rem 1.1rem;
    background: #fff;
    border-radius: 10px;
    /* border: 1px solid var(--deep-blue); */
    margin-bottom: 20px;
}

.highlight {
    background: linear-gradient(90deg, rgb(0 146 249), rgba(1, 56, 110, 0.04));
    padding: 6px 10px;
    border-radius: 8px;
    font-weight: 600;
    display: inline-flex;
    gap: .6rem;
    align-items: center;
    color: #fff;
}

.faq-visual img {
    width: 100%;
}


.faq-item {
       margin-bottom: 20px !important;
    box-shadow: 1px 1px 4px 0px #0000002b;
    border-radius: 10px;
}
/* small screens tweak */
@media (max-width: 991.98px) {
    .faq-visual {
        align-items: center;
        text-align: center;
        padding: 28px;
    }

    .faq-visual h2 {
        font-size: 1.6rem;
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
                    <h1>Frequently Asked Questions</h1>
                    <div class="path">
                        <a href="<?php echo $base_url; ?>">Home</a><span>/</span><a href="#0" class="active">Frequently
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->

<!-- ==================== Start Contact ==================== -->






<section class="faq-hero">
    <div class="container">
        <div class="card faq-card">
            <div class="row g-0">
                <!-- Left: Visual / model -->
           

                <!-- Right: FAQ content -->
                <div class="col-lg-12">
                    <div class="faq-controls bg-light p-4">
                        <div class=" mb-3">
                            <div class="text-center">
                                <h2 class="mb-0" style="color:var(--deep-blue)">Frequently Asked Questions</h2>
                                <small class="text-muted">Quick answers to common queries</small>
                            </div>
                      
                        </div>



                        <!-- category chips -->
                        <div class="mb-50 text-center" id="categoryChips">
                            <span class="chip active" data-cat="all"><i class="fa-solid fa-list-check"></i>
                                All</span>
                            <span class="chip" data-cat="pricing">Kitchen</span>
                            <span class="chip" data-cat="process">Wardrobe</span>
                            <span class="chip" data-cat="timeline">Crokery</span>
                            <span class="chip" data-cat="warranty">Living </span>
                            <span class="chip" data-cat="custom">Tv unit</span>
                        </div>

                        <!-- accordion -->
                        <div class="accordion" id="faqAccordion">

                            <!-- FAQ item 1 -->
                            <div class=" faq-item" data-categories="process timeline">
                                <h2 class="accordion-header" id="faqHeading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapse1" aria-expanded="false"
                                        aria-controls="faqCollapse1">
                                        What is your design process from consultation to handover?
                                    </button>
                                </h2>
                                <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Our process starts with a free consultation (on-site or virtual). We then
                                        create concept designs and 3D visualisations, finalize materials and
                                        finishes, agree on a contract and timeline, and proceed to execution with
                                        regular progress updates until handover.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ item 2 -->
                            <div class=" faq-item" data-categories="pricing custom">
                                <h2 class="accordion-header" id="faqHeading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapse2" aria-expanded="false"
                                        aria-controls="faqCollapse2">
                                        How do you price an interior project?
                                    </button>
                                </h2>
                                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Pricing depends on scope: area (sq ft), materials, custom cabinetry, MEP
                                        changes, and finishes. We provide a transparent estimate and can break down
                                        costs by civil, carpentry, electrical, and furnishings.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ item 3 -->
                            <div class=" faq-item" data-categories="timeline">
                                <h2 class="accordion-header" id="faqHeading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapse3" aria-expanded="false"
                                        aria-controls="faqCollapse3">
                                        Typical project timeline — how long will my project take?
                                    </button>
                                </h2>
                                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        A simple refresh (painting + minor works) can take 2–4 weeks. A full
                                        renovation with structural changes typically ranges from 8–16 weeks
                                        depending on scale, approvals and site conditions.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ item 4 -->
                            <div class=" faq-item" data-categories="warranty">
                                <h2 class="accordion-header" id="faqHeading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapse4" aria-expanded="false"
                                        aria-controls="faqCollapse4">
                                        Do you provide warranty and after-sales support?
                                    </button>
                                </h2>
                                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes — we offer warranty on workmanship and selected fittings. Typical
                                        coverage: 6–12 months for workmanship; manufacturer warranties apply for
                                        supplied appliances/fixtures. After-sales support is available via
                                        phone/email.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ item 5 -->
                            <div class=" faq-item" data-categories="custom pricing">
                                <h2 class="accordion-header" id="faqHeading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapse5" aria-expanded="false"
                                        aria-controls="faqCollapse5">
                                        Can I customize materials or request bespoke furniture?
                                    </button>
                                </h2>
                                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Absolutely. We design and manufacture bespoke furniture and can source
                                        bespoke finishes. Customization will affect timelines and cost — we provide
                                        clear options during design stage.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ item 6 -->
                            <div class=" faq-item" data-categories="process pricing">
                                <h2 class="accordion-header" id="faqHeading6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapse6" aria-expanded="false"
                                        aria-controls="faqCollapse6">
                                        How do you handle site visits, approvals, and project supervision?
                                    </button>
                                </h2>
                                <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We schedule periodic site visits during execution, coordinate necessary
                                        municipal approvals, and assign a project manager who supervises daily
                                        activity and reports weekly to the client.
                                    </div>
                                </div>
                            </div>

                        </div> <!-- /accordion -->

                        <!-- fallback contact -->
                        <!-- <div class="mt-3">
                            <small class="text-muted">Didn't find your question? <a
                                    href="mailto:info@livsatva.com">Email us</a> or call <strong>+91 98765
                                    43210</strong></small>
                        </div> -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS (bundle includes Popper) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->

<script>
// category chip filter
document.querySelectorAll('#categoryChips .chip').forEach(chip => {
    chip.addEventListener('click', () => {
        document.querySelectorAll('#categoryChips .chip').forEach(c => c.classList.remove(
            'active'));
        chip.classList.add('active');
        const cat = chip.getAttribute('data-cat');

        document.querySelectorAll('.faq-item').forEach(item => {
            const cats = item.getAttribute('data-categories').split(' ');
            if (cat === 'all' || cats.includes(cat)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});
</script>




<!-- ==================== End about ==================== -->
<?php include('./footer.php') ?>