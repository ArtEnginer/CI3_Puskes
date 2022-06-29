<?php 
   
class Jadwal_m extends CI_Model
{
    // public $jadwal, $created_at,$updated_at;

    // get first row
    public function get_first_row()
    {
        $this->db->select('*');
        $this->db->from('tbl_jadwal');
        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    public function get_by_id($id)
    {
        $hsl = $this->db->query("SELECT * FROM tbl_jadwal WHERE id='$id'");
        return $hsl;
    }

    public function update_jadwal($id, $data){
        $this->db->where('id', $id);
        $this->db->update('tbl_jadwal', $data);
    }
   
   

}
?>