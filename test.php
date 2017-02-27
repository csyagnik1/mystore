<?php
include("Im_main.php");
doConnect();
// Create Table supplier

$sql=" CREATE TABLE supplier2 ( 
id int(5) NOT NULL AUTO_INCREMENT,
suppName varchar(50) NOT NULL, 
suppCompany varchar(50) NOT NULL, 
suppAddress1 varchar(50) NOT NULL, 
suppAddress2 varchar(50) NOT NULL, 
suppMobileno varchar(50) NOT NULL, 
suppEmailid varchar(50) NOT NULL,
suppPerticulars TEXT NOT NULL, 
PRIMARY KEY (id)) ";
$result=doCreate($conn,$sql);
if(! $result) {
echo "Creating Table supplier failed";
}

?>