<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Proposal extends CI_Model
{
	public $user_id;
	public $a_id;
	public $b_id;
	public $c_id;
	public $d_id;
	public $e_id;
	public $ac_id;
	public $ba_id;
	public $bc_id;
	public $oa_id;
	public $br_food_id;
	public $br_transpo_id;
	public $br_materials_id;
	public $budreq_id;
	public $prop_id;
	public $propmain_id;
	public $rationale;
	public $goal;
	public $objectives;
	public $outcomes;
	public $participants;
	public $partners;
	public $beneficiaries;
	// public $a_particulars;
	// public $a_frequency;
	// public $a_quantity;
	// public $a_amount;	
	// public $a_subtotal;
	// public $b_particulars;
	// public $b_frequency;
	// public $b_quantity;
	// public $b_amount;
	// public $b_subtotal;
	// public $c_particulars;
	// public $c_frequency;
	// public $c_quantity;
	// public $c_amount;
	// public $c_subtotal;
	public $grandtotal;
	public $tentative_date;
	public $activity_name;
	public $participants_needed;
	public $persons_incharge;
	public $title;
	public $dept;
	public $school;
	public $act_duration;
	public $venue;


	public function create_proposal() {
		$query = $this->db->select_max('propmain_id')->get('proposal_maininfo');
		foreach ($query->result() as $result) { $this->propmain_id = $result->propmain_id; }
		$record = array('proposal_id' => NULL, 'user_fkid' => $this->user_id, 'propmain_fkid' => $this->propmain_id, 'status' => TRUE);
		$this->db->insert('proposal', $record);
	}

	public function insertToPropMainInfo() {
		$record = array($this->title, $this->dept, $this->school, $this->act_duration, $this->venue);
		$sql = "INSERT INTO proposal_maininfo ('title', 'department', 'school', 'incdate_start', 'incdate_end', 'venue') VALUES (?, ?, ?, ?, ?, ?);";
		$this->db->query($sql, $record);
	}

	public function insertToAC() {
		$record = array($this->rationale, $this->goal, $this->participants);
		$sql = "INSERT INTO ac (rationale, goal, participants) VALUES (?, ?, ?)";
		$this->db->query($sql, $record);
	}

	public function insertToActOutline() {
		$this->selectProposalID();
		$count = count($this->activity_name);
		$sql = "INSERT INTO outline_of_activities (prop_fkid, tentative_date, activity_name, participants_needed, persons_incharge) VALUES (?, ?, ?, ?, ?);";
		for ($i=0; $i < $count; $i++) { 
			$record = array($this->prop_id, $this->tentative_date[$i], $this->activity_name[$i], $this->participants_needed[$i], $this->persons_incharge[$i]);
			$this->db->query($sql, $record);
		}
	}

	public function insertTobudreqFoodAmt() {
		$this->selectProposalID();
		$count = count($this->a_frequency);
		$sql = "INSERT INTO budreq_amt (frequency, quantity, amount, subtotal, prop_fkid) VALUES (?, ?, ?, ?, ?)";
		for ($i=0; $i < $count; $i++) { 
			$record = array($this->a_frequency[$i], $this->a_quantity[$i], $this->a_amount[$i], $this->a_subtotal[$i], $this->prop_id);
			$this->db->query($sql, $record);
		}
	}

	public function insertTobudreqFood() {
		$z = 0;
		$count = count($this->a_particulars);
		$query = $this->db->select('ba_id')->from('budreq_amt')->order_by("ba_id", "desc")->limit($count)->get();
		$sql = "INSERT INTO budreq_food (particulars, ba_fkid, prop_fkid) VALUES (?, ?, ?)";
		foreach ($query->result_array() as $id) {
			$this->ba_id[$z] = $id;
			$z++; 
		}
		sort($this->ba_id);
		for ($i=0; $i < $count; $i++) { 
			$record = array($this->a_particulars[$i], $this->ba_id[$i], $this->prop_id);
			$this->db->query($sql, $record);
		}
	}

	public function insertTobudreqTranspoAmt() {
		$this->selectProposalID();
		$count = count($this->b_frequency);
		$sql = "INSERT INTO budreq_amt (frequency, quantity, amount, subtotal, prop_fkid) VALUES (?, ?, ?, ?, ?)";
		for ($i=0; $i < $count; $i++) { 
			$record = array($this->b_frequency[$i], $this->b_quantity[$i], $this->b_amount[$i], $this->b_subtotal[$i], $this->prop_id);
			$this->db->query($sql, $record);
		}
	}

	public function insertTobudreqTranspo() {
		$z = 0;
		$count = count($this->b_particulars);
		$query = $this->db->select('ba_id')->from('budreq_amt')->order_by("ba_id", "desc")->limit($count)->get();
		$sql = "INSERT INTO budreq_transpo (particulars, ba_fkid, prop_fkid) VALUES (?, ?, ?)";
		foreach ($query->result_array() as $id) {
			$this->ba_id[$z] = $id;
			$z++; 
		}
		sort($this->ba_id);
		for ($i=0; $i < $count; $i++) { 
			$record = array($this->b_particulars[$i], $this->ba_id[$i], $this->prop_id);
			$this->db->query($sql, $record);
		}
	}

	public function insertTobudreqMaterialsAmt() {
		$this->selectProposalID();
		$count = count($this->c_frequency);
		$sql = "INSERT INTO budreq_amt (frequency, quantity, amount, subtotal, prop_fkid) VALUES (?, ?, ?, ?, ?)";
		for ($i=0; $i < $count; $i++) { 
			$record = array($this->c_frequency[$i], $this->c_quantity[$i], $this->c_amount[$i], $this->c_subtotal[$i], $this->prop_id);
			$this->db->query($sql, $record);
		}
	}

	public function insertTobudreqMaterials() {
		$z = 0;
		$count = count($this->c_particulars);
		$query = $this->db->select('ba_id')->from('budreq_amt')->order_by("ba_id", "desc")->limit($count)->get();
		$sql = "INSERT INTO budreq_materials (particulars, ba_fkid, prop_fkid) VALUES (?, ?, ?)";
		foreach ($query->result_array() as $id) {
			$this->ba_id[$z] = $id;
			$z++; 
		}
		sort($this->ba_id);
		for ($i=0; $i < $count; $i++) { 
			$record = array($this->c_particulars[$i], $this->ba_id[$i], $this->prop_id);
			$this->db->query($sql, $record);
		}
	}

	public function insertTobudreq() {
		$record = array($this->prop_id, $this->grandtotal);
		$sql = "INSERT INTO budreq (prop_fkid, grandtotal) VALUES (?, ?)";
		$this->db->query($sql, $record);
	}

	public function selectProposalID() {
		$query = $this->db->select_max('proposal_id')->get('proposal');
		foreach ($query->result() as $result) { $this->prop_id = $result->proposal_id; }
	}

	public function getProposalByUser() {
		
	}

	
}