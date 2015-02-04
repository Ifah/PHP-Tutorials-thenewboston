<?php 
$time = time();
$time_now = date('d M Y @ H:i:s', $time);
$time_modified = date('d M Y @ H:i:s', $time-60);
//$time_modified = date('d M Y @ H:i:s', $time-60);

echo 'The time now is  '.$time_now;
echo '<br/>The time modified is '.$time_modified;
//output = The time now is 07 Nov 2014 @ 10:58:47
//			The time modified is 07 Nov 2014 @ 10:57:47
echo '<br/>';

$time_now = date('d M Y @ H:i:s', $time);
$time_modified = date('d M Y @ H:i:s', strtotime('-1 week'));
echo 'The time now is  '.$time_now;
echo '<br/>The time modified is '.$time_modified;
//output = The time now is 07 Nov 2014 @ 10:58:47
// 			The time modified is 31 Oct 2014 @ 10:58:47


echo '<br/>';

$time_now = date('d M Y @ H:i:s', $time);
$time_modified = date('d M Y @ H:i:s', strtotime('+1 week 2 hours 30 seconds'));
echo 'The time now is  '.$time_now;
echo '<br/>The time modified is '.$time_modified;
//output = The time now is 07 Nov 2014 @ 11:01:24
//			The time modified is 14 Nov 2014 @ 13:01:54
?>