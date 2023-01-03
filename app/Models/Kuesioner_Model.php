<?php 
namespace App\Models;
use \Config\Database;

class Kuesioner_Model {

    protected $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    function getCountPersonal() {
        return $this->db->table('personal')->get()->getNumRows();
    }

    function getPersonal($id) {
        return $this->db->table('personal')->where('id', $id)->get()->getRow();
    }

    function getTraining($id) {
        return $this->db->table('training')->where('id', $id)->get()->getRow();
    }

    function getSurveyNew($id) {
       return $this->db->table('creat_tabel')->where('id', $id)->get()->getRow();
    }
    function getSurvey($id) {
       return $this->db->table('view_survey')->where('id', $id)->get()->getRow();
    }

    function getCountSurvey() {
        return $this->db->table('registrant')->get()->getNumRows();
    }

    public function requestPersonal($data)
    {
        $this->db->table('personal')->insert($data);
        return $this->db->insertID();
    }

    public function requestUpdatedPersonal($data, $id)
    {
        return $this->db->table('personal')->where('id', $id)->update($data);
    }

    public function requestTraining($data)
    {
        $this->db->table('training')->insert($data);
        return $this->db->insertID();
    }

    public function requestUpdatedTraining($data, $id)
    {
        return $this->db->table('training')->where('id', $id)->update($data);
    }

    public function requestRegistrant($data)
    {
        $this->db->table('registrant')->insert($data);
        return $this->db->insertID();
    }

    public function requestUpdatedRegistrant($data, $id)
    {
        return $this->db->table('registrant')->where('id', $id)->update($data);
    }

    public function requestWajib($data)
    {
        $this->db->table('kuesioner')->insert($data);
        return $this->db->insertID();
    }

    public function requestUpdatedWajib($data, $registrant_id)
    {
        return $this->db->table('kuesioner')->where('registrant_id', $registrant_id)->update($data);
    }

    public function requestOpsional($data)
    {
        $this->db->table('kuesioner_opsional')->insert($data);
        return $this->db->insertID();
    }

    public function requestUpdatedOpsional($data, $registrant_id)
    {
        $this->db->table('kuesioner_opsional')->where('registrant_id', $registrant_id)->update($data);
        return $this->db->insertID();
    }

    public function checkCode($code) {
        $check = $this->db->table('registrant')->where('code', $code)->get()->getNumRows();
        return $check;
    }

    public function getAllDataByCode($code) {
        $data = $this->db->table('view_survey')->where('code', $code)->get()->getRow();
        return $data;
    }

    public function getAllDataByCode2($code) {
        $data = $this->db->table('registrant')->where('code', $code)->get()->getRow();
        return $data;
    }
}
?>