<?php
include 'server.php';
include 'insertable/userlogin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reg system</title>
    <link rel="stylsheet" href="style_1.css">
</head>
<body>
    <div class="header"></div>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <?php include('errors.php') ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>Not yet a member?
            <a href="register.php">Sign up</a>
        </p>
        <a href="home.php">Go back home</a>
    </form>
</body>
</html>
