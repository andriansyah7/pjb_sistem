<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class UploadController extends Controller
{
    public function index(){
        //ambil data dari database
        $data = Upload::all();

        //passing data ke view
        return view('ECP.data-upload')->with('data', $data);
    }

    public function create()
    {
        return view ('ECP.create-upload');
    }

    public function store(Request $request){

        //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        $this->validate($request, [
            'file'          => 'required',
            'keterangan'    => 'required'
        ]);

        //mengambil data file yang diupload
        $file           = $request->file('file');
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('file_upload',$file->getClientOriginalName());


        $upload = new Upload;
        $upload->file       = $nama_file;
        $upload->keterangan = $request->input('keterangan');

        //menyimpan data ke database
        $upload->save();

        //kembali ke halaman sebelumnya
        return back()->with('success', 'Upload Data Berhasil !'); 
    }
}
