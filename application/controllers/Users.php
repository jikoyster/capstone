<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* January 13, 2016
* developers: Bjarne Galendez, Leigh Mabano, 
*             Zoreck Mahusay, Amanda Quinal
*/
class Users extends CI_Controller
{

	public function __construct() {
		parent::__construct();
	}

	public function process_reg() {
		if($this->input->post('register')){
		  $data = $this->input->post(NULL, TRUE);
			
			if($this->form_validation->run() === FALSE) {
				echo "Sorry. You cannot register because of:";
				echo validation_errors();
				return;
			}

		  	$this->load->model('User');
		  	$reg = new User();
			$reg->fname = $data['fname'];
			$reg->lname = $data['lname'];
			$reg->email = $data['email'];
			$reg->cnum  = $data['cnum'];
			$reg->role  = '7';
			$reg->office = $data['school'];
			$reg->org = $data['org'];
			$reg->dept = $data['dept'];
			$reg->uname = $data['uname'];
			$reg->pass = password_hash($data['pass1'], PASSWORD_DEFAULT);
			$reg->status = '0';
			$check =  $reg->adduser();
			if ($check === TRUE) {
				echo "<meta http-equiv='refresh' content='5; url=".site_url()."'>";
				echo "<h1> You Have Successfully Registered!</h1>";
				echo "<h3> Your registration will be approved/rejected by the CES Director. </h3>";
				echo "<h5> redirecting to homepage in 5 seconds... </h5>";
			} else {
				var_dump($data);
				echo "ERROR";
			}
		}
	}

	public function login() {
		if($this->input->post('login')) {
		  $log = $this->input->post(NULL, TRUE);
		  if($this->form_validation->run() === FALSE) {
		  	echo "Sorry. You cannot register because of:";
		    echo validation_errors();
		  } else {
		  	$this->load->model('User');
		    $u = new User();
		    $u->uname = $log['uname'];
		    $u->pass = $log['pass'];
		    $check = $u->checkaccounts();
		    if ($check === TRUE) {
		   	  $this->setuser($u->uname, $u->pass);
		    } else {
		      echo "<meta http-equiv='refresh' content='3; url=".site_url()."'>";
		      echo "<h3>Wrong username or password</h3>";
		      echo "<h5> redirecting to homepage ... </h5>";
		    }
		  }
		}
	}

	private function setuser($uname,$pass) {
		$this->load->model('User');
		$u = new User();
		$u->uname = $uname;
		$u->pass = $pass;
		$query = $u->loaduser();
		foreach ($query->result() as $user) {
		  $data = array(
		  	'session_id'=> session_id(),
		  	'ip_address'=> $_SERVER['REMOTE_ADDR'],
		  	'user_id' 	=> $user->user_id,
		  	'fname' 	=> $user->firstname,
		  	'lname' 	=> $user->lastname,
		  	'email' 	=> $user->email,
		  	'cnum' 		=> $user->contact_num,
		  	'role' 		=> $user->designation_fkid,
		  	'office' 	=> $user->office,
		  	'dept'		=> $user->department,
		  	'org'		=> $user->organization,
		  	'logged_in' => TRUE
		  );
		  $this->session->set_userdata($data);
		  $this->setprofile();
		}
	}

	public function setprofile() {
		$role = $this->session->role;
		if($role === '1') {
		  redirect(site_url('Vpaa/home'));
		} elseif ($role === '2') {
		   redirect(site_url('Director/home'));
		} elseif ($role === '3') {
		   redirect(site_url('Dean/home'));
		} elseif ($role === '4') {
		   redirect(site_url('Chair/home'));
		} elseif ($role === '5') {
		   redirect(site_url('Coordinator/home'));
		} elseif ($role === '6') {
		   redirect(site_url('Representative/home'));
		} else {
		   redirect(site_url('Student_Org/home'));
		}
	}

	public function getUserData() {
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
	}

	public function logout() {
		$data = array('session_id','ip_address','user_id','fname','mname','lname','email','cnum','role','office','logged_in');
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		redirect(site_url());
	}

	public function getUserInfo() {
		$this->load->model('User');
		$u = new User();
		$u->user_id = $this->input->post('user_id');
		$data = $u->getuser();
		echo json_encode($data->result_array());
	}

}