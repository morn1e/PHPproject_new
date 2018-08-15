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

	$insert_query = "INSERT INTO posts (post_content, post_date) VALUES ('$post', '$date')";
		// or result
		$insert_result = mysqli_query($conn, $insert_query);
		if ($insert_result) {
			echo "One new post was created successfully!";
			echo "<p> <a href= 'index.php'> Back </a></p> ";
		}else {
			echo "Could not create a post! Please try again later!";
		}
}
include('includes/footer.php')


?>
