<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pak_model extends CI_Model 
{
	
	function __construct() 
	{
		parent::__construct();	
	}	
	
	function select_all() 
	{
		$this->db->select('k.pak_id, k.pak_date_update, p.nip, p.nmglr, u.user_nama');
		$this->db->from('demak_pak k');
		$this->db->join('profil p', 'k.pns_id = p.pns_id');
		$this->db->join('users u', 'k.user_id = u.user_id');
		$this->db->order_by('k.pak_date_update','desc');
		
		return $this->db->get();
	}
	
	function select_nama() 
	{
		$this->db->select('pns_id, nip, nmglr, no_karpeg, nm_pkt, nm_gol, tmtgol, nm_kab, tgllhr, jkel, nm_pddk, nm_jabfung, nm_skpd');
		$this->db->from('profil');		
		$this->db->order_by('nip','asc');
		
		return $this->db->get();
	}

	function select_by_id($pak_id) 
	{
		$this->db->select('*');
		$this->db->from('demak_pak');
		$this->db->where('pak_id', $pak_id);
		
		return $this->db->get();
	}

	function select_by_pak2($pak_id) 
	{
		$this->db->select('p.nip, p.nmglr, p.nm_skpd, k.pak_nuptk, k.pak_no_karpeg');
		$this->db->from('demak_pak k');
		$this->db->join('profil p', 'k.pns_id = p.pns_id');
		$this->db->where('k.pak_id', $pak_id);
		
		return $this->db->get();
	}

	function select_by_pak($pak_id) 
	{
		$this->db->select('p.nip, p.nmglr, p.nm_pkt, p.nm_gol, p.tmtgol, p.nm_kab, 
			p.tgllhr, p.jkel, p.nm_pddk, p.nm_jabfung, p.nm_skpd, k.*, j.nm_jabfung as jabatan, g.nm_gol, g.nm_pkt');
		$this->db->from('demak_pak k');
		$this->db->join('profil p', 'k.pns_id = p.pns_id');
		$this->db->join('refjabfung j', 'k.kd_jabfung = j.kd_jabfung', 'left');
		$this->db->join('refgol g', 'k.kd_gol = g.kd_gol', 'left');
		$this->db->where('k.pak_id', $pak_id);
		
		return $this->db->get();
	}

	function select_jabatan() 
	{
		$this->db->select('kd_jabfung, nm_jabfung');
		$this->db->from('refjabfung');
		$this->db->order_by('kd_jabfung', 'asc');
		
		return $this->db->get();
	}

	function select_pangkat() 
	{
		$this->db->select('*');
		$this->db->from('refgol');
		$this->db->order_by('kd_gol', 'asc');
		
		return $this->db->get();
	}

	function insert_data() 
	{
		$data = array(  'pns_id' => trim($this->input->post('pnsid')),
						'pak_nuptk' => strtoupper(trim($this->input->post('nuptk'))),
						'pak_no_karpeg' => strtoupper(trim($this->input->post('karpeg'))),
						'pak_tmt_fungsi' => $this->input->post('tgltmt'),
						'pak_lama_kerja_thn' => $this->input->post('msgollamathn'),
						'pak_lama_kerja_bln' => $this->input->post('msgollamabln'),
						'pak_baru_kerja_thn' => $this->input->post('msgolbaruthn'),
						'pak_baru_kerja_bln' => $this->input->post('msgolbarubln'),
						'pak_bln_1' => $this->input->post('from'),
						'pak_bln_2' => $this->input->post('to'),
						'pak_date_update' => date('Y-m-d'),
						'pak_time_update' => date('Y-m-d H:i:s'),
						'user_id' => $this->session->userdata('user_id')
					);		

		$this->db->insert('demak_pak', $data);	
	}	

	function update_data_tetapan() {
		$pak_id = $this->uri->segment(3);

		$data = array(  'pak_gelar_lama' => $this->input->post('gelarlama'),
						'pak_gelar_baru' => $this->input->post('gelarbaru'),
						'pak_gelar_jumlah' => $this->input->post('jumlahgelar'),
						'pak_pra_lama' => $this->input->post('pralama'),
						'pak_pra_baru' => $this->input->post('prabaru'),
						'pak_pra_jumlah' => $this->input->post('jumlahpra'),
						'pak_tugas_lama' => $this->input->post('tugaslama'),
						'pak_tugas_baru' => $this->input->post('tugasbaru'),
						'pak_tugas_jumlah' => $this->input->post('jumlahtugas'),
						'pak_pengembang_lama' => $this->input->post('kembanglama'),
						'pak_pengembang_baru' => $this->input->post('kembangbaru'),
						'pak_pengembang_jumlah' => $this->input->post('jumlahkembang'),
						'pak_publik_lama' => $this->input->post('publikasilama'),
						'pak_publik_baru' => $this->input->post('publikasibaru'),
						'pak_publik_jumlah' => $this->input->post('jumlahpublikasi'),
						'pak_karya_lama' => $this->input->post('karyalama'),
						'pak_karya_baru' => $this->input->post('karyabaru'),
						'pak_karya_jumlah' => $this->input->post('jumlahkarya'),
						'pak_jumlahutama_lama' => $this->input->post('jmlutamalama'),
						'pak_jumlahutama_baru' => $this->input->post('jmlutamabaru'),
						'pak_jumlahutama_total' => $this->input->post('jmlutamatotal'),
						'pak_ijazah_lama' => $this->input->post('ijazahlama'),
						'pak_ijazah_baru' => $this->input->post('ijazahbaru'),
						'pak_ijazah_jumlah' => $this->input->post('jumlahijazah'),
						'pak_dukung_lama' => $this->input->post('dukunglama'),
						'pak_dukung_baru' => $this->input->post('dukungbaru'),
						'pak_dukung_jumlah' => $this->input->post('jumlahdukung'),
						'pak_jumlahpenunjang_lama' => $this->input->post('jmlpenunjanglama'),
						'pak_jumlahpenunjang_baru' => $this->input->post('jmlpenunjangbaru'),
						'pak_jumlahpenunjang_total' => $this->input->post('jmlpenunjangtotal'),
						'pak_total_lama' => $this->input->post('totallama'),
						'pak_total_baru' => $this->input->post('totalbaru'),
						'pak_total_jumlah' => $this->input->post('totaljumlah')
						);

		$this->db->where('pak_id', $pak_id);
		$this->db->update('demak_pak', $data);
	}

	function update_data_promosi() {
		$pak_id = $this->uri->segment(3);

		$data = array(  'kd_jabfung' => $this->input->post('lstJabatan'),
						'pak_tmt_jab' => $this->input->post('tmtjabatan'),
						'kd_gol' => $this->input->post('lstPangkat'),
						'pak_tmt_pangkat' => $this->input->post('tmtpangkat')
						);

		$this->db->where('pak_id', $pak_id);
		$this->db->update('demak_pak', $data);
	}
		
	function delete_data($kode) {
		$this->db->where('pak_id', $kode);
		$this->db->delete('demak_pak');
	}

	function update_data_pak() 
	{
		$pak_id     = $this->input->post('pak_id');
		$data = array(	'pak_nuptk' => strtoupper(trim($this->input->post('nuptk'))),
						'pak_no_karpeg' => strtoupper(trim($this->input->post('karpeg'))),
						'pak_tmt_fungsi' => $this->input->post('tgltmt'),
						'pak_lama_kerja_thn' => $this->input->post('msgollamathn'),
						'pak_lama_kerja_bln' => $this->input->post('msgollamabln'),
						'pak_baru_kerja_thn' => $this->input->post('msgolbaruthn'),
						'pak_baru_kerja_bln' => $this->input->post('msgolbarubln'),
						'pak_bln_1' => $this->input->post('from'),
						'pak_bln_2' => $this->input->post('to'),
						'pak_date_update' => date('Y-m-d'),
						'pak_time_update' => date('Y-m-d H:i:s'),
						'user_id' => $this->session->userdata('user_id')
					);		

		$this->db->where('pak_id', $pak_id);
		$this->db->update('demak_pak', $data);	
	}	
}
/* Location: ./application/models/Pak_model.php */