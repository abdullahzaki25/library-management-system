<?php

$con=mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "library");
$c="SELECT * FROM fine_amount";
$result= mysqli_query($con, $c);

echo'<table border="1" bordercolor="blue">';
echo '<tr><td>Day</td><td>Fine amount</td></tr></tr>';

while($row=mysqli_fetch_row($result))
{
	echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><tr>';
	echo "<br>";
}
?>