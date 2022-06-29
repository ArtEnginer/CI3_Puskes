<?php 
class M_dokter extends CI_Model{

	function get_all_guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_dokter");
		return $hsl;

		// return $this->db->get('tbl_dokter')->result_array();
	}

	function simpan_guru($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabat,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_dokter (dokter_nip,dokter_nama,dokter_jenkel,dokter_tmp_lahir,dokter_tgl_lahir,dokter_jabatan,dokter_photo) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$jabat','$photo')");
		return $hsl;
	}
	function simpan_guru_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabat){
		$hsl=$this->db->query("INSERT INTO tbl_dokter (dokter_nip,dokter_nama,dokter_jenkel,dokter_tmp_lahir,dokter_tgl_lahir,dokter_jabatan) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$jabat')");
		return $hsl;
	}

	function update_guru($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabat,$photo){
		$hsl=$this->db->query("UPDATE tbl_dokter SET dokter_nip='$nip',dokter_nama='$nama',dokter_jenkel='$jenkel',dokter_tmp_lahir='$tmp_lahir',dokter_tgl_lahir='$tgl_lahir',dokter_jabatan='$jabat',dokter_photo='$photo' WHERE dokter_id='$kode'");
		return $hsl;
	}
	function update_guru_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabat){
		$hsl=$this->db->query("UPDATE tbl_dokter SET dokter_nip='$nip',dokter_nama='$nama',dokter_jenkel='$jenkel',dokter_tmp_lahir='$tmp_lahir',dokter_tgl_lahir='$tgl_lahir',dokter_jabatan='$jabat' WHERE dokter_id='$kode'");
		return $hsl;
	}
	function hapus_guru($kode){
		$hsl=$this->db->query("DELETE FROM tbl_dokter WHERE dokter_id='$kode'");

		
		return $hsl;

		// $this->db->where('id', $id);
        // $this->db->delete('tbl_dokter');


	}

	//front-end
	function guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_dokter");
		return $hsl;
	}
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_dokter limit $offset,$limit");
		return $hsl;
	}

}