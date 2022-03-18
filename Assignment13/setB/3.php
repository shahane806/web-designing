<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.php</title>
</head>

<body>
   <form action="secondpage3.php" method="post">
       <table>
            <tr>
                <label for="background-colors">Background Colors :</label>
                <td>
                    <input type="radio" name = "background-colors" value = "red"><div class="background" style="background-color:red; height:100px; width:100px;">Red</div>
                </td>
           
                <td>
                    <input type="radio" name = "background-colors" value = "blue"><div class="background" style="background-color:blue; height:100px; width:100px;">Blue</div>
                </td>
            
                <td>
                    <input type="radio" name = "background-colors" value = "green"><div class="background" style="background-color:green; height:100px; width:100px;">Green</div>
                </td>
            </tr>
            


       </table>
       <table>
            <tr>
                <label for="font-style">Font Styles :</label>
                <td>
                    <input type="radio" name = "font-style" value = "Bold"><div class="font-style" style="font-weight:bold; height:100px; width:100px;">Font Style Bold</div>
                </td>
           
                <td>
                    <input type="radio" name = "font-style" value = "Italic"><div class="font-style" style="font-style:italic; height:100px; width:100px;">Font style Italic</div>
                </td>
            
                <td>
                    <input type="radio" name = "font-style" value = "Cursive"><div class="font-style" style="font-family:cursive; height:100px; width:100px;">Font Style Cursive</div>
                </td>
            </tr>
       </table>
       <table>
           
           <tr>
           <label for="font-color">Font Colors</label>
                <td>
                    <input type="radio" name = "font-color" value = "red"><div class="font-color" style="color:red; height:100px; width:100px;">Font color red</div>
                </td>
           
                <td>
                    <input type="radio" name = "font-color" value = "blue"><div class="font-color" style="color:blue; height:100px; width:100px;">Font color blue</div>
                </td>
            
                <td>
                    <input type="radio" name = "font-color" value = "grey"><div class="font-color" style="color:grey; height:100px; width:100px;">Font color grey</div>
                </td>
            </tr>
       </table>
       <table>
           
           <tr>
           <label for="font-size">Font size</label>
                <td>
                    <input type="radio" name = "font-size" value = "20px"><div class="font-size" style="font-size:20px; height:100px; width:100px;">Font size 20px</div>
                </td>
           
                <td>
                    <input type="radio" name = "font-size" value = "small"><div class="font-size" style="font-size:small; height:100px; width:100px;">Font size small</div>
                </td>
            
                <td>
                    <input type="radio" name = "font-size" value = "large"><div class="font-size" style="font-size:large; height:100px; width:100px;">Font size large</div>
                </td>
            </tr>
        </table>
        <input type="submit" value="Save">
   </form>
</body>
</html>