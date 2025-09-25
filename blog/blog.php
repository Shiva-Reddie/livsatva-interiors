<?php
include "core.php";
head();
?>







<body>





    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./style.css">

        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">



        <link
            href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700"
            rel="stylesheet">

        <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nanum+Pen+Script&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #1e835b24;
            width: 100%;
        }

        .preloader {
            width: 50px;
            height: 50px;
            display: inline-block;
            padding: 0px;
            text-align: left;
            box-sizing: border-box;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -25px;
            margin-top: -25px;
            display: none;
        }








        header {
            z-index: 99999999;
            position: relative;
            top: 0;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            z-index: 1000;
        }

        .blog-heading h1 {
            font-size: 2rem;
            color: #000;
            text-align: center;
            font-weight: 600;
            padding: 40px 0px;
        }

        .nav img {
            width: 120px;
            object-fit: contain;
            padding: 10px;
            background-color: #fff;
        }

        .fa-bars {
            display: block;
            color: #000;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .nav .logo {
            background-color: #fff;
        }

        .menu-nav .menu-sena li {
            display: block;
        }

        .menu-nav {
            background-color: #ffffff;
            height: auto;
            position: absolute;
            width: 40%;
            right: 0;
            top: 0;
            text-align: left;
            box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
            z-index: 10000;
            transition: 0.5s;

        }

        .menu-nav .fa-times {
            display: block;
            color: #000;
            font-size: 1.5rem;
            cursor: pointer;
            float: right;
            margin: 20px;
            margin-right: 50px;
        }

        .menu-sena {
            padding: 60px 50px 17px 50px;
        }

        .menu-sena li a {
            color: #999999;
            text-decoration: none;
            font-family: 'Poppins';
            position: relative;
            font-size: 2rem;
            font-weight: 700;
        }
        .nav-link {
            color:#1e835b !important;
        }
        .nav-tabs .nav-item .nav-link:hover,
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
          color: #fff !important;
          background-color: var(--accent-color);
        }

        .w-100 {
            width: 100%;
        }

        .menu-sena .active>a,
        .menu-sena li a:hover {
            text-decoration: none;
            color: #000;
        }

        .menu-sena>li {
            font-size: 1.95rem;
            line-height: 1;
        }

        .menu-sena>li {
            margin-top: 2rem;
        }

        .menu-sena>li:first-child {
            margin-top: 0;
        }

        .answer p {
            margin-bottom: 0 !important;
        }

        .answer h6 {
            color: #fff;
        }

        .menu-sena ul li {
            display: none;
            list-style-type: none !important;
            padding: 0;
            margin: 0;
        }

        .menu-sena ul li {
            font-size: 1.142rem;
            margin-top: 1.142rem;
        }

        .menu-sena ul li:first-child {
            margin-top: 2.4rem;
        }



        .footer-sena .social-sena {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-left: 40px;
        }

        .footer-sena .social-sena a {
            color: #cccccc;
            margin: 0;
            margin-right: 2.7rem;
            font-size: 1.2rem;
        }

        .footer-sena .social-sena a:last-child {
            margin-right: 0;
        }

        .footer-sena .social-sena a:hover {
            color: #01427f;
        }

        .footer-sena .copy {
            font-size: 0.9rem;
            color: #000;
            line-height: 20px;
            padding-left: 40px;
            padding-top: 30px;
            font-weight: 500;
            padding-bottom: 50px;
        }

        @media(max-width:768px) {
            .menu-nav {
                width: 100%;
            }

            .menu-sena li a {
                font-size: 1.4rem;
            }

            .footer-sena .copy {
                display: none;
            }
        }

        p {
            color: #000;
        }
        </style>
    </head>

    <body>
        <div class="container mx_1140">
            <section>
                <div class="blog-heading">
                    <h1>BLOG</h1>

                </div>
            </section>




            <script>
            var menuNav = document.getElementById("menuNav");

            function showMenu() {
                menuNav.style.display = "block";
            }

            function hideMenu() {
                menuNav.style.display = "none";
            }
            </script>
    </body>

    </html>
    <div class="row">
        <div class="col-md-8">

            <div class="card">
                 <div class="card-header"><i class="far fa-file-alt"></i> Articles</div>
                <div class="card-body">

                    <?php

                    $postsperpage = 6;

                    $pageNum = 1;
                    if (isset($_GET['page'])) {
                        $pageNum = $_GET['page'];
                    }
                    if (!is_numeric($pageNum)) {
                        echo '<meta http-equiv="refresh" content="0; url=blog.php">';
                        exit();
                    }
                    $rows = ($pageNum - 1) * $postsperpage;

                    $run   = mysqli_query($connect, "SELECT * FROM `posts` WHERE active='Yes' ORDER BY id DESC LIMIT $rows, $postsperpage");
                    $count = mysqli_num_rows($run);
                    if ($count <= 0) {
                        echo '<div class="alert alert-info">There are no published posts</div>';
                    } else {
                        while ($row = mysqli_fetch_assoc($run)) {

                            $image = "";
                            if ($row['image'] != "") {
                                $image = '<img src="' . $row['image'] . '" alt="' . $row['title'] . '" style="width: 100%; height: auto;">';
                            } else {
                                $image = '<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>No Image</title><rect width="100%" height="100%" fill="#55595c"/>
            <text x="46%" y="50%" fill="#eceeef" dy=".3em">No Image</text></svg>';
                            }

                            echo '
                        <div class="card shadow-sm">
                            <a href="' . $row['url'] . '">
                                ' . $image . '
                            </a>
                            <div class="card-body">
                                <a href="' . $base_url . $row['url'] . '"><h5 class="card-title">' . $row['title'] . '</h5></a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="' . $base_url . 'category.php?id=' . $row['category_id'] . '"><span class="badge bg-primary">' . post_category($row['category_id']) . '</span></a>
                                    <small><i class="fas fa-comments"></i> Comments: 
                                        <a href="' . $base_url . $row['url'] . '#comments" class="blog-comments"><b>' . post_commentscount($row['id']) . '</b></a>
                                    </small>
                                </div>
                                <p class="card-text">' . short_text(strip_tags(html_entity_decode($row['content'])), 400) . '</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <b><i class="fas fa-user-edit"></i> ' . post_author($row['author_id']) . '</b>
                                    <small class="text-muted"><i class="far fa-calendar-alt"></i> ' . $row['date'] . ', ' . $row['time'] . '</small>
                                </div>
                            </div>
                        </div><br />';
                        }

                        $query   = "SELECT COUNT(id) AS numrows FROM posts WHERE active='Yes'";
                        $result  = mysqli_query($connect, $query);
                        $row     = mysqli_fetch_array($result);
                        $numrows = $row['numrows'];
                        $maxPage = ceil($numrows / $postsperpage);

                        $pagenums = '';

                        echo '<center>';

                        for ($page = 1; $page <= $maxPage; $page++) {
                            if ($page == $pageNum) {
                                $pagenums .= "<a href='?page=$page' class='btn btn-primary'>$page</a> ";
                            } else {
                                $pagenums .= "<a href=\"?page=$page\" class='btn btn-default'>$page</a> ";
                            }
                        }

                        if ($pageNum > 1) {
                            $page     = $pageNum - 1;
                            $previous = "<a href=\"?page=$page\" class='btn btn-default'><i class='fa fa-arrow-left'></i> Previous</a> ";

                            $first = "<a href=\"?page=1\" class='btn btn-default'><i class='fa fa-arrow-left'\></i> <i class='fa fa-arrow-left'></i> First</a> ";
                        } else {
                            $previous = ' ';
                            $first    = ' ';
                        }

                        if ($pageNum < $maxPage) {
                            $page = $pageNum + 1;
                            $next = "<a href=\"?page=$page\" class='btn btn-default'><i class='fa fa-arrow-right'></i> Next</a> ";

                            $last = "<a href=\"?page=$maxPage\" class='btn btn-default'><i class='fa fa-arrow-right'></i>  <i class='fa fa-arrow-r'></i> Last</a> ";
                        } else {
                            $next = ' ';
                            $last = ' ';
                        }

                        echo $first . $previous . $pagenums . $next . $last;

                        echo '</center>';
                    }
                    ?>

                </div>
            </div>

        </div>
        <script>
        hideMenu();
        </script>
        <?php
        sidebar();
        // footer();
        ?>
    </div>
    </div>