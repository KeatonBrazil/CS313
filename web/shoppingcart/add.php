<?php
session_start();
array_push($_SESSION['cart'], $_GET["product"]);
var_dump($_SESSION['cart']);
?>
<a href="browse.php">browse</a>