<?php
include("inc/connection.php");
$friesName = $_POST['txt_name'];
$friesPrice = $_POST['txt_price'];

$sql = "INSERT INTO  fries_info(db_fries_name, db_fries_price) VALUES('$friesName','$friesPrice')";

mysqli_query($con, $sql) or die(mysqli_error($con));
$fries_id = mysqli_insert_id($con); 


if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['images']['name'][$key];
        $file_tmp = $_FILES['images']['tmp_name'][$key];
        $upload_path = "images/" . $file_name;

        if (move_uploaded_file($file_tmp, $upload_path)) {
            $query="INSERT INTO fries (img_id , img) values ('$fries_id' , '$file_name')"; 
            mysqli_query($con, $query);
        }
    }
}
header("location:addFries.php");
?>