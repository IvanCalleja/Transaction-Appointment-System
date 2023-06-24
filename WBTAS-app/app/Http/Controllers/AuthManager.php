<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login(){
    return view('login'); 
    }

    function registration(){
    return view('registration'); 
    }

    function loginPost(Request $request){
        $request->validate([
        'email' => 'required',
        'password' => 'required'

        ]);
    }

}