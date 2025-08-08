<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
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
            margin-bottom: 30px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        img {
            width: 120px;
            object-fit: cover;
            margin-bottom: 20px;
            border: 2px solid #ccc;
        }

        .info {
            font-size: 15px;
            margin: 8px 0;
            color: #444;
        }

        .info strong {
            color: #111;
        }

        .btn-back {
            margin-top: 20px;
            background-color: #111;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.2s ease-in-out;
        }

        .btn-back:hover {
            background-color: #333;
        }

        .no-photo {
            display: inline-block;
            background-color: #eee;
            color: #888;
            padding: 40px;
            font-size: 14px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <h1>Detail Siswa</h1>

    <div class="container">
        @if ($datauser->photo)
            <img src="{{ asset('storage/'.$datauser->photo) }}" alt="Foto Siswa">
        @else
            <div class="no-photo">Tidak ada foto</div>
        @endif

        <div class="info"><strong>Nama:</strong> {{ $datauser->name }}</div>
        <div class="info"><strong>NISN:</strong> {{ $datauser->nisn }}</div>
        <div class="info"><strong>Alamat:</strong> {{ $datauser->alamat }}</div>
        <div class="info"><strong>Email:</strong> {{ $datauser->email }}</div>
        <div class="info"><strong>No HP:</strong> {{ $datauser->no_handphone }}</div>

        <a href="/"><button class="btn-back">Kembali</button></a>
    </div>

</body>

</html>
