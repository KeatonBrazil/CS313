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
    <script></script>
</head>
<body>
    <div class="checkout_form center">
        <h1>Thank You 
            <?php            
            echo $_SESSION['you'];    
            var_dump($_SESSION['you'];)         
            ?>
                    
        </h1>
    </div>
    
</body>
</html>