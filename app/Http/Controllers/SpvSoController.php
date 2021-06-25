<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Ecp;
use App\Models\Spv_so;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SpvSoController extends Controller
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
        if (Auth::user()->fungsi_id=='1') {
           
            $staff = User::where('fungsi_id','1')->where('role_id','5')->get();
            }
            elseif (Auth::user()->fungsi_id=='2') {
                $staff = User::where('fungsi_id','2')->where('role_id','5')->get();
            }
        return view ('SPV.create-spv_so',compact('spv'));
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
            'staff_so'=>'required',
        
            'spv_so_review'=>'required'
        ]);
        Spv_so::create($request->all());
        return redirect('data-ecp')->with('success', 'Berhasil Membuat Approval !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spv_so  $spv_so
     * @return \Illuminate\Http\Response
     */
    public function show(Spv_so $spv_so)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spv_so  $spv_so
     * @return \Illuminate\Http\Response
     */
    public function edit(Spv_so $spv_so)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spv_so  $spv_so
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spv_so $spv_so)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spv_so  $spv_so
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spv_so $spv_so)
    {
        //
    }
}
