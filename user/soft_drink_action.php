<?php
include("inc/connection.php");

$sql = "SELECT * FROM soft_drink_info";
$result = mysqli_query($con, $sql);
?>

<div class="menu_container">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $drink_id = $row['db_id'];
        $image_query = "SELECT * FROM soft_drink WHERE img_id = $drink_id";
        $image_result = mysqli_query($con, $image_query);
        $drink_images = [];

        while ($image_row = mysqli_fetch_assoc($image_result)) {
            $drink_images[] = $image_row['img'];
        }
        ?>
        <div class="block">
            <div class="img_menu">
                <?php
                if (!empty($drink_images)) {
                    echo '<img src="images/' . $drink_images[0] . '" alt="' . htmlspecialchars($row['db_soft_drink_name']) . '">';
                } else {
                    echo '<img src="images/default-drink.jpg" alt="Default Drink Image">';
                }
                ?>
            </div>
            <div class="info">
                <h1><?php echo htmlspecialchars($row['db_soft_drink_name']); ?></h1>
                <p>Price: <b><?php echo number_format($row['db_soft_drink_price'], 2); ?></b> $</p>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<?php
mysqli_close($con);
?>
