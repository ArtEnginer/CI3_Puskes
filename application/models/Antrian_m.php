<?php
class Antrian_m extends CI_Model
{
    public $kode_antrian;
    public $nomor_antrian;
    public $nama_pasien;
    public $alamat_pasien;
    public $jenis_kelamin;
    public $keluhan;
    public $nomor_kis;
    public $tanggal;
    public $status;
    public $created_at;

    public function fill($data)
    {
        if ($data !== null) {
            if (is_array($data)) {
                foreach ($data as $key => $value) {
                    $this->{$key} = $value;
                }
            } elseif (is_object($data)) {
                foreach ($data as $key => $value) {
                    $this->{$key} = $value;
                }
            }
            $this->inisiasi();
            return $this;
        }
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('antrian');
        $query = $this->db->get();
        return $query;
    }

    public function getAllNow()
    {
        $this->db->select('*');
        $this->db->from('antrian');
        $this->db->like('tanggal', date('Y-m'));
        $query = $this->db->get();
        return $query;
    }

    public function getRow($code)
    {
        $this->db->select('*');
        $this->db->from('antrian');
        $this->db->where('kode_antrian', $code);
        $this->db->like('tanggal', date('Y-m'));
        $query = $this->db->get();
        return $query->result_object()[0];
    }

    public function insert()
    {
        $this->inisiasi();
        $this->db->insert('antrian', $this);
    }

    public function inisiasi()
    {
        $this->generateKodeAntrian();
        $this->generateNomorAntrian();
        $this->generateDate();
        $this->generateTime();
        $this->setStatus();
    }

    public function generateKodeAntrian()
    {
        if ($this->kode_antrian === null) {
            $hash = hash('md5', $this->nama_pasien . date('Y-m-d H:i:s'));
            $this->kode_antrian = strtoupper(substr($hash, 0, 8));
        }
    }

    public function generateNomorAntrian()
    {
        $this->db->select_max('nomor_antrian');
        $this->db->like('created_at', date('Y-m'));
        $query = $this->db->get('antrian');
        if ($this->nomor_antrian === null) {
            if ($query->result_object()[0]->nomor_antrian) {
                $this->nomor_antrian = sprintf("%03d", $query->result_object()[0]->nomor_antrian + 1);
            } else {
                $this->nomor_antrian =  '001';
            }
        }
    }

    public function generateDate()
    {
        if ($this->tanggal === null) {
            $this->tanggal = date('Y-m-d');
        }
    }

    public function generateTime()
    {
        if ($this->created_at === null) {
            $this->created_at = date('Y-m-d H:i:s');
        }
    }

    public function setStatus($code = null)
    {
        if ($code) {
            $this->status = $code;
        } else {
            $this->status = 0;
        }
    }

    public function getStatus($code)
    {
        switch ($code) {
            case 0:
                return [
                    'message' => 'Dalam Antrian',
                    'style' => 'Red',
                ];
                break;
            case 1:
                return [
                    'message' => 'Sedang Dilayani',
                    'style' => 'Orange',
                ];
                break;
            case 4:
                return [
                    'message' => 'Selesai',
                    'style' => 'Green',
                ];
                break;
            default:
                return [
                    'message' => 'Error',
                    'style' => 'Red',
                ];
                break;
        }
    }

    public function countNgantri()
    {
        $this->db->select('*');
        $this->db->from('antrian');
        $this->db->like('tanggal', date('Y-m'));
        return $this->db->count_all_results();
    }

    public function countNgantriDone()
    {
        $this->db->select('*');
        $this->db->from('antrian');
        $this->db->like('tanggal', date('Y-m'));
        $this->db->where('status', 4);
        return $this->db->count_all_results();
    }
}