<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logged_in_pak')) redirect(base_url());
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('template');
		$this->load->model('home_model');					
	}
	
	public function index(){
		if($this->session->userdata('logged_in_pak')) {
			$data['pns'] = $this->home_model->select_pns()->result();
			$data['pak'] = $this->home_model->select_pak()->result();

    		$this->template->display('home', $data);
   		} else {		
   			$this->session->sess_destroy();
			redirect(base_url());
   		}
	}	
	
	public function logout() {
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . 'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-chace');		
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
/* Location: ./application/controller/Home.php */