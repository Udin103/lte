@extends('layout.main')

@section('conten')
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
                    <th style="background-color: #2A2F4F; color: #fff;">NAMA</th>
                    <th style="background-color: #2A2F4F; color: #fff;">UMUR</th>
                    <th style="background-color: #2A2F4F; color: #fff;">ALAMAT</th>
                    <th style="background-color: #2A2F4F; color: #fff;">EMAIL</th>
                    <th style="background-color: #2A2F4F; color: #fff;">GAMBAR</th>
                    <th style="background-color: #2A2F4F; color: #fff;">TANGGAL</th>
                    <th style="background-color: #2A2F4F; color: #fff;">SUNTING</th>
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
@endsection