<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jabatan;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpegawai = User::all();
        return view('Halaman.data-pegawai',compact('dtpegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Halaman.create-pegawai');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'NID'=>'required|size:10',
            'email'=>'required',
            'level'=>'required',
            'password'=>'required'
        ]);
        $password = Hash::make($request->password);
        User::create([
        'name' => $request->name,
        'NID' => $request->NID,
        'email' => $request->email,
        'level' => $request->level,
        'password' => $password,
        ]);
        return redirect('data-pegawai')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peg = User::findOrFail($id);
        return view('Halaman.edit-pegawai',compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([
            'name'=>'required',
            'NID'=>'required|size:10',
            'email'=>'required',
            'level'=>'required',
            'password'=>'required'
        ]);

        $password = Hash::make($request->password);
        $peg = User::findOrFail($id);
        $peg->update($request->all());
        return redirect('data-pegawai')->with('success', 'Data Berhasil Terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = User::findOrFail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
}
