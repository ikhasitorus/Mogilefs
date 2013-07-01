<div class="container-fluid">
	<div class="row-fluid">
				    
		<div class="btn-toolbar">
			<a href="<?=base_url()?>index.php/user/create/"><button ><i class="icon-plus"></i>New User</button></a>
		<div class="btn-group">
	</div>
</div>
<div class="well">
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>User Name</th>
				<th>Email Address</th>
				<th style="width: 26px;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$count = 1; 
				foreach ($userData as $row):
			?>
			<tr>
				<td><?=$count?></td>
				<td><?=$row->Full_Name?></td>
				<td><?=$row->User_Name ?></td>
				<td><?=$row ->Email_Address?></td>
				 <td>
					<a href="<?=base_url()?>index.php/user/modify/<?=$row->Id_User ?>"><i class="icon-pencil"></i></a>
					<a href="<?=base_url()?>index.php/user/deleteUser/<?=$row->Id_User ?>" class="delete" value="<?=$row->Id_User ?>"><button><i class="icon-remove"></i></button></a>
					
				 </td>
			</tr>
			<?php 
					$count++;
				
				endforeach;
			?>
			
		</tbody>
	</table>
</div>
<script>
	$("a.delete").click(function(){
		$()
		
	});
</script>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Delete Confirmation</h3>
	</div>
	<div class="modal-body">
		<p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
	</div>
	<div class="modal-footer">
		
		<a href="<?=base_url()?>index.php/user/deleteUser/" class="deleteButton"><button>Delete</button></a>
		<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		
	</div>
</div>