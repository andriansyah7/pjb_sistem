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
       

        $approval1 = User::where('role_id',"3")->get();
        $approval2 = User::where('role_id',"2")->get();
        $data = Auth::user()->user_nid;
        $ecp = Ecp::where('ecp_approval_1',$data)->orderBy('created_at','desc')->get();
        return view('SPV.data-ecp-approval1', compact('approval1','approval2','ecp'));
    }
    
    public function ecpapproval2()
    {
        
        $approval1 = User::where('role_id',"3")->get();
        $approval2 = User::where('role_id',"2")->get();
        $data = Auth::user()->user_nid;
      
        if (Auth::user()->fungsi_id=='4') {
            $ecpapproval= Ecp::orderBy('created_at','desc')->get();
            return view('MANAGER.data-ecp-approval2', compact('approval1','approval2','ecpapproval'));
        }
            $ecpapproval = Ecp::where('ecp_approval_2',$data)->orderBy('created_at','desc')->get();
        return view('MANAGER.data-ecp-approval2', compact('approval1','approval2','ecpapproval'));
    }



    public function create()
    {
        $r= rand('001','999');
        date_default_timezone_set('Asia/Jakarta');
        $ecpno=  '/ECP/'.date('d/M/Y');
        $data = Auth::user()->fungsi_id;
        $data2 = Auth::user()->unit_id;
        $approval1 = User::where('fungsi_id',$data)->where('role_id','3')->get();
        $approval2 = User::where('unit_id',$data2)->where('role_id','2')->get();
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
            'progres_id' =>1,
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
    public function show($ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);
        $approval1 = User::where('role_id',"3")->get();
        $approval2 = User::where('role_id',"2")->get();
        $ecp = Ecp::findOrFail($ecp_no);
        return view ('ECP.show-ecp', compact('ecp','approval1','approval2','ecp_no'));
    }

    public function progres_spv($ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);
        try{
            Ecp::where('ecp_no',$ecp_no)->update([
                'progres_id'=>2
            ]);
            return redirect('create-spv')->with('success', 'Berhasil Merubah Progres ECP!');
            
        }catch (\Exception $e){
            return redirect('data-ecp-approval1')->with('info', 'Gagal Merubah Progres ECP');
        }
        return redirect()->back();
    }
    
    public function progres_manager($ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);
        try{
            Ecp::where('ecp_no',$ecp_no)->update([
                'progres_id'=>3
            ]);
            return redirect('create-manager')->with('success', 'Berhasil Merubah Progres ECP!');
            
        }catch (\Exception $e){
            return redirect('data-ecp-approval2')->with('info', 'Gagal Merubah Progres ECP');
        }
        return redirect()->back();
    }
    
    public function progres_notulen($ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);
        try{
            Ecp::where('ecp_no',$ecp_no)->update([
                'progres_id'=>4
            ]);
            return redirect('create-notulen')->with('success', 'Berhasil Merubah Progres ECP!');
            
        }catch (\Exception $e){
            return redirect('data-ecp')->with('info', 'Gagal Merubah Progres ECP');
        }
        return redirect()->back();
    }
    
    public function progres_tindaklanjut($ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);
        try{
            Ecp::where('ecp_no',$ecp_no)->update([
                'progres_id'=>5
            ]);
            return redirect('create-tindaklanjut')->with('success', 'Berhasil Merubah Progres ECP!');
            
        }catch (\Exception $e){
            return redirect('data-ecp')->with('info', 'Gagal Merubah Progres ECP');
        }
        return redirect()->back();
    }

    public function progres_meqa($ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);
        try{
            Ecp::where('ecp_no',$ecp_no)->update([
                'progres_id'=>8
            ]);
            return redirect('create-meqa')->with('success', 'Berhasil Merubah Progres ECP !');
            
        }catch (\Exception $e){
            return redirect('data-ecp')->with('info', 'Gagal Merubah Progres ECP');
        }
        return redirect()->back();
    }
    
    public function reject_meqa($ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);
        try{
            Ecp::where('ecp_no',$ecp_no)->update([
                'progres_id'=>9
            ]);
            return redirect('create-meqa')->with('success', 'Berhasil Merubah Progres ECP!');
            
        }catch (\Exception $e){
            return redirect('data-ecp')->with('info', 'Gagal Merubah Progres ECP');
        }
        return redirect()->back();
    }

    public function signoff_meqa($ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);
        try{
            Ecp::where('ecp_no',$ecp_no)->update([
                'progres_id'=>10
            ]);
            return redirect('data-meqa')->with('success', 'Berhasil Sign Off ECP!');
            
        }catch (\Exception $e){
            return redirect('data-ecp')->with('info', 'Gagal Merubah Progres ECP');
        }
        return redirect()->back();
    }

    public function reject_spv($ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);
        try{
            Ecp::where('ecp_no',$ecp_no)->update([
                'progres_id'=>6
            ]);
            return redirect('create-spv')->with('success', 'Berhasil Merubah Progres ECP!');
            
        }catch (\Exception $e){
            return redirect('data-ecp')->with('info', 'Gagal Merubah Progres ECP');
        }
        return redirect()->back();
    }
    
    public function reject_manager($ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);
        try{
            Ecp::where('ecp_no',$ecp_no)->update([
                'progres_id'=>7
            ]);
            return redirect('create-manager')->with('success', 'Berhasil Merubah Progres ECP!');
            
        }catch (\Exception $e){
            return redirect('data-ecp')->with('info', 'Gagal Merubah Progres ECP');
        }
        return redirect()->back();
    }

    public function edit( $ecp_no)
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
    public function update(Request $request,$ecp_no)
    {
        $ecp_no= str_replace('-','/',$ecp_no);

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
            
            ]);

        return redirect('data-ecp')->with('success', 'Data Berhasil Diupdate!');
    }


    public function destroy($ecp_no)
    { 
        $ecp_no= str_replace('-','/',$ecp_no);
        $ecp = Ecp::findOrFail($ecp_no);
        $ecp->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }

    public function cetakWord($ecp_no)
    {
        $ecp_no = str_replace('-','/',$ecp_no);
        $ecp = Ecp::where('ecp.ecp_no',$ecp_no)->leftJoin('spv_approval','ecp.ecp_no','=','spv_approval.ecp_no')->leftJoin('manager_approval','ecp.ecp_no','=','manager_approval.ecp_no')->first();
        // dd($ecp);
        $wordTest = new \PhpOffice\PhpWord\PhpWord();
        $user = User::findOrFail($ecp->user_nid);
        $spv = User::findOrFail($ecp->ecp_approval_1);
        $manager = User::findOrFail($ecp->ecp_approval_2);
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('EcpForm.docx'));

        $templateProcessor->setValue('ecp_no', $ecp->ecp_no);
        $templateProcessor->setValue('ecp_deskripsi', $ecp->ecp_deskripsi);
        $templateProcessor->setValue('ecp_desktambahan', $ecp->ecp_desktambahan);
        $templateProcessor->setValue('ecp_alasan', $ecp->ecp_alasan);
        $templateProcessor->setValue('user_nid', $user->user_name);
        $templateProcessor->setValue('alasan_spv', $ecp->spv_approval_alasan);
        $templateProcessor->setValue('alasan_manager', $ecp->manager_approval_alasan);
        $templateProcessor->setValue('nama_spv', $spv->user_name);
        $templateProcessor->setValue('nama_manager', $manager->user_name);
        $templateProcessor->setValue('created_at',date('d M Y',strtotime($ecp->created_at)));


        $templateProcessor->saveAs('EcpForm1.docx');
        
        return response()->download(public_path('EcpForm1.docx'));
    }
}
