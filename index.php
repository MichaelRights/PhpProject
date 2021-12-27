<?php
    if (!isset($_COOKIE["id"])) {
        header("Location: /login.html");
        exit();
    } else {
        header("Location: /home.php");
        exit();
    }
?>
