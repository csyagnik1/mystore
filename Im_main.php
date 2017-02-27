<?php
/*Use these functions in php file , Include() this file in your PHP file
1. doConnect() -  make connection
2. doCloseConn($conn) - Close Connection
3. doSelect($conn,$sql) - Select Records from table
4. doCreate($conn,$sql) -  Create Table 
5. doInsert($conn,$sql) -  Insert Data into table
6. doUpdate($conn,$sql) -  Update Record into table
7. doDelete($conn,$sql) - Delete Record from table 

*/


//  make connection -----------------------------------------------------------------------
function doConnect() {
    $conn = mysqli_connect("localhost","root","","mystore");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //echo "Connected ";
  return $conn;
}


// Close Connection
function doCloseConn($conn) {mysqli_close($conn);}


//execute Select query and return result in a two dimentional arry : $res_arry ----
function doSelect($conn,$sql) {
					$result= mysqli_query($conn,$sql);
					$res_arry=mysqli_fetch_all($result,MYSQLI_NUM);
   return $res_arry;
}

// Create Table 
function doCreate($conn,$sql) {
					$result= mysqli_query($conn,$sql);
				return $result;
}

// Insert Data into table
function doInsert($conn,$sql) {
		if (mysqli_query($conn, $sql)) {
   return TRUE ;
} else {
    return FALSE ;
}

}
//Update Record into table
function doUpdate($conn,$sql) {
					if (mysqli_query($conn, $sql)) {
   return TRUE ;
} else {
    return FALSE ;
}

}
// Delete Record from table 
function doDelete($conn,$sql) {
					if (mysqli_query($conn, $sql)) {
   return TRUE ;
} else {
    return FALSE ;
}

}

function arry2table($items){
//echo "<center><table border=1>";
foreach($items as $row) {
  echo('<tr>');
  foreach($row as $cell) {
    echo('<td>' . $cell . '</td>');
  }
  echo('</tr>');
} 
//echo "</table></center>";
}


?>