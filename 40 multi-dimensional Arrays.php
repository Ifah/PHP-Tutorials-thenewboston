<?php
//array inside array 2d/3d array
// +Healthy
//	 Salad
//   Vegetable
//	 Pasta
// +Unhealthy
//	 Pizza
//	 Ice Cream

$food = array('Healthy'=>
						array('Salad', 'Vegetable', 'Pasta'),
			  'Unhealthy'=>
						array('Pizza', 'Ice Cream'));

echo $food['Healthy'][1];
echo '<br/>';
echo $food['Unhealthy'][0];
?>