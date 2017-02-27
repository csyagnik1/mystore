<?php session_start();
Include('Im_main.php');
$suppName= $_POST['suppName'];
$suppCompany= $_POST['suppCompany'];
$suppAddress1= $_POST['suppAddress1'];
$suppAddress2= $_POST['suppAddress2'];
$suppMobileno= $_POST['suppMobileno'];
$suppEmailid= $_POST['suppEmailid'];
$suppPerticulars= $_POST['suppPerticulars'];


$sql = "INSERT INTO supplier (suppName,suppAddress1, suppAddress2, suppMobileno, suppEmailid, suppPerticulars,  suppCompany) VALUES ('$suppName','$suppAddress1', '$suppAddress2', '$suppMobileno', '$suppEmailid', '$suppPerticulars',  '$suppCompany')" ;

$conn=doConnect();
doInsert($conn,$sql);

$sql = "Select * from supplier";

$arry=doSelect($conn,$sql);
echo "<center><table border=1><th>Supplier ID<th>Name of Supplier<th>Name of company<th>Address1<th>Address2<th>mobile no<th>Email Id<th>
perticulars<tr>";

arry2table($arry);
doCloseConn($conn);
echo "</center></table>";

?>
