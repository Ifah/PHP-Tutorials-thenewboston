<?php

class BankAccount
{
	public $balance = 0;
	public $type = '';
	
	public function SetType($type_input)
	{
		$this->type = $type_input;
	}
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

class SavingsAccount extends BankAccount
{
	
}

$alex = new BankAccount;
$alex->SetType('18-25 Current');
$alex->Deposit(100);
$alex->Withdraw(10);

$alex_savings = new SavingsAccount;
$alex_savings->SetType('Super Saver');
$alex_savings->Deposit(3000);

echo $alex->type.' has '.$alex->DisplayBalance().'<br/>';
echo $alex_savings->type.' has '.$alex_savings->DisplayBalance();

?>