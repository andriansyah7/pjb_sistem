<?php

namespace App\Http\Controllers;
use App\Models\Cmt;

use Illuminate\Http\Request;

class CmtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmt = Cmt::all();
        return view('CMT.data-cmt',compact('cmt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CMT.create-cmt');
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
            'ecpnmr'=>'required',
            'catatan_cmt'=>'required',
            'nama_spv'=>'required'
        ]);
        Cmt::create($request->all());
        return redirect('data-cmt')->with('success', 'Berhasil Membuat Notulen !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cmt = Cmt::findOrFail($id);
        return view ('CMT.show-cmt', compact('cmt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cmt = Cmt::findOrFail($id);
        return view('CMT.edit-cmt',compact('cmt'));
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
            'ecpnmr'=>'required',
            'catatan_cmt'=>'required',
            'nama_spv'=>'required'
        ]);

        $cmt = Cmt::findOrFail($id);
        $cmt->update($request->all());
        return redirect('data-cmt')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cmt = Cmt::findOrFail($id);
        $cmt->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }
}
