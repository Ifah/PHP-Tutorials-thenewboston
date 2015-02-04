<?php 

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(!empty($username) && !empty($password))
	{
		$password_hash = md5($password);
		$query = "SELECT id FROM users WHERE username='".mysqli_real_escape_string($mysql_connect, $username)."' AND password='".mysqli_real_escape_string($mysql_connect, $password_hash)."'";
		if($query_run = mysqli_query($mysql_connect, $query))
		{
			$query_run = mysqli_query($mysql_connect, $query);
			
			$query_num_rows = mysqli_num_rows($query_run);
			if($query_num_rows==0)
			{
				echo 'Invalid username/password.';
			}
			else if($query_num_rows==1)
			{
				$query_row = mysqli_fetch_assoc($query_run);
				$user_id = $query_row['id'];
				$_SESSION['user_id'] = $user_id;
				header('Location: index.php');
			}
		}
	}
	else
	{
		echo 'You must enter a username and password.';
	}
}
?>

<form action="<?php echo $current_file; ?>" method="POST">
	Username: <input type="text" name="username" maxlength="20"><br/>
	Password: <input type="password" name="password" maxlength="20"><br/>
	<input type="submit" value="Log In">
</form>