<?php
include("inc/connection.php");
$drinkName = $_POST['txt_name'];
$drinkPrice = $_POST['txt_price'];

$sql = "INSERT INTO  soft_drink_info(db_soft_drink_name, db_soft_drink_price) VALUES('$drinkName','$drinkPrice')";

mysqli_query($con, $sql) or die(mysqli_error($con));
$drink_id = mysqli_insert_id($con); 


if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['images']['name'][$key];
        $file_tmp = $_FILES['images']['tmp_name'][$key];
        $upload_path = "images/" . $file_name;

        if (move_uploaded_file($file_tmp, $upload_path)) {
            $query="INSERT INTO soft_drink (img_id , img) values ('$drink_id' , '$file_name')"; 
            mysqli_query($con, $query);
        }
    }
}
header("location:addSoftDrink.php");
?>