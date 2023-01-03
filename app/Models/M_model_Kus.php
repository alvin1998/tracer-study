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
        $this->db->table('personal')->insert($data);
        return $this->db->insertID();
    }
    public function storeDataTrainingr($data)
    {
        $this->db->table('training')->insert($data);
        return $this->db->insertID();
    }
}