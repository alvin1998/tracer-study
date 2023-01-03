<?php 
namespace App\Models;
use \Config\Database;

class M_users {

    protected $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    function getCount() {
        return $this->db->table('users')->where('status', 'active')->get()->getNumRows();
    }

    public function checkEmailUsername($usernameOrEmail)
    {
        return $this->db->table('users')->where('email', $usernameOrEmail)->orWhere('username', $usernameOrEmail)->get()->getNumRows();
    }

    public function checkActive($usernameOrEmail)
    {
        return $this->db->table('users')->where('status', 1)->where('email', $usernameOrEmail)->orWhere('username', $usernameOrEmail)->get()->getNumRows();
    }

    public function getEmailUsername($usernameOrEmail)
    {
        return $this->db->table('users')->where('status', 1)->where('email', $usernameOrEmail)->orWhere('username', $usernameOrEmail)->get()->getRow();
    }

    function getUser($userId) {
        return $this->db->table('users')->where('id', $userId)->get()->getRow();
    }

    function updated($data, $id) {
        return $this->db->table('users')->where('id', $id)->update($data);
    }


    function deleted($data, $id) {
        return $this->db->table('users')->where('id', $id)->update($data);
    }

    function saving($data) {
        return $this->db->table('users')->insert($data);
    }
}