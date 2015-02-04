<?php

if(isset($_FILES['file']['name']))
{
	if(!empty($_FILES['file']['name']))
	{
		$name = $_FILES['file']['name'];
		//$size = $_FILES['file']['size'];
		$type = $_FILES['file']['type'];
		$tmp_name = $_FILES['file']['tmp_name'];
		$location = 'uploads/';
//when files are not named like 'filename.txt.exe'
//$extension = strtolower(substr($name, strpos($name, '.') + 1));
//otherwise use below to move to last part after .(dot)
		$offset = 0;
		while($strpos = strpos($name, '.', $offset))
		{
			$offset = $strpos + 1;
			$extension = strtolower(substr($name, $offset));
		}
		if(($extension=='jpg' || $extension=='jpeg')&&$type=='image/jpeg')
		{
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
			echo 'File must be jpg/jpeg';
		}
	}
	else
	{
		echo 'Please choose a file.';
	}
}
?>

<form action="90 Uploading Files Restricting File Extensions.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br/><br/>
	<input type="submit" value="Submit">
 
</form>