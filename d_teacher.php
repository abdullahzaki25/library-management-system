<?php
$id= $_POST["ID"];

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "DELETE FROM teacher WHERE t_id = '$id'";
if (mysqli_query($con, $s))
echo "Data deleted";
else
echo "Deletion failed";
echo "<br>"."<br>";
echo "<p style=font-size:120%;>To see teachers information <a href=http://localhost/project/s_teacher.php> Click Here </a></p>";
?>