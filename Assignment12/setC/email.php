<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subscribe to our mailing list</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        .box {
            font-size: 20px;
            border: 3px dotted;
            height: 293px;
            width: 400px;
            margin: 33px;
            padding: 33px;
        }
        h3 {
            font-family: system-ui;
        }
        small {
            float: right;
            display: block;
        }
        label {
            display: block;
        }
        input[type="email"]
        {
             padding: 8px;
            width: 361px;
        }
        input[name="name1"]
        {
                padding: 7px;
            width: 361px;
        }
        input[name="name2"]
        {
            
            padding: 7px;
            width: 361px;
        }
        .form
        {
            margin-top: 33px;
        }
        input[type="submit"] {
            padding: 9px;
            width: 133px;
            margin-top: 17px;
            border: 2px solid;
            border-radius: 6px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h3>Subscribe to our mailing list</h3>
        <small><span style="color:red;">*</span> indicates required</small>

    
    <div class="form">
        <form action="email.php" method="post">
           <label for="email" >Email Address <span style="color:red">* </span></label><input type="email" name="email" required>
           <label >First Name </label><input type="text" name="name1">
           <label  >Last Name </label><input type="text" name="name2">
           <input type="submit" value="Subscribe">
        </form>
    </div>
</div>
</body>

</html>
<?php

    $email = $_POST["email"];
    $name1 = $_POST["name1"];
    $name2 = $_POST["name2"];


    if($email == "" || $email == null)
    {
        echo("Error : Email not be empty <br>");
        die();
    }
    else
    {
        echo("Email : $email <br>");

    }


    if($name1 == "" || $name1 == null)
    {
        echo("Error : First Name not be empty <br>");
        die();
    }
    else{
        $name1 = ucfirst($name1);
        echo("Name : $name1 <br>");

    }

    if($name2 == "" || $name2 == null)
    {
        echo("Error : Last Name not be empty <br>");
        die();
    }
    else{
       $name2 =  ucfirst($name2);
        echo("Name : $name2 <br>");
    }

?>
