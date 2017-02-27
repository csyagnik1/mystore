<?php
include("main.php");
$conn=connect();
$sql="SELECT * FROM `users`  ";

$res_arry= queryDB($conn,$sql);


echo "<table border=1><tr>";
    for($i = 0; $i < count($res_arry); $i++) {
              foreach ($res_arry[$i] as $value) {
			echo "<td>".$value;
		}
        echo "<tr>";
    }
 echo "</table>";
?>
