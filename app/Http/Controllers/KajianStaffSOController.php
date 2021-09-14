<?php

namespace App\Http\Controllers;

use App\Models\KajianEngineering;
use App\Models\KajianStaffSO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KajianStaffSOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Auth::user()->user_nid;
        $nama = Auth::user()->user_name;
        $staffso = KajianEngineering::where('kajian_disposisi_staff_so',$data)->orderBy('created_at','desc')->get();
        $jumlah = KajianEngineering::where('kajian_disposisi_staff_so',$data)->where('progres_kajian_id','2')->orderBy('created_at','desc')->count();
        
        return view('KAJIAN_STAFF_SO.data-disposisi-staffso', compact('staffso','data','nama','jumlah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'kajian_no'=>'required',
            'kajian_judul'=>'required',
            'kajian_nama_staff'=>'required',
            'kajian_analisa'=>'required',
            'kajian_file'=>'required',
              
        ]);     

            $file =$request->file('kajian_file'); 
            
            //mengambil nama file
            $nama_file      = $file->getClientOriginalName();
    
            //memindahkan file ke folder tujuan
            $file->move('kajian_files',$file->getClientOriginalName());


        KajianStaffSO::create([
            'kajian_no' => $request->kajian_no,
            'kajian_judul' => $request->kajian_judul,
            'kajian_nama_staff' => $request->kajian_nama_staff,
            'kajian_analisa' => $request->kajian_analisa,
            'kajian_file' => 'kajian_files/'.$nama_file,
            'created_at' => date('Y-M-d H:i:s'),
            'updated_at' => date('Y-M-d H:i:s'),
            ]);

        
            return redirect('data-kajian')->with('success', 'Berhasil Membuat Kajian Engineering !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KajianStaffSO  $kajianStaffSO
     * @return \Illuminate\Http\Response
     */
    public function show(KajianStaffSO $kajianStaffSO)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KajianStaffSO  $kajianStaffSO
     * @return \Illuminate\Http\Response
     */
    public function edit(KajianStaffSO $kajianStaffSO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KajianStaffSO  $kajianStaffSO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KajianStaffSO $kajianStaffSO)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KajianStaffSO  $kajianStaffSO
     * @return \Illuminate\Http\Response
     */
    public function destroy(KajianStaffSO $kajianStaffSO)
    {
        //
    }
}
