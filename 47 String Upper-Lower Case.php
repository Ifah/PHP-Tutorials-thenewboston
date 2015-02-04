<?php
$string = 'Ifah Could bE aNy text.';

$string_lower = strtolower($string);
echo $string_lower;

$string_upper = strtoupper($string);
echo $string_upper;

echo '<br/>';
if(isset($_GET['user_name'])&&!empty($_GET['user_name']))
{
	$user_name = $_GET['user_name'];
	$user_name_lc = strtolower($user_name);
	
	if($user_name_lc=='ifah')
	{
		echo 'works, '.$user_name;
	}
}

?>
<form action ="echo.php" method="GET">
Name: <input type="text" name="user_name"><br/><br/>
<input type="submit" value="submit">

</form>