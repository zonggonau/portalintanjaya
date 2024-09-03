<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Home extends BaseController
{
    public function index(): string
    {

        return view('frontend/pages/index');
    }


    public function profile(): string
    {
        return view('frontend/pages/profile');
    }

    public function dokumen(): string
    {
        return view('frontend/pages/dokumen');
    }

    public function egov(): string
    {
        return view('frontend/pages/egov');
    }

    public function berita(): string
    {
        $newsModel = new NewsModel();
        $data['news'] = $newsModel->getAllNews();
        return view('frontend/pages/berita', $data);
    }

    public function BeritaDetails($slug): string
    {
        $newsModel = new NewsModel();
        $data['news'] = $newsModel->getNewsBySlug($slug);

        return view('frontend/pages/berita_details', $data);
    }


    public function galeri(): string
    {
        return view('frontend/pages/galeri');
    }

    public function kontak(): string
    {
        return view('frontend/pages/kontak');
    }
}
