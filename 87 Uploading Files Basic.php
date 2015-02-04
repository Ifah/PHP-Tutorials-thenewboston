<?php
//not safe/secure, user can upload any type of file like .exe, .php

if(isset($_FILES['file']['name']))
{
	if(!empty($_FILES['file']['name']))
	{
		$name = $_FILES['file']['name'];
		//$size = $_FILES['file']['size'];
		//$type = $_FILES['file']['type'];

		$tmp_name = $_FILES['file']['tmp_name'];
		$location = 'uploads/';
		if(move_uploaded_file($tmp_name, $location.$name))
		{
			echo 'Uploaded.';
		}
		else
		{
			echo 'There was an error.';
		}
	}
	else
	{
		echo 'Please choose a file.';
	}
}
?>

<form action="87 Uploading Files Basic.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br/><br/>
	<input type="submit" value="Submit">
 
</form>