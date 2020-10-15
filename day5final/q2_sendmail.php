<html>
<form action="q2_sendmail.php" method="POST">
<h3>feedback form</h3>
Username:<input type="text" name="username"><br><br>
Mail id:<input type="text" name="mailid" ><br><br>
Feedback:<textarea name="feedback"></textarea>
<br><br><input type="submit" name="submit" value="get mail">
</html>
<?php
if(@$_POST["submit"])
{
	$username=@$_POST["username"];
	$feedback=@$_POST["feedback"];
	$to=@$_POST["mailid"];
	$subject="feedback ";
	$msg="$username Thankyou for your feedback.Here is a response of what you have submitted".$feedback;

	$from="From:admin@sanjsurvey.com";
	if(mail($to,$subject,$msg,$from))
	{
		echo "<br><br>mail sent successfully";
	}
	else
	{
	echo " mail could not be sent";
	}
	if (mail("sanju1234.barhate@gmail.com", "copy of respone($username)", "$feed", $from)){
	echo "<br><br>admin will contact you soon";
	}
}
?>