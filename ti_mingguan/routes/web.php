<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;

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

Route::get('/berita', [BeritaController::class,'index']);



Route::get('/berita/{slug}', function ($slugp) {
     $data_berita =[

        [
            "judul" => "Cards 1",
            "slug" => "trend-skincare-daily", // code url untuk ke berita
            "topik" => "Trend Skincare Daily",
            "konten" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem aperiam fugit voluptate blanditiis sapiente ut cupiditate consequatur similique amet autem, excepturi cum? Aspernatur numquam itaque, perferendis aliquid praesentium tempora eveniet?", 
            
        ],
        
        [
            "judul" => "Cards 2",
            "slug" => "lifestyle-trends-to-follow",
            "topik" => "Lifestyle Trends to Follow",
            "konten" => "Tren gaya hidup sehat, produktif, dan mindful yang semakin populer di kalangan anak muda pada tahun ini.
", 
            
        ],
        
        [
            "judul" => "Cards 3",
            "slug" => "makeup-styles-2025",
            "topik" => "Makeup Styles 2025",
            "konten" => "Gaya makeup natural hingga soft glam akan mendominasi tren riasan di tahun 2025.", 
            
        ]

    ];

    $new_berita = [];

    foreach ($data_berita as $berita)
    { 
        if ($berita["slug"]===$slugp)
        {
            $new_berita = $berita;
        }
    }
    
     return view('singleberita', ["new_berita" => Berita::caridata($slugp),
]);


});

Route::get('/mahasiswa', [MahasiswaController::class,'index']);

Route::get('/contact', function () {
    return view ('Contact');
});



