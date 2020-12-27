	
	<div class="container">
	 	
	 	<br>

 
		<h3>Show Doctor</h3>

		<br>

	 
	 	<div class="col-md-12"> 

	 		 


	 		<table class="table table-responsive"> 


	 		<theader>
	 			
	 				<tr>
	 				<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Deprtment</th>
					<th>Photo</th>
					<th>Edit</th>
					<th>Delete</th>
				


	 				</tr>



	 		</theader>
	 		<?php 	foreach ($user as $something) {
		 	
		 	echo '<tr>';
		 	echo '<td>'.$something['name'].'</td>';
		 	echo '<td>'.$something['email'].'</td>';
		 	echo '<td>'.$something['mobile'].'</td>';
		 	echo '<td>'.$something['address'].'</td>';
		 	echo '<td>'.$something['deprtment'].'</td>';
		 	echo '<td><a href="'.base_url().'./asset/assets/img'.$something['photo'].'">'.$something['photo'].'</a></td>';
		 	echo '<td><a href="'.base_url().'Hospital/edit-doctor/'.$something['id'].'"><button class="btn btn-success">Edit</button></a></td>';
		 	echo '<td><a href="'.base_url().'Hospital/delete-doctor/'.$something['id'].'"><button class="btn btn-danger">Delete</button></a></td>';
		 	echo '</tr>';


		 }
		  ?>

	 		</table>


	 


	 </div>


		
		
	 
 
	</div>
 


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	 
</body>
</html>

