<?php
$conn_error = 'Could not connect.';

$mysql_host = 'localhost';
$mysql_user = 'ifah';
$mysql_pass = 'password';

$mysql_connect = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass);
$mysql_db = 'a_database1';

if(!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysqli_select_db($mysql_connect, $mysql_db))
{
	die($conn_error);
}

?>