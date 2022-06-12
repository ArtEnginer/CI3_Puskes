<?php
class Antrian extends CI_Controller
{
    protected $data = [
        'id' => '1',
        'kode_antrian' => 'Avbuer7',
        'nomor_antrian' => 001,
        'nama_pasien' => 'Nova Adi Saputra',
        'alamat_pasien' => 'Tegal',
        'jenis_kelamin' => 'Laki-Laki',
        'keluhan' => 'Batuk Berdahak',
        'nomor_kis' => '29835725378098023',
        'tanggal' => 20220615,
        'status' => 0,
        'created_at' => '2022 06 15 17',
    ];
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