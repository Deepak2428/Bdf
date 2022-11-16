<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("location:StudentLogin.php");
}

$servername = "localhost";
$username="root";
$password="root";
$dbname="admission_portal";

$email=$_SESSION['username'];

$connection= new mysqli($servername,$username,$password,$dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  $sql_statement="UPDATE `registration` SET `Status`='Pending'  where `Email`='$email'";
  mysqli_query($connection,$sql_statement);
  mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="topbar">
        <div class="row">
            <div class="col-md-2">
                <img class="college-logo" src="./assests/logo.png" height="130px" width="150px">
            </div>

            <div class="col-md-10">
                <h1>NAVADHA School</h1>
                <h3>ONLINE ADMISSION PORTAL</h3>
                <a href="Logout.php">Logout</a>
            </div>
        </div>
        <br>
    </div>




    <div class="jumbotron jumbotron-fluid" style="text-align: center;">
        <div class="container">
          <h1 class="display-4">SUCCESS !!...</h1>
          <p class="lead">We have received your application. 
              We will be going through your application.Kindly wait till cut
              off is declared.
                <br>
              Wish You Luck!!..</p>
        </div>
      </div>
</body>
</html>