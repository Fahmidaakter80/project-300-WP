<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signin extends CI_Controller {


	public function index()
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
				$this->load->view('inc/header');
				$this->load->view('inc/navber');
				$this->load->view('signin');
				$this->load->view('inc/footer');

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

			redirect('signin');

		}

	  
	  
	  
	}
	
	
	
	
	
	



	
}
