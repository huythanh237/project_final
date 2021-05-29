<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/login', [LoginController::class, 'show'])->name('auth.show');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/register', [RegisterController::class, 'ShowRegister'])->name('auth.Register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/thuong-hieu/{brand_id}', [HomeController::class, 'ProductBrand'])->name('product-brand');
Route::get('/product-detail/{product_id}', [HomeController::class, 'ProductDetail'])->name('product-detail');
Route::get('/danh-muc-san-pham/{category_id}', [HomeController::class, 'ShowCategory'])->name('hienthi');
Route::post('/tim-kiem', [HomeController::class, 'search']);
Route::get('/all-product', [HomeController::class, 'AllProduct'])->name('all-product');

Route::post('/add-cart', [HomeController::class, 'AddCart'])->name('add-cart');
Route::post('/update-quantity-cart', [HomeController::class, 'UpdateCart'])->name('update-quantity-cart');
Route::get('/show-cart', [HomeController::class, 'ShowCart'])->name('show-cart');
Route::get('/delete-cart/{rowId}', [HomeController::class, 'DeleteCart'])->name('delete-cart');

Route::get('/check-out', [HomeController::class, 'checkout']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
