<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Coordinator extends CI_Controller
{

	public function home() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('coordinator/coordinator_proposal', $data);
	}

	public function my_reports() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('coordinator/coordinator_report', $data);
	}

	public function other_reports() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('coordinator/coordinator_other_report', $data);
	}

	public function reviews() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('coordinator/coordinator_review', $data);
	}

	public function recommendations() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('coordinator/coordinator_recommend', $data);
	}

	public function settings() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('coordinator/coordinator_setting', $data);
	}

	public function create_proposal() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('coordinator/coordinator_create_proposal', $data);
	}

	public function create_report() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('coordinator/coordinator_create_report', $data);
	}

	public function sample_form_a1() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('coordinator/coordinator_setting', $data);
	}
}