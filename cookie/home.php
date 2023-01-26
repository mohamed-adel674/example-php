<?php

if (isset($_COOKIE['username'])){
    echo "welcome ya". $_COOKIE['username'] ; 
}else{
    header("LOCATION:login.html");
}
