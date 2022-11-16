<?php

session_start();

$ad_id=$_GET['admin-username'];
$ad_password=$_GET['admin-password'];


$servername = "localhost";
$username="root";
$password="root";
$dbname="admission_portal";


$connection= new mysqli($servername,$username,$password,$dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  $sql_statement= "SELECT * FROM  `Admin`  WHERE `Admin_id` = '$ad_id' ";


  if($result=mysqli_query($connection,$sql_statement))
  {
      $row=mysqli_fetch_assoc($result);

      if(mysqli_num_rows($result)==0)
      {
        header("location:AdminLogin.php?error=nosuchadmin");
      }

      else
      {
          if($row['Admin_password']!= $ad_password)
          {
            header("location:AdminLogin.php?error=wrongpassword");
          }

          else
          {
              $_SESSION['admin-username']=$ad_id;
              $_SESSION['admin-name']=$row['First_Name']." ".$row['Last_Name'];
              header("location:Admin-page-1.php");
          }
      }
  }
    else {
        echo "Error: " . $sql_statement . "<br>" . mysqli_error($connection);
  }
  mysqli_close($connection);

?>