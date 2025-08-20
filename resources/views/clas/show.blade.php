@extends('layouts.app')

@section('judul', 'Detail Kelas')

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

    .container {
        background: #fff;
        padding: 20px 25px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        max-width: 700px;
        margin: 0 auto;
    }

    .info {
        margin: 10px 0;
        font-size: 15px;
    }

    hr {
        margin: 20px 0;
        border: none;
        border-top: 1px solid #ddd;
    }

    h3 {
        margin-bottom: 10px;
        color: #222;
    }

    ul {
        list-style: disc;
        padding-left: 20px;
    }

    ul li {
        margin: 6px 0;
    }

    .btn-back {
        background-color: #111;
        color: white;
        padding: 10px 16px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
        margin-top: 20px;
    }

    .btn-back:hover {
        background-color: #333;
    }
</style>
@endsection

@section('judulheader', 'Detail Kelas')

@section('content')
    <div class="container">
        <div class="info"><strong>ID:</strong> {{ $clas->id }}</div>
        <div class="info"><strong>Nama Kelas:</strong> {{ $clas->name }}</div>
        <div class="info"><strong>Deskripsi:</strong> {{ $clas->description ?? 'Tidak ada deskripsi' }}</div>

        <hr>
        <h3>Daftar Siswa</h3>
        @if($datauser->isEmpty())
            <p><i>Tidak ada siswa di kelas ini</i></p>
        @else
            <ul>
                @foreach($datauser as $user)
                    <li>{{ $user->name }} <span style="color:#555;">(Kelas: {{ $clas->name }})</span></li>
                @endforeach
            </ul>
        @endif

        <a href="/clas"><button class="btn-back">Kembali</button></a>
    </div>
@endsection
