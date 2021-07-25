<?php

namespace App\Http\Controllers;

use App\Models\HistorySerp;
use App\Models\Serp_Main_Equipment;
use App\Models\Serp_Pic;
use App\Models\Serp_System;
use Illuminate\Http\Request;

class HistorySerpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serp_system = Serp_System::all();
        $serp_main = HistorySerp::orderBy('MPI','desc')->get();
        $pic = Serp_Pic::all();
        return view('SERP_MAIN.data-serp_history',compact('serp_system','serp_main','pic'));
    }

    
    public function search(Request $request)
    { 
        $serp_system = Serp_System::all();
        $pic = Serp_Pic::all();
        $serp_pic_id = $request->get('serp_pic_id');

        if ($serp_pic_id=="A")
        {
            $serp_main = HistorySerp::orderBy('MPI','desc')->get();
        }
        else
        {
            $serp_main = HistorySerp::where('serp_pic_id',$request->get('serp_pic_id'))->orderBy('MPI','desc')->get();
        }
        return view('SERP_MAIN.data-serp_history',compact('serp_system','serp_main','pic'));
    }

    public function create()
    {
        $serp_system = Serp_System::all();
        $serp_main = Serp_Main_Equipment::orderBy('MPI','desc')->get();
        $serp_array = Serp_Main_Equipment::orderBy('MPI','desc')->get()->toarray();
        $array= [$serp_array];

        $pic = Serp_Pic::all();
        
        return view('SERP_MAIN.data-serp_main',compact('serp_system','serp_main','pic'));
    }

    public function store(Serp_Main_Equipment $serp)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistorySerp  $historySerp
     * @return \Illuminate\Http\Response
     */
    public function show(HistorySerp $historySerp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistorySerp  $historySerp
     * @return \Illuminate\Http\Response
     */
    public function edit(Serp_Main_Equipment $serp_main_equipment)
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $history=  date('Y');
        $serp_system = Serp_System::all();
        $serp_pic = Serp_Pic::all();
        return view('SERP_MAIN.buat-serp_history',compact('serp_main_equipment','serp_system','serp_pic','history'));
    }

  
    public function update(Request $request)
    {
        $request->validate([
            'history_serp_tahun'=>'required',
            'serp_main_equipment_id'=>'required',
            'serp_main_equipment_name'=>'required',
            'serp_system_id'=>'required',
            'OC'=>'required',
            'PT'=>'required',
            'PQ'=>'required',
            'RC'=>'required',
            'PE'=>'required',
            'RT'=>'required',
            'serp_pic_id'=>'required',
            'serp_main_equipment_keterangan'=>'required',
        ]);
        
       

        $oc=$request->OC;
        $pt=$request->PT;
        $pq=$request->PQ;
        $sf=$request->SF;
        $rc=$request->RC;
        $pe=$request->PE;
        $rt=$request->RT;
        $ocr=$request->OCR;
        $afpf=$request->AFPF;
        $scr=pow((pow($oc,2)+pow($pt,2)+pow($pq,2)+pow($sf,2)+pow($rc,2)+pow($pe,2)+pow($rt,2))/7,0.5);
        $acr=$scr*$ocr;
        $mpi=$acr*$afpf;
        
        HistorySerp::create([
            'history_serp_tahun' => $request->history_serp_tahun,
            'serp_main_equipment_id' => $request->serp_main_equipment_id,
            'serp_main_equipment_name' => $request->serp_main_equipment_name,
            'serp_system_id' => $request->serp_system_id,
            'OC' => $request->OC,
            'PT' => $request->PT,
            'PQ' => $request->PQ,
            'SF' => $request->SF,
            'RC' => $request->RC,
            'PE' => $request->PE,
            'RT' => $request->RT,
            'SCR'=>$scr,
            'OCR'=>$request->OCR,
            'ACR'=>$acr,
            'AFPF'=>$request->AFPF,
            'MPI'=>$mpi,
            'serp_pic_id' => $request->serp_pic_id,
            'serp_main_equipment_keterangan' => $request->serp_main_equipment_keterangan,
            'created_at' => date('Y-M-d H:i:s'),
            'updated_at' => date('Y-M-d H:i:s'),
            ]);
        return redirect('data-serp_history')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistorySerp  $historySerp
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistorySerp $historySerp)
    {
        //
    }
}
