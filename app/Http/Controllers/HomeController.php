<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }
    public function category(){
        $categories = Category::all();
        return view('manager.category', compact('categories'));
    }
    public function product(){
        $products = Product::with('categories')->paginate(4);
        return view('manager.product', compact('products'));
    }
    public function member(){
        $users = User::query()->paginate(5);
        return view('manager.member', compact('users'));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
    public function ShowFormCate(){
        return view('manager.show-category');
    }
    public function ShowFormProduct(){
        return view('manager.show-product');
    }
}
