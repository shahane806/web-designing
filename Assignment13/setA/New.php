<?php
$rno=$_GET['rno'];
$nm=$_GET['nm'];
$ct=$_GET['ct'];

if($newt > 1800)
echo"time out";
else
{
echo"Roll_No=$rno"."<br>";
echo"Name=$nm"."<br>";
echo"City=$ct"."<br>";
}

?>