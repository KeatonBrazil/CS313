<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thankyou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="shopping.css" />
    <script>
        function redirect() {
            window.location.href="browse.php";
        }; 
    </script>
</head>
<body>
    <div class="checkout_form center">
        <h1>Thank You <?php echo $_POST['you']; ?>!</h1>
        <p>Your Pokemon are on their way</p>
        <div>
            <input class="shop" type="button" value="Back to the shop!" onclick="redirect()">
        </div>
    </div>
    
</body>
</html>