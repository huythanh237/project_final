<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){

        $categories = Category::all();

        $brands = Brand::all();
        return view('auth.login', compact('categories', 'brands'));
    }

    public function login(Request $request){
        $this->validate($request,
        [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ],
        [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'password.required' => 'Vui lòng nhập password',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials, $request->has('remember'))){
            $request->session()->regenerate();

        return redirect()->intended('dashboard');
        }
        return  back()->withErrors([
            'email' => 'Tài khoản hoặc mật khẩu không chính xác'
        ]);
    }
}
