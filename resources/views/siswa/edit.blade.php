<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
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
        input[type="email"],
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

        .photo-preview {
            text-align: center;
            margin-top: 15px;
        }

        .photo-preview img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 2px solid #ccc;
        }
    </style>
</head>

<body>

    <h1>Edit Data Siswa</h1>

    <form action="/siswa/update/{{ $datauser->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="kelas">Kelas</label>
        <select name="kelas" id="kelas" required>
            @foreach ($clases as $kelas)
            <option value="{{ $kelas->id }}" {{ $datauser->clas_id == $kelas->id ? 'selected' : '' }}>
                {{ $kelas->name }}
            </option>
            @endforeach
        </select>

        <label for="name">Nama</label>
        <input type="text" name="name" id="name" value="{{ $datauser->name }}" required>

        <label for="nisn">NISN</label>
        <input type="text" name="nisn" id="nisn" value="{{ $datauser->nisn }}" required>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $datauser->alamat }}" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $datauser->email }}" required>

        <label for="no_handphone">No. HP</label>
        <input type="text" name="no_handphone" id="no_handphone" value="{{ $datauser->no_handphone }}" required>

        <label for="photo">Ganti Foto (Opsional)</label>
        <input type="file" name="photo" id="photo" accept="image/*">

        @if ($datauser->photo)
        <div class="photo-preview">
            <img src="{{ asset('storage/' . $datauser->photo) }}" alt="Foto Siswa">
        </div>
        @endif

        <div class="form-footer">
            <button type="submit" class="btn-submit" onclick="return confirm('Sudah fix kahhhhhh?')">
                Simpan Perubahan
            </button>
            <a href="/siswa/index"><button type="button" class="btn-back">Kembali</button></a>
        </div>
    </form>

</body>

</html>
