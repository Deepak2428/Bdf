<?php
session_start();

if(!isset($_SESSION['admin-username']))
{
    header("location:AdminLogin.php");
}
$table='admissions';
$class=$_POST['class'];
$student_id=$_POST['ID'];
$student_name=$_POST['First-Name'];
$column1='';
$column2='';
if($class=='XI' || $class=='XII')
{
    $column1='Xth Score';
    $column2='XIIth Score';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <link rel="stylesheet" href="./Bootstrap//bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body >
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
                            <li class="right"><a href="search-admin.php">Search</a></li>
                            <li class="right"><a href="view-application.php">Applications</a></li>
                            <li class="dropdown"><a href="#">&#9776;</a></li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>   

    <div class="jumbotron jumbotron-fluid" style="margin-bottom: 0; background:transparent !important">
        <div class="container">
          <h1 class="display-4" style="text-align: center;">Results</h1>
          <hr>
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-md-11">
            <table style="margin:auto; margin-top:0;">

                <thead>
                    <tr>
                        <td>Sno</td>
                        <td>Application-ID</td>
                        <td>Student Name</td>
                        <td>Email</td>
                        <td>Mobile Number</td>
                        <?php
                            if($class=="XI" || $class=="XII")
                            {
                                echo "<td>".$column1."</td><td>".$column2."</td>";
                            }
                        ?>
                        <td>Documents</td>
                        <td>Decision</td>
                    </tr>
                </thead>

<?php


$servername = "localhost";
$username="root";
$password="root";
$dbname="admission_portal";



$connection= new mysqli($servername,$username,$password,$dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

    $sql_statement="";
    
    if($student_id!='')
    {
        if($student_name!='')
        {
            $sql_statement="SELECT * FROM `$table` WHERE `Student_id`=$student_id AND First_Name='$student_name'";
        }

        else
        {
            $sql_statement="SELECT * FROM `$table` WHERE `Student_id`='$student_id'";
        }
    }
    else
    {
        if($class!="---select---")
        {
            if($student_name!="")
                $sql_statement="SELECT * FROM `$table` WHERE `Class`='$class' AND `First_Name`='$student_name'";
            else
                $sql_statement="SELECT * FROM `$table` WHERE `Class`='$class'";
        }
        else
        {
            if($student_name!="")
            {
                $sql_statement="SELECT * FROM `$table` WHERE `First_Name`='$student_name'";
            }
            else
            {
                $sql_statement= "SELECT * FROM  `$table`";
            }
        }
    }
    

    if($result=mysqli_query($connection,$sql_statement)){

        if(mysqli_num_rows($result)>0)
        {
            $x=1;
            $y=1;
            while($row=$result->fetch_assoc())
            {

                if($row['Status']=='Pending')
                {
                    $id=$row['Student_id'];
                    $email=$row['Email'];
                    if($class=="ALL" || $class=="XI" || $class=="XII")
                    {
                        echo "<tr><td>".$y."</td><td>".$row['Student_id']."</td><td>".$row['First_Name']." "
                        .$row['Last_Name']."</td><td>".$row['Email']."</td><td>".$row['Mobile_Number'].
                        "</td><td>".$row['Xth-Score']."</td><td>".$row['School']."</td><td>"
                        ."<a href='Documents/STUDENT-ID=".$row['Student_id']."/'>Documents</a>"."</td><td><a href='Accept.php?email=".$email."'><img src='./assests/green.png' 
                        height='20px' width='30px'"."></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='Reject.php?email=".$email."'><img src='./assests/red.png' 
                        height='20px' width='30px'"."</a></td></tr>";
                    }
                    else
                    {
                        echo "<tr><td>".$y."</td><td>".$row['Student_id']."</td><td>".$row['First_Name']." "
                        .$row['Last_Name']."</td><td>".$row['Email']."</td><td>".$row['Mobile_Number'].
                        "</td><td>"
                        ."<a href='Documents/STUDENT-ID=".$row['Student_id']."/'>Documents</a>"."</td><td><a href='Accept.php?email=".$email."'><img src='./assests/green.png' 
                        height='20px' width='30px'"."></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='Reject.php?email=".$email."'><img src='./assests/red.png' 
                        height='20px' width='30px'"."</a></td></tr>";
                    }
                    
                }

                else if($row['Status']=='Accepted')
                {
                    if($class=="ALL"|| $class=="XI"|| $class=="XII")
                    {
                        echo "<tr><td>".$y."</td><td>".$row['Student_id']."</td><td>".$row['First_Name']." "
                        .$row['Last_Name']."</td><td>".$row['Email']."</td><td>".$row['Mobile_Number'].
                        "</td><td>".$row['Xth-Score']."</td><td>".$row['School']."</td><td>"
                        ."<a href='Documents/STUDENT-ID=".$row['Student_id']."/'>Documents</a>"."</td><td><p style='margin:0'>ACCEPTED</p> </td></tr>";
                    }
                    else
                    {
                        echo "<tr><td>".$y."</td><td>".$row['Student_id']."</td><td>".$row['First_Name']." "
                        .$row['Last_Name']."</td><td>".$row['Email']."</td><td>".$row['Mobile_Number'].
                        "</td><td>"
                        ."<a href='Documents/STUDENT-ID=".$row['Student_id']."/'>Documents</a>"."</td><td><p style='margin:0'>ACCEPTED</p> </td></tr>";
                    }
                }

                else
                {
                    if($class=="ALL"|| $class=="XI"|| $class=="XII")
                    {
                        echo "<tr><td>".$y."</td><td>".$row['Student_id']."</td><td>".$row['First_Name']." "
                        .$row['Last_Name']."</td><td>".$row['Email']."</td><td>".$row['Mobile_Number'].
                        "</td><td>".$row['Xth-Score']."</td><td>".$row['School']."</td><td>"
                        ."<a href='Documents/STUDENT-ID=".$row['Student_id']."/'>Documents</a>"."</td><td><p style='margin:0'>REJECTED</p> </td></tr>";
                    }
                    else
                    {
                        echo "<tr><td>".$y."</td><td>".$row['Student_id']."</td><td>".$row['First_Name']." "
                        .$row['Last_Name']."</td><td>".$row['Email']."</td><td>".$row['Mobile_Number'].
                        "</td><td>"
                        ."<a href='Documents/STUDENT-ID=".$row['Student_id']."/'>Documents</a>"."</td><td><p style='margin:0'>REJECTED</p> </td></tr>";
                    }
                }
            $x++;
            $y++;
            }
            echo "</table>";
        }
        else
        {
            echo "<tr></tr>";
             echo "<tr><td></td><td></td><td></td><td></td><td>NO RECORD</td></tr>";
             echo "</table>";
        }
    }
    else {
        echo "Error: " . $sql_statement . "<br>" . mysqli_error($connection);
    }



mysqli_close($connection);



?>
        </div>
        <div class="col"></div>
    </div>

