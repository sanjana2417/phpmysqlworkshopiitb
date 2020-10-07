<?php
require "connect.php";
?>
<html>
<body>
<form action="student_mysql.php" method="POST">
Name of Student:<input type="text" name="name">
<br><br>
Subject 1:<input type="number" name="sub1">
<br><br>
Subject 2:<input type="number" name="sub2">
<br><br>
Subject 3:<input type="number" name="sub3">
<br><br>
Subject 4:<input type="number" name="sub4">
<br><br>
Subject 5:<input type="number" name="sub5">
<br><br>
<input type="submit" value="Submit" name="submit">
<br>
<input type="submit" value="Update" name="update>"<br>
<br>


<?php
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$marks1=$_POST['sub1'];
	$marks2=$_POST['sub2'];
	$marks3=$_POST['sub3'];
	$marks4=$_POST['sub4'];
	$marks5=$_POST['sub5'];
	$marks_obtained=$marks1+$marks2+$marks3+$marks4+$marks5;
	$total=500;
	$per=($marks_obtained/$total)*100;
	echo "Total Marks Obtained: $marks_obtained<br>";
	echo "Total Marks: $total<br>";
	echo "Percentage: $per <br>";
	
	$result="INSERT INTO `class1`( `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total obtained`, `total marks`, `percentage`) VALUES ('$name','$marks1','$marks2','$marks3','$marks4','$marks5','$marks_obtained','$total','$per')";
	if(mysqli_query($conn,$result))
	{
		echo "success <br>";
	}
	else
	{
		echo "data not inserted";
	}
}
	if (isset($_POST['update']))
{
	$name=$_POST['name'];
	$marks1=$_POST['sub1'];
	$marks2=$_POST['sub2'];
	$marks3=$_POST['sub3'];
	$marks4=$_POST['sub4'];
	$marks5=$_POST['sub5'];
	$marks_obtained=$marks1+$marks2+$marks3+$marks4+$marks5;
	$total=500;
	$per=($marks_obtained/$total)*100;
	echo "Total Marks Obtained: $marks_obtained<br>";
	echo "Total Marks: $total<br>";
	echo "Percentage: $per <br>";

	$result="UPDATE `class1` SET `sub5`='99',`total obtained`='$marks_obtained',`total marks`='$total',`percentage`='$per' WHERE 1";
	mysqli_query($conn,$result);
	if(mysqli_query($conn,$result))
	{
		echo "<br>record updated successfully";
	}
	

	else
	{ 
		echo "updation failed";
	}


	mysqli_close($conn);
}
?>
</form>
</body>
</html>