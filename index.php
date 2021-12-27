<?php
    if (!isset($_COOKIE["iD"])) {
        header("Location: /login.html");
        exit();
    } else {
        header("Location: /home.php");
        exit();
    }
?>
