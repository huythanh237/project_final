<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::with('categories')->paginate(3);

        return view('layouts.index', compact('products'));
    }
    public function product(){
        return view('page.product');
    }
}
