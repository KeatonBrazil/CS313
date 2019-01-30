<?php
session_start();
unset($_SESSION['cart'][$_POST["item"]]);
header("Location: cart.php");
die();
?>




