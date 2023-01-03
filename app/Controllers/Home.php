<?php
namespace App\Controllers;
use \App\Models\Kuesioner_Model;
use \App\Models\M_model_Kus;
use Exception;
use stdClass;

class Home extends BaseController
{
    private $session;
    private $kuesionerModel;

    public function __construct() {
        $this->kuesionerModel = new Kuesioner_Model();
        $this->modelKus = new M_model_Kus();
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        return view('index');
    }

    function prosesPersonal() {
    	$sessionData['personal_name'] = $this->request->getPost('name');
    	$sessionData['personal_nim'] = $this->request->getPost('nim');
    	$sessionData['personal_email'] = $this->request->getPost('email');
    	$sessionData['personal_whatsapp'] = $this->request->getPost('whatsapp');
    	$this->session->set($sessionData);
    	return $this->respond(true, 200);
    }

    function prosesTraining() {

        $data1 = array(
            'name' => $this->session->get('personal_name'),
            'nim' => $this->session->get('personal_nim'),
            'email' => $this->session->get('personal_email'),
            'whatsapp' => $this->session->get('personal_whatsapp'),
        );

        $data2 = array(
            'date' => $this->request->getPost('date'),
            'time' => $this->request->getPost('time'),
            'training' => $this->request->getPost('training'),
            'description' => $this->request->getPost('description'),
            'created_at' => date('Y-m-d H:i:s'),
        );

        $this->modelKus->storeDataPendaftar($data1);
        $this->modelKus->storeDataTrainingr($data2);
        
    	return $this->respond(true, 200);
    }

    function edit($code=null) {
        if (!$code) {
            $this->session->setFlashdata('msg_code', 'Maaf, Kode Pendaftaran Anda Tidak Ditemukan');
            return redirect()->to('/');
        }
        $checkCode = $this->kuesionerModel->checkCode($code);
        if (!$checkCode) {
            $this->session->setFlashdata('msg_code', 'Maaf, Kode Pendaftaran Anda Tidak Ditemukan');
            return redirect()->to('/');
        }
        $temp['kuesioner'] = $this->kuesionerModel->getAllDataByCode($code);

        return view('edit/index', $temp);
    }
}
