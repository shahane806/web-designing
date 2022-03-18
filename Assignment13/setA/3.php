<html>
<head>
<title> Number of times the web page has been viited.</title>
</head>
<body>
<?php
                session_start();
                if(isset($_SESSION['count']))
                $_SESSION['count']=$_SESSION['count']+1;
                                else
                                $_SESSION['count']=1;
                echo "<h3>This page is accessed</h3>".$_SESSION['count'];
?>