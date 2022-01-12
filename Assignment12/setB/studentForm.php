<?php

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $gen = $_POST["gender"];
    $add = $_POST["address"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];

   if($firstName==""||$firstName == null)
   {
      echo(" Error : First Name not be empty");
      die();
   }
   else{

       echo("First Name : $firstName <br>");
   }
   if($lastName==""||$lastName == null)
   {
      echo(" Error : Last Name not be empty");
      die();
   }
   else{

       echo("Last Name : $lastName <br>");
   }
   if($gen==""||$gen == null)
   {
      echo(" Error : Gender not be empty");
      die();
   }
   else{

       echo("Gender : $gen <br>");
   }
   if($add==""||$add == null)
   {
      echo(" Error : Address not be empty");
      die();
   }
   else{

       echo("Address  :  $add <br>");
   }
   if($city==""||$city == null)
   {
      echo(" Error : City not be empty");
      die();
   }
   else{

       echo("City : $city <br>");
   }
   if($zip==""||$zip == null)
   {
      echo(" Error : Zip not be empty");
      die();
   }
   else if(strlen($zip)>6)
   {
    echo(" Error : Zip not be greater than 6 digits");
    die();
   }
   else{

       echo("Zip : $zip <br>");
   }

   
   
  

?>