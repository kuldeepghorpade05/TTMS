<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $semail=$_POST['semail'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tblstaff where  StaffEmail='$semail' && StaffPassword='$password'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['ttmssid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Toll Tax Management System || Login Page</title>

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
  <div class="login-logo">
    <a href="index.php"><strong style="color: black">Toll Tax Management System</strong></a>
  </div>
  <h2 class="form-heading"> Staff login</h2>
  <div class="app-cam">
	  <form method="post">
		<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
    <input type="text" class="text" name="semail" placeholder="Staff Email" required="true">
		<input type="password" name="password" class="text" placeholder="Password" required="true">
		<div class="submit"><input type="submit"  value="Login" name="login"></div>
		
		<ul class="new text-center">
			<li class=""><p>Having Trouble in Login ? <a href="forgot-password.php">Reset Password</a></p></li>
			<li class=""><p><a href="../index.php">Back to Home</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   <?php include_once('includes/footer.php');?>
</body>
</html>
