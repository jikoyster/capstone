<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Dean extends CI_Controller
{

	public function home() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('dean/dean_endorse', $data);
	}
}