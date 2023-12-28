<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #EBE3D5;
            color: #2A2F4F;
        }

        .custom-table {
            max-width: 80%;
            margin: 0 auto;
            border: 2px solid #000;
            /* Black outline */
            border-radius: 10px;
            overflow: hidden;
            background-color: #F3EEEA;
        }

        .custom-table th,
        .custom-table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #2A2F4F;
        }

        .custom-table th {
            background-color: #917FB3;
            color: #fff;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #FDE2F3;
        }

        .btn-action {
            margin-right: 5px;
        }

        .btn-add {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .btn-add a {
            background-color: #2A2F4F;
            border-color: #2A2F4F;
            font-size: 16px;
            padding: 8px 16px;
            border-radius: 5px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        @if(session('pesan'))
        <div class="alert alert-success">
            {{ session('pesan') }}
        </div>
        @endif
        <h2 class="text-center" style="color: #2A2F4F;">Database</h2>
        <table class="table custom-table mt-4">
            <thead>
                <tr>
                    <th style="background-color: #2A2F4F; color: #fff;">NIM</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Nama</th>
                    <th style="background-color: #2A2F4F; color: #fff;">umur</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Alamat</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Email</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Picture</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Created_at</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataAll as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa['nim'] }}</td>
                    <td>{{ $mahasiswa['nama'] }}</td>
                    <td>{{ $mahasiswa['umur'] }}</td>
                    <td>{{ $mahasiswa['alamat'] }}</td>
                    <td>{{ $mahasiswa['email'] }}</td>
                    <td>
                        @if ($mahasiswa['foto'])
                        <img src="{{ asset('storage/' . $mahasiswa['foto']) }}" alt="Foto Mahasiswa">
                        @else
                        No Image
                        @endif
                    </td>
                    <td>{{ $mahasiswa['created_at'] }}</td>
                    <td>
                        <a href="{{ url('/update/' . $mahasiswa['nim']) }}"
                            onclick="return confirm('Yakin data mau diupdate?');"
                            class="button-30 btn btn-warning btn-action">Update</a>
                        <a href="{{ url('/delete/' . $mahasiswa['nim']) }}"
                            onclick="return confirm('Yakin data mau dihapus?');"
                            class="button-30 btn btn-danger btn-action">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="btn-add">
            <a href="/create">Tambah data</a>
        </div>
    </div>
</body>

</html>