<?php
class M_dalam extends CI_Model{


    function get_all_nonijin()
    {
		$hsl=$this->db->query("SELECT dalam_id,dalam_judul,dalam_isi,dalam_ket FROM tbl_dalam ORDER BY dalam_id ASC");
		return $hsl;
	}

    function simpan_nonijin($judul,$isi,$ket)
    {
		$hsl=$this->db->query("insert into tbl_dalam(dalam_judul,dalam_isi,dalam_ket ) values ('$judul','$isi','$ket')");
		return $hsl;
	}
    function get_nonijin_by_kode($kode)
    {
		$hsl=$this->db->query("SELECT dalam_id,dalam_judul,dalam_isi,dalam_ket FROM tbl_dalam where dalam_id='$kode'");
		return $hsl;
	}
    function update_nonijin($dalam_id,$judul,$isi,$ket)
    {
		$hsl=$this->db->query("UPDATE tbl_dalam set dalam_id='$dalam_id',dalam_judul='$judul',dalam_isi='$isi',dalam_ket='$ket' where dalam_id='$dalam_id'");
		return $hsl;
	}
   
    function hapus_nonijin($kode)
    {
		$hsl=$this->db->query("delete from tbl_dalam where dalam_id='$kode'");
		return $hsl;
	}

	//Front-End
    function get_nonijin_slider()
    {
		$hsl=$this->db->query("SELECT tbl_dalam.*,DATE_FORMAT(dalam_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_dalam where nonijin_img_slider='1' ORDER BY dalam_id DESC");
		return $hsl;
	}
    function get_nonijin_home()
    {
		$hsl=$this->db->query("SELECT tbl_dalam.*,DATE_FORMAT(dalam_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_dalam ORDER BY dalam_id DESC limit 4");
		return $hsl;
	}

    function nonijin_perpage($offset,$limit)
    {
		$hsl=$this->db->query("SELECT tbl_dalam.*,DATE_FORMAT(dalam_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_dalam ORDER BY dalam_id DESC limit $offset,$limit");
		return $hsl;
	}

    function nonijin()
    {
		$hsl=$this->db->query("SELECT tbl_dalam.*,DATE_FORMAT(dalam_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_dalam ORDER BY dalam_id DESC");
		return $hsl;
	}

    function cari_nonijin($keyword)
    {
		$hsl=$this->db->query("SELECT dalam_id,dalam_judul,dalam_isi,dalam_ket FROM tbl_dalam WHERE dalam_judul LIKE '%$keyword%' LIMIT 5");
		return $hsl;
		}
		
    function show_komentar_by_nonijin_id($kode)
    {
		$hsl=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_nonijin_id='$kode' AND komentar_status='1' AND komentar_parent='0'");
		return $hsl;
	}


}
