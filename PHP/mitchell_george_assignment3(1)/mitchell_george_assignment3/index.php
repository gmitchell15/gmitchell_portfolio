<?php
/*
	George Mitchell
	CSCI 4000
	Fall 2021
	Assignment 3
*/
require_once('george_mitchell_database.php');

if (!isset($student_id)){
	$student_id = filter_input(INPUT_GET, 'student_id', FILTER_VALIDATE_INT);
	if ($student_id == NULL || $student_id == FALSE){
		$student_id = 1;
	}
}

//This query gets everything from the student table
$query = "SELECT * FROM student";
$statement = $db->prepare($query);
$statement->execute();
$students = $statement->fetchAll();
$statement->closeCursor();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>George Mitchell Kung Fu School - Students</title>
<meta charset="utf-8">
<link href="main.css" rel="stylesheet">
</head>
<body>
	<header>
		<h1>George Mitchell Kung Fu School - Students</h1>
	</header>
	<main>
		<h1 id="format">Student List</h1>
		<section>
			<table>
			<tr>
				<th>Student ID</th>
				<th>Name</th>
				<th>Email</th>
				<th></th>
			</tr>
			
			<?php
				//loops through student table
				foreach ($students as $student){
			?>
			<tr>
				<!--Gets studentID from student table in database and outputs it into html table-->
				<td><?php echo $student['studentID']; ?></td>
				<!--Gets student name from student table in database and outputs it into html table-->
				<td><?php echo $student['name']; ?></td>
				<!--Gets student email from student table in database and outputs it into html table-->
				<td><?php echo $student['email']; ?></td>
				<td>
				<form action="george_mitchell_delete_student.php" method="post">
					<!--The below values are used to identify a data set in the database and delete it-->
					<input type="hidden" name="student_id" value="<?php echo $student['studentID'] ?>">
					<input type="hidden" name="student_name" value="<?php echo $student['name'] ?>">
					<input type="submit" value="Delete">
				</form>
				</td>
			</tr>
			<?php
				}//end foreach
			?>
			</table>
			<br>
			<p><a href="george_mitchell_add_student_form.php">Add Student</a></p>
		</section>
	</main>
	
	<footer>
		<p>
			&copy; <?php echo date("Y"); ?> Kungfu Panda Shop, Inc.
		</p>
	</footer>
</body>

</html>
