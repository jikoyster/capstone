<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Form Validation
|--------------------------------------------------------------------------
| This config file sets all rules for forms that need validation.
| 
*/
$config = array(
			'Users/process_reg' =>	array(
				array(
					'field' => 'lname',
					'label' => 'Lastname',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'fname',
					'label' => 'Firstname',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'school',
					'label' => 'School',
					'rules' => 'trim|required' 
					),
				array(
					'field' => 'dept',
					'label' => 'Department',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'org',
					'label' => 'Organization',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'email',
					'label' => 'Email Address',
					'rules' => 'trim|required|valid_email|is_unique[user_accounts.email]'
					),
				array(
					'field' => 'cnum',
					'label' => 'Contact Number',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'uname',
					'label' => 'Username',
					'rules' => 'trim|required|min_length[5]|max_length[12]|is_unique[user_accounts.username]'
					),
				array(
					'field' => 'pass1',
					'label' => 'Password',
					'rules' => 'trim|required|matches[pass2]'
					),
				array(
					'field' => 'pass2',
					'label' => 'Password Confirmation',
					'rules' => 'trim|required'
					)
				),
			'Users/login' 	=>	array(
				array(
					'field' => 'uname',
					'label' => 'Username',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'pass',
					'label' => 'Password',
					'rules' => 'trim|required'
					),
				),
			'Representative/process_settings' => array(
				array(
					'field' => 'lname',
					'label' => 'Lastname',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'fname',
					'label' => 'Firstname',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'school',
					'label' => 'School',
					'rules' => 'trim|required' 
					),
				array(
					'field' => 'dept',
					'label' => 'Department',
					'rules' => 'trim|required'
					),
				array(
					'field' => 'email',
					'label' => 'Email Address',
					'rules' => 'trim|required|valid_email'
					),
				array(
					'field' => 'cnum',
					'label' => 'Contact Number',
					'rules' => 'trim|required'
					)
				)
		);


?>