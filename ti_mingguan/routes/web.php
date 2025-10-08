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
    return view ('Home');
});

Route::get('/profile', function () {
    return view ('Profile',[
        "nama" => "Midda Restia",
        "email" => "Midarstia",
        "creator" => "Lifestyle Creator",
        "intagram" => "ddarsta",
        "foto" => "img/mida.jpg"
    ]);
});

Route::get('/berita', function () {
    $data_berita =[

        [
            "judul" => "Cards 1",
            "topik" => "Trend Skincare Daily",
            "konten" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem aperiam fugit voluptate blanditiis sapiente ut cupiditate consequatur similique amet autem, excepturi cum? Aspernatur numquam itaque, perferendis aliquid praesentium tempora eveniet?", 
            
        ],
        
        [
            "judul" => "Cards 2",
            "topik" => "Lifestyle Trends to Follow",
            "konten" => "      Tren gaya hidup sehat, produktif, dan mindful yang semakin populer di kalangan anak muda pada tahun ini.
", 
            
        ],
        
        [
            "judul" => "Cards 3",
            "topik" => "Makeup Styles 2025",
            "konten" => "Gaya makeup natural hingga soft glam akan mendominasi tren riasan di tahun 2025.", 
            
        ]

    ];
    return view ('Berita',[
        "title" => "Berita | MID'S Lifestyle",
        "beritas" => $data_berita,

    ]);
  
});

Route::get('/contact', function () {
    return view ('Contact');
});



