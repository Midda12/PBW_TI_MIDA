@extends('layouts.main')

@section('content')

<div style="max-width: 900px; margin: 40px auto;">
    <h2 style="text-align:center; margin-bottom:20px; color:#6a5acd;">
        Data Mahasiswa
    </h2>

    <a href="{{ route('tambahdata') }}" 
        style="
            display:inline-block;
            padding:10px 15px;
            background:#6a5acd;
            color:white;
            border-radius:8px;
            margin-bottom:20px;
            text-decoration:none;
        ">
        + Tambah Data
    </a>

    <table style="width:100%; border-collapse: collapse;">
        <thead>
            <tr style="background:#eee;">
                <th style="padding:10px; border:1px solid #ddd;">Nama</th>
                <th style="padding:10px; border:1px solid #ddd;">Prodi</th>
                <th style="padding:10px; border:1px solid #ddd;">Foto</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $item)
            <tr>

                <td style="padding:10px; border:1px solid #ddd;">{{ $item->nama }}</td>
                <td style="padding:10px; border:1px solid #ddd;">{{ $item->prodi }}</td>
                <td style="padding:10px; border:1px solid #ddd;">
                    @if ($item->foto)
                        <img src="{{ asset('foto-mahasiswa/' . $item->foto) }}" 
                             width="80" 
                             style="border-radius:10px;">
                    @else
                        <span>Tidak ada foto</span>
                    @endif
                </td>
                <tr>
    <td style="padding:10px; border:1px solid #ddd;">{{ $item->nama }}</td>
    <td style="padding:10px; border:1px solid #ddd;">{{ $item->prodi }}</td>
    <td style="padding:10px; border:1px solid #ddd;">
        @if ($item->foto)
            <img src="{{ asset('foto-mahasiswa/' . $item->foto) }}" width="80" style="border-radius:10px;">
        @else
            <span>Tidak ada foto</span>
        @endif
    </td>
    <td style="padding:10px; border:1px solid #ddd;">
        <a href="{{ route('editdata', $item->id) }}" 
           style="padding:6px 10px; background:#6a5acd; color:white; border-radius:6px; text-decoration:none;">
           Edit
        </a>

        <a href="{{ route('deletedata', $item->id) }}"
           onclick="return confirm('Yakin ingin menghapus?')"
           style="padding:6px 10px; background:red; color:white; border-radius:6px; text-decoration:none; margin-left:5px;">
           Hapus
        </a>
    </td>
</tr>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
