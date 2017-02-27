<?php session_start();
Include('Im_main.php');
$custName= $_POST['custName'];
$custAddress1= $_POST['custAddress1'];
$custAddress2= $_POST['custAddress2'];
$custMobileno= $_POST['custMobileno'];
$custEmailid= $_POST['custEmailid'];
$custUname= $_POST['custUname'];
$custPword= $_POST['custPword'];

$sql = "INSERT INTO customer (custName,custAddress1, custAddress2, custMobileno, custEmailid, custUname,  custPword) VALUES ('$custName','$custAddress1', '$custAddress2', '$custMobileno', '$custEmailid', '$custUname',  '$custPword')" ;

$conn=doConnect();
doInsert($conn,$sql);

$sql = "Select * from customer";

$arry=doSelect($conn,$sql);
//echo "<center><table border=1>";
echo "<center><table border=1><th>Customer ID<th>Name of Customer<th>Address1<th>Address2<th>mobile no<th>Email Id<th>User Name<th>Password<tr>";

arry2table($arry);
doCloseConn($conn);
echo "</center></table>";

?>
