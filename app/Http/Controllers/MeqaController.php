<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Ecp;
use App\Models\Status_ecp;
use App\Models\User;
use App\Models\Meqa;

class MeqaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meqa = Meqa::orderBy('created_at','desc')->get();
        $ecp = Ecp::all();
        $user = User::all();
        return view('MEQA.data-approvalMEQA',compact('meqa','ecp','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meqa = Meqa::all();
        $user = User::all();
        $status = Status_ecp::all();
        $data = Auth::user()->user_nid;
        $ecpapproval = Ecp::orderBy('created_at','desc')->get();
        return view('MEQA.create-meqa',compact('meqa','user','ecpapproval','status'));
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
            'ecp_no'=>'required',
            'user_nid'=>'required',
            'status_ecp_id'=>'required',
        ]);
            $dw1=$request->drawings1;
            $dw2=$request->drawings2;
            $dw3=$request->drawings3;
            $drawings=('Dibutuhkan : '.$dw1.' | Lengkap :'.$dw2.' | Nama :'.$dw3);

            $om1=$request->operating_manual1;
            $om2=$request->operating_manual2;
            $om3=$request->operating_manual3;
            $operating_manual=('Dibutuhkan : '.$om1.' | Lengkap :'.$om2.' | Nama :'.$om3);

            $SOP1=$request->SOP1;
            $SOP2=$request->SOP2;
            $SOP3=$request->SOP3;
            $SOP=('Dibutuhkan : '.$SOP1.' | Lengkap :'.$SOP2.' | Nama :'.$SOP3);

            $mm1=$request->maint_manual1;
            $mm2=$request->maint_manual2;
            $mm3=$request->maint_manual3;
            $maint_manual=('Dibutuhkan : '.$mm1.' | Lengkap :'.$mm2.' | Nama :'.$mm3);

            $pred1=$request->predictive_maint_schedules1;
            $pred2=$request->predictive_maint_schedules2;
            $pred3=$request->predictive_maint_schedules3;
            $predictive_maint_schedules=('Dibutuhkan : '.$pred1.' | Lengkap :'.$pred2.' | Nama :'.$pred3);
            
            $prev1=$request->preventative_maint_schedules1;
            $prev2=$request->preventative_maint_schedules2;
            $prev3=$request->preventative_maint_schedules3;
            $preventative_maint_schedules=('Dibutuhkan : '.$prev1.' | Lengkap :'.$prev2.' | Nama :'.$prev3);
            
            $MIMS1=$request->MIMS_equipment1;
            $MIMS2=$request->MIMS_equipment2;
            $MIMS3=$request->MIMS_equipment3;
            $MIMS_equipment=('Dibutuhkan : '.$MIMS1.' | Lengkap :'.$MIMS2.' | Nama :'.$MIMS3);
            
            $pcs1=$request->process_control_system1;
            $pcs2=$request->process_control_system2;
            $pcs3=$request->process_control_system3;
            $process_control_system=('Dibutuhkan : '.$pcs1.' | Lengkap :'.$pcs2.' | Nama :'.$pcs3);
            
            $bp1=$request->business_process1;
            $bp2=$request->business_process2;
            $bp3=$request->business_process3;
            $business_process=('Dibutuhkan : '.$bp1.' | Lengkap :'.$bp2.' | Nama :'.$bp3);

            Meqa::create([
                'ecp_no' => $request->ecp_no,
                'user_nid' => $request->user_nid,
                'status_ecp_id' => $request->status_ecp_id,
                'drawings' => $drawings,
                'operating_manual' => $operating_manual,
                'SOP' => $SOP,
                'maint_manual' => $maint_manual,
                'predictive_maint_schedules' => $predictive_maint_schedules,
                'preventative_maint_schedules' => $preventative_maint_schedules,
                'MIMS_equipment' => $MIMS_equipment,
                'process_control_system' => $process_control_system,
                'business_process' => $business_process,
                'created_at' => date('Y-M-d H:i:s'),
                'updated_at' => date('Y-M-d H:i:s'),
            ]);

            return redirect('data-meqa')->with('success', 'Berhasil Membuat Approval MEQA !');
                

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meqa  $meqa
     * @return \Illuminate\Http\Response
     */
    public function show($meqa_approval_id)
    {
        $meqa_approval = Meqa::findOrFail($meqa_approval_id);
        return view ('MEQA.show-meqa', compact('meqa_approval'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meqa  $meqa
     * @return \Illuminate\Http\Response
     */
    public function edit(Meqa $meqa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meqa  $meqa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meqa $meqa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meqa  $meqa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meqa $meqa)
    {
        //
    }
}
