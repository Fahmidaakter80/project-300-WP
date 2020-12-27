
	
	<div class="container">
	<div class=" col-md-6">
	
	 
      
        <h3>Off Day</h3> 
        
  

	<form action="" method="post"  enctype="multipart/form-data">

		<?php echo $this->session->flashdata('message'); ?>
		
		 <div class="form-group">
			<label for="exampleInputEmail1">Off Day</label>
			<select name="doctor" class="get_doctor form-control" >
					<option value="">---Select Doctor---</option>
					<?php foreach ($user as $user){ ?>
					
					<option value="<?=$user['name']?>" <?php if(set_value('name')==$user['name']) { echo 'selected'; } ?> ><?=$user['name']?></option>
					<?php } ?>


			</select>
		
			
		  </div>
		  <div class="error"><?=form_error('doctor')?></div>

		



		<div class="form-group"> 
			
			<button type="submit" class="btn btn-success">Submit</button>

		</div>




		
		
	 
	</form>

	</div>

	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	 
</body>
</html>
