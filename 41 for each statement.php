<?php
$food = array('Healthy'=>
						array('Salad', 'Vegetable', 'Pasta'),
			  'Unhealthy'=>
						array('Pizza', 'Ice Cream'));

foreach($food as $element => $inner_array)
{
	echo '<strong>'.$element.'</strong><br/>';
	foreach($inner_array as $item)
	{
		echo $item.'<br/>';
	}
}
?>