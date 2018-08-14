<?php 
include('includes/header.php');
include('includes/db.php');


$q = "SELECT * FROM posts";

$result = mysqli_query($conn, $q);
 echo "<table border=1>";
if (mysqli_num_rows($result)>0) {
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['post_id']." </td>";

		echo "<td>".$row['post_content']."</td> ";

		echo "<td>". $row['post_date']."</td>";
		echo "<td><a href='#'>Like</a></td>";
		echo "<td><a href='#'>Comment</a></td>";
		echo "</tr>";
	}
}
echo "</table>";
?>
	<a href="#"> Add unit</a>

<?php 
include('includes/footer.php');
?>
