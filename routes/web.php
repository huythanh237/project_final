<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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


Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('show');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');

Route::resource('posts', PostController::class);

Route::middleware(['auth'])->group(function (){
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.index');
    Route::get('/create-category', [HomeController::class, 'ShowFormCate'])->name('form-create-category');
    Route::post('/create-category', [HomeController::class, 'CreateCate'])->name('create-category');
    Route::get('/category', [HomeController::class, 'category'])->name('category');
    Route::get('/create-product', [HomeController::class, 'ShowFormProduct'])->name('form-create-product');
    Route::post('/create-product', [HomeController::class, 'CreateProduct'])->name('create-product');
    Route::get('/product', [HomeController::class, 'product'])->name('product');
    Route::get('/member', [HomeController::class, 'member'])->name('member');
});


