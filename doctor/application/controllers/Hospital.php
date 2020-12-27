<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller {


		function __construct() {


        parent::__construct();

 		date_default_timezone_set('Asia/Dhaka');
		
        if(empty($this->session->userdata('type'))){
			redirect('welcome');
		}else{

			if($this->session->userdata('type')=='hospital'){}else{

				redirect('welcome');
			} 
		
		}


    }

	public function index()
	{
		 

			
			$this->load->view('Hospital/inc/header');
			$this->load->view('Hospital/inc/navber');
			$this->load->view('Hospital/dashboard');
			$this->load->view('Hospital/inc/footer');

		 

	}
	public function Add_doctor()
	{
			$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
			$this->form_validation->set_rules('verify_password', 'Verify Password', 'required|matches[password]');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			///$this->form_validation->set_rules('dob', 'Dob', 'required');
		
			$this->form_validation->set_rules('deprtment', 'deprtment', 'required');
			
			
		
			$this->form_validation->set_message('required', 'The %s filed should not be empty');
			$this->form_validation->set_message('valid_email', 'The Email is incorrect');
			

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('Hospital/inc/header');
			$this->load->view('Hospital/inc/navber');
			$this->load->view('Hospital/add-doctor');
			$this->load->view('Hospital/inc/footer');

		}else{

			$idata['name']=$this->input->post('name');
				
			
			$idata['email']=$this->input->post('email');
			$idata['password']=$this->input->post('password');
			$idata['mobile']=$this->input->post('mobile');	
			$idata['address']=$this->input->post('address');
			$idata['deprtment']=$this->input->post('deprtment');
				
				//$idata['dob']=date('Y-m-d',strtotime($this->input->post('dob')));
				
				/////////////////////////---- FILE ADDING CODE -----////////////////////////////


				$config['upload_path'] = './asset/assets/img';
				 $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|xls';
				  // $config['max_size'] = 1000;
				  // $config['max_width'] = 1024;
				// $config['max_height'] = 768;
					 $this->load->library('upload', $config);
				   if (!$this->upload->do_upload('photo')) {
					 $this->session->set_flashdata('message', $this->upload->display_errors());
					return;
				 } else {
				  $avatar = $this->upload->data();
				  $user_image = $avatar['file_name'];

				  $idata['photo']=$user_image;
				 }

			/////////////////////////---- FILE ADDING CODE -----////////////////////////////
		   
			$idata['type']='doctor';
			$idata['parant_id']=$this->session->userdata('id');
			

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('Hospital/add-doctor');

		}
	
	  

		 

	}
	
	
	
		public function Edit_doctor($id)
		{

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('deprtment', 'deprtment', 'required');
			
			$this->form_validation->set_rules('password', 'User password', 'required');
			$this->form_validation->set_rules('verify_password', 'User Verify password', 'required|matches[password]');
			

			if ($this->form_validation->run() == FALSE)
			{

				$edata['user']=$this->db->where('id',$id)->get('tbl_user')->result_array();

				
				$this->load->view('Hospital/inc/header');
				$this->load->view('Hospital/inc/navber');
				$this->load->view('Hospital/edit-doctor',$edata);
				$this->load->view('Hospital/inc/footer');


			}else{

				$idata['name']=$this->input->post('name');
				$idata['email']=$this->input->post('email');
				$idata['mobile']=$this->input->post('mobile');
				$idata['password']=$this->input->post('password');
				$idata['address']=$this->input->post('address');
				$idata['deprtment']=$this->input->post('deprtment');


				/////////////////////////---- FILE ADDING CODE -----////////////////////////////

				if($_FILES && $_FILES['photo']['name']){
				//user select file


				  $config['upload_path'] = './asset/assets/img';
				  $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|xls';
				  // $config['max_size'] = 1000;
				  // $config['max_width'] = 1024;
				  // $config['max_height'] = 768;
				  $this->load->library('upload', $config);
				   if (!$this->upload->do_upload('photo')) {
					 $this->session->set_flashdata('message', $this->upload->display_errors());
					return;
				 } else {
				  $avatar = $this->upload->data();
				  $user_image = $avatar['file_name'];

				  $idata['photo']=$user_image;
				 }

				/////////////////////////---- FILE ADDING CODE -----////////////////////////////

				 }
				
				$this->db->where('id',$id);
				$this->db->update('tbl_user',$idata);

				$message='<div class="alert alert-success">Data Updated Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('Hospital/edit-doctor/'.$id);

			}

			 

		}

	
		public function Show_doctor()
		{
			
			$data['user']=$this->db->where('type','doctor')->where('parant_id',$this->session->userdata('id'))->get('tbl_user')->result_array();
			
			$this->load->view('Hospital/inc/header');
		    $this->load->view('Hospital/inc/navber');
			$this->load->view('Hospital/show-doctor',$data);
			$this->load->view('Hospital/inc/footer');
			 
		}
		public function delete_doctor($id)
		{
			
			$this->db->where('id',$id)->delete('tbl_user');
			redirect('Hospital/Show-doctor');
			 
		}
		
		
		public function Add_offday()
		{
			$this->form_validation->set_rules('user_id', 'Name', 'required');
			$this->form_validation->set_rules('day', 'Day', 'required');
			
			
		
			$this->form_validation->set_message('required', 'The %s filed should not be empty');
			$data['user']=$this->db->where('parant_id',$this->session->userdata('id'))->get('tbl_user')->result_array();

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('Hospital/inc/header');
				$this->load->view('Hospital/inc/navber');
				$this->load->view('Hospital/add-offday',$data);
				$this->load->view('Hospital/inc/footer');

			}else{

				$idata['user_id']=$this->input->post('user_id');
				$idata['day']=$this->input->post('day');
				
				$idata['Oparant_id']=$this->session->userdata('id');
				

				$this->db->insert('tbl_offday',$idata);

				$message='<div class="alert alert-success">Data Inserted Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('Hospital/add-offday');

			}
		
		  

			 

		}
		
		public function Show_offday()
			{
				
				$data['user']=$this->db->select('* , tbl_offday.id as o_id')->from('tbl_offday , tbl_user')->where('tbl_user.id=tbl_offday.user_id')->where('parant_id',$this->session->userdata('id'))->get()->result_array();
				//$data['user']=$this->db->select('* , tbl_offday.id as o_id ,tbl_offday.parant_id as oparant_id')->from('tbl_offday , tbl_user')->where('tbl_user.id=tbl_offday.user_id')->where('parant_id',$this->session->userdata('id'))->get()->result_array();
				

				
				$this->load->view('Hospital/inc/header');
				$this->load->view('Hospital/inc/navber');
				$this->load->view('Hospital/show-offday',$data);
				$this->load->view('Hospital/inc/footer');
				 
			}
			
			
			
		public function Edit_offday($id)
		{
			$this->form_validation->set_rules('user_id', 'Name', 'required');
			$this->form_validation->set_rules('day', 'Day', 'required');
			
			
		
			$this->form_validation->set_message('required', 'The %s filed should not be empty');
			
			$data['user']=$this->db->where('parant_id',$this->session->userdata('id'))->get('tbl_user')->result_array();

			if ($this->form_validation->run() == FALSE)
			{
				$data['offday']=$this->db->where('id',$id)->get('tbl_offday')->result_array();
				$this->load->view('Hospital/inc/header');
				$this->load->view('Hospital/inc/navber');
				$this->load->view('Hospital/edit-offday',$data);
				$this->load->view('Hospital/inc/footer');

			}else{

				$idata['user_id']=$this->input->post('user_id');
				$idata['day']=$this->input->post('day');
				$idata['Oparant_id']=$this->session->userdata('id');
				
				
				

				
				
				$this->db->where('id',$id);
				$this->db->update('tbl_offday',$idata);

				$message='<div class="alert alert-success">Data Updated Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('Hospital/edit-offday/'.$id);
			 

			}
		}

			public function delete_offday($id)
				{
					
					$this->db->where('id',$id)->delete('tbl_offday');
					redirect('Hospital/Show-offday');
					 
				}
				
				
		public function Scheduler()
		{
			$this->form_validation->set_rules('user_id', 'Name', 'required');
			$this->form_validation->set_rules('month', 'Month', 'required');
			$this->form_validation->set_rules('year', 'Year', 'required');
			$this->form_validation->set_rules('type', 'Type', 'required');
			
			
		
			$this->form_validation->set_message('required', 'The %s filed should not be empty');
			
			$data['user']=$this->db->where('parant_id',$this->session->userdata('id'))->get('tbl_user')->result_array();

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('Hospital/inc/header');
				$this->load->view('Hospital/inc/navber');
				$this->load->view('Hospital/scheduler',$data);
				$this->load->view('Hospital/inc/footer');

			}else{
				
				$offday=$this->db->where('user_id',$this->input->post('user_id'))->get('tbl_offday')->result_array()[0]['day'];
				
				if($this->input->post('year')=="current"){
					
					$year=date('Y');
					
				}elseif($this->input->post('year')=="next"){
					
					$year=date('Y', strtotime('+1 year',time()));
					
					
				}
				
				
				if($this->input->post('type')==1){
					
				
					
					
					
					$startday=strtotime(''.$year.'-'.$this->input->post('month').'-01');
					$end=strtotime('last day of this month',$startday);
					
					
					
					
					while($startday<= $end){
						$startday=strtotime("+1 Day",$startday);
						$day=date('Y-m-d',$startday);
						$bar=date('l',$startday);
						
						if ($offday==$bar){
							
						}else{
							$idata['user_id']=$this->input->post('user_id');
							$idata['date']=$startday;

							$this->db->insert('tbl_schedule',$idata);
						
						}
						
						
						
					}
				
					
					
				}elseif(($this->input->post('type')==2)){
					
					$startday=strtotime(''.$year.'-'.$this->input->post('month').'-01');
					$end=strtotime('last day of this month',$startday);
					
					
					
					
					while($startday<= $end){
						$startday=strtotime("+2 Days",$startday);
						$day=date('Y-m-d',$startday);
						$bar=date('l',$startday);
						
						if ($offday==$bar){
							
						}else{
							$idata['user_id']=$this->input->post('user_id');
							$idata['date']=$startday;

							$this->db->insert('tbl_schedule',$idata);
						
						}
						
						
						
						
					}
					
				}
					
				

				$message='<div class="alert alert-success">Data Inserted Successfully</div>';

				$this->session->set_flashdata('message',$message);

				redirect('Hospital/scheduler');

			}
		
		  

			 

		}
				
		
	}
