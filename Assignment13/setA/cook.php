<?php
echo("Welcome Cookies here <br>");
$name = "om";
$value = "123";
setcookie($name,$value,time()+86400,"/");

if(isset($_COOKIE[$name]))
    echo("Cookie set $_COOKIE[$name] <br>");
else
    echo("Cookie not set <br>");
?>