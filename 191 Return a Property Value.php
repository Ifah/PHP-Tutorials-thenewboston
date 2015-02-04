<?php
//object
class BankAccount
{
	//property
	public $balance = 0;//can be accessed anywhere inside of your code
	//private $balance = 0;//cant be accessed outside of class whatsoever
	//protected $balance = 0;//can only be accessed within the class, so methods can access 
	
	//method
	public function DisplayBalance()
	{
		return 'Balance: '.$this->balance;	
	}	
}

//create new instance of class BankAccount
$alex = new BankAccount;

//echo out properties within class or run/use methods within class
echo $alex->DisplayBalance();
?>