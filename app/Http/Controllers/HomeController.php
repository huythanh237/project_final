<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function member(){

        $users = User::query()->paginate(5);
        return view('member.index', compact('users'));
    }

    public function DeleteMember($id){
        $member = User::find($id);
        $member->delete();

        return redirect('/member');
    }

    public function category(){
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function ShowCreateCate(){

        return view('category.create');
    }

    public function CreateCate(Request $request){
        $this->validate($request,
            [
                'category_name' => 'required|unique:categories',
            ],
            [
                'category_name.required' => 'Vui lòng nhập danh mục sản phẩm',
                'category_name.unique' => 'Tên danh mục đã tồn tại'
            ]);
        $categories =  Category::query()->create($request->only('category_name'));

        return redirect()->route('category');
    }
    public function ShowEditCate($category_id){

        $category = Category::query()->where('categories.category_id', $category_id)->first();

        return view('category.edit', compact('category'));
    }

    public function EditCate(Request $request, $category_id){
        $data['category_name'] = $request->category_name;

        DB::table('categories')->where('category_id', $category_id)->update($data);

        return redirect()->route('category');
    }

    public function DeleteCate($category_id){
        DB::table('categories')->where('category_id', $category_id)->delete();

        return redirect('/category');
    }

    public function product(){

        $products = Product::query()->orderByDesc('products.product_id')->paginate(6);

        return view('product.index', compact('products'));
    }

    public function ShowCreatePro(){
        $categories = Category::all();

        $brands = Brand::all();
        return view('product.create', compact('categories', 'brands'));
    }

    public function CreatePro(Request $request){
        $this->validate($request,
            [
                'product_name' => 'required',
                'product_descrip' => 'required',
                'product_price' => 'required',
            ],
            [
                'product_name.required' => 'Vui lòng nhập danh mục sản phẩm',
                'product_descrip.required' => 'Vui lòng nhập mô tả sản phẩm',
                'product_price.required' => 'Vui lòng nhập giá sản phẩm'
            ]);

        if($file = $request->file('product_images')){
            $filename = date('YmdHis') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);

            $product = Product::query()->create([
                'product_name' => $request->input('product_name'),
                'product_descrip' => $request->input('product_descrip'),
                'product_price' => $request->input('product_price'),
                'category_id' => $request->input('category'),
                'brand_id' => $request->input('brand'),
                'product_images' => 'images/' . $filename
            ]);
        }

        return redirect('product');
    }

    public function ShowEditPro($product_id){

        $categories = Category::all();

        $brands = Brand::all();

        $product = Product::query()->where('product_id', $product_id)->get();

        return view('product.edit', compact('product', 'categories', 'brands'));
    }

    public function EditPro(Request $request, $product_id){
        $product = Product::query()->where('product_id', $product_id)->get();

        $data = array();

        $data['product_name'] = $request->product_name;
        $data['product_descrip'] = $request->product_descrip;
        $data['product_price'] = $request->product_price;
        $data['category_id'] = $request->category;
        $data['brand_id'] = $request->brand;

        $file = $request->file('product_images');
        if($file){
            $filename = date('YmdHis') .$file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['product_images'] = $filename;
            DB::table('products')->insert($data);
        }
        $data['product_images'] = '';
        Product::query()->update($data);
        return redirect('product');
    }

    public function DeletePro($product_id){
        DB::table('products')->where('product_id', $product_id)->delete();
        return redirect('/product');
    }
}
