

    <?php include('./header.php') ?>

    <header class="pages-header work-header bg-img valign" data-background="assets/img/009.png" data-overlay-light="9">
        <div class="container">
            <div class="section-head text-center mb-0">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-11">
                        <h6 class="custom-font">Our Portfolio</h6>
                        <h4 class="playfont">Super Prime lighting Design and Consultancy</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start works ==================== -->
<!-- Include Fancybox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

<section class="portfolio section-padding">
  <div class="container">
    <div class="row">

      <!-- filter links -->
      <div class="filtering text-center col-12">
        <div class="filter box">
          <span data-filter='*' class="active">All</span>
          <span data-filter='.interior'>Interior</span>
          <span data-filter='.theaters'>Theaters</span>
          <span data-filter='.residential'>Residential</span>
        </div>
      </div>

      <!-- gallery -->
      <div class="gallery twsty inf-lit full-width">

        <!-- gallery item -->
        <div class="items theaters three-column mt-50">
          <a data-fancybox="portfolio" data-caption="Fantastic Interior" href="assets/img/portfolio/mas/01.jpg">
            <div class="item-img bg-img" data-background="assets/img/portfolio/mas/01.jpg">
              <div class="item-img-overlay"></div>
            </div>
          </a>
          <div class="info mt-10">
            <h5>Fantastic interior</h5>
            <span>Interior Design</span>
          </div>
        </div>

        <!-- gallery item -->
        <div class="items theaters three-column mt-50">
          <a data-fancybox="portfolio" data-caption="Fantastic Interior" href="assets/img/portfolio/mas/02.jpg">
            <div class="item-img bg-img" data-background="assets/img/portfolio/mas/02.jpg">
              <div class="item-img-overlay"></div>
            </div>
          </a>
          <div class="info mt-10">
            <h5>Fantastic interior</h5>
            <span>Interior Design</span>
          </div>
        </div>

        <!-- gallery item -->
        <div class="items interior three-column mt-50">
          <a data-fancybox="portfolio" data-caption="Choose Your Dream" href="assets/img/portfolio/mas/03.jpg">
            <div class="item-img bg-img" data-background="assets/img/portfolio/mas/03.jpg">
              <div class="item-img-overlay valign"></div>
            </div>
          </a>
          <div class="info mt-10">
            <h5>Choose Your Dream</h5>
            <span>Architecture</span>
          </div>
        </div>

        <!-- gallery item -->
        <div class="items residential three-column mt-50">
          <a data-fancybox="portfolio" data-caption="Luxury Villa" href="assets/img/portfolio/mas/04.jpg">
            <div class="item-img bg-img" data-background="assets/img/portfolio/mas/04.jpg">
              <div class="item-img-overlay valign"></div>
            </div>
          </a>
          <div class="info mt-10">
            <h5>Luxury Villa</h5>
            <span>Architecture</span>
          </div>
        </div>

        <!-- gallery item -->
        <div class="items interior theaters three-column mt-50">
          <a data-fancybox="portfolio" data-caption="Creative Spaces" href="assets/img/portfolio/mas/05.jpg">
            <div class="item-img bg-img" data-background="assets/img/portfolio/mas/05.jpg">
              <div class="item-img-overlay valign"></div>
            </div>
          </a>
          <div class="info mt-10">
            <h5>Creative Spaces</h5>
            <span>Interior Design</span>
          </div>
        </div>

        <!-- gallery item -->
        <div class="items interior three-column mt-50">
          <a data-fancybox="portfolio" data-caption="Choose Your Dream" href="assets/img/portfolio/mas/06.jpg">
            <div class="item-img bg-img" data-background="assets/img/portfolio/mas/06.jpg">
              <div class="item-img-overlay valign"></div>
            </div>
          </a>
          <div class="info mt-10">
            <h5>Choose Your Dream</h5>
            <span>Architecture</span>
          </div>
        </div>

        <!-- gallery item -->
        <div class="items theaters three-column mt-50">
          <a data-fancybox="portfolio" data-caption="Fantastic Interior" href="assets/img/portfolio/mas/07.jpg">
            <div class="item-img bg-img" data-background="assets/img/portfolio/mas/07.jpg">
              <div class="item-img-overlay"></div>
            </div>
          </a>
          <div class="info mt-10">
            <h5>Fantastic interior</h5>
            <span>Interior Design</span>
          </div>
        </div>

        <!-- gallery item -->
        <div class="items interior three-column mt-50">
          <a data-fancybox="portfolio" data-caption="Choose Your Dream" href="assets/img/portfolio/mas/08.jpg">
            <div class="item-img bg-img" data-background="assets/img/portfolio/mas/08.jpg">
              <div class="item-img-overlay valign"></div>
            </div>
          </a>
          <div class="info mt-10">
            <h5>Choose Your Dream</h5>
            <span>Architecture</span>
          </div>
        </div>

        <!-- gallery item -->
        <div class="items residential three-column mt-50">
          <a data-fancybox="portfolio" data-caption="Luxury Villa" href="assets/img/portfolio/mas/09.jpg">
            <div class="item-img bg-img" data-background="assets/img/portfolio/mas/09.jpg">
              <div class="item-img-overlay valign"></div>
            </div>
          </a>
          <div class="info mt-10">
            <h5>Luxury Villa</h5>
            <span>Architecture</span>
          </div>
        </div>

        <!-- Repeat for other images similarly... -->

      </div>

    </div>
  </div>
</section>

<!-- Include Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<!-- Set background images dynamically -->
<script>
  document.querySelectorAll('[data-background]').forEach(el => {
    el.style.backgroundImage = `url(${el.getAttribute('data-background')})`;
  });
</script>

    <!-- ==================== End works ==================== -->



    <!-- ==================== Start Footer ==================== -->
    <?php include('./footer.php') ?>
    