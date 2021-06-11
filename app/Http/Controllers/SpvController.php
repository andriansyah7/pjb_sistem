<?php

namespace App\Http\Controllers;

use App\Models\Ecp;
use Illuminate\Http\Request;
use App\Models\Spv_approval;
use App\Models\Status_ecp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SpvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spv = Spv_approval::orderBy('created_at','desc')->get();
        $ecp = Ecp::all();
        $user = User::all();
        return view('SPV.data-spv',compact('spv','ecp','user'));
    }

   
   
    public function create()
    {
        $spv = Spv_approval::all();
        
        $user = User::all();
        $status = Status_ecp::all();
        $data = Auth::user()->user_nid;
        $ecpapproval = Ecp::where('ecp_approval_1',$data)->orderBy('created_at','asc')->get();
        return view('SPV.create-spv',compact('spv','user','ecpapproval','status'));
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
    public function show(Spv_approval $spv_approval)
    {
        
        return view ('SPV.show-spv', compact('spv_approval'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Spv_approval $spv_approval)
    {
        $ecp = Ecp::get();
        $user = User::get();
        $status = Status_ecp::get();
        
        return view('SPV.edit-spv',compact('ecp','user','status','spv_approval'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Spv_approval $spv_approval)
    {
        
        $request->validate([
            'ecp_no'=>'required',
            'user_nid'=>'required',
            'status_ecp_id'=>'required',
            'spv_approval_alasan'=>'required'
        ]);

        Spv_approval::where('spv_approval_id',$spv_approval->spv_approval_id)
        ->update([
            'ecp_no' => $request->ecp_no,
            'user_nid' => $request->user_nid,
            'status_ecp_id' => $request->status_ecp_id,
            'spv_approval_alasan' => $request->spv_approval_alasan,
        ]);
        
        return redirect('data-spv')->with('success', 'Data Berhasil Diupdate !');
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

    public function cetakdoc($spv_approval_id)
    {
        $spv = Spv_Approval::findOrFail($spv_approval_id);
       
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('EcpForm.docx'));

        $templateProcessor->setValue('alasan_spv', $spv->spv_approval_alasan);

        $templateProcessor->saveAs('EcpForm1.docx');
        
        return response()->download(public_path('EcpForm1.docx'));
    }
}
