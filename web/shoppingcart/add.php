<?php
session_start();
if (isset($_POST["product"])) {
    array_push($_SESSION['cart'], $_POST["product"]);
    var_dump($_SESSION['cart']);
};

?>
<a href="browse.php">browse</a>