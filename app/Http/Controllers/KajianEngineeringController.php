<?php

namespace App\Http\Controllers;

use App\Models\KajianEngineering;
use App\Models\Urgensi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KajianEngineeringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kajian = KajianEngineering::orderBy('created_at','desc')->get();
        
        return view('KAJIAN.data-kajian', compact('kajian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $r= rand('001','999');
        date_default_timezone_set('Asia/Jakarta');
        $kajianno=  '/KajianEngineering/'.date('d/M/Y');
        $data = Auth::user()->fungsi_id;
        $spv = User::where('role_id','3')->get();
        $disposisistaffso = User::where('fungsi_id',$data)->where('role_id','5')->get();
        
        return view ('KAJIAN.create-kajian',compact('kajianno','r','spv','disposisistaffso'));
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
            'kajian_spv'=>'required',
            'kajian_requester'=>'required',
            'kajian_judul'=>'required',
            'kajian_deskripsi'=>'required',
            'kajian_sumber_informasi'=>'required',
            'kajian_pihak_terlibat'=>'required',
            'kajian_disposisi_staff_so'=>'required',   

        ]);
        $file =$request->file('kajian_sumber_informasi'); 
            
            //mengambil nama file
            $nama_file      = $file->getClientOriginalName();
    
            //memindahkan file ke folder tujuan
            $file->move('kajian_sumber_informasi_files',$file->getClientOriginalName());


        
        

        KajianEngineering::create([
            'kajian_no' => $request->kajian_no,
            'kajian_spv' => $request->kajian_spv,
            'kajian_requester' => $request->kajian_requester,
            'kajian_judul' => $request->kajian_judul,
            'kajian_deskripsi' => $request->kajian_deskripsi,
            'kajian_sumber_informasi' => 'kajian_sumber_informasi_files/'.$nama_file,
            'kajian_disposisi_staff_so' => $request->kajian_disposisi_staff_so,
            'kajian_pihak_terlibat' =>json_encode($request['kajian_pihak_terlibat']),
            'progres_kajian_id' => 1,
            'created_at' => date('Y-M-d H:i:s'),
            'updated_at' => date('Y-M-d H:i:s'),
            ]);

        
            return redirect('data-kajian')->with('success', 'Berhasil Membuat Identifikasi Awal Kajian Engineering !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KajianEngineering  $kajianEngineering
     * @return \Illuminate\Http\Response
     */
    public function show($kajian_no)
    {
        $kajian_no= str_replace('-','/',$kajian_no);
        $kajian = KajianEngineering::findOrFail($kajian_no);
        $pihak= KajianEngineering::select('kajian_pihak_terlibat')->get();
        return view ('KAJIAN.show-kajian', compact('kajian','pihak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KajianEngineering  $kajianEngineering
     * @return \Illuminate\Http\Response
     */
    public function edit(KajianEngineering $kajianEngineering)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KajianEngineering  $kajianEngineering
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KajianEngineering $kajianEngineering)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KajianEngineering  $kajianEngineering
     * @return \Illuminate\Http\Response
     */
    public function destroy($kajian_no)
    {
        $kajian_no= str_replace('-','/',$kajian_no);
        $kajian = KajianEngineering::findOrFail($kajian_no);
        $kajian->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }

    public function progres_kajianbyspv($kajian_no)
    {
        $kajian_no= str_replace('-','/',$kajian_no);
        try{
            KajianEngineering::where('kajian_no',$kajian_no)->update([
                'progres_kajian_id'=>2
            ]);
            return back()->with('success', 'Berhasil Didisposisikan ke STAFF SO');
        
            
        }catch (\Exception $e){
            return redirect('data-kajian')->with('info', 'Gagal Didisposisikan ke STAFF SO');
        }
        return redirect()->back();
    }
}
