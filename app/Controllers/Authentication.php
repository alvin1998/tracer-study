<?php
namespace App\Controllers;
use \App\Models\M_users;

class Authentication extends BaseController
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
        return $this->login();
    }

    public function login()
    {
        if (@$this->session->get('user_id')) {
            return redirect()->to(@$this->session->get('group'));
        }
        return view('authentication/view_login');
    }

    public function attempLogin()
    {
        $emailUsername = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        if (@$this->users->checkEmailUsername($emailUsername)) {
            if (@$this->users->checkActive($emailUsername)) {
                $user = $this->users->getEmailUsername($emailUsername);
                $isPasswordMatch = password_verify($password, $user->password);
                if (!$isPasswordMatch) {                
                    return $this->fail("Password Yang Anda Masukan Salah.");
                } else {
                    $session_data = [
                        "user_id" => $user->id,
                        "group" => $user->group,
                        "logged_in" => true
                    ];
                    $this->session->set($session_data);

                    $resp = json_encode(base_url($user->group));
                    return $this->respond($resp, 200);
                }
            } else {
                return $this->fail("Status Akun Anda Tidak Aktif.");
            }
        } else {
            return $this->fail("Username / Email Tidak Terdaftar.");
        }
    }

    public function logout() {
        $array_items = ['user_id', 'group', 'logged_in'];
        $this->session->remove($array_items);
        return redirect()->to('/');
    }
}
