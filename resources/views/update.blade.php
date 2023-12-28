<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Varela Round', sans-serif;
            margin: 0;
            padding: 0;
            color: #2A2F4F;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #EBE3D5;
        }

        .card {
            width: 80%;
            max-width: 400px;
            background-color: #fff;
            color: #2A2F4F;
            margin: auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #000;
            /* Black outline */
        }

        .card-header {
            background-color: #2A2F4F;
            color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 10px;
        }

        .form-control {
            border: 1px solid #000;
            border-radius: 15px;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #917FB3;
            border-color: #917FB3;
            color: #fff;
            border-radius: 15px;
        }

        .btn-primary:hover {
            background-color: #63537A;
            border-color: #63537A;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('edit')}}">
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control form-control-sm" required=""
                            value="{{$data->nim}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" class="form-control form-control-sm" required=""
                            value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control form-control-sm"
                            required=""> {{$data->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control form-control-sm" required=""
                            value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" id="foto" name="foto" class="form-control-file">
                    </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>