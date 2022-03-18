<?php
session_start();
if(!isset($_SESSION['total']))
{
    $_SESSION['total'] = 0;
    $_SESSION['product']="";
    $_SESSION['amount']="";
}
if(isset($_POST['submit']))
{
    $_SESSION['product'] = $_SESSION['product']."<br>"."Product 1";
    $_SESSION['amount'] = $_SESSION['amount']."<br>"."5";
    $_SESSION['total'] = $_SESSION['total']+5;
}
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
    <?php
    include_once "cart.php";
    ?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <table>
        <tr>
            <td>
                <input type="text" name="product1" value="5">
                <input type="submit" name="submit" value="buy">
            </td>
        </tr>
    </table>


    </form>
</body>
</html>