<?php
$isbn= $_POST["ISBN"];

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "DELETE FROM books WHERE isbn = '$isbn'";
if (mysqli_query($con, $s))
echo "Data deleted";
else
echo "Deletion failed";
echo "<br>"."<br>";
echo "<p style=font-size:120%;>To see books information <a href=http://localhost/project/s_books.php> Click Here </a></p>";
?>