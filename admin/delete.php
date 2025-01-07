<?php
session_start();

if(!isset($_SESSION['user']))// if not there any value
header("location:login.php?");


include "inc/connection.php";
$artID=$_GET['ID'];

$sql="DELETE FROM members WHERE db_id='$artID'";

mysqli_query($con,$sql);

header("Location:dashboard.php");

?>

