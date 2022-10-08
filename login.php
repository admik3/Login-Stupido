<?php
    $user = $_REQUEST["username"];
    $pass = $_REQUEST["password"];

    if(($user == "admin") && ($pass == "password")) {
        echo "Bentornato, $user";
    } else {
        echo "Login fallito, ritenta";
    }
?>