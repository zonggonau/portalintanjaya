<?php

namespace App\Controllers;

use App\Models\InformasiModel;
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
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->getAllKategori();
        return view('backend/dashboard', $data);
    }

    public function login()
    {
        return view('auth/login');
    }

    public function Berita()
    {
        $convertDate = new Lib();
        $segment1 = $this->request->getUri()->getSegment(1);
        $segment2 = $this->request->getUri()->getSegment(2);
        $infoModel = new InformasiModel();
        $data['news'] = $infoModel->getAllInfo();
        $data['convertDate'] = $convertDate->convertDate(null);
        $data['segment'] = [
            'seg1' => $segment1,
            'seg2' => $segment2,
        ];
        return view('backend/berita', $data);
    }

    public function Add()
    {
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->getAllKategori();

        return view('backend/add', $data);
    }

    public function Edit($id)
    {
        $infoModel = new InformasiModel();
        $kategoriModel = new KategoriModel();
        $data['post'] = $infoModel->getNewsByID($id);
        $data['kategori'] = $kategoriModel->getAllKategori();
        return view('backend/edit', $data);
    }

    public function InformasiPublik()
    {

        return view('backend/informasipublik');
    }


    public function save()
    {
        $segment = $this->request->getUri()->getSegment(2);
        $infoModel = new InformasiModel();
        $kategoriModel = new KategoriModel();
        $createSlug = new Lib();
        $validation = \Config\Services::validation();

        if ($segment === "post") {
            // Validate the incoming request
            $validation->setRules([
                'judul' => 'required|max_length[255]',
                'konten' => 'required',
                'kategori' => 'required|integer',
                'thumbnail' => 'permit_empty|is_image[thumbnail]|max_size[thumbnail,2048]|ext_in[thumbnail,png,jpg,jpeg]',
                'status' => 'required|in_list[draft,published,archived]',
                'files' => 'permit_empty|max_size[files,2048]|ext_in[files,pdf,doc,docx,xls,xlsx,ppt,pptx]',
                'publish_date' => 'permit_empty|valid_date',
                'website' => 'max_length[100]',

            ]);

            if (!$this->validate($validation->getRules())) {
                // Jika validasi gagal, kembali ke form dengan pesan error
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            // Handling file upload for thumbnail if exists
            $thumbnail = $this->request->getFile('thumbnail');
            $savedFilePath = "assets/lib/images"; // Inisialisasi variabel untuk path file yang tersimpan

            if ($thumbnail && $thumbnail->isValid()) {
                $newFileName = $thumbnail->getRandomName();
                // Pindahkan file ke direktori tujuan dengan nama asli
                $thumbnail->move($savedFilePath, $newFileName);

                // Dapatkan nama file setelah dipindahkan
                $savedFilePath = 'assets/lib/images/' . $newFileName;
            }

            // Handling file upload for thumbnail if exists
            $files = $this->request->getFile('files');
            $savedFilesPath = "assets/lib/files"; // Inisialisasi variabel untuk path file yang tersimpan
            if ($files && $files->isValid()) {
                $newFileName = $files->getRandomName();
                // Pindahkan file ke direktori tujuan dengan nama asli
                $files->move($savedFilesPath, $newFileName);

                // Dapatkan nama file setelah dipindahkan
                $savedFilesPath = 'assets/lib/files/' . $newFileName;
            }
            // Prepare the data for saving

            $data = [
                'judul' => $this->request->getPost('judul'),
                'konten' => $this->request->getPost('konten'),
                'kategori_id' => $this->request->getPost('kategori'),
                'thumbnail' => $savedFilePath, // Simpan path file thumbnail yang benar
                'slug' => $createSlug->create_slug($this->request->getPost('judul')),
                'user_id' => 1,
                'status' => $this->request->getPost('status'),
                'file_dokumen' => $savedFilesPath,
                'website' => $this->request->getPost('website'),
                'publish_date' => $this->request->getPost('publish_date')
            ];


            // Save the data to the database
            $infoModel->insert($data);

            // Redirect back to the form or another page with success message
            return redirect()->to('/dashboard/post')->with('success', 'Berita berhasil disimpan.');
        }
        if ($segment === "kategori") {
            // Validate the incoming request
            $validation->setRules([
                'kategori' => 'required|max_length[255]',

            ]);

            if (!$this->validate($validation->getRules())) {
                // Jika validasi gagal, kembali ke form dengan pesan error
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }



            // Prepare the data for saving

            $data = [
                'nama_kategori' => $this->request->getPost('kategori'),
                'slug' => $createSlug->create_slug($this->request->getPost('kategori')),
            ];


            // Save the data to the database
            $kategoriModel->insert($data);

            // Redirect back to the form or another page with success message
            return redirect()->to('/dashboard/kategori')->with('success', 'Berita berhasil disimpan.');
        }
        return redirect()->to('/dashboard' . '/' . $segment)->with('success', 'Belum Tersimpan.');
    }

    public function update($id)
    {
        $infoModel = new InformasiModel();
        $createSlug = new Lib();

        // Validate the incoming request
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required|max_length[255]',
            'konten' => 'required',
            'kategori' => 'required|integer',
            'thumbnail' => 'permit_empty|is_image[thumbnail]|max_size[thumbnail,2048]|ext_in[thumbnail,png,jpg,jpeg]',
            'status' => 'required|in_list[draft,published,archived]',
            'publish_date' => 'permit_empty|valid_date',
            'website' => 'max_length[100]',
        ]);

        if (!$this->validate($validation->getRules())) {
            // Jika validasi gagal, kembali ke form dengan pesan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Retrieve the existing data
        $existingPost = $infoModel->find($id);
        if (!$existingPost) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Handling file upload for thumbnail if exists
        $thumbnail = $this->request->getFile('thumbnail');
        $savedFilePath = $existingPost['thumbnail']; // Inisialisasi dengan path file thumbnail lama

        if ($thumbnail && $thumbnail->isValid()) {
            // Delete the old file if it exists
            if (file_exists($savedFilePath)) {
                unlink($savedFilePath);
            }

            $newFileName = $thumbnail->getRandomName();
            // Pindahkan file ke direktori tujuan dengan nama baru
            $thumbnail->move('assets/lib/images', $newFileName);

            // Update the path file thumbnail yang baru
            $savedFilePath = 'assets/lib/images/' . $newFileName;
        }

        // Prepare the data for updating
        $data = [
            'judul' => $this->request->getPost('judul'),
            'konten' => $this->request->getPost('konten'),
            'kategori_id' => $this->request->getPost('kategori'),
            'thumbnail' => $savedFilePath, // Simpan path file thumbnail yang baru atau lama
            'slug' => $createSlug->create_slug($this->request->getPost('judul')),
            'user_id' => 1, // Ganti dengan ID pengguna yang sesuai
            'status' => $this->request->getPost('status'),
            'website' => $this->request->getPost('website'),
            'publish_date' => $this->request->getPost('publish_date')
        ];

        // Update the data in the database
        $infoModel->update($id, $data);

        // Redirect back to the form or another page with success message
        return redirect()->to('/dashboard/post')->with('success', 'Berita berhasil diperbarui.');
    }


    public function delete($id)
    {
        $infoModel = new InformasiModel();

        // Cek apakah berita dengan ID tersebut ada
        $newsItem = $infoModel->find($id);
        if ($newsItem) {
            // Jika ada file thumbnail terkait, hapus dari server
            if (!empty($newsItem['thumbnail'])) {
                $filePath = '../publi/assets/lib/images/' . $newsItem['thumbnail'];
                print_r($filePath);
                // Cek apakah file ada dan hapus
                if (file_exists($filePath)) {
                    unlink($filePath); // Hapus file dari server
                    print_r(time());
                }
            }

            // Hapus berita dari database
            $infoModel->delete($id);

            // Redirect dengan pesan sukses
            return redirect()->to('/dashboard/post')->with('success', 'Berita berhasil dihapus.');
        }

        // Jika berita tidak ditemukan, kembalikan ke halaman sebelumnya dengan pesan error
        return redirect()->back()->with('error', 'Berita tidak ditemukan.');
    }


    public function view($slug)
    {
        $infoModel = new InformasiModel();
        $data['news'] = $infoModel->getNewsBySlug($slug);

        return view('backend/draft', $data);
    }

    public function uploadImage()
    {
        $image = $this->request->getFile('image');

        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori untuk menyimpan gambar
            $path = 'assets/lib/images/';

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Pindahkan file ke direktori dengan nama acak
            $imageName = $image->getRandomName();
            $image->move($path, $imageName);

            // Kirimkan URL gambar yang telah diunggah ke Summernote
            $imageUrl = base_url($path . $imageName);

            // Balas dengan JSON berisi URL gambar
            return $this->response->setJSON(['url' => $imageUrl]);
        }

        return $this->response->setStatusCode(400)->setJSON(['error' => 'Gagal mengupload gambar.']);
    }

    public function uploadfile()
    {
        // Pastikan request adalah POST dan berisi file
        if ($this->request->getMethod() === 'post' && $this->request->getFile('file')) {
            $file = $this->request->getFile('file');

            // Cek apakah file valid dan tidak ada error
            if ($file->isValid() && !$file->hasMoved()) {
                // Tentukan folder tujuan
                $targetDir = WRITEPATH . 'uploads/';

                // Cek jika folder tidak ada, buat foldernya
                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0755, true);
                }

                // Dapatkan nama file asli atau generate nama unik
                $newFileName = $file->getRandomName(); // Nama file acak untuk mencegah konflik

                // Pindahkan file ke folder target
                if ($file->move($targetDir, $newFileName)) {
                    // Path untuk file yang diunggah
                    $filePath = base_url('uploads/' . $newFileName);

                    // Kirimkan response berupa URL file yang diunggah
                    return $this->response->setJSON([
                        'status' => 'success',
                        'url' => $filePath
                    ]);
                } else {
                    return $this->response->setJSON([
                        'status' => 'error',
                        'message' => 'Gagal memindahkan file.'
                    ]);
                }
            } else {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'File tidak valid atau terjadi kesalahan.'
                ]);
            }
        }

        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Permintaan tidak valid.'
        ]);
    }

    public function Kategori()
    {
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->getAllKategori();
        return view('backend/kategori', $data);
    }
}



// buatkan tabel untuk portal website pemerintah dimana ada tabel  1. informasi publik, 2. layanan publik, 3. pengadaan_barang_jasa, 4. peraturan_daerah, 5. apbd, 6. news 7. fetured untuk hero dan baner ucapan, 8. page halaman statis. 9. seo untuk website. 10. galeri. 11. kontak