<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    private static $data_berita =[

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

    public static function ambildata()
    {
        return Self::$data_berita;
    }

    public static function caridata($slug)
    {
        $data_beritas = Self::$data_berita;

        $new_berita = [];

        foreach($data_beritas as $berita)
        if($berita["slug"] === $slug)
        {
          $new_berita = $berita; /// berita => [judul,slug,penulis,konten]
        }

        return $new_berita;

    }

}
