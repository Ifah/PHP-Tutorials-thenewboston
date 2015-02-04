<?php
//unset - to unset a particular session we specify
//session destroy - unset all sessions related to that user on server

session_start();

unset($_SESSION['username']);
//to destroy/unset all sessions that currently exists, not for all users accross the website, just between the connection user and server
session_destroy();
?>