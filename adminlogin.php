<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/logoupdated.png" sizes="32x32" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminlogin.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Admin Login</title>
</head>
<body style="background-image: url('images/foggy-birds.png');">
    <div class="login-container">
        <div class="login-form">
            <h2>Admin</h2>
            <form action="#" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btncss">Login</button>
            </form>
        </div>
        <div class="login-image">
            <img id="loginimage" src="images/elnido2.jpg">
        </div>
    </div>
</body>
</html>
