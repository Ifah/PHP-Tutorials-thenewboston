<?php 

$age = 17;

try
{
	if($age>18)
	{
		echo 'Old enough';
	}
	else
	{
		throw new Exception('Not old enough.');
	}
}
catch(Exception $ex)
{
	echo 'Error: '.$ex->getMessage();
}

?>