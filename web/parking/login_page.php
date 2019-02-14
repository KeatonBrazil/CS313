<?php

require "parking_db.php";
$db = get_db();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Parking | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <style>

        </style>
        <script></script>
    </head>
    <body>
        <div>
            <header>

            </header>        
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                <li class="active"><a href="login_page.php">Login</a></li>
                <li><a href="sign_up.php">Signup</a></li>
                <li><a href="">Forgot Password?</a></li>
                </ul>
            </div>
        </nav>       
        <div class="">
            <form action="enter_info.php">
                <input type="text" placeholder="Enter Username">
                <input type="text" placeholder="Enter Password">
                <input type="submit" value="Login">
            </form>
            <a href="sign_up.php">Signup!</a>
            <a href="">Forgot Password?</a>
        </div>
        
    </body>
</html>