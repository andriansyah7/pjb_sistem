<?php

namespace App\Http\Controllers;
use App\Models\Fungsi;
use App\Models\Unit;
use Illuminate\Http\Request;

class FungsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit = Unit::all();
        $fungsi = Fungsi::orderBy('fungsi_name','asc')->get();
        return view('FUNGSI.data-fungsi',compact('unit','fungsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unit = Unit::all();
        $fungsi = Fungsi::all();
        return view('FUNGSI.create-fungsi',compact('unit','fungsi'));
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
            'unit_id'=>'required',
            'fungsi_name'=>'required',
        ]);
        Fungsi::create([
            'unit_id' => $request->unit_id,
            'fungsi_name' => $request->fungsi_name,
            'created_at' => date('Y-M-d H:i:s'),
            'updated_at' => date('Y-M-d H:i:s'),
            ]);
        return redirect('data-fungsi')->with('success', 'Data Berhasil Tersimpan!');
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
    public function edit(Fungsi $fungsi)
    {
        $unit= Unit::get();
        return view('FUNGSI.edit-fungsi',compact('fungsi','unit'));
    }


    public function update(Request $request,Fungsi $fungsi)
    {
        
        
        Fungsi::where('fungsi_id',$fungsi->fungsi_id)
        ->update([
            'unit_id'=>$request->unit_id,
            'fungsi_name'=>$request->fungsi_name,
        ]);
        return redirect('data-fungsi')->with('success', 'Data Berhasil Terupdate!');
    }
    public function destroy($fungsi_id)
    {
            $fungsi = Fungsi::findOrFail($fungsi_id);
            $fungsi->delete();
            return back()->with('info', 'Data Berhasil Terhapus');
       
    }
}
