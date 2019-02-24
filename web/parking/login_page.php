<?php
session_start();

$badLogin = false;

if (isset($_POST['user']) && isset($_POST['pass']))
{
    $username = htmlspecialchars($_POST['user']);
    $password = htmlspecialchars($_POST['pass']);

    require_once("parking_db.php");
    $db = get_db();

    $query = 'SELECT pass_word FROM member WHERE username = :username';
    var_dump($query);
}
/*
    $stmt = $db->prepare($query);
    $stmt->bindValue(':username', $username);

    $result = $statement->execute();

    if ($result)
    {
        $row = $stmt->fetch();
        var_dump($row);
        $hashedPassword = $row['pass_word'];

        if (password_verify($password, $hashedPassword))
        {
            $_SESSION['username'] = $username;
        }
        else 
        {
            $badLogin = true;
        }
    }
    else
    {
        $badLogin = true;
    }
}


*/
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
            <div class="my_layout">
                <form action="login_page.php" method="post">
                    <div class="inner-addon left-addon">
                        <span class="glyphicon glyphicon-user"></span>      
                        <input type="text"  name="user" placeholder="Username"/>
                    </div><br>
                    <div class="inner-addon left-addon">
                        <span class="glyphicon glyphicon-lock"></span>      
                        <input type="password"  name="pass" placeholder="Password"/>
                    </div><br>
                    <?php
                        if ($badLogin)
                        {
                            echo "<span style='color:red;'>Incorrect username or password!</span><br /><br />\n";
                        }
                    ?>
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
        
    </body>
</html>