

<?php

// Checks wheter the email entered by the user to recover PAssword exists or not.

$email=$_GET['Email'];


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

$sql_statement= "SELECT * FROM `registration` WHERE `email` = '$email'";

if ($result=mysqli_query($connection, $sql_statement)) {

    if(mysqli_num_rows($result)==0)
    {
        header("location:forget.php?error=nosuchuser");
    }
    else
    {
        $row=mysqli_fetch_assoc($result);
        $fromemail="deepakgodiyal_19021667.cse@geu.ac.in";
        $headers = 'From: ' .$fromemail . "\r\n". 
        'Reply-To: ' . $fromemail. "\r\n" . 
        'X-Mailer: PHP/' . phpversion();
        $msg="YOUR PASSWORD FOR LOGIN IS : ".$row['password']." ";
        mail($email,'Password Recovery For Admission Portal',$msg,$headers);
        header("location:forget.php?error=success");
    }
}
else {

    echo "Error: " . $sql_statement . "<br>" . mysqli_error($connection);
  }
  
  mysqli_close($connection);


?>