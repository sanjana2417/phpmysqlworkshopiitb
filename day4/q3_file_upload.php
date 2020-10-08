<html>
	<title>Upload File</title>
<body>
	
	<form action="q3_file_upload.php " method="POST" enctype="multipart/form-data">
		<input type="file" name="fileName"><br>
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $fileName = $_FILES['fileName']['name'];
    $tempName = $_FILES['fileName']['tmp_name'];
    
    if(isset($fileName))
    {
        if(!empty($fileName))
        {
            $location = "uploads/";
            if(move_uploaded_file($tempName, $location.$fileName))
            {
                echo 'File Uploaded';
            }
        }
    }
}
?>