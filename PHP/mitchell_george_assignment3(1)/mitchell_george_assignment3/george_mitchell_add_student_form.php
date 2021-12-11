<?php
/*
	George Mitchell
	CSCI 4000
	Fall 2021
	Assignment 3
*/
require_once('george_mitchell_database.php');

//Selects all data from the student table and orders it by studentID
$query = "SELECT * FROM student ORDER BY studentID";
$statement = $db->prepare($query);
$statement->execute();
$students = $statement->fetchAll();
$statement->closeCursor();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>George Mitchell Kung Fu School - Add Students</title>
<meta charset="utf-8">
<link href="main.css" rel="stylesheet">
</head>
<body>
	<header>
		<h1>George Mitchell Kung Fu School - Add Students</h1>
	</header>
	<main>
		<section>
			<h1>Add Student</h1>
			<!--Used to add new student information-->
			<form method="post" action="george_mitchell_add_student.php" id="add_product_form">
				<label>Name:</label>
				<input name="name" text="text">
				<br>
				<label>Email:</label>
				<input name="email" text="text">
				<br>
				<label>&nbsp;</label>
				<input type="submit" value="Add Student">
			</form>
			<br>
			<p><a href="index.php">View Student List</a></p>
		</section>
	</main>
	
	<footer>
		<p class="right">
			&copy; <?php echo date("Y"); ?> Kungfu Panda Shop, Inc.
		</p>
	</footer>
</body>

</html>
