<?php
session_start();

$userName = "mohamedAdel";
$password = 123456;


if ($userName == $_POST['userName'] && $password == $_POST['password']){
    $_SESSION['userdata'] = $_POST['userName'];
    header("LOCATION:home.php");
}else{
    header("LOCATION:index.html");
}