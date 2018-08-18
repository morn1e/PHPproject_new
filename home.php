<?php 
include('includes/header.php');
include('includes/db.php');


// $q = "SELECT * FROM posts p 
// 		JOIN users u ON p.user_id= u.user_id";



$q = "SELECT  *
		FROM posts p ORDER BY post_date ASC
		";
$q2 = "SELECT  *
		FROM posts p
		JOIN users u ON p.user_id = u.user_id 
		";


$result = mysqli_query($conn, $q);
$result2 = mysqli_query($conn, $q2);
$row2 = mysqli_fetch_assoc($result2);

//THIS IS WORKING
if (mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_assoc($result)){
		echo "<div>";

		echo "<p>".$row['post_id']." </p>";

		echo "<p>".$row['post_content']."</p> ";
		echo "<p>".$row2['username']."</p> ";
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
