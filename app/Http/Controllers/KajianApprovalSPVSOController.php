<?php

namespace App\Http\Controllers;

use App\Models\KajianApprovalSPVSO;
use Illuminate\Http\Request;

class KajianApprovalSPVSOController extends Controller
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
            'user_nid'=>'required',
            'status_kajian_id'=>'required',
            'spv_approval_alasan'=>'required'
        ]);
        KajianApprovalSPVSO::create($request->all());
        return redirect('data-kajian')->with('success', 'Berhasil Membuat Approval !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KajianApprovalSPVSO  $kajianApprovalSPVSO
     * @return \Illuminate\Http\Response
     */
    public function show(KajianApprovalSPVSO $kajianApprovalSPVSO)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KajianApprovalSPVSO  $kajianApprovalSPVSO
     * @return \Illuminate\Http\Response
     */
    public function edit(KajianApprovalSPVSO $kajianApprovalSPVSO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KajianApprovalSPVSO  $kajianApprovalSPVSO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KajianApprovalSPVSO $kajianApprovalSPVSO)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KajianApprovalSPVSO  $kajianApprovalSPVSO
     * @return \Illuminate\Http\Response
     */
    public function destroy(KajianApprovalSPVSO $kajianApprovalSPVSO)
    {
        //
    }
}
