
<?php

    $credential=$_GET['error'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Welcome page</title>
</head>
<body class="admin">
    <div class="topbar">
        <div class="row">
            <div class="col-md-2">
                <img class="college-logo" src="./assests/logo.png"height="130px" width="150px">
            </div>
            <div class="col-md-10">
                <h1>NAVADHA SCHOOL</h1>
                <h3>ONLINE PORTAL</h3>
                <a href="../../index.html">HOME</a>
            </div>
        </div>
    </div>   
    
    <div class="mid">

        <div class="row">
            <div class="col"></div>
            <div class="col-sm-12-md-8">
                <div class="jumbotron jumbotron-fluid" style="background:transparent !important">
                    <div class="container">
                      <h1 class="display-4">Administrator Login</h1>
                    </div>
                  </div>
            </div>
            <div class="col"></div>
        </div>
            
        <div class="row">
            <div class="col"></div>

            <div class="col-sm-12-md-8">
                <div class="card">
                    <div class="card-body">
                        <img class="logo" src="./assests/admin.jpg" height="70px" width="80px" style="margin-top:2rem;">
                        <form action="Admin-signin.php"> 
                            <div class="form-group"style="margin-top:2rem;">
                                <input type="text" name="admin-username" class="form-control"  placeholder="Admin Id" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="admin-password" class="form-control"  placeholder="Admin Password" required>
                            </div>
    
                            <input class="btn signin" type="submit" value="LOGIN">
                            <?php
                                if($credential=='nosuchadmin')
                                {
                                    echo"<h3 class='lead' style='color:Red'>WRONG USERNAME</h3>";
                                }
                                if($credential=='wrongpassword')
                                {
                                    echo"<h3 class='lead' style='color:Red'>WRONG PASSWORD</h3>";
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col"></div>
        </div>
    </div>
    <br>
    <br>
</body>
</html>