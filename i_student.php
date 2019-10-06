<?php
$id= $_POST["ID"];
$name= $_POST["Name"];
$intake= $_POST["Intake"];
$section= $_POST["Section"];
$department= $_POST["Department"];

echo $id;
echo "<br>";
echo $name;
echo "<br>";
echo $intake;
echo "<br>";
echo $section;
echo "<br>";
echo $department;
echo "<br>"."<br>";

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");

$s= "INSERT INTO student(s_id, s_name, intake, section, dept_name) VALUES ('$id', '$name', '$intake', '$section', '$department')";
if (mysqli_query($con, $s))
echo "Data Inserted";
else
echo "Insertion failed";
echo "<br>".'<br>';

echo "<p style=font-size:120%;>To see students information <a href=http://localhost/project/s_student.php> Click Here </a></p>";
?>