<?php
/*
	George Mitchell
	CSCI 4000
	Fall 2021
	Assignment 3
*/
require_once('george_mitchell_database.php');
$student_id = filter_input(INPUT_POST, 'student_id', FILTER_VALIDATE_INT);
$student_name = filter_input(INPUT_POST, 'student_name');

//echo $student_id."<br>\n";
//echo $student_name."<br>\n";

if ($student_id != false && $student_name != false){
	$query = 'DELETE FROM student WHERE studentID = :student_id';

	$statement = $db->prepare($query);
	$statement->bindValue(':student_id',$student_id);
	$statement->execute();
	$statement->closeCursor();
}

include('index.php');
?>