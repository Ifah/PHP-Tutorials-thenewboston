<?php
$user_ip = $_SERVER['REMOTE_ADDR'];

function echo_ip()
{
	global $user_ip; // global $user_ip, $another_variable, $other_variable;
	$string = 'Your ip address is :'.$user_ip;
	echo $string;
}

echo_ip();
?>