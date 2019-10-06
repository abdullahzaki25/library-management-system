<?php
$id= $_POST["ID"];
$fine= $_POST["Fine"];

echo $id;
echo "<br>";
echo $fine;
echo "<br>";

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "INSERT INTO fine_student(s_id, fine) VALUES ('$id', '$fine')";

if (mysqli_query($con, $s))
echo "Data Inserted";
else
echo "Insertion failed";
echo "<br>"."<br>";

echo "<p style=font-size:120%;>To see students fine amounts <a href=http://localhost/project/s_fine_student.php> Click Here </a></p>";
?>