<?php
class Jadwal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();

        // $this->load->database();
        $this->load->model('Jadwal_m', 'jadwal');
    }


    function index()
    {
        $x['data'] = $this->jadwal->get_by_id(1);
        // var_dump($x['data']->row_array());
        // die();
        $this->load->view('admin/v_jadwal', $x);
    }

    function update_jadwal()
    {
        $id = $this->input->post('id');
        $jadwal = $this->input->post('jadwal');
        $info = $this->input->post('info');
        $data = array(
            'jadwal' => $jadwal,
            'info' => $info,
            'updated_at' => date('Y-m-d H:i:s')

        );
        $save = $this->jadwal->update_jadwal($id, $data);

        if (!$save) {
            // msg using json
            $this->session->set_flashdata('msg', '<div class="alert alert-success">Jadwal berhasil diubah</div>');
            redirect('adminkantor/jadwal');
        } else {
            // msg using json
            $this->session->set_flashdata('msg', '<div class="alert alert-danger">Jadwal gagal diubah</div>');
            redirect('adminkantor/jadwal');
        }
    }
}
