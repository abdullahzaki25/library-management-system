<?php
$id= $_POST["ID"];
$name= $_POST["Name"];
$designation= $_POST["Designation"];
$email= $_POST["Email"];

echo $id;
echo "<br>";
echo $name;
echo "<br>";
echo $designation;
echo "<br>";
echo $email;
echo "<br>"."<br>";

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "INSERT INTO other_staffs(os_id, os_name, designation, email) VALUES ('$id', '$name', '$designation', '$email')";

if (mysqli_query($con, $s))
echo "Data Inserted";
else
echo "Insertion failed";
echo "<br>"."<br>";

echo "<p style=font-size:120%;>To see other staffs information <a href=http://localhost/project/s_os.php> Click Here </a></p>";
?>