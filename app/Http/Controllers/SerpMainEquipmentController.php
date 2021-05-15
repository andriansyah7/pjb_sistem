<?php

namespace App\Http\Controllers;

use App\Models\Serp_System;
use App\Models\Serp_Main_Equipment;
use App\Models\Serp_Pic;
use Illuminate\Http\Request;

class SerpMainEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serp_system = Serp_System::all();
        $serp_main = Serp_Main_Equipment::all();
        return view('SERP_MAIN.data-serp_main',compact('serp_system','serp_main'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serp_system = Serp_System::all();
        $serp_pic = Serp_Pic::all();
        $serp_main = Serp_Main_Equipment::all();
        return view('SERP_MAIN.create-serp_main',compact('serp_system','serp_main','serp_pic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serp_Main_Equipment  $serp_Main_Equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Serp_Main_Equipment $serp_Main_Equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serp_Main_Equipment  $serp_Main_Equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Serp_Main_Equipment $serp_Main_Equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serp_Main_Equipment  $serp_Main_Equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serp_Main_Equipment $serp_Main_Equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serp_Main_Equipment  $serp_Main_Equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serp_Main_Equipment $serp_Main_Equipment)
    {
        //
    }
}
