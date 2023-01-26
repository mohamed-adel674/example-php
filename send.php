<?php

foreach ($_REQUEST as $key => $value) {
    # code...
    if ($key == "password"){
        echo $key . ":"  . sha1($value). "<br>";
    }else{
        echo   $key . ":"  . $value . "<br>";
    }
}