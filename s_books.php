<?php

$con=mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "library");
$c="SELECT * FROM books";
$result= mysqli_query($con, $c);

echo '<table border="1" bordercolor="blue">';
echo '<tr><td>ISBN</td><td>Title of book</td><td>Author</td><td>Publisher</td><td>Self no.</td></tr></tr>';

while($row=mysqli_fetch_row($result))
{
	echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><tr>';
	echo "<br>";
}

?>