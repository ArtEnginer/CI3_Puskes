<?php
class Dalam extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_logged_in();

		$this->load->model('m_dalam');
		$this->load->library('upload');
	}


	function index()
	{
		$x['data'] = $this->m_dalam->get_all_nonijin();
		$this->load->view('templates/headeradmin');
		$this->load->view('admin/v_dalam', $x);
	}

	function add_nonijin()
	{
		// $x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_add_dalam');
	}
	function get_edit()
	{
		$kode = $this->uri->segment(4);
		$x['data'] = $this->m_dalam->get_nonijin_by_kode($kode);


		$this->load->view('admin/v_edit_dalam', $x);
	}


	function simpan_nonijin()
	{

		$judul = strip_tags($this->input->post('xjudul'));
		$isi = $this->input->post('xisi');
		$ket = strip_tags($this->input->post('xket'));
		$this->m_dalam->simpan_nonijin($judul, $isi, $ket);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('adminkantor/dalam');
	}

	function update_nonijin()
	{
		$kode = strip_tags($this->input->post('kode'));
		$judul = strip_tags($this->input->post('xjudul'));
		$isi = $this->input->post('xisi');
		$ket = strip_tags($this->input->post('xket'));
		$this->m_dalam->update_nonijin($kode, $judul, $isi, $ket);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('adminkantor/dalam');
	}

	function hapus_nonijin()
	{
		$kode = strip_tags($this->input->post('kode'));
		$this->m_dalam->hapus_nonijin($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('adminkantor/dalam');
	}
}
