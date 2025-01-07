<?php
include("inc/connection.php");

$sql = "SELECT * FROM burger_info";
$result = mysqli_query($con, $sql);
?>

<div class="menu_container">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $burger_id = $row['db_id'];
        $image_query = "SELECT * FROM burger WHERE img_id = $burger_id";
        $image_result = mysqli_query($con, $image_query);
        $burger_images = [];

        while ($image_row = mysqli_fetch_assoc($image_result)) {
            $burger_images[] = $image_row['img'];
        }
        ?>
        <div class="block">
            <div class="img_menu">
                <?php
                if (!empty($burger_images)) {
                    echo '<img src="images/' . $burger_images[0] . '" alt="' . htmlspecialchars($row['db_burger_name']) . '">';
                } else {
                    echo '<img src="images/default-burger.jpg" alt="Default Burger Image">';
                }
                ?>
            </div>
            <div class="info">
                <h1><?php echo htmlspecialchars($row['db_burger_name']); ?></h1>
                <p>Price: <b><?php echo number_format($row['db_burger_price'], 2); ?></b> $</p>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<?php
mysqli_close($con);
?>