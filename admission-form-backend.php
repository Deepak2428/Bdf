<?php

session_start();

if(!isset($_SESSION['username']))
{
  header('location:StudentLogin.php');
}


$formdata=json_decode($_POST['data']);

$firstname=$formdata->firstname;
$lastname=$formdata->lastname;
$fathersname=$formdata->fathersname;
$mothersname=$formdata->mothersname;
$mobileno=$formdata->mobilenumber;
$alternate_mob_no=$formdata->alternate_mobile_no;
$email=$formdata->email;
$gender=$formdata->gender;
$class=$formdata->class;
$dob=$formdata->dob;
$school=$formdata->school;
$tenth=$formdata->tenthscore;
$address=$formdata->address;
$blood_group=$formdata->bloodgroup;
$aadhar_card=$formdata->aadharnumber;

$student_id=1000;
$servername="localhost";
$username="root";
$password="root";
$dbname="admission_portal";

if($class=="XI"||$class=="XII")
{
  $_SESSION["tenth"]="true";   // required in doc-input if Xth class is passed then asking for Xth docs.
}
else
{
  $_SESSION["tenth"]="false";
}
//connecting database


$connection= new mysqli($servername,$username,$password,$dbname);


if($connection->connect_error)
{
    print("Connection failed: " . $connection->connect_error);
}

$sql_statement="INSERT INTO `admissions` (`First_Name`, `Last_Name`, `Fathers_Name`, `Mothers_Name`, 
`Mobile_Number`, `Alternate_Mobile_Number`, `Email`, `Gender`, `Class`, `DOB`, `Address`, `Blood_Group`,
 `Aadhar_Number`, `Status`, `Student_id`,`School`, `Xth-Score`) VALUES ('$firstname', '$lastname', '$fathersname', 
 '$mothersname','$mobileno', '$alternate_mob_no', '$email', '$gender', '$class', '$dob', '$address', '$blood_group', '$aadhar_card', 
 'Pending','$student_id','$school','$tenth')";




if  (mysqli_query($connection, $sql_statement)) {
  
    $sql_statement="SELECT * FROM `admissions` where `First_Name`='$firstname'";
    $result=mysqli_query($connection,$sql_statement);
    $row=mysqli_fetch_assoc($result);
    $_SESSION["id"]=$row['Student_id'];
    $foldername="STUDENT-ID=".$_SESSION["id"];
    mkdir("Documents/".$foldername);
  } 
  else 
  {
    print ("Error: " . $sql . "<br>" . $connection->error);
  }
  
  mysqli_close($connection);


?>