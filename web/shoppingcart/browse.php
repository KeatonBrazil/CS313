<?php
session_start();
$_SESSION['cart'] = array();



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script>
    </script>
</head>
<body>
    <div>
        <header>
            <h3>Shop Here</h3>
        </header>
    </div>
    <div>
        <div>
            <form name="form1" action="add.php" method="post">
                <div>
                    <h1>Item 1</h1>
                    <input type="submit" value="item1" name="product">
                </div>
            </form>
        </div>
        <div>
            <form name="form2" action="add.php" method="post">
                <div>
                    <h1>Item 3</h1>
                    <input type="submit" value="item2" name="product">
                </div>
            </form>
        </div>
        <div>
            <form name="form3" action="add.php" method="post">
                <div>
                    <h1>Item 3</h1>
                    <input type="submit" value="item3" name="product">
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>