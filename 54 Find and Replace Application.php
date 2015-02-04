<?php
$offset = 0;

if (isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith']))
{
	$text = $_POST['text'];
	$search = $_POST['searchfor'];
	$replace = $_POST['replacewith'];
	
	$search_length = strlen($search);
	
	if(!empty($text) && !empty($search) && !empty($replace))
	{
		while($strpos = strpos($text, $search, $offset))
		{
			$offset = $strpos + $search_length;
			$text = substr_replace($text, $replace, $strpos, $search_length);
		}
		
		echo $text;
	}
	else
	{
		echo 'Please fill in all the fields.';
	}
}
?>

<form action="echo.php" method="POST">
	<textarea name="text" rows="6" cols="30"><?php if(!empty($text)) {echo $text; } ?></textarea><br/><br/>
	Search for:<br/>
	<input type="text" name="searchfor"><br/><br/>
	Replace with:<br/>
	<input type="text" name="replacewith"><br/><br/>
	<input type="submit" value="Find and Replace">
</form>