
@extends('layouts.main')

@section('content')


 <article>
   <h2>{{ $new_berita ["judul"] }}</h2>
    <h3>{{ $new_berita ["topik"] }}</h3>
    <p>{{ $new_berita ["konten"] }}</p>
    
  </article>
 
 
  
 


@endsection