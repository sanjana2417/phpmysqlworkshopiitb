<html>
<body>
<form action='student.php'method="POST">
Name of the student:<input type="text" name="name"> <br><br>
Marks in each subject<br>
<br>
Subject1:<input type ="text" name="sub1"><br>
<br>
Subject2:<input type ="text" name="sub2"><br>
<br>
Subject3:<input type ="text" name="sub3"><br>
<br>
Subject4:<input type ="text" name="sub4"><br>
<br>
Subject5:<input type ="text" name="sub5"><br>
<br>
<input type='submit' value='submit'>
<br>
<?php
$marks1=$_POST['sub1'];
$marks2=$_POST['sub2'];
$marks3=$_POST['sub3'];
$marks4=$_POST['sub4'];
$marks5=$_POST['sub5'];
$total=500;
$marks_obtained=$marks1+$marks2+$marks3+$marks4+$marks5;
$per=($marks_obtained/$total)*100;
echo "Total Marks Obtained: $marks_obtained<br>";
echo "Total Marks: $total<br>";
echo "Percentage: $per";
?>
</form>
</body>
</html>
