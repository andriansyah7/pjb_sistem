<?php

namespace App\Http\Controllers;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
   
    public function index()
    {
        $jabatan = Jabatan::orderBy('jabatan_id','asc')->get();
        return view('JABATAN.data-jabatan',compact('jabatan'));
    }

   
    public function create()
    {
        $jabatan = Jabatan::all();
        
        return view('JABATAN.create-jabatan',compact ('jabatan'));
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
            
            'jabatan_name'=>'required',
            
        ]);

        $jabatan=$request->except(['_token']);
        $jabatan['created_at']= date('Y-m-d H:i:s');
        $jabatan['updated_at']= date('Y-m-d H:i:s');

        Jabatan::insert($jabatan);
        return redirect('data-jabatan')->with('success', 'Data Berhasil Tersimpan!');
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
    public function edit(Jabatan $jabatan)
    {
        
        return view('JABATAN.edit-jabatan',compact('jabatan'));
    }


    public function update(Request $request,Jabatan $jabatan)
    {
        
        
        Jabatan::where('jabatan_id',$jabatan->jabatan_id)
        ->update([
            'jabatan_name'=>$request->jabatan_name,
        ]);
        return redirect('data-jabatan')->with('success', 'Data Berhasil Terupdate!');
    }

    
    public function destroy($jabatan_id)
    {
        $jbt = Jabatan::findOrFail($jabatan_id);
        $jbt->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
}
