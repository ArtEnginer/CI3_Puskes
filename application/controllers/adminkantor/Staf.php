<?php
class staf extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_logged_in();

		$this->load->model('M_staf');
		$this->load->model('m_pengguna');
		$this->load->model('m_jabatan');
		$this->load->library('upload');
	}


	function index()
	{
		$x['jabatan'] = $this->m_jabatan->get_all_kelas();
		$x['data'] = $this->M_staf->get_all_siswa();
		$this->load->view('admin/v_staf', $x);
	}

	function simpan_siswa()
	{
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './assets/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$photo = $gbr['file_name'];
				$nip = strip_tags($this->input->post('xnip'));
				$nama = strip_tags($this->input->post('xnama'));
				$jenkel = strip_tags($this->input->post('xjenkel'));
				$jabatan = strip_tags($this->input->post('xjabatan'));

				$this->M_staf->simpan_siswa($nip, $nama, $jenkel, $jabatan, $photo);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('adminkantor/staf');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('adminkantor/staf');
			}
		} else {
			$nip = strip_tags($this->input->post('xnip'));
			$nama = strip_tags($this->input->post('xnama'));
			$jenkel = strip_tags($this->input->post('xjenkel'));
			$jabatan = strip_tags($this->input->post('xjabatan'));

			$this->M_staf->simpan_siswa_tanpa_img($nip, $nama, $jenkel, $jabatan);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('adminkantor/staf');
		}
	}

	function update_siswa()
	{

		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './assets/images/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$gambar = $this->input->post('gambar');
				$path = './assets/images/' . $gambar;
				unlink($path);

				$photo = $gbr['file_name'];
				$kode = $this->input->post('kode');
				$nip = strip_tags($this->input->post('xnip'));
				$nama = strip_tags($this->input->post('xnama'));
				$jenkel = strip_tags($this->input->post('xjenkel'));
				$jabatan = strip_tags($this->input->post('xjabatan'));

				$this->M_staf->update_siswa($kode, $nip, $nama, $jenkel, $jabatan, $photo);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('adminkantor/staf');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('adminkantor/staf');
			}
		} else {
			$kode = $this->input->post('kode');
			$nip = strip_tags($this->input->post('xnip'));
			$nama = strip_tags($this->input->post('xnama'));
			$jenkel = strip_tags($this->input->post('xjenkel'));
			$jabatan = strip_tags($this->input->post('xjabatan'));

			$this->M_staf->update_siswa_tanpa_img($kode, $nip, $nama, $jenkel, $jabatan);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('adminkantor/staf');
		}
	}

	function hapus_siswa()
	{
		$kode = $this->input->post('kode');
		$gambar = $this->input->post('gambar');
		$path = './assets/images/' . $gambar;
		unlink($path);
		$this->M_staf->hapus_siswa($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('adminkantor/staf');
	}
}
