<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #111;
            margin-bottom: 25px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
            margin-top: 15px;
            color: #222;
        }

        input[type="text"],
        input[type="password"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            background-color: #fdfdfd;
            transition: border-color 0.2s ease-in-out;
        }

        input:focus,
        select:focus {
            border-color: #555;
            outline: none;
        }

        small {
            color: red;
            font-size: 12px;
        }

        .btn-submit,
        .btn-back {
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            margin-top: 20px;
            cursor: pointer;
            font-size: 15px;
            transition: background-color 0.2s ease-in-out;
        }

        .btn-submit {
            background-color: #111;
            color: white;
        }

        .btn-submit:hover {
            background-color: #333;
        }

        .btn-back {
            background-color: #e0e0e0;
            color: #111;
            margin-left: 10px;
        }

        .btn-back:hover {
            background-color: #c2c2c2;
        }

        .form-footer {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Form Input Siswa</h1>

    <form action="/siswa/store" method="post" enctype="multipart/form-data">
        @csrf

        <label for="kelas">Kelas</label>
        <select name="kelas">
            @foreach ($clases as $clas)
            <option value="{{ $clas->id }}">{{ $clas->name }}</option>
            @endforeach
        </select>
        @error('kelas')
        <small>{{ $message }}</small>
        @enderror

        <label for="name">Nama</label>
        <input type="text" name="name" placeholder="Masukkan Nama">
        @error('name')
        <small>{{ $message }}</small>
        @enderror

        <label for="nisn">NISN</label>
        <input type="text" name="nisn" placeholder="Masukkan NISN">
        @error('nisn')
        <small>{{ $message }}</small>
        @enderror

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" placeholder="Masukkan Alamat">
        @error('alamat')
        <small>{{ $message }}</small>
        @enderror

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Masukkan Email">
        @error('email')
        <small>{{ $message }}</small>
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        @error('password')
        <small>{{ $message }}</small>
        @enderror

        <label for="no_handphone">No Handphone</label>
        <input type="text" name="no_handphone" placeholder="Masukkan No Handphone">
        @error('no_handphone')
        <small>{{ $message }}</small>
        @enderror

        <label for="photo">Foto</label>
        <input type="file" name="photo">

        <div class="form-footer">
            <button type="submit" class="btn-submit">Simpan</button>
            <a href="/"><button type="button" class="btn-back">Kembali</button></a>
        </div>
    </form>
</body>

</html>
