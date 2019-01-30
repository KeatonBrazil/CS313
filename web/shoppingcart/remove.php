<?php
session_start();
unset($_SESSION['$_POST["item"]']);
header("Location: cart.php");
die();
?>




