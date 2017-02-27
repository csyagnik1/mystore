
<?php
include('Im_main.php');
?>
<html>
<body>
<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="additem2.php">
  <label>
  <div align="center"></div>
  </label>
  <p align="center">
    <label></label>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
  </p>
  <div align="center">
    <table >
      <tr>
        <td>Category</td><TD>
        
          <select name="itemCategory">
		  		  
		  <?php
$sql="select * from category ";
$conn = doConnect();
$result=doSelect($conn,$sql);
foreach ($result as $row){
	echo "<option value=$row[0]>$row[1]</option>";
}  
?>
          </select>
        </label></td>
      </tr>
      <tr>
        <td>Brand</td>
        <td><select name="itemBrand">
		<?php
$sql="select * from brands ";
$conn = doConnect();
$result=doSelect($conn,$sql);
foreach ($result as $row){
	echo "<option value=$row[0]>$row[1]</option>";
}  
?>
        </select></td>
      </tr>
      <tr>
        <td>itemName</td>
        <td><input type="text" name="itemName" /></td>
      </tr>
      <tr>
        <td>itemCode</td>
        <td><input type="text" name="itemCode" /></td>
      </tr>
           <tr>
        <td>itemPrice</td>
        <td><input type="text" name="itemPrice" /></td>
      </tr>      <tr>
        <td>itemDesc</td>
        <td><input type="text" name="itemDesc" /></td>
      </tr>      <tr>
        <td>itemUnit</td>
        <td><input type="text" name="itemUnit" /></td>
      </tr>
       <tr>
        <td>itemImage</td>
        <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
      </tr>
    </table >
  </div>
  <p align="center">
    <label>
    <input type="submit" name="Submit" value="Submit" />
    </label>
  </p>
</form>
</body>
</html>