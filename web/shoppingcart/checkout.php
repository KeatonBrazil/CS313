<?php
    session_start();
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
        function redirect() {
            window.location.href="cart.php";
        };        
    </script>
</head>
<body>
    <div>
        <header>
            <h1>Checkout</h1>
        </header>
    </div>
    <div class="checkout_form">
        <form action="confirm.php" method="post">
            <input type="text" placeholder="First Name" id="first" name="fname">
            <input type="text" placeholder="Last Name" id="last" name="lname">
            <input type="text" placeholder="Street" id="strt" name="street">            
            <input type="text" placeholder="city" id="cit" name="city">
            <input type="text" placeholder="State" id="stat" name="state">
            <input type="text" placeholder="Zip Code" id="code" name="zip">
            <div >                
                <input class="submit_checkout" type="submit" value="Submit">                               
            </div>                       
        </form>
        <div>
            <input class="cancel_checkout" type="button" value="Cancel" onclick="redirect()">
        </div>
    </div>
    
</body>
</html>