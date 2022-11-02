<?php

session_start();

if(!isset($_SESSION['username']))
{
    header('location:studentLogin.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graduation Programs</title>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topbar">
        <div class="row">
            <div class="col-md-2">
                <img class="college-logo" src="download.png" height="130px" width="150px">
            </div>

            <div class="col-md-10">
                <h1>UTTARAKHAND INSTITUE OF TECHNOLOGY</h1>
                <h3>ONLINE ADMISSION PORTAL</h3>
            </div>
        </div>
        <br>
    </div>
    <br>

    
    <div class="row">
        <div class="col"></div>
        <div class="col-sm-12-md-11">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Under Graduation Programs</h1><br>
                    <hr>
                    <p class="lead">The Institute offers following under Graduation Programs:-</p>
                    <br>
                </div>
            </div>
            <div class="ugcourses">
                <h3>Engineering and technology</h3>
                <br>
                <ul>
                    <li>BTECH IN COMPUTER SCIENCE AND ENGINEERING</li>
                    <li>BTECH IN INFORMATION TECHNOLOGY</li>
                    <li>BTECH IN ELECTRONICS AND COMMUNICATION ENGINEERING</li>
                    <li>BTECH IN ELECTRICAL ENGINEERING</li>
                    <li>BTECH IN MECHANICAL ENGINEERING</li>
                    <li>BTECH IN CIVIL ENGINEERING</li>
                </ul>
            </div>
            <br>

            <div class="ugcourses">
                <h3>Computer Application</h3>
                <br>
                <ul>
                    <li>BACHELOR IN COMPUTER APPLICATION</li>
                    <li>BACHELOR IN SCIENCE- INFORMATION TECHNOLOGY</li>
                </ul>
            </div>
            <br>

            <form action="admission-form.html">
                <input class="btn" type="submit" value="APPLY NOW">
            </form>
                
        </div>
        <div class="col"></div>
    </div>
</body>
</html>
