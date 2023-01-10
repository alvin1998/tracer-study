<?php 
namespace App\Models;
use \Config\Database;

class M_model_Kus {

    protected $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function storeDataPendaftar($data)
    {
        $this->db->table('pendaftar_pelatihan')->insert($data);
        return $this->db->insertID();
    }
    public function storeDataTrainingr($data)
    {
        $this->db->table('training')->insert($data);
        return $this->db->insertID();
    }

    public function getData($id)
    {
        return   $this->db->table('mhs')->where('nim', $id)->get()->getRow();
    }
}