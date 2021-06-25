<?php

namespace App\Http\Controllers;

use App\Models\Ecp;
use App\Models\Tindaklanjut;
use App\Models\User;
use Illuminate\Http\Request;

class TindakLanjutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tindaklanjut = Tindaklanjut::orderBy('created_at','desc')->get();
        return view('TINDAKLANJUT.data-tindaklanjut',compact('tindaklanjut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tindaklanjut = Tindaklanjut::orderBy('created_at','desc')->get();
        $ecp= Ecp::all();
        $user= User::all();
        return view('TINDAKLANJUT.create-tindaklanjut',compact('tindaklanjut','ecp','user'));
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
            
            'tindaklanjut_notulis'=>'required',
            'tindaklanjut_deskripsi'=>'required',
            'tindaklanjut_file_terkait'=>'required',
            'updated_at'=>'required',
        ]);
        $file =$request->file('tindaklanjut_file_terkait'); 
            
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('tindaklanjut_files',$file->getClientOriginalName());
    

        Tindaklanjut::create([
            'ecp_no' => $request->ecp_no,
            'tindaklanjut_notulis'=>$request->tindaklanjut_notulis,
            'tindaklanjut_deskripsi'=>$request->tindaklanjut_deskripsi,
            'tindaklanjut_file_terkait'=>'tindaklanjut_files/'.$nama_file,
            'created_at' => date('Y-M-d H:i:s'),
            'updated_at' => date('Y-M-d'),

        ]);
        return redirect('data-tindaklanjut')->with('success', 'Data Berhasil Tersimpan!');
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
    public function edit(Tindaklanjut $tindaklanjut)
    {
        $ecp= Ecp::all();
        $user= User::all();
        return view('TINDAKLANJUT.edit-tindaklanjut',compact('tindaklanjut','ecp','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tindaklanjut $tindaklanjut)
    {
        $request->validate([
            'ecp_no'=>'required',
            'tindaklanjut_notulis'=>'required',
            'tindaklanjut_deskripsi'=>'required',
        ]);

        Tindaklanjut::where('tindaklanjut_id',$tindaklanjut->tindaklanjut_id)
        ->update([
            'ecp_no' => $request->ecp_no,
            'tindaklanjut_notulis' => $request->tindaklanjut_notulis,
            'tindaklanjut_deskripsi' => $request->tindaklanjut_deskripsi,
        ]);
        
        return redirect('data-tindaklanjut')->with('success', 'Data Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tindaklanjut_id)
    {
        $data = Tindaklanjut::findOrFail($tindaklanjut_id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
}
