<?php

namespace App\Http\Controllers;

use App\Models\NotulenRcfa;
use App\Models\Rcfa;
use App\Models\User;
use Illuminate\Http\Request;

class NotulenRcfaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rcfa = Rcfa::all();
        $user = User::all();
        $pimpinan = User::where('role_id',"3")->get();
        return view('NOTULENRCFA.create-notulen-rcfa',compact('rcfa','user','pimpinan'));
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
            'notulen_pimpinan_rapat'=>'required',
            'notulen_notulis'=>'required',
            'notulen_tanggal'=>'required',
            'notulen_waktu'=>'required',
            'notulen_tempat'=>'required',
            'notulen_rapat'=>'required',
            'notulen_agenda'=>'required',
            'notulen_peserta'=>'required',
            ]);
    
            $notulen=$request->except(['_token']);
            $notulen['notulen_tanggal']= date('Y-m-d');
            $notulen['created_at']= date('Y-m-d H:i:s');
            $notulen['updated_at']= date('Y-m-d H:i:s');
    
            NotulenRcfa::insert($notulen);
            
            return redirect('data-rcfa')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NotulenRcfa  $notulenRcfa
     * @return \Illuminate\Http\Response
     */
    public function show(NotulenRcfa $notulenRcfa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotulenRcfa  $notulenRcfa
     * @return \Illuminate\Http\Response
     */
    public function edit(NotulenRcfa $notulenRcfa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotulenRcfa  $notulenRcfa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotulenRcfa $notulenRcfa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotulenRcfa  $notulenRcfa
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotulenRcfa $notulenRcfa)
    {
        //
    }
}
