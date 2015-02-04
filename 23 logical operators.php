<?php
// && = and
// AND = and
// and = and
// || = or
// OR = or
// or = or
// <, > <=, >=, ==, <>, !=
$number = 999.999;

$upper = 1000;
$lower = 500;

if($number>=$lower && $number<=$upper)
{
	echo 'ok';
}
else
{
	echo 'Number must be between '.$lower.' and '.$upper;
}

//

if($number==$lower || $number==$upper)
if(!($number==$lower)&&!($number==$upper))
?>