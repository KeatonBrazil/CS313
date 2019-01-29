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
<a href="browse.php">browse</a>
    <?php 
        for ($i=0; $i <= sizeof($_SESSION['cart']); $i++) {
            $index = $i;
            echo "<div>";
            echo "<form>";
            echo $_SESSION['cart'][$i][0] . "<br>";
            echo "Price: $" . $_SESSION['cart'][$i][1];
            echo "<input type='hidden' name='" . $index . "'>";
            echo "<input type='submit' value='Remove'>";
            echo "</form>";
            echo "</div>";
        }        
    ?>
</body>
</html>