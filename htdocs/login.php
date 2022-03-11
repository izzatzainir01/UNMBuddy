<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])){
	
	//This function is for security measures
	function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	//Security Measure
	if(empty($uname)){
		header("Location: index.php?error=User Name is required");
		exit();

	}else if(empty($pass)){
		header("Location: index.php?error=Password is required");
		exit();

	}else{

		//Cross checking between database and user input
		$sql = "SELECT * FROM loginform WHERE username ='$uname' AND password ='$pass'";
		
		$result =mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);

			//Another Security Measure
			if ($row['username'] === $uname && $row['password'] === $pass){
				$_SESSION['id'] = $row['id'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['name'] = $row['name'];

				//redirect to HomePage
				header("Location: home.php");

			}else{
				header("Location: index.php?error=Incorrect Username or Password");
				exit();
			}

			print_r($row);
		}else{
			header("Location: index.php?error=Incorrect Username or Password");
			exit();
		}
	}

//Returns the user to the main page if user tries to access login directly from folder path e.g. (localhost/login.php)
}else{
	header("Location: index.php");
	exit();
}
