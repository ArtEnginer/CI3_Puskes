<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class User
 * This class demonstrate how a model class should be:
 * 1. should extends MY_Model
 * 2. should have the property $table: the name of the corresponding db table
 * 3. should have the property $id: also on db each table should have the 'id' field
 */

class Antrian_e extends MY_Model
{

    public $table = 'antrian';

    public $id;
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
        }
    }
}