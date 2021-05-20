<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('login.index1');
    }

    public function login(Request $request){
        $credentials =$request->only('email', 'password');
        if(Auth::attempt($credentials, $request->has('remember'))){
            $request->session()->regenerate();

        return redirect()->intended('dashboard');
    }
        return back()->withErrors([
            'email' => 'The provided cridentials do not match database'
        ]);
    }
}
