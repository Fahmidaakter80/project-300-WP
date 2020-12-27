<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admintable extends CI_Controller {


	public function index()
	{
		 

		
	 $this->load->view('Admin/inc/header');
	  $this->load->view('Admin/inc/navber');
	  $this->load->view('Admin/table');
	   $this->load->view('Admin/inc/footer');

		 

	}



	
}
