<?php
$id= $_POST["ID"];
$isbn= $_POST["ISBN"];
$date= $_POST["Date"];
$month= $_POST["Month"];
$year= $_POST["Year"];

echo $id;
echo "<br>";
echo $isbn;
echo "<br>";
echo $date;
echo "<br>";
echo $month;
echo "<br>";
echo $year;
echo "<br>"."<br>";

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "INSERT INTO borrow(b_id, isbn, date, month, year) VALUES ('$id', '$isbn', '$date', '$month', '$year')";
if (mysqli_query($con, $s))
echo "Data Inserted";
else
echo "Insertion failed";
echo "<br>"."<br>";

echo "<p style=font-size:120%;>To see borrowers information <a href=http://localhost/project/s_borrow.php> Click Here </a></p>";
?>