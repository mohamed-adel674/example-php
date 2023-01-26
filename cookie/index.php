<?php

$username = "mohameadel";
$password = "123456";

if($username == $_POST['username'] && $password == $_POST['password']){
    setcookie('username' ,$_POST['username'],time() + 86400, '/');
    header("LOCATION:home.php");

}else{
    header("LOCATION:login.html");
}