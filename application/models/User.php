<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User extends CI_Model
{
	public $user_id;
	public $fname;
	public $lname;
	public $email;
	public $cnum;
	public $role;
	public $office;
	public $dept;
	public $org;
	public $uname;
	public $pass;
	public $status;

	public function checkaccounts() {
		$sql = "SELECT * FROM user_accounts WHERE username = ? AND password = ? AND status = '1'";
		$query = $this->db->query($sql, array($this->uname, $this->pass));
		if($query->num_rows() === 1) {
			$exist = TRUE;
		} else { $exist = FALSE; }
		return $exist;
	}

	public function loaduser() {
		$sql = "SELECT * FROM user_accounts WHERE username = ? AND password = ? LIMIT 1";
		$query = $this->db->query($sql, array($this->uname, $this->pass));
		return $query;
	}

	public function approveuser() {
		$sql = "SELECT * FROM user_accounts WHERE user_id = ? AND status = 0";
	}

	public function adduser() {
		$sql = "INSERT INTO user_accounts 
		 (user_id, firstname, lastname, email, contact_num, designation_fkid, office, department, organization, username, password, status, registered_date)
		 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$query = $this->db->query($sql, array(NULL, $this->fname, $this->lname, $this->email, $this->cnum, $this->role, $this->office, $this->dept, $this->org, $this->uname, $this->pass, $this->status, date("Y-m-d h:i:s")));
		return $query;
	}

	public function getuser() {
		$sql = "SELECT * FROM user_accounts WHERE user_id = ?";
		$query = $this->db->query($sql, array ($this->user_id));
		return $query;
	}

	public function updateuser() {
		$sql = "UPDATE user_accounts SET firstname = ?, lastname = ?, email = ?, contact_num = ?, office = ?, department = ? WHERE user_id = ?";
		$this->db->query($sql, array($this->fname, $this->lname, $this->email, $this->cnum, $this->office, $this->dept, $this->user_id));
		if ($this->db->affected_rows() > -1) {
		  $updated = TRUE;
		} else {
		  $updated = FALSE;
		}
		return $updated;
	}

	public function getActiveUsers() {
		$sql = "SELECT user.user_id, user.lastname, user.firstname, role.designation, user.office FROM user_accounts AS user INNER JOIN user_role AS role ON user.designation_fkid = role.ur_id WHERE user.status = TRUE";
		$query = $this->db->query($sql);
		return $query;
	}

	public function getApplyingUsers() {
		$sql = "SELECT user_id, lastname, firstname, office, department, organization FROM user_accounts WHERE status = FALSE";
		$query = $this->db->query($sql);
		return $query;
	}
}