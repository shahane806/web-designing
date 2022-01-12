<?php
    $name = $_POST["name"];
    $account = $_POST["account"];
    $ifsc = $_POST["ifsc"];
    $pan = $_POST["pan"];


    if($name == null||$name == "")
    {

        echo("Error : Name not be empty <br>"); die();
    }
    else
    {

        echo("Name : $name <br>");
    }
    if($account == null || $account == "")
    {

        echo("Error : Account not be empty <br>"); die();
    }
    else
    {

        echo("Account : $account <br>");
    }
    
    if($ifsc == null || $ifsc == "")
    {

        
        echo("Error : IFSC not be empty <br>"); die();
    }
    else
    {

        echo("IFSC : $ifsc <br>");
    }

    if($pan == null || $pan == "")
    {
        echo("Error : Pan not be empty <br>"); die();
    }
        else
    {
        echo("PAN : $pan <br>");

    }

?>