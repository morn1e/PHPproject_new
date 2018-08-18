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
		ORDER BY post_date ASC
		";


$result = mysqli_query($conn, $q);
$result2 = mysqli_query($conn, $q2);
$row2 = mysqli_fetch_assoc($result2);


//THIS IS WORKING
if (mysqli_num_rows($result2)>0) {
	while($row2 = mysqli_fetch_assoc($result2)){
		echo "<div class='container'>";
			echo "<div class='border-bottom col-6'>";
				echo "<p class='font-weight-bold'>".$row2['post_content']."</p> ";
				echo "<p class = 'text-right font-italic'> By author: ".$row2['username']."</p> ";	
				echo "<p class = 'text-right font-italic'>". $row2['post_date']."</p>";
				echo "<p> <a href='view_post.php?post_id=" . $row2['post_id'] . "'>View post</a></p>";
			echo "</div>";
		echo "</div>";
	}
}







?>
	<a href="add_post.php"> Add post</a>

<?php 
include('includes/footer.php');
?>
