<?php

namespace App\Http\Controllers;

use App\Models\Ecp;
use Illuminate\Http\Request;
use App\Models\Manager_approval;
use App\Models\Status_ecp;
use App\Models\User;

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
        $ecp = Ecp::all();
        $user = User::all();
        $status = Status_ecp::all();
        $ecpapproval = Ecp::all();
        return view('MANAGER.create-mng',compact('mng','ecp','user','ecpapproval','status'));
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
        $mng = Manager_approval::findOrFail($manager_approval_id);
        return view ('MANAGER.show-manager', compact('mng'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($manager_approval_id)
    {
        $mng = Manager_approval::all();
        $ecp = Ecp::all();
        $user = User::all();
        $status = Status_ecp::all();
        $ecpapproval = Ecp::where('ecp_approval_2',"987654321B")->get();
        $mng = Manager_approval::findOrFail($manager_approval_id);
        return view('MANAGER.edit-mng',compact('mng','ecp','user','ecpapproval','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $manager_approval_id)
    {
        $request->validate([
            'ecp_no'=>'required',
            'user_nid'=>'required',
            'status_ecp_id'=>'required',
            'spv_approval_alasan'=>'required'
        ]);

        $mng = Manager_approval::findOrFail($manager_approval_id);
        $mng->update($request->all());
        return redirect('data-manager')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($manager_approval_id)
    {
        $mng = Manager_approval::findOrFail($manager_approval_id);
        $mng->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }
}
