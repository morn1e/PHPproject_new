<?php 
include('includes/header.php');
include('includes/db.php');

$user_id = $_SESSION['user_id'];

$q = "SELECT * FROM users_info WHERE user_id ='$user_id' ";
$res = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($res);
$pic = $row['picture'];
echo "<div class='container border-bottom'>";
	echo "<div class=' col-6'>";
	echo "<p><img src='$pic' height='250' width='200'> </p>" ;
		echo "<p> Name: ". $row['name']. "</p>" ;
		echo "<p> Surname: ". $row['surname']. "</p>" ;
		echo "<p> Email: ". $row['email']. "</p>" ;
		echo "<p> Info: ". $row['info']. "</p>" ;
		echo "<p> Address: ". $row['address']. "</p>" ;
	echo "</div>";
echo "</div>";

include('includes/footer.php');

