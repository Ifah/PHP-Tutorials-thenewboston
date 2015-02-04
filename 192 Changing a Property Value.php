<?php
//object
class BankAccount
{
	//property
	public $balance = 10.5;//can be accessed anywhere inside of your code
	//private $balance = 0;//cant be accessed outside of class whatsoever
	//protected $balance = 0;//can only be accessed within the class, so methods can access 
	
	//method
	public function DisplayBalance()
	{
			return 'Balance: '.$this->balance;
	}
	
	public function Withdraw($amount)
	{
		if(($this->balance)<$amount)
		{
			echo 'Not enough money.';
		}
		else
		{
			$this->balance = $this->balance - $amount;
		 }
	}
}

//create new instance of class BankAccount
$alex = new BankAccount;
//withdrawing 
$alex->Withdraw(11);
//echo out properties within class or run/use methods within class
echo $alex->DisplayBalance();
?>