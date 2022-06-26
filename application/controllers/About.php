<?php
class About extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_about');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index()
	{
		$x['tot_dokter'] = $this->db->get('tbl_dokter')->num_rows();
		$x['tot_staf'] = $this->db->get('tbl_staf')->num_rows();
		$x['tot_agenda'] = $this->db->get('tbl_agenda')->num_rows();
		$x['data'] = $this->m_tulisan->get_all_tulisan();
		$x['sejarah'] = $this->m_about->get_all_sejarah();
		$x['judul'] = 'Sejarah';


		$this->load->view('templates/header');
		$this->load->view('depan/v_about', $x);
		$this->load->view('templates/footer');
	}
}
