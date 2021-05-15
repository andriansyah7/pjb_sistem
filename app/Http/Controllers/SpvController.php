<?php

namespace App\Http\Controllers;

use App\Models\Ecp;
use Illuminate\Http\Request;
use App\Models\Spv_approval;
use App\Models\Status_ecp;
use App\Models\User;

class SpvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spv = Spv_approval::all();
        $ecp = Ecp::all();
        $user = User::all();
        return view('SPV.data-spv',compact('spv','ecp','user'));
    }

   
   
    public function create()
    {
        $spv = Spv_approval::all();
        $ecp = Ecp::all();
        $user = User::all();
        $status = Status_ecp::all();
        $ecpapproval = Ecp::all();
        return view('SPV.create-spv',compact('spv','ecp','user','ecpapproval','status'));
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
            'spv_approval_alasan'=>'required'
        ]);
        Spv_approval::create($request->all());
        return redirect('data-spv')->with('success', 'Berhasil Membuat Approval !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spv = Spv_approval::findOrFail($id);
        return view ('SPV.show-spv', compact('spv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($spv_approval_id)
    {
        $spv = Spv_approval::all();
        $ecp = Ecp::all();
        $user = User::all();
        $status = Status_ecp::all();
        $ecpapproval = Ecp::where('ecp_approval_1',"12345678ZZ")->get();
        $spv = Spv_approval::findOrFail($spv_approval_id);
        return view('SPV.edit-spv',compact('spv','ecp','user','ecpapproval','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $spv_approval_id)
    {
        $request->validate([
            'ecp_no'=>'required',
            'user_nid'=>'required',
            'status_ecp_id'=>'required',
            'spv_approval_alasan'=>'required'
        ]);

        $spv = Spv_approval::findOrFail($spv_approval_id);
        $spv->update($request->all());
        return redirect('data-spv')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($spv_approval_id)
    {
        $spv = Spv_approval::findOrFail($spv_approval_id);
        $spv->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }
}
