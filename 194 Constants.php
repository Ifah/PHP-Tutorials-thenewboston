<?php
//object
class Circle
{
	///property
	const pi = 3.141;
	
	public function Area($radius)
	{
		return self::pi * ($radius * $radius);
	}

}

$circle = new Circle;
echo $circle->Area(100);
?>