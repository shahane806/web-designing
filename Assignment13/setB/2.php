<?php
// Create a form to accept student information (name, class, address). Once the student information is 
// accepted, accept marks in next form (Java, PHP, SE, OS, Pract1, and Pract2). Display the mark sheet for 
// the student in the next form containing name, class, marks of the subject, total and percentage using 
// cookies.
session_start();
if(!isset($_SESSION['initiated']))
{

    session_regenerate_id();
    $_SESSION['initiated'] = 1;
}
setcookie(session_name(),"",time()+60*60*24*7,'/');
?>
<?php
if(!isset($_SESSION['count']))
{
    $_SESSION['count'] = 0;
}
else
{
    $_SESSION['count']++;
    echo $_SESSION['count'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>
    <form action="student.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="name">Name:</label>
                    <input type="text" name="name">
                </td>

            </tr>
            <tr>
                <td>
                    <label for="class">Class:</label>
                    <input type="text" name="class">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="address">Address:</label>
                    <input type="text" name="address">

                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Next">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>