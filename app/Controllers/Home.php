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

    function prosesPersonal() 
    {

      $status = $this->modelKus->getData($this->request->getPost('nim'));

      if($status){

    	$sessionData['personal_nim'] = $this->request->getPost('nim');
    	$this->session->set($sessionData);

        return $this->respond(true, 200);

    }else{
        return $this->respond(false, 401);
      }


      return $this->respond(false, 500);
    }

    function prosesTraining() {

        

        $data2 = array(
            'date' => $this->request->getPost('date'),
            'time' => $this->request->getPost('time'),
            'training' => $this->request->getPost('training'),
            'description' => $this->request->getPost('description'),
            'created_at' => date('Y-m-d H:i:s'),
        );

        $id = $this->modelKus->storeDataTrainingr($data2);
        $data1 = array(
                'nim_mhs' => $this->session->get('personal_nim'),
                'id_pelatihan' => $id,
        );
        $this->modelKus->storeDataPendaftar($data1);
        
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
