<?php
    session_start();
    $_SESSION['you'] = $_Post["fname"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Confirm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css" />
    <script>
        function redirect() {
            window.location.href="browse.php";
        };   
    </script>
</head>
<body>
    <div>
        <header>
            <h1>Confirm Checkout</h1>
        </header>
    </div>
    <div class="checkout_form">
        <form action="thankyou.php" method="post">
            <?php 
                echo "<h2>" . $_POST["fname"] . " " . $_POST["lname"] . "</h2>";
                echo "<h3>Address:</h3>";
                echo $_POST["street"] . "<br>"; 
                echo $_POST["city"] . ", " . $_POST["state"] . ", " . $_POST["zip"] . "<br>";
                $total = 0;
                foreach ($_SESSION['cart'] as $i => $value) {
                    echo $_SESSION['cart'][$i][0] . "        $" . $_SESSION['cart'][$i][1] . "<br>"; 
                    $total += $_SESSION['cart'][$i][1];       
                };
                echo "Total: $" . $total;
            ?>
            <div >                
                <input class="submit_checkout" type="submit" value="Order">                               
            </div>                       
        </form>
        <div>
            <input class="cancel_checkout" type="button" value="Cancel" onclick="redirect()">
        </div>
    </div>
</body>
</html>