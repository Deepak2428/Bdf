
<?php


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./style.css">
  </head>

<body class="signuppage" style="background-image:url(/back.png); background-size:cover ">

    <div class="topbar">
        <div class="row">
            <div class="col-md-2">
                <img class="college-logo" src="./assests/logo.png" alt="logo" height="130px" width="150px">
            </div>

            <div class="col-md-10">
                <h1>NAVADHA SCHOOL</h1>
                <h3>ONLINE PORTAL</h3>
                <a href="./StudentLogin.php" > LOGIN</a>
            </div>
        </div>
    </div>

    <div class="signup-portal">
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-12-md-8">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <h1 class="display-4">Student Registration</h1>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <img src="./assests/signuplogo.jpg" alt="signuplogo" width="120px" height="90px">
                        
                        <form action="./registerphp.php" method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" name="firstName"  placeholder="First name" required>
                            </div>
                            <div class="form-group">
        
                                <input type="text" class="form-control" name="lastName" placeholder="Last name" required>
                            </div>
                            <div class="form-group">
                                
                                <input type="text" class="form-control" name="mobileno" id="passwordInput" placeholder="Mobile No" required>
                            </div>
                            <div class="form-group">
        
                                <input type="email" class="form-control" name="email" placeholder="Email " required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="signup-password" placeholder="Password " required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  name="signup-repassword" placeholder="Re-Password" required>
                            </div>

                            <input  type="submit" value="REGISTER" class="btn register">

                            <?php
                                $status=$_GET['error'];
                                if($status=='mismatch')
                                {
                                    echo "<h4 class='lead' style='color:red'>Password Mismatch</h4>";
                                }
                                if($status=='invalidmobno')
                                {
                                    echo "<h4 class='lead' style='color:red'>Invalid Mobile Number</h4>";
                                }
                                if($status=='exists')
                                {
                                    echo "<h4 class='lead' style='color:red'>Email already exist</h4>";
                                }
                                if($status=='success')
                                {
                                    echo "<h4 class='lead' style='color:Green'>Registered Successfully</h4>";
                                }
                            ?>
                        </form>
                    </div>
                  </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>