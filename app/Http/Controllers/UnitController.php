<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
   
    public function index()
    {
        $unit = Unit::orderBy('unit_id','asc')->get();
        return view('UNIT.data-unit',compact('unit'));
    }

   
    public function create()
    {
        $unit = Unit::all();
        
        return view('UNIT.create-unit',compact ('unit'));
    }

 
    public function store(Request $request)
    {
        $request->validate([
            
            'unit_name'=>'required',
            
        ]);

        $unit=$request->except(['_token']);
        $unit['created_at']= date('Y-m-d H:i:s');
        $unit['updated_at']= date('Y-m-d H:i:s');

        Unit::insert($unit);
        return redirect('data-unit')->with('success', 'Data Berhasil Tersimpan!');
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
    public function edit(Unit $unit)
    {
       
        return view('UNIT.edit-unit',compact('unit'));
    }


    public function update(Request $request,Unit $unit)
    {
        
        
        Unit::where('unit_id',$unit->unit_id)
        ->update([
            'unit_name'=>$request->unit_name,
        ]);
     
        return redirect('data-unit')->with('success', 'Data Berhasil Terupdate!');
    }

    
    public function destroy($unit_id)
    {
        $unt = Unit::findOrFail($unit_id);
        $unt->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
}
