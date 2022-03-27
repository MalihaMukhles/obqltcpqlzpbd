<?php
// database connection code
if(isset($_POST['cName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$cName = $_POST['cName'];
$food = $_POST['food'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$phone = $_POST['phone'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `customer_name`, `food_name`, `food_number`, `address`,`contact_number`) VALUES ('0', '$cName', '$food', '$quantity', '$address', '$phone')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Order Confirmed";
}
}
else
{
	echo "database not connected";
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<br><br><br><br><br><br>
<body background="5e2ea8e9ab1dd-Street_Food_Fest_Attractions.jpg">

	 <table bgcolor="#a39f8b" align="center" border="20" cellspacing="0" cellpadding="5" width="500" height="300">
     	<tr>
     		<td align="center"> <h1> !!Thanks for your order !!</h1></td>
     		<div class="container">
<button style="margin:20px 0 100px 665px ;" onclick="window.print()">Click to Print</button>
</div>

     	</tr>
     </table>

</body>
</html>