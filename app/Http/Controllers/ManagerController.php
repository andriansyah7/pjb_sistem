<?php

namespace App\Http\Controllers;

use App\Models\Ecp;
use Illuminate\Http\Request;
use App\Models\Manager_approval;
use App\Models\Status_ecp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mng = Manager_approval::all();
        $ecp = Ecp::all();
        $user = User::all();
        return view('MANAGER.data-mng',compact('mng','ecp','user'));
    }

   
   
    public function create()
    {
        $mng = Manager_approval::all();
        $user = User::all();
        $status = Status_ecp::all();
        $data = Auth::user()->user_nid;
        $ecpapproval = Ecp::where('ecp_approval_2',$data)->get();
        return view('MANAGER.create-mng',compact('mng','user','ecpapproval','status'));
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
            'manager_approval_alasan'=>'required'
        ]);
        Manager_approval::create($request->all());
        return redirect('data-manager')->with('success', 'Berhasil Membuat Approval !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($manager_approval_id)
    {
        $manager_approval = Manager_approval::findOrFail($manager_approval_id);
        return view ('MANAGER.show-mng', compact('manager_approval'));
    }

    public function edit(Manager_approval $manager_approval)
    {
        $ecp = Ecp::get();
        $user = User::get();
        $status = Status_ecp::get();
        
        return view('MANAGER.edit-mng',compact('ecp','user','status','manager_approval'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Manager_approval $manager_approval)
    {
        
        $request->validate([
            'ecp_no'=>'required',
            'user_nid'=>'required',
            'status_ecp_id'=>'required',
            'manager_approval_alasan'=>'required'
        ]);

        Manager_approval::where('manager_approval_id',$manager_approval->manager_approval_id)
        ->update([
            'ecp_no' => $request->ecp_no,
            'user_nid' => $request->user_nid,
            'status_ecp_id' => $request->status_ecp_id,
            'manager_approval_alasan' => $request->manager_approval_alasan,
        ]);
        
        return redirect('data-manager')->with('success', 'Data Berhasil Diupdate !');
    }

    public function destroy($manager_approval_id)
    {
        $mng = Manager_approval::findOrFail($manager_approval_id);
        $mng->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }

    public function cetakmng($manager_approval_id)
    {
        $manager = Manager_Approval::findOrFail($manager_approval_id);
       
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('EcpForm.docx'));

        $templateProcessor->setValue('alasan_manager', $manager->manager_approval_alasan);

        $templateProcessor->saveAs('EcpForm1.docx');
        
        return response()->download(public_path('EcpForm1.docx'));
    }
}
