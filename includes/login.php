<?php

session_start();
include ('db.php');

// if (isset($_POST['submit'])) {
// 	include ('db.php');
// 	// $username= $_POST['username'];
// 		$username= 'ivan';
// 		echo $username;
// 	$pwd = $_POST['password'];
// 	//error handlers
// 	//Check if inputs are empty

// 	if (empty($username || empty($pwd))) {
// 		header("Location: ../index.php?login=empty");
// 	    exit();
// 	}else {
// 		$q = "SELECT * FROM users WHERE username = 'ivan' ";
// 		$res = mysqli_query($conn, $q);
// 		$row = mysqli_fetch_assoc($res);
// 		var_dump($row['username']);

// 		if (mysqli_num_rows($res) < 1) {

// 			// header("Location: ../index.php?login=errorusername");
// 	  //       exit();
// 		}else{
// 			if ($row = mysqli_fetch_assoc($res)) {
// 				//de-hashing the password
// 				$hashedPwdCheck = password_verify($pwd, $row['password']);
// 				if ($hashedPwdCheck == false) { 
// 					// header("Location: ../index.php?login=errorpassword");
// 					// exit();
// 				} elseif ($hashedPwdCheck == true) {
// 					//Log-in the user here..
// 					$_SESSION['user_id'] = $row['user_id'];
// 					$_SESSION['username'] = $row['username'];
// 					 header("Location: ../home.php?login=succsess");
// 					 exit();
// 				}
// 			}
// 		}
// 	}
// } else {
// 	header("Location: ../index.php?login=error");
// 	exit();
// }


if (isset($_POST['submit'])) {
	$username= $_POST['username'];
	$password = $_POST['password'];

	echo $username;
	echo $password;

	$q = "SELECT * FROM users WHERE user_id = 2 ";
	$res = mysqli_query($conn, $q);
	$row = mysqli_fetch_assoc($res);

	var_dump($row);

} else {
	header("Location: ../index.php?login=error");
	exit();
}