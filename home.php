<?php 
include('includes/header.php');
include('includes/db.php');


// $q = "SELECT * FROM posts p 
// 		JOIN users u ON p.user_id= u.user_id";

$q = "SELECT  *
		FROM posts p 
		JOIN users u ON p.user_id = u.user_id 
		";

$result = mysqli_query($conn, $q);

if (mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_assoc($result)){
		echo "<div>";
		echo "<p>".$row['post_id']." </p>";

		echo "<p>".$row['post_content']."</p> ";
		echo "<p>".$row['username']."</p> ";
		echo "<p>". $row['post_date']."</p>";
		echo "<p><a href='#'>Like</a> <a href='view_post.php?post_id=" . $row['post_id'] . "'>View post</a></p>";
		echo "</div>";
	}
}

?>
	<a href="add_post.php"> Add post</a>

<?php 
include('includes/footer.php');
?>
