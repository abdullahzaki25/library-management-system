<?php

//echo '<h1 align=center>Library Management System</h1>';
$con=mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "library");
$c="SELECT * FROM student";
$result= mysqli_query($con, $c);

echo '<p align=center><table border="1" bordercolor="blue"></p>';
echo '<p align=center><tr><td>Students ID</td><td>Students name</td><td>Intake</td><td>Section</td><td>Department</td></tr></p>';

while($row=mysqli_fetch_row($result))
{
	echo '<p align=center><tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><tr></p>';
	echo "<br>"."<br>";
}
	
?>