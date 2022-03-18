<?php
session_start();
include_once "cart.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>

</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post"></form>
</body>
</html>