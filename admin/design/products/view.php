

<a class="btn btn-primary"  href="?action=add">Add Product</a>
<br>
<br>

<table class="table table-hover table-striped table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>price</th>
			<th>sale</th>
			<th>image</th>
			<th>category</th>
			<th>controlls</th>
		</tr>
	</thead>
	<tbody>
<?php 
	
	include 'functions/connect.php';
	$select = "SELECT * FROM products";
	$query = $conn -> query($select);
	foreach($query as $pro){



 ?>
		<tr>
			<td><?= $pro['id'] ?></td>
			<td><?= $pro['name'] ?></td>
			<td><?= $pro['price'] ?></td>
			<td><?= $pro['sale'] ?></td>
			<td><img style="width: 150px;" src="images/<?= $pro['img'] ?>" alt=""></td>
			<td><?php 
 
 $cat_id = $pro['cat_id'];
 $selectCat = "SELECT name FROM category WHERE id = $cat_id";
 $queryCat = $conn -> query($selectCat);
 $category = $queryCat -> fetch_assoc();
 echo $category['name'];



			?></td>
			<td>
				<a class="btn btn-primary" href="">Edit</a>
				<a class="btn btn-danger" href="">Delete</a>
			</td>
		</tr>		

<?php 	} ?>

	</tbody>
	

</table>