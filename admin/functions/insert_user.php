<?php 


// if($_SERVER['REQUEST_METHOD'] != "POST"){
//   header("location: ../users.php");
//   exit();
// }

// $username = $_POST['username'];
// $password = md5($_POST['password']);
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $gender = $_POST['gender'];
// $priv = $_POST['priv'];

include 'connect.php';

$insert = "INSERT INTO users 
  (username , password , email , phone , gender , priv)
  VALUES
  ('$username' , '$password' , '$email' , '$phone' , '$gender' , '$priv')";

  $query = $conn -> query($insert);

  if( $query ) {

  	header("location: ../users.php");

  } else {

  	echo $conn -> error ;

  }