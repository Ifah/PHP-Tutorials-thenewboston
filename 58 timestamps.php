<?php 
$time = time();
$actual_time = date('H:i:s', $time);//output = The current time is10:41:49
$actual_time = date('D M Y', $time);//output =The current time is Fri Nov 2014

$actual_time = date('d m Y', $time);//output =The current time is 07 11 2014

$actual_time = date('D M Y @ H:i:s', $time);//output =The current date/time is Fri Nov 2014 @ 10:45:14

echo 'The current date/time is '.$actual_time;
?>