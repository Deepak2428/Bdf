<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ug Admission Form</title>
    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./Bootstrap/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
                    <h1 class="display-4">Admission Form</h1><br>
                    <hr>
                    <br>
                </div>
            </div>

            <form action="#" method="post" onsubmit="formValidate(event)">

                <div class="form-group">
                    <h6>First Name:</h6><input  class="form-control" id="fname" type="text" name="first-name" placeholder="First Name" required><span id="fname-error"></span>
                </div> 

                <div class="form-group">
                    <h6>Last Name:</h6><input class="form-control" id="lname" type="text" name="last-name" placeholder="Last Name" required><span id="lname-error"></span>
                </div> 

                <div class="form-group">
                    <h6>Fathers Name:</h6><input class="form-control" id="fathers-name" type="text" name="fathers-name" placeholder="Fathers Name" required><span id="fathersname-error"></span>
                </div> 

                <div class="form-group">
                    <h6>Mothers Name:</h6><input class="form-control" id="mothers-name" type="text" name="mothers-name" placeholder="Mothers Name" required><span id="mothersname-error"></span>
                </div> 

                <div class="form-group">
                    <h6>Mobile Number:</h6><input class="form-control" id="mobile-no" type="text" name="mob-no" placeholder="Mobile Number" required><span id="mobile-no-error"></span>
                </div> 

                <div class="form-group">
                    <h6>Alternate Mobile Number:</h6><input class="form-control" id="alternate-mobile-no" type="text" name="alternate-mob-no" placeholder="Alternate Mobile Number"><span id="alternate-mob-no-error"></span>
                </div> 

                <div class="form-group">
                    <h6>Email:</h6><input class="form-control" type="text" id="email" name="email" placeholder="Email" required>
                </div> 

                <div class="form-group">
                    <h6>Gender:</h6> 
                    <select name="gender" id="gender">
                        <option>---select Gender---</option>
                        <option>MALE</option>
                        <option>FEMALE</option>
                        <option>OTHER</option>

                    </select>
                </div> 
                <div class="form-group">
                    <h6>Class Admitting to :</h6>
                    <select onchange="addMarks()" name="class" id="class">
                        <option >-----Select------</option>
                        <option >Playgroup</option>
                        <option >Nursery</option>
                        <option >K.G</option>
                        <option >I</option>
                        <option >II</option>
                        <option >III</option>
                        <option >IV</option>
                        <option >V</option>
                        <option >VI</option>
                        <option >VII</option>
                        <option >VIII</option>
                        <option >IX</option>
                        <option >X</option>
                        <option >XI</option>
                        <option >XII</option>
                    </select>
                </div>
                <div class="form-group" id="Xth">
                </div>
                <div class="form-group">
                    <h6>Date OF Birth:</h6><input class="form-control" id="dob" type="date" name="Dob" placeholder="Date-of-birth" required>
                </div>
                <br>
                <div class="row">
                    <p>  Address<hr></p>
                </div>

                <div class="form-group">
                    <h6>Village/Town:</h6><input class="form-control" id="village" type="text" name="village" placeholder="Village/Town" required>
                </div>

                <div class="form-group">
                    <h6>City:</h6><input class="form-control" id="city" type="text" name="city" placeholder="City" required>
                </div>

                <div class="form-group">
                    <h6>District:</h6><input class="form-control" id="district" type="text" name="district" placeholder="District" required>
                </div>

                <div class="form-group">
                    <h6>State:</h6><input class="form-control" id="state" type="text" name="state" placeholder="State" required>
                </div>

                <div class="form-group">
                    <h6>Pincode:</h6><input class="form-control" id="pincode" type="text" name="pincode" placeholder="Pincode" required>
                </div>


                <div class="form-group">
                    <h6>Blood-Group:</h6>
                    <select name="blood-group" id="blood-group" >
                        <option>Select Your Blood Group</option>
                        <option>A+</option>
                        <option>B+</option>
                        <option>AB+</option>
                        <option>O+</option>
                        <option>A-</option>
                        <option>B-</option>
                        <option>AB-</option>
                        <option>O-</option>

                    </select>
                </div>

                <div class="form-group">
                    <h6>AADHAR Number:</h6><input class="form-control" id="aadhar-number" type="text" name="aadharnumber" placeholder="AADHAR NUMBER" required><span id="aadhar-error"></span>
                </div>
                <br>
                <div class="row">
                    <input class="btn" type="submit" value="Submit">
                </div>
                

            </form>

        </div>
        <div class="col"></div>

    </div>
    <br>

    <script>

        var flag=false; // to prevent from reading null values
        var flag2=false;
        
        function addMarks()  
        {
            alert("yo");
            var value=document.getElementById("class").value;
            if(value=='XI' || value=='XII')
            {
                if(flag2==false){
                    var newInput=document.createElement("div");
                    newInput.setAttribute("id","Xth_details");
                    newInput.innerHTML="<h6>School Name:</h6><input class='form-control' type='text' id='school' name='SchoolName' placeholder='School Name' required><br><h6>XTH-Score:</h6><input class='form-control' id='tenth-score' type='text' name='Xth-score' placeholder='XTH-Score' required>";
                    document.getElementById("Xth").appendChild(newInput);
                }
                flag=true;
                flag2=true;
            }
            else
            {
                if(flag==true)
                {
                    var remove=document.getElementById("Xth_details");
                    document.getElementById("Xth").removeChild(remove);
                    flag=false;
                    flag2=false;
                }
                
            }
        }

        function formValidate(event)
        {
            var errorflag=false;
            event.preventDefault();
            var fname=document.getElementById("fname").value;
            var lname=document.getElementById("lname").value;
            var fathersname=document.getElementById("fathers-name").value;
            var mothersname=document.getElementById("mothers-name").value;
            var mobile_no=document.getElementById("mobile-no").value;
            var alternate_mobile_no=document.getElementById("alternate-mobile-no").value;
            var email=document.getElementById("email").value;
            var gender=document.getElementById("gender").value;
            var Class=document.getElementById("class").value;
            var school="";
            var tenthscore="";
            var x=document.getElementById("school");
            if(x!=null)
            {
                school=x.value;
            }
            else
            {
                school="";
            }
            var y=document.getElementById("tenth-score");
            if(y!=null)
            {
                tenthscore=y.value;
            }
            else
            {
                tenthscore="";
            }
            var dob=document.getElementById("dob").value;
            var village=document.getElementById("village").value;
            var city=document.getElementById("city").value;
            var district=document.getElementById("district").value;
            var state=document.getElementById("state").value;
            var pincode=document.getElementById("pincode").value;
            var bloodgroup=document.getElementById("blood-group").value;
            var aadharCard=document.getElementById("aadhar-number").value;

            if(!fname.match(/^[a-zA-Z ]+$/))
            {
                var x=document.getElementById("fname-error");
                x.innerHTML="<p class='lead' style='color:red;display:inline-block;'>*Invalid First Name</p>";
                errorflag=true;
            }
            else
            {
                var x=document.getElementById("fname-error");
                x.innerHTML="";
            }

            if(!lname.match(/^[a-zA-Z ]+$/))
            {
                var x=document.getElementById("lname-error");
                x.innerHTML="<p class='lead' style='color:red;display:inline-block;'>*Invalid Last Name</p>";
                errorflag=true;
            }
            else
            {
                var x=document.getElementById("lname-error");
                x.innerHTML="";
            }

            if(!fathersname.match(/^[a-zA-Z ]+$/))
            {
                var x=document.getElementById("fathersname-error");
                x.innerHTML="<p class='lead' style='color:red;display:inline-block;'>*Invalid Fathers Name</p>";
                errorflag=true;
            }
            else
            {
                var x=document.getElementById("fathersname-error");
                x.innerHTML="";
            }

            if(!mothersname.match(/^[a-zA-Z ]+$/))
            {
                var x=document.getElementById("mothersname-error");
                x.innerHTML="<p class='lead' style='color:red;display:inline-block;'>*Invalid Mothers Name</p>";
                errorflag=true;
            }
            else
            {
                var x=document.getElementById("mothersname-error");
                x.innerHTML="";
            }

            if(!mobile_no.match(/^[0-9]{10}$/))
            {
                var x=document.getElementById("mobile-no-error");
                x.innerHTML="<p class='lead' style='color:red;display:inline-block;'>*Invalid Mobile Number</p>";
                errorflag=true;
            }
            else
            {
                var x=document.getElementById("mobile-no-error");
                x.innerHTML="";
            }

            if(!alternate_mobile_no.match(/^[0-9]{10}$/))
            {
                var x=document.getElementById("alternate-mob-no-error");
                x.innerHTML="<p class='lead' style='color:red;display:inline-block;'>*Invalid Mobile Number</p>";
                errorflag=true;
            }
            else
            {
                var x=document.getElementById("alternate-mob-no-error");
                x.innerHTML="";
            }

            if(!aadharCard.match(/^[0-9]{12}$/))
            {
                var x=document.getElementById("aadhar-error");
                x.innerHTML="<p class='lead' style='color:red;display:inline-block;'>*Invalid Aadhar Number</p>";
                errorflag=true;
            }
            else
            {
                var x=document.getElementById("aadhar-error");
                x.innerHTML="";
            }

            if (errorflag==false)
            {
                var formdata={};
                formdata.firstname=fname;
                formdata.lastname=lname;
                formdata.fathersname=fathersname;
                formdata.mothersname=mothersname;
                formdata.mobilenumber=mobile_no;
                formdata.alternate_mobile_no=alternate_mobile_no;
                formdata.email=email;
                formdata.gender=gender;
                formdata.class=Class;
                formdata.dob=dob;
                formdata.school=school;
                formdata.tenthscore=tenthscore;
                formdata.address=village+", "+city+", "+district+", "+state+", "+pincode;
                formdata.bloodgroup=bloodgroup;
                formdata.aadharnumber=aadharCard;
                $.ajax(
                {
                    url:"admission-form-backend.php",
                    method:"post",
                    data: {data: JSON.stringify(formdata)},
                    success:function(res){
                        window.location.href="docs-input.php"; // on success redirecting to next page. 
                    }
                })
            }

        }

    </script>

</body>
</html>