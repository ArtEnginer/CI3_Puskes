<?php
class Sotk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_sotk');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index()
	{
		$x['tot_dokter'] = $this->db->get('tbl_dokter')->num_rows();
		$x['tot_staf'] = $this->db->get('tbl_staf')->num_rows();
		$x['tot_agenda'] = $this->db->get('tbl_agenda')->num_rows();
		$x['data'] = $this->m_tulisan->get_all_tulisan();
		$x['sotk'] = $this->m_sotk->get_all_sotk();
		$x['judul'] = 'Struktur Organisasi';



		$this->load->view('templates/header');
		$this->load->view('depan/v_sotk', $x);
		$this->load->view('templates/footer');
	}
}
