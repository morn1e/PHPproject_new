<?php 
include('includes/header.php');
include('includes/db.php');
?>



<?php 
if (!empty($_POST)) {

// $username  = $_POST['username'];
$username = 'ivan';
$password = $_POST['password'];

//var_dump($username);
//var_dump($password);
$arr = [];

$q = "SELECT * FROM users ";

$result = mysqli_query($conn, $q);

	if (mysqli_num_rows($result)>0) {
		$row = mysqli_fetch_assoc($result);
		var_dump($row); 
		foreach ($row as $key => $value) {		
			if ($key == $username && $value == $password) {
				echo "Welcome $username !";
				echo "<a href='home.php'> Continue ...!</a>";
				break;
			} else {
				echo "Unable to log in! Please try <a href='index.php'> again! </a> ";
			}
		}
		
	}
}


include('includes/footer.php');
?>