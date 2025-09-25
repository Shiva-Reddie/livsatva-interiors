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

  

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">



        <style>
.blog_details_page_banner{

width: 100%;
height: auto;
/*max-height: 400px;*/
/*min-height: 400px;*/

}

.blog_details_page_banner p{
    color:#fff;
}





.imagee li{
   
    list-style-type: decimal;
  

}




.imagee img{
    width:100% !important;
    height:auto !important;
    position:relative;
}


.card-body {
    flex: 1 1 auto;
    padding: 1rem 1rem;
}
h5{
    
    color: #fff;
    padding-bottom: 20px;

}
.btn-primary {
    color: #fff;
    background-color: #a37a52;
    border-color: #a37a52;
}
h1{
    color:#fff;
    margin-bottom:15px;
}
h3{
    color:#fff;
    margin-bottom:15px;
}

label{
    color:#fff;
}

a {
    color: rgb(30 131 91);
    
}

@media only screen and (max-width: 600px) {
.blog_details_page_banner{
    min-height: auto;
}

.ful_width {
    padding-top:10px !important;
}

p{
    text-align:left !important;
}

}

.clr_white{
    color:#000;
}


.jssocials-shares {
    display: flex;
    gap: 90px;
}

.jssocials-shares i{
    padding :0px 5px;
}
</style>

    </head>

    <body>
        <!-- <section>
    <div class="blog-heading">
            <h1>Blog</h1>

    </div>
    </section> -->

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

    <div class="col-md-8">
        <?php
        $id = (string)($_GET['url']);
        if (empty($id)) {
            echo '<meta http-equiv="refresh" content="0; url=blog.php">';
            exit;
        }

        $runq = mysqli_query($connect, "SELECT * FROM `posts` WHERE active='Yes' AND url='$id'");
        if (mysqli_num_rows($runq) == 0) {
            echo '<meta http-equiv="refresh" content="0; url=blog.php">';
            exit;
        }

        mysqli_query($connect, "UPDATE `posts` SET views = views + 1 WHERE active='Yes' and url='$id'");
        $row         = mysqli_fetch_assoc($runq);
        $post_id     = $row['id'];
        echo '<div class="card shadow-sm bg-light top_margin">
                        <div class="col-md-12">';
        if ($row['image'] != '') {
            echo '
        <img class="blog_details_page_banner" src="' . $base_url . $row['image'] . '" width="100%" height="260" alt="' . $row['title'] . '"/>
';
        }
        echo '
            <div class="card-body imagee">
                <h5 class="card-title">' . $row['title'] . '</h5>
                ' . html_entity_decode($row['content']) . '
				<hr />
             <div class="row d-flex justify-content-center">
              <div class="col-lg-4 clr_white">
                <i class="fas fa-user"></i> Author: <b>' . post_author($row['author_id']) . '</b>
              </div>
              <div class="col-lg-4 clr_white"> 
                <i class="far fa-calendar-alt"></i> <b>' . $row['date'] . '</b>
			  </div>
              <div class="col-lg-4 clr_white"> 	
                <i class="fa fa-eye"></i> Views: <b>' . $row['views'] . '</b>
              </div>
             </div>
             <div class="row d-flex justify-content-center mt-2">
        
			  
			       <div class="col-lg-12 clr_white"> 	
                <i class="fa fa-list" aria-hidden="true"></i> Category: <a href="' . $base_url . 'category.php?id=' . $row['category_id'] . '"><b>' . post_category($row['category_id']) . '</b></a>
              </div>
           
            </div>
            <hr>
            <h6 class="clr_white"><i class="fas fa-share-alt-square"></i> Tags</h6>
             <div class="row d-flex justify-content-center">
              <div class="col-lg-12 clr_white">
                <i class="fas fa-user"></i> Tags: <b>' . ($row['tags']) . '</b>
              </div>
			  </div>
            <hr />
            
            <h6 class="clr_white"><i class="fas fa-share-alt-square"></i> Share</h6>
            <div id="share" style="font-size: 14px;"></div><br />

           
';
        ?>

       


    </div>
    </div>
    </div>
    </div>
    <script>
        var isCaptchaValidated = false;
        var response = grecaptcha.getResponse();
        if (response.length == 0) {
            isCaptchaValidated = false;
            toast('Please verify that you are a Human.');
        } else {
            isCaptchaValidated = true;
        }


        if (isCaptchaValidated) {
            //you can now submit your form
        }
    </script>
    <script>
        $("#share").jsSocials({
            showCount: false,
            showLabel: true,
            shares: [{
                    share: "facebook",
                    logo: "fab fa-facebook-square",
                    label: "Share"
                },
                {
                    share: "twitter",
                    logo: "fab fa-twitter-square",
                    label: "Tweet"
                },
                {
                    share: "email",
                    logo: "fas fa-envelope",
                    label: "E-Mail"
                },
                {
                    share: "linkedin",
                    logo: "fab fa-linkedin",
                    label: "Linkedin"
                }
                
            ]
        });
    </script>
    <script>
        hideMenu();
    </script>
    <?php
    sidebar();
    // footer();
    ?>