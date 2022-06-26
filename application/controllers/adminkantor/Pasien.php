<?php
class Pasien extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_logged_in();

		$this->load->database();
		$this->load->model('Antrian_m', 'antrian');
	}


	function index()
	{
		$x['data'] = $this->antrian->getAllNow();
		$x['model'] = $this->antrian;
		$this->load->view('admin/v_pasien', $x);
	}

	function get($id = 0)
	{
		if (!empty($id)) {
			$data = $this->db->get_where("antrian", ['id' => $id])->row_array();
		} else {
			$data = $this->db->get("antrian")->result();
		}
		if ($data) {
			echo json_encode([
				'status' => 200,
				'data'   => $data
			]);
		} else {
			$this->antrian->fill($this->input->post());
			$this->antrian->insert();
			echo json_encode([
				'status' => 400,
				'message'   => 'Data tidak ditemukan'
			]);
		}
	}

	function add()
	{
		$this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
		$this->form_validation->set_rules('alamat_pasien', 'Alamat Pasien', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('keluhan', 'Keluhan Penyakit', 'required');
		$this->form_validation->set_rules('nomor_kis', 'Nomor KIS', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo json_encode([
				'status' => 400,
				'message'   => $this->form_validation->error_array()
			]);
		} else {
			$this->antrian->fill($this->input->post());
			$this->antrian->insert();
			echo json_encode([
				'status' => 201,
				'data'   => $this->antrian
			]);
		}
	}

	function edit($id)
	{
		$this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
		$this->form_validation->set_rules('alamat_pasien', 'Alamat Pasien', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('keluhan', 'Keluhan Penyakit', 'required');
		$this->form_validation->set_rules('nomor_kis', 'Nomor KIS', 'required');

		if ($this->form_validation->run() == FALSE) {
			echo json_encode([
				'status' => 400,
				'message'   => $this->form_validation->error_array()
			]);
		} else {
			$this->antrian->update($id, $this->input->post());
			echo json_encode([
				'status' => 200,
				'data'   => $this->antrian
			]);
		}
	}

	function delete($id)
	{
		$this->antrian->delete($id);
		echo json_encode([
			'status' => 200,
			'message'   => 'Berhasil Menghapus data'
		]);
	}
	function layani($id)
	{
		$this->antrian->update($id, ['status' => 1]);
		echo json_encode([
			'status' => 200,
			'message'   => 'Berhasil Mengubah status pasien'
		]);
	}
	function selesai($id)
	{
		$this->antrian->update($id, ['status' => 4]);
		echo json_encode([
			'status' => 200,
			'message'   => 'Berhasil Menyelesaikan Pelayanan Pasien'
		]);
	}

	function laporan_pasien()
	{
		$data['antrian'] = $this->antrian->getAll();
		$data['model'] = $this->antrian;
		$this->load->view('admin/v_pasien_laporan', $data);
	}

	// funtion lihat to request pasien by id using json
	function lihat($id)
	{
		$data = $this->db->get_where("antrian", ['id' => $id])->row_array();
		if ($data) {
			echo json_encode([
				'status' => 200,
				'data'   => $data
			]);
		} else {
			echo json_encode([
				'status' => 400,
				'message'   => 'Data tidak ditemukan'
			]);
		}
	}

	// function to filter using range date
	function filter()
	{
		$start = $this->input->post('tanggal_awal');
		$end = $this->input->post('tanggal_akhir');
		$data['antrian'] = $this->antrian->getByRange($start, $end);
		$data['model'] = $this->antrian;
		$this->load->view('admin/v_pasien_laporan', $data);
	}

	
}
