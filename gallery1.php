

    <?php include('./header.php') ?>



  <!-- fancybox -->
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css'>
  <!-- magnific-popup -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

    <style>
            Gallery Section
--------------------------------------*/
.portfolio-section {
  padding: 50px 0;
  background-color: #000;
}
.portfolio-section h2 {
  font-size: 28px;
  font-weight: 600;
  color: #fff;
  text-transform: uppercase;
}
.portfolio-menu {
  text-align: center;
}
.control {
  background: #000;
  color: #fff;
  padding: 5px 10px;
  border: 1px solid #343a40;
  border-radius: 3px;
  margin: 5px;
  cursor: pointer;
  -webkit-transition: all 05s ease;
  -moz-transition: all 05s ease;
  -ms-transition: all 05s ease;
  -o-transition: all 05s ease;
  transition: all 0.5s ease;
}
.control:hover {
  background: #343a40;
}
.mix items itup-control-active {
  color: #fff;
  background: #343a40;
}
.fancybox-container button:focus {
  outline: 0;
  box-shadow: none;
}
.portfolio-item {
  padding-top: 30px;
}
.pd {
  padding: 0;
  padding: 10px;
}
.pd img {
  height: 180px;
  transition: all 0.5s;
}
.portfolio-overlay {
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  text-align: center;
  visibility: hidden;
  transition: all 0.5s;
  transform: scale(0);
}
.portfolio-overlay p,
.portfolio-overlay a {
  position: relative;
  z-index: 4;
}
.portfolio-overlay::before {
  content: "";
  width: 0;
  height: 0;
  border-width: 0;
  position: absolute;
  left: 10%;
  top: 10%;
  transition: 50ms height ease 150ms;
  z-index: 3;
}
.portfolio-overlay::after {
  content: "";
  width: 0;
  height: 0;
  border-width: 0;
  position: absolute;
  right: 10%;
  bottom: 10%;
  transition: 100ms width ease 200ms;
  z-index: 3;
}
.portfolio-item:hover .portfolio-overlay::before {
  width: 80%;
  height: 80%;
  border-top: 1px solid #50977f;
  border-right: 1px solid #50977f;
  transition: width 0.1s ease 0.3s, height 0.1s ease 0.5s;
}
.portfolio-item:hover .portfolio-overlay::after {
  width: 80%;
  height: 80%;
  border-bottom: 1px solid #50977f;
  border-left: 1px solid #50977f;
  transition: width 0.1s ease 0.6s, height 0.1s ease 0.7s;
}
.portfolio-item li:hover .portfolio-overlay {
  visibility: visible;
  transform: scale(1);
}
.portfolio-overlay .category {
  margin-top: 70px;
  margin-bottom: 20px;
  font-size: 16px;
  color: #fff;
  font-weight: 500;
}
.portfolio-overlay .magnify-icon {
  height: 40px;
  width: 40px;
  border-radius: 20px;
  background: #50977f;
  margin: 0 5px;
  cursor: pointer;
  display: inline-block;
  transition: all 0.25s;
}
.portfolio-overlay .magnify-icon:hover {
  background: #000;
}
.portfolio-overlay .magnify-icon p span i {
  font-size: 15px;
  color: #fff;
  line-height: 40px;
  cursor: pointer;
}


 .items .item-img:after,
 .items .item-img:before {
    content: "";
    position: absolute;
    background: #fff;
    z-index: 2;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.items .item-img:after {
    width: 50px;
    height: 1px;
    top: 50%;
    left: -100px;
}

 .items .item-img:before {
    height: 50px;
    width: 1px;
    left: 50%;
    top: -100px;
}

 .items .item-img:hover:after {
    left: 50%;
    -webkit-transform: translateX(-25px);
    -ms-transform: translateX(-25px);
    transform: translateX(-25px);
}

.items .item-img:hover:before {
    top: 50%;
    -webkit-transform: translateY(-25px);
    -ms-transform: translateY(-25px);
    transform: translateY(-25px);
}


    </style>

   
<header class="pages-header bg-img valign parallaxie" data-background="./assets/images/contact-ban.webp"
    data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Gallery</h1>
                    <div class="path">
                        <a href="<?php echo $site_url; ?>">Home</a><span>/</span><a href="#0" class="active">Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<body>
  <section class="portfolio-section" id="portfolio">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Project Gallery</h2>
          <p>Use all the same size pictures :)</p>
        </div>
      </div>
      <div class="portfolio-menu mt-2 mb-4">
        <nav class="controls">
          <button type="button" class="control outline" data-filter="all">All</button>
          <button type="button" class="control outline" data-filter=".web">Web Design</button>
          <button type="button" class="control outline" data-filter=".dev">Development</button>
          <button type="button" class="control outline" data-filter=".wp">WordPress</button>
        </nav>
      </div>
      <ul class="row portfolio-item">
        <li class="mix items  dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1520085601670-ee14aa5fa3e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  dev col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  web col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1534665482403-a909d0d97c67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  wp col-xl-3 col-md-4 col-12 col-sm-6 pd ">
          <img src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=898&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=898&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1555099962-4199c345e5dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  dev col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  web col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="mix items  wp col-xl-3 col-md-4 col-12 col-sm-6 pd">
          <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" itemprop="thumbnail"  class="item-img" alt="Image description" />
          <div class="portfolio-overlay">
            <div class="overlay-content">
              <p class="category">Project Name</p>
              <a href="#" title="View Project" target="_blank">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-link" aria-hidden="true"></i></span></p>
                </div>
              </a>
              <a data-fancybox="item" title="click to zoom-in" href="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" data-size="1200x600">
                <div class="magnify-icon">
                  <p><span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- JS Links -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!-- mix items itup -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mix items itup/3.2.2/mix items itup.min.js'></script>
  <!-- fancybox -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js'></script>
  <!-- Fancybox js -->
  <script>
    /*Downloaded from https://www.codeseek.co/ezra_siton/mix items itup-fancybox3-JydYqm */
    // 1. querySelector
    var containerEl = document.querySelector(".portfolio-item");
    // 2. Passing the configuration object inline
    //https://www.kunkalabs.com/mix items itup/docs/configuration-object/
    var mix items er = mix items itup(containerEl, {
      animation: {
        effects: "fade translateZ(-100px)",
        effectsIn: "fade translateY(-100%)",
        easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
      }
    });
    // fancybox insilaze & options //
    $("[data-fancybox]").fancybox({
      loop: true,
      hash: true,
      transitionEffect: "slide",
      /* zoom VS next////////////////////
      clickContent - i modify the deafult - now when you click on the image you go to the next image - i more like this approach than zoom on desktop (This idea was in the classic/first lightbox) */
      clickContent: function(current, event) {
        return current.type === "image" ? "next" : false;
      }
    });
  </script>

    <?php include('./footer.php') ?>