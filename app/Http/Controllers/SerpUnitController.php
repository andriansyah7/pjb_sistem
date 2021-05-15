<?php

namespace App\Http\Controllers;

use App\Models\Serp_Blok;
use App\Models\Serp_Unit;
use Illuminate\Http\Request;

class SerpUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blok = Serp_Blok::all();
        $serp_unit = Serp_Unit::orderBy('serp_unit_name','asc')->get();
        return view('SERP_UNIT.data-serp_unit',compact('blok','serp_unit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blok = Serp_Blok::all();
        $unit = Serp_Unit::all();
        return view('SERP_UNIT.create-serp_unit',compact('blok','unit'));
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
            'serp_unit_name'=>'required',
        ]);
        Serp_Unit::create([
            'serp_blok_id' => $request->serp_blok_id,
            'serp_unit_name' => $request->serp_unit_name,
            'created_at' => date('Y-M-d H:i:s'),
            'updated_at' => date('Y-M-d H:i:s'),
            ]);
        return redirect('data-serp_unit')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serp_Unit  $serp_Unit
     * @return \Illuminate\Http\Response
     */
    public function show(Serp_Unit $serp_unit)
    {
        $blok = Serp_Blok::get();
        
        return view('SERP_UNIT.edit-serp_unit',compact('blok','serp_unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serp_Unit  $serp_Unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Serp_Unit $serp_unit)
    {
        $blok = Serp_Blok::get();
        
        return view('SERP_UNIT.edit-serp_unit',compact('blok','serp_unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serp_Unit  $serp_Unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serp_Unit $serp_unit)
    {
        Serp_Unit::where('serp_unit_id',$serp_unit->serp_unit_id)
        ->update([
            'serp_blok_id'=>$request->serp_blok_id,
            'serp_unit_name'=>$request->serp_unit_name,
        ]);
        return redirect('data-serp_unit')->with('success', 'Data Berhasil Terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serp_Unit  $serp_Unit
     * @return \Illuminate\Http\Response
     */
    public function destroy($serp_unit_id)
    {
        $data = Serp_Unit::findOrFail($serp_unit_id);
            $data->delete();
            return back()->with('info', 'Data Berhasil Terhapus');
    }
}
