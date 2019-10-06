<?php

$con=mysqli_connect("localhost", "ZAKI", "");
if($con)
echo "connected successfully";
else
echo "connection failed";
echo "<br>";

mysqli_select_db($con, "information_schema");
$c="SELECT * FROM CHARACTER_SETS";
$result= mysqli_query($con, $c);
while($row=mysqli_fetch_row($result))
{
	echo $row[0]." ".$row[1]." ".$row[3];
	echo "<br>";
}
?>

