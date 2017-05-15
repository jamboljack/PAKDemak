<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function check_user_account($username, $password) {
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_username', $username);
		$this->db->where('user_password', $password);
		
		return $this->db->get();
	}
		
	function get_user($username) {
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_username', $username);
		
		return $this->db->get();
	}
		
}
/* Location: ./application/models/Login_model.php */