
	 
	 
	 
	 <div class="container">

	 
	 		<table  class="table table-responsive">
	 		
	 		<tr>
	 			
	 			<th>Name</th>
	 			<th>Date</th>
	 			<th>Attendance</th>
	 			
	 		
	 		</tr>

	 		<?php  foreach ($user as $user) {  ?>
	 			 
	 		

	 		<tr>
	 			
	 			<td><?=$user['name']?></td>
	 			<td><?=date('Y-m-d l',$user['date'])?></td>
				<td>  <?php //if($user['attendance_status']==1){ echo 'enable'; }else{ echo 'disable'; } ?>
				
				<!-- Default checked -->
					<a href="<?=base_url()?>Doctor/update-status/<?=$user['s_id']?>/<?php  if($user['attendance_status']==1){ echo '0'; }else{ echo '1'; } ?>"><div class="custom-control custom-switch">
					  <input type="checkbox" <?php if($user['attendance_status']==1){ echo 'checked'; } ?> class="custom-control-input" id="customSwitch1" >
					  <label class="custom-control-label" for="customSwitch1<?=$user['s_id']?>"></label>
					</div></a>

	 					  <!-- Default switch -->
			<!--	<a href="<?=base_url()?>Doctor/update-status/<?=$user['id']?>/<?php  if($user['attendance_status']==1){ echo '0'; }else{ echo '1'; } ?>"><div class="custom-control custom-switch">
				    <input type="checkbox" <?php  if($user['attendance_status']==1){ echo 'checked'; } ?> class="custom-control-input" id="customSwitches">
				  <label class="custom-control-label" for="customSwitches<?=$user['id']?>"></label>

				</div></a> -->


	 			</td>
	 			
	 			
	 			
	 		</tr>

	 		<?php } ?>
	 			
	 		</table>
	 		
	 		
	 
	 
		
	</div>
