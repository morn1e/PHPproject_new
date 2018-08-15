<?php
include('includes/header.php');
include('includes/db.php');

$q2 = "SELECT *
		FROM comments
		";

$result = mysqli_query($conn, $q2);

$comments = [];

if (mysqli_num_rows($result)>0) {
	while ($row2 = mysqli_fetch_assoc($result)) {
		$comments[]= $row2['comment_id'];
	}
}

$comments_count = count($comments);
$comment_id = $comments_count +1;

//var_dump($comment_id);



//END COMMENT COUNT

//2. GET POST ID

if(empty($_POST['submit'])){

	$post_id = $_GET['post_id'];

//to populate the form
	$q = "SELECT * FROM posts WHERE post_id = $post_id";
	$res = mysqli_query($conn, $q);

//we expect as a result only one row
//so we do not need the while cycle
	$row = mysqli_fetch_assoc($res);

var_dump($row);

//form is exactly the same as in create.php
//MIND THE VALUES!!! AND HIDDEN INPUT TYPE
	echo "<p>Comment this post</p>";
	echo "<form action='add_comment.php' method='post'>";
	
	//! we need it to transfer the id of the updated row
	echo "<input type='hidden' name='post_id' value=" . $row['post_id'] . ">";

	echo "<textarea name= 'comment_content' > </textarea>";
	
	echo "<input type='submit' name='submit' value='update'>";
	echo "</form>";
}else {

	//INSERT QUERY CODE AS FOLLOWS
//var_dump($_POST);
	
	$comment = $_POST['comment_content'];
	$post_id = $_POST['post_id'];
	//var_dump($post_id);

	$insert_query = "INSERT INTO comments (comment_content) VALUES ('$comment')";
		// or result
		$insert_result = mysqli_query($conn, $insert_query);
	$insert_query2 = "INSERT INTO posts_comments (post_id, comment_id) VALUES ('$post_id', '$comment_id')";
		// or result
		$insert_result2 = mysqli_query($conn, $insert_query2);

	if ($insert_result && $insert_query2) {
		echo "You successfully commentet this post!";
		echo "<p><a href='#'>Like</a> <a href='view_post.php?post_id=" . $post_id . "'>Back</a></p>";
	}else {
		echo "Could not create a comment! Please try again later!";
	}
}

include('includes/footer.php')

?>