<?php
namespace App\Controllers\Admin;
use \App\Models\M_users;
use stdClass;

class Profile extends BaseController
{
    private $users;
    private $session;

    public function __construct() {
        $this->users = new M_users();
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $temp['user'] = $this->users->getUser($this->session->get('user_id'));
        return view('admin/profile/index', $temp);
    }

    function attempProfile() {
        if (!$this->session->get('user_id') || $this->session->get('group') != "admin") {
            return redirect()->to('/');
        }
        $data['name'] = $this->request->getPost('name');
        $data['email'] = $this->request->getPost('email');
        $data['phone'] = $this->request->getPost('phone');
        $password = $this->request->getPost('password');
        $ulangi_password = $this->request->getPost('ulangi_password');
        $image = $this->request->getFile('image');
        if (@$image) {
            $ext = $image->guessExtension();
            $nameFile = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/users/', $nameFile);
            $data['avatar'] = "public/uploads/users/".$nameFile;
        }

        if (@$password) {
            if ($password == $ulangi_password) {                
                $data['password'] = password_hash($password, PASSWORD_DEFAULT);
                if (@$this->users->updated($data, $this->session->get('user_id'))) {
                    return $this->respond(true, 200);
                } else {
                    return $this->fail("Server Sedang Bermasalah.", 400);
                }
            } else {
                return $this->fail("Masukan Password Yang Sama.", 400);
            }
        } else {
            if (@$this->users->updated($data, $this->session->get('user_id'))) {
                return $this->respond(true, 200);
            } else {
                return $this->fail("Server Sedang Bermasalah.", 400);
            }
        }
        
    }
}
