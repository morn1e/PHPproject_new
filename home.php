<?php
//var_dump($_POST);

if (!empty($_POST['username']) && !empty($_POST['password'])) {
	echo "Welcome ". $_POST['username']. "!" ;
	session_start();
	$_SESSION['username'] = $_POST['username'];
}else {
	echo "Invalid username or password";
}

if (isset($_SESSION['username'])) {
echo "<p>".$_SESSION['username']. " enjoy your stay! </p>";
}