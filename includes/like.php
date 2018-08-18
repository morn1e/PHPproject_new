<?php

include ('db.php');

if (isset($_POST['like'])) {
	// echo "yes";
	$sql="INSERT INTO rating_info (post_id, user_id, rating_action) 
  	  VALUES ('$post_id', '$user_id', 'like')";
    $res=  mysqli_query($conn, $sql);
}