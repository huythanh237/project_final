<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('login.index1');
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials, $request->has('remember'))){
            $request->session()->regenerate();

        return redirect()->intended('dashboard');
    }
        return back()->withErrors([
            'email' => 'Tài khoản hoặc mật khẩu không đúng'
        ]);
    }
}
