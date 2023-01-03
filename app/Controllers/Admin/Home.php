<?php
namespace App\Controllers\Admin;
use \App\Models\M_users;
use \App\Models\Kuesioner_Model;

class Home extends BaseController
{
    private $users;
    private $kuesionerModel;
    private $session;

    public function __construct() {
        $this->users = new M_users();
        $this->kuesionerModel = new Kuesioner_Model();
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function index()
    {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $temp['user'] = $this->users->getUser($this->session->get('user_id'));
        $temp['totalUser'] = $this->users->getCount();
        $temp['totalDaftar'] = $this->kuesionerModel->getCountPersonal();
        $temp['totalSurvey'] = $this->kuesionerModel->getCountSurvey();
        return view('admin/index', $temp);
    }
}
