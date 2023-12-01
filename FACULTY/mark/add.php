<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$first = $_POST['first'];
		$second = $_POST['second'];
		$demo = $_POST['demo'];
		$presentation = $_POST['presentation'];
		$report = $_POST['report'];
		$sql = "INSERT INTO members (id, name, first, second, demo, presentation, report) VALUES ('$id', '$name', '$first', '$second', '$demo', '$presentation', '$report')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Mark added succefully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index1.php');
?>