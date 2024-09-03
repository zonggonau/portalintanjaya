<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';   // Nama tabel di database
    protected $primaryKey = 'id';  // Primary key tabel
    protected $allowedFields = ['name', 'description']; // Kolom yang diizinkan untuk insert/update

    // Add any custom methods or properties here
    public function getAllKategori()
    {
        return $this->findAll();
    }
}
