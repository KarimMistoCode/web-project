<?php
include("inc/connection.php");
$pastaName = $_POST['txt_name'];
$pastaPrice = $_POST['txt_price'];

$sql = "INSERT INTO  pasta_info(db_pasta_name, db_pasta_price) VALUES('$pastaName','$pastaPrice')";

mysqli_query($con, $sql) or die(mysqli_error($con));
$pasta_id = mysqli_insert_id($con); 


if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['images']['name'][$key];
        $file_tmp = $_FILES['images']['tmp_name'][$key];
        $upload_path = "images/" . $file_name;

        if (move_uploaded_file($file_tmp, $upload_path)) {
            $query="INSERT INTO pasta (img_id , img) values ('$pasta_id' , '$file_name')"; 
            mysqli_query($con, $query);
        }
    }
}
header("location:addPastaTable.php");
?>