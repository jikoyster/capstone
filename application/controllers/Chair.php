<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Chair extends CI_Controller
{

	public function home() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('chair/chair_note', $data);
	}
}