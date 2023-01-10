<?php
namespace App\Models;
use CodeIgniter\Model;
use \Config\Database;
 
class Serverside_model extends Model
{
 
    public $db;
    public $builder;
 
  public function __construct()
    {
        parent::__construct();
        $this->db = Database::connect();
    }
 
 
 protected function _get_datatables_query($table, $column_order, $column_search, $order)
 {
     $this->builder = $this->db->table($table);
     //jika ingin join formatnya adalah sebagai berikut :
     $this->builder->select('mhs.nim AS nim, mhs.nama AS nama, tra.training , tra.description, tra.deleted_at');
     $this->builder->join('training tra','pdf.id_pelatihan = tra.id');
     $this->builder->join('mhs','mhs.nim = pdf.nim_mhs');
     //end Join
     $i = 0;
 
     foreach ($column_search as $item) {
         if (@$_POST['search']['value']) {
 
             if ($i === 0) {
                 $this->builder->groupStart();
                 $this->builder->like($item, @$_POST['search']['value']);
             } else {
                 $this->builder->orLike($item, @$_POST['search']['value']);
             }
 
             if (count($column_search) - 1 == $i)
                 $this->builder->groupEnd();
         }
         $i++;
     }
 
     if (isset($_POST['order'])) {
         $this->builder->orderBy($column_order[@$_POST['order']['0']['column']], @$_POST['order']['0']['dir']);
     } else if (isset($order)) {
         $order = $order;
         $this->builder->orderBy(key($order), $order[key($order)]);
     }
 
 }
 
 public function get_datatables($table, $column_order, $column_search, $order, $data = '')
 {
     $this->_get_datatables_query($table, $column_order, $column_search, $order);
     if (@$_POST['length'] != -1)
         $this->builder->limit(@$_POST['length'], @$_POST['start']);
     if ($data) {
         $this->builder->where($data);
     }
 
     $query = $this->builder->get();
     return $query->getResult();
 }
 protected function _get_datatables_query1($table, $column_order, $column_search, $order)
 {
     $this->builder = $this->db->table($table);
     //jika ingin join formatnya adalah sebagai berikut :
     //end Join
     $i = 0;
 
     foreach ($column_search as $item) {
         if (@$_POST['search']['value']) {
 
             if ($i === 0) {
                 $this->builder->groupStart();
                 $this->builder->like($item, @$_POST['search']['value']);
             } else {
                 $this->builder->orLike($item, @$_POST['search']['value']);
             }
 
             if (count($column_search) - 1 == $i)
                 $this->builder->groupEnd();
         }
         $i++;
     }
 
     if (isset($_POST['order'])) {
         $this->builder->orderBy($column_order[@$_POST['order']['0']['column']], @$_POST['order']['0']['dir']);
     } else if (isset($order)) {
         $order = $order;
         $this->builder->orderBy(key($order), $order[key($order)]);
     }
 
 }
 
 public function get_datatables1($table, $column_order, $column_search, $order, $data = '')
 {
     $this->_get_datatables_query1($table, $column_order, $column_search, $order);
     if (@$_POST['length'] != -1)
         $this->builder->limit(@$_POST['length'], @$_POST['start']);
     if ($data) {
         $this->builder->where($data);
     }
 
     $query = $this->builder->get();
     return $query->getResult();
 }
 public function count_filtered($table, $column_order, $column_search, $order, $data = '')
 {
    $this->builder = $this->db->table($table);
    $this->builder->select('mhs.nim AS nim, mhs.nama AS nama, tra.training , tra.description, tra.deleted_at');
    $this->builder->join('training tra','pdf.id_pelatihan = tra.id');
    $this->builder->join('mhs','mhs.nim = pdf.nim_mhs');
    if (@$data) {
        $this->builder->where($data);
    }
     $i = 0; 
     foreach ($column_search as $item) {
         if (@$_POST['search']['value']) {
 
             if ($i === 0) {
                 $this->builder->groupStart();
                 $this->builder->like($item, @$_POST['search']['value']);
             } else {
                 $this->builder->orLike($item, @$_POST['search']['value']);
             }
 
             if (count($column_search) - 1 == $i)
                 $this->builder->groupEnd();
         }
         $i++;
     }
 
     if (isset($_POST['order'])) {
         $this->builder->orderBy($column_order[@$_POST['order']['0']['column']], @$_POST['order']['0']['dir']);
     } else if (isset($order)) {
         $order = $order;
         $this->builder->orderBy(key($order), $order[key($order)]);
     }
     return $this->builder->get()->getNumRows();
 }
 public function count_filtered2($table, $column_order, $column_search, $order, $data = '')
 {
    $this->builder = $this->db->table($table);

    if (@$data) {
        $this->builder->where($data);
    }
     $i = 0; 
     foreach ($column_search as $item) {
         if (@$_POST['search']['value']) {
 
             if ($i === 0) {
                 $this->builder->groupStart();
                 $this->builder->like($item, @$_POST['search']['value']);
             } else {
                 $this->builder->orLike($item, @$_POST['search']['value']);
             }
 
             if (count($column_search) - 1 == $i)
                 $this->builder->groupEnd();
         }
         $i++;
     }
 
     if (isset($_POST['order'])) {
         $this->builder->orderBy($column_order[@$_POST['order']['0']['column']], @$_POST['order']['0']['dir']);
     } else if (isset($order)) {
         $order = $order;
         $this->builder->orderBy(key($order), $order[key($order)]);
     }
     return $this->builder->get()->getNumRows();
 }
 public function count_all($table, $data = '')
 {
    if (@$data) {
        $query = $this->db->table($table)->where($data);
    } else {
        $query = $this->db->table($table);
    }
    return $query->get()->getNumRows();
 }
}