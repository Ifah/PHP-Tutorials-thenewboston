<?php 
//to create hash
	//$string = 'password';
	//$string_hash = md5($string);
	//echo $string_hash;
if(isset($_POST['user_password']))
{
	if(!empty($_POST['user_password']))
	{
		$user_password = md5($_POST['user_password']);
		
		$filename = 'hash.txt';	
		$handle = fopen($filename, 'r');
		$file_password = fread($handle, filesize($filename));
		fclose($handle);
		
		if($user_password==$file_password)
		{
			echo 'Password OK.';
		}
		else
		{
			echo 'Incorrect password.';
		}
	}
	else
	{
		echo 'Please enter a password.';
	}
}

?>


<form action="96 MD5 Encryption.php" method="POST">
	Password: <input type="text" name="user_password"><br/><br/>
	<input type="submit" value="Submit">
</form>