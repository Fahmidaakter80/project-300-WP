<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {


	public function index()
	{
		

	$this->form_validation->set_rules('email', 'Email', 'trim|required'); 
	$this->form_validation->set_rules('password', 'Password', 'trim|required'); 


 	if ($this->form_validation->run() == FALSE) {

			$this->load->view('Admin/inc/header');
			$this->load->view('Admin/login');
			$this->load->view('Admin/inc/footer');


	} else {
		 
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$result=$this->db->where('email',$email)->where('password',$password)->get('tbl_user')->result_array();

		if(!empty($result)){


			$s_data['id']=$result[0]['id'];
			$s_data['email']=$result[0]['email'];
			$s_data['name']=$result[0]['name'];
			$s_data['mobile']=$result[0]['mobile'];
			$s_data['type']=$result[0]['type'];

			 $this->session->set_userdata($s_data);

			if($result[0]['type']=='admin'){

				redirect('Admin');
			}else if($result[0]['type']=='hospital'){

				redirect('Hospital');
			}else if($result[0]['type']=='doctor'){

				redirect('Doctor');
			}



		}else{

			$message='<div class="alert alert-danger">Invalid Email/Password</div>';

			 $this->session->set_flashdata('message', $message);

			redirect('Adminlogin');
		}




	}

		
	

		 

	}



	
}
