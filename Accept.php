<?php
session_start();
if(!isset($_SESSION['admin-username']))
{
  header("location:AdminLogin.php");
}

$servername = "localhost";
$username="root";
$password="root";
$dbname="admission_portal";


$connection= new mysqli($servername,$username,$password,$dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  
  $email=$_GET['email'];  // sending email to update status of application .
$sql_statement="UPDATE `admissions` SET `Status`='Accepted'  where `Email`='$email'";

if($result=mysqli_query($connection,$sql_statement)){
      header("location:view-table.php");
}
mysqli_close($connection);
?>