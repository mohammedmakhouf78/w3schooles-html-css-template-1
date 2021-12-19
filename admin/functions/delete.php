<?php 


$id = $_GET['id'];

include 'connect.php';

if ($conn -> query("DELETE FROM users WHERE id = $id")) {

	header("location: ../users.php");

} else {

	echo $conn -> error ;
}