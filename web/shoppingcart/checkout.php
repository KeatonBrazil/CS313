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
            <h1>Checkout</h1>
        </header>
    </div>
    <div class="checkout_form">
        <form action="confirm.php" method="post">
            <input type="text" placeholder="First Name" name="fname">
            <input type="text" placeholder="Last Name" name="lname">
            <input type="text" placeholder="Street" name="street">            
            <input type="text" placeholder="city" name="city">
            <input type="text" placeholder="State" name="state">
            <input type="text" placeholder="Zip Code" name="zip">
            <div class="container">
                <div class="item1">
                    <input class="submit_checkout" type="submit" value="Submit">
                </div>
                <div class="item2">
                    <a class="cancel_checkout" href="cart.php">Cancel</a>
                </div>
            </div>
            
            
        </form>
    </div>
    
</body>
</html>