<?php

session_start();
    if(!isset($_SESSION['admin-username']))
    {
        header("location:adminLogin.php");
    }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body body style="background-image: url(/back\ 4.jpg); background-repeat: no-repeat;
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
                            <li class="right"><a href="#">Applications</a></li>
                            <li class="dropdown"><a href="#">&#9776;</a></li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>   

    <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0;background:transparent !important">
        <div class="container">
          <h1 class="display-4" style="text-align: center;">Applications</h1>
          <hr>
        </div>
      </div>


      <div class="row">
        <div class="col"></div>
        <div class="col-md-8">

            <form action="view-table.php" method="post">
                <h5 style="padding:10px;">CLASS:&nbsp;&nbsp; 
                    <select name="class" required>
                        <option>  ---select---  </option>
                        <option>ALL</option>
                        <option >Playgroup</option>
                        <option >Nursery</option>
                        <option >K.G</option>
                        <option >I</option>
                        <option >II</option>
                        <option >III</option>
                        <option >IV</option>
                        <option >V</option>
                        <option >VI</option>
                        <option >VII</option>
                        <option >VIII</option>
                        <option >IX</option>
                        <option >X</option>
                        <option >XI</option>
                        <option >XII</option>
                    </select>
                </h5>

                <input style="margin-top: 4rem; padding: 10px 40px 10px 40px;"type="submit" class="btn" value="View">
            </form>


        </div>
        <div class="col"></div>



      </div>



      


</body>
</html>

