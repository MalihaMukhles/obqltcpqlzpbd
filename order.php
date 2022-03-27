<!DOCTYPE html>


<head>
  <title>order form</title>
</head>
<br>
<body background="food.jpg">

   <table bgcolor="#ada4a3" align="center" border="20" cellspacing="0" cellpadding="5" width="600">
      <tr>
        <td align="center"> <h1> !!Welcome to foodpanda!!</h1></td>

      </tr>
     </table>
     <br><br>
   <table align="center" bgcolor="#ebdcda" border="1" cellspacing="0" cellpadding="5" width="800" >
      <tr>
        <td align="center"> <b><marquee onmouseover="this.stop();" onmouseout="this.start();"> Please submit this form For order your food item!! </marquee></b></td>

      </tr>
     </table><br><br>
  
<table align="center" cellpadding="5" cellspacing="0" border="4" bgcolor="#696556" width="600">
  <tr><br><br>
    <td> <center>     
      <form  action="orderConfirm.php" method="Post"><br><br>
     <label><b>Customer Name:</b></label><input required type="text" name="cName" id="cName" value=""><br><br>
       <label><b>Food item name:</b></label>  <input required type="text" name="food" id="food"><br><br>
       <label><b>Number of item:</b></label>  <input required type="number" name="quantity"id="quantity"><br><br>
       <label><b>Adress:</b></label>  <input required type="text" name="address" id="address"><br><br>
       <label><b>Contact No:</b></label> <input required type="tel" name="phone" id="phone"><br><br>
       <label><b>Payment options:(Post Payment) </b></label><br>
        <input required type="radio" name="PaymentMethos" ><label><b>bKash</b></label> <br>
        <input required type="radio" name="PaymentMethos"><label><b>Rocket</b></label> <br>
        <input required type="radio" name="PaymentMethos"><label><b>Card</b></label> <br><br>
         

          <input type="reset" value="reset"  name="reset" >
          <input type="submit" name="Submit" id="Submit" value="Submit">
           
            <button type="submit" name="submit" style="margin:20px 0 100px 665px ;" onclick="window.print()">Confirm your Order </button>
          </center><br><br>
          
      </form>


    </td>
  </tr>


</table>

</body>
</html>