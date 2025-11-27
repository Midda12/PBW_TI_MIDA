<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // Tampil semua data
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    // Form tambah data
    public function tambahdata()
    {
        // karena file berada di: resources/views/tambahdata.blade.php
        return view('tambahdata');
    }

    // Simpan data baru
    public function insertdata(Request $request)
    {
        // Validasi
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'email' => 'nullable|email'
        ]);

        // Simpan ke database
        Mahasiswa::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email
        ]);

        return redirect()->route('mahasiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    // Form edit
    public function edit($id)
    {
        $data = Mahasiswa::find($id);

        // file editdata.blade.php harus di router view('editdata')
        return view('editdata', compact('data'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $data = Mahasiswa::find($id);

        $data->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'email' => $request->email
        ]);

        return redirect()->route('mahasiswa')->with('success', 'Data berhasil diupdate!');
    }

    // Hapus data
    public function delete($id)
    {
        $data = Mahasiswa::find($id);
        $data->delete();

        return redirect()->route('mahasiswa')->with('success', 'Data berhasil dihapus!');
    }
}
