<?php
session_start();
include "inc/connection.php";

$email=$_POST['txtEmail'];
$password=$_POST['txtPassword'];

$sql="SELECT * FROM advisor WHERE db_email='$email' AND db_password='$password'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    $_SESSION['user']=$email;// user ana atyta asem
    header("location:dashboard.php");
}
else{
    header("location:login.php");
}
?>