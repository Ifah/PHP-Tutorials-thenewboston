<?php 
ob_start();
?>


<h1>My Page<h1/>


<?php 
$redirect_page = 'http://google.us';
$redirect = true;

if($redirect == true)
{
	header('Location: '.$redirect_page);
}

ob_end_clean();//if redirecting page
ob_end_flush();//if not redirecting 
?>