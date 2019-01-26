<?php
    if(basename($_SERVER["PHP_SELF"]) == "homepage.php") {
        echo "My Home Page";
    } elseif (basename($_SERVER["PHP_SELF"]) == "assignments.php") {
        echo "My Assignments";
    } 
?>