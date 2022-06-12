<?php
class Antrian extends CI_Controller
{
    public function index()
    {
        if ($this->input->post()) {
            var_dump($this->input->post());
            die;
        }
        // tampilkan pada monitor
        $this->load->view('templates/header');
        $this->load->view('Antrian/index');
        $this->load->view('templates/footer');
    }
}