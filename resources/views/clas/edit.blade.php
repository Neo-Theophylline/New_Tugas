@extends('layouts.app')

@section('judul', 'Edit Kelas')

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
        max-width: 600px;
        margin: 0 auto;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin: 10px 0 5px;
        font-weight: 500;
    }

    input, textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        margin-bottom: 15px;
        width: 100%;
    }

    .btn-save {
        background-color: #111;
        color: white;
        padding: 10px 16px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
        margin-bottom: 10px;
    }

    .btn-save:hover {
        background-color: #333;
    }

    .btn-back {
        background-color: #777;
        color: white;
        padding: 10px 16px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
        text-decoration: none;
        text-align: center;
        display: inline-block;
    }

    .btn-back:hover {
        background-color: #555;
    }
</style>
@endsection

@section('judulheader', 'Edit Kelas')

@section('content')
    <div class="container">
        <form action="{{ route('clas.update', $clas->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name">Nama Kelas:</label>
            <input type="text" name="name" id="name" value="{{ $clas->name }}" required>

            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description" rows="3">{{ $clas->description }}</textarea>

            <button type="submit" class="btn-save" onclick="return confirm('Yakin ingin mengubah data kelas?')">
                Simpan Perubahan
            </button>
            <a href="/clas" class="btn-back">Kembali</a>
        </form>
    </div>
@endsection
