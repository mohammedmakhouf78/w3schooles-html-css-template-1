<?php 



// echo "<pre>";

// print_r($_POST);

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$priv = $_POST['priv'];

include 'connect.php';

// password login
if(!empty($_POST['password'])){

	$pass = md5($_POST['password']);
	$updatePass ="UPDATE users SET password = '$pass' WHERE id = '$id'";
	$queryPass =$conn -> query($updatePass);
}

$update = "UPDATE users SET 
	
	username = '$username',
	email = '$email',
	phone = '$phone',
	gender = '$gender',
	priv = '$priv'

	WHERE id = $id 

 ";



if( $conn -> query($update) ){

	header("location: ../users.php");

} else {

	echo $conn -> error ;

}