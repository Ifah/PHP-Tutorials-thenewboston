<?php 
require '180 connect.inc.php';

if(isset($_POST['text']))
{
	if(!empty($_POST['text']))
	{
		$text = $_POST['text'];
		$query = "INSERT INTO data VALUES ('','".mysqli_real_escape_string($mysql_connect, $text)."')";
		if($query_run = mysqli_query($mysql_connect, $query))
		{
			echo 'Data inserted.';
		}
		else
		{
			echo 'Failed.';
		}
	}
	else
	{
		echo 'Please type something.';
	}
}
?>