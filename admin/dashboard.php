<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="dashboard-container">
       
        <aside class="sidebar">
            <div class="logo">
                <h1>Admin</h1>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="add_admin.php">Add New Admin</a></li>
                    <li><a href="addBurgerTable.php">Burger Table</a></li>
                    <li><a href="addPastaTable.php">Pasta Table</a></li>
                    <li><a href="addDessert.php">Dessert Table</a></li>
                    <li><a href="addFries.php">Fries Table</a></li>
                    <li><a href="addSoftDrink.php">Soft Drinks Table</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </aside>

       
        <div class="main">
            
            <header class="topbar">
                <h2>Dashboard</h2>
                <div class="profile">
                </div>
            </header>

        
            <section class="content">
                <div class="data-section">
                    <div class="data-table">
                        <h3>Book A Table Info</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Nb of Person</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                
                            </thead>

                            
                            <tbody>
                               
 <?php
 include "inc/connection.php";
 
 session_start();
 
 if(!isset($_SESSION['user']))
 header("location:login.php?error=2");
 
 $sql="SELECT * FROM members";
 
 $result=mysqli_query($con,$sql);
 
 while($row=mysqli_fetch_assoc($result)){
 
  echo"   <tr>
           <td>".$row['db_id']."</td>
             <td>".$row['db_fullName']."</td>
             <td>".$row['db_email']."</td>
             <td>".$row['db_date']."</td>
             <td>".$row['db_time']."</td>
             <td>".$row['db_select']."</td>
              <td><a href=edit.php?ID=".$row['db_id']."><img src='images/pen.png' width=35px></a></td>
             <td><a href=delete.php?ID=".$row['db_id']."><img src='images/bin.png' width=35px></a></td>
 
     </tr>  ";
 
 }
 ?>
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>