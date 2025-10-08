@extends('layouts.main')
<title>{{ $title }} </title>
@section('content')


 @foreach ($beritas as $berita)
 <div style="padding:50px 20px; display:flex; justify-content:center; flex-wrap:wrap; gap:30px;">
   <div style="background:white; border-radius:12px; padding:20px; width:300px; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
     <h2>{{ $berita ['judul'] }}</h2>
     <h3>{{ $berita ['topik'] }}</h3>
    <p style="font-size:14px; color:#555;">
       {{ $berita ['konten'] }}</p>
    <a href="#" style="color:#2575fc; font-size:14px; text-decoration:none;">Baca Selengkapnya →</a>
  </div>
</div>
 
 
  
 
  @endforeach

@endsection

