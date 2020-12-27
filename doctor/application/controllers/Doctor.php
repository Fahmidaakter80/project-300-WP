<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {


		function __construct() {


        parent::__construct();

 		date_default_timezone_set('Asia/Dhaka');
		
        if(empty($this->session->userdata('type'))){
			redirect('welcome');
		}else{

			if($this->session->userdata('type')=='doctor'){}else{

				redirect('Doctor');
			} 
		
		}


    }

	public function index()
	{
		 

		
		 $this->load->view('Doctor/inc/header');
		 $this->load->view('Doctor/inc/navber');
		 $this->load->view('Doctor/doctor');
		 $this->load->view('Doctor/inc/footer');

		 

	}
		
		
	public function Add_offday()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
	
		
	
		$this->form_validation->set_message('required', 'The %s filed should not be empty');
		
		$data['user']=$this->db->where('type','doctor')->get('tbl_user')->result_array();

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('Doctor/inc/header');
			$this->load->view('Doctor/inc/navber');
			$this->load->view('Doctor/add-offday',$data);
			$this->load->view('Doctor/inc/footer');

		}else{
			
			
			

			$this->db->insert('tbl_user',$idata);

			$message='<div class="alert alert-success">Data Inserted Successfully</div>';

			$this->session->set_flashdata('message',$message);

			redirect('Doctor/add-offday');

		}
		
		
		
		
	
	  

		 

	}
		




	public function view_schedule()
	{
	
		
		$data['user']=$this->db->select('* , tbl_schedule.id as s_id')->from('tbl_schedule,tbl_user')->where('tbl_schedule.user_id=tbl_user.id')->where('date>=',time()-86000)->where('user_id',$this->session->userdata('id'))->get()->result_array();

		
			$this->load->view('Doctor/inc/header');
			$this->load->view('Doctor/inc/navber');
			$this->load->view('Doctor/view-schedule',$data);
			$this->load->view('Doctor/inc/footer');
	 

	}
	
	function update_status($userid,$status){

		$this->db->where('id',$userid);
		$this->db->set('attendance_status',$status);
		$this->db->update('tbl_schedule');

		redirect($_SERVER['HTTP_REFERER']);
	

	}
		






	
}
