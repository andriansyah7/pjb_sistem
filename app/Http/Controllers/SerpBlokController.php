<?php

namespace App\Http\Controllers;

use App\Models\Serp_Blok;
use Illuminate\Http\Request;

class SerpBlokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blok = Serp_Blok::orderBy('serp_blok_id','asc')->get();
        return view('SERP_BLOK.data-blok',compact('blok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blok = Serp_Blok::all();
        
        return view('SERP_BLOK.create-blok',compact ('blok'));
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
            
            'serp_blok_id'=>'required',
            'serp_blok_name'=>'required',
            
        ]);

        $data=$request->except(['_token']);
        $data['created_at']= date('Y-m-d H:i:s');
        $data['updated_at']= date('Y-m-d H:i:s');

        Serp_Blok::insert($data);
        return redirect('data-blok')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serp_Blok  $serp_Blok
     * @return \Illuminate\Http\Response
     */
    public function show(Serp_Blok $serp_Blok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serp_Blok  $serp_Blok
     * @return \Illuminate\Http\Response
     */
    public function edit(Serp_Blok $serp_blok)
    {
        return view('SERP_BLOK.edit-blok',compact('serp_blok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serp_Blok  $serp_Blok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serp_Blok $serp_blok)
    {
        Serp_Blok::where('serp_blok_id',$serp_blok->serp_blok_id)
        ->update([
            'serp_blok_id'=>$request->serp_blok_id,
            'serp_blok_name'=>$request->serp_blok_name,
        ]);
     
        return redirect('data-blok')->with('success', 'Data Berhasil Terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serp_Blok  $serp_Blok
     * @return \Illuminate\Http\Response
     */
    public function destroy($serp_blok_id)
    {
        $data = Serp_Blok::findOrFail($serp_blok_id);
        $data->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
}
