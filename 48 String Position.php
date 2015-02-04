<?php
//strpos('string to search in','keyword or character to find','offset where to start search from');
$string = 'This is a string, and it is an example';
$find = 'is';
$find_length = strlen($find);
echo strpos($string, $find);


echo '<br/>';
echo strpos($string, $find, 10);

$offset = 0;
echo '<br/>';
while($string_position = strpos($string, $find, $offset))
{
	echo '<strong>'.$find.'</strong> Found at '.$string_position.'<br/>';
	$offset = $string_position + $find_length;
}
?>