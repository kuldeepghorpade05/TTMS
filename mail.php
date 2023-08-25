<?php
$con=mysqli_connect("localhost","root","","ttmsdb");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$query="insert into contacthome(name,email,subject,message)values('$name','$email','$subject','$message')";
            $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Message sent Successfully.')</script>";
            echo "<script>window.open('contact.php','_self')</script>";
            }
            
?>