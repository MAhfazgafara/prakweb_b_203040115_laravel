<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "ANAK TERAKHIR HARAPAN KELUARGA",
            "slug" => "judul-post-pertama",
            "author" => "Ahfaz Gafara",
            "body" => "Seorang anak muda perantau dari banten yang berkuliah di bandung, 
            berjuang untuk harapan keluarga dengan alih - alih meraih masa depannya..."
        ],
        [
            "title" => "TAK MAU PULANG SEBELUM BERHASIL",
            "slug" => "judul-post-kedua",
            "author" => "Bagas Aditya",
            "body" => "Anak muda yang begitu semangat merubah hidupnya, berjuang dan merantau ke salah satu kota di jawabarat, 
            prinsip dia adalah TAK MAU PULANG SEBELUM BERHASIL."
        ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
