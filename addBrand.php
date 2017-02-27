<?php session_start();
Include('Im_main.php');
$brandName= $_POST['brandName'];
$brandPerticulars= $_POST['brandPerticulars'];

$sql = "INSERT INTO brands (brandName,brandPerticulars) VALUES ('$brandName','$brandPerticulars')" ;
echo $sql;
$conn=doConnect();
doInsert($conn,$sql);

$sql = "Select * from brands";

$arry=doSelect($conn,$sql);
echo "<center><table border=1><th>Brand ID<th>Name of Brand<th>Descprition<tr>";

arry2table($arry);
doCloseConn($conn);
echo "</center></table>";
?>
