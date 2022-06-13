<?php

class Antrian extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('alamat_pasien', 'Alamat Pasien', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan Penyakit', 'required');
        $this->form_validation->set_rules('nomor_kis', 'Nomor KIS', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('Antrian/index');
            $this->load->view('templates/footer');
        } else {
            var_dump($this->input->post());
        }
    }

    public function kode()
    {
        $this->form_validation->set_rules('kode_antrian', 'Kode Antrian', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('Antrian/kode');
            $this->load->view('templates/footer');
        } else {
            var_dump($this->input->post());
            die;
            redirect(base_url() . 'antrian/ruangtunggu/');
        }
    }
}