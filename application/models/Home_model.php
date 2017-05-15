<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
	function __construct() {
		parent::__construct();	
	}
		
	function select_pns() {
		$this->db->select('pns_id');
		$this->db->from('pns');		
		
		return $this->db->get();
	}
		
	function select_pak() {
		$this->db->select('pak_id');
		$this->db->from('demak_pak');
		
		return $this->db->get();
	}
		
}
/* Location: ./application/models/Home_model.php */