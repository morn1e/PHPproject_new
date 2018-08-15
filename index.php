<?php 
include('includes/header.php');
include('includes/db.php');
?>
	<form method="post" action="includes/login.php">
		<label>Please, log in!</label>
		<p>Username</p>
		<input type="text" name="username">
		<p>Password</p>
		<input type="password" name="password">
		<button type="submit" name="submit"> Log in</button>
	</form>

<?php

include('includes/footer.php');
?>