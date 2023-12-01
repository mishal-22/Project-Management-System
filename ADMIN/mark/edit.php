<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$name = $_POST['name'];
		$first = $_POST['first'];
		$second = $_POST['second'];
		$demo = $_POST['demo'];
		$presentation = $_POST['presentation'];
		$report = $_POST['report'];
		$sql = "INSERT INTO members (id, name, first, second, demo, presentation, report) VALUES ('$id', '$name', '$first', '$second', '$demo', '$presentation', '$report')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Mark updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating mark';
		}
	}
	else{
		$_SESSION['error'] = 'Select id to edit first';
	}

	header('location: index1.php');

?>