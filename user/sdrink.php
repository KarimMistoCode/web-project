<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks Page </title>
    <link rel="stylesheet" href="css/allMenu.css">
</head>
<body>
    <div class="header">
        <div class="nav_part_left">
            <img src="images/dish.png" >
             <b>K.M_Restaurant</b>
             </div>
             <div class="nav_part_right">
        <span><a href="home.php">Home Page</a></span>
        <span><a href="menu.php">Menu Page</a></span>
        <span><a href="book.php">Book a Table</a></span>
 
    </div>
</div>

<div class="title">
    <h1>Water: </h1>
</div>
   <div class="menu_container">
     <div class="block">
       <div class="img_menu">
       <img src="images/water1.jpg" width="00px">
       </div>
    <div class="info">
        <h1>Small water</h1>
    <p >Price:<b>1.00</b>$</p>
    </div>
  </div>

  <div class="block">
    <div class="img_menu">
     <img src="images/water2.jpg">
     </div>
      <div class="info">
          <h1>Big Water</h1>
          <p >Price:<b>2.00</b>$</p>
        </div>
    </div>
</div>

    <div class="title">
        <h1>Soft Drinks: </h1>
    </div>
    <div class="menu_container">
     <div class="block">
       <div class="img_menu">
       </div>
    <div class="info">
    </div>
    
  </div>
  <?php
    include('soft_drink_action.php');
    ?>
  </div>


<button ><a href="menu.php">Back</a></button>

<footer>
    <div class="footer">
      <div class="logo" width="100%">
             <img src="images/facebook.webp">
              <img src="images/instagramm.png">
              <img src="images/twitter.png">
              <img src="images/youtubee.png"> 
       </div>
       <div class="nav_part1">
             <span> <a href="index.php">Home Page</a> </span>
             <span> <a href="menu.php">Menu Page</a></span>
             <span> <a href="contact.php">Contact us</a></span>
         </div>
      <div class="footer-buttom">
        <span>CopyRight &copy; Disgned by Karim Misto</span>
      </div>
    </div>
      </footer>
</body>
</html>