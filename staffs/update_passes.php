<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"Update tblpass set PassCost=PassCost-40 where ID='$vid'");

 if ($ret) {
     echo '<script>alert("Receipt has been created.")</script>';
echo "<script>window.location.href ='add-passes.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
	
?>