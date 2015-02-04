<?php 
require 'core.inc.php';

if(!loggedin())
{
	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_confirm'])&&isset($_POST['firstname'])&&isset($_POST['surname']))
	{
		$username = trim($_POST['username']);
		
		$password = trim($_POST['password']);
		$password_again = trim($_POST['password_confirm']);
		
		$firstname = trim($_POST['firstname']);
		$surname = trim($_POST['surname']);
		if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname))
		{
			if(strlen($username)>30||strlen($firstname)>30||strlen($surname)>30)
			{
				echo 'Please adhere to maxlength of fields.';
			}
			else
			{
				if($password!=$password_again)
				{
					echo 'Passwords do not match.';
				}
				else
				{
					$password_hash = md5($password);
					
					$query = "SELECT username FROM users WHERE username='".mysqli_real_escape_string($mysql_connect, $username)."'";
					$query_run = mysqli_query($mysql_connect, $query);
					$query_num_rows = mysqli_num_rows($query_run);
					if($query_num_rows>=1)
					{
						echo 'The username '.$username.' already exists.';
					}
					else
					{
						$query = "INSERT INTO users VALUES ('','".mysqli_real_escape_string($mysql_connect, $username)."','".mysqli_real_escape_string($mysql_connect, $password_hash)."','".mysqli_real_escape_string($mysql_connect, $firstname)."','".mysqli_real_escape_string($mysql_connect, $surname)."')";
						if($query_run = mysqli_query($mysql_connect, $query))
						{
							header('Location: register_success.php');
						}
						else
						{
							echo 'Sorry, we couldn\'t register you at this time. Try again later.';
						}
					}
				}
			}
		}
		else
		{
			echo 'All fields are required.';
		}
	}
?>

<form action="register.php" method="POST">
	Username: <br/><input type="text" name="username" maxlength="30" value="<?php if(isset($username)) { echo $username; } ?>"><br/><br/>
	Password: <br/><input type="password" name="password" maxlength="30"><br/><br/>
	Confirm Password: <br/><input type="password" name="password_confirm" maxlength="30"><br/><br/>
	First Name:<br/><input type="text" name="firstname" maxlength="30" value="<?php if(isset($firstname)) { echo $firstname; } ?>"><br/><br/>
	Surname:<br/><input type="text" name="surname" maxlength="30" value="<?php if(isset($surname)) { echo $surname; } ?>"><br/><br/>
	<input type="submit" value="Register">
</form>

<?php
}
else if(loggedin())
{
	echo 'You\'re already registered and logged in.';
}
?>