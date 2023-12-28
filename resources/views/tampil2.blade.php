<!DOCTYPE html>
<html>

<head>
        <title>Hasil Form Data Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoI+6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
        .custom-table {
            max-width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
            border-radius: 10px;
        }

        .custom-table th,
        .custom-table td {
            padding: 8px;
            text-align: left;
            border: 1px solid #000;
        }

        .custom-table th {
            background-color: #333;
            color: white;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
           <h2>Data Mahasiswa</h2>
        </center><br />
        <table class="custom-table">
            <thead>
             <tr>
                 <th>Nama</th>
                 <th>NIM</th>
                 <th>Alamat</th>
                </tr>
             </thead>
             <tbody>
               <tr>
                  <td>{{ $data['nama'] }}</td>
                  <td>{{ $data['nim'] }}</td>
                  <td>{{ $data['alamat'] }}</td>
                </tr>
              </tbody>
             </table>

        <center>
          <h2> Database</h2>
        </center><br />
        <table class="custom-table">
          <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>Created_at</th>
            </tr>
          </thead>
          <tbody>
             @foreach($dataAll as $mahasiswa)
              <tr>
                  <td>{{ $mahasiswa['nama'] }}</td>
                  <td>{{ $mahasiswa['nim'] }}</td>
                  <td>{{ $mahasiswa['alamat'] }}</td>
                  <td>{{ $mahasiswa['created_at'] }}</td>
              </tr>
            @endforeach
           </tbody>
          </table>
        </div>
</body>
</html>