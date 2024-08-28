<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->session = \Config\Services::session();
    //     if (!$this->session->get('user_id')) {
    //         return redirect()->to('auth/login');
    //     }
    // }

    public function index()
    {
        return view('backend/dashboard');
    }

    public function login()
    {
        return view('auth/login');
    }
}
