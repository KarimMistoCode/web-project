<?php
include("inc/connection.php");
$burgerName = $_POST['txt_name'];
$burgerPrice = $_POST['txt_price'];

$sql = "INSERT INTO  burger_info(db_burger_name, db_burger_price) VALUES('$burgerName','$burgerPrice')";

mysqli_query($con, $sql) or die(mysqli_error($con));
$burger_id = mysqli_insert_id($con); 


if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['images']['name'][$key];
        $file_tmp = $_FILES['images']['tmp_name'][$key];
        $upload_path = "images/" . $file_name;

        if (move_uploaded_file($file_tmp, $upload_path)) {
            $query="INSERT INTO burger (img_id , img) values ('$burger_id' , '$file_name')"; 
            mysqli_query($con, $query);
        }
    }
}
header("location:addBurgerTable.php");
?>