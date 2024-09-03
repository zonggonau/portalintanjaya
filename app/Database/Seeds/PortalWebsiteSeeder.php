<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class PortalWebsiteSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        // Helper function to safely format date or return null
        $formatDate = function ($date) {
            return $date instanceof \DateTime ? $date->format('Y-m-d H:i:s') : null;
        };
        // Seeder untuk tabel informasi_publik
        $informasiPublikData = [];
        for ($i = 0; $i < 10; $i++) {
            $informasiPublikData[] = [
                'judul'        => $faker->sentence,
                'deskripsi'    => $faker->paragraph,
                'kategori'     => $faker->word,
                'file_dokumen' => $faker->optional()->filePath,
                'published_at' => $formatDate($faker->optional()->dateTimeThisYear),
                'created_by'   => $faker->numberBetween(1, 10),
                'updated_by'   => $faker->optional()->numberBetween(1, 10),
                'created_at'   => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('informasi_publik')->insertBatch($informasiPublikData);

        // Seeder untuk tabel layanan_publik
        $layananPublikData = [];
        for ($i = 0; $i < 10; $i++) {
            $layananPublikData[] = [
                'nama_layanan' => $faker->word,
                'deskripsi'    => $faker->paragraph,
                'kategori'     => $faker->word,
                'kontak'       => $faker->phoneNumber,
                'link_layanan' => $faker->optional()->url,
                'created_by'   => $faker->numberBetween(1, 10),
                'updated_by'   => $faker->optional()->numberBetween(1, 10),
                'created_at'   => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('layanan_publik')->insertBatch($layananPublikData);

        // Seeder untuk tabel pengadaan_barang_jasa
        $pengadaanBarangJasaData = [];
        for ($i = 0; $i < 10; $i++) {
            $pengadaanBarangJasaData[] = [
                'nama_pengadaan' => $faker->word,
                'deskripsi'      => $faker->paragraph,
                'kategori'       => $faker->word,
                'tanggal_pengadaan' => $faker->date,
                'vendor'         => $faker->company,
                'anggaran'       => $faker->randomFloat(2, 10000, 50000),
                'file_dokumen'   => $faker->optional()->filePath,
                'created_by'     => $faker->numberBetween(1, 10),
                'updated_by'     => $faker->optional()->numberBetween(1, 10),
                'created_at'     => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('pengadaan_barang_jasa')->insertBatch($pengadaanBarangJasaData);

        // Seeder untuk tabel peraturan_daerah
        $peraturanDaerahData = [];
        for ($i = 0; $i < 10; $i++) {
            $peraturanDaerahData[] = [
                'judul_perda'   => $faker->sentence,
                'deskripsi'     => $faker->paragraph,
                'kategori'      => $faker->word,
                'nomor_perda'   => $faker->word,
                'tahun_perda'   => $faker->year,
                'file_dokumen'  => $faker->optional()->filePath,
                'created_by'    => $faker->numberBetween(1, 10),
                'updated_by'    => $faker->optional()->numberBetween(1, 10),
                'published_at' => $formatDate($faker->optional()->dateTimeThisYear),
                'created_at'    => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('peraturan_daerah')->insertBatch($peraturanDaerahData);

        // Seeder untuk tabel apbd
        $apbdData = [];
        for ($i = 0; $i < 10; $i++) {
            $apbdData[] = [
                'tahun_anggaran' => $faker->year,
                'kategori'       => $faker->word,
                'pendapatan'     => $faker->randomFloat(2, 100000, 1000000),
                'belanja'        => $faker->randomFloat(2, 50000, 500000),
                'pembiayaan'     => $faker->randomFloat(2, 10000, 100000),
                'file_dokumen'   => $faker->optional()->filePath,
                'created_by'     => $faker->numberBetween(1, 10),
                'updated_by'     => $faker->optional()->numberBetween(1, 10),
                'created_at'     => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('apbd')->insertBatch($apbdData);

        // Seeder untuk tabel news
        $newsData = [];
        for ($i = 0; $i < 10; $i++) {
            $newsData[] = [
                'judul'        => $faker->sentence,
                'konten'       => $faker->paragraph,
                'kategori'     => $faker->word,
                'thumbnail'    => $faker->optional()->imageUrl,
                'slug'         => $faker->slug,
                'published_at' => $formatDate($faker->optional()->dateTimeThisYear),
                'created_by'   => $faker->numberBetween(1, 10),
                'updated_by'   => $faker->optional()->numberBetween(1, 10),
                'created_at'   => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('news')->insertBatch($newsData);

        // Seeder untuk tabel featured
        $featuredData = [];
        for ($i = 0; $i < 10; $i++) {
            $featuredData[] = [
                'judul'        => $faker->sentence,
                'image'        => $faker->imageUrl,
                'kategori'     => $faker->word,
                'link'         => $faker->optional()->url,
                'published_at' => $formatDate($faker->optional()->dateTimeThisYear),
                'created_by'   => $faker->numberBetween(1, 10),
                'updated_by'   => $faker->optional()->numberBetween(1, 10),
                'created_at'   => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('featured')->insertBatch($featuredData);

        // Seeder untuk tabel pages
        $pagesData = [];
        for ($i = 0; $i < 10; $i++) {
            $pagesData[] = [
                'judul'        => $faker->sentence,
                'konten'       => $faker->paragraph,
                'slug'         => $faker->unique()->slug,
                'kategori'     => $faker->word,
                'created_by'   => $faker->numberBetween(1, 10),
                'updated_by'   => $faker->optional()->numberBetween(1, 10),
                'created_at'   => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('pages')->insertBatch($pagesData);

        // Seeder untuk tabel seo
        $seoData = [];
        for ($i = 0; $i < 10; $i++) {
            $seoData[] = [
                'page'             => $faker->word,
                'meta_title'       => $faker->sentence,
                'meta_description' => $faker->paragraph,
                'meta_keywords'    => $faker->optional()->words(3, true),
                'created_at'       => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('seo')->insertBatch($seoData);

        // Seeder untuk tabel gallery
        $galleryData = [];
        for ($i = 0; $i < 10; $i++) {
            $galleryData[] = [
                'title'       => $faker->sentence,
                'image'       => $faker->imageUrl,
                'caption'     => $faker->optional()->sentence,
                'created_by'  => $faker->numberBetween(1, 10),
                'updated_by'  => $faker->optional()->numberBetween(1, 10),
                'created_at'  => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('gallery')->insertBatch($galleryData);

        // Seeder untuk tabel kontak
        $kontakData = [];
        for ($i = 0; $i < 10; $i++) {
            $kontakData[] = [
                'nama'       => $faker->name,
                'email'      => $faker->email,
                'pesan'      => $faker->paragraph,
                'created_by' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
            ];
        }
        $this->db->table('kontak')->insertBatch($kontakData);

        // Seeder untuk tabel kategori
        $kategoriData = [];
        for ($i = 0; $i < 10; $i++) {
            $kategoriData[] = [
                'nama'        => $faker->word,
                'slug'        => $faker->slug,
                'deskripsi'   => $faker->optional()->paragraph,
                'created_at'  => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                'updated_at'   => $formatDate($faker->optional()->dateTimeThisYear),
            ];
        }
        $this->db->table('kategori')->insertBatch($kategoriData);
    }
}
