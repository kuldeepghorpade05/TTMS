<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['ttmsaid'];
    $sname=$_POST['sname'];
  $smobnumb=$_POST['smobnumb'];
  $semail=$_POST['semail'];
  $gender=$_POST['gender'];
  $saddress=$_POST['saddress'];
  $sdob=$_POST['sdob'];
  $spassword=md5($_POST['spassword']);
  $staffid = mt_rand(100000000, 999999999);
  $ret=mysqli_query($con, "select StaffEmail from tblstaff where StaffEmail='$semail' || StaffMobilenumber='$smobnumb'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg="This email or Contact Number already associated with another account";
    }
    else{
  
     $query=mysqli_query($con,"insert into tblstaff(StaffID,StaffName,StaffMobilenumber,StaffEmail,StaffGender,StaffAddress,StaffDOB,StaffPassword) value('$staffid','$sname','$smobnumb','$semail','$gender','$saddress','$sdob','$spassword')");
    if ($query) {
    echo '<script>alert("Staff detail has been added.")</script>';
	echo "<script>window.location.href ='add-staff.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
  }
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Toll Tax Management System || Register Page</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo" style="padding-bottom:0px;">
    <a href="index.php"><strong style="color: black">Toll Tax Management System</strong></a>	
  <h2 class="form-heading"> User Registration</h2>
  </div>
  <div class="app-cam" style="width:40%;">
	<form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post">
          <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
          <fieldset>
            
            <div class="form-group">
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" placeholder="Enter Name" required="true" id="sname" name="sname" value="">
            </div>
            <div class="form-group">
              <input type="text" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" placeholder="Enter Mobile No." id="smobnumb" name="smobnumb" value="" required="true" maxlength="10" pattern="[0-9]+">
            </div>
            <div class="form-group">
              <input style="background-color:#222224;" type="email" class="form-control1 ng-invalid ng-invalid-required ng-touched" placeholder="Enter Email Address" id="semail" name="semail"value="" required="true" onblur="checkstaffemail(this.value)">
            </div>
            <div class="form-group">
              <input type="password" id="spassword" name="spassword" placeholder="Enter Password" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" value="" required="true">
            </div>
            <div class="form-group">
              <label class="control-label">Staff Gender: </label>
              <input type="radio" name="gender" id="gender" value="Female" checked="true">Female
              <input type="radio" name="gender" id="gender" value="Male">Male
              <input type="radio" name="gender" id="gender" value="Other">Other
              
             
            </div>
            <div class="form-group">
              <textarea style="background-color:#222224;" type="text" id="saddress" name="saddress" placeholder="Enter Full Address" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" value="" required="true" rows="12" cols="4"></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">Enter Date Of Birth</label>
              <input style="background-color:#222224;" type="date" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" id="sdob" name="sdob" value="" required="true">
            </div>
           
          
            <div class="form-group">
             <p style="text-align: center;"> <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button></p>
             
            </div>
          </fieldset>
		  <ul class="new text-center">
			<li class=""><p>Having Trouble in Login ? <a href="forgot-password.php">Reset Password</a></p></li>
			<li class=""><p>Already Registered ? <a href="index.php">Login Here</a></p></li>
			<li class=""><p><a href="../index.php">Back to Home</a></p></li>
			<div class="clearfix"></div>
		</ul>
        </form>
  
  
  </div>
   <?php //include_once('includes/footer.php');?>
</body>
</html>
