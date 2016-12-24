<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bakery</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login-vertical-horizontal.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="login-card"><img src="images/logo.png" class="profile-img-card">
        <form class="form-signin" method="POST" action="includes/login.inc.php"><span class="reauth-email"> </span>
            <input class="form-control" type="text" required="" placeholder="Username" autofocus="" id="username" name="username">
            <input class="form-control" type="password" required="" placeholder="Password" id="password" name="password">
            <div class="checkbox"></div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" name='login' value='Login' type="submit">Login</button>
        </form>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>