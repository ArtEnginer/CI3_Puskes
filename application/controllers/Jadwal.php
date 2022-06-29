<?php
class Jadwal extends CI_Controller
{

    function index()
    {

        $data = [
            'judul' => 'Jadwal',
            'jadwal' => $this->db->get('tbl_jadwal')->result()

        ];

        $this->load->view('templates/header');
        $this->load->view('depan/v_jadwal', $data);
        $this->load->view('templates/footer');
    }
}
