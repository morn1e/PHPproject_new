<?php
include('includes/header.php');
include('includes/db.php');

$q2 = "SELECT *
		FROM comments
		";

$result = mysqli_query($conn, $q2);

$comments = [];



// $comments_count = count($comments);
// $comment_id = $comments_count +1;

//var_dump($comment_id);



//END COMMENT COUNT

//2. GET POST ID

if(empty($_POST['submit'])){

	$post_id = $_GET['post_id'];

//to populate the form
	$q = "SELECT * FROM posts WHERE post_id = '$post_id'";
	$res = mysqli_query($conn, $q);

//we expect as a result only one row
//so we do not need the while cycle
	$row = mysqli_fetch_assoc($res);

// //var_dump($row);
// echo $row['post_id'];

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
	$post_Nid = $_POST['post_id'];
	$user_id = $_SESSION['user_id'];
	$username = $_SESSION['username'];
	$date = date('Y-m-d');
	//var_dump($post_Nid);

	$insert_query = "INSERT INTO comments (comment_content, user_id, comment_date) VALUES ('$comment', '$user_id', '$date')";
		//get comment ID
	$comment_id_query = "SELECT * FROM comments ";
	$comment_id_result = mysqli_query($conn, $comment_id_query);
	//$row_comment = mysqli_fetch_assoc($comment_id_result);
	if (mysqli_num_rows($comment_id_result)>0) {
	while ($row_comment = mysqli_fetch_assoc($comment_id_result)) {
		$arr = [];
		$arr[] = $row_comment['comment_id'];
		
	}
}

$comment_id = $arr[0]+=1;
		// or result
		$insert_result = mysqli_query($conn, $insert_query);
	$insert_query2 = "INSERT INTO posts_comments (post_id, comment_id) VALUES ('$post_Nid', '$comment_id')";
		// or result
		$insert_result2 = mysqli_query($conn, $insert_query2);

	if ($insert_result && $insert_query2) {
		echo "Thank you ". $username. " You successfully commented this post!";
		echo "<p> <a href='view_post.php?post_id=" . $post_Nid . "'>Back</a></p>";
	}else {
		echo "Could not create a comment! Please try again later!";
	}
}

include('includes/footer.php')

?>