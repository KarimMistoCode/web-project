<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasta Page</title>
    <link rel="stylesheet" href="css/allMenu.css">
</head>
<body>
    <div class="header">
        <div class="nav_part_left">
            <img src="images/dish.png" alt="Dish Icon">
            <b>K.M_Restaurant</b>
        </div>
        <div class="nav_part_right">
            <span><a href="home.php">Home Page</a></span>
            <span><a href="menu.php">Menu Page</a></span>
            <span><a href="book.php">Book a Table</a></span>
            
        </div>
    </div>

    <div class="title">
        <h1>Types OF Pasta:</h1>
    </div>
    <div class="menu_container">
        <div class="block">
            <div class="img_menu">
            </div>
            <div class="info">
            </div>
        </div>
        <?php
        include('pasta_action.php');
        ?>
    </div>

    <button><a href="menu.php">Back</a></button>

    <footer>
        <div class="footer">
            <div class="logo" width="100%">
                <img src="images/facebook.webp" alt="Facebook">
                <img src="images/instagramm.png" alt="Instagram">
                <img src="images/twitter.png" alt="Twitter">
                <img src="images/youtubee.png" alt="YouTube">
            </div>
            <div class="nav_part1">
                <span><a href="index.php">Home Page</a></span>
                <span><a href="menu.php">Menu Page</a></span>
                <span><a href="contact.php">Contact us</a></span>
            </div>
            <div class="footer-buttom">
                <span>CopyRight &copy; Designed by Karim Misto</span>
            </div>
        </div>
    </footer>
</body>
</html>
