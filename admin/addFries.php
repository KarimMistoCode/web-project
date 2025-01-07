<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Fries</title>
    <link rel="stylesheet" href="CSS/friesTable.css">
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
                    <li><a href="#">Fries Table</a></li>
                    <li><a href="addSoftDrink.php">Soft Drinks Table</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="main">
            <!-- Topbar -->
            <header class="topbar">
                <h2>Add Fries</h2>
                <div class="profile">
                </div>
            </header>

            <!-- Content Section -->
            <section class="content">
                <div class="data-section">
                    <h3>Add Fries</h3>
                    <form action="addFries_action.php" method="POST" enctype="multipart/form-data" class="admin-form">
                    <div class="form-group">
                    <label for="fries-name">Fries Name:</label>
                    <input type="text" id="fries-name" name="txt_name" placeholder="Enter fries name" required>
                </div>
                <div class="form-group">
                    <label for="fries-price">Fries Price:</label>
                    <input type="number" id="fries-price" name="txt_price" placeholder="Enter Price" required>
                </div>
                <div class="form-group">
                    <label for="fries-image">Upload Image:</label>
                    <input type="file" id="fries-image" name="images[]" accept="image/*" multiple>
                </div>
                <div class="form-group">
                    <button type="submit" class="submit-btn">Add Fries</button>
                </div>
            </form>

                </div>
            </section>
        </div>
    </div>
</body>
</html>
