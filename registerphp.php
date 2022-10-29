<?php


$firstname=$_POST['firstName'];
$lastname=$_POST['lastName'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$pass1=$_POST['signup-password'];
$pass2=$_POST['signup-repassword'];


if(!preg_match('/^[0-9]{10}+$/',$mobileno))
{
  header("Location:signuppage.php?error=invalidmobno");
}

else if($pass1!=$pass2)        // Pass validation
{
  header("Location:signuppage.php?error=mismatch");
}
 
else{         

  $decide=0;// username is primary key if we insert a duplicate then error comes decide becomes 1 we say user already exists
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

  $sql_statement= "INSERT INTO `registration`(`First_Name`, `Last_Name`, `Email`, `Mobile`, `Password`,
   `Re-Password`)
    VALUES ('$firstname','$lastname','$email','$mobileno','$pass1','$pass2')";

  if  (mysqli_query($connection, $sql_statement)) {
    echo "New record created successfully";
    mysqli_close($connection);
  } 
  else 
  {
    $decide=1;
    mysqli_close($connection);
  }
  if($decide==0)
  {
    header("Location:signuppage.php?error=success");
  }
  else
  {
    header("Location:signuppage.php?error=exists");
  }
 
}
?>




