<?php

namespace App\Http\Controllers;

use App\Models\Serp_System;
use App\Models\Serp_Unit;
use Illuminate\Http\Request;

class SerpSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serp_system = Serp_System::all();
        $serp_unit = Serp_Unit::all();
        return view('SERP_SYSTEM.data-serp_system',compact('serp_system','serp_unit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serp_system = Serp_System::all();
        $serp_unit = Serp_Unit::all();
        return view('SERP_SYSTEM.create-serp_system',compact('serp_system','serp_unit'));
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
            'serp_unit_id'=>'required',
            'serp_system_name'=>'required',
        ]);
        Serp_System::create([
            'serp_unit_id' => $request->serp_unit_id,
            'serp_system_name' => $request->serp_system_name,
            'created_at' => date('Y-M-d H:i:s'),
            'updated_at' => date('Y-M-d H:i:s'),
            ]);
        return redirect('data-serp_system')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serp_System  $serp_System
     * @return \Illuminate\Http\Response
     */
    public function show(Serp_System $serp_System)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serp_System  $serp_System
     * @return \Illuminate\Http\Response
     */
    public function edit(Serp_System $serp_system)
    {
        $serp_unit = Serp_Unit::get();
        
        return view('SERP_SYSTEM.edit-serp_system',compact('serp_system','serp_unit'));
    }

  
    public function update(Request $request, Serp_System $serp_system)
    {
        Serp_System::where('serp_system_id',$serp_system->serp_system_id)
        ->update([
            'serp_unit_id'=>$request->serp_unit_id,
            'serp_system_name'=>$request->serp_system_name,
        ]);
        return redirect('data-serp_system')->with('success', 'Data Berhasil Terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serp_System  $serp_System
     * @return \Illuminate\Http\Response
     */
    public function destroy($serp_system_id)
    {
        $data = Serp_System::findOrFail($serp_system_id);
            $data->delete();
            return back()->with('info', 'Data Berhasil Terhapus');
    }
}
