<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	<h1><i class="fab fa-facebook text-primary"></i></h1>
 <!-- end header -->
<?php
include('includes/db.php');

?>
	<div class="wrapper"> 
		<div id="login">
			<form method="post" action="includes/login.php">
				<label>Please, log in!</label>
				<p>Username</p>
				<input type="text" name="username">
				<p>Password</p>
				<input type="password" name="password">
				<button type="submit" name="submit" class="btn btn-primary"> Log in</button>
			</form>
		</div>
	</div>

<?php

include('includes/footer.php');
?>