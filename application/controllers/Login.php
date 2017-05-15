<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');	
		$this->load->model('login_model');	
	}

	public function index()
	{
		if($this->session->userdata('logged_in_pak'))
		{
			redirect(site_url('pak'));
		}
		else
		{
			$this->load->view('login_view');
		}
	}

	public function validasi() 
	{
		$username = $this->input->post('username', 'true');
		$password = $this->input->post('password', 'true');	
		
		$temp_user = $this->login_model->get_user($username)->row();
		$num_user = count($temp_user);
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('login_view');
		} 
		else 
		{
			if ($num_user == 0) 
			{ // Username Tidak Terdaftar
				$this->session->set_flashdata('notification','Username Anda tidak Terdaftar, Hubungi Administrator !');
				redirect(site_url('login'));
			} elseif ($num_user > 0) 
			{ // Username Terdaftar				
				$temp_account = $this->login_model->check_user_account($username, md5($password))->row();
				$num_account = count($temp_account);
		
				if ($num_account > 0) 
				{	
					$array_item = array('user_id' => $temp_account->user_id, 
										'username' => $temp_account->user_username, 
										'nama' => $temp_account->user_nama,																			
										'logged_in_pak' => TRUE);
																			
					$this->session->set_userdata($array_item);					
					redirect(site_url('home'));					
				} 
				else 
				{					
					$this->session->set_flashdata('notification','LOGIN GAGAL !!, Username and Password Anda Tidak Cocok.');
					redirect(site_url('login'));					
				}				
			}
		}		
	}
}
/* Location: ./application/controller/Login.php */