@extends('layouts.app')

@section('judul')
Data Kelas
@endsection

@section('css')
<style>
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin: 0;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #111;
        margin-bottom: 30px;
    }

    .btn-tambah {
        background-color: #111;
        color: white;
        padding: 10px 16px;
        text-decoration: none;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        display: inline-block;
        transition: background-color 0.2s ease-in-out;
    }

    .btn-tambah:hover {
        background-color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    thead {
        background-color: #222;
        color: white;
    }

    th, td {
        padding: 14px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #f6f6f6;
    }

    .action a {
        color: #111;
        text-decoration: none;
        margin: 0 6px;
        font-weight: 500;
        padding: 4px 8px;
        border-radius: 4px;
        transition: background-color 0.2s ease-in-out;
    }

    .action a:hover {
        background-color: #e0e0e0;
    }

    .top-bar {
        margin-bottom: 20px;
        text-align: right;
    }
</style>
@endsection

@section('judulheader')
data kelas
 @endsection
@section('content')
    <a href="/" class="btn-tambah">Data Siswa</a>

    <div class="top-bar">
        <a href="{{ route('clas.create') }}" class="btn-tambah">+ Tambah Kelas</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama Kelas</th>
                <th>Deskripsi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataclas as $clas)
            <tr>
                <td data-label="Nama Kelas">{{ $clas->name }}</td>
                <td data-label="Deskripsi">{{ $clas->description ?? '-' }}</td>
                <td class="action" data-label="Opsi">
                    <a href="{{ route('clas.show', $clas->id) }}">Detail</a> 
                    <a href="{{ route('clas.edit', $clas->id) }}">Edit</a> 
                    <a href="/clas/delete/{{ $clas->id }}" onclick="return confirm('Yakin?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
