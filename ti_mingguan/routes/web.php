<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;


// ---------------------------
// HOME
// ---------------------------
Route::get('/', function () {
    return view('Home');
});


// ---------------------------
// PROFILE
// ---------------------------
Route::get('/profile', function () {
    return view('Profile', [
        "nama" => "Midda Restia",
        "email" => "Midarstia",
        "creator" => "Lifestyle Creator",
        "intagram" => "ddarsta",
        "foto" => "img/mida.jpg"
    ]);
});


// ---------------------------
// BERITA
// ---------------------------
Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/berita/{slug}', function ($slugp) {
    return view('singleberita', [
        "new_berita" => Berita::caridata($slugp),
    ]);
});


// ---------------------------
// MAHASISWA CRUD
// ---------------------------

// tampil semua data mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

// form tambah data
Route::get('/tambahdata', [MahasiswaController::class, 'tambahdata'])->name('tambahdata');

// simpan data baru
Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');

// form edit data (SUDAH DIBENERIN)
Route::get('/editdata/{id}', [MahasiswaController::class, 'editdata'])->name('editdata');

// update data
Route::post('/updatedata/{id}', [MahasiswaController::class, 'updatedata'])->name('updatedata');

// hapus data
Route::get('/deletedata/{id}', [MahasiswaController::class, 'delete'])->name('deletedata');


// ---------------------------
// CONTACT
// ---------------------------
Route::get('/contact', function () {
    return view('Contact');
});
