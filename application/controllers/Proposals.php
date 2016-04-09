<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* January 13, 2016
* developers: Bjarne Galendez, Leigh Mabano, 
*             Zoreck Mahusay, Amanda Quinal
*/
class Proposals extends CI_Controller
{
	public function process_forms() {
		$data = array();
		$tempdata = array();
		$data = $this->input->post(NULL, TRUE);

/* for formC only */
		if($this->config->config['controller_trigger'] == 'c'):
			$this->formC($data);
		endif;
/* endif */

		if ($this->input->post('submit') == 'next') {
		  $tempdata = $data;
		  $this->session->set_tempdata($tempdata, 7200);
		  redirect(site_url('Representative/form_b'),'refresh');
		} elseif ($this->input->post('submit') == 'submit_a') {
		  $this->formA($data);
		} elseif ($this->input->post('submit') == 'submit_c') {
			echo "<script>alert('toFormC');</script>";
		  $this->formC($data);
		} elseif ($this->input->post('submit') == 'submit_b') {
		  $adata = $this->session->tempdata();
		  $this->formA($adata);
		  $this->formB($data);
		} 
	}

	public function formA($form_inputs) {
		$inputs = $form_inputs;
		$this->load->model('Proposal');
		$p = new Proposal();
		// print_r($inputs);
		
		$p->user_id = $this->session->user_id;
		$p->title = $inputs['title'];
		$p->school = $inputs['school'];
		$p->dept = $inputs['dept'];
		$p->act_duration = $inputs['act_duration1']." - ".$inputs['act_duration2'];
		$p->venue = $inputs['venue'];
		$p->rationale = $inputs['rationale'];
		$p->goal = $inputs['goal'];
		$p->participants = $inputs['partners'];
		$p->tentative_date = $inputs['tentative'];
		$p->activity_name = $inputs['activity'];
		$p->participants_needed = $inputs['participants'];
		$p->persons_incharge = $inputs['persons'];
		$p->a_particulars = $inputs['a_particulars'];
		$p->a_frequency = $inputs['a_frequency'];
		$p->a_quantity = $inputs['a_quantity'];
		$p->a_amount = $inputs['a_amount'];
		$p->a_subtotal = $inputs['a_total'];
		$p->b_particulars = $inputs['b_particulars'];
		$p->b_frequency = $inputs['b_frequency'];
		$p->b_quantity = $inputs['b_quantity'];
		$p->b_amount = $inputs['b_amount'];
		$p->b_subtotal = $inputs['b_total'];
		$p->c_particulars = $inputs['c_particulars'];
		$p->c_frequency = $inputs['c_frequency'];
		$p->c_quantity = $inputs['c_quantity'];
		$p->c_amount = $inputs['c_amount'];
		$p->c_subtotal = $inputs['c_total'];
		$p->grandtotal = $inputs['grandtotal'];
		$p->insertToPropMainInfo();
		$p->create_proposal();
		$p->insertToAC();
		$p->insertToActOutline();
		$p->insertTobudreqFoodAmt();
		$p->insertTobudreqFood();
		$p->insertTobudreqTranspoAmt();
		$p->insertTobudreqTranspo();
		$p->insertTobudreqMaterialsAmt();
		$p->insertTobudreqMaterials();
		$p->insertTobudreq();
		echo "You have successfully made a Proposal!";
		echo "<meta http-equiv='refresh' content='2; url=".site_url('Representative/home')."'>";
	}

	public function formB($form_inputs) {
		
	}

	public function formC($form_inputs) {
		$inputs = $form_inputs;
		$this->load->model('ProposalC');
		
		$p = new ProposalC();

		$p->user_id 			= $this->session->user_id;

		$p->title 				= $inputs['title'];
		$p->datetime_created 	= $inputs['datetime_created'];
		$p->datetime_format 	= $inputs['datetime_format'];
		$p->school 				= $inputs['school'];
		$p->department 			= $inputs['department'];
		$p->tentative 			= $inputs['tentative'];
		$p->activity 			= $inputs['activity'];
		$p->venue				= $inputs['venue'];

		// $p->school = $inputs['school'];
		// $p->dept = $inputs['dept'];
		// $p->act_duration = $inputs['act_duration1']." - ".$inputs['act_duration2'];
		// $p->venue = $inputs['venue'];
		// $p->rationale = $inputs['rationale'];
		// $p->goal = $inputs['goal'];
		// $p->participants = $inputs['partners'];

		$p->formC_insertTo_proposal_maininfo($inputs);
	}

	public function formD($form_inputs) {
		
	}

	public function formE($form_inputs) {
		
	}

}