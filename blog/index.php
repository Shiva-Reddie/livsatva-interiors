<?php



include "core.php";
head();
?>


<style>
    .map {
        display: none;
    }

    body {
        background: #01386e24;
        width: 100%;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1rem 1rem;

    }

    h5 {

        color: #fff;
        padding-bottom: 20px;

    }

    .btn-primary {
        color: #fff;
        background-color: #01386e;
        border-color: #01386e;
    }

    .card-header:first-child {

    background-color: #014b91 !important;
    color: #fff !important;
}

    .carousel-inner a img {
        height: 400px;
        object-fit: cover;
    }

    .card a img {
        height: 250px;
        object-fit: cover;
        padding: 10px;
    }

    .nav-link {
        color: #01386e !important;
    }

    .nav-tabs .nav-item .nav-link:hover,
    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        /* color: #000 !important; */
        background-color: var(--accent-color);
    }

    #popular .card-title {
    color: #01386e !important;
    font-size: 14px !important;
    text-transform: capitalize;
    word-spacing: normal !important;
    line-height: normal !important;
}

    .nav-item {
    margin-right: 0rem;
    color: #fff !important;
}

    .nav-item a{
        color: #fff !important;
    }

</style>


<body>

    <!DOCTYPE html>
    <html lang="en">

    <head>






        <!-- <link
            href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700"
            rel="stylesheet">

        <link rel="stylesheet" type="css" href="<?php echo $base_url ?>assets/css/style.css"> -->

    </head>

    <body>
        <div class="container mx_1140">
            <section>
                <!-- <div class="blog-heading text-center mb-4">
            <h1>BLOG</h1>

    </div>
    </section> -->




    </body>

    </html>
    <div class="row">
        <div class="col-md-8">
            <?php
            $mt3_i = "";
            $run   = mysqli_query($connect, "SELECT * FROM `posts` WHERE active='Yes' AND featured='Yes' ORDER BY id DESC");
            $count = mysqli_num_rows($run);
            if ($count > 0) {
                $i = 0;
                $mt3_i = "mt-3";
            ?>
                <div id="carouselExampleCaptions" class="col-md-12 carousel slide card-header d-none" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                        while ($row = mysqli_fetch_assoc($run)) {
                            $active1 = "";
                            if ($i == 0) {
                                $active1 = 'class="active" aria-current="true"';
                            }

                            echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $i . '" ' . $active1 . ' aria-label="' . $row['title'] . '"></button>
        ';

                            $i++;
                        }
                        ?>
                    </div>
                    <div class="carousel-inner rounded">
                        <?php
                        $j = 0;
                        $run2 = mysqli_query($connect, "SELECT * FROM `posts` WHERE active='Yes' AND featured='Yes' ORDER BY id DESC");
                        while ($row2 = mysqli_fetch_assoc($run2)) {
                            $active = "";
                            if ($j == 0) {
                                $active = " active";
                            }

                            $image = "";
                            if ($row2['image'] != "") {
                                $image = '<img src="' . $row2['image'] . '" alt="' . $row2['title'] . '" class="d-block w-100">';
                            } else {
                                $image = '<svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="' . $row2['title'] . '" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>' . $row2['title'] . '</title>
            <rect width="100%" height="100%" fill="#555"></rect>
            <text x="40%" y="50%" fill="#333" dy=".3em">' . $row2['title'] . '</text></svg>';
                            }

                            echo '
        <div class="carousel-item' . $active . '">
            <a href="' . url() . '' . $row2['url'] . '">' . $image . '</a>
            <div class="carousel-caption d-none d-md-block">
                <h5><a href="' . url() . '' . $row2['url'] . '">' . $row2['title'] . '</a></h5>
                <p><i class="fas fa-calendar"></i> ' . $row2['date'] . ', ' . $row2['time'] . '</a></p>
            </div>
        </div>
        ';

                            $j++;
                        }
                        ?>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            <?php
            }
            ?>
            <div class="row <?php echo $mt3_i; ?>">



                <!--<div class="card-header">   <h5><i class="fa fa-list"></i> Latest Posts</h5> </div>-->
                <?php
                $run   = mysqli_query($connect, "SELECT * FROM `posts` WHERE active='Yes' ORDER BY id DESC LIMIT 8");
                $count = mysqli_num_rows($run);
                if ($count <= 0) {
                    echo '<div class="alert alert-info">There are no published posts</div>';
                } else {
                    while ($row = mysqli_fetch_assoc($run)) {

                        $image = "";
                        if ($row['image'] != "") {
                            $image = '<img src="' . $row['image'] . '" alt="' . $row['title'] . '" style="width: 100%;">';
                        } else {
                            $image = '<svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>No Image</title><rect width="100%" height="100%" fill="#55595c"/>
            <text x="40%" y="50%" fill="#eceeef" dy=".3em">No Image</text></svg>';
                        }

                        echo '
                    <div class="col-md-12 mb-3"> 
                        <div class="card shadow-sm row d-flex flex-row"  style="
                        height: 100%;
                    ">
                         <div class="col-6 p-0">
                            <a href="' . url() . '' . $row['url'] . '">
                                ' . $image . '
                            </a></div>
                          <div class="col-6">
                            <div class="card-body">
                                <a href="' . url() . '' . $row['url'] . '"><h6 class="card-title">' . $row['title'] . '</h6></a>
                                <div class="d-flex justify-content-between align-items-center tags">
                                    <a href="' . url() . 'category.php?id=' . $row['category_id'] . '">
                                     
                                    <span class="">' . post_category($row['category_id']) . '</span></a>
                                    <small><i class="fas fa-comments"></i> Comments: 
                                        <a href="' . url() . $row['url'] . '#comments" class="blog-comments"><b>' . post_commentscount($row['id']) . '</b></a>
                                    </small>
                                </div>
                                <p class="card-text">' . short_text(strip_tags(html_entity_decode($row['content'])), 100) . '</p>
                                <div class="d-flex flex-column ">
                                    <div class=""><i class="fas fa-user-edit"></i> ' . post_author($row['author_id']) . '</div>
                                    <small class="text-muted"><i class="far fa-calendar-alt"></i> ' . $row['date'] . ', ' . $row['time'] . '</small>
                                </div>
                            </div></div>
                        </div>
                    </div>
';
                    }
                }
                ?>
            </div>
            <a href="blog.php" class="btn btn-primary col-12"><i class="fas fa-arrow-alt-circle-right"></i> See All</a>
        </div>


        <script>
            hideMenu();
        </script>
        <?php
        sidebar();
        // footer();
        ?>
    </div>