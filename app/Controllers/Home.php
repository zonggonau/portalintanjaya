<?php

namespace App\Controllers;

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
        return view('frontend/pages/berita');
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
