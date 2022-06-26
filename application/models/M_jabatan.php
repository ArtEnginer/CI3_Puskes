<?php
class m_jabatan extends CI_Model{

	function get_all_kelas(){
		$hsl=$this->db->query("SELECT * FROM tbl_jabatan");
		return $hsl;
	}

}