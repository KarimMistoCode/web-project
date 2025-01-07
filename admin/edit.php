<?php
include("inc/connection.php");
session_start();

if (!isset($_SESSION['user'])) 
    header("location:login.php");

$artID = $_GET['ID']; 

$query = "SELECT * FROM members WHERE db_id = '$artID'";
$result = mysqli_query($con, $query);
$member = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['db_fullName'];
    $email = $_POST['db_email'];
    $date = $_POST['db_date'];
    $time = $_POST['db_time'];
    $select = $_POST['db_select'];

    $sql = "UPDATE members SET 
        db_fullName = '$fullName', 
        db_email = '$email', 
        db_date = '$date', 
        db_time = '$time', 
        db_select = '$select' 
        WHERE db_id = '$artID'";

    mysqli_query($con, $sql);

    header("Location: dashboard.php?message=Record updated");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <link rel="stylesheet" href="CSS/edit.css">
</head>
<body>
    <div class="form-container">
        <h2>Edit Member</h2>
        <form method="post">
            <input type="hidden" name="db_id" value="<?php echo $member['db_id']; ?>">
            <div>
                <label for="db_fullName">Full Name:</label>
                <input type="text" id="db_fullName" name="db_fullName" value="<?php echo $member['db_fullName']; ?>" required>
            </div>
            <div>
                <label for="db_email">Email:</label>
                <input type="email" id="db_email" name="db_email" value="<?php echo $member['db_email']; ?>" required>
            </div>
            <div>
                <label for="db_date">Date:</label>
                <input type="date" id="db_date" name="db_date" value="<?php echo $member['db_date']; ?>" required>
            </div>
            <div>
                <label for="db_time">Time:</label>
                <input type="time" id="db_time" name="db_time" value="<?php echo $member['db_time']; ?>" required>
            </div>
            <div>
                <label for="db_select">Number of Persons:</label>
                <input type="number" id="db_select" name="db_select" value="<?php echo $member['db_select']; ?>" required>
            </div>
            <div>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
