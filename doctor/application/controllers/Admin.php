<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


		function __construct() {


        parent::__construct();

 		date_default_timezone_set('Asia/Dhaka');
		
        if(empty($this->session->userdata('type'))){
			redirect('welcome');
		}else{

			if($this->session->userdata('type')=='admin'){}else{

				redirect('welcome');
			} 
		
		}


    }

	public function index()
	{
		 
		$data['hospital']=$this->db->where('type','hospital')->get('tbl_user')->num_rows();
		$data['doctor']=$this->db->where('type','doctor')->get('tbl_user')->num_rows();
		$data['message']=$this->db->get('tbl_message')->num_rows();
		$data['schedule']=$this->db->get('tbl_schedule')->num_rows();
				
		$this->load->view('Admin/inc/header');
		$this->load->view('Admin/inc/navber');
		$this->load->view('Admin/dashboard',$data);
		$this->load->view('Admin/inc/footer');
		

		 

	}
	
		public function message()
		{
			
			$data['user']=$this->db->get('tbl_message')->result_array();
			
			$this->load->view('Admin/inc/header');
			$this->load->view('Admin/inc/navber');
			$this->load->view('Admin/message',$data);
			$this->load->view('Admin/inc/footer');
			 
		}
		public function delete_message($id)
		{
			
			$this->db->where('id',$id)->delete('tbl_message');
			
			redirect('Admin/message');
			 
		}
		
		public function Add_hospital()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
	
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('verify_password', 'Verify Password', 'required|matches[password]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		///$this->form_validation->set_rules('dob', 'Dob', 'required');
	
		////$this->form_validation->set_rules('task', 'task', 'required');
		
		
	
		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		$this->form_validation->set_message('valid_email', 'The Email is incorrect');
		

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('Admin/inc/header');
		   $this->load->view('Admin/inc/navber');
			$this->load->view('Admin/add-hospital');
			 $this->load->view('Admin/inc/footer');

		}else{

				$idata['name']=$this->input->post('name');
				
			
				$idata['email']=$this->input->post('email');
				$idata['password']=$this->input->post('password');
				$idata['mobile']=$this->input->post('mobile');	
				$idata['address']=$this->input->post('address');
				//$idata['dob']=date('Y-m-d',strtotime($this->input->post('dob')));
				
				/////////////////////////---- FILE ADDING CODE -----////////////////////////////


				  //* $config['upload_path'] = './asset/assets/img';
				 // $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|xls';
				  // $config['max_size'] = 1000;
				  // $config['max_width'] = 1024;
				  // $config['max_height'] = 768;
				  //$this->load->library('upload', $config);
				   //if (!$this->upload->do_upload('photo')) {
				   //  $this->session->set_flashdata('message', $this->upload->display_errors());
				  //  return;
				// } else {
				//  $avatar = $this->upload->data();
				//  $user_image = $avatar['file_name'];

				 // $idata['photo']=$user_image;
				// }

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////
			//$idata['task']=$this->input->post('task');
			$idata['type']='hospital';
			

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('Admin/add-hospital');

		}
	
	  

		 

	}


	public function Edit_hospital($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
	
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('verify_password', 'Verify Password', 'required|matches[password]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		
		
	
		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		$this->form_validation->set_message('valid_email', 'The Email is incorrect');
		

		if ($this->form_validation->run() == FALSE)
		{
			$edata['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();

			
			$this->load->view('Admin/inc/header');
			$this->load->view('Admin/inc/navber');
			$this->load->view('Admin/edit-hospital',$edata);
			$this->load->view('Admin/inc/footer');

		}else{

				$idata['name']=$this->input->post('name');
				
			
				$idata['email']=$this->input->post('email');
				$idata['password']=$this->input->post('password');
				$idata['mobile']=$this->input->post('mobile');	
				$idata['address']=$this->input->post('address');
				
				$idata['type']='hospital';
			

			$this->db->where('id',$id);
			$this->db->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Updated Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);

		}
	
	  

		 

	}


	/*public function Edit_hospital($id)
	{

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		
		
		$this->form_validation->set_rules('password', 'User password', 'required');
		$this->form_validation->set_rules('verify_password', 'User Verify password', 'required|matches[user_password]');
		

		if ($this->form_validation->run() == FALSE)
		{

			$edata['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();

			
			$this->load->view('Admin/inc/header');
			$this->load->view('Admin/inc/navber');
			$this->load->view('Admin/edit-hospital',$edata);
			$this->load->view('Admin/inc/footer');


		}else{

			$idata['name']=$this->input->post('name');
			$idata['email']=$this->input->post('email');
			$idata['mobile']=$this->input->post('mobile');
			$idata['address']=$this->input->post('address');
		


			
			$this->db->where('id',$id);
			$this->db->update('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Updated Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);

		}

		 

	}*/

	
	
	
	
	
		public function Show_hospital()
		{
			
			$data['user']=$this->db->where('type','hospital')->get('tbl_user')->result_array();
			
			
			$this->load->view('Admin/inc/header');
			$this->load->view('Admin/inc/navber');
			$this->load->view('Admin/show-hospital',$data);
			$this->load->view('Admin/inc/footer');
			 
		}
		public function delete_hospital($id)
		{
			
			$this->db->where('id',$id)->delete('tbl_user');
			
			redirect('Admin/Show-hospital');
			 
		}






	
}
