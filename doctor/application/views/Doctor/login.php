

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6">
              	<img class="img-fluid" src="<?=base_url()?>asset/assets/img/doctors/doctors-1.jpg" alt="">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Log In</h1>
                  </div>
                  <?=$this->session->flashdata('message')?>
                  <form acction="" method="post" class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="email" value="<?=set_value('email')?>"   placeholder="Enter Email Address...">
                    </div>
                    <div class="wrong"><p><?=form_error('email')?></p></div>
                    <div class="form-group">
                      <input type="password"  name="password" value="<?=set_value('password')?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                     <div class="wrong"><p><?=form_error('password')?></p></div>
                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                

                    <button stype="submit"class="btn btn-primary btn-user btn-block" >Login</button>
                      
                   
                    <hr>
                                     </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?=base_url()?>signin">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <style>
  	
  	.wrong{
  	color:red;
  	}

  </style>