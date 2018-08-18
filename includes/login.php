<?php

session_start();

if (isset($_POST['submit'])) {
	include ('db.php');
	$username = $_POST['username'];
	$pwd = $_POST['password'];
	// error handlers
	// check if input is empty
	if (empty($username) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE username = '$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=errorusername");
			exit();
		}else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				
				if ($pwd != $row['password']) {
					header("Location: ../index.php?login=passworderror");
					 exit();
				}elseif ($pwd == $row['password']) {
					//Log in the user here
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['password'] = $row['password'];
					header("Location: ../home.php?login=succsess");
					exit();
				}
			}
		}
	}
}else {
	header("Location: ../index.php?login=error");
	exit();
}