<?php 


$name = $_POST['Name'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$message = $_POST['Message'];

$conn = new mysqli('localhost','root','','print_project');

$sql = "INSERT INTO messages (name,phone,email,message) values ('$name','$phone','$email','$message')";


if($conn -> query($sql)) {


	echo '<div class="alert alert-success">message inserted successfully</div>';


} else {

	echo $conn -> error ;
}