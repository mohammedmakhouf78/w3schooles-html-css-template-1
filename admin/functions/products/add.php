<?php 

echo "<pre>";


$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$cat_id = $_POST['cat_id'];

$imgName = $_FILES['img']['name'];
$temp = $_FILES['img']['tmp_name'];

// images 

// 1 - if image uploaded
// 2 - extension jpg , gif , png
// 3 - size < 2 mb
// 4 - change image name with random name 
// 5 - move uploaded file

// 1- if image uploaded
if ($_FILES['img']['error'] == 0 ) {

	// 2 - extensions
	$extension = ['jpg' , 'gif' , 'png'];
	$newArray = explode('.', $imgName);
	$ext = end($newArray);

	if(in_array($ext, $extension)){

		// 3- size < 2mb
		if($_FILES['img']['size'] < 2000000) {

			// 4- change image name with random name 
			$newName = md5(time() . uniqid()) .'.' .  $ext ;
			
			// 5 - move uploaded file
			move_uploaded_file($temp, "../../images/$newName");

		} else {
			echo "file size is too big";
		}

	} else {
		echo "wrong extension";
		exit();
	}

} else {
	echo "you must upload an image";
	exit();
}




include '../connect.php';
$insert = "INSERT INTO products (name , price , sale , cat_id ,img) VALUES ('$name' , '$price' , '$sale' , '$cat_id' , '$newName')";

$query = $conn -> query($insert);

if ($query) {
	header('location: ../../products.php');
} else {
	echo $conn -> error ;
}