<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ecp;
use App\Models\Notulen;

class NotulenController extends Controller
{
    
    public function index()
    {
        $notulen = Notulen::all();
        $ecp = Ecp::all();
        $user = User::all();
        return view('NOTULEN.data-notulen',compact('notulen','ecp','user'));
    }

    
    public function create()
    {
        $notulen = Notulen::all();
        $ecp = Ecp::all();
        $user = User::all();
        $pimpinan = User::where('role_id',"3")->get();
        return view('NOTULEN.create-notulen',compact('notulen','ecp','user','pimpinan'));
    
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
        'notulen_pembahasan'=>'required',
        'notulen_permasalahan'=>'required',
        'notulen_permasalahan'=>'required',
        'notulen_hasil_pembahasan'=>'required',
        ]);

        $notulen=$request->except(['_token']);
        $notulen['notulen_tanggal']= date('Y-m-d');
        $notulen['created_at']= date('Y-m-d H:i:s');
        $notulen['updated_at']= date('Y-m-d H:i:s');

        Notulen::insert($notulen);
        return redirect('data-notulen')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Notulen $notulen)
    {
        $ecp = Ecp::all();
        $user = User::all();
        $pimpinan = User::where('role_id',"3")->get();
        return view('NOTULEN.show-notulen',compact('notulen','ecp','user','pimpinan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($notulen_id)
    {
        $notulen = Notulen::findOrFail($notulen_id);
        $notulen->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }
}
