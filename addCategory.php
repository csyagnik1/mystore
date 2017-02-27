<?php session_start();
Include('Im_main.php');
$catName= $_POST['catName'];
$catDescription= $_POST['catDescription'];

$sql = "INSERT INTO category (catName,catDescription) VALUES ('$catName','$catDescription')" ;

$conn=doConnect();
doInsert($conn,$sql);

$sql = "Select * from category";

$arry=doSelect($conn,$sql);
echo "<center><table border=1><th>Category ID<th>Name of Category<th>Descprition<tr>";

arry2table($arry);
doCloseConn($conn);
echo "</center></table>";
?>
