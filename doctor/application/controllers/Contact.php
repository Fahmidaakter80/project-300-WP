<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


	public function index()
	{
		
		 $this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]+$/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');

	
		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		$this->form_validation->set_message('valid_email', 'The Email is incorrect');

		if ($this->form_validation->run() == FALSE)
		{

		$this->load->view('inc/header');
		$this->load->view('inc/navber');
		$this->load->view('contact');
		$this->load->view('inc/footer');

		}else{
				$idata['name']=$this->input->post('name');
				$idata['email']=$this->input->post('email');
				$idata['subject']=$this->input->post('subject');
				$idata['message']=$this->input->post('message');

				$this->db->insert('tbl_message',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('contact');
			
		}
	

		
	
		 

	}
	
	

		



	
}
