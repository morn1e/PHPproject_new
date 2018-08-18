<?php
include('includes/header.php');
include('includes/db.php');

//get post ID
$likes_count =0;
$post_id  = $_GET['post_id'];
$q = "SELECT * FROM posts WHERE post_id = $post_id";
	$res = mysqli_query($conn, $q);

//we expect as a result only one row
//so we do not need the while cycle
	$row = mysqli_fetch_assoc($res);

	//$post_id = $row['post_id'];

$post_id = $row['post_id'];
// add post content
//var_dump($post_id);
echo "<div class='container border-bottom'>";
	echo "<div class=' col-6'>";
		echo "<p class='font-weight-bold'><i class='fas fa-quote-right'></i>   ".$row['post_content']."</p> ";
		echo "<p class = 'font-italic'>Published on ". $row['post_date']."</p>";
	$q1 = "SELECT * FROM posts p 
		JOIN users u ON u.user_id=p.user_id ";
	$res1 = mysqli_query($conn, $q1);
	while ($row1 = mysqli_fetch_assoc($res1)){
		if ($row1['post_id'] == $post_id) {
			echo "<p class = 'font-italic' > By author: ".$row1['username']."</p> ";
		}
	}
		echo "<p>";
			//Likes count
			$postL_id = $row['post_id'];
			$sql = "SELECT * FROM rating_info ri
				WHERE post_id = '$postL_id' ";
			$res = mysqli_query($conn, $sql);
			$arr = [];
			while ($row = mysqli_fetch_assoc($res)){
				$arr [] =  $row['post_id'];
				$likes_count = count($arr);
			}
			// Like button 
			echo "<form method='post'>";
			echo "<input type='hidden' name= 'like'>";
			echo $likes_count."<button  name='like' type='submit' class= 'btn btn-link' ><i class='fas fa-thumbs-up text-primary '></i></button>";
			echo "</form>"; 
			
			$user_id = $_SESSION['user_id'];
			include('includes/like.php');
			//Post a comment button
			echo "<button class='btn btn-primary'><a href='add_comment.php?post_id=" . $post_id . "' class = 'text-white'>Add comment</a></button>";
		echo "</p>";
	echo "</div>";
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
			echo "<div class = 'container '>";
				echo "<div class = 'col-lg-3 border-bottom'>";	
					echo "<p class = 'text-right'>".$row2['comment_content']." </p>";
					echo "<p class = 'text-right font-italic'><i class='fas fa-user'></i>  ".$row2['username']. " on ".$row2['comment_date']."</p> ";
					//echo "<p class = 'text-right'>".$row2['username']."</p> ";
				echo "</div>";
			echo "</div>";
		}
	}
}
echo "<p><i class='fas fa-arrow-left text-primary'></i><a href='home.php'>  Back</a></p>";

include('includes/footer.php')



?>