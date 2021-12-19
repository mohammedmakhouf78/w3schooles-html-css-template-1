<?php 

	$current = 'messages';
	include "includes/header.php";
	include "includes/sidebar.php";


 ?>
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">messages</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">messages</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">			
	


<a class="btn btn-primary"  href="?action=add">Add User</a>
<br>
<br>

<table class="table table-hover table-striped table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>phone</th>
			<th>email</th>
			<th>view</th>
			<th>show</th>
		</tr>
	</thead>
	<tbody>
	<?php 

		$select = "SELECT * FROM messages";
		$query = $conn -> query($select);
		foreach($query as $message) {

	 ?>
		<tr>
			<td><?= $message['id'] ?></td>
			<td><?= $message['name'] ?></td>
			<td><?= $message['phone'] ?></td>
			<td><?= $message['email'] ?></td>
			<td class="view"><?= $message['view'] == 0 ? 'unread' : 'read' ?></td>
			<td>
<!-- Button trigger modal -->
<button data-id='<?= $message['id'] ?>' type="button" class="btn btn-primary showModal" data-toggle="modal" data-target="#<?= $message['id'] ?>">
 	show message
</button>

<!-- Modal -->
<div class="modal fade" id="<?= $message['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= $message['message']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



			</td>
		</tr>
	<?php } ?>
	</tbody>

</table>
			</div>
		</div><!--/.row-->
		
	</div>	<!--/.main-->
	
<?php include 'includes/footer.php'; ?>
<script src="js/ajax.js"></script>