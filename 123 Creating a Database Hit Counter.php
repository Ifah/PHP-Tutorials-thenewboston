<?php 
require 'connect.inc.php';

if(!empty($_SERVER['HTTP_CLIENT_IP']))
{
	$user_ip = $_SERVER['HTTP_CLIENT_IP'];
}
else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
	$user_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
	$user_ip = $_SERVER['REMOTE_ADDR'];
}

function ip_exists($ip)
{
	global $user_ip;
	$query = "SELECT ip FROM hits_ip WHERE ip='$user_ip'";
	$query_run = mysql_query($query);
	$query_num_rows = mysql_num_rows($query_run);
	if($query_num_rows==0)
	{
		return false;
	}
	else if($query_num_rows>=1)
	{
		return true;
	}
}

function ip_add($ip)
{
	$query = "INSERT INTO hits_ip VALUES ('$ip')";
	$query_run = mysql_query($query);
}

function update_count()
{
	$query = "SELECT count FROM hits_count";
	if($query_run = mysql_query($query))
	{
		$count = mysql_result($query_run, 0, 'count');
		$count_increment = $count + 1;		
		$query_update = "UPDATE hits_count SET count = '$count_increment'";
		$query_update_run = mysql_query($query_update);
	}
}
if(!ip_exists($user_ip))
{
	update_count();
	ip_add($user_ip);
}

?>