<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister(){
        $categories = Category::all();

        $brands = Brand::all();
        return view('auth.register', compact('categories', 'brands'));
    }

    public function register(Request $request){

    }
}
