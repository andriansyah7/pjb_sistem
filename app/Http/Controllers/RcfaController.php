<?php

namespace App\Http\Controllers;

use App\Models\Rcfa;
use Illuminate\Http\Request;

class RcfaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rcfa = Rcfa::orderBy('created_at','desc')->get();
        return view('RCFA.data-rcfa', compact('rcfa'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $r= rand('001','999');
        date_default_timezone_set('Asia/Jakarta');
        $rcfano=  '/RCFA/'.date('d/M/Y');
       
        
        return view ('RCFA.create-rcfa',compact('rcfano','r'));
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
            'rcfa_no'=>'required',
            'user_nid'=>'required',
            'rcfa_deskripsi'=>'required',
            'rcfa_file_pendukung'=>'required',
        ]);

        $file =$request->file('rcfa_file_pendukung'); 
            
        //mengambil nama file
        $nama_file      = $file->getClientOriginalName();

        //memindahkan file ke folder tujuan
        $file->move('rcfa_files',$file->getClientOriginalName());

        Rcfa::create([
            'rcfa_no' => $request->rcfa_no,
            'user_nid' => $request->user_nid,
            'rcfa_deskripsi' => $request->rcfa_deskripsi,
            'rcfa_file_pendukung' => 'rcfa_files/'.$nama_file,       
            'created_at' => date('Y-M-d H:i:s'),
            'updated_at' => date('Y-M-d H:i:s'),
            ]);

            return redirect('data-rcfa')->with('success', 'Berhasil Membuat Dokumen RCFA !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rcfa  $rcfa
     * @return \Illuminate\Http\Response
     */
    public function show($rcfa_no)
    {
        $rcfa_no= str_replace('-','/',$rcfa_no);
        $rcfa = Rcfa::findOrFail($rcfa_no);
        return view ('RCFA.show-rcfa', compact('rcfa'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rcfa  $rcfa
     * @return \Illuminate\Http\Response
     */
    public function edit(Rcfa $rcfa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rcfa  $rcfa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rcfa $rcfa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rcfa  $rcfa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rcfa $rcfa)
    {
        //
    }
}
