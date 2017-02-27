

<?php
include("Im_main.php");
$conn=doConnect();
/*Tables to be created 
1. customer
2. brands
3. category
4. supplier
5. trans
6. items
*/
//-----------------------------------------
// Create Table customer

$sql=" CREATE TABLE customer ( 
id int(5) NOT NULL AUTO_INCREMENT,
custName varchar(50) NOT NULL, 
custAddress1 varchar(50) NOT NULL, 
custAddress2 varchar(50) NOT NULL, 
custMobileno varchar(50) NOT NULL, 
custEmailid varchar(50) NOT NULL,
custUname varchar(50) NOT NULL, 
custPword varchar(50) NOT NULL, 
PRIMARY KEY (id)) ";
$result=doCreate($conn,$sql);
if(! $result) {
echo "Creating Table customer failed";
}
//-----------------------------------------
//-----------------------------------------
// Create Table brands

$sql=" CREATE TABLE brands ( 
id int(5) NOT NULL AUTO_INCREMENT, 
brandName varchar(50) NOT NULL,
brandPerticulars TEXT NOT NULL, 
PRIMARY KEY (id)) ";

$result=doCreate($conn,$sql);
if(! $result) {
echo "Creating Table brands failed";
}
//-----------------------------------------
//-----------------------------------------
// Create Table category

$sql=" CREATE TABLE category ( 
id int(5) NOT NULL AUTO_INCREMENT, 
catName varchar(50) NOT NULL,
catDescription TEXT NOT NULL, 
PRIMARY KEY (id)) ";

$result=doCreate($conn,$sql);
if(! $result) {
echo "Creating Table category failed";
}
//-----------------------------------------
// Create Table supplier

$sql=" CREATE TABLE supplier ( 
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
//-----------------------------------------
// Create Table trans

$sql=" CREATE TABLE trans( 
id int(5) NOT NULL AUTO_INCREMENT,
transDate datetime NOT NULL, 
transtype boolean NOT NULL, 
transitem int(5) NOT NULL, 
transSupplier int(5) NOT NULL, 
transCustomer int(5) NOT NULL,
transqty int(5) NOT NULL, 
transitemBal int(7) NOT NULL, 

PRIMARY KEY (id)) ";
$result=doCreate($conn,$sql);
if(! $result) {
echo "Creating Table trans failed";
}
//-----------------------------------------

//-----------------------------------------
// Create Table items

$sql=" CREATE TABLE items( 
id int(5) NOT NULL AUTO_INCREMENT,
itemCode varchar(10) NOT NULL, 
itemName varchar(50) NOT NULL, 
itemBrand int(5) NOT NULL, 
itemCategory int(5) NOT NULL, 
itemPrice decimal(10) NOT NULL, 
itemDesc text NOT NULL, 
itemImage varchar(50) NOT NULL, 
itemUnit int(5) NOT NULL,
itemBalDate datetime NOT NULL,
itemBal int(7) NOT NULL, 

PRIMARY KEY (id)) ";
$result=doCreate($conn,$sql);
if(! $result) {
echo "Creating Table items failed";
}


//-----------------------------------------
//-----------------------------------------
// Create Table itSn

$sql=" CREATE TABLE itsn( sn int(8) NOT NULL
)";
$result=doCreate($conn,$sql);
if(! $result) {
echo "Creating Table itsn failed";
}


//-----------------------------------------

?>

