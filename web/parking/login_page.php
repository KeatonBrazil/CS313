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
        <link rel="stylesheet" href="parking.css">
        <style>

        </style>
        <script></script>
    </head>
    <body>
        <div>
            <header class="parking_center">
                <h1>BYU-I Parking</h1>
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
        <div class="col-md-4 col-md-offset-4">
            <form action="enter_info.php">
            <div class="inner-addon left-addon">
                <span class="glyphicon glyphicon-user"></span>      
                <input type="text"  name="user" placeholder="Username"/>
            </div>
            <div class="inner-addon left-addon">
                <span class="glyphicon glyphicon-lock"></span>      
                <input type="text"  name="pass" placeholder="Password" />
            </div>
                <input type="submit" value="Login">
            </form>
        </div>
        
    </body>
</html>