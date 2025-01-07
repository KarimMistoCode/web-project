<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Table</title>
    <link rel="stylesheet" href="css/book.css">
</head>
<body>

<div class="container">
    <h2>Book a Table</h2>
    <form action="book_action.php" method="POST">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" name="txtFullname" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" i name="txtEmail" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="date">Reservation Date:</label>
            <input type="date"  name="txtDate" required>
        </div>
        <div class="form-group">
            <label for="time">Reservation Time:</label>
            <input type="time"  name="txtTime" required>
        </div>
        <div class="form-group">
            <label for="people">Number of People:</label>
            <select  name="txtSelect" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <button type="submit">Book Now</button>
    </form>
</div>
<div class="back">
    <button><a href="home.php">Back</a></button>
</div>

</body>
</html>