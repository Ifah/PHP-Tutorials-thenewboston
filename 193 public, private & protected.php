<?php
//object
class BankAccount
{
	///property
	//naming conventions - for public camel case eg $balanceOfAccount
	//naming conventions - for protected _T eg $_Tbalance
	//naming conventions - for private _ eg $_balance
	//public $balance = 3500;//can be accessed anywhere inside of your code
	//private $balance = 0;//cant be accessed outside of class whatsoever
	//protected $balance = 0;//can only be accessed within the class, so methods can access 
	protected $balance = 3500;
	//method
	public function DisplayBalance()
	{
			return 'Balance: '.$this->balance;
	}
}

//create new instance of class BankAccount
$alex = new BankAccount;
//try to access the property 
echo $alex->balance;
//output when it is public $balance = 3500

//output when it is private $balance = Fatal error: Cannot access private property BankAccount::$balance in C:\wamp\www\PHP Tutorials - thenewboston\echo.php on line 20

//output when it is public $balance = Fatal error: Cannot access protected property BankAccount::$balance in C:\wamp\www\PHP Tutorials - thenewboston\echo.php on line 20
?>