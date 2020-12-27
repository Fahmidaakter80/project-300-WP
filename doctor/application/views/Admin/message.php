
	 
	 
	 
	 <div class="container">

	 
	 		<table  class="table table-responsive">
	 		
	 		<tr>
	 			
	 			<th>Name</th>
	 			<th>Email</th>
				<th>Subject</th>
				<th>Message</th>
	 			<th>Delete</th>
	 		</tr>

	 		<?php  foreach ($user as $user) {  ?>
	 			 
	 		

	 		<tr>
	 			
	 			<td><?=$user['name']?></td>
	 			<td><?=$user['email']?></td>
				<td><?=$user['subject']?></td>
				<td><?=$user['message']?></td>
	 			
	 			<td><a href="<?=base_url()?>Admin/delete_message/<?=$user['id']?>"><button class="btn btn-danger">Delete</button></a></td>
	 		</tr>

	 		<?php } ?>
	 			
	 		</table>
	 		
	 		
	 
	 
		
	</div>
