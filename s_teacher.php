<?php

$con=mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "library");
$c="SELECT * FROM teacher";
$result= mysqli_query($con, $c);

echo'<table border="1" bordercolor="blue">';
echo '<tr><td>Teachers ID</td><td>Teachers name</td><td>Department</td><td>Designation</td><td>Email</td></tr></tr>';

while($row=mysqli_fetch_row($result))
{
	echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><tr>';
	echo "<br>";
}
?>