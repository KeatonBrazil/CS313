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

        function checkZip() {
            document.getElementById("badzip").innerHTML = "";
            var doc = document.getElementById("code").value;
            var pattern = "/\d{5}/";
            console.log(pattern);
            console.log(doc);
            if (doc.match(pattern)) {
                return true;
            } else {
                document.getElementById("badzip").innerHTML = "Zip Code only accepts 5 numbers.";
                return false;
            };
            console.log(document.getElementById("badzip").innerHTML);
        };

        function  checkState() {
            var doc = document.getElementById("stat").value;
        };

        function onValidate() {
            
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
        <form action="confirm.php" onsubmit="return onValidate()" method="post">
            <input type="text" placeholder="First Name" id="first" name="fname">
            <input type="text" placeholder="Last Name" id="last" name="lname">
            <input type="text" placeholder="Street" id="strt" name="street">            
            <input type="text" placeholder="city" id="cit" name="city">
            <input type="text" placeholder="State" id="stat" name="state">
            <input type="text" placeholder="Zip Code" id="code" name="zip" onchange="checkZip()">
            <p id="badstate"></p>
            <p id="badzip"></p>
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