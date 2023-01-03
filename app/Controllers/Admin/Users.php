<?php
namespace App\Controllers\Admin;
use \App\Models\M_users;
use \App\Models\Serverside_model;
use stdClass;

class Users extends BaseController
{
    private $users;
    private $session;
    private $datatables;

    public function __construct() {
        $this->users = new M_users();
        $this->datatables = new Serverside_model();
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    function index() {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        return view('admin/users/index');
    }

    public function fetchUsers()
    {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $table = 'users';
        $column_order = ['id', 'group', 'username', 'name', 'phone', 'email', 'avatar', 'password', 'created_at', 'updated_at', 'deleted_at', 'status'];
        $column_search = ['id', 'group', 'username', 'name', 'phone', 'email', 'avatar', 'password', 'created_at', 'updated_at', 'deleted_at', 'status'];
        $where = ['deleted_at =' => null];       
        $order = ['id' => 'desc'];
        $no = $this->request->getPost("start");
        $getData = $this->datatables->get_datatables($table, $column_order, $column_search, $order, $where);
        $items = [];
        $nomor = 1;
        foreach ($getData as $key => $v) {
            $no++;
            if ($v->status == "active") {
                $status = "<button class='btn btn-success btn-sm waves-effect waves-light'>AKTIF</buuton>";
            } else {
                $status = "<button class='btn btn-warning btn-sm waves-effect waves-ligh'>NON-AKTIF</button>";
            }
            
            $button = "";
            $button .='<button type="button" onclick="editUsers('.$v->id.')" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-pencil label-icon"></i> Edit</button>&nbsp;&nbsp;';
            if ($v->group != "admin") {
                $button .='<button type="button" onclick="deleteUser('.$v->id.')" class="btn btn-danger waves-effect btn-label waves-light"><i class="bx bx-trash label-icon"></i> Hapus</button>&nbsp;&nbsp;';
            }
            
            $img = '<img src="'.base_url($v->avatar).'" style="width: 75px;"></img>';
            $value = [$img, $v->name, $v->phone, $v->email, $status, $button];
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

    function attempUsers() {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $data = $this->request->getPost();
        $password = $data['password'];
        unset($data['password']);
        $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        $data['created_at'] = date('Y-m-d H:i:s');
        $image = $this->request->getFile('avatar');
        if (@$image) {
            $ext = $image->guessExtension();
            $nameFile = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/users/', $nameFile);
            $data['avatar'] = "public/uploads/users/".$nameFile;
        }
        $saving = $this->users->saving($data);
        if (@$saving) {
            return $this->respond(true, 200);
        } else {
            return $this->fail("Server Sedang Bermasalah.", 400);
        }
    }

    function editingUsers() {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $id = $this->request->getPost('id');
        $user = $this->users->getUser($id);
        echo json_encode($user);
    }

    function editUsers() {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $id = $this->request->getPost('id');
        $data = $this->request->getPost();
        unset($data['id']);
        $password = $data['password'];
        unset($data['password']);
        if (@$password) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
        
        $data['updated_at'] = date('Y-m-d H:i:s');
        $image = $this->request->getFile('avatar');
        if (@$image) {
            $ext = $image->guessExtension();
            $nameFile = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/users/', $nameFile);
            $data['avatar'] = "public/uploads/users/".$nameFile;
        }
        $updated = $this->users->updated($data, $id);
        if (@$updated) {
            return $this->respond(true, 200);
        } else {
            return $this->fail("Server Sedang Bermasalah.", 400);
        }
    }

    function deletedUsers() {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $id = $this->request->getPost('id');
        $data['status'] = 'deleted';
        $data['deleted_at'] = date('Y-m-d H:i:s');
        $deleted = $this->users->deleted($data, $id);
        if (@$deleted) {
            return $this->respond(true, 200);
        } else {
            return $this->fail("Server Sedang Bermasalah.", 400);
        }
    }
}
