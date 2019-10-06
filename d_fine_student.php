<?php
$id= $_POST["ID"];

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "DELETE FROM fine_student WHERE s_id = '$id'";
if (mysqli_query($con, $s))
echo "Data deleted";
else
echo "Deletion failed";
echo "<br>"."<br>";
echo "<p style=font-size:120%;>To see students fine amounts <a href=http://localhost/project/s_fine_student.php> Click Here </a></p>";
?>