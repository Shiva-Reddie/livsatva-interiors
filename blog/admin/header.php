<?php
include '../config.php';

session_start();

if (isset($_SESSION['sec-username'])) {
  $uname = $_SESSION['sec-username'];
  $suser = mysqli_query($connect, "SELECT * FROM `users` WHERE username='$uname' AND (role='Admin' OR role='Editor')");
  $count = mysqli_num_rows($suser);
  if ($count < 0) {
    echo '<meta http-equiv="refresh" content="0; url=index.php" />';
    exit;
  }
  $user = mysqli_fetch_assoc($suser);
} else {
  echo '<meta http-equiv="refresh" content="0; url=../login.php" />';
  exit;
}

if (basename($_SERVER['SCRIPT_NAME']) != 'add_post.php' && basename($_SERVER['SCRIPT_NAME']) != 'posts.php' && basename($_SERVER['SCRIPT_NAME']) != 'add_page.php' && basename($_SERVER['SCRIPT_NAME']) != 'pages.php' && basename($_SERVER['SCRIPT_NAME']) != 'add_widget.php' && basename($_SERVER['SCRIPT_NAME']) != 'widgets.php' && basename($_SERVER['SCRIPT_NAME']) != 'add_image.php' && basename($_SERVER['SCRIPT_NAME']) != 'gallery.php') {
  $_GET  = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
}

if ($user['role'] == "Editor" && (basename($_SERVER['SCRIPT_NAME']) != 'add_post.php' && basename($_SERVER['SCRIPT_NAME']) != 'posts.php' && basename($_SERVER['SCRIPT_NAME']) != 'dashboard.php')) {
  echo '<meta http-equiv="refresh" content="0; url=dashboard.php" />';
  exit;
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

function byte_convert($size)
{
  if ($size < 1024)
    return $size . ' Byte';
  if ($size < 1048576)
    return sprintf("%4.2f KB", $size / 1024);
  if ($size < 1073741824)
    return sprintf("%4.2f MB", $size / 1048576);
  if ($size < 1099511627776)
    return sprintf("%4.2f GB", $size / 1073741824);
  else
    return sprintf("%4.2f TB", $size / 1073741824);
}

function post_author($author_id)
{
  include "../config.php";

  $author = '-';

  $queryauthp = mysqli_query($connect, "SELECT username FROM `users` WHERE id='$author_id' LIMIT 1");
  $countauthp = mysqli_num_rows($queryauthp);

  if ($countauthp > 0) {

    $rowauthp = mysqli_fetch_assoc($queryauthp);
    $author   = $rowauthp['username'];
  }

  return $author;
}

$queryst = mysqli_query($connect, "SELECT date_format FROM settings LIMIT 1");
$st      = mysqli_fetch_assoc($queryst);

function generateSeoURL($string, $random_numbers = 1, $wordLimit = 8)
{
  $separator = '-';

  if ($wordLimit != 0) {
    $wordArr = explode(' ', $string);
    $string = implode(' ', array_slice($wordArr, 0, $wordLimit));
  }

  $quoteSeparator = preg_quote($separator, '#');

  $trans = array(
    '&.+?;' => '',
    '[^\w\d _-]' => '',
    '\s+' => $separator,
    '(' . $quoteSeparator . ')+' => $separator
  );

  $string = strip_tags($string);
  foreach ($trans as $key => $val) {
    $string = preg_replace('#' . $key . '#iu', $val, $string);
  }

  $string = strtolower($string);
  if ($random_numbers == 1) {
   // $string = $string . '-' . rand(10000, 99999);
  }

  return trim(trim($string,$separator));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Nayana Group  - Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  <meta name="author" content="Antonov_WEB" />

  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url ?>">

  <!-- Bootstrap -->
<!--<link rel="" type="" href="<?php echo $base_url; ?>assets/css/bootstrap.min.css">-->
<!--<script src="<?php echo $base_url; ?>js/bootstrap5.bundle.min.js"></script>-->



  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>





  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Font Awesome -->
 
  <!--DataTables-->
<link rel="" type="" href="../assets/css/datatables.min.css">

  <!-- jQuery -->
 

  <script src="../js/jquery-3.6.0.min.js"></script>

  <!-- CK Editor -->


<!--<script src="../js/ckeditor.js"></script>-->

 <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>


<link rel="" type="" href="../assets/css/bootstrap-tagsinput.css">


<script src="../js/bootstrap-tagsinput.js"></script>

  <style>
    a:link {
      text-decoration: none;
    }

    a:visited {
      text-decoration: none;
    }

    body {
      font-size: .875rem;
    }

    .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
    }

    .sidebar {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      padding: 48px 0 0;
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
      .sidebar {
        top: 5rem;
      }
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto;
    }

    .sidebar .nav-link {
      font-weight: 500;
      color: #333;
    }

    .sidebar .nav-link .feather {
      margin-right: 4px;
      color: #727272;
    }

    .sidebar .nav-link.active {
      color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
      color: inherit;
    }

    .sidebar-heading {
      font-size: .75rem;
      text-transform: uppercase;
    }

    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
      top: .25rem;
      right: 1rem;
    }
  </style>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="dashboard.php"><b><i class="fa fa-toolbox"></i> Y-Junction</b> - Admin Panel</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href=".." target="_blank"><i class="fa fa-columns"></i> View Site</a>
      </li>
    </ul>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
      </li>
    </ul>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-lg-2 d-md-block bg-dark text-white sidebar collapse" style="overflow-y: scroll;">
        <div class="position-sticky pt-3">
          <ul class="nav nav-pills flex-column mb-auto">
            <li <?php
                if (basename($_SERVER['SCRIPT_NAME']) == 'dashboard.php') {
                  echo 'class="nav-item"';
                }
                ?>>
              <a class="nav-link text-white <?php
                                            if (basename($_SERVER['SCRIPT_NAME']) == 'dashboard.php') {
                                              echo 'active';
                                            }
                                            ?>" href="dashboard.php">
                <i class="fa fa-columns"></i> Dashboard
              </a>
            </li>
            <?php
            if ($user['role'] == "Admin") {
            ?>
              <li <?php
                  if (basename($_SERVER['SCRIPT_NAME']) == 'settings.php') {
                    echo 'class="nav-item"';
                  }
                  ?>>
                <a class="nav-link text-white <?php
                                              if (basename($_SERVER['SCRIPT_NAME']) == 'settings.php') {
                                                echo 'active';
                                              }
                                              ?>" href="settings.php">
                  <i class="fa fa-cogs"></i> Settings
                </a>
              </li>
      
        

    
            <?php
            }
            ?>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Posts</span>
          </h6>
          <ul class="nav nav-pills flex-column mb-auto">
            <li <?php
                if (basename($_SERVER['SCRIPT_NAME']) == 'add_post.php') {
                  echo 'class="nav-item"';
                }
                ?>>
              <a class="nav-link text-white <?php
                                            if (basename($_SERVER['SCRIPT_NAME']) == 'add_post.php') {
                                              echo 'active';
                                            }
                                            ?>" href="add_post.php">
                <i class="fa fa-edit"></i> Add Post
              </a>
            </li>
            <li <?php
                if (basename($_SERVER['SCRIPT_NAME']) == 'posts.php') {
                  echo 'class="nav-item"';
                }
                ?>>
              <a class="nav-link text-white <?php
                                            if (basename($_SERVER['SCRIPT_NAME']) == 'posts.php') {
                                              echo 'active';
                                            }
                                            ?>" href="posts.php">
                <i class="fa fa-list" aria-hidden="true"></i> Posts
              </a>
            </li>
            <?php
            if ($user['role'] == "Admin") {
            ?>
              <li <?php
                  if (basename($_SERVER['SCRIPT_NAME']) == 'categories.php' || basename($_SERVER['SCRIPT_NAME']) == 'add_category.php') {
                    echo 'class="nav-item"';
                  }
                  ?>>
                <a class="nav-link text-white <?php
                                              if (basename($_SERVER['SCRIPT_NAME']) == 'categories.php' || basename($_SERVER['SCRIPT_NAME']) == 'add_category.php') {
                                                echo 'active';
                                              }
                                              ?>" href="categories.php">
                 <i class="fa fa-list-ol"></i> Categories
                </a>
              </li>
              <li <?php
                  if (basename($_SERVER['SCRIPT_NAME']) == 'comments.php') {
                    echo 'class="nav-item"';
                  }
                  ?>>
                <a class="nav-link text-white <?php
                                              if (basename($_SERVER['SCRIPT_NAME']) == 'comments.php') {
                                                echo 'active';
                                              }
                                              ?>" href="comments.php">
                  <i class="fa fa-comments"></i>  Comments
                </a>
              </li>
            <?php
            }
            ?>
          </ul>
          <?php
          if ($user['role'] == "Admin") {
          ?>





        

          <?php
          }
          ?>
          <br /><br />
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-4">