<!DOCTYPE html>
<html lang="en">

<head>


    <?php
$base_url = "https://localhost/livsatva-interiors/";
?>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords"
        content="Livsatva Interiors, Interior Design, Interior Design Company, Interior Design Services, Interior Design in India">
    <meta name="description"
        content="Livsatva Interiors is a leading interior design company in India. We offer a wide range of interior design services to our clients.">
    <meta name="author" content="Livsatva Interiors">

    <!-- Title  -->
    <title>Livsatva Interiors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/img/"> -->

    <!-- Google Fonts -->
    <link href="../../../css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="../../../css-1?family=Teko:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="../../../css-2?family=Playfair+Display:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Teko -->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Playfair Display -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    .feature-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px 20px;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    }

    .feature-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.12);
    }

    .feature-icon {
        font-size: 2em;
        color: var(--p);
        margin-bottom: 0px;
        z-index: 9;
    }

    .feature-title {
        font-weight: 600;
        margin-bottom: 10px;
        font-size: 1.1rem;
    }

    .feature-text {
        font-size: 0.95rem;
        color: #555;
    }
    </style>

    <!-- Plugins -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
        <div class="loading-text">Livsatva Interiors</div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->


    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->


    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar change navbar-expand-lg">
        <div class="container-fluid">

            <!-- Logo -->
            <a class="logo" href="<?php echo $base_url; ?>">
                <img src="assets/images/livsatva-logo.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">Home</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button"
                            aria-haspopup="true" aria-expanded="false">Products</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">Modular Kitchen</a>
                            <a class="dropdown-item" href="">Modular Wardrobe</a>
                            <a class="dropdown-item" href="">Modular crockery</a>

                            <a class="dropdown-item" href="">Office</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">Blogs</a>
                            <a class="dropdown-item" href="">Post Details</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./careers.php">Careers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./faq.php">Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>contact.php">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="">Book a Home Visit</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Book a Showroom Visit</a>
                    </li>

                </ul>
                <!-- <div class="social-icon">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-behance"></i></a>
                </div> -->
                <!-- <div class="search">
                    <span class="icon pe-7s-search cursor-pointer"></span>
                    <div class="search-form text-center custom-font">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                        </form>
                        <span class="close pe-7s-close cursor-pointer"></span>
                    </div>
                </div> -->
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->