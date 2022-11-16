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
    <title>Administration</title>
    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/bootstrap-grid.min.css">
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
                            <li class="left">ADMINISTRATOR</li>
                            <li class="right"><a href="logout.php">Logout</a></li>
                            <li class="right"><a href="#">Search</a></li>
                            <li class="right"><a href="view-application.php">Applications</a></li>
                            <li class="dropdown"><a href="#">&#9776;</a></li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>   

    <div class="row">
        <div class="col-sm-12">
            <H3 style="color:black;text-align:center;">SEARCH A STUDENT</H3>
        </div>
    </div>

    <form action="search-result.php" method="post">

        <div class="row" style="margin-top:4rem;">
        
            <div class="col-1"></div>
            <div class="col-md-10" style="text-align:center;">
                CLASS:
                <select name="class" required>
                        <option>  ---select---  </option>
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Student-ID: 
                <input  type="text" name="ID">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Student-First-Name:
                <input type="text" name="First-Name">
                <div class="row" style="margin-top:3rem;">
                    <div class="col-sm-12">
                        <input class="btn" type=submit value="SEARCH">
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </form>
</body>
</html>