<?php
	session_start();
	include '../includes/conn.php';

	if(isset($_POST['login'])){
		$admission = $_POST['anumber'];
		$password = $_POST['password'];

		

		$sql = "SELECT * FROM voters WHERE admission_number = '$admission'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['message']="Cannot find voter with the given Admission Number!!";
				$_SESSION['msg_type']="danger";
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['voter'] = $row['id'];
			}
			else{
				
				$_SESSION['message']="Incorrect password!!";
				$_SESSION['msg_type']="danger";
			}
		}
		
	}
	

	header('location: login.php');
	






?>