<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\UserModel; // Assuming your model is in the App\Models namespace

class Auth extends Controller
{
    protected $userModel;
    protected $session;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
    }

    public function doLogin()
    {
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Use a secure password hashing algorithm to compare
            if ($this->userModel->validateUser($username, $password)) {
                $user = $this->userModel->getUserByUsername($username);
                $this->session->set('user_id', $user['id']);
                $this->session->set('username', $user['username']);
                return redirect()->to('dashboard');
            } else {
                $this->session->setFlashdata('error', 'Invalid username or password');
                return redirect()->to('auth/login');
            }
        }

        return view('auth/login');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('auth/login');
    }
}
