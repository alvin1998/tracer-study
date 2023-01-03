<?php
namespace App\Controllers\Admin;
use \App\Models\M_users;
use \App\Models\Kuesioner_Model;
use \App\Models\Serverside_model;
use stdClass;

class Report extends BaseController
{
    private $users;
    private $kuesionerModel;
    private $session;
    private $datatables;

    public function __construct() {
        $this->users = new M_users();
        $this->kuesionerModel = new Kuesioner_Model();
        $this->datatables = new Serverside_model();
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    function index() {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        return view('admin/report/index');
    }

    public function fetchReport()
    {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $table = 'personal';
        $column_order = ['id', 'name', 'nim', 'email', 'whatsapp', 'created_at', 'created_by'];
        $column_search = ['id', 'name', 'nim', 'email', 'whatsapp', 'created_at', 'created_by'];
        $where = ['deleted_at =' => null];       
        $order = ['id' => 'desc'];
        $no = $this->request->getPost("start");
        $getData = $this->datatables->get_datatables($table, $column_order, $column_search, $order, $where);
        $items = [];
        $nomor = 1;
        foreach ($getData as $key => $v) {
            $no++;
            
            $button = "";
            $button .='<button type="button" onclick="detail('.$v->id.')" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-bullseye label-icon"></i> Detail</button>&nbsp;&nbsp;';
            $value = [$v->name, $v->nim, $v->email, $v->whatsapp, $button];
            $items[] = $value;
            $nomor++;
        }        
        $output = array(
            "draw" => $this->request->getPost("draw"),
            "recordsTotal" => $this->datatables->count_all($table, $where),
            "recordsFiltered" => $this->datatables->count_filtered($table, $column_order, $column_search, $order, $where),
            "data" => $items,
        );
 
        echo json_encode($output);
    }

    function detailPersonal() {
        $id = $this->request->getPost('id');
        $resp = $this->kuesionerModel->getPersonal($id);
        echo json_encode($resp);
    }

    function training() {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        return view('admin/report/training');
    }

    public function fetchTraining()
    {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $table = 'training';
        $column_order = ['id', 'date', 'time', 'training', 'description', 'created_at', 'created_by'];
        $column_search = ['id', 'date', 'time', 'training', 'description', 'created_at', 'created_by'];
        $where = ['deleted_at =' => null];       
        $order = ['id' => 'desc'];
        $no = $this->request->getPost("start");
        $getData = $this->datatables->get_datatables($table, $column_order, $column_search, $order, $where);
        $items = [];
        $nomor = 1;
        foreach ($getData as $key => $v) {
            $no++;
            
            $button = "";
            $button .='<button type="button" onclick="detail('.$v->id.')" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-bullseye label-icon"></i> Detail</button>&nbsp;&nbsp;';
            $value = [$v->date, $v->time, $v->training, $v->description, $button];
            $items[] = $value;
            $nomor++;
        }        
        $output = array(
            "draw" => $this->request->getPost("draw"),
            "recordsTotal" => $this->datatables->count_all($table, $where),
            "recordsFiltered" => $this->datatables->count_filtered($table, $column_order, $column_search, $order, $where),
            "data" => $items,
        );
 
        echo json_encode($output);
    }

    function detailTraining() {
        $id = $this->request->getPost('id');
        $resp = $this->kuesionerModel->getTraining($id);
        echo json_encode($resp);
    }

    function survey() {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        return view('admin/report/survey');
    }

    public function fetchSurvey()
    {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $table = 'registrant';
        $column_order = ['id', 'code', 'personal_id', 'training_id', 'nomor_mahasiswa', 'nik_mahasiswa', 'nama_mahasiswa', 'email', 'phone', 'kode_prodi', 'tahun_lulus', 'kode_pt', 'npwp', 'created_at', 'created_by'];
        $column_search = ['id', 'code', 'personal_id', 'training_id', 'nomor_mahasiswa', 'nik_mahasiswa', 'nama_mahasiswa', 'email', 'phone', 'kode_prodi', 'tahun_lulus', 'kode_pt', 'npwp', 'created_at', 'created_by'];
        $where = ['deleted_at =' => null];       
        $order = ['id' => 'desc'];
        $no = $this->request->getPost("start");
        $getData = $this->datatables->get_datatables($table, $column_order, $column_search, $order, $where);
        $items = [];
        $nomor = 1;
        foreach ($getData as $key => $v) {
            $no++;
            
            $button = "";
            $button .='<button type="button" onclick="detail('.$v->id.')" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-bullseye label-icon"></i> Detail</button>&nbsp;&nbsp;';
            $button .='<a target="_blank" href="'.base_url('admin/report/print/'.$v->id).'"><button type="button" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bx-file label-icon"></i> Print</button></a>&nbsp;&nbsp;';
            $button .='<a target="_blank" href="'.base_url('admin/report/edit/'.$v->code).'"><button type="button" class="btn btn-warning waves-effect btn-label waves-light"><i class="bx bx-bullseye label-icon"></i> Edit</button></a>&nbsp;&nbsp;';
            $value =[$v->nomor_mahasiswa, $v->nik_mahasiswa, $v->nama_mahasiswa, $v->kode_prodi, $v->tahun_lulus, $button];
            $items[] = $value;
            $nomor++;
        }        
        $output = array(
            "draw" => $this->request->getPost("draw"),
            "recordsTotal" => $this->datatables->count_all($table, $where),
            "recordsFiltered" => $this->datatables->count_filtered($table, $column_order, $column_search, $order, $where),
            "data" => $items,
        );
 
        echo json_encode($output);
    }

    function edit($code) {
        $sessionData['login'] = "admin";
        $this->session->set($sessionData);
        return redirect()->to('/edit/'.$code);
    }

    function detailSurvey() {
        $id = $this->request->getPost('id');
        $resp = $this->kuesionerModel->getSurvey($id);

        $html = '';
        
        $html1 = '<div class="mb-3">
                    <label class="form-label">Nomor Mahasiswa</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->nomor_mahasiswa.'">
                </div>';
        $html1 .= '<div class="mb-3">
                    <label class="form-label">NIK Mahasiswa</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->nik_mahasiswa.'">
                </div>';
        $html1 .= '<div class="mb-3">
                    <label class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->nama_mahasiswa.'">
                </div>';
        $html1 .= '<div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->email.'">
                </div>';
        $html1 .= '<div class="mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->phone.'">
                </div>';
        $html1 .= '<div class="mb-3">
                    <label class="form-label">Kode Prodi</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->kode_prodi.'">
                </div>';
        $html1 .= '<div class="mb-3">
                    <label class="form-label">Tahun Lulus</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->tahun_lulus.'">
                </div>';
        $html1 .= '<div class="mb-3">
                    <label class="form-label">Kode PT</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->kode_pt.'">
                </div>';
        $html1 .= '<div class="mb-3">
                    <label class="form-label">NPWP</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->npwp.'">
                </div>';
        $html .= '<div class="col-md-6">'.$html1.'</div>';


        $html2 = '<div class="mb-3">
                    <label class="form-label">Status Kerja</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->status_kerja.'">
                </div>';
        $html2 .= '<div class="mb-3">
                    <label class="form-label">Mendapat Kerja</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->dapat_kerja_kurang_6_bulan.'">
                </div>';
        $html2 .= '<div class="mb-3">
                    <label class="form-label">Berapa Bulan Mendapat Kerja</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->berapa_bulan_dapat_kerja.'">
                </div>';
        $html2 .= '<div class="mb-3">
                    <label class="form-label">Rata Rata Gaji</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->rata_rata_gaji.'">
                </div>';
        $html2 .= '<div class="mb-3">
                    <label class="form-label">Lokasi Kerja</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->lokasi_kerja.'">
                </div>';
        $html2 .= '<div class="mb-3">
                    <label class="form-label">Jenis Perusahaan</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->jenis_perusahaan.'">
                </div>';
        $html2 .= '<div class="mb-3">
                    <label class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->nama_perusahaan.'">
                </div>';
        $html2 .= '<div class="mb-3">
                    <label class="form-label">Posisi Kerja</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->posisi_wirausaha.'">
                </div>';
        $html2 .= '<div class="mb-3">
                    <label class="form-label">Tingkat Kerja</label>
                    <input type="text" class="form-control" readonly="" value="'.$resp->tingkat_tempat_kerja.'">
                </div>';

        $html .= '<div class="col-md-6">'.$html2.'</div>';
        // echo json_encode($resp);
        echo $html;
    }

    function print($id) {
        $temp['kuesioner'] = $this->kuesionerModel->getSurveyNew($id);
        return view('admin/report/print', $temp);
    }
}
