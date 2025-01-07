<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<style>
    body{
        background-image: url(images/admin.jpg);
    }
</style>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="loginAction.php" method="POST">
        <div class="form-group">
            <label for="Email">Email:</label>
            <input type="text" name="txtEmail" placeholder="Enter your Email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="txtPassword" placeholder="Enter your password" required>
        </div>
        <button type="submit">Login</button>
    </form>

</div>



</body>
</html>