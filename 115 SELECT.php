<?php 
require 'connect.inc.php';

$query = "SELECT food, calories FROM food ORDER BY id";
$query = "SELECT food, calories FROM food ORDER BY id DESC";
$query = "SELECT food, calories FROM food ORDER BY id ASC";
$query = "SELECT food, calories FROM food WHERE healthy_unhealthy = 'h' ORDER BY id DESC";
$query = "SELECT food, calories FROM food WHERE healthy_unhealthy = 'u' ORDER BY id DESC";
$query = "SELECT food, calories FROM food WHERE healthy_unhealthy = 'u' AND calories >= '100' ORDER BY id DESC";

if($query_run = mysqli_query($mysql_connect, $query))
{
	if(mysqli_num_rows($query_run)==NULL)
	{
		echo 'No results found.';
	}
	else
	{
		while($query_row = mysqli_fetch_assoc($query_run))
		{
			$food = $query_row['food'];
			$calories = $query_row['calories'];
			
			echo $food.' has '.$calories.' calories.<br/>';
		}
	}
}
else
{
	echo mysqli_error($mysql_connect);
}
?>