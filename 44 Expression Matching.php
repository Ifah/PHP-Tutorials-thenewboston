<?php
//matching patterns inside a string
$string = 'This is a string.';

if(preg_match('/is/', $string))
{
	echo 'Match Found.';
}
else
{
	echo 'Match Not Found.';
}

echo '<br/>';

function has_space($string)
{
		if(preg_match('/ /', $string))
		{
			return true;
		}
		else
		{
			return false;
		}
}
$string = 'thisdoesnothavespace';
if(has_space($string))
{
	echo 'Has atleast one space.';
}
else
{
	echo 'Has no space.';
}
?>