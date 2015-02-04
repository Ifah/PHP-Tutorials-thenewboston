<?php
echo 'Hello';
// die();
// exit();
// die('Error. bla bla bla');
// exit('Error. bla bla bla');
echo 'world';

//below will generate system error message as well as user specified message in die.
mysql_connect('localhost','root','') or die('Could not connect to database.');
echo 'Connected.';

//to only show the user specified message in die
@mysql_connect('localhost','root','') or die('Could not connect to database.');
echo 'Connected.';
?>