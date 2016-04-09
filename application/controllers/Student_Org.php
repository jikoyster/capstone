<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Student_Org extends CI_Controller
{	

	public function home() {
		$data['fname'] = $this->session->fname;
		$data['lname'] = $this->session->lname;
		$this->load->view('stud_org/stud_proposal', $data);
	}
}