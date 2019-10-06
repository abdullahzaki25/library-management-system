<?php
$id= $_POST["ID"];

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "DELETE FROM other_staffs WHERE os_id = '$id'";
if (mysqli_query($con, $s))
echo "Data deleted";
else
echo "Deletion failed";
echo "<br>"."<br>";
echo "<p style=font-size:120%;>To see other staffs information <a href=http://localhost/project/s_os.php> Click Here </a></p>"; 
?>