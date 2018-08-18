<?php
include('includes/header.php');
include('includes/db.php');

//get post ID
$post_id  = $_GET['post_id'];
$q = "SELECT * FROM posts WHERE post_id = $post_id";
	$res = mysqli_query($conn, $q);

//we expect as a result only one row
//so we do not need the while cycle
	$row = mysqli_fetch_assoc($res);

	//$post_id = $row['post_id'];


// add post content
//var_dump($post_id);
echo "<div>";
	echo "<p>".$row['post_id']." </p>";
	echo "<p>".$row['post_content']."</p> ";
	
	echo "<p>Published on ". $row['post_date']."</p>";

$q1 = "SELECT * FROM posts p 
		JOIN users u ON u.user_id=p.user_id ";
	$res1 = mysqli_query($conn, $q1);
	while ($row1 = mysqli_fetch_assoc($res1)){
		if ($row1['post_id'] == $post_id) {
			echo "<p> By author: ".$row1['username']."</p> ";
		}
	}

 
	echo "<p><a href='#'>Like</a> <a href='add_comment.php?post_id=" . $row['post_id'] . "'>Add comment</a></p>";
echo "</div>";
	


//ADD comments


$q2 = "SELECT  *
		FROM comments c	
		JOIN users u ON u.user_id= c.user_id
		JOIN posts_comments pc ON pc.comment_id = c.comment_id
        ORDER BY c.comment_id ASC
       ";

$result2 = mysqli_query($conn, $q2);



 if (mysqli_num_rows($result2)>0) {
	while ($row2 = mysqli_fetch_assoc($result2)) {
		// var_dump($row2);
		// echo $post_id;
		if ($row2['post_id'] == $post_id ) {
		echo "<p>".$row2['comment_content']." </p>";
		echo "<p>".$row2['comment_date']."</p> ";
		echo "<p>".$row2['username']."</p> ";
		}
	}
}
echo "<p><a href='home.php'>Back</a></p>";


include('includes/footer.php')



?>