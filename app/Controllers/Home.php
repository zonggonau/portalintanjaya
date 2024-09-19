<?php

namespace App\Controllers;

use App\Models\InformasiModel;

class Home extends BaseController
{
    public function index(): string
    {
        $infoModel = new InformasiModel();
        $data['info'] = $infoModel->getPengumuman();
        $data['egov'] = $infoModel->getLayananPublik();
        return view('frontend/pages/index', $data);
    }


    public function profile(): string
    {
        return view('frontend/pages/profile');
    }

    public function dokumen(): string
    {
        $infoModel = new InformasiModel();
        $data['doc'] = $infoModel->getDocumentPublik();
        return view('frontend/pages/dokumen', $data);
    }

    public function egov(): string
    {
        $infoModel = new InformasiModel();
        $data['egov'] = $infoModel->getLayananPublik();
        return view('frontend/pages/egov', $data);
    }

    public function berita(): string
    {
        $infoModel = new InformasiModel();
        $data['news'] = $infoModel->getBerita();
        return view('frontend/pages/berita', $data);
    }

    public function BeritaDetails($slug): string
    {
        $infoModel = new InformasiModel();
        $data['info'] = $infoModel->getNewsBySlug($slug);
        // dd($data);
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
