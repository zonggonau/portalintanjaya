<?php

namespace App\Models;

use CodeIgniter\Model;

class InformasiModel extends Model
{
    protected $table = 'informasi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'judul',
        'konten',
        'kategori_id',
        'thumbnail',
        'slug',
        'user_id',
        'status',
        'file_dokumen',
        'website',
        'publish_date',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps = true;
    public function getAllInfo()
    {
        $builder = $this->db->table('informasi');
        $builder->select('informasi.*, kategori.nama_kategori');
        $builder->join('kategori', 'kategori.id = informasi.kategori_id');
        $builder->orderBy('informasi.id', 'DESC');
        return $builder->get()->getResult();
    }

    public function getBerita()
    {
        $builder = $this->db->table('informasi');
        $builder->select('informasi.*, kategori.nama_kategori');
        $builder->join('kategori', 'kategori.id = informasi.kategori_id');
        $builder->where('kategori.id', 1); // Filter by category id
        $builder->orderBy('informasi.id', 'DESC');
        return $builder->get()->getResult();
    }

    public function getLayananPublik()
    {
        $builder = $this->db->table('informasi');
        $builder->select('informasi.*, kategori.nama_kategori');
        $builder->join('kategori', 'kategori.id = informasi.kategori_id');
        $builder->where('kategori.id', 3); // Filter by category id
        $builder->orderBy('informasi.id', 'DESC');
        return $builder->get()->getResult();
    }

    public function getDocumentPublik()
    {
        $builder = $this->db->table('informasi');
        $builder->select('informasi.*, kategori.nama_kategori');
        $builder->join('kategori', 'kategori.id = informasi.kategori_id');
        $builder->where('kategori.id', 4); // Filter by category id
        $builder->orderBy('informasi.id', 'DESC');
        return $builder->get()->getResult();
    }

    public function getPengumuman()
    {
        $builder = $this->db->table('informasi');
        $builder->select('informasi.*, kategori.nama_kategori');
        $builder->join('kategori', 'kategori.id = informasi.kategori_id');
        $builder->where('kategori.id', 6); // Filter by category id
        $builder->orderBy('informasi.id', 'DESC');
        return $builder->get()->getResult();
    }



    public function getNewsBySlug($slug)
    {
        $builder = $this->db->table('informasi');
        $builder->select('informasi.*, kategori.nama_kategori');
        $builder->join('kategori', 'kategori.id = informasi.kategori_id');
        $builder->where('informasi.slug', $slug); // Add the condition to filter by slug
        return $builder->get()->getRow(); // getRow() will return a single row instead of an array of results
    }

    public function getNewsByID($id)
    {
        return $this->where('id', $id)->first();
    }
}
