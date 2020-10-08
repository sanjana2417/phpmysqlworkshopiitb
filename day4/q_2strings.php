<html>
<body>
<form action="q_2strings.php" method="POST">
<label for="string">Enter any string: </label>

<input type="text" name="string">

<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if (isset($_POST["submit"]))
{
	$string=$_POST["string"];
	echo strlen($string),"<br>";
	$new=explode(" ",$string);
	$new1=implode($new);
	echo $new1."<br>";
	echo strrev("$string")."<br>";
	echo mb_strtolower($string)."<br>";
	echo mb_strtoupper($string)."<br>";
	$substring="none";
	echo "Before replacing Substring= ".$substring."<br>";
	$replace=substr_replace($substring,$string,0,strlen($substring));
	echo "After replacing Substring= ".$replace."<br>";



}


?>