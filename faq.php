<?php include('./header.php') ?>

    <!-- ==================== Start Header ==================== -->

    <header class="pages-header bg-img valign parallaxie" data-background="./assets/images/contact-ban.webp" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>Frequently Asked Questions</h1>
                        <div class="path">
                              <a href="<?php echo $base_url; ?>">Home</a><span>/</span><a href="#0" class="active">Frequently </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Header ==================== -->

    <!-- ==================== Start Contact ==================== -->

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    .faq-header {
      background: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&q=80&w=1600') center/cover no-repeat;
      color: #fff;
      padding: 80px 20px;
      text-align: center;
    }
    .faq-header h1 {
      font-size: 2.5rem;
      font-weight: 700;
    }
    .accordion-button:not(.collapsed) {
      color: #fff;
      background-color: #6c757d;
    }
    .accordion-button:focus {
      box-shadow: none;
    }
  </style>
</head>
<body>



  <!-- FAQ Section -->
  <section class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion">

          <!-- Q1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                What interior design services do you offer?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We offer complete interior design solutions including residential, commercial, and office spaces. From concept development to furniture selection, lighting, and décor, we take care of everything.
              </div>
            </div>
          </div>

          <!-- Q2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                How long does an interior design project usually take?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Project timelines depend on the scale and complexity. Typically, a home design project can take anywhere from 4 to 12 weeks, including planning, approvals, and execution.
              </div>
            </div>
          </div>

          <!-- Q3 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Do you provide customized designs?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Absolutely! We create tailor-made designs based on your lifestyle, preferences, and budget. Each project is unique and designed to reflect your personality.
              </div>
            </div>
          </div>

          <!-- Q4 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                What is the cost of hiring an interior designer?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                The cost varies depending on the scope of the project, size of the space, and materials chosen. We offer flexible packages and transparent pricing after an initial consultation.
              </div>
            </div>
          </div>

          <!-- Q5 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Do you handle project execution as well?
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="faqFive" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes, we not only design but also manage the entire execution process. Our team coordinates with contractors, vendors, and suppliers to ensure smooth delivery.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap 5.3.2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <!-- ==================== End about ==================== -->
<?php include('./footer.php') ?>
