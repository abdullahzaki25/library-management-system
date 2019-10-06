<?php
$day= $_POST["Day"];
$fine= $_POST["Fine"];

echo $day;
echo "<br>";
echo $fine;
echo "<br>"."<br>";

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "INSERT INTO fine_amount(day, fine) VALUES ('$day', '$fine')";

if (mysqli_query($con, $s))
echo "Data Inserted";
else
echo "Insertion failed";
echo "<br>"."<br>";

echo "<p style=font-size:120%;>To see fine amounts <a href=http://localhost/project/s_fine_amount.php> Click Here </a></p>";
?>