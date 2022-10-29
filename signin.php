<?php

session_start();

$login_username=$_POST['username'];  // submitted through form
$login_password=$_POST['password'];

$servername = "localhost";
$username = "root";
$password = "root";
$database="admission_portal";

// Create connection
$connection = new mysqli($servername, $username, $password,$database);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$sql_statement= "SELECT * FROM `registration` WHERE `email` = '$login_username'";

if ($result=mysqli_query($connection, $sql_statement)) {

    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)==0) // if no row is returned then no such user exists
    {
      header("location:StudentLogin.php?error=nosuchuser");
    }
    else
    {
      if($login_password!=$row['Password'])
      {
        header("location:StudentLogin.php?error=wrongpass");
      }
      else
      {
        $_SESSION['username']=$login_username;
        header("location:page-1.php");
      }
    }
    
  } 
  else {

    echo "Error: " . $sql_statement . "<br>" . mysqli_error($connection);
  }
  
  mysqli_close($connection);

?>