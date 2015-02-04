<?php 
//include this file
//call below function 
function hit_count()
{
	if(!empty($_SERVER['HTTP_CLIENT_IP']))
	{
		$ip_address = $_SERVER['HTTP_CLIENT_IP'];
	}
	else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else
	{
		$ip_address = $_SERVER['REMOTE_ADDR'];
	}
	
	$ip_file = file('ip.txt');
	foreach($ip_file as $ip)
	{
		$ip_single = trim($ip);
		if($ip_address==$ip_single)
		{
			$found = true;
			break;
		}
		else
		{
			$found = false;
		}
	}
	if($found==false)
	{
		$filename = 'count.txt';
		
		$handle = fopen($filename, 'r');
		$current = fread($handle, filesize($filename));
		fclose($handle);
		
		$current_increment = $current + 1;
		
		$handle = fopen($filename, 'w');
		fwrite($handle, $current_increment);
		fclose($handle);
		
		$handle = fopen('ip.txt', 'a');
		fwrite($handle, $ip_address."\n");
		fclose($handle);
		
		
	}
}
?>