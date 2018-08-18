<?php
include('includes/header.php');
include('includes/db.php');


$date = date('Y-m-d');
if (empty($_POST['submit'])) {
	echo "Compose a new post: ";
	echo "<form action='add_post.php' method='post' >";
	echo "<textarea name= 'post_content' > </textarea>";
	echo "<input type= 'submit'  name= 'submit' value = 'post' >";
	echo "</form>";
}else {
	$post = $_POST['post_content'];
	$user_id = $_SESSION['user_id'];
	$username = $_SESSION['username'];

	$insert_query = "INSERT INTO posts (post_content, post_date, user_id) VALUES ('$post', '$date', '$user_id')";
		// or result
		$insert_result = mysqli_query($conn, $insert_query);
		if ($insert_result) {
			echo "Thank you, ". $username. " You just created one new post!";
			echo "<p> <a href= 'home.php'> Back </a></p> ";
		}else {
			echo "Could not create a post! Please try again later!";
		}
}
include('includes/footer.php')


?>
