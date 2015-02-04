<?php 
$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

if(!empty($http_client_ip))
{
	$ip_address = $http_client_ip;
}
else if(!empty(http_x_forwarded_for))
{
	$ip_address = $http_x_forwarded_for;
}
else
{
	$ip_address = $remote_addr;
}

echo $ip_address;
?>

<?php 
//above is producing error 
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

echo $ip_address;
?>