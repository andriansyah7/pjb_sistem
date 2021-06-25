<?php

namespace App\Http\Controllers;

use App\Models\Meqa_approval;
use App\Models\Status_ecp;
use App\Models\User;
use App\Models\Ecp;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MeqaApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       
        $spv = User::where('unit_id','1')->where('role_id','3')->get();
        return view ('MEQA_APPROVE.create-approval',compact('spv'));
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
            'spv_so'=>'required',
            'status_ecp_id'=>'required',
            'meqa_approval_alasan'=>'required'
        ]);
        MEQA_approval::create($request->all());
        return redirect('data-ecp')->with('success', 'Berhasil Membuat Approval !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meqa_approval  $meqa_approval
     * @return \Illuminate\Http\Response
     */
    public function show(Meqa_approval $meqa_approval)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meqa_approval  $meqa_approval
     * @return \Illuminate\Http\Response
     */
    public function edit(Meqa_approval $meqa_approval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meqa_approval  $meqa_approval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meqa_approval $meqa_approval)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meqa_approval  $meqa_approval
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meqa_approval $meqa_approval)
    {
        //
    }
}
