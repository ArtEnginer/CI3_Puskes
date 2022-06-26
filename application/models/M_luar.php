<?php
class M_luar extends CI_Model{

    function get_all_ijin()
    {
		$hsl=$this->db->query("SELECT tbl_luar.*,DATE_FORMAT(luar_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_luar ORDER BY luar_id ASC");
		return $hsl;
	}
    function simpan_ijin($judul,$isi,$gambar,$tanggal)
    {
		$hsl=$this->db->query("insert into tbl_luar(luar_judul,luar_isi,luar_gambar,luar_tanggal) values ('$judul','$isi','$gambar','$tanggal')");
		return $hsl;
	}
    function get_ijin_by_kode($kode)
    {
		$hsl=$this->db->query("SELECT tbl_luar.*,DATE_FORMAT(luar_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_luar where luar_id='$kode'");
		return $hsl;
	}
    function update_ijin($luar_id,$judul,$isi,$gambar,$tanggal)
    {
		$hsl=$this->db->query("update tbl_luar set luar_judul='$judul',luar_isi='$isi',luar_gambar='$gambar',luar_tanggal='$tanggal' where luar_id='$luar_id'");
		return $hsl;
	}
    function update_ijin_tanpa_img($luar_id,$judul,$isi,$tanggal)
    {
		$hsl=$this->db->query("update tbl_luar set luar_judul='$judul',luar_isi='$isi',luar_tanggal='$tanggal' where luar_id='$luar_id'");
		return $hsl;
	}
    function hapus_ijin($kode)
    {
		$hsl=$this->db->query("delete from tbl_luar where luar_id='$kode'");
		return $hsl;
	}

	//Front-End
    function get_ijin_slider()
    {
		$hsl=$this->db->query("SELECT tbl_luar.*,DATE_FORMAT(luar_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_luar where ijin_img_slider='1' ORDER BY luar_id DESC");
		return $hsl;
	}
    function get_ijin_home()
    {
		$hsl=$this->db->query("SELECT tbl_luar.*,DATE_FORMAT(luar_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_luar ORDER BY luar_id DESC limit 4");
		return $hsl;
	}

    function ijin_perpage($offset,$limit)
    {
		$hsl=$this->db->query("SELECT tbl_luar.*,DATE_FORMAT(luar_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_luar ORDER BY luar_id DESC limit $offset,$limit");
		return $hsl;
	}

    function ijin()
    {
		$hsl=$this->db->query("SELECT tbl_luar.*,DATE_FORMAT(luar_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_luar ORDER BY luar_id DESC");
		return $hsl;
	}
	// // function get_ijin_by_kode($kode){
	// // 	$hsl=$this->db->query("SELECT tbl_luar.*,DATE_FORMAT(luar_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_luar where luar_id='$kode'");
	// // 	return $hsl;
	// }

    function cari_ijin($keyword)
    {
		$hsl=$this->db->query("SELECT tbl_luar.*,DATE_FORMAT(luar_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_luar WHERE luar_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
	}

    function show_komentar_by_ijin_id($kode)
    {
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_ijin_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
