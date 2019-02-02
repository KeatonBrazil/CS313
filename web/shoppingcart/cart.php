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
    <div id="navbar">
        <div>
            <a class="element" href="browse.php">browse</a>
        </div>        
    </div>

    <?php 
        $pikachu="pikachu.jpg";
        $squirtle="squirtle.png";
        $charmander="charmander.png";
        foreach ($_SESSION['cart'] as $i => $value) {
            echo "<div>";
            echo "<form class='cart_form' action='remove.php' method='post'>";
            echo "<div class='container'>";
            echo "<div class='item1'>";
            echo "<h4>" . $_SESSION['cart'][$i][0] . "</h4>";
            echo "<p>Price: $" . $_SESSION['cart'][$i][1] . "</p>";
            echo "</div>";
            echo "<div class='item2'>";
            if ($_SESSION['cart'][$i][0] == "Pikachu"){
                echo "<img class='pokemon_cart' src='$pikachu' alt='" . $_SESSION['cart'][$i][0] . "'>";
            } elseif ($_SESSION['cart'][$i][0] == "Squirtle") {
                echo "<img class='pokemon_cart' src='$squirtle' alt='" . $_SESSION['cart'][$i][0] . "'>";
            } else {
                echo "<img class='pokemon_cart' src='$charmander' alt='" . $_SESSION['cart'][$i][0] . "'>";
            };            
            echo "</div>";            
            echo "<input type='hidden' name='product_index' value='$i'>";
            echo "<input type='submit' value='Remove'>";            
            echo "</form>";
            echo "</div>";
        }        
    ?>
    <br>
    <br>
    <div id="check">
        <a id="check_button" href="checkout.php">Checkout</a>
    </div>
</body>
</html>