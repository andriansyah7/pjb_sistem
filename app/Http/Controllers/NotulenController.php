<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ecp;
use App\Models\Fungsi;
use App\Models\Notulen;

class NotulenController extends Controller
{
    
    public function index()
    {
        $notulen = Notulen::orderBy('created_at','desc')->get();
        $ecp = Ecp::all();
        $user = User::all();
        return view('NOTULEN.data-notulen',compact('notulen','ecp','user'));
    }

    
    public function create()
    {
        $notulen = Notulen::all();
        $ecp = Ecp::all();
        $user = User::all();
        $pimpinan = User::where('role_id',"3")->get();
        return view('NOTULEN.create-notulen',compact('notulen','ecp','user','pimpinan'));
    
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
        'notulen_pimpinan_rapat'=>'required',
        'notulen_notulis'=>'required',
        'notulen_tanggal'=>'required',
        'notulen_waktu'=>'required',
        'notulen_tempat'=>'required',
        'notulen_rapat'=>'required',
        'notulen_agenda'=>'required',
        'notulen_peserta'=>'required',
        ]);

        $notulen=$request->except(['_token']);
        $notulen['notulen_tanggal']= date('Y-m-d');
        $notulen['created_at']= date('Y-m-d H:i:s');
        $notulen['updated_at']= date('Y-m-d H:i:s');

        Notulen::insert($notulen);
        return redirect('data-notulen')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Notulen $notulen)
    {
        $ecp = Ecp::all();
        $user = User::all();
        $pimpinan = User::where('role_id',"3")->get();
        return view('NOTULEN.show-notulen',compact('notulen','ecp','user','pimpinan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Notulen $notulen)
    {
        $ecp= Ecp::all();
        $user= User::all();
        $pimpinan = User::where('role_id',"3")->get();
        return view('NOTULEN.edit-notulen',compact('notulen','ecp','user','pimpinan'));
    }

    
    public function update(Request $request,Notulen $notulen)
    {
        $request->validate([
            'notulen_pimpinan_rapat'=>'required',
            'notulen_notulis'=>'required',
            'notulen_tanggal'=>'required',
            'notulen_waktu'=>'required',
            'notulen_tempat'=>'required',
            'notulen_rapat'=>'required',
            'notulen_agenda'=>'required',
            'notulen_peserta'=>'required',
            ]);

            $data=$request->except(['_token','_method']);
            $data['notulen_tanggal']= date('Y-m-d');
            $data['created_at']= date('Y-m-d H:i:s');
            $data['updated_at']= date('Y-m-d H:i:s');

            Notulen::where('notulen_id',$notulen->notulen_id)->update($data);
            return redirect('data-notulen')->with('success', 'Data Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($notulen_id)
    {
        $notulen = Notulen::findOrFail($notulen_id);
        $notulen->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }

    public function cetaknotulen($notulen_id)
    {
        $wordTest = new \PhpOffice\PhpWord\PhpWord();
        $notulen = Notulen::findOrFail($notulen_id);
        
     
        $user = User::findOrFail($notulen->notulen_pimpinan_rapat);
        $user2 = User::findOrFail($notulen->notulen_notulis);
        
        // dd($cmt);
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('NotulenForm.docx'));

       
        $templateProcessor->setValue('notulen_pimpinan_rapat', $user->user_name);
        $templateProcessor->setValue('notulen_tanggal',date('d M Y',strtotime ($notulen->notulen_tanggal)));
        $templateProcessor->setValue('notulen_waktu', $notulen->notulen_waktu);
        $templateProcessor->setValue('notulen_tempat', $notulen->notulen_tempat);
        $templateProcessor->setValue('notulen_rapat', $notulen->notulen_rapat);
        $templateProcessor->setValue('notulen_agenda', $notulen->notulen_agenda);
        $templateProcessor->setValue('notulen_peserta', $notulen->notulen_peserta);
        $templateProcessor->setValue('notulen_pembahasan', $notulen->notulen_pembahasan);
        $templateProcessor->setValue('notulen_permasalahan', $notulen->notulen_permasalahan);
        $templateProcessor->setValue('notulen_hasil_pembahasan', $notulen->notulen_hasil_pembahasan);
        $templateProcessor->setValue('notulen_notulis', $user2->user_name);

        $templateProcessor->saveAs('NotulenForm1.docx');
        
        return response()->download(public_path('NotulenForm1.docx'));
    }
}
