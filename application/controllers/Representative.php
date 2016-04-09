<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Representative extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function home() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('representative/representative_proposal', $data);
	}

	public function reports() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('representative/representative_report', $data);
	}

	public function account_settings() {
		$data = array();
		$this->load->model('User');
		$u = new User();
		$u->user_id = $this->session->user_id;
		$query = $u->getuser();
		foreach ($query->result() as $user) {
		  $data = array(
		  	'user_id' 	=> $user->user_id,
		  	'fname' 	=> $user->firstname,
		  	'lname' 	=> $user->lastname,
		  	'email' 	=> $user->email,
		  	'cnum' 		=> $user->contact_num,
		  	'school' 	=> $user->office,
		  	'dept'		=> $user->department
		  );
		}
		$this->load->view('representative/representative_setting', $data);
	}

	public function create_proposal() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('representative/representative_create_proposal', $data);
	}

	public function create_report() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('representative/representative_create_report', $data);
	}

	public function form_a() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/form_a', $data);
	}

	public function form_a_1() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/form_a1', $data);
	}

	public function form_b() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/form_b', $data);
	}

	public function form_c() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/form_c', $data);
	}

	public function form_d() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/form_d', $data);
	}

	public function form_e() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/form_e', $data);
	}

	public function sample_a1() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/sample_form_a1', $data);
	}

	public function sample_a() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/sample_form_a_revised', $data);
	}

	public function sample_b() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/sample_form_b', $data);
	}

	public function sample_c() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/sample_form_c', $data);
	}

	public function sample_report1() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/sample_form_d', $data);
	}

	public function sample_report2() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('forms/sample_form_e', $data);
	}

	public function process_settings() {
		if($this->input->post('save')) {
		  $data = $this->input->post(NULL, TRUE);
		  if($this->form_validation->run() === FALSE) {
		  	echo validation_errors();
		  } else {
		  	$this->load->model('User');
		  	$u = new User();
		  	$u->user_id = $this->session->user_id;
		  	$u->fname = $data['fname'];
			$u->lname = $data['lname'];
			$u->email = $data['email'];
			$u->cnum  = $data['cnum'];
			$u->office = $data['school'];
			$u->dept = $data['dept'];
		  	$state = $u->updateuser();
		  	if ($state === TRUE) {
		  	  echo "<meta http-equiv='refresh' content='2; url=".site_url('Representative/account_settings')."'>";
		      echo "<h1> Successfully updated your user profile!</h1>";
		  	} else {
		  	  echo "ERROR";
		  	}
		  }
		}
	}

	
}