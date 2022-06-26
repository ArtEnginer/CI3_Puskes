<?php 
class M_staf extends CI_Model{

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT tbl_staf.*,jabatan_nama FROM tbl_staf JOIN tbl_jabatan ON staf_jabatan_id=jabatan_id");
		return $hsl;
	}

	function simpan_siswa($nip,$nama,$jenkel,$jabatan,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_staf (staf_nip,staf_nama,staf_jenkel,staf_jabatan_id,staf_photo) VALUES ('$nip','$nama','$jenkel','$jabatan','$photo')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($nip,$nama,$jenkel,$jabatan){
		$hsl=$this->db->query("INSERT INTO tbl_staf (staf_nip,staf_nama,staf_jenkel,staf_jabatan_id) VALUES ('$nip','$nama','$jenkel','$jabatan')");
		return $hsl;
	}

	function update_siswa($kode,$nip,$nama,$jenkel,$jabatan,$photo){
		$hsl=$this->db->query("UPDATE tbl_staf SET staf_nip='$nip',staf_nama='$nama',staf_jenkel='$jenkel',staf_jabatan_id='$jabatan',staf_photo='$photo' WHERE staf_id='$kode'");
		return $hsl;
	}
	function update_siswa_tanpa_img($kode,$nip,$nama,$jenkel,$jabatan){
		$hsl=$this->db->query("UPDATE tbl_staf SET staf_nip='$nip',staf_nama='$nama',staf_jenkel='$jenkel',staf_jabatan_id='$jabatan' WHERE staf_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_staf WHERE staf_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT tbl_staf.*,jabatan_nama FROM tbl_staf JOIN tbl_jabatan ON staf_jabatan_id=jabatan_id");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_staf.*,jabatan_nama FROM tbl_staf JOIN tbl_jabatan ON staf_jabatan_id=jabatan_id limit $offset,$limit");
		return $hsl;
	}

}