<?php
include("inc/connection.php");

$sql = "SELECT * FROM pasta_info";
$result = mysqli_query($con, $sql);
?>

<div class="menu_container">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $pasta_id = $row['db_id'];
        $image_query = "SELECT * FROM pasta WHERE img_id = $pasta_id";
        $image_result = mysqli_query($con, $image_query);
        $pasta_images = [];

        while ($image_row = mysqli_fetch_assoc($image_result)) {
            $pasta_images[] = $image_row['img'];
        }
        ?>
        <div class="block">
            <div class="img_menu">
                <?php
                if (!empty($pasta_images)) {
                    echo '<img src="images/' . $pasta_images[0] . '" alt="' . htmlspecialchars($row['db_pasta_name']) . '">';
                } else {
                    echo '<img src="images/default-pasta.jpg" alt="Default Pasta Image">';
                }
                ?>
            </div>
            <div class="info">
                <h1><?php echo htmlspecialchars($row['db_pasta_name']); ?></h1>
                <p>Price: <b><?php echo number_format($row['db_pasta_price'], 2); ?></b> $</p>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<?php
mysqli_close($con);
?>
