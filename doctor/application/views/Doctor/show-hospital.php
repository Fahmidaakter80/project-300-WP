
	 
	 
	 
	 <div class="container">

	 
	 		<table  class="table table-responsive">
	 		
	 		<tr>
	 			
	 			<th>Name</th>
	 			<th>Email</th>
				<th>Mobile</th>
				<th>Address</th>
	 			<th>Delete</th>
	 		</tr>

	 		<?php  foreach ($user as $user) {  ?>
	 			 
	 		

	 		<tr>
	 			
	 			<td><?=$user['name']?></td>
	 			<td><?=$user['email']?></td>
				<td><?=$user['address']?></td>
				<td><?=$user['mobile']?></td>
	 			
	 			<td><a href="<?=base_url()?>user/delete-user/<?=$user['id']?>"><button class="btn btn-danger">Delete</button></a></td>
	 		</tr>

	 		<?php } ?>
	 			
	 		</table>
	 		
	 		
	 
	 
		
	</div>
