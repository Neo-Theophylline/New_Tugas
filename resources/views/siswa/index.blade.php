<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
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

        img {
            object-fit: cover;
            width: 70px;
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
</head>

<body>
    <h1>Halaman Awal</h1>

    <div class="top-bar">
        <a href="/siswa/create" class="btn-tambah">+ Tambah Siswa</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Photo</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr>
                <td>
                    @if ($siswa->photo)
                        <img src="{{ asset('storage/'.$siswa->photo) }}">
                    @else
                        <span style="color: #888;">Tidak ada foto</span>
                    @endif
                </td>
                <td>{{ $siswa->name }}</td>
                <td>{{ $siswa->clas->name }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td class="action">
                    <a href="/siswa/show/{{ $siswa->id }}">Detail</a>
                    <a href="/siswa/edit/{{ $siswa->id }}">Edit</a>
                    <a href="/siswa/delete/{{ $siswa->id }}" onclick="return confirm('Yakin Kah?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
