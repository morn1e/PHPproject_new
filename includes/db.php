<?php

$conn = mysqli_connect('localhost', 'root', '', 'facebook');

if (!$conn) {
	die ("Connection failed: ". mysqli_connect_error());

}else {
	echo "Connected successfully!";
}