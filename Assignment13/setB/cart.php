<?php 
if(isset($_SESSION['total']))
{
    echo "Products ".$_SESSION['product']."<br>";
    echo "Total Amount : ".$_SESSION['total']."<br>";
}
?>
