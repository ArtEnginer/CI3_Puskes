<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_service');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_layanan');
		$this->load->model('m_ektp');
		$this->load->model('m_tunggakan');
		$this->load->model('m_potensi');
		$this->load->model('m_pengunjung');
		$this->load->model('m_slider');
		$this->load->model('m_poll');
		$this->load->model('model_utama');



		$this->m_pengunjung->count_visitor();
	}
	function index()
	{
		$x['berita'] = $this->m_tulisan->get_berita_home();
		$x['pengumuman'] = $this->m_pengumuman->get_pengumuman_home();
		$x['agenda'] = $this->m_agenda->get_agenda_home();
		$x['slider'] = $this->m_slider->get_all_slider();
		$x['layanan'] = $this->m_layanan->get_layanan_home();
		$x['tunggakan'] = $this->m_tunggakan->get_tunggakan_home();
		$x['potensi'] = $this->m_potensi->get_potensi_home();
		$x['count'] = $this->m_pengunjung->statistik_pengunjung();
		$x['service'] = $this->m_service->get_service_home();
		$x['poll'] = $this->m_poll->get_all_poll();

		$x['ektp'] = $this->m_ektp->get_ektp_home();
		$x['tot_guru'] = $this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa'] = $this->db->get('tbl_siswa')->num_rows();
		$x['tot_files'] = $this->db->get('tbl_files')->num_rows();
		$x['tot_agenda'] = $this->db->get('tbl_agenda')->num_rows();
		$x['judul'] = 'Web Resmi UPT Puskesmas Tanah Abang';


		$jum = $this->m_tulisan->berita();
		$page = $this->uri->segment(3);
		if (!$page) :
			$offset = 0;
		else :
			$offset = $page;
		endif;
		$limit = 3;
		$config['base_url'] = base_url() . 'blog/index/';
		$config['total_rows'] = $jum->num_rows();
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		//Tambahan untuk styling
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		$config['first_link'] = 'Awal';
		$config['last_link'] = 'Akhir';
		$config['next_link'] = 'Next >>';
		$config['prev_link'] = '<< Prev';
		$this->pagination->initialize($config);
		// $x['page'] = $this->pagination->create_links();
		$x['data'] = $this->m_tulisan->berita_perpage($offset, $limit);
		$x['category'] = $this->db->get('tbl_kategori');
		$x['populer'] = $this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 3");
		$x['judul'] = 'Pengumuman';


		$kategori = "pengumuman";
		$x['pengumuman'] = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_kategori_nama LIKE '%$kategori%' ORDER BY tulisan_views DESC LIMIT 5");
	

		$this->load->view('templates/header');
		$this->load->view('depan/v_home', $x);
		$this->load->view('templates/footer');


		// // tampilkan pada monitor
		// $this->load->view('templates/header');
		// $this->load->view('depan/v_home', $x);
		// $this->load->view('templates/footer');
	}

	function simpan_poll()
	{
		$sbaik = strip_tags($this->input->post('xpoll1'));
		$baik = strip_tags($this->input->post('xpoll2'));
		$cukup = strip_tags($this->input->post('xpoll3'));
		$kurang = strip_tags($this->input->post('xpoll4'));

		$this->m_poll->simpan_poll($sbaik, $baik, $cukup, $kurang);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('home');
	}

	function getData()
	{
		$this->load->model('m_poll');
		$data = $this->m_poll->getJumlah();
		echo json_encode($data);
		// $cek = json_encode($data);
		// print_r($cek);
		// exit();
	}
}