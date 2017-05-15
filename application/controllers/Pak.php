<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in_pak')) redirect(base_url());
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('template');
		$this->load->model('pak_model');					
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in_pak')) {
			$data['daftar_pak'] = $this->pak_model->select_all()->result();				
    		$this->template->display('pak_list_view', $data);
   		} 
   		else 
   		{		
   			$this->session->sess_destroy();
			redirect(base_url());
   		}
	}

	public function adddata() 
	{
		$data['daftar_nama'] = $this->pak_model->select_nama()->result();
		$this->template->display('addpak_view', $data);
	}

	public function savedata() 
	{		
		$this->form_validation->set_rules('nuptk','<b>NUPTK</b>','trim|required|integer');
		$this->form_validation->set_rules('karpeg','<b>No. KARPEG</b>','trim|required');
		$this->form_validation->set_rules('tgltmt','<b>TMT Jab. Fungsional</b>','required');
		$this->form_validation->set_rules('msgollamathn','<b>Gol. Lama Tahun</b>','required|max_length[2]|integer');
		$this->form_validation->set_rules('msgollamabln','<b>Gol. Lama Bulan</b>','required|max_length[2]|integer');
		$this->form_validation->set_rules('msgolbaruthn','<b>Gol. Baru Tahun</b>','required|max_length[2]|integer');
		$this->form_validation->set_rules('msgolbarubln','<b>Gol. Baru Bulan</b>','required|max_length[2]|integer');
		$this->form_validation->set_rules('from','<b>Periode 1</b>','required');
		$this->form_validation->set_rules('to','<b>Periode 2</b>','required');

		if ($this->form_validation->run() == FALSE) 
		{
	    	$data['daftar_nama'] = $this->pak_model->select_nama()->result();
			$this->template->display('addpak_view', $data);
		} 
		else 
		{  			  						
			$this->pak_model->insert_data();
			// ID PAK Guru Baru
			$pak_id = $this->db->insert_id();			
			redirect(site_url('pak/addtetapan').'/'.$pak_id);			
  		}	
  	}

  	public function addtetapan() 
	{
		$pak_id = $this->uri->segment(3);
		$data['detail'] = $this->pak_model->select_by_pak2($pak_id)->row();		
		$this->template->display('addpaktetapan_view', $data);
	}

	public function savedatatetapan() 
	{	
		$pak_id = $this->uri->segment(3);					  					
		$this->pak_model->update_data_tetapan();		
		redirect(site_url('pak/addpromosi').'/'.$pak_id);			  		
  	}

  	public function addpromosi() 
	{
		$pak_id = $this->uri->segment(3);
		$data['detail'] = $this->pak_model->select_by_pak2($pak_id)->row();
		$data['jabatan'] = $this->pak_model->select_jabatan()->result();
		$data['pangkat'] = $this->pak_model->select_pangkat()->result();				
		$this->template->display('addpakpromosi_view', $data);
	}

	public function savedatapromosi() 
	{	
		$pak_id = $this->uri->segment(3);					  					
		$this->pak_model->update_data_promosi();		
		redirect(site_url('pak/finish').'/'.$pak_id);			  		
  	}

  	public function finish() 
	{
		$pak_id = $this->uri->segment(3);
		$data['detail'] = $this->pak_model->select_by_pak($pak_id)->row();			
		$this->template->display('addpakfinish_view', $data);
	}

	public function preview() 
	{
		$pak_id = $this->uri->segment(3);
		$data['detail'] = $this->pak_model->select_by_pak($pak_id)->row();			
		$this->load->view('preview_view', $data);
	}

	public function downloadpdf() 
	{
		$pak_id = $this->uri->segment(3);
		$data['detail'] = $this->pak_model->select_by_pak($pak_id)->row();	
		
		$time = time();
		$filename = 'CetakPAK_'.$pak_id.'_'.$time;
		$pdfFilePath = FCPATH."/download/$filename.pdf";		
		
		if (file_exists($pdfFilePath) == FALSE){
			ini_set('memory_limit','50M');
			$html = $this->load->view('printpdf_view', $data, true); // render the view into HTML
			 
			$this->load->library('pdf');
			$pdf = $this->pdf->load();
			$pdf->SetHeader(''); 
			$pdf->SetFooter('');
			$pdf->WriteHTML($html); // write the HTML into the PDF
			$pdf->Output($pdfFilePath, 'F'); // save to file because we can
		}
		redirect("/download/$filename.pdf");		
	}

	public function deletedata($kode) {
		$kode = $this->security->xss_clean($this->uri->segment(3));
		
		if ($kode == null) {
			redirect(site_url().'pak');
		} else {
			$this->pak_model->delete_data($kode);
			echo "<meta http-equiv=refresh content=0;url=\"".site_url()."pak\">";
		}
	}

	public function editdata($pak_id) 
	{
		$data['detail'] = $this->pak_model->select_by_pak($pak_id)->row();		
		$this->template->display('editpak_view', $data);
	}

	public function updatedata() 
	{
		$pak_id = $this->uri->segment(3);		
		$this->pak_model->update_data_pak();
 		redirect(site_url('pak/edittetapan').'/'.$pak_id);
	}

	public function edittetapan($pak_id) 
	{
		//$data['pegawai'] = $this->pak_model->select_by_pak2($pak_id)->row();
		$data['detail'] = $this->pak_model->select_by_pak($pak_id)->row();
		$this->template->display('editpaktetapan_view', $data);
	}

	public function updatedatatetapan() 
	{
		$pak_id = $this->uri->segment(3);		
		$this->pak_model->update_data_tetapan();
 		redirect(site_url('pak/editpromosi').'/'.$pak_id);
	}

	public function editpromosi($pak_id) 
	{		
		$data['jabatan'] = $this->pak_model->select_jabatan()->result();
		$data['pangkat'] = $this->pak_model->select_pangkat()->result();
		$data['detail'] = $this->pak_model->select_by_pak($pak_id)->row();
		$this->template->display('editpakpromosi_view', $data);
	}

	public function updatedatapromosi() 
	{
		$pak_id = $this->uri->segment(3);		
		$this->pak_model->update_data_promosi();
 		redirect(site_url('pak/finish').'/'.$pak_id);
	}
}
/* Location: ./application/controller/Pak.php */