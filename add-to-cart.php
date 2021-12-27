<?php
    require "./database/Users.php";
    Users::addToCart($_COOKIE["id"],$_REQUEST["bookId"]);
?>