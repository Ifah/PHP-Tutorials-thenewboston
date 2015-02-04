<?php
	$country="Maldives";
	
	switch($country)
	{
		case "Maldives":
			echo "you are in Maldives!";
			break;
		case "Japan":
			echo "you are in Japan!";
			break;
		default:
			echo "where are you?";
			break;
	}
	
	echo '<br/>';
	
	$day = 'Monday';
	switch ($day)
	{
		case 'Friday':
		case 'Saturday':
			echo 'It\'s a weekend.';
			break;
		default:
			echo 'Not weekend.';
			break;
	}
	
?>