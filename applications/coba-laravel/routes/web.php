<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ahfaz Gafara",
        "email" => "ahfazgafara86@gmail.com",
        "image" => "apj.jpeg",
        "description" => "Di mana ada kelebihan, di situ ada kembalian."
    ]);

    
});








Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single posts
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "ANAK TERAKHIR HARAPAN KELUARGA",
            "slug" => "judul-post-pertama",
            "author" => "Ahfaz Gafara",
            "body" => "Seorang anak muda perantau dari banten yang berkuliah di bandung, berjuang untuk harapan keluarga dengan alih - alih meraih masa depannya..."
        ],
        [
            "title" => "TAK MAU PULANG SEBELUM BERHASIL",
            "slug" => "judul-post-kedua",
            "author" => "Bagas Aditya",
            "body" => "Anak muda yang begitu semangat merubah hidupnya, berjuang dan merantau ke salah satu kota di jawabarat, prinsip dia adalah TAK MAU PULANG SEBELUM BERHASIL."
        ]
    ]; 
$new_post= [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;

    }
}

    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});