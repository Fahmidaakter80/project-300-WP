</br>
</br>
	
<div class="container">
	<div class="offset-md-3 col-md-6">
		<br>
		<div class="container">

			<div class="section-title">
				<br>
				<h3>Sign Up</h3> 
			</div>
		</div>
		
		<form action="" method="post"  enctype="multipart/form-data">

			<?php echo $this->session->flashdata('message'); ?>
			
			<div class="form-group">
				<input type="text" name="name" class="form-control" value="<?=set_value('name')?>" placeholder="Enter Hospital Name"  id="exampleInputEmail1" aria-describedby="emailHelp">	
			</div>
			<div class="error"><?=form_error('name')?></div>


			<div class="form-group">
				<input type="text" name="email" class="form-control" value="<?=set_value('email')?>" placeholder="Enter Hospital Email"  id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="error"><?=form_error('email')?></div>


			<div class="form-group">
				<input type="text" name="mobile" class="form-control" value="<?=set_value('mobile')?>" placeholder="Enter Hospital Number"  id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="error"><?=form_error('mobile')?></div>
			  
			  
			<div class="form-group">
				<input type="text"  name="address" class="form-control" value="<?=set_value('address')?>" placeholder="Enter Hospital Address"  id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="error"><?=form_error('address')?></div>
				
				
			<div class="form-group">
				<input type="password" name="password" class="form-control" value="<?=set_value('password')?>" placeholder="Enter Password"  id="exampleInputPassword1">
			</div>
			<div class="error"><?=form_error('password')?></div>
			  
			  
			<div class="form-group">
				<input type="password" name="verify_password"  class="form-control" value="<?=set_value('verify_password')?>" placeholder="Enter Verify password"  id="exampleInputPassword1">
			</div>
			<div class="error"><?=form_error('verify_password')?></div>
			 
			 
			
			   <!--<div class="form-group">
				
				<input type="text" name="task" class="form-control" value="<?=set_value('task')?>" placeholder="Enter Department"  id="exampleInputEmail1" aria-describedby="emailHelp">
				
			   </div>
			   <div class="error"><?=form_error('task')?></div>-->

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
