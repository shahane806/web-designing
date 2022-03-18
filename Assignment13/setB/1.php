<?php

//Write a PHP script to accept username and password. If in the first three chances, username and password 
// entered is correct, then display second form, otherwise display error message



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="register.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="UserName">
                        User Name : 
                    </label>
                    <input type="text" name="UserName" >
                    
                </td>
               
            </tr>
            <tr>
            <td>
                    <label for="password">
                        Password : 
                    </label>
                    <input type="password" name="password">
                </td>
                
            </tr>
            <tr>
            <td>
                    <input type="submit" value="Login">
                </td>
                
            </tr>
        </table>
    </form>
</body>
</html>
