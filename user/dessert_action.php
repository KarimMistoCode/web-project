<?php
include("inc/connection.php");

$sql = "SELECT * FROM dessert_info";
$result = mysqli_query($con, $sql);
?>

<div class="menu_container">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $dessert_id = $row['db_id'];
        $image_query = "SELECT * FROM dessert WHERE img_id = $dessert_id";
        $image_result = mysqli_query($con, $image_query);
        $dessert_images = [];

        while ($image_row = mysqli_fetch_assoc($image_result)) {
            $dessert_images[] = $image_row['img'];
        }
        ?>
        <div class="block">
            <div class="img_menu">
                <?php
                if (!empty($dessert_images)) {
                    echo '<img src="images/' . $dessert_images[0] . '" alt="' . htmlspecialchars($row['db_dessert_name']) . '">';
                } else {
                    echo '<img src="images/default-dessert.jpg" alt="Default Dessert Image">';
                }
                ?>
            </div>
            <div class="info">
                <h1><?php echo htmlspecialchars($row['db_dessert_name']); ?></h1>
                <p>Price: <b><?php echo number_format($row['db_dessert_price'], 2); ?></b> $</p>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<?php
mysqli_close($con);
?>
