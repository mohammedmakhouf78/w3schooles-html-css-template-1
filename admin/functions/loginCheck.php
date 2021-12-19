<?php 
session_start();
$username  = $_POST['username'];
$password  = md5($_POST['password']);

include 'connect.php';

$select = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$query = $conn -> query($select);


if($query -> num_rows > 0 ) {
	// user found

	// get user id
	$user = $query -> fetch_assoc();
	$id = $user['id'];

	// create session
	$_SESSION['login'] = $id ;


	// go to index
	header("location: ../index.php");


}

 else {
 	// no user found
 	header("location: ../login.php");
 }

