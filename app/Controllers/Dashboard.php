<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Models\KategoriModel;


class Dashboard extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return view('backend/dashboard');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function berita()
    {
        $newsModel = new NewsModel();
        $kategoriModel = new KategoriModel();
        // $data['news'] = $newsModel->getAllNews();
        $data['data'] = [
            'news' => $newsModel->getAllNews(),
            'kategori' => $kategoriModel->getAllKategori()
        ];
        return view('backend/berita', $data);
    }
}


// buatkan tabel untuk portal website pemerintah dimana ada tabel  1. informasi publik, 2. layanan publik, 3. pengadaan_barang_jasa, 4. peraturan_daerah, 5. apbd, 6. news 7. fetured untuk hero dan baner ucapan, 8. page halaman statis. 9. seo untuk website. 10. galeri. 11. kontak