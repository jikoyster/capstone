<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Vpaa extends CI_Controller
{
	
	public function home() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('vpaa/vpaa_approve', $data);
	}
}