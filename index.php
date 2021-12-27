<?php
    if (!isset($_COOKIE["Id"])) {
        header("Location: /login.html");
        exit();
    } else {
        header("Location: /home.php");
        exit();
    }

?>
