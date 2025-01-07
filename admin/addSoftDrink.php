<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Drinks</title>
    <link rel="stylesheet" href="CSS/softDrink.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h1>Admin</h1>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="add_admin.php">Add New Admin</a></li>
                    <li><a href="addBurgerTable.php">Burger Table</a></li>
                    <li><a href="addPastaTable.php">Pasta Table</a></li>
                    <li><a href="addDessert.php">Dessert Table</a></li>
                    <li><a href="addFries.php">Fries Table</a></li>
                    <li><a href="#">Soft Drinks Table</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="main">
            <!-- Topbar -->
            <header class="topbar">
                <h2>Add Drinks</h2>
                <div class="profile">
                </div>
            </header>

            <!-- Content Section -->
            <section class="content">
                <div class="data-section">
                    <h3>Add Drinks</h3>
                    <form action="addDrinks_action.php" method="POST" enctype="multipart/form-data" class="admin-form">
                    <div class="form-group">
                    <label for="drink-name">Drink Name:</label>
                    <input type="text" id="drinks-name" name="txt_name" placeholder="Enter drink name" required>
                </div>
                <div class="form-group">
                    <label for="drink-price">Drink Price:</label>
                    <input type="number" id="drink-price" name="txt_price" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="drink-image">Upload Image:</label>
                    <input type="file" id="drink-image" name="images[]" accept="image/*" multiple>
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-btn">Add Drink</button>
                </div>
            </form>

                </div>
            </section>
        </div>
    </div>
</body>
</html>
