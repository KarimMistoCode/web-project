<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Burger</title>
    <link rel="stylesheet" href="CSS/burger.css">
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
                    <li><a href="#">Burger Table</a></li>
                    <li><a href="addPastaTable.php">Pasta Table</a></li>
                    <li><a href="addDessert.php">Dessert Table</a></li>
                    <li><a href="addFries.php">Fries Table</a></li>
                    <li><a href="addSoftDrink.php">Soft Drinks Table</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="main">
            <!-- Topbar -->
            <header class="topbar">
                <h2>Add Burger</h2>
                <div class="profile">
                </div>
            </header>

            <!-- Content Section -->
            <section class="content">
                <div class="data-section">
                    <h3>Add Burger</h3>
                    <form action="addBurger_action.php" method="POST" enctype="multipart/form-data" class="admin-form">
                    <div class="form-group">
                    <label for="burger-name">Burger Name:</label>
                    <input type="text" id="burger-name" name="txt_name" placeholder="Enter burger name" required>
                </div>
                <div class="form-group">
                    <label for="burger-price">Burger Price:</label>
                    <input type="number" id="burger-price" name="txt_price" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="burger-image">Upload Image:</label>
                    <input type="file" id="burger-image" name="images[]" accept="image/*" multiple>
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-btn">Add Burger</button>
                </div>
            </form>

                </div>
            </section>
        </div>
    </div>
</body>
</html>
