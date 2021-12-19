<?php 

$id = $_POST['id'];

include '../connect.php';

$sql = "UPDATE messages SET view = 1 WHERE id = $id";
$query = $conn -> query($sql);
if($query) {

   echo 'success';

} else {
	echo $conn -> error ;
}