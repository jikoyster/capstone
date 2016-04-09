<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Director extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}


	public function home() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('director/director_home', $data);
	}

	public function approved_proposals() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('director/director_approve', $data);
	}

	public function other_reports() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('director/director_other_report', $data);
	}

	public function reviews() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('director/director_reviews', $data);
	}

	public function manage_accounts() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->model('User');
		$u = new User();
		$data['active'] = $u->getActiveUsers();
		$data['new'] = $u->getApplyingUsers();
		$this->load->view('director/director_manage_accounts', $data);
	}

	public function account_settings() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('director/director_setting', $data);
	}

	public function create_account() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('director/director_create_account', $data);
	}

	
}