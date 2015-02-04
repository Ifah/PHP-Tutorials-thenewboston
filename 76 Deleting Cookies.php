<?php 
//this sets the cookie
setcookie('username', 'ifah', time()+20); //20 is in seconds

//this deletes/unsets cookie
setcookie('username', 'ifah', time()-20);
?>