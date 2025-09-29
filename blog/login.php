<?php
include "core.php";
head();

$error = 0;
?>

<style>
.page-header.parallaxie {
    display: none;
}


header.header-style-02 {
    display: none;
}

section.page-title-section {
    display: none;
}
body {
    background: var(--gradient-color1);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>

<section class="blog_login_page">
    
       <div class="container">

<div class="col-md-6 offset-md-3 mt-5">
    <div class="card">
 
        <div class="card-body">

            <div class="row">
              
                <div class="col-md-12  p-3">
                    <h5 class="text-center"><i class="fas fa-sign-in-alt"></i> Sign In</h5>
                    <hr />
                    <?php
                    if (isset($_POST['signin'])) {
                        $username = mysqli_real_escape_string($connect, $_POST['username']);
                        $password = hash('sha256', $_POST['password']);
                        $check    = mysqli_query($connect, "SELECT username, password FROM `users` WHERE `username`='$username' AND password='$password'");
                        if (mysqli_num_rows($check) > 0) {
                            $_SESSION['sec-username'] = $username;
                            echo '<meta http-equiv="refresh" content="0;url=https://localhost/livsatva-interiors/blog/admin/dashboard.php">';
                        } else {
                            echo '
		<div class="alert alert-danger">
            <i class="fas fa-exclamation-circle"></i> The entered <strong>Username</strong> or <strong>Password</strong> is incorrect.
        </div>';
                            $error = 1;
                        }
                    }
                    ?>
                    <form action="" method="post">
                        <div class="input-group mb-3 needs-validation <?php
                                                                        if ($error == 1) {
                                                                            echo 'is-invalid';
                                                                        }
                                                                        ?>">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="username" name="username" class="form-control" placeholder="Username" <?php
                                                                                                                if ($error == 1) {
                                                                                                                    echo 'autofocus';
                                                                                                                }
                                                                                                                ?> required>
                        </div>
                        <div class="input-group mb-3 needs-validation">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <button type="submit" name="signin" class="btn btn-primary btn-default2 col-12"><i class="fas fa-sign-in-alt"></i>
                            &nbsp;Sign In</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</section>

