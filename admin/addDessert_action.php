<?php
include("inc/connection.php");
$dessertName = $_POST['txt_name'];
$dessertPrice = $_POST['txt_price'];

$sql = "INSERT INTO  dessert_info(db_dessert_name, db_dessert_price) VALUES('$dessertName','$dessertPrice')";

mysqli_query($con, $sql) or die(mysqli_error($con));
$dessert_id = mysqli_insert_id($con); 


if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['images']['name'][$key];
        $file_tmp = $_FILES['images']['tmp_name'][$key];
        $upload_path = "images/" . $file_name;

        if (move_uploaded_file($file_tmp, $upload_path)) {
            $query="INSERT INTO dessert (img_id , img) values ('$dessert_id' , '$file_name')"; 
            mysqli_query($con, $query);
        }
    }
}
header("location:addDessert.php");
?>