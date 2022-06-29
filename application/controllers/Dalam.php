<?php

class Dalam extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('m_dalam');
        $this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
    }

    function index()
    {
        $x['tot_dokter'] = $this->db->get('tbl_dokter')->num_rows();
        $x['tot_staf'] = $this->db->get('tbl_staf')->num_rows();
        $x['tot_agenda'] = $this->db->get('tbl_agenda')->num_rows();
        //cara baca diambil dari data person yang ada di model (nama file) dan ditambah methodnya.

        $x['dalam'] = $this->m_dalam->get_all_nonijin();
        $x['judul'] = 'Dalam Gedung';

        //kirim data di atas di parameter bawah ini
        $this->load->view('templates/header');
        $this->load->view('depan/v_dalam', $x);
        $this->load->view('templates/footer');
    }

    function detail($kode)
    {
        $x['tot_dokter'] = $this->db->get('tbl_dokter')->num_rows();
        $x['tot_staf'] = $this->db->get('tbl_staf')->num_rows();
        $x['tot_agenda'] = $this->db->get('tbl_agenda')->num_rows();
        //cara baca diambil dari data person yang ada di model (nama file) dan ditambah methodnya.
        $x['dalam'] = $this->m_dalam->get_nonijin_by_kode($kode);
        $x['judul'] = 'Dalam Gedung';



        //kirim data di atas di parameter bawah ini
        $this->load->view('templates/header');
        $this->load->view('depan/v_detail_dalam', $x);
        $this->load->view('templates/footer');
    }

    function cari()
    {
        $keyword = str_replace("'", "", htmlspecialchars($this->input->get('keyword', TRUE), ENT_QUOTES));
        $query = $this->m_dalam->cari_nonijin($keyword);
        if ($query->num_rows() > 0) {
            $x['dalam'] = $query;
            $x['category'] = $this->db->get('tbl_kategori');
            $x['populer'] = $this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 5");

            //kirim data di atas di parameter bawah ini
            $this->load->view('templates/header');
            $this->load->view('depan/v_dalam', $x);
            $this->load->view('templates/footer');
        } else {
            echo $this->session->set_flashdata('msg', '<div class="alert alert-danger">Tidak dapat menemukan artikel dengan kata kunci <b>' . $keyword . '</b></div>');
            redirect('dalam');
        }
    }
}
