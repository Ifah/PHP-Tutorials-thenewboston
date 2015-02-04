<?php

class BankAccount
{
	public $balance = 0;
	
	public function DisplayBalance()
	{
			return 'Balance: '.$this->balance.'<br/>';
	}
	
	public function Withdraw($amount)
	{
		if(($this->balance)<$amount)
		{
			echo 'Not enough money.<br/>';
		}
		else
		{
			$this->balance = $this->balance - $amount;
		 }
	}
	
	public function Deposit($amount)
	{
		$this->balance = $this->balance + $amount;
	}
}

$alex = new BankAccount;
$billy = new BankAccount;
$alex->Deposit(100);
$billy->Deposit(15);


$alex->Withdraw(20);
$billy->Withdraw(5);

echo $alex->DisplayBalance();
echo $billy->DisplayBalance();
?>