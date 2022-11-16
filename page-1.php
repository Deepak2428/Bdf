<?php

session_start();

if(!isset($_SESSION['username'])) // if user has logged out go back to login page.
{
    header('location:studentLogin.php');
}


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

$email=$_SESSION['username'];

$sql_statement= "SELECT * FROM `admissions` WHERE `Email` = '$email'";
$sql_statement2="SELECT * FROM `registration` WHERE `Email` = '$email'";
$result=mysqli_query($connection, $sql_statement);
$result2=mysqli_query($connection,$sql_statement2);
$row=mysqli_fetch_assoc($result);
$row2=mysqli_fetch_assoc($result2);

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='./Bootstrap/bootstrap.min.css'>
    <link rel='stylesheet' href='./Bootstrap/bootstrap-grid.min.css'>
    <link rel='stylesheet' href='./style.css'>
    <title>Page1</title>
</head>
<body>

    <div class='topbar'>
        <div class='row'>
            <div class='col-md-2'>
                <img class='college-logo' src='./assests/logo.png'height='130px' width='150px'>
            </div>
            <div class='col-md-10'>
                <h1>NAVADHA SCHOOL</h1>
                <h3>ONLINE PORTAL</h3>
                <h3 class='lead'>WELCOME  :  ".$row2['First_Name']." ".$row2['Last_Name']."</h3>
                <a href='Logout.php'>Logout</a>
            </div>
        </div>
    </div>
    ";

    if($row['Status']=='Pending')
    {
        echo"
    
        <div class='mid-page1'>
        <div class='row'>
            <div class='col'></div>
            <div class='col-sm-12-md-10'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='jumbotron jumbotron-fluid'>
                            <div class='container'>
                                <h1 class='display-4'>You've Already Applied</h1><br>
                                <p class='lead'>Your Application Status is Pending. It will be soon looked
                                upon by Officials.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col'></div>
        </div>    
        ";
    }


    else if($row['Status']=='Accepted')
    {
        echo"
    
        <div class='mid-page1'>
        <div class='row'>
            <div class='col'></div>
            <div class='col-sm-12-md-10'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='jumbotron jumbotron-fluid'>
                            <div class='container'>
                                <h1 class='display-4'>Congratulations!!</h1><br>
                                <p class='lead'>Your Application is Accepted. Please Visit the University
                                for Document verification and fee deposition.</p>
                                <br>
                                <p class='lead'> Your <b>APPLICATION NUMBER IS : ".$row['Student_id']."</b>. <br>It Will Be Asked
                                During Verification Of Documents.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col'></div>
        </div>    
        ";
    }



    else if($row['Status']=='Rejected')
    {
        echo"
    
        <div class='mid-page1'>
        <div class='row'>
            <div class='col'></div>
            <div class='col-sm-12-md-10'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='jumbotron jumbotron-fluid'>
                            <div class='container'>
                                <h1 class='display-4'>You've Already Applied</h1><br>
                                <p class='lead'>Your Application is Rejected .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col'></div>
        </div>    
        ";
    }
    

    else
    {

        


    echo"

    <div class='mid-page1'>
        <div class='row'>
            <div class='col'></div>
            <div class='col-sm-12-md-10'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='jumbotron jumbotron-fluid'>
                            <div class='container'>
                                <h1 class='display-4'>Admissions</h1><br>
                                <p class='lead'>Educating children is both a great responsibility and a 
                                great privilege. We need to put a lot of effort into making it work. 
                                A school where all students are treated equally. A place where topper 
                                in  math and science are not regarded as superior to those who excel in 
                                other subjects. A talented athlete is given numerous opportunities to 
                                play at the highest level and represent the country. A school with a 
                                large playground, numerous activities in and out of the classroom, and 
                                <strong>'NO UNHEALTHY COMPETITION.'</strong> An art of  state 
                                infrastructure that would instil a sense of pride and privilege in all 
                                of our young dynamic minds living in remote rural India. Our ultimate 
                                goal is for every student to outgrow us. We want them to be ready and 
                                able to take the next step, knowing who they are and what they excel at. 
                                Ours is the caring preparation, there is to go out and make a difference.
                                </p>
                            </div>
                        </div>
                       
                        <form class='grad' action='./admission-form.php'>
                            <input class='btn' type='submit' value='Apply Now 🚀'>
                        </form>

                    </div>
                </div>
            </div>
            <div class='col'></div>
        </div>
    </div>
    ";

    }

    ?>


    
</body>
</html>

    
