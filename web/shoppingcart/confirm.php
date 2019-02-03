<?php
    session_start();
    $_SESSION['you'] = $Post["fname"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css" />
    <script></script>
</head>
<body>
    <div>
        <header>
            <h1>Confirm Checkout</h1>
        </header>
    </div>
    <div class="checkout_form">
    <?php 
        echo "<h2>" . $_POST["fname"] . " " . $_POST["lname"] . "</h2>";
        echo "<h3>Address:</h3>";
        echo $_POST["street"]; 
        echo $_POST["city"] . ", " . $_POST["state"] . ", " . $_POST["zip"];
        $total = 0;
        foreach ($_SESSION['cart'] as $i => $value) {
            echo $_SESSION['cart'][$i][0] . " $" . $_SESSION['cart'][$i][1]; 
            $total += $_SESSION['cart'][$i][1];       
        };
        echo "Total: $" . $total;

    ?>
    </div>
</body>
</html>