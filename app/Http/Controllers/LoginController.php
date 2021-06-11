<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request) {
        // dd($request->all());
        $request->validate([
            'user_nid'=>'required','confirmed',
            'password'=>'required','confirmed'
        ]);
        
        if (Auth::attempt($request->only('user_nid','password'))){
            return redirect('/beranda')->with('success', 'Berhasil Login !');
        }
        
        return back()->with('warning', 'Username Atau Password Salah !');
    }
        
 
    public function logout (Request $request) {
        Auth::logout();
            return redirect('/login')->with('info', 'Berhasil Logout !');
        }

    }