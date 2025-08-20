@extends('layouts.app')

@section('judul', 'Tambah Kelas')

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
        margin-bottom: 10px;
        width: 100%;
    }

    small {
        color: red;
        font-size: 12px;
        margin-bottom: 10px;
        display: block;
    }

    .btn-submit {
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

    .btn-submit:hover {
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
        margin-bottom: 10px;
        text-decoration: none;
    }

    .btn-back:hover {
        background-color: #555;
    }

    .form-footer {
        display: flex;
        gap: 10px;
    }
</style>
@endsection

@section('judulheader', 'Tambah Kelas')

@section('content')
    <div class="container">
        <form action="{{ route('clas.store') }}" method="POST">
            @csrf

            <label for="name">Nama Kelas</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <small>{{ $message }}</small>
            @enderror

            <label for="description">Deskripsi</label>
            <input name="description" id="description" rows="3" value="{{ old('description') }}">
            @error('description')
                <small>{{ $message }}</small>
            @enderror
<br>
            <div class="form-footer">
                <button type="submit" class="btn-submit">Tambah Kelas</button>
                <a href="/clas" class="btn-back">Kembali</a>
            </div>
        </form>
    </div>
@endsection
