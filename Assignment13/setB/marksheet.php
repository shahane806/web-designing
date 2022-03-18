<?php
session_start();
if(!isset($_SESSION['initiated']))
{
    session_regenerate_id();
    $_SESSION['initiated']= 1;
}
if(!isset($_SESSION['count']))
{
    $_SESSION['count'] =0;
}
else
{
    $_SESSION['count']++;
    echo $_SESSION['count'];
}   

?>
<?php
$java = $_POST['java'];
$php = $_POST['php'];
$se = $_POST['se'];
$os = $_POST['os'];
$pract1 = $_POST['pract1'];
$pract2 = $_POST['pract2'];
$name =  $_COOKIE['name'];
$class =  $_COOKIE['class'];
$address =  $_COOKIE['address'];
$sum = $java+$php+$se+$os+$pract1+$pract2;
$per = ($sum/600)*100;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
</head>
<body>
    <table>
        <tr>
            <td>
                <input type="text" name="name" id="name" value="<?php echo $name;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="class" id="class" value="<?php echo $class;?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="address" id="address" value="<?php echo $address;?>">
            </td>
        </tr>
        <tr>
            <td>
                <br><input type="text" name="java" id="java" value="<?php echo $_POST['java'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="php" id="php" value="<?php echo $_POST['php'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="se" id="se" value="<?php echo $_POST['se'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="os" id="os" value="<?php echo $_POST['os'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="pract1" id="pract1" value="<?php echo $_POST['pract1'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="pract2" id="pract2" value="<?php echo $_POST['pract2'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="total" id="total" value="<?php echo $sum; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="per" id="per" value="<?php echo $per;?>">
            </td>
        </tr>

    </table>
</body>
</html>
<?php
    $_SESSION = array();
    setcookie(session_name(),"",time()-60*60*24*7,'/');
    setcookie('name',"$name",time()-60*60*24*7,'/');

            setcookie('class',"$class",time()-60*60*24*7,'/');

            setcookie('address',"$address",time()-60*60*24*7,'/');
    session_destroy();
?>