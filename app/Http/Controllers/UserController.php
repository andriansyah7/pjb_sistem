<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jabatan;
use App\Models\Unit;
use App\Models\Fungsi;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        $unit = Unit::all();
        $fungsi = Fungsi::all();
        $roles = Role::all();
        $user = User::orderBy('created_at','asc')->get();
        return view('USER.data-user',compact('user','jabatan','roles','fungsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        $roles = Role::all();
        $unit['data'] = Unit::orderby("unit_id","asc")
        			   ->select('unit_id','unit_name')
        			   ->get();
        return view('USER.create-user',compact ('jabatan','roles','unit'));

    }

    public function getfungsi($unit_id=0)
    {
        $fungsi['data'] = Fungsi::orderby("fungsi_name","asc")
        ->select('fungsi_id','fungsi_name')
        ->where('unit_id',$unit_id)
        ->get();

        return response()->json($fungsi);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'user_nid'=>'required',
            'user_name'=>'required',
            'jabatan_id'=>'required',
            'unit_id'=>'required',
            'role_id'=>'required',
            
            'password'=>'required'
        ]);
        $password = Hash::make($request->password);
        User::create([
        'user_nid' => $request->user_nid,
        'user_name' => $request->user_name,
        'jabatan_id' => $request->jabatan_id,
        'unit_id' => $request->unit_id,
        'role_id' => $request->role_id,
        'fungsi_id' => $request->fungsi_id,
        'user_email' => $request->user_email,
        'password' => $password,
        'created_at' => date('Y-M-d H:i:s'),
        'updated_at' => date('Y-M-d H:i:s'),
        ]);
        return redirect('data-user')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

  
    public function edit(User $user)
    {
        $jabatan = Jabatan::get();
        $roles = Role::get();
        $unit = Unit::get();
        $fungsi = Fungsi::get();
        return view('USER.edit-user',compact('jabatan','roles','user','unit','fungsi'));
    }

    public function update(Request $request,User $user)
    {
        $request->validate([
            'user_nid'=>'required',
            'user_name'=>'required',
            'jabatan_id'=>'required',
            'unit_id'=>'required',
            'role_id'=>'required',
            
            'password'=>'required'
        ]);
        
        
        $password = Hash::make($request->password);
        

       
        User::where('user_nid',$user->user_nid)
        ->update([
            'user_nid' => $request->user_nid,
            'user_name' => $request->user_name,
            'jabatan_id' => $request->jabatan_id,
            'unit_id' => $request->unit_id,
            'fungsi_id' => $request->fungsi_id,
            'role_id' => $request->role_id,
            'user_email' => $request->user_email,
            'password' => $password,
            ]);

        return redirect('data-user')->with('success', 'Data Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_nid)
    {
        $user = User::findOrFail($user_nid);
        $user->delete();
        return back()->with('info', 'Data Berhasil Terhapus');
    }
}
