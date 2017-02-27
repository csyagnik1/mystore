<?php
/* 
itemCode 
itemName 
itemBrand 
itemCategory 
itemPrice 
itemDesc  
itemImage 
itemUnit 
itemBalDate 
itemBal */
 session_start();
 include("upload.php");
  
Include('Im_main.php');
$itemCode= $_POST['itemCode'];
$itemName= $_POST['itemName'];
$itemPrice= $_POST['itemPrice'];
$itemDesc= $_POST['itemDesc'];
$itemImage= $_SESSION["UplodedFile"];
$itemUnit= $_POST['itemUnit'];
$itemBrand = $_POST['itemBrand'];
$itemCategory = $_POST['itemCategory'];  


$sql = "INSERT INTO items (itemCode,itemPrice, itemDesc, itemImage, itemUnit, itemName,itemBrand,itemCategory) VALUES ('$itemCode','$itemPrice', '$itemDesc', '$itemImage', '$itemUnit','$itemName','$itemBrand','$itemCategory')" ;

$conn=doConnect();
doInsert($conn,$sql);

$sql = "Select * from items";

$arry=doSelect($conn,$sql);
echo "<center><table border=1><th>items ID<th>Item Code<th>Name of Item<th>Cost Price<th>Category<th>Image<th>Unit<th>Date of Balance<th> Balance<tr>";

arry2table($arry);
doCloseConn($conn);
echo "</center></table>";

?>
