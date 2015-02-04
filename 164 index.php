<?php 
session_start();

if(!isset($_POST['secure']))
{
	$_SESSION['secure'] = rand(1000,9999);
}
else
{
	if($_SESSION['secure']==$_POST['secure'])
	{
		echo 'A match.';
	}
	else
	{
		echo 'Incorrect, try again.';
		$_SESSION['secure'] = rand(1000,9999);
	}
}

?>

<br/><img src="164 - Creating Captcha Image Security.php"/><br/>

<form action="164 index.php" method="POST">
	Type the value you see: <input type="text" size="6" name="secure" maxlength="5"><input type="submit" value="Submit">
</form>