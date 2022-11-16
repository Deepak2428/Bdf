
<?php

session_start();

if(!isset($_SESSION['admin-username']))
{
    header("location:AdminLogin.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url(/back.png); background-repeat: no-repeat;
        background-size: cover;">
    
    <div class="topbar">
        <div class="row">
            <div class="col-md-2">
                <img class="college-logo" src="./assests/logo.png"height="130px" width="150px">
            </div>
            <div class="col-md-10">
                <h1>NAVADHA SCHOOL</h1>
                <h3>ONLINE PORTAL</h3>
                <div class="row">
                    <div class="col-sm-12">
                        <ul>
                            <li class="left">ADMIN:<?php echo $_SESSION['admin-username']; ?></li>
                            <li class="right"><a href="logout.php">Logout</a></li>
                            <li class="right"><a href="search-admin.php">Search</a></li>
                            <li class="right"><a href="view-application.php">Applications</a></li>
                            <li class="dropdown"><a href="#">&#9776;</a></li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>   

    <div class="jumbotron jumbotron-fluid" style="background:transparent !important">
        <div class="container">
          <h1 class="display-4" style="text-align:center;">Welcome</h1>
          <p class="display-4"  style="text-align:center; font-size:30px;">
              <?php

                session_start();
                $name=$_SESSION['admin-name'];
                echo $name;

              ?>
          </p>
        </div>
      </div>

      

</body>
</html>