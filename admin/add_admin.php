<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="CSS/add_admin.css">
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
                    <li><a href="#">Add New Admin</a></li>
                    <li><a href="addBurgerTable.php">Burger Table</a></li>
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
                <h2>Add Admin</h2>
                <div class="profile">
                </div>
            </header>

            <!-- Content Section -->
            <section class="content">
                <div class="data-section">
                    <h3>Add Admin</h3>
                    <form action="add_admin_action.php" method="POST" class="admin-form">
                        <div class="form-group">
                            <label for="admin-email">Admin Email:</label>
                            <input type="email" id="admin-email" name="txt_email" placeholder="Enter admin email" required>
                        </div>
                        <div class="form-group">
                            <label for="admin-password">Password:</label>
                            <input type="password" id="admin-password" name="txt_password" placeholder="Enter password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-btn">Add Admin</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>
</html>
