<?php
  $name = "user";
  $value = "123";
  $date=date_create();
  $time = time();
  
  setcookie($name,$value,$time+86400,"/");
  if(isset($_COOKIE[$name]))
  {
    echo("cookie set $name <br>"); 
  echo "last visit ".date_format($date,"Y-m-d") . "<br>";


  }
    else
   {
    echo("Cookie set<br>");
   }
?>
<script>
  
</script>