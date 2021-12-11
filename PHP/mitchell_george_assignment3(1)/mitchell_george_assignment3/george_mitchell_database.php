<?php
/*
	George Mitchell
	CSCI 4000
	Fall 2021
	Assignment 3
*/
$dsn = 'mysql:host=localhost;dbname=george_mitchell_assignment_db';
$username = 'georgeweb';
$password = 'georgechocolate';


try{
	$db = new PDO($dsn, $username, $password);
	//echo "Successful in connecting to database<br>\n";
} catch (PDOException $e){
	$error_message = $e->getMessage();
	//echo 'something went wrong';
	//echo $error_message;
	include('george_mitchell_database_error.php');
	exit();
}

?>
