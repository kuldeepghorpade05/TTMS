<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$vid=$_GET['editid'];
$ret=mysqli_query($con,"delete from tbltollfare where ID='$vid'");

 if ($ret) {
     echo '<script>alert("Toll Fare Record Deleted")</script>';
echo "<script>window.location.href ='manage-toll-fare.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
	
?>