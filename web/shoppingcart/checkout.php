<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        <header>
            <h1>Checkout</h1>
        </header>
    </div>
    <div>
        <form action="confirm.php" method="post">
            <input type="text" placeholder="First Name" name="fname">
            <input type="text" placeholder="Last Name" name="lname">
            <p>Address:</p>
            <input type="text" placeholder="Street" name="street">            
            <input type="text" placeholder="city" name="city">
            <input type="text" placeholder="State" name="state">
            <input type="text" placeholder="Zip Code" name="zip">


        </form>
    </div>
    
</body>
</html>