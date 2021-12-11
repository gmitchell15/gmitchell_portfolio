<?php
/*
	George Mitchell
	CSCI 4000
	Fall 2021
	Assignment 3
*/
//gets student name and email that user wants to add to database
$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');

//checks if name or email is empty
if ($name == null || $email == null || !str_contains($email, '@')){
	$error = "Invalid student Data. Check all fields and try again.";
	//included error page if user enters bad values
	include('george_mitchell_add_error.php');
}else {
	require_once('george_mitchell_database.php');
	$query = 'INSERT INTO student (name, email)
	Values (:name, :email)';

	$statement = $db->prepare($query);
	$statement->bindValue(':name',$name);
	$statement->bindValue(':email',$email);
	$statement->execute();
	$statement->closeCursor();
	include('index.php');
}
?>