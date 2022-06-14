<?php

class Antrian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Antrian_m', 'antrian');
    }

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
            $this->antrian->fill($this->input->post());

            $this->antrian->insert();
            redirect('/antrian/ruangtunggu/' . $this->antrian->kode_antrian);
            die;
        }
    }

    public function kode()
    {
        $data = [
            'messages' => $this->session->flashdata(),
        ];
        $this->form_validation->set_rules('kode_antrian', 'Kode Antrian', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('Antrian/kode', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('/antrian/ruangtunggu/' . $this->input->post('kode_antrian'));
        }
    }

    public function ruangtunggu($code = null)
    {
        if ($code !== null) {
            $query = $this->antrian->getRow($code);
            if ($query) {
                $data = [
                    'pasien' => $query,
                    'ngantri' => $this->antrian->countNgantri(),
                    'ngantridone' => $this->antrian->countNgantriDone(),
                ];
                $this->load->view('templates/header');
                $this->load->view('Antrian/Ruang_tunggu', $data);
                $this->load->view('templates/footer');
            } else {
                $this->session->set_flashdata('antrian', 'Kode Antrian Tidak Valid');
                redirect('/antrian/kode');
            }
        } else {
            $this->session->set_flashdata('antrian', 'Kode Antrian Tidak Valid');
            redirect('/antrian/kode');
        }
    }
}