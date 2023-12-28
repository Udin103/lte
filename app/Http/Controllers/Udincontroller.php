<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Udincontroller extends Controller
{

   public function create()
   {
      return view('create');
   }

   public function update($nim)
   {
      $data = Mahasiswa::find($nim);
      if ($data) {
         return view('update', ['data' => $data]);
      } else {
         return redirect('/read');
      }
   }

   public function edit(Request $request)
   {
      $data = Mahasiswa::find($request->nim);

      if ($data) {
         $data->nama = $request->nama;
         $data->alamat = $request->alamat;
         $data->umur = $request->umur;
         $data->email = $request->email;

         // Check if a new file is uploaded
         if ($request->hasFile('foto')) {
            // Delete existing file (if any)
            if ($data->foto) {
               Storage::delete($data->foto);
            }

            // Store the new file
            $fotoPath = $request->file('foto')->store('public');
            $data->foto = basename($fotoPath);
         }

         $data->updated_at = now();
         $data->save();

         return redirect('/read')->with('pesan', 'Data dengan NIM :' . $request->nim . ' berhasil diupdate');
      } else {
         return redirect('/read')->with('pesan', 'Data tidak ditemukan/gagal update');
      }
   }

   public function save(Request $request)
   {

      $validateData = $request->validate([
         'nim' => 'required|regex:/^G.\d{3}.\d{2}.\d{4}$/|unique:mahasiswa,nim',
         'nama' => 'required|string|max:25',
         'umur' => 'required|integer|between:1,100',
         'alamat' => 'required|min:6',
         'foto' => 'mimes:jpeg,png,jpg,gif,svg|max:5000',
      ]);

      $model = new Mahasiswa();
      $model->nim = $request->nim;
      $model->nama = $request->nama;
      $model->umur = $request->umur;
      $model->alamat = $request->alamat;
      $model->email = $request->email;

      // Check if a file is uploaded
      if ($request->hasFile('foto')) {
         // Store the file
         $fotoPath = $request->file('foto')->store('public');
         $model->foto = basename($fotoPath);
      }

      $model->created_at = now();
      $model->save();

      return view('view', ['data' => $request->all()]);
   }

   public function read()
   {
      $model = new Mahasiswa();
      $dataAll = $model->all();
      return view('read', ['dataAll' => $dataAll]);
  }

   public function delete($nim)
   {
      $data = Mahasiswa::find($nim);
      if ($data) {
         $data->delete();
      } else {
         return redirect('/read')->with('pesan', 'Data NIM : ' . $nim . ' tidak ditemukan');
      }

      return redirect('/read')->with('pesan', 'Data NIM:' . $nim . ' Berhasil dihapus');
   }

   public function tampilkan(Request $request)
   {
      $model = new Mahasiswa();

      $model->create([
         'nim' => $request->nim,
         'nama' => $request->nama,
         'alamat' => $request->alamat,
         'created_at' => date("Y-m-d H:i:s"),
      ]);
      $dataAll = $model->all();
      return view('tampil2', ['data' => $request->all(), 'dataAll' => $dataAll]);
   }
}
