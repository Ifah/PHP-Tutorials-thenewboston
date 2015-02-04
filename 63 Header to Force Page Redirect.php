<?php 
$redirect_page = 'http://google.us';
$redirect = true;

if($redirect == true)
{
	header('Location: '.$redirect_page);
}

?>