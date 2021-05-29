<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Symfony\Component\Translation\Dumper\PoFileDumper;

class HomeController extends Controller
{
    public function about(){

        $categories = Category::query()->orderByDesc('category_id')->get();

        $brands = Brand::query()->orderByDesc('brand_id')->get();

        return view('layouts.about', compact('categories', 'brands'));
    }

    public function checkout(){
        $categories = Category::query()->orderByDesc('category_id')->get();

        $brands = Brand::query()->orderByDesc('brand_id')->get();

        return view('page.checkout', compact('categories', 'brands'));
    }
    public function index(){
        $products = Product::query()->orderByDesc('product_id')->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('layouts.index', compact('products', 'brands', 'categories'));
    }
    public function ProductDetail($product_id){
        $categories = Category::query()->orderByDesc('category_id')->get();

        $brands = Brand::query()->orderByDesc('brand_id')->get();

        $products = DB::table('products')->where('products.product_id','=', $product_id)->get();

        return view('page.product-detail', compact('products', 'categories', 'brands'));
    }
    public function ShowCategory($category_id){
        $categories = Category::all();

        $brands = Brand::query()->orderByDesc('brand_id')->get();

        $products = Product::query()->where('category_id', $category_id)->paginate(6);

        return view('page.category', compact('products','categories', 'brands'));
    }

    public function ProductBrand($brand_id){
        $categories = Category::all();

        $brands = Brand::query()->orderByDesc('brand_id')->get();

        $products = Product::query()->where('brand_id', $brand_id)->paginate(6);

        return view('page.product-brand', compact('products','categories', 'brands'));
    }

    public function search(Request $request){

        $keyword = $request->Search_Keyword;

        $search_products = Product::query()->where('product_name','like', '%'. $keyword . '%')->get();

        $categories = Category::query()->orderByDesc('category_id')->get();

        $brands = Brand::query()->orderByDesc('brand_id')->get();

        return view('page.search', compact('search_products', 'categories', 'brands'));
    }

    public function dashboard(){

        return view('layouts.dashboard');
    }

    public function AllProduct(){
        $products = Product::query()->orderByDesc('product_id')->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('page.product', compact('products', 'brands', 'categories'));
    }

    public function AddCart(Request $request){
        $productid = $request->productid_hidden;
        $quantity = $request->qty;
        $product_info = Product::query()->where('product_id', $productid)->first();

        $categories = Category::query()->orderByDesc('category_id')->get();

        $brands = Brand::query()->orderByDesc('brand_id')->get();

        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = $product_info->product_id;
        $data['options']['images'] = $product_info->product_images;
        Cart::add($data);
        return redirect('show-cart');
    }
    public function ShowCart(){
        $categories = Category::query()->orderByDesc('category_id')->get();

        $brands = Brand::query()->orderByDesc('brand_id')->get();

        return view('page.ShowCart', compact('categories', 'brands'));
    }

    public function DeleteCart($rowId){
        Cart::update($rowId,0);

        return redirect('show-cart');
    }

    public function UpdateCart(Request $request){
        $rowId = $request->rowId_Cart;
        $quantity = $request->cart_quantity;

        Cart::update($rowId, $quantity);

        return redirect('show-cart');
    }

    public function contact(){

        $categories = Category::all();
        $brands = Brand::all();

        return view('page.contact', compact('categories', 'brands'));
    }
}
