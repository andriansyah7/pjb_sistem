<?php

namespace App\Http\Controllers;

use App\Models\Serp_Pic;
use Illuminate\Http\Request;

class SerpPicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serp_pic = Serp_Pic::orderBy('serp_pic_name','asc')->get();
        return view('SERP_PIC.data-serp_pic',compact('serp_pic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serp_pic = Serp_Pic::orderBy('serp_pic_name','asc')->get();
        return view('SERP_PIC.create-serp_pic',compact('serp_pic'));
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
            
            'serp_pic_id'=>'required',
            'serp_pic_name'=>'required',
            
        ]);

        $data=$request->except(['_token']);
        $data['created_at']= date('Y-m-d H:i:s');
        $data['updated_at']= date('Y-m-d H:i:s');

        Serp_Pic::insert($data);
        return redirect('data-serp_pic')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serp_Pic  $serp_Pic
     * @return \Illuminate\Http\Response
     */
    public function show(Serp_Pic $serp_Pic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serp_Pic  $serp_Pic
     * @return \Illuminate\Http\Response
     */
    public function edit(Serp_Pic $serp_pic)
    {
        return view('SERP_PIC.edit-serp_pic',compact('serp_pic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serp_Pic  $serp_Pic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serp_Pic $serp_pic)
    {
        Serp_Pic::where('serp_pic_id',$serp_pic->serp_pic_id)
        ->update([
            'serp_pic_id'=>$request->serp_pic_id,
            'serp_pic_name'=>$request->serp_pic_name,
        ]);
     
        return redirect('data-serp_pic')->with('success', 'Data Berhasil Terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serp_Pic  $serp_Pic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serp_Pic $serp_Pic)
    {
        //
    }
}
