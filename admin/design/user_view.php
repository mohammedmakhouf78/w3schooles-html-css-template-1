

<a class="btn btn-primary"  href="?action=add">Add User</a>
<br>
<br>

<table class="table table-hover table-striped table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>email</th>
			<th>phone</th>
			<th>gender</th>
			<th>priv</th>
			<th>controlls</th>
		</tr>
	</thead>
	<tbody>
		<?php
			
			include 'functions/connect.php';
			$select = "SELECT * FROM users";
			$query = $conn -> query($select);
			foreach($query as $user) {
		?>
		<tr>
			<td><?= $user['id'] ?></td>
			<td><?= $user['username'] ?></td>
			<td><?= $user['email'] ?></td>
			<td><?= $user['phone'] ?></td>
			<td><?php
					if($user['gender'] == 0 ) {
						echo "Male";
					} else {
						echo "Female";
					}
			?></td>
			<td><?= $user['priv']== 0 ? "Admin" : "user" ?></td>
			<td>
				<a class="btn btn-primary" href="?action=edit&id=<?= $user['id'] ?>">Edit</a>
				<!-- <a class="btn btn-danger" href="">Delete</a> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $user['id'] ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="<?= $user['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        are you sure you want to delete user : <?=$user['username']  ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="functions/delete.php?id=<?= $user['id']  ?>" class="btn btn-danger">confirm</a>
      </div>
    </div>
  </div>
</div>
			</td>
		</tr>
		
		<?php } ?>
	</tbody>
</table>