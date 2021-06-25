<?php

namespace App\Http\Controllers;

use App\Models\Ecp;
use App\Models\User;
use App\Models\ECM_Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ECMReviewController extends Controller
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
          
        $ecm = ECM_Review::all();
        
        $user = User::all();
       
        
        return view('ECM.create-review',compact('ecm','user'));
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
            'ecm_review_alasan'=>'required'
        ]);
        ECM_Review::create($request->all());
        return redirect('data-ecp')->with('success', 'Berhasil Review ECP !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ECM_Review  $eCM_Review
     * @return \Illuminate\Http\Response
     */
    public function show(ECM_Review $eCM_Review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ECM_Review  $eCM_Review
     * @return \Illuminate\Http\Response
     */
    public function edit(ECM_Review $eCM_Review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ECM_Review  $eCM_Review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ECM_Review $eCM_Review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ECM_Review  $eCM_Review
     * @return \Illuminate\Http\Response
     */
    public function destroy(ECM_Review $eCM_Review)
    {
        //
    }
}
