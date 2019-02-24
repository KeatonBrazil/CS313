<?php
session_start();
var_dump($_SESSION['username']);
unset($_SESSION['username']);
var_dump($_SESSION['username']);
/*
header("Location: signIn.php");
die();
*/
?>