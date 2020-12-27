
<div class="container">
	<div class=" col-md-6">
	
	 
      
        <h3>Add Scheduler</h3> 
        
  

	<form action="" method="post"  enctype="multipart/form-data">

		<?php echo $this->session->flashdata('message'); ?>
		
		 <div class="form-group">
			
			<select name="user_id" class="get_doctor form-control" >
					<option value="">---Select Doctor---</option>
					<?php foreach ($user as $user){ ?>
					
					<option value="<?=$user['id']?>" <?php if(set_value('user_id')==$user['id']) { echo 'selected'; } ?> ><?=$user['name']?></option>
					<?php } ?>


			</select>
		
		  </div>
		  <div class="wrong"><?=form_error('user_id')?></div>

		<div class="form-group">
			<select name="month" class="get_doctor form-control" >
					<option value="">---Select month---</option>
					
					
					<option value="01" <?php if(set_value('month')=='01') { echo 'selected'; } ?> >January</option>
					<option value="02" <?php if(set_value('month')=='02') { echo 'selected'; } ?> >February</option>
					<option value="03" <?php if(set_value('month')=='03') { echo 'selected'; } ?> >March</option>
					<option value="04" <?php if(set_value('month')=='04') { echo 'selected'; } ?> >April</option>
					<option value="05" <?php if(set_value('month')=='05') { echo 'selected'; } ?> >May</option>
					<option value="06" <?php if(set_value('month')=='06') { echo 'selected'; } ?> >June</option>
					<option value="07" <?php if(set_value('month')=='07') { echo 'selected'; } ?> >July</option>
					<option value="08" <?php if(set_value('month')=='08') { echo 'selected'; } ?> >August</option>
					<option value="09" <?php if(set_value('month')=='09') { echo 'selected'; } ?> >September</option>
					<option value="10" <?php if(set_value('month')=='10') { echo 'selected'; } ?> >October</option>
					<option value="11" <?php if(set_value('month')=='11') { echo 'selected'; } ?> >November</option>
					<option value="12" <?php if(set_value('month')=='12') { echo 'selected'; } ?> >December</option>
				
					
					


			</select>
		
		  </div>
		  <div class="wrong"><?=form_error('month')?></div>
		  
		  
		<div class="form-group">
			<select name="type" class="get_doctor form-control" >
					<option value="">---Select type---</option>
					
					
					<option value="01" <?php if(set_value('type')=='01') { echo 'selected'; } ?> >Daily</option>
					<option value="02" <?php if(set_value('type')=='02') { echo 'selected'; } ?> >One day after after</option>
					
				
					
					


			</select>
		
		  </div>
		  <div class="wrong"><?=form_error('type')?></div>
		  
		  
		   <div class="form-group">
			<select name="year" class="get_doctor form-control" >
					<option value="">---Select year---</option>
					
					
					<option value="current" <?php if(set_value('year')=='current') { echo 'selected'; } ?> >current </option>
					<option value="next" <?php if(set_value('year')=='next') { echo 'selected'; } ?> >next</option>
					
					
					


			</select>
		
		  </div>
		  <div class="wrong"><?=form_error('year')?></div>


		
		   
		   
		   
			 
	



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
