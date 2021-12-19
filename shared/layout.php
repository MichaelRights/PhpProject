<?php 
    require_once("middlewares/authorize.php");
    require_once("database/Users.php");
    require_once("database/Books.php");
    Users::init();
    Books::init();
    authorize();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/shared/navbar.css">
