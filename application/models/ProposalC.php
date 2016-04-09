<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ProposalC extends CI_model
{
	public $title;
	public $datetime_created;
	public $school;
	public $department;
	public $tentative = array();
	public $frequency = array();
	public $venue;
	
	public function formC_insertTo_proposal_maininfo()
	{
		$proposal_header = array(
				    'title' 				=> $this->title,
				    'datetime_created'		=> $this->datetime_format,
				    'school' 				=> $this->school,
				    'department' 			=> $this->department,
				    /*'outline_of_activities' 	=> implode("|",
				   								array(
						   							'tentative' => implode(", ",$this->tentative),
						   							'activity' => implode(", ", $this->activity)
						   							)
				   								)*/
					'venue'					=> $this->venue
					);
		/* main Proposal Content */
		// $proposal_c = array(
		// 	);
	
		$this->db->insert('proposal_header', $proposal_header); 
		redirect('Representative/home');
	}
	//end insertToFormC2

}//endClass
 ?>