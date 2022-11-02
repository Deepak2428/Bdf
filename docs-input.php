<?php

session_start();


if(!isset($_SESSION['username']))
{
    header('location:StudentLogin.php');
}
else
{
    if(isset($_POST['submit']))
    {
        $file=$_FILES['doc']['tmp_name'];
        $filename=$_FILES['doc']['name'];   
        $folder="Documents/STUDENT-ID=".$_SESSION["id"]."/";
        move_uploaded_file($file,$folder.$filename);
        echo "uploaded succesfully";
        header("location:docs-input.php");   
    }

else
    {
        //echo "error uploading Documents. Please Contact Administrator";
    }

}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
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
                <h1>NAVADHA SCHOOL</h1>
                <h3>ONLINE PORTAL</h3>
            </div>
        </div>
        <br>
    </div>


    <div class="row">
        <div class="col"></div>
        <div class="col-9">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Documents Upload</h1><br>
                    <br>
                    <p class="lead"><b>NOTE :-</b>The following Documents must be present
                        with the student for physical verification </p>
                    <hr>
                    <br>
                </div>
            </div>
            

                <!--
                <select>
                    <option>--SELECT THE DOCUMENT--</option>
                    <option>AADHAR CARD</option>
                    <option>X MARKSHEET</option>
                    <option>X PASS CERTIFICATE</option>
                    <option>XII TH MARKSHEET</option>
                    <option>XII PASS CERTIFICATE</option>
                    <option>TRANSFER CERTIFICATE</option>
                </select>

                <input type="file" name="doc">
                -->

                <ol type="i">
                    
                    <form action="docs-input.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-4">
                                <li><h6> PHOTOGRAPH:</h6></li>
                            </div>
                            <div class="col-sm-4">
                                <input type="file" name="doc" id="image" required>
                            </div>
                            <div class='col-sm-4'>
                                <input type='submit' name='submit' value='UPLOAD' > 
                            </div>
                        </div>
                        <hr>
                    </form>
                    <form action="docs-input.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-4">
                                <li><h6> AADHAR CARD:</h6></li>
                            </div>
                            <div class="col-sm-4">
                                <input type="file" name="doc" id="aadhar" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="submit" name="submit" value="UPLOAD" > 
                            </div>
                        </div>
                        <hr>
                    </form>
                        <?php
                            if($_SESSION["tenth"]=="true") // if Xth is passed then only asking for docs
                            {
                                echo "
                                <form action='docs-input.php' method='post' enctype='multipart/form-data'>
                                    <div class='row'>
                                        <div class='col-sm-4'>
                                            <li><h6>X TH-MARKSHEET :</h6></li>
                                        </div>
                                        <div class='col-sm-4'>
                                            <input type='file' name='doc' required>
                                        </div>
                                        <div class='col-sm-4'>
                                            <input type='submit' name='submit' value='UPLOAD' > 
                                        </div>
                                    </div>
                                    <hr>
                                </form>
                                <form action='docs-input.php' method='post' enctype='multipart/form-data'>
                                    <div class='row'>
                                        <div class='col-sm-4'>
                                            <li><h6>X TH-PASS CERTIFICATE:</h6></li>
                                        </div>
                                        <div class='col-sm-4'>
                                            <input type='file' name='doc' required>
                                        </div>
                                        <div class='col-sm-4'>
                                            <input type='submit' name='submit' value='UPLOAD' > 
                                        </div>
                                    </div>
                                    <hr>
                                </form>
                                ";
                            }
                        ?>

                </ol>
                <div class="row">
                    <div class="col">
                        <form action="final.php">
                            <input class="btn" type="submit" >
                        </form>
                    </div>
                </div>
            
        </div>
        <div class="col"></div>
    </div>

    