<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoI+6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            /* Light background color */
            color: #2A2F4F;
            /* Dark purple text color */
        }

        .container {
            margin-top: 50px;
        }

        .custom-table {
            max-width: 80%;
            margin: 0 auto;
            border: 2px solid #2A2F4F;
            /* Dark purple border */
            border-radius: 10px;
            overflow: hidden;
        }

        .custom-table th,
        .custom-table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #2A2F4F;
            /* Dark purple border */
        }

        .custom-table th {
            background-color: #2A2F4F;
            /* Dark purple accent color */
            color: #fff;
            /* White text color */
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #fff;
            /* White background color */
            color: #2A2F4F;
            /* Dark purple text color */
        }

        h2 {
            color: #2A2F4F;
            /* Dark purple text color */
            text-align: center;
        }

        center {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table class="custom-table">
            <thead>
                <tr>
                    <th style="background-color: #2A2F4F; color: #fff;">NIM</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Nama</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Umur</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Alamat</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Email</th>
                    <th style="background-color: #2A2F4F; color: #fff;">Foto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data['nim'] }}</td>
                    <td>{{ $data['nama'] }}</td>
                    <td>{{ $data['umur'] }}</td>
                    <td>{{ $data['alamat'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>
                        @if ($data['foto'])
                            <img src="{{ url('storage/' . $data['foto']) }}" alt="Foto Mahasiswao">
                        @else
                            No Image
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

        <center>
            <a href=/read class="btn btn-succes">Tampilkan data</a>
        </center>
    </div>
</body>

</html>
