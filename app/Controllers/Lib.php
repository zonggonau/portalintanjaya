<?php

namespace App\Controllers;

use DateTime;


class Lib extends BaseController
{
    function create_slug($string)
    {
        // Ubah ke lowercase
        $slug = strtolower($string);

        // Ganti spasi dengan tanda hubung
        $slug = preg_replace('/\s+/', '-', $slug);

        // Hapus karakter non-alfabet dan non-numerik
        $slug = preg_replace('/[^a-z0-9\-]/', '', $slug);

        // Hapus tanda hubung ganda
        $slug = preg_replace('/-+/', '-', $slug);

        // Hapus tanda hubung di awal atau akhir
        $slug = trim($slug, '-');

        return $slug;
    }

    function convertDate($datetime)
    {
        // Create a DateTime object from the input datetime string
        $date = new DateTime($datetime);

        // Format the date to "j F Y" (6 September 2024)
        return $date->format('j F Y');
    }
}
