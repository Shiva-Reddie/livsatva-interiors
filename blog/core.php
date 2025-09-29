<?php
$configfile = 'config.php';
if (!file_exists($configfile)) {
    echo '<meta http-equiv="refresh" content="0; url=install" />';
    exit();
}

session_start();
include "config.php";

//Data Sanitization
$_GET  = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$query = mysqli_query($connect, "SELECT * FROM `settings` LIMIT 1");
$row   = mysqli_fetch_assoc($query);

if (!isset($_SESSION['sec-username'])) {
    $logged = 'No';
} else {

    $username = $_SESSION['sec-username'];

    $querych = mysqli_query($connect, "SELECT * FROM `users` WHERE username='$username' LIMIT 1");
    if (mysqli_num_rows($querych) == 0) {
        $logged = 'No';
    } else {
        $rowu   = $querych->fetch_array();
        $logged = 'Yes';
    }
}

function short_text($text, $length)
{
    $maxTextLenght = $length;
    $aspace        = " ";
    if (strlen($text) > $maxTextLenght) {
        $text = substr(trim($text), 0, $maxTextLenght);
        $text = substr($text, 0, strlen($text) - strpos(strrev($text), $aspace));
        $text = $text . '...';
    }
    return $text;
}

function url()
{
    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $_SERVER['REQUEST_URI']
    );
}
function emoticons($text)
{
    $icons = array(
        ':)' => '🙂',
        ':-)' => '🙂',
        ':}' => '🙂',
        ':D' => '😀',
        ':d' => '😁',
        ':-D ' => '😂',
        ';D' => '😂',
        ';d' => '😂',
        ';)' => '😉',
        ';-)' => '😉',
        ':P' => '😛',
        ':-P' => '😛',
        ':-p' => '😛',
        ':p' => '😛',
        ':-b' => '😛',
        ':-Þ' => '😛',
        ':(' => '🙁',
        ';(' => '😓',
        ':\'(' => '😓',
        ':o' => '😮',
        ':O' => '😮',
        ':0' => '😮',
        ':-O' => '😮',
        ':|' => '😐',
        ':-|' => '😐',
        ' :/' => ' 😕',
        ':-/' => '😕',
        ':X' => '😷',
        ':x' => '😷',
        ':-X' => '😷',
        ':-x' => '😷',
        '8)' => '😎',
        '8-)' => '😎',
        'B-)' => '😎',
        ':3' => '😊',
        '^^' => '😊',
        '^_^' => '😊',
        '<3' => '😍',
        ':*' => '😘',
        'O:)' => '😇',
        '3:)' => '😈',
        'o.O' => '😵',
        'O_o' => '😵',
        'O_O' => '😵',
        'o_o' => '😵',
        '0_o' => '😵',
        'T_T' => '😵',
        '-_-' => '😑',
        '>:O' => '😆',
        '><' => '😆',
        '>:(' => '😣',
        ':v' => '🙃',
        '(y)' => '👍',
        ':poop:' => '💩',
        ':|]' => '🤖'
    );
    return strtr($text, $icons);
}

function post_author($author_id)
{
    include "config.php";

    $author = '-';

    $queryauthp = mysqli_query($connect, "SELECT username FROM `users` WHERE id='$author_id' LIMIT 1");
    $countauthp = mysqli_num_rows($queryauthp);

    if ($countauthp > 0) {

        $rowauthp = mysqli_fetch_assoc($queryauthp);
        $author   = $rowauthp['username'];
    }

    return $author;
}

function post_category($category_id)
{
    include "config.php";

    $category = '-';

    $querycat = mysqli_query($connect, "SELECT category FROM `categories` WHERE id='$category_id' LIMIT 1");
    $countcat = mysqli_num_rows($querycat);

    if ($countcat > 0) {
        $rowcat   = mysqli_fetch_assoc($querycat);
        $category = $rowcat['category'];
    }

    return $category;
}

function post_commentscount($post_id)
{
    include "config.php";

    $comments_count = '0';

    $querycc = mysqli_query($connect, "SELECT id FROM `comments` WHERE post_id='$post_id'");
    $countc  = mysqli_num_rows($querycc);

    $comments_count = $countc;

    return $comments_count;
}

function head()
{
    include "config.php";

    if (!isset($_SESSION['sec-username'])) {
        $logged = 'No';
    } else {

        $username = $_SESSION['sec-username'];

        $querych = mysqli_query($connect, "SELECT * FROM `users` WHERE username='$username' LIMIT 1");
        if (mysqli_num_rows($querych) == 0) {
            $logged = 'No';
        } else {
            $rowu   = $querych->fetch_array();
            $logged = 'Yes';
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <head>
        <?php
        $run  = mysqli_query($connect, "SELECT * FROM `settings`");
        $site = mysqli_fetch_assoc($run);
        ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
        // SEO Titles
        if (basename($_SERVER['SCRIPT_NAME']) == 'contact.php') {
            $pagetitle = 'Contact';
        } else if (basename($_SERVER['SCRIPT_NAME']) == 'gallery.php') {
            $pagetitle = 'Gallery';
        } else if (basename($_SERVER['SCRIPT_NAME']) == 'blog.php') {
            $pagetitle = 'Blog';
        } else if (basename($_SERVER['SCRIPT_NAME']) == 'profile.php') {
            $pagetitle = 'Profile';
        } else if (basename($_SERVER['SCRIPT_NAME']) == 'login.php') {
            $pagetitle = 'Sign In';
        } else if (basename($_SERVER['SCRIPT_NAME']) == 'unsubscribe.php') {
            $pagetitle = 'Unsubscribe';
        } else if (basename($_SERVER['SCRIPT_NAME']) == 'search.php') {
            $word      = $_GET['q'];
            $pagetitle = 'Search results for "' . $word . '"';
        } else if (basename($_SERVER['SCRIPT_NAME']) == 'post.php') {
            $id = (string)($_GET['url']);

            if (empty($id)) {
                echo '<meta http-equiv="refresh" content="0; url=blog.php">';
                exit;
            }

            $runpt = mysqli_query($connect, "SELECT * FROM `posts` WHERE url='$id'");
            if (mysqli_num_rows($runpt) == 0) {
                echo '<meta http-equiv="refresh" content="0; url=blog.php">';
                exit;
            }
            $rowpt = mysqli_fetch_assoc($runpt);

            $pagetitle = $rowpt['title'];
        } else if (basename($_SERVER['SCRIPT_NAME']) == 'page.php') {
            $id = (int) $_GET['id'];

            if (empty($id)) {
                echo '<meta http-equiv="refresh" content="0; url=index.php">';
                exit;
            }

            $runpp = mysqli_query($connect, "SELECT * FROM `pages` WHERE id='$id'");
            if (mysqli_num_rows($runpp) == 0) {
                echo '<meta http-equiv="refresh" content="0; url=index.php">';
                exit;
            }
            $rowpp = mysqli_fetch_assoc($runpp);

            $pagetitle = $rowpp['title'];
        } else if (basename($_SERVER['SCRIPT_NAME']) == 'category.php') {
            $id = (int) $_GET['id'];

            if (empty($id)) {
                echo '<meta http-equiv="refresh" content="0; url=blog.php">';
                exit;
            }

            $runct = mysqli_query($connect, "SELECT * FROM `categories` WHERE id='$id'");
            if (mysqli_num_rows($runct) == 0) {
                echo '<meta http-equiv="refresh" content="0; url=blog.php">';
                exit;
            }
            $rowct = mysqli_fetch_assoc($runct);

            $pagetitle = $rowct['category'];
        }

        if (basename($_SERVER['SCRIPT_NAME']) == 'index.php') {
            echo '<title>' . $site['sitename'] . '</title>';
            $mt3 = "mt-3";
        } else {
            $mt3 = "";
            echo '<title>' . $pagetitle . ' - ' . $site['sitename'] . '</title>';
        }
        ?>

        <meta name="description" content="<?php
                                            echo $site['description'];
                                            ?>" />
        <meta name="keywords" content="">
        <link rel="canonical" href="<?php echo $base_url ?>">

        <meta name="author" content="Antonov_WEB" />
        <meta name="robots" content="index, follow, all" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url ?>">


        <link rel="stylesheet" type="css" href="<?php echo $base_url ?>assets/css/style.css">

        <!-- Bootstrap 5 -->



        <link rel="stylesheet" type="" href="<?php echo $base_url; ?>assets/css/bootstrap.min.css">


        <script src="<?php echo $base_url; ?>js/bootstrap.bundle.min.js"></script>




        <!-- Font Awesome 5 -->

        <?php
        if ($site['theme'] != "Bootstrap 5") {
            echo '
        <!-- Bootstrap 5 Theme -->
        <link href="assets/css/themes/' . strtolower($site['theme']) . '/bootstrap.min.css" type="text/css" rel="stylesheet"/>
';
        }
        ?>

        <?php
        if (basename($_SERVER['SCRIPT_NAME']) == 'post.php') {
        ?>
            <!-- jsSocials -->



            <link rel="" type="" href="<?php echo $base_url; ?>assets/css/jssocials.css">
            <link rel="" type="" href="<?php echo $base_url; ?>assets/css/jssocials-theme-classic.css">




            <script src="<?php echo $base_url; ?>js/jquery-3.6.0.slim.min.js"></script>
            <script src="<?php echo $base_url; ?>js/jssocials.min.js"></script>



        <?php
        }
        ?>



        <style>
            <?php
            if ($site['background_image'] != "") {
                echo 'body {
        background: url("' . $site['background_image'] . '") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }';
            }
            ?>a:link {
                text-decoration: none;
            }

            a:visited {
                text-decoration: none;
            }

            #preloader {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #fff;
                z-index: 999999;
                display: none;
            }

            .mt_5 {
                margin-top: 100px;
            }

            .elementor_container .banner {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }


            .elementor_container .banner h2 a {
                font-size: 1.2rem;
                color: #fff;

            }


            .elementor_container .banner h2 {
                font-size: 1.2rem;
                color: #cdcccc;

            }
          .card-title {
    color: #01386e !important;
}

p {
   
    font-weight: 400 !IMPORTANT;
 
}
        </style>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-198345623-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-198345623-1');
        </script>
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '340456994543629');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=340456994543629&ev=PageView&noscript=1" /></noscript>
    </head>

    <body <?php
            if ($site['rtl'] == "Yes") {
                echo 'dir="rtl"';
            }
            ?>>


        <!-- <br /> -->





 


        <?php include('../header.php') ?>
<!-- Page Header Start -->
<header class="pages-header bg-img valign parallaxie" data-overlay-dark="5" style="background-size: cover; background-image: url('<?php echo $site_url; ?>assets/images/blogg.webp'); background-position: center; min-height: 300px; position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Our Blogs</h1>
                    <div class="path">
                        <a href="#0">Home</a><span>/</span><a href="#0" class="active">blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Page Header End -->



        <div class="container ful_width bg2 " style="padding:3rem 0px;">
            <div class="row">
            <?php
        }

        function sidebar()
        {
            include "config.php";
            ?>
                <div id="sidebar" class="col-md-4 top_margin">

                    <div class="card">
                        <div class="card-header"><i class="fa fa-list" aria-hidden="true"></i> Categories</div>
                        <div class="card-body">
                            <div class="list-group">
                                <?php
                                $runq = mysqli_query($connect, "SELECT * FROM `categories`");
                                while ($row = mysqli_fetch_assoc($runq)) {
                                    $category_id = $row['id'];
                                    $queryac     = mysqli_query($connect, "SELECT * FROM `posts` WHERE category_id = '$category_id' and active='Yes'");
                                    echo '<a href="' . $base_url . 'category.php?id=' . $row['id'] . '" class="list-group-item list-group-item-action"><i class="fa fa-arrow-right""></i>&nbsp; ' . $row['category'] . '</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div><br />

                    <?php
                    $run  = mysqli_query($connect, "SELECT * FROM `settings`");
                    $site = mysqli_fetch_assoc($run);
                    ?>
                    <div class="card">
                        <div class="card-header"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Subscribe to Newsletter</div>
                        <div class="card-body">
                            <p>Subscribe to <?php
                                            echo $site['sitename'];
                                            ?>'s newsletter to receive the latest news and exclusive offers.</p>
                            <form action="" method="POST">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter your E-Mail Address" name="email" required>
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary subscribe_btn" style="background-color: #00a0e3 !important;padding: 6px;border-radius: 0px;" type="submit" name="subscribe">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['subscribe'])) {
                                $email = $_POST['email'];
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    echo '<div class="alert alert-danger">The entered E-Mail Address is invalid</div>';
                                } else {
                                    $queryvalid = mysqli_query($connect, "SELECT * FROM `newsletter` WHERE email='$email' LIMIT 1");
                                    $validator  = mysqli_num_rows($queryvalid);
                                    if ($validator > 0) {
                                        echo '<div class="alert alert-warning">This E-Mail Address is already subscribed.</div>';
                                    } else {
                                        $run = mysqli_query($connect, "INSERT INTO `newsletter` (email) VALUES ('$email')");
                                        echo '<div class="alert alert-success">You have successfully subscribed to our newsletter.</div>';
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div><br />

                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs nav-justified">
                                <li class="nav-item active m-0"><a class="nav-link active m-0" href="#popular" data-bs-toggle="tab"><i class="fa fa-star" aria-hidden="true"></i> Popular</a></li>
                                <!--<li class="nav-item"><a class="nav-link" href="#commentss" data-bs-toggle="tab"><i class="fa fa-comments"></i> Comments</a></li>-->
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div id="popular" class="tab-pane fade show active">
                                    <?php
                                    $run   = mysqli_query($connect, "SELECT * FROM `posts` WHERE active='Yes' ORDER BY views, id DESC LIMIT 4");
                                    $count = mysqli_num_rows($run);
                                    if ($count <= 0) {
                                        echo '<div class="alert alert-info">There are no published posts</div>';
                                    } else {
                                        while ($row = mysqli_fetch_assoc($run)) {

                                            $image = "";
                                            if ($row['image'] != "") {
                                                $image = '<img src="' . $base_url . $row['image'] . '" alt="' . $row['title'] . '" style="width: 100%; height: 100%; object-fit: contain;">';
                                            } else {
                                                $image = '<svg class="bd-placeholder-img" width="100%" height="100px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="No Image" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Image</title><rect width="100%" height="100%" fill="#55595c"/>
                <text x="18%" y="50%" fill="#eceeef" dy=".1em">No Image</text></svg>';
                                            }
                                            echo '       
								<div class="mb-3 bg-light rounded">
								  <div class="row g-0">
							
								    <div class="col-md-12">
								      <div class="card-body">
								        <a href="' . $base_url . $row['url'] . '">
								            <h6 class="card-title">' . $row['title'] . '</h6>
								        </a>
								        <p class="card-text">
                                            <small>
                                                <i class="fas fa-calendar"></i> ' . $row['date'] .'<br />
                                               
                                            </small>
                                        </p>
								      </div>
								    </div>
								  </div>
								</div>';
                                        }
                                    }
                                    ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </aside>

                </div><br />
            </div>


        </div>
        </div>
        </div>

        <br> <br>
        <?php include('../footer.php') ?>

        </div>




    <?php
        }
        function footer()
        {
            include "config.php";

            $run  = mysqli_query($connect, "SELECT * FROM `settings`");
            $site = mysqli_fetch_assoc($run);
    ?>

        <footer class="footer border-top bg-dark text-light px-4 py-3 mt-3">
            <div class="row">
                <div class="col-md-2">
                    <p class="d-block mb-3">&copy; <?php
                                                    echo date("Y") . ' ' . $site['sitename'];
                                                    ?></p>
                </div>
                <div class="col-md-6">
                    <h2 style="font-size:1rem;"><i class="fa fa-info-circle"></i> About</h2>
                    <?php
                    $runq = mysqli_query($connect, "SELECT * FROM `settings`");
                    while ($row = mysqli_fetch_assoc($runq)) {
                        echo $row['description'];
                    }
                    ?>
                </div>
                <div class="col-md-4">
                    <h3 style="font-size:1rem;"><i class="fa fa-envelope"></i> Contact</h3>
                    <div class="col-12">
                        <a href="mailto:<?php
                                        echo $site['email'];
                                        ?>" target="_blank" class="btn btn-secondary">
                            <strong><i class="fa fa-envelope"></i><span>&nbsp; <?php
                                                                                echo $site['email'];
                                                                                ?></span></strong></a>
                        <?php
                        if ($site['facebook'] != '') {
                        ?>
                            <a href="<?php
                                        echo $site['facebook'];
                                        ?>" target="_blank" class="btn btn-primary">
                                <strong><i class="fab fa-facebook-square"></i>&nbsp; Facebook</strong></a>
                        <?php
                        }
                        if ($site['instagram'] != '') {
                        ?>
                            <a href="<?php
                                        echo $site['instagram'];
                                        ?>" target="_blank" class="btn btn-warning">
                                <strong><i class="fab fa-twitter-square"></i>&nbsp; Instagram</strong></a>
                        <?php
                        }
                        if ($site['twitter'] != '') {
                        ?>
                            <a href="<?php
                                        echo $site['twitter'];
                                        ?>" target="_blank" class="btn btn-info">
                                <strong><i class="fab fa-twitter-square"></i>&nbsp; Twitter</strong></a>
                        <?php
                        }
                        if ($site['youtube'] != '') {
                        ?>
                            <a href="<?php
                                        echo $site['youtube'];
                                        ?>" target="_blank" class="btn btn-danger">
                                <strong><i class="fab fa-youtube-square"></i>&nbsp; YouTube</strong></a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </footer>

    </body>





    </html>
<?php
        }
?>