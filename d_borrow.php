<?php
$id= $_POST["ID"];

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "DELETE FROM borrow WHERE b_id = '$id'";
if (mysqli_query($con, $s))
echo "Data deleted";
else
echo "Deletion failed";
echo "<br>"."<br>";
echo "<p style=font-size:120%;>To see borrowers information <a href=http://localhost/project/s_borrow.php> Click Here </a></p>";
?>