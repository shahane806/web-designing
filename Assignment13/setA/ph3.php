
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>
           Bill Verification
        </title>
    </head>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        .container{
            display:flex;
            flex-direction: column;
            margin:auto;
            margin-top:55px;
            height:auto;
            width:70vh;
            background-color:antiquewhite;
            border:3px solid orange;

        }
        input{
            padding:3px;
            margin:3px;
        }
        label{
            margin:50px;
            padding:10px;
        }
        input[type="submit"]
        {
            margin:15px;
            padding:12px;
            width: 80px;

        }
    </style>
    <body>
    <div class="container">
            <form  method="post">

            <table>
                <center>
                    <br>
                <h3>Bill</h3></center>
                <br>
                <hr>

                <tr>
                    <td>
                        <br>
                        <label> Customer No:</label> <input type="text" style="float:right; margin-right:15vh;"  value="<?php echo $_POST['customerNo']; ?> " name="customerNo" id="customerNo" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <label> Name : </label> <input style="float:right; margin-right:15vh;" type="text" name="name" id="name"  value="<?php echo $_POST['name']; ?> " readonly>

                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <label> Address : </label> <input style="float:right; margin-right:15vh;" type="text" name="address" id="address"  value="<?php echo $_POST['address']; ?> " readonly>

                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <label> Mobile : </label> <input style="float:right; margin-right:15vh;" type="text" name="mobile" id="mobile" value="<?php echo $_POST['mobile']; ?> " readonly>

                    </td>
                </tr>
                
             
            </table>
            <table>

                <br>
                <hr>

                <tr>
                    <td>
                        <br>
                        <label>Product Name:</label> <input type="text" style="float:right; margin-right:15vh;" name="productName" id="productName" value="<?php echo $_POST['productName']; ?> "  readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <label>Quantity : </label> <input style="float:right; margin-right:15vh;" type="text" name="quantity" id="quantity" value="<?php echo $_POST['quantity']; ?> "  readonly>

                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <label> Rate : </label> <input style="float:right; margin-right:15vh;" type="text" name="rate" id="rate" value="<?php echo $_POST['rate']; ?> "  readonly>

                    </td>
                </tr>
                
                <tr>
                    <td>
                        <br>
                        <input type="submit" id="submit" onclick="th()">
                    </td>
                </tr>
            </table>
            </form>
        </div>
      
    </body>
    <script>
    function th()
    {
       
        let name = document.getElementById('customerNo').value;
        console.log(name);
        let quantity1 = document.getElementById('name').value;
        console.log(quantity1);
        let rate1 = document.getElementById('mobile').value;
        console.log(rate1);
        let dis;
        let tot;
        let original;
       if(quantity1 == ""|| quantity1 == null)
       {
           alert("Name not be empty");
       }
       else if(quantity1 <= 5)
       {
        original = parseFloat(rate1*quantity1);
        discount1 = document.getElementById('discount').value = 1;
        dis = parseFloat((discount1/100)*original);
        tot = original - dis;
        document.getElementById('totprise').value = tot;
       }
       else if(quantity1 > 5 && quantity1 <= 25)
       {

        original = parseFloat(rate1*quantity1);
        discount1 = document.getElementById('discount').value = 5;
        dis = parseFloat((discount1/100)*original);
        tot = original - dis;
        document.getElementById('totprise').value = tot;

       }
       else if(quantity1 >25 && quantity1 <= 50)
       {
            original = parseFloat(rate1*quantity1);
            discount1 = document.getElementById('discount').value = 15;
            dis = parseFloat((discount1/100)*original);
            tot = original - dis;
            document.getElementById('totprise').value = tot;
       }
       else if(quantity1 > 50)
       {
        original = parseFloat(rate1*quantity1);
        discount1 = document.getElementById('discount').value = 20;
        dis = parseFloat((discount1/100)*original);
        tot = original - dis;
        document.getElementById('totprise').value = tot;
        


       }
       if(name == ""|| name == null)
       {
           alert("Name not be empty");
       }
       if(rate == ""|| rate == null)
       {
           alert("Rate not be empty");
       }
      
      

    
    }
    
    </script>
</html>