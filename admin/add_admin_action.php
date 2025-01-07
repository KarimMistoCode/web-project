<?php
include("inc/connection.php");
$email = $_POST['txt_email'];
$password = $_POST['txt_password'];

$sql = "INSERT INTO  advisor(db_email,db_password) VALUES('$email','$password')";

mysqli_query($con, $sql) or die(mysqli_error($con));
header("location:add_admin.php");
?>