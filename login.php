<?php 
require_once("./database/Users.php");

Users::init();
$user =  Users::getUserByEmail($_REQUEST["email"]);

if ($user && $user->checkPassword($_REQUEST["password"])) {
    setcookie("id",$user->id);
    header("Location: /");
}
else {
    header("Location: /login.html/?failed=1");    
    exit();
}
?>