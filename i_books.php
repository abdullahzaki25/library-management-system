<?php
$isbn= $_POST["ISBN"];
$name= $_POST["Name"];
$author= $_POST["Author"];
$publisher= $_POST["Publisher"];
$self_no= $_POST["Self_no"];

echo $isbn;
echo "<br>";
echo $name;
echo "<br>";
echo $author;
echo "<br>";
echo $publisher;
echo "<br>";
echo $self_no;
echo "<br>"."<br>";

$con=mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "library");
$s="INSERT INTO books(isbn, title, author, publisher, self_no) VALUES ('$isbn', '$name', '$author', '$publisher', '$self_no')";
if (mysqli_query($con, $s))
echo "Data Inserted";
else
echo "Insertion failed";
echo "<br>"."<br>";

echo "<p style=font-size:120%;>To see books information <a href=http://localhost/lms/s_books.php> Click Here </a></p>";
?>