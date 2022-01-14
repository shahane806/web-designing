<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php form</title>
</head>

<body>
    <div class="container">
        <form action="form.php" method="post">
            <table>
                <tr>
                    <td>
                        <label for="userName">Name : </label>
                        <input type="text" name="userName" id="userName">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="city">City :  </label>
                        <select name="city" id="city">
                            <option></option>
                            <option>Pune</option>
                            <option>Mumbai</option>
                            <option>Chennai</option>
                            <option>kolkata</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="birthDate">Birth Date :</label>
                        <input type="date" name="birthDate" id="birthDate">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="occupation">Occupation : </label>
                        <input type="text" name="occupation" id="occupation">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Gender :</label>
                        <select name="gender" id="gender">
                            <option></option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" id="submit" value = "Create" onclick="validate()">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div id="alert"></div>
</body>
<script>
   function validate()
   {
      document.getElementById("submit").value = "Continue";
   }
</script>
</html>
<?php


     $name = $_POST["userName"];
     $city = $_POST["city"];
     $birthDate = $_POST["birthDate"];
     $occupation = $_POST["occupation"];
     $gen = $_POST["gender"];

    if($name == null || $name == "")
    {
       echo("Name not be empty <br>");
    }
    else
    {
       echo("Name : $name <br>");
    }
   if($city == null || $city == "")
   {
   echo("City not be empty <br>");

   }
   else
   {
      echo("City : $city <br>");
   }
   if($birthDate == null || $birthDate == "")
   {
    echo("Birth Date not be empty <br>");
   }
   else
   {
      echo("Birth Date : $birthDate <br>");
   }
   if($occupation == null || $occupation == "")
   {
    echo("Occupation not be empty <br>");
   }
   else
   {
      echo("Occupation : $occupation <br>");
   }
   if($gen == null || $gen == "")
   {
   echo("Gender not be empty <br>");

   }
   else
   {
      echo("Gender : $gen <br>");
   }



?>