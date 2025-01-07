<?php
include "inc/connection.php";
$fullname=$_POST['txtFullname'];
$email=$_POST['txtEmail'];
$date=$_POST['txtDate'];
$time=$_POST['txtTime'];
$select=$_POST['txtSelect'];

$sql="INSERT INTO members(db_fullName,db_email,db_date,db_time,db_select) VALUES 
('$fullname','$email','$date','$time','$select')";

mysqli_query($con,$sql) or die(mysqli_error($con));

header("location:book.php");
?>