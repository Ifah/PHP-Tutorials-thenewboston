<?php
function add($number1, $number2)
{
	echo $number1 + $number2;
}

$inumber1=10;
$inumber2=20;
add($inumber1, $inumber2);

echo '<br/>';

function displayDate($day, $date, $year)
{
	echo $day.' '.$date.' '.$year;
}

displayDate('Monday', 31, 2011);
?>