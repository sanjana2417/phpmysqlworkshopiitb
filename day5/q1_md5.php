<?php
require "connect.php";
?>
<html>
<body>
<form action="md5.php" method="POST">
Username:<input type="text" name="username"><br><br>
Password:<input type="text" name="password"><br><br>
<input type="submit" value="Submit" name="submit"><br>

<?php
if(isset($_POST['submit']))
{
	$name=$_POST['username'];
	$pass=md5($_POST['password']);

	$user="INSERT INTO `user`(`username`, `password`) VALUES ('$name','$pass')";

	if(mysqli_query($conn,$user))
	{
	echo "success <br>";
	}
	else
	{
		echo "data not inserted";
	}
}
?>
</form>
</body>
</html>