<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css" />
    <script>
    </script>
</head>
<body>
    <div>
        <header>
            <h1>Cart</h1>
        </header>
    </div>
    <div id="navbar" class="sticky">
        <div>
            <a class="element" href="browse.php">browse</a>
        </div>        
    </div>

    <?php 
        foreach ($_SESSION['cart'] as $i => $value) {
            echo "<div>";
            echo "<form class='cart_form' action='remove.php' method='post'>";
            echo $_SESSION['cart'][$i][0] . "<br>";
            echo "Price: $" . $_SESSION['cart'][$i][1];
            echo "<input type='hidden' name='product_index' value='$i'>";
            echo "<input type='submit' value='Remove'>";            
            echo "</form>";
            echo "</div>";
        }        
    ?>
</body>
</html>