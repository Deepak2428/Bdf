
<?php
Session_start();
$checkCredential=$_GET['error'];
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./style.css">
  </head>

  <body class="signin-page" style="background-image: url(/back.png);
  background-repeat: no-repeat;background-size: cover;">
    <div class="topbar">
        <div class="row">
            <div class="col-md-2">
                <img class="college-logo" src="./assests/logo.png" height="130px" width="150px">
            </div>
            <div class="col-md-10">
                <h1>NAVADHA SCHOOL</h1>
                <h3>ONLINE PORTAL</h3>
                <a href="index.html">Home</a>
            </div>
        </div>
        <br>
    </div>

    <div class="signin-portal">
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-12-md-8">
                <div class="jumbotron jumbotron-fluid" style="background:transparent !important">
                    <div class="container" >
                      <h1 class="display-4">Student Login</h1>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col-8 signin">
                <div class="card">
                    <div class="card-body">
                        <form action="./signin.php" method="post">
                            <img src="./assests/login-icon.jpg" alt="login" height="120px" widht="150px">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" id="emilInput" placeholder="username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password" required>
                            </div>

                            <input class="btn signin" type="submit" value="LOGIN">
                            <a style='text-decoration:none' href='forget.php'>FORGOT PASSWORD ?</a>
                            <?php
                                if($checkCredential=='nosuchuser')
                                {
                                    echo "<h3 class='lead'style='color:red'>No Such User</h3>";
                                }
                                if($checkCredential=='wrongpass')
                                {
                                    echo "<h3 class='lead'style='color:red'>Wrong Password</h3>";
                                }
                            ?>
                        </form>
                    </div>
                </div>
                <a href="./signuppage.php" class="signup" Style="color:black">CLICK TO REGISTER</a>
            </div>

            <div class="col"></div>
            
        </div>
    </div>
  </body>


</html>