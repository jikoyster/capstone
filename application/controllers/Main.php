<?php
/**
* Main controller
* November 7, 2015
* Developers: Amanda Quinal, Leigh Mabano, Zoreck Mahusay
*/
class Main extends CI_Controller
{
	
	public function index() {
		$this->load->view('Homepage');
	}

	public function signup() {
		$this->load->view('register');
	}
	
}