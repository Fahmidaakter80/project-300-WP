
<div class="container">
	<div class=" col-md-6">
	
	 
      
        <h3>Edit Hospital</h3> 
        
  

	<form action="" method="post"  enctype="multipart/form-data">

		<?php echo $this->session->flashdata('message'); ?>
		
		 <div class="form-group">
			<label for="exampleInputEmail1">Name</label>
			<input type="text" name="name" class="form-control" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $user[0]['name']; } ?>" placeholder="Enter Name "  id="exampleInputEmail1" aria-describedby="emailHelp">
			
		  </div>
		  <div class="wrong"><?=form_error('name')?></div>

		<div class="form-group">
			<label for="exampleInputEmail1">Email</label>
			<input type="text" name="email" class="form-control" value="<?php if(set_value('email')){ echo set_value('email'); }else{ echo $user[0]['email']; } ?>" placeholder="Enter Email"  id="exampleInputEmail1" aria-describedby="emailHelp">
			
		  </div>
		  <div class="wrong"><?=form_error('email')?></div>

		<div class="form-group">
			<label for="exampleInputEmail1">Mobile</label>
			<input type="text" name="mobile" class="form-control" value="<?php if(set_value('mobile')){ echo set_value('mobile'); }else{ echo $user[0]['mobile']; } ?>" placeholder="Enter Mobile"  id="exampleInputEmail1" aria-describedby="emailHelp">
			
		  </div>
		  <div class="wrong"><?=form_error('mobile')?></div>
		  
		  
		   <div class="form-group">
			<label for="exampleInputEmail1">Address</label>
			<input type="text"  name="address" class="form-control" value="<?php if(set_value('address')){ echo set_value('address'); }else{ echo $user[0]['address']; } ?>" placeholder="Enter Address"  id="exampleInputEmail1" aria-describedby="emailHelp">
			
		  </div>
			<div class="wrong"><?=form_error('address')?></div>
			
			
			<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="password" class="form-control" value="<?php if(set_value('password')){ echo set_value('password'); }else{ echo $user[0]['password']; } ?>" placeholder="Enter Password"  id="exampleInputPassword1">
		  </div>
		  <div class="wrong"><?=form_error('password')?></div>
		  
		  <div class="form-group">
			<label for="exampleInputPassword1">Verify Password</label>
			<input type="password" name="verify_password"  class="form-control" value="<?php if(set_value('verify_password')){ echo set_value('verify_password'); }else{ echo $user[0]['password']; } ?>" placeholder="Enter Verify password"  id="exampleInputPassword1">
		  </div>
		 <div class="wrong"><?=form_error('verify_password')?></div>
		 
		
		   
		



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

