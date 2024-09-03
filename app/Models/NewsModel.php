<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';   // Nama tabel di database
    protected $primaryKey = 'id';  // Primary key tabel
    protected $allowedFields = ['title', 'content', 'author', 'published_at']; // Kolom yang diizinkan untuk insert/update

    public function getAllNews()
    {
        return $this->findAll();
    }

    public function getNewsBySlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }
}
