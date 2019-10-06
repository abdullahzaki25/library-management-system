<?php
$id= $_POST["ID"];
$name= $_POST["Name"];
$department= $_POST["Department"];
$designation= $_POST["Designation"];
$email= $_POST["Email"];

echo $id;
echo "<br>";
echo $name;
echo "<br>";
echo $department;
echo "<br>";
echo $designation;
echo "<br>";
echo $email;
echo "<br>"."<br>";

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "INSERT INTO teacher(t_id, t_name, dept_name, designation, email) VALUES ('$id', '$name', '$department', '$designation', '$email')";
if (mysqli_query($con, $s))
echo "Data Inserted";
else
echo "Insertion failed";
echo "<br>"."<br>";

echo "<p style=font-size:120%;>To see teachers information <a href=http://localhost/project/s_teacher.php> Click Here </a></p>";
?>