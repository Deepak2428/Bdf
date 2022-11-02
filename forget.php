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

    <div class="row" style="margin-top:3rem;">
            <div class="col"></div>
            <div class="col-8 signin">
                <div class="card">
                    <div class="card-body" style="text-align:center;background-color:#E9ECEF;">
                        <h1 class="display-4"> FORGOT PASSWORD</h1>
                        <p class="lead">Enter Your Email To Recover Password</p>

                        <form action="forgetcheck.php" style="margin-top:2rem;">
                            <div class="form-group">
                                <input type="text" name="Email" class="form-control"  placeholder="Email" required>
                            </div>

                            <input style="margin-top:2rem;" class="btn" type="submit" value="Continue">

                            <?php

                                $check=$_GET['error'];
                                if($check=='nosuchuser')
                                {
                                    echo "<h3 class='lead' style='color:red'>OOPS! LOOK'S LIKE YOU HAVE ENTERED WRONG EMAIL.</h3>";
                                }
                                if($check=='success')
                                {
                                    echo "<h3 class='lead' style='color:green'>YOUR PASSWORD HAS BEEN SENT TO YOUR REGISTERED EMAIL.</h3>";
                                }

                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
    </div>