<?php

namespace App\Http\Controllers;
use App\Models\Ecp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EcpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecp = Ecp::orderBy('created_at','desc')->get();
        $approval1 = User::where('role_id',"3")->get();
        $approval2 = User::where('role_id',"2")->get();
        return view('ECP.data-ecp', compact('ecp','approval1','approval2'));
    }

    public function ecpapproval()
    {
        $ecp = Ecp::orderBy('created_at','asc')->get();
        $approval1 = User::where('role_id',"3")->get();
        $approval2 = User::where('role_id',"2")->get();
        $ecpapproval = Ecp::all();
        return view('SPV.data-ecp-approval1', compact('ecp','approval1','approval2','ecpapproval'));
    }
    
    public function ecpapproval2()
    {
        $ecp = Ecp::orderBy('created_at','asc')->get();
        $approval1 = User::where('role_id',"3")->get();
        $approval2 = User::where('role_id',"2")->get();
        $ecpapproval = Ecp::all();
        return view('MANAGER.data-ecp-approval2', compact('ecp','approval1','approval2','ecpapproval'));
    }

    public function create()
    {
        $r= rand('001','999');
        $ecpno=  '/ECP/'.date('d/M/Y');
        $approval1 = User::where('role_id',"3")->get();
        $approval2 = User::where('role_id',"2")->get();
        return view ('ECP.create-ecp',compact('ecpno','r','approval1','approval2'));
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
            'ecp_deskripsi'=>'required',
            'ecp_desktambahan'=>'required',
            'ecp_alasan'=>'required',
            'ecp_approval_1'=>'required',
            'ecp_approval_2'=>'required',
            'ecp_file_pendukung'=>'required',
            

        ]);
        $file =$request->file('ecp_file_pendukung'); 
            
            //mengambil nama file
            $nama_file      = $file->getClientOriginalName();
    
            //memindahkan file ke folder tujuan
            $file->move('ecp_files',$file->getClientOriginalName());
        
        

        Ecp::create([
            'ecp_no' => $request->ecp_no,
            'user_nid' => $request->user_nid,
            'ecp_deskripsi' => $request->ecp_deskripsi,
            'ecp_desktambahan' => $request->ecp_desktambahan,
            'ecp_alasan' => $request->ecp_alasan,
            'ecp_approval_1' => $request->ecp_approval_1,
            'ecp_approval_2' => $request->ecp_approval_2,
            'ecp_file_pendukung' => 'ecp_files/'.$nama_file,
            'created_at' => date('Y-M-d H:i:s'),
            'updated_at' => date('Y-M-d H:i:s'),
            ]);

        

        return redirect('data-ecp')->with('success', 'Berhasil Mengajukan ECP !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ecp = Ecp::findOrFail($id);
        return view ('ECP.show-ecp', compact('ecp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ecp_no)
    {
        $approval1 = User::where('role_id',"3")->get();
        $approval2 = User::where('role_id',"2")->get();
        $ecp_no= str_replace('-','/',$ecp_no);
        $ecp = Ecp::findOrFail($ecp_no);
        return view('ECP.edit-ecp', compact('ecp','approval1','approval2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ecp_no)
    {
        $request->validate([
            'ecp_no'=>'required',
            'user_nid'=>'required',
            'ecp_deskripsi'=>'required',
            'ecp_desktambahan'=>'required',
            'ecp_alasan'=>'required',
            'ecp_approval_1'=>'required',
            'ecp_approval_2'=>'required',
            'ecp_file_pendukung'=>'required',
            

        ]);
        $file =$request->file('ecp_file_pendukung'); 
            
            //mengambil nama file
            $nama_file      = $file->getClientOriginalName();
    
            //memindahkan file ke folder tujuan
            $file->move('ecp_files',$file->getClientOriginalName());
        
        
            
        Ecp::where('ecp_no',$ecp_no)
        ->update([
            'ecp_no' => $request->ecp_no,
            'user_nid' => $request->user_nid,
            'ecp_deskripsi' => $request->ecp_deskripsi,
            'ecp_desktambahan' => $request->ecp_desktambahan,
            'ecp_alasan' => $request->ecp_alasan,
            'ecp_approval_1' => $request->ecp_approval_1,
            'ecp_approval_2' => $request->ecp_approval_2,
            'ecp_file_pendukung' => 'ecp_files/'.$nama_file,
            'created_at' => date('Y-M-d H:i:s'),
            'updated_at' => date('Y-M-d H:i:s'),
            ]);

        return redirect('data-ecp')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ecp_no)
    {
        $ecp = Ecp::findOrFail($ecp_no);
        $ecp->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }
}
