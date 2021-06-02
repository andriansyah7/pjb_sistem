<?php

namespace App\Http\Controllers;

use App\Models\Serp_System;
use App\Models\Serp_Unit;
use App\Exports\SerpSystemExport;
use App\Imports\SerpSystemImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class SerpSystemController extends Controller
{
   
    public function index()
    {
        $serp_system = Serp_System::all();
        $serp_unit = Serp_Unit::all();
        return view('SERP_SYSTEM.data-serp_system',compact('serp_system','serp_unit'));
    }

   
    public function create()
    {
        $serp_system = Serp_System::all();
        $serp_unit = Serp_Unit::all();
        return view('SERP_SYSTEM.create-serp_system',compact('serp_system','serp_unit'));
    }


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

    public function ekspor ()
    {
        $tgl= date('d-M-Y');
     return Excel::download(new SerpSystemExport, 'serp_system.xlsx');
 
    }

    public function impor(Request $request) 
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
 
        // upload ke folder file_main_equipment di dalam folder public
        $file->move('file_serp_system',$nama_file);
 
        // import data
        Excel::import(new SerpSystemImport,'file_serp_system/'.$nama_file);
        
 
        // notifikasi
        return redirect('data-serp_system')->with('success', 'Data Berhasil DiImpor!');
 
    }

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
