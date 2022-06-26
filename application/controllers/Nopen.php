<?php
class Nopen extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_nopen');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index()
	{
		$x['tot_dokter'] = $this->db->get('tbl_dokter')->num_rows();
		$x['tot_staf'] = $this->db->get('tbl_staf')->num_rows();
		$x['tot_agenda'] = $this->db->get('tbl_agenda')->num_rows();
		$x['data'] = $this->m_tulisan->get_all_tulisan();
		$x['nopen'] = $this->m_nopen->get_all_nopen();
		$x['judul'] = 'Nomor Penting';


		$this->load->view('templates/header');
		$this->load->view('depan/v_nopen', $x);
		$this->load->view('templates/footer');
	}
}
