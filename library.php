<?php
$ISBN= $_POST["ISBN"];
$Name= $_POST["Name"];
$Author= $_POST["Author"];
$Publisher= $_POST["Publisher"];
$Self_no= $_POST["Self_no"];

echo $ISBN;
echo "<br>";
echo $Name;
echo "<br>";
echo $Author;
echo "<br>";
echo $Publisher;
echo "<br>";
echo $Self_no;
echo "<br>";

$con=mysqli_connect("localhost", "ZAKI", "");
if($con)
echo "connected successfully";
else
echo "connection failed";
echo "<br>";

mysqli_select_db($con, "library");
$s="INSERT INTO books(isbn, title, author, publisher, self_no) VALUES ('$ISBN', '$Name', '$Author', '$Publisher', '$Self_no')";
if (mysqli_query($con, $s))
echo "Data Inserted";
else
echo "Insertion failed";
echo "<br>";

?>