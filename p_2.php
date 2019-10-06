<?php

echo "<style> 
html { 
  background: url(7.jpg) no-repeat center fixed; 
  background-size: cover;
}
</style> ";

$un= $_POST["un"];
$password= $_POST["password"];
echo '<h1 align=center>Library Management System</h1>';
$con= mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "library");
$c="SELECT * FROM front_page";
$result= mysqli_query($con, $c);
while($row=mysqli_fetch_row($result))
{
	if($un==$row[0] && $password==$row[1])
	{
		echo "<h1 align=center><a href=http://localhost/project/p_3.html> Insert Data </a></h1>";
		echo "<h1 align=center><a href=http://localhost/project/p_4.html> Watch Data </a></h1>";	
		echo "<h1 align=center><a href=http://localhost/project/p_5.html> Delete Data </a></h1>";
		echo "<br>";
		echo "<p align=center><a href=http://localhost/project/p_1.html> Log out </a></p>";		
	}
else
	{
		echo "<p align=center style=font-size:150%;>Log in failed.</p>";
		echo "<br>";
		echo "<p align=center><a href=http://localhost/project/p_1.html> Back </a></p>";
	}
}

?>