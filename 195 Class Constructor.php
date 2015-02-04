<?php
//object
class Example
{
	//public function __construct() //without parameters
	public function __construct($something) // with parameters
	{
		//$this->SaySomething(); //without parameters
		$this->SaySomething($something);
	}
	//public function SaySomething() //without parameters
	public function SaySomething($something)
	{
		//echo 'Something to be said';//without parameters
		echo $something;
	}

}

//$example = new Example; //without parameters
$example = new Example('Some text');

?>